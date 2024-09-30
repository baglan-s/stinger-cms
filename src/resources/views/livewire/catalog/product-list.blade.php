<main class="catalog-category__products">
    <h1>Каталог
        <span>{{ $products->count() }}</span>
    </h1>
    <livewire:catalog.product-sort :order="$filter['order'] ?? 'popular'" />

    <div class="catalog-products__list">

        @forelse ($products as $product)
            <livewire:catalog.product-preview :product="$product" wire:key="{{ $product->id }}">
        @empty
    
        @endforelse                                                       
    </div>

    <div class="catalog-product__pagination">
        {{-- <button class="base-button">
            <span>Показать еще</span>
            <svg viewBox="0 0 24.00 24.00" xmlns="http://www.w3.org/2000/svg" stroke="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"  stroke-width="0.288"></g><g id="SVGRepo_iconCarrier"> <path d="M7 17L17 7M17 7H8M17 7V16"  stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
        </button> --}}
        {{ $products->withQueryString()->links() }}
    </div>

</main>