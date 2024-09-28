@extends('layouts.main')

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/shops.css') }}">
@endpush

@section('content')
<!-- Start madrobots_stores_block -->
<section class="madrobots_stores_block">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h4 class="madrobots_stores_title">Наши магазины</h4>
                <p class="madrobots_stores_text">Приходите в магазины Madrobots. Наши консультанты<br>с
                    удовольствием ответят на ваши вопросы.</p>
                <div class="wrapper">
                    <div class="buttonWrapper">
                        <button class="tab-button active" style="border-radius: 15px;"
                            data-id="home">Москва</button>
                        <button class="tab-button" style="border-radius: 15px;"
                            data-id="about">Санкт-Петербург</button>
                        <button class="tab-button" style="border-radius: 15px;"
                            data-id="contact">Екатеринбург</button>
                    </div>
                    <div class="heaeder_tabs_mobile">
                        <div class="header_wrapper-mobile">
                            <i class="fa fa-chevron-left onclick_prev" aria-hidden="true"></i>
                            <div class="buttonWrapper_mobile">
                                <button class="tab-button_m active" data-id="home">Москва</button>
                                <button class="tab-button_m" data-id="about">Санкт-Петербург</button>
                                <button class="tab-button_m" data-id="contact">Екатеринбург</button>
                            </div>
                            <i class="fa fa-chevron-right onclick_next" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="contentWrapper">
                        <div class="content active" id="home">
                            <div class="content_tabs">
                                <div class="content_page">
                                    <div class="content_adress_block">
                                        <div class="content_adress">
                                            <div class="conten_icon_top">
                                                <img src="{{ asset('assets/images/madrobots/travel.png') }}"
                                                    class="content_icon_location" alt="">
                                                <p>Бутырский Вал, 32</p>
                                            </div>
                                            <div class="conten_icon_bootom">
                                                <img src="{{ asset('assets/images/madrobots/free-icon-headphone-8448738.png') }}"
                                                    class="content_icon_location" alt="">
                                                <p>+7 495 646-10-96</p>
                                            </div>
                                        </div>
                                        <div class="content_line"></div>
                                        <div class="content_line_mobile"></div>
                                        <div class="conten_icon_times">
                                            <img src="{{ asset('assets/images/madrobots/clock.png') }}" class="content_icon_time"
                                                alt="">
                                            <p>Каждый день с 10:00 до 22:00
                                            </p>
                                        </div>
                                    </div>
                                    <!-- Swiper -->
                                    <div class="store-slider">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide"
                                                style="background-image: url({{ asset('assets/images/madrobots/2.jpg') }}); width: 751px;">
                                            </div>
                                            <div class="swiper-slide"
                                                style="background-image: url({{ asset('assets/images/madrobots/3.jpg') }}); width: 700px; height: 500px;">
                                                Slide 2</div>
                                            <div class="swiper-slide"
                                                style="background-image: url({{ asset('assets/images/madrobots/4.jpg') }}); width: 700px; height: 500px;">
                                                Slide 3</div>
                                            <div class="swiper-slide"
                                                style="background-image: url({{ asset('assets/images/madrobots/2.jpg') }}); width: 700px; height: 500px;">
                                                Slide 4</div>
                                            <div class="swiper-slide"
                                                style="background-image: url({{ asset('assets/images/madrobots/2.jpg') }}); width: 700px; height: 500px;">
                                                Slide 5</div>
                                        </div>
                                        <div class="store_btns">
                                            <div class="swiper-button-prev"></div>
                                            <div class="swiper-pagination"></div>
                                            <div class="swiper-button-next"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="store-shop__side">
                                    <div id="map-test" class="map"></div>
                                    <div class="store-shop__routes">
                                        <a href="#" class="btn-routes">
                                            Маршрут от Новослободской
                                            <i class="fa fa-external-link" aria-hidden="true"></i>
                                        </a>
                                        <a href="#" class="btn-routes">Маршрут от Белорусской</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content" id="about">
                            <div class="content_tabs">
                                <div class="content_page">
                                    <div class="content_adress_block">
                                        <div class="content_adress">
                                            <div class="conten_icon_top">
                                                <img src="{{ asset('assets/images/madrobots/travel.png') }}"
                                                    class="content_icon_location" alt="">
                                                <p>Лиговский проспект, 3/9
                                                </p>
                                            </div>
                                            <div class="conten_icon_bootom">
                                                <img src="{{ asset('assets/images/madrobots/free-icon-headphone-8448738.png') }}"
                                                    class="content_icon_location" alt="">
                                                <p>+7 812 407-35-98</p>
                                            </div>
                                        </div>
                                        <div class="content_line"></div>
                                        <div class="conten_icon_times">
                                            <img src="{{ asset('assets/images/madrobots/clock.png') }}" class="content_icon_time"
                                                alt="">
                                            <p>Каждый день с 10:00 до 22:00
                                            </p>
                                        </div>
                                    </div>
                                    <!-- Swiper -->
                                    <div class="store-slider">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide"
                                                style="background-image: url({{ asset('assets/images/madrobots/2.jpg') }}); width: 700px; height: 500px;">
                                            </div>
                                            <div class="swiper-slide"
                                                style="background-image: url({{ asset('assets/images/madrobots/3.jpg') }}); width: 700px; height: 500px;">
                                                Slide 2</div>
                                            <div class="swiper-slide"
                                                style="background-image: url({{ asset('assets/images/madrobots/4.jpg') }}); width: 700px; height: 500px;">
                                                Slide 3</div>
                                            <div class="swiper-slide"
                                                style="background-image: url({{ asset('assets/images/madrobots/2.jpg') }}); width: 700px; height: 500px;">
                                                Slide 4</div>
                                            <div class="swiper-slide"
                                                style="background-image: url({{ asset('assets/images/madrobots/2.jpg') }}); width: 700px; height: 500px;">
                                                Slide 5</div>
                                        </div>
                                        <div class="store_btns">
                                            <div class="swiper-button-prev"></div>
                                            <div class="swiper-pagination"></div>
                                            <div class="swiper-button-next"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="store-shop__side">
                                    <div id="map-test" class="map"></div>
                                    <div class="store-shop__routes">
                                        <a href="#" class="btn-routes">Маршрут от м. Площадь 1905 года</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="content" id="contact">
                            <div class="content_tabs">
                                <div class="content_page">
                                    <div class="content_adress_block">
                                        <div class="content_adress">
                                            <div class="conten_icon_top">
                                                <img src="{{ asset('assets/images/madrobots/travel.png') }}"
                                                    class="content_icon_location" alt="">
                                                <p>ул. Горького, 33А</p>
                                            </div>
                                            <div class="conten_icon_bootom">
                                                <img src="{{ asset('assets/images/madrobots/free-icon-headphone-8448738.png') }}"
                                                    class="content_icon_location" alt="">
                                                <p>+7 343 363-33-16</p>
                                            </div>
                                        </div>
                                        <div class="content_line"></div>
                                        <div class="conten_icon_times">
                                            <img src="{{ asset('assets/images/madrobots/clock.png') }}" class="content_icon_time"
                                                alt="">
                                            <p>Каждый день с 10:00 до 22:00
                                            </p>
                                        </div>
                                    </div>
                                    <!-- Swiper -->
                                    <div class="store-slider">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide"
                                                style="background-image: url(./assets/images/madrobots/2.jpg); width: 700px; height: 500px;">
                                            </div>
                                            <div class="swiper-slide"
                                                style="background-image: url({{ asset('assets/images/madrobots/3.jpg') }}); width: 700px; height: 500px;">
                                                Slide 2</div>
                                            <div class="swiper-slide"
                                                style="background-image: url({{ asset('assets/images/madrobots/4.jpg') }}); width: 700px; height: 500px;">
                                                Slide 3</div>
                                            <div class="swiper-slide"
                                                style="background-image: url({{ asset('assets/images/madrobots/2.jpg') }}); width: 700px; height: 500px;">
                                                Slide 4</div>
                                            <div class="swiper-slide"
                                                style="background-image: url({{ asset('assets/images/madrobots/2.jpg') }}); width: 700px; height: 500px;">
                                                Slide 5</div>
                                        </div>
                                        <div class="store_btns">
                                            <div class="swiper-button-prev"></div>
                                            <div class="swiper-pagination"></div>
                                            <div class="swiper-button-next"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="store-shop__side">
                                    <div id="map-test" class="map"></div>
                                    <div class="store-shop__routes">
                                        <a href="#" class="btn-routes">Маршрут от м. Площадь 1905 года</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <header class="store-description__header">
                    <h2 class="store__title">Madrobots</h2>
                    <div class="store__subtitle"> Интернет-магазин экспериментальных гаджетов с&nbsp;краудфандинг
                        площадок Kickstarter и&nbsp;Indiegogo </div>
                </header>
                <div class="store-description__text-wrapper">
                    <div class="store-description__text"> Приходите в&nbsp;гости! Вы&nbsp;можете заранее сделать
                        заказ, ближе
                        познакомиться с&nbsp;товарами в&nbsp;магазине&nbsp;— и&nbsp;приобрести подходящие.
                    </div>
                    <div class="store-description__decors">
                        <div class="store-description__decor decor-left">
                            <picture><!----><!---->
                                <source media="(max-width: 991px)" srcset="{{ asset('assets/images/madrobots/decor-left.png') }}">
                                <!----><img src="{{ asset('assets/images/madrobots/decor-left.png') }}" alt="">
                            </picture>
                        </div>
                        <div class="store-description__decor decor-right">
                            <picture><!----><!---->
                                <source media="(max-width: 991px)" srcset="{{ asset('assets/images/madrobots/decor-right.png') }}">
                                <!----><img src="{{ asset('assets/images/madrobots/decor-right.png') }}" alt="">
                            </picture>
                        </div>
                    </div><button
                        class="base-button outline store-description__button base-button--v1 base-button--lg"><!----><!---->
                        Выбрать
                        товары <span class="global-preloader is-small" style="display:none;"><span
                                class="global-preloader__box"></span></span></button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End madrobots_stores_block -->
