<?php

namespace App\Livewire\Catalog;

use Livewire\Component;

class ProductSort extends Component
{
    public string $order;

    public array $selectedOrder;

    public array $orderOptions = [];

    public function mount(string $order)
    {
        $this->orderOptions = $this->getOrderOptions();
        $this->setOrder($order);
    }

    public function render()
    {
        return view('livewire.catalog.product-sort');
    }

    public function setOrder(string $order)
    {
        $this->order = $order;
        $this->selectedOrder = $this->orderOptions[array_search($order, array_column($this->orderOptions, 'code'))] ?? [];
        $this->dispatch('orderSet', $this->order);
    }

    public function getOrderOptions(): array
    {
        return [
            [
                'name' => 'Сначала популярные',
                'code' => 'popular',
            ],
            [
                'name' => 'Сначала новые',
                'code' => 'novelty',
            ],
            [
                'name' => 'По возрастанию цены',
                'code' => 'price_up',
            ],
            [
                'name' => 'По убыванию цены',
                'code' => 'price_down',
            ]
        ];
    }
}
