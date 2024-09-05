<div class="header-controls__item">
    <div
      class="hc-item-favorite-control control-item outline {{ $hasFavourite ? 'is-active' : '' }}"
      wire:click="toFavourites"
    >
      <svg
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 32 32"
        class="hc-control-item__icon"
      >
        <path
          d="M2.485 17.485 16 31l13.515-13.515a8.485 8.485 0 0 0 2.485-6v-.38a8.105 8.105 0 0 0-14.433-5.063L16 8l-1.567-1.958A8.105 8.105 0 0 0 0 11.105v.38c0 2.25.894 4.409 2.485 6Z"
        />
      </svg>
      <span class="hc-control-item__name">Избранное</span>
      @if ($hasFavourite)
        <span class="hc-control-item__number">{{ $favouriteProductsCount }}</span>

        <div class="hc-control-item__dropdown mobile-hiddens">
          <div class="favorites-dropdown">
            <div class="favorites-dropdown__wrapper">
              <div class="favorites-dropdown__body">
                <div class="header-favorites-product">
                  @foreach ($products as $product)
                    <a
                      href="#"
                      class="header-favorites-product__link"
                      ><img
                        alt=""
                        src="{{ $product->getDefaultImage() }}"
                        class="header-favorites-product__img"
                      />
                      <div class="header-favorites-product__title">{{ $product->translation()?->name }}</div>
                      <div class="header-favorites-product-price">
                        1 000&nbsp;<span class="currency-ruble"
                          >₽</span
                        >
                      </div>
                    </a>
                  @endforeach
                  
                  <button
                    class="header-favorites-product-delete-wrap outline"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="header-favorites-product-delete svg-icon svg-icon--trash svg-icon--24"
                    >
                      <use
                        xlink:href="/legacy/sprite.svg?v=19052023#trash_common"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                      ></use>
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
                  wire:click="clearFavourites"
                >
                  <!----><svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="base-button__additional-icon svg-icon svg-icon--external"
                  >
                    <use
                      xlink:href="/legacy/sprite.svg?v=19052023#external_madrobots"
                      xmlns:xlink="http://www.w3.org/1999/xlink"
                    ></use>
                  </svg>
                  Очистить список
                  <span
                    class="global-preloader is-small"
                    style="display: none"
                    ><span class="global-preloader__box"></span
                  ></span>
                </button>
              </div>
            </div>
          </div>
        </div>
      @endif
    </div>
  </div>