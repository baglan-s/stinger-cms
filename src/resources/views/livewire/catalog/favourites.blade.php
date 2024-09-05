<div class="l-container">
    <div class="favorites-page__inner">
      <div class="favorites-page__header">
        <h1 class="favorites-page__title page-title">
          Избранное
          <span class="page-title__number">{{ $products->count() }}</span>
        </h1>
        @if ($products->count())
            <div class="favorites-page__clear outline" wire:click="clearFavourites" style="cursor: pointer">
                <svg
                xmlns="http://www.w3.org/2000/svg"
                class="svg-icon svg-icon--close svg-icon--24"
                >
                    <path
                        d="M4.3 18.3a1 1 0 1 0 1.4 1.4l6.3-6.29 6.3 6.3a1 1 0 0 0 1.4-1.42L13.42 12l6.3-6.3a1 1 0 0 0-1.42-1.4L12 10.58l-6.3-6.3a1 1 0 0 0-1.4 1.42L10.58 12l-6.3 6.3Z"
                    />
                </svg>
    
                Очистить
                <span class="mobile-hidden">&nbsp;список</span>
            </div>
        @endif
      </div>
      @if ($products->count())
        <div class="favorites-page__list">
            @foreach ($products as $product)
                <livewire:catalog.product-preview :product="$product">
            @endforeach
        </div>
      @else
        <div class="favorites-page__list d-flex flex-column align-items-center">
            <div class="product-empty">
                <div class="product-empty__image">
                  <img src="{{ asset('assets/images/empty.svg') }}" alt="image">
                </div>
                <div class="product-empty__title">
                  Ничего не найдено!
                </div>
                <div class="product-empty__text">
                  Добавьте один или несколько товаров в избранное
                </div>
              </div>
            </div>
        </div>
      @endif
    </div>
</div>