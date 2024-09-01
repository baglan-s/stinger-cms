<?php

namespace App\Livewire\Catalog;

use Livewire\Component;
use App\Models\Catalog\Product;

class ProductPreview extends Component
{
    public Product $product;

    public array $class;

    public function mount(Product $product, array $class = [])
    {
        $this->product = $product;
        $this->class = $class;
    }

    public function render()
    {
        return view('livewire.catalog.product-preview');
    }
}
