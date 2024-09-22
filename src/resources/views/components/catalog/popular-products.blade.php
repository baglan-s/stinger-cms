@if ($products->count() > 0)

<!-- Start popular -->
<div class="inner-block__products">
    <div class="inner-products">
        <div class="inner-products__main">
            <h2 class="inner-products__title inner-page-title">
                <a href="#">Популярное</a>
                <img src="assets/images/products/title-popular-icon.svg" alt="">
            </h2>
            <div class="inner-products__desktop hide-mobile">
                <div class="swiper-main js-main-products-novelty-slider mainSwiperPopularSlider">
                    <div class="swiper-wrapper">
                        @foreach ($products as $product)
                            <livewire:catalog.product-preview :product="$product" :class="['swiper-slide']">
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="inner-products__mobile hide-desktop">
                @foreach ($products as $product)
                    <livewire:catalog.product-preview :product="$product">
                @endforeach
            </div>
            <a href="#" class="inner-products__link hide-desktop"> 
                Больше популярных 
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" class="svg-icons svg-icon--external">
                    <path d="M3.043 0H14v11.043h-2.191V3.658L1.549 14 0 12.438l10.148-10.23H3.043V0Z" />
                </svg>
            </a>
        </div>
    </div>
</div>
@endif

@push('scripts')
<script>
var swiper = new Swiper(".mainSwiperPopularSlider", {
        slidesPerView: 4,
        spaceBetween: 15,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
</script>
@endpush