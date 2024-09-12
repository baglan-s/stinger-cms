<?php

namespace App\Services;

use App\Services\Service;
use App\Repositories\MenuRepository;
use App\Repositories\MenuTypeRepository;

class MenuService extends Service
{
    public function __construct(
        protected MenuRepository $repository,
        protected MenuTypeRepository $menuTypeRepository
    ) {}

    public function getByTypeCode(string $typeCode)
    {
        return $this->repository->model()
            ->whereNull('parent_id')
            ->with(['children'])
            ->whereHas('type', function ($query) use ($typeCode) {
                $query->where('code', $typeCode);
            })
            ->get();
    }
}