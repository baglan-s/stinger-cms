<?php

namespace App\Livewire;

use Livewire\Component;
use App\Services\CityService;
use Illuminate\Support\Facades\Cookie;

class CityListMobile extends Component
{
    public $currentCity;

    private $cityService;

    public function __construct()
    {
        $this->cityService = app(CityService::class);
    }

    public function mount()
    {
        $this->setCurrentCity();
    }

    public function render()
    {
        $cities = $this->cityService->getRepository()
            ->getActive();

        return view('livewire.city-list-mobile', compact('cities'));
    }

    public function selectCity($cityId)
    {
        Cookie::queue('city_id', $cityId, 43200);
        $this->setCurrentCity();
    }

    public function setCurrentCity()
    {
        $this->currentCity = $this->cityService->getRepository()
            ->model()
            ->find(Cookie::get('city_id', 1));
    }
}
