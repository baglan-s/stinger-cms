<!-- Start similar -->
@if ($products->count() > 0)
<div class="inner-products__main" style="padding: 60px 0">
    <h2 class="inner-products__title inner-page-title">
        <a href="#">Похожие товары</a>
        <img src="{{ asset('assets/images/products/star.svg') }}" alt="">
    </h2>
    <div class="inner-products__desktop hide-mobile">
        <div class="swiper-main js-main-products-novelty-slider mainSwiperNoveltySlider">
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
</div>

@endif
<!-- End novelty -->