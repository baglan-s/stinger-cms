<?php

namespace App\Services;

use App\Services\Service;
use App\Services\LogService;
use App\Repositories\ProductRepository;
use App\Repositories\LanguageRepository;
use App\Repositories\ProductCategoryRepository;
use App\Repositories\BrandRepository;
use App\Repositories\PriceTypeRepository;
use App\Repositories\StoreRepository;
use App\Helpers\Adapters\ProductAdapter;

class ProductService extends Service
{
    public function __construct(
        protected ProductRepository $repository,
        protected LanguageRepository $languageRepository,
        protected ProductCategoryRepository $productCategoryRepository,
        protected BrandRepository $brandRepository,
        protected StoreRepository $storeRepository,
        protected PriceTypeRepository $priceTypeRepository,
        protected LogService $logService
    ) {}

    /**
     * Takes brands from 1C and creates or updates it in DB.
     *
     * @param array $brands
     * @return void
     */
    public function syncProductsWithOneC(array $products)
    {
        try {
            $dbProducts = $this->repository->all();
            $synchronized = 0;
            $defaultLanguage = $this->languageRepository->getByCode(config('app.locale'));
            $productCategories = $this->productCategoryRepository->model()
                ->select(['id', 'guid'])
                ->get();
            $brands = $this->brandRepository->model()
                ->select(['id', 'guid'])
                ->get();

            foreach ($products as $productItem) {
                $product = $productItem['product'] ?? $productItem;
                $existedProduct = $dbProducts->where('guid', $product['guid'])->first();
                $brand = $brands->where('guid', $product['brend']['guid'])->first() ?? $this->brandRepository->model();
                $productCategory = $productCategories->where('guid', $product['parent']['guid'])->first() ?? $this->productCategoryRepository->model();
                
                if ($product['markdown'] && isset($product['mainproduct']) && $product['mainproduct']['guid']) {
                    $parentProduct = $dbProducts->where('guid', $product['mainproduct']['guid'])->first();

                    if (!$parentProduct) {
                        $productByGuid = $this->findProductByGuid($product['mainproduct']['guid'], $products);

                        if ($productByGuid) {
                            $parentProductCategory = $productCategories->where('guid', $productByGuid['parent']['guid'])->first() ?? $this->productCategoryRepository->model();
                            $parentProductBrand = $brands->where('guid', $product['brend']['guid'])->first() ?? $this->brandRepository->model();
                            $parentProduct = $this->repository->create(ProductAdapter::adaptOneCProduct(
                                $productByGuid, 
                                $parentProductCategory,
                                $parentProductBrand,
                                $this->repository->model()
                            ));
                            $parentProduct->translations()->create(ProductAdapter::adaptOneCProductTranslation(
                                $productByGuid, 
                                $defaultLanguage->id, 
                            ));
                            $dbProducts->push($parentProduct);

                            if ($parentProductBrand->id && $parentProductCategory->id && $parentProductCategory->brands()->where('brands.id', $parentProductBrand->id)->count() === 0) {
                                $parentProductCategory->brands()->attach($parentProductBrand->id);
                            }
                        }
                    }
                }
                
                if (!$existedProduct) {
                    $existedProduct = $this->repository->model()
                        ->create(ProductAdapter::adaptOneCProduct(
                            $product, 
                            $productCategory, 
                            $brand, 
                            $parentProduct ?? $this->repository->model()
                        ));
                    $existedProduct->translations()->create(ProductAdapter::adaptOneCProductTranslation(
                        $product, 
                        $defaultLanguage->id,
                    ));
                    $dbProducts->push($existedProduct);
                } else {
                    $existedProduct->update(ProductAdapter::adaptOneCProduct(
                        $product, 
                        $productCategory, 
                        $brand, 
                        $parentProduct ?? $this->repository->model()
                    ));
                    $existedProduct->translations()->where('language_id', $defaultLanguage->id)->update(ProductAdapter::adaptOneCProductTranslation(
                        $product, 
                        $defaultLanguage->id,
                    ));
                }

                if ($brand->id && $productCategory->id && $productCategory->brands()->where('brands.id', $brand->id)->count() === 0) {
                    $productCategory->brands()->attach($brand->id);
                }

                $synchronized++;
            }

            $this->logService
                ->log('Products synchronization', '1c', "Products synchronized: $synchronized")
                ->write();
        } catch (\Exception $e) {
            $this->logService
                ->log('Products synchronization error', '1c', $e)
                ->write();
        }
    }

    public function findProductByGuid(string $guid, iterable $products): array
    {
        $result = [];

        foreach ($products as $productItem) {
            $product = $productItem['product'] ?? $productItem;

            if ($product['guid'] === $guid) {
                $result = $product;

                break;
            }
        }

        return $result;
    }

    public function syncProductStocksWithOneC(array $stocks)
    {
        try {
            $synchronized = 0;
            $dbProducts = $this->repository->all();
            $dbStores = $this->storeRepository->all();

            foreach ($stocks as $stock) {
                $dbProduct = $dbProducts->where('guid', $stock['guid'])->first();

                if ($dbProduct) {
                    foreach ($stock['stores'] as $store) {
                        $dbStore = $dbStores->where('guid', $store['guid'])->first();

                        if ($dbStore) {
                            $createdStock = $dbProduct->stocks()->firstOrCreate([
                                'store_id' => $dbStore->id,
                            ]);
                            $createdStock->update([
                                'available' => $store['available'],
                            ]);
                        }
                    }

                    $synchronized++;
                }
            }

            $this->logService
                ->log('Product stocks synchronization', '1c', "Stocks synchronized: $synchronized")
                ->write();
        } catch (\Exception $e) {
            $this->logService
                ->log('Product stocks synchronization error', '1c', $e)
                ->write();
        }
    }

    public function syncProductPricesWithOneC(array $prices)
    {
        try {
            $synchronized = 0;
            $dbProducts = $this->repository->all();

            foreach ($prices as $price) {
                $dbProduct = $dbProducts->where('guid', $price['guid'])->first();

                if ($dbProduct) {
                    foreach ($price['prices'] as $priceData) {
                        $priceType = $this->priceTypeRepository->firstOrCreate(
                            $priceData['name'],
                            $priceData['guid'],
                            $priceData['id'] ?? null
                        );

                        if ($priceType) {
                            $createdPrice = $dbProduct->prices()->firstOrCreate([
                                'price_type_id' => $priceType->id,
                            ]);
                            $createdPrice->update([
                                'price' => $priceData['cost'],
                            ]);
                        }
                    }

                    $synchronized++;
                }
            }

            $this->logService
                ->log('Product prices synchronization', '1c', "Prices synchronized: $synchronized")
                ->write();
        } catch (\Exception $e) {
            $this->logService
                ->log('Product prices synchronization error', '1c', $e)
                ->write();
        }
    }
}