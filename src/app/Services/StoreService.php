<?php

namespace App\Services;

use App\Services\Service;
use App\Services\LogService;
use App\Models\Catalog\City;
use App\Repositories\StoreRepository;
use App\Repositories\LanguageRepository;
use App\Helpers\Adapters\StoreAdapter;

class StoreService extends Service
{
    public function __construct(
        protected StoreRepository $repository,
        protected LanguageRepository $languageRepository,
        protected LogService $logService
    ) {}

    /**
     * Takes brands from 1C and creates or updates it in DB.
     *
     * @param array $brands
     * @return void
     */
    public function syncCityStoresWithOneC(array $stores, City $city)
    {
        try {
            $defaultLanguage = $this->languageRepository->getByCode(config('app.locale'));
            $synchronized = 0;

            foreach ($stores as $store) {
                $existedStore = $this->repository->model()
                    ->where('guid', $store['guid'])
                    ->orWhereHas('translations', function ($query) use ($store) {
                        $query->where('name', $store['name']);
                    })
                    ->first();

                if (!$existedStore) {
                    $existedStore = $this->repository->create(StoreAdapter::adaptOneCStore($store, $city));
                    $existedStore->translations()->create(StoreAdapter::adaptOneCStoreTranslation($store, $defaultLanguage->id));
                } else {
                    $existedStore->update([
                        'guid' => $store['guid'],
                        'id_1c' => $store['id'],
                    ]);
                }
            }

            $synchronized++;

            $this->logService
                ->log('Store synchronization', '1c', "{$city->id}: Stores synchronized: $synchronized")
                ->write();
        } catch (\Exception $e) {
            $this->logService
                ->log('Store synchronization error', '1c', $e)
                ->write();
        }
    }
}