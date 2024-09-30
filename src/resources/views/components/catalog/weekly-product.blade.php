<!-- Right slide -->
@if (isset($product) && $product)

<div class="main-page-content-section-inner__side">
    <div class="main-page-content-section-inner__product">
        <a href="{{ route('catalog.products.show', $product->translation()?->slug ?? '-') }}" target="_blank" class="main-page-content-section-inner-product">
            <div class="main-page-content-section-inner-product__main">
                @if ($product->getDiscount() > 0)
                    <div class="main-page-content-section-inner-product__discount">
                        <div class="product-discount hidden-mobile right-slide">
                            <div class="right-product-discount__count right-slide">{{ $product->getDiscount() }}%</div>
                            <img src="assets/images/slider/discount.png" alt="Discount">
                        </div>
                        <div class="product-discount hidden-desktop left-slide">
                            <div class="right-product-discount__count left-slide">{{ $product->getDiscount() }}%</div>
                            <img src="assets/images/slider/discount.png" alt="Discount">
                        </div>
                    </div>
                @endif
                <div class="main-page-content-product__image">
                    <img src="{{ $product->getDefaultImage() }}" alt="bf29c59ddb633ec489a2cb186abbef2a">
                </div>
                <div class="main-page-content-product__text">
                    <div class="main-page-content-product__subtitle">
                        Наш выбор
                        {{-- <img src="assets/images/icons/robot.png" alt="Robot"> --}}
                    </div>
                    <div class="main-page-content-product__name">
                        {{ $product->translation()->name }}
                    </div>
                </div>
            </div>
            <div class="main-page-content-product__divider">
                <span></span>
            </div>
            <div class="main-page-content-product__side">
                <div class="main-page-content-product__arrow">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" class="svg-icons external-svg-icons">
                        <path d="M3.043 0H14v11.043h-2.191V3.658L1.549 14 0 12.438l10.148-10.23H3.043V0Z" />
                    </svg>
                </div>
                <div class="main-page-content-product__price">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 40" class="svg-icons lightning-svg-icons">
                        <path d="M20 16.604 9.804 40V23.396H0L10.196 0v16.604H20Z" />
                    </svg> Забрать
                    @if ($product->getDiscount() > 0)
                        <span class="when-mobile-hidden">со скидкой</span>
                    @endif
                    <span>за {{ $product->getPrice() }} тг</span>
                </div>
            </div>
        </a>
    </div>
</div>

@endif
<!-- End right slide -->