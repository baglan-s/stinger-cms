<div class="main-products__card {{ implode(' ', $class) }}">
    <div class="inner-product-card">
        <div class="inner-product-card__head">
            @if ($product->getDiscount() > 0)
                <div class="inner-product-card__discount">
                    <div class="inner-product-discount this-left">
                        <div class="inner-product-discount__counting this-left">10%</div>
                        <img src="{{ asset('assets/images/products/discount.png') }}" alt="">
                    </div>
                </div>
            @endif
            <div class="inner-product-card__favorite">
                <button class="inner-product-card-favorite inner-outline {{ $favouriteClass }}" wire:click="toggleFavourite">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="svg-icons">
                        <path d="M2.485 17.485 16 31l13.515-13.515a8.485 8.485 0 0 0 2.485-6v-.38a8.105 8.105 0 0 0-14.433-5.063L16 8l-1.567-1.958A8.105 8.105 0 0 0 0 11.105v.38c0 2.25.894 4.409 2.485 6Z" />
                    </svg>
                </button>
            </div>
            <div class="inner-product-card__image">
                <a href="{{ route('catalog.products.show', $product->translation()?->slug) }}" class="inner-product-card__image-url" tabindex="-1">
                    <img src="{{ asset($product->getDefaultImage()) }}" alt="" class="inner-product-card__image-product" lazy="loaded">
                    <!-- <img src="assets/images/products/itvom43zllix3dky899fozzccxfcu1hl.jpg" alt="" class="inner-product-card__image-hover"> -->
                    <div class="inner-product-card__preload">
                        <span class="inner-main-preload">
                            <span class="inner-main-preload__boxes"></span>
                        </span>
                    </div>
                </a>
            </div>
        </div>
        <div class="inner-product-card__body">
            <div class="inner-product-card__variations">
                <div class="inner-product-card-variations">
                    <button class="inner-product-card-variations__item out-line this-active" style="background-color: rbg(0,0,0);">
                        <svg viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg">
                            <path d="m9.79 6.047-2.856 6.55V7.95H4.19l2.855-6.551v4.649h2.745Z" fill="#ffffff"></path>
                        </svg>
                    </button>
                    <button class="inner-product-card-variations__item out-line" style="background-color: rgb(157,209,159);">
                        <svg viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg">
                            <path d="m9.79 6.047-2.856 6.55V7.95H4.19l2.855-6.551v4.649h2.745Z" fill="#778ba5"></path>
                        </svg>
                    </button>
                    <button class="inner-product-card-variations__item out-line" style="background-color: rgb(255,147,179);">
                        <svg viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg">
                            <path d="m9.79 6.047-2.856 6.55V7.95H4.19l2.855-6.551v4.649h2.745Z" fill="#778ba5"></path>
                        </svg>
                    </button>
                </div>
                <a href="{{ route('catalog.products.show', $product->translation()?->slug) }}" class="inner-product-card__title">{{ $product->translation()?->name }}</a>
            </div>
        </div>
        <div class="inner-product-card__bottom">
            <a href="{{ route('catalog.products.show', $product->translation()?->slug) }}" class="inner-product-card__cost">
                <div class="inner-product-card-cost">
                    @if ($product->getOldPrice() > 0)
                    <div class="inner-product-card-cost__old">{{ $product->getOldPrice() }} тг</div>
                    @endif
                    <div class="inner-product-card-cost__current this-discount">{{ $product->getPrice() }} тг</div>
                </div>
            </a>
            <div class="inner-product-card__action">
                <div class="product-card-action">
                    <button class="inner-product-card-action__btn">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="inner-product-card-action__icon svg-icons">
                            <path d="M0 2v4h4.306l1.66 9.967-1.927 9.64c-.027.134-.04.268-.039.401.003.682 0 1.294 0 1.992a4 4 0 0 0 8 0h8a4 4 0 1 0 4-4H8.44l.8-4H30V2H0Z" />
                        </svg>
                        <span class="inner-main-preload this-small" style="display: none;">
                            <span class="inner-main-preload__boxes"></span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>