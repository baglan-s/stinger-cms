<?php

namespace App\Livewire;

use Livewire\Component;
use App\Services\CityService;
use Illuminate\Support\Facades\Cookie;

class CityList extends Component
{
    public $currentCityId;

    public function __construct() {}

    public function mount()
    {
        $this->currentCityId = Cookie::get('city_id', 1);
    }

    public function render()
    {
        $cities = app(CityService::class)->getRepository()
            ->getActive();

        return view('livewire.city-list', compact('cities'));
    }

    public function selectCity($cityId)
    {
        $this->currentCityId = $cityId;
        $this->dispatch('cityChanged', $cityId);
        Cookie::queue('city_id', $this->currentCityId, 43200);
    }
}
