<div class="header-controls__item">
  <div
    class="hc-item-favorite-control control-item outline {{ $hasComparison ? 'is-active' : '' }}"
    wire:click="toComparison">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="hc-control-item__icon">
      <path fill-rule="evenodd" clip-rule="evenodd" d="M22 4H0v22h4a4 4 0 0 0 8 0h8a4 4 0 0 0 8 0h4V16a6 6 0 0 0-6-6h-4V4Zm0 10v4h6v-4h-6Z" />
    </svg>
    <span class="hc-control-item__name">Сравнение</span>
    @if ($hasComparison)
    <span class="hc-control-item__number">{{ $comparisonProductsCount }}</span>

    <div class="hc-control-item__dropdown mobile-hiddens">
      <div class="favorites-dropdown">
        <div class="favorites-dropdown__wrapper">
          <div class="favorites-dropdown__body">
            <div class="header-favorites-product">
              @foreach ($products as $product)
              <a
                href="#"
                class="header-favorites-product__link"><img
                  alt=""
                  src="{{ $product->getDefaultImage() }}"
                  class="header-favorites-product__img" />
                <div class="header-favorites-product__title">{{ $product->translation()?->name }}</div>
                <div class="header-favorites-product-price">
                  1 000&nbsp;<span class="currency-ruble">₽</span>
                </div>
              </a>
              @endforeach

              <button
                class="header-favorites-product-delete-wrap outline">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="header-favorites-product-delete svg-icon svg-icon--trash svg-icon--24">
                  <use
                    xlink:href="/legacy/sprite.svg?v=19052023#trash_common"
                    xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                </svg>
              </button>
            </div>
          </div>
          <div class="favorites-dropdown__footer">
            <div class="favorites-dropdown__total">
              <div class="favorites-dropdown__total-text">
                Товаров на сумму:
              </div>
              <div class="favorites-dropdown__total-number">
                1 000₽
              </div>
            </div>
            <!----><button
              class="favorites-dropdown__button"
              wire:click="clearComparison">
              <!----><svg
                xmlns="http://www.w3.org/2000/svg"
                class="base-button__additional-icon svg-icon svg-icon--external">
                <use
                  xlink:href="/legacy/sprite.svg?v=19052023#external_madrobots"
                  xmlns:xlink="http://www.w3.org/1999/xlink"></use>
              </svg>
              Очистить список
              <span
                class="global-preloader is-small"
                style="display: none"><span class="global-preloader__box"></span></span>
            </button>
          </div>
        </div>
      </div>
    </div>
    @endif
  </div>
</div>