<div class="header-controls__item">
    <div
      class="hc-item-favorite-control control-item outline {{ $hasFavourite ? 'is-active' : '' }}"
    >
      <svg
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 32 32"
        class="hc-control-item__icon"
        wire:click="toFavourites"
      >
        <path
          d="M2.485 17.485 16 31l13.515-13.515a8.485 8.485 0 0 0 2.485-6v-.38a8.105 8.105 0 0 0-14.433-5.063L16 8l-1.567-1.958A8.105 8.105 0 0 0 0 11.105v.38c0 2.25.894 4.409 2.485 6Z"
        />
      </svg>
      <span class="hc-control-item__name" wire:click="toFavourites">Избранное</span>
      @if ($hasFavourite)
        <span class="hc-control-item__number">{{ $favouriteProductsCount }}</span>

        <div class="hc-control-item__dropdown mobile-hiddens">
          <div class="favorites-dropdown">
            <div class="favorites-dropdown__wrapper">
              <div class="favorites-dropdown__body">
                
                @foreach ($products as $product)
                  <div class="header-favorites-product" wire:key="{{ $product->id }}">
                    <div class="favourite-product-modal-container">
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
                          {{ $product->getPrice() }}&nbsp;<span class="currency-ruble"
                            >₸</span
                          >
                        </div>
                      </a>
                      <button
                        class="header-favorites-product-delete-wrap outline"
                        wire:click="removeFromFavourites({{ $product->id }})"
                      >
                        <svg fill="#e91e63" width="20px" height="20px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                          <path d="M10,18a1,1,0,0,0,1-1V11a1,1,0,0,0-2,0v6A1,1,0,0,0,10,18ZM20,6H16V5a3,3,0,0,0-3-3H11A3,3,0,0,0,8,5V6H4A1,1,0,0,0,4,8H5V19a3,3,0,0,0,3,3h8a3,3,0,0,0,3-3V8h1a1,1,0,0,0,0-2ZM10,5a1,1,0,0,1,1-1h2a1,1,0,0,1,1,1V6H10Zm7,14a1,1,0,0,1-1,1H8a1,1,0,0,1-1-1V8H17Zm-3-1a1,1,0,0,0,1-1V11a1,1,0,0,0-2,0v6A1,1,0,0,0,14,18Z"/>
                        </svg>
                      </button>
                    </div>
                  </div>
                @endforeach
              </div>
              <div class="favorites-dropdown__footer">
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