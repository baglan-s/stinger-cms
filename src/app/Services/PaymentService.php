<?php

namespace App\Services;

use App\Services\Service;
use App\Services\LogService;
use App\Repositories\PaymentTypeRepository;
use App\Repositories\LanguageRepository;
use App\Helpers\Adapters\PaymentTypeAdapter;

class PaymentService extends Service
{
    public function __construct(
        protected PaymentTypeRepository $paymentTypeRepository,
        protected LanguageRepository $languageRepository,
        protected LogService $logService
    ) {}

    /**
     * Takes payment types from 1C and creates or updates it in DB.
     *
     * @param array $types
     * @return void
     */
    public function syncPaymentTypesWithOneC(array $types)
    {
        try {
            $dbTypes = $this->paymentTypeRepository->all();
            $synchronized = 0;
            $defaultLanguage = $this->languageRepository->getByCode(config('app.locale'));

            foreach ($types as $type) {
                $existedType = $dbTypes->where('guid', $type['guid'])->first();

                if (!$existedType) {
                    $existedType = $this->paymentTypeRepository->create(PaymentTypeAdapter::adaptOneCPaymentType($type));
                    $existedType->translations()->create(
                        PaymentTypeAdapter::adaptOneCPaymentTypeTranslation($type, $defaultLanguage->id)
                    );
                    $dbTypes->push($existedType);
                } else {
                    $existedType->update(PaymentTypeAdapter::adaptOneCPaymentType($type));
                    $existedType->translations()->where('language_id', $defaultLanguage->id)->update(
                        PaymentTypeAdapter::adaptOneCPaymentTypeTranslation($type, $defaultLanguage->id)
                    );
                }

                $synchronized++;
            }

            $this->logService
                ->log('PaymentType synchronization', '1c', "PaymentTypes synchronized: $synchronized")
                ->write();
        } catch (\Exception $e) {
            $this->logService
                ->log('PaymentType synchronization error', '1c', $e)
                ->write();
        }
    }
}