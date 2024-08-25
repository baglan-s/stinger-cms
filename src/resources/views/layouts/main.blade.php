@inject('header', 'App\Http\Controllers\Partials\HeaderController')
@inject('footer', 'App\Http\Controllers\Partials\FooterController')

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Nemo kz</title>
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-5.3.3/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/header.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/slider.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/catalog.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/swiper-11.1.4/swiper-bundle.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/normalize.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/reset.css') }}">
    </head>
<body>
    {!! $header->render() !!}
    
    @yield('content')

    {!! $footer->render() !!}

    <livewire:city-list />
    <x-mobile-panel />
    <x-catalog.mobile-catalog />

    <script type="text/javascript" src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap-5.3.3/bootstrap.bundle.min.js') }}"></script>
    <script src="{{  asset('assets/js/swiper-11.1.4/swiper-bundle.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/header.js') }}"></script>
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
</body>
</html>