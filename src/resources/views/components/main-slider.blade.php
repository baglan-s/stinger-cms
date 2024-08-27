<div class="main-page-content-section-inner__main">
    <div class="main-page-content-section-banner">
        <div class="main-page-content-section-banner__slider swiper-wrapper-pointer-events mainSwiperSlider">
            @if ($slides->count() > 0)

                <div class="swiper-wrapper">

                    @foreach ($slides as $slide)

                        <div class="main-page-content-section-banner__card swiper-slide">
                            <a href="{{ $slide->translation()->link }}" target="_blank" class="home-banner-card">
                                <img alt="Распродажа 2024" class="swiper-lazy swiper-lazy-loaded" src="{{ asset("storage/{$slide->image}") }}">
                            </a>
                        </div>

                    @endforeach
                    
                </div>

            @endif
            
        </div>
    </div>
</div>