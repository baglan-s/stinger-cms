<?php

namespace App\Services;

use App\Services\Service;
use App\Repositories\ProductCategoryRepository;
use App\Repositories\LanguageRepository;
use App\Services\LogService;
use App\Helpers\Adapters\ProductCategoryAdapter;

class ProductCategoryService extends Service
{
    public function __construct(
        protected ProductCategoryRepository $repository,
        protected LanguageRepository $languageRepository,
        protected LogService $logService
    ) {}

    /**
     * Takes product categories from 1C and creates or updates it in DB.
     *
     * @param array $categories
     * @return void
     */
    public function syncCategoriesWithOneC(array $categories)
    {
        try {
            $productCategories = $this->repository->all();
            $synchronized = 0;
            $defaultLanguage = $this->languageRepository->getByCode(config('app.locale'));
            $languages = $this->languageRepository->model()->where('active', true)->get();

            foreach ($categories as $category) {
                // Parent category synchronization
                $existedParentCategory = null;

                if (isset($category['parentGuid']) && $category['parentGuid'] != '') {
                    $existedParentCategory = $productCategories->where('guid', $category['parentGuid'])->first();

                    if (!$existedParentCategory) {
                        $parentCategory = array_values(array_filter($categories, function ($item) use ($category) {
                            return $item['groupGuid'] === $category['parentGuid'];
                        }))[0] ?? [];

                        if (!empty($parentCategory)) {
                            $parentCategory['languageId'] = $defaultLanguage->id;
                            $existedParentCategory = $this->repository->create(
                                ProductCategoryAdapter::adaptOneCCategory($parentCategory)
                            );

                            foreach ($languages as $language) {
                                $existedParentCategory->translations()->create(
                                    ProductCategoryAdapter::adaptOneCCategoryTranslation($parentCategory, $language->id)
                                );
                            }

                            $productCategories->push($existedParentCategory);
                        }
                    }
                }

                $category['parentId'] = $existedParentCategory['id'] ?? null;
                $category['languageId'] = $defaultLanguage->id;

                // Current category synchronization
                $existedCategory = $productCategories->where('guid', $category['groupGuid'])->first();

                if (!$existedCategory) {
                    $existedCategory = $this->repository->create(
                        ProductCategoryAdapter::adaptOneCCategory($category)
                    );
                    
                    foreach ($languages as $language) {
                        $existedCategory->translations()->create(
                            ProductCategoryAdapter::adaptOneCCategoryTranslation($category, $language->id)
                        );
                    }

                    $productCategories->push($existedCategory);
                } else {
                    $existedCategory->update(
                        ProductCategoryAdapter::adaptOneCCategory($category)
                    );
                    // $existedCategory->translations()->where('language_id', $defaultLanguage->id)->update(
                    //     ProductCategoryAdapter::adaptOneCCategoryTranslation($category, $defaultLanguage->id)
                    // );
                }

                $synchronized++;
            }

            $this->logService
                ->log('Product Category synchronization', '1c', "Categories synchronized: $synchronized")
                ->write();
        } catch (\Exception $e) {
            $this->logService
                ->log('Product Category synchronization error', '1c', $e)
                ->write();
        }
    }
}