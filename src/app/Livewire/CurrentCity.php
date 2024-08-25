<?php

namespace App\Livewire;

use Livewire\Component;
use App\Services\CityService;
use Illuminate\Support\Facades\Cookie;

class CurrentCity extends Component
{
    protected $listeners = ['cityChanged' => 'setCurrentCity'];

    public $currentCity;

    private $cityService;

    public function __construct()
    {
        $this->cityService = app(CityService::class);
    }

    public function mount()
    {
        $this->setCurrentCity(Cookie::get('city_id', 1));
    }

    public function render()
    {
        return view('livewire.current-city');
    }

    public function setCurrentCity($cityId)
    {
        $this->currentCity = $this->cityService->getRepository()
            ->model()
            ->find($cityId);
    }
}
