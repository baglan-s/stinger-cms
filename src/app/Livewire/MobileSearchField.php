<?php

namespace App\Livewire;

use Livewire\Component;

class MobileSearchField extends Component
{
    public $search = '';

    public function mount()
    {
        $this->search = request('search', '');
    }

    public function render()
    {
        return view('livewire.mobile-search-field');
    }

    public function updatedSearch()
    {
        if (trim($this->search) === '') {
            return false;
        }

        $this->dispatch('searchUpdated', trim($this->search));
    }
}
