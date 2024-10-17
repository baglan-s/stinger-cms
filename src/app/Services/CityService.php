<?php

namespace App\Services;

use App\Services\Service;
use App\Services\LogService;
use App\Services\StoreService;
use App\Repositories\CityRepository;
use App\Repositories\StoreRepository;
use App\Repositories\LanguageRepository;
use App\Repositories\PriceTypeRepository;
use App\Helpers\Adapters\CityAdapter;

class CityService extends Service
{
    public function __construct(
        protected CityRepository $repository,
        protected StoreRepository $storeRepository,
        protected LanguageRepository $languageRepository,
        protected PriceTypeRepository $priceTypeRepository,
        protected StoreService $storeService,
        protected LogService $logService
    ) {}

    /**
     * Takes brands from 1C and creates or updates it in DB.
     *
     * @param array $brands
     * @return void
     */
    public function syncCitiesWithOneC(array $cities)
    {
        try {
            // $defaultLanguage = $this->languageRepository->getByCode(config('app.locale'));
            $languages = $this->languageRepository->model()->where('active', true)->get();
            $synchronized = 0;

            foreach ($cities as $city) {
                $cityData = $city['city'] ?? $city;

                if (isset($cityData['price'])) {
                    $priceType = $this->priceTypeRepository->firstOrCreate(
                        $cityData['price']['name'],
                        $cityData['price']['guid'],
                        $cityData['price']['id'] ?? null
                    );
                }

                $existedCity = $this->repository->model()
                    ->where('guid', $cityData['guid'])
                    ->orWhereHas('translations', function ($query) use ($cityData) {
                        $query->where('name', $cityData['name']);
                    })
                    ->first();
                
                if (!$existedCity) {
                    $existedCity = $this->repository->create(CityAdapter::adaptOneCCity($cityData, $priceType));
                    
                    foreach ($languages as $language) {
                        $existedCity->translations()->create(CityAdapter::adaptOneCCityTranslation($cityData, $language->id));
                    }
                } else {
                    $existedCity->update([
                        'guid' => $cityData['guid'],
                        'id_1c' => $cityData['id'],
                        'price_type_id' => $priceType->id ?? null,
                    ]);
                }

                $synchronized++;

                // Sync stores with this city
                $this->storeService->syncCityStoresWithOneC($cityData['stores'], $existedCity);
            }

            $this->logService
                ->log('City synchronization', '1c', "Cities synchronized: $synchronized")
                ->write();
        } catch (\Exception $e) {
            $this->logService
                ->log('City synchronization error', '1c', $e)
                ->write();
        }
    }
}