<?php

namespace App\Services\Integration;

use Illuminate\Support\Facades\Http;
use App\Services\Service;
use App\Services\LogService;

class OneCApiService extends Service
{
    public function __construct(
        protected string $host,
        protected string $login,
        protected string $password,
        protected LogService $logService
    ) {}

    public function categories(): array
    {
        try {
            $response = Http::withBasicAuth($this->login, $this->password)
            ->get("{$this->host}/TEST/hs/excsite/GetSyncGoods?group=True");

            if (!$response->successful()) {
                $this->logService
                    ->log('1C Categories API error', '1c', $response->body())
                    ->write();

                return [];
            }

            return $response->json();
        } catch (\Exception $e) {
            $this->logService
                ->log('1C Categories API error', '1c', $e)
                ->write();

            return [];
        }
    }

    public function brands(): array
    {
        try {
            $response = Http::withBasicAuth($this->login, $this->password)
                ->get("{$this->host}/TEST/hs/excsite/GetBrends");

            if (!$response->successful()) {
                $this->logService
                    ->log('1C Brands API error', '1c', $response->body())
                    ->write();

                return [];
            }

            return $response->json();
        } catch (\Exception $e) {
            $this->logService
                ->log('1C Brands API error', '1c', $e)
                ->write();

            return [];
        }
    }

    public function paymentTypes(): array
    {
        try {
            $response = Http::withBasicAuth($this->login, $this->password)
                ->get("{$this->host}/TEST/hs/excsite/GetTypesOfPayments");

            if (!$response->successful()) {
                $this->logService
                    ->log('1C PaymentTypes API error', '1c', $response->body())
                    ->write();

                return [];
            }

            return $response->json();
        } catch (\Exception $e) {
            $this->logService
                ->log('1C PaymentTypes API error', '1c', $e)
                ->write();

            return [];
        }
    }

    public function orderStatuses(): array
    {
        try {
            $response = Http::withBasicAuth($this->login, $this->password)
                ->get("{$this->host}/TEST/hs/excsite/GetStatuses");

            if (!$response->successful()) {
                $this->logService
                    ->log('1C OrderStatuses API error', '1c', $response->body())
                    ->write();

                return [];
            }

            return $response->json();
        } catch (\Exception $e) {
            $this->logService
                ->log('1C OrderStatuses API error', '1c', $e)
                ->write();

            return [];
        }
    }

    public function cities(array $cityIds = [], array $storeIds = []): array
    {
        try {
            $response = Http::withBasicAuth($this->login, $this->password)
                ->post("{$this->host}/TEST/hs/excsite/PostCities", [
                    'cityIds' => $cityIds,
                    'storeIds' => $storeIds,
                ]);

            if (!$response->successful()) {
                $this->logService
                    ->log('1C Cities API error', '1c', $response->body())
                    ->write();

                return [];
            }

            return $response->json();
        } catch (\Exception $e) {
            $this->logService
                ->log('1C Cities API error', '1c', $e)
                ->write();

            return [];
        }
    }

    public function products(string $id = null): array
    {
        try {
            $data = $id ? ['id' => $id] : [];
            $response = Http::withBasicAuth($this->login, $this->password)
                ->get("{$this->host}/TEST/hs/excsite/GetSyncGoods", $data);

            if (!$response->successful()) {
                $this->logService
                    ->log('1C Products API error', '1c', $response->body())
                    ->write();

                return [];
            }

            return $response->json();
        } catch (\Exception $e) {
            $this->logService
                ->log('1C Products API error', '1c', $e)
                ->write();

            return [];
        }
    }

    public function stocks(array $storeIds = [], array $productIds = []): array
    {
        try {
            $response = Http::withBasicAuth($this->login, $this->password)
                ->post("{$this->host}/TEST/hs/excsite/PostStock", [
                    'productIds' => $productIds,
                    'storeIds' => $storeIds,
                ]);

            if (!$response->successful()) {
                $this->logService
                    ->log('1C Stocks API error', '1c', $response->body())
                    ->write();

                return [];
            }

            return $response->json();
        } catch (\Exception $e) {
            $this->logService
                ->log('1C Stocks API error', '1c', $e)
                ->write();

            return [];
        }
    }

    public function prices(array $priceIds = [], array $productIds = []): array
    {
        try {
            $response = Http::withBasicAuth($this->login, $this->password)
                ->post("{$this->host}/TEST/hs/excsite/PostPrices", [
                    'productIds' => $productIds,
                    'priceIds' => $priceIds,
                ]);

            if (!$response->successful()) {
                $this->logService
                    ->log('1C Prices API error', '1c', $response->body())
                    ->write();

                return [];
            }

            return $response->json();
        } catch (\Exception $e) {
            $this->logService
                ->log('1C Prices API error', '1c', $e)
                ->write();

            return [];
        }
    }

    public function createOrder(array $order): array
    {
        try {
            $response = Http::withBasicAuth($this->login, $this->password)
                ->post("{$this->host}/TEST/hs/excsite/PostCreateOrder", ['order' => $order]);

            if (!$response->successful()) {
                $this->logService
                    ->log('1C Order API error', '1c', $response->body())
                    ->write();

                return [];
            }

            $this->logService
                ->log('1C Order created.', '1c', json_encode($response->json()))
                ->write();

            return $response->json();
        } catch (\Exception $e) {
            $this->logService
                ->log('1C Order API error', '1c', $e)
                ->write();

            return [];
        }
    }
}