<?php

namespace App\Livewire;

use Livewire\Component;
use App\Services\CityService;
use Illuminate\Support\Facades\Cookie;

class CityList extends Component
{
    public $currentCityId;

    private $cityService;

    protected $listeners = [
        'cityApproved' => 'selectCity'
    ];

    public function __construct() 
    {
        $this->cityService = app(CityService::class);
    }

    public function mount()
    {
        $this->currentCityId = Cookie::get('city_id', 1);
    }

    public function render()
    {
        $cities = $this->cityService->getRepository()
            ->getActive();

        return view('livewire.city-list', compact('cities'));
    }

    public function selectCity($cityId)
    {
        $city = $this->cityService->getRepository()->find($cityId);
        $this->currentCityId = $city->id;
        $this->dispatch('cityChanged', $city->id);
        Cookie::queue('city_id', $this->currentCityId, 43200);
        Cookie::queue(
            'price_type_id', 
            $city->price_type_id ?? config('price_types.region', 3),  
            43200
        );
        $this->js('window.location.reload()');
    }
}
