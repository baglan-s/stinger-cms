<?php

namespace App\Services;

use App\Services\Service;
use App\Services\LogService;
use App\Repositories\DeliveryAddressRepository;
use App\Http\Requests\Catalog\DeliveryAddressCreateRequest;
use App\Http\Requests\Catalog\DeliveryAddressUpdateRequest;

class DeliveryAddressService extends Service
{
    public function __construct(
        protected DeliveryAddressRepository $repository,
        protected LogService $logService
    ) {}

    /**
     * Create a new delivery address
     *
     * @param DeliveryAddressCreateRequest $request
     * @return mixed
     * @throws \Exception
     */
    public function createAddress(DeliveryAddressCreateRequest $request)
    {
        try {
            $data = $request->validated();
            $data['user_id'] = $request->user()->id;

            return $this->repository->create($data);
        } catch (\Exception $e) {
            $this->logService
                ->log('Error creating delivery address', 'single', $e)
                ->write();

            throw $e;
        }
    }

    /**
     * Update an existing delivery address
     *
     * @param DeliveryAddressUpdateRequest $request
     * @param int $id
     * @throws \Exception
     * @return mixed
     */
     
    public function updateAddress(DeliveryAddressUpdateRequest $request, int $id)
    {
        try {
            $this->repository->update($id, $request->validated());

            return $this->repository->find($id);
        } catch (\Exception $e) {
            $this->logService
                ->log('Error updating delivery address', 'single', $e)
                ->write();

            throw $e;
        }
    }

    /**
     * Delete a delivery address
     *
     * @param int $id
     * @throws \Exception
     * 
     */

    public function deleteAddress(int $id)
    {
        try {
            $this->repository->delete($id);
        } catch (\Exception $e) {
            $this->logService
                ->log('Error deleting delivery address', 'single', $e)
                ->write();

            throw $e;
        }
    }
}