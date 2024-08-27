<?php

namespace App\Services;

use App\Services\Service;
use App\Repositories\VideoReviewRepository;

class VideoReviewService extends Service
{
    public function __construct(
        protected VideoReviewRepository $repository,
    ) {}

    public function getActive()
    {
        return $this->repository->model()
            ->scopeActive()
            ->get();
    }
}