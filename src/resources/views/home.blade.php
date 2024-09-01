@extends('layouts.main')

@section('content')
    

<!-- Home page content -->
<div class="main-page-content-section" id="web">
    <div class="wrapper-inner slider-container">
        <div class="main-page-content-section__inner">
            <div class="main-page-content-section-inner">
                <x-main-slider />
                <x-catalog.weekly-product />
            </div>
        </div>
    </div>
    <x-video-review />
    <x-partners />
    <div class="wrapper-inner">
        <!-- Novelty -->
        <div class="main-page-content-section-products__block">
            <div class="main-inner-products-block">
                <div class="inner-products-block">
                    <x-catalog.novelty />
                    <x-catalog.popular-products />
                    <x-catalog.discounted-products />
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End home page content -->

<script>
    var swiper = new Swiper(".mainSwiperSlider", {
        autoplay: {
            delay: 3000,
        }
    });

    var swiper = new Swiper(".mainSwiperNoveltySlider", {
        slidesPerView: 4,
        spaceBetween: 15,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });

    var swiper = new Swiper(".mainSwiperPopularSlider", {
        slidesPerView: 4,
        spaceBetween: 15,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });

    var swiper = new Swiper(".mainSwiperDiscountSlider", {
        slidesPerView: 4,
        spaceBetween: 15,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });

    var swiper = new Swiper(".videoSwiper", {
        slidesPerView: 4,
        spaceBetween: 30,
        autoplay: {
            delay: 5000,
        },
        loop: true,
        breakpoints: {
            320: {
                slidesPerView: 3,
                spaceBetween: 10,
            },

            768: {
                slidesPerView: 4,
                spaceBetween: 25,
            },
            991: {
                slidesPerView: 4,
                spaceBetween: 25,
            }
        },
    });

    var swiper = new Swiper("#brands-carousel", {
        slidesPerView: 4,
        spaceBetween: 30,
        breakpoints: {
            320: {
                slidesPerView: 3,
                spaceBetween: 10,
            },

            768: {
                slidesPerView: 4,
                spaceBetween: 25,
            },
            991: {
                slidesPerView: 4,
                spaceBetween: 25,
            }
        },
        on: {
            init: function() {
                setEqualHeight(this);
            },
            resize: function() {
                setEqualHeight(this);
            }
        },
        autoplay: {
            delay: 3000,
        },
        loop: true,
    });

    function setEqualHeight(swiper) {
        let maxHeight = 0;

        swiper.slides.forEach(function(slide) {
            maxHeight = Math.max(maxHeight, slide.offsetHeight);
        });

        swiper.slides.forEach(function(slide) {
            slide.style.height = maxHeight + 'px';
        });
    }
</script>


@endsection