@endsection

@push('scripts')
<script src="https://api-maps.yandex.ru/2.1/?apikey=7240ea03-95e6-44f3-a9c4-e4b336df23ec&lang=ru_RU"></script>
<script>
    var swiper = new Swiper(".store-slider", {
        cssMode: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        mousewheel: true,
        keyboard: true,
    });



    const tabs = document.querySelector(".wrapper");
    const tabButton = document.querySelectorAll(".tab-button");
    const tabMobile = document.querySelectorAll(".tab-button_m");
    const contents = document.querySelectorAll(".content");
    const btns = document.querySelectorAll(".onclic_btn")

    tabs.onclick = e => {
        const id = e.target.dataset.id;
        if (id) {
            tabButton.forEach(btn => {
                btn.classList.remove("active");
            });
            e.target.classList.add("active");

            tabMobile.forEach(btn => {
                btn.classList.remove("active");
            });
            e.target.classList.add("active");

            contents.forEach(content => {
                content.classList.remove("active");
            });
            const element = document.getElementById(id);
            element.classList.add("active");
        }

    }

    let tabNext = document.querySelector('.onclick_next');
    tabNext.addEventListener('click', () => {
        for (let nav of tabMobile) {
            if (nav.classList.contains('active')) {
                let nextElement = nav.nextElementSibling ?? tabMobile[0];
                nextElement.classList.add('active');
                nav.classList.remove('active')

                break;
            }
        }

        for (nav of contents) {
            if (nav.classList.contains('active')) {
                let tabElement = nav.nextElementSibling ?? contents[0]
                tabElement.classList.add('active');
                nav.classList.remove('active')

                break;
            }
        }

    })

    let tabPrev = document.querySelector('.onclick_prev');
    tabPrev.addEventListener('click', () => {

        for (nav of tabMobile) {
            if (nav.classList.contains('active')) {
                let prevElement = nav.previousElementSibling ?? tabMobile[tabMobile.length - 1]
                prevElement.classList.add('active');
                nav.classList.remove('active')

                break;
            }
        }

        for (nav of contents) {
            if (nav.classList.contains('active')) {
                let tabElement = nav.previousElementSibling ?? contents[contents.length - 1]
                tabElement.classList.add('active');
                nav.classList.remove('active')

                break;
            }
        }
    })



    ymaps.ready(function() {

        let myMap = new ymaps.Map('map-test', {
            center: [59.91795236804815, 30.304908500000003],
            zoom: 15,
            controls: ['routePanelControl']
        });

        let control = myMap.controls.get('routePanelControl');
        let city = 'Санкт-Петербург';

        // let location = ymaps.geolocation.get();

        // location.then(function(res) {
        // 	let locationText = res.geoObjects.get(0).properties.get('text');
        // 	console.log(locationText)
        // });

        const options = {
            enableHighAccuracy: true,
            timeout: 5000,
            maximumAge: 0
        };

        function success(pos) {
            const crd = pos.coords;

            console.log(`Latitude : ${crd.latitude}`);
            console.log(`Longitude: ${crd.longitude}`);


            let reverseGeocoder = ymaps.geocode([crd.latitude, crd.longitude]);
            let locationText = null;
            reverseGeocoder.then(function(res) {
                locationText = res.geoObjects.get(0).properties.get('text')
                console.log(locationText)

                control.routePanel.state.set({
                    type: 'masstransit',
                    fromEnabled: false,
                    from: locationText,
                    toEnabled: true,
                    to: `${city}, Невский проспект 146`,
                });
            });

            console.log(locationText)



            control.routePanel.options.set({
                types: {
                    masstransit: true,
                    pedestrian: true,
                    taxi: true
                }
            })
        }

        function error(err) {
            console.warn(`ERROR(${err.code}): ${err.message}`);
        }

        navigator.geolocation.getCurrentPosition(success, error, options);



    });
</script>
@endpush