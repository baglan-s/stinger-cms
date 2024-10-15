<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Catalog\City;
use Illuminate\Support\Facades\Cookie;

class CityPrompt extends Component
{
    public int|string|null $cityId = null;

    public bool $show = false;

    public City $city;

    public function mount()
    {
        $this->cityId = Cookie::get('city_id', null);
        $this->city = $this->cityId ? City::find($this->cityId) : City::first();
        $this->show = $this->cityId ? false : true;
    }

    public function render()
    {
        return view('livewire.city-prompt');
    }

    public function approve()
    {
        $this->cityId = $this->city->id ?? 1;
        $this->dispatch('cityApproved', $this->cityId);
        $this->show = false;
    }

    public function cancel()
    {
        $this->show = false;
        $this->js("$('#chooseCity').modal('show')");
    }
}
