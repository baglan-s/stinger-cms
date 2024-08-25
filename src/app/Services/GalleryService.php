<?php

namespace App\Services;

use App\Services\Service;
use App\Repositories\GalleryRepository;

class GalleryService extends Service
{
    public function __construct(
        protected GalleryRepository $repository,
    ) {}

    public function getMainSlider()
    {
        return $this->repository->model()
            ->where('sort', 1)
            ->first();
    }
}