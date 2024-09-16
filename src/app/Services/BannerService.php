<?php

namespace App\Services;

use App\Services\Service;
use App\Repositories\BannerRepository;

class BannerService extends Service
{
    public function __construct(
        protected BannerRepository $repository,
    ) {}

    public function getMainBanner()
    {
        return $this->repository->model()
            ->where('sort', 1)
            ->first();
    }
}