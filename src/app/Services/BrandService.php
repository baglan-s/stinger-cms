<?php

namespace App\Services;

use App\Services\Service;
use App\Services\LogService;
use App\Repositories\BrandRepository;
use App\Repositories\LanguageRepository;
use App\Helpers\Adapters\BrandAdapter;

class BrandService extends Service
{
    public function __construct(
        protected BrandRepository $repository,
        protected LanguageRepository $languageRepository,
        protected LogService $logService
    ) {}

    /**
     * Takes brands from 1C and creates or updates it in DB.
     *
     * @param array $brands
     * @return void
     */
    public function syncBrandsWithOneC(array $brands)
    {
        try {
            $dbBrands = $this->repository->all();
            $synchronized = 0;
            $defaultLanguage = $this->languageRepository->getByCode(config('app.locale'));
            $languages = $this->languageRepository->model()->where('active', true)->get();

            foreach ($brands as $brand) {
                $existedBrand = $dbBrands->where('guid', $brand['guid'])->first();

                if (!$existedBrand) {
                    $existedBrand = $this->repository->create(BrandAdapter::adaptOneCBrand($brand));
                    
                    foreach ($languages as $language) {
                        $existedBrand->translations()->create(
                            BrandAdapter::adaptOneCBrandTranslation($brand, $language->id)
                        );
                    }

                    $dbBrands->push($existedBrand);
                } else {
                    $existedBrand->update(BrandAdapter::adaptOneCBrand($brand));
                    // $existedBrand->translations()->where('language_id', $defaultLanguage->id)->update(
                    //     BrandAdapter::adaptOneCBrandTranslation($brand, $defaultLanguage->id)
                    // );
                }

                $synchronized++;
            }

            $this->logService
                ->log('Brand synchronization', '1c', "Brands synchronized: $synchronized")
                ->write();
        } catch (\Exception $e) {
            $this->logService
                ->log('Brand synchronization error', '1c', $e)
                ->write();
        }
    }
}