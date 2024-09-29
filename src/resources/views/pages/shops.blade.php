@extends('layouts.main')

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/shops.css') }}">
@endpush

@section('content')
<!-- Start stores_block -->
@if($shops)
<section class="madrobots_stores_block">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h4 class="madrobots_stores_title">Наши магазины</h4>
                <p class="madrobots_stores_text">Приходите в магазины Nemo Наши консультанты<br>с
                    удовольствием ответят на ваши вопросы.</p>
                <div class="wrapper">
                    <div class="buttonWrapper">
                        @foreach($shops as $shop)
                        <button class="tab-button @if($loop->index == 0) active @endif" 
                                style="border-radius: 15px;"
                                data-id="home-{{$shop->id}}"
                                data-lat="{{ $shop->lat }}"
                                data-lng="{{ $shop->lon }}"
                                data-name="{{ $shop->translation()?->name }}"
                                data-address="{{ $shop->translation()?->address }}"
                                data-hours="{{ $shop->translation()?->description }}">
                            {{ $shop->translation()?->name }}
                        </button>
                        @endforeach
                    </div>
                    <div class="heaeder_tabs_mobile">
                        <div class="header_wrapper-mobile">
                            <i class="fa fa-chevron-arrow-btn__mobile fa-chevron-left onclick_prev" aria-hidden="true">
                                <img src="{{asset('assets/images/icons/chevron-left-solid.svg')}}" alt="" class="mobile-arrow">
                            </i>
                            <div class="buttonWrapper_mobile">
                            @foreach($shops as $shop)
                                <button class="tab-button_m @if($loop->index == 0) active @endif" 
                                        data-id="home-{{$shop->id}}"
                                        data-lat="{{ $shop->lat }}"
                                        data-lng="{{ $shop->lon }}"
                                        data-name="{{ $shop->translation()?->name }}"
                                        data-address="{{ $shop->translation()?->address }}"
                                        data-hours="{{ $shop->translation()?->description }}">
                                    {{ $shop->translation()?->name }}
                                </button>
                            @endforeach
                            </div>
                            <i class="fa fa-chevron-arrow-btn__mobile fa-chevron-right onclick_next" aria-hidden="true">
                                <img src="{{asset('assets/images/icons/chevron-right-solid.svg')}}" alt="" class="mobile-arrow">
                            </i>
                        </div>
                    </div>
                    <div class="contentWrapper">
                    @foreach($shops as $shop)
                        <div class="content @if($loop->index == 0) active @endif" id="home-{{$shop->id}}">
                            <div class="content_tabs">
                                <div class="content_page">
                                    <div class="content_adress_block">
                                        <div class="content_adress">
                                            <div class="conten_icon_top">
                                                <img src="{{ asset('assets/images/madrobots/travel.png') }}"
                                                    class="content_icon_location" alt="">
                                                <p>{{ $shop->translation()?->address }}</p>
                                            </div>
                                            <div class="conten_icon_bootom">
                                                <img src="{{ asset('assets/images/madrobots/free-icon-headphone-8448738.png') }}"
                                                    class="content_icon_location" alt="">
                                                <p>{{ $shop->translation()?->phone }}</p>
                                            </div>
                                        </div>
                                        <div class="content_line"></div>
                                        <div class="content_line_mobile"></div>
                                        <div class="conten_icon_times">
                                            <img src="{{ asset('assets/images/madrobots/clock.png') }}" class="content_icon_time"
                                                alt="">
                                            <p>{{ $shop->translation()?->description }}</p>
                                        </div>
                                    </div>
                                    <!-- Swiper -->
                                    <div class="store-slider">
                                        <div class="swiper-wrapper">
                                            @if($shop->images->count() > 1)
                                            @foreach($shop->images as $image)
                                            <div class="swiper-slide"
                                                style='background-image: url({{ asset("storage/$image->path") }}); width: 751px;'>
                                                Slide {{ $loop->iteration }}
                                            </div>
                                            @endforeach
                                            @elseif($shop->image)
                                            <div class="swiper-slide"
                                                style='background-image: url({{ asset("storage/$shop->image") }}); width: 751px;'>
                                            </div>
                                            @endif
                                        </div>
                                        <div class="store_btns">
                                            <div class="swiper-button-prev"></div>
                                            <div class="swiper-pagination"></div>
                                            <div class="swiper-button-next"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="store-shop__side">
                                    <div id="map-home-{{ $shop->id }}" class="map"></div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
                <header class="store-description__header">
                    <h2 class="store__title">Nemo</h2>
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
@else
<div class="alert alert-info" role="alert">
    <h1>Нет данных</h1>
</div>
@endif
<!-- End stores_block -->
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

    $(document).ready(function () {
        let myMaps = {}; // Объект для хранения карт по id
        let activePlacemark = {};
        // Инициализация карты для активного таба
        ymaps.ready(init);

        function init() {
            // Ищем все элементы с классом "tab-button"
            const initialActiveTab = document.querySelector('.tab-button.active');
            if (initialActiveTab) {
                const initialId = initialActiveTab.dataset.id;
                initMap(`map-${initialId}`, initialActiveTab.dataset.lat, initialActiveTab.dataset.lng, initialActiveTab.dataset.name, initialActiveTab.dataset.address, initialActiveTab.dataset.hours);
            }
        }

        // Функция для инициализации карты
        function initMap(mapId, lat, lng, name, address, hours) {
            // Проверяем, существует ли карта с таким id
            if (!myMaps[mapId]) {
                // Инициализируем карту в контейнере с указанным id
                myMaps[mapId] = new ymaps.Map(mapId, {
                    center: [parseFloat(lat), parseFloat(lng)],
                    zoom: 12
                });

                // Делаем и добавляем начальную метку
                activePlacemark[mapId] = createPlacemark(lat, lng, name, address, hours);
                myMaps[mapId].geoObjects.add(activePlacemark[mapId]);
            }
        }

        // Функция для добавления метки на карте
        function createPlacemark(lat, lng, name, address, hours) {
            return new ymaps.Placemark([parseFloat(lat), parseFloat(lng)], {
                balloonContent: `<strong>${name}</strong><br>
                                 Адрес: ${address}<br>
                                 Режим работы: ${hours}`
            }, {
                preset: 'islands#icon',
                iconColor: '#0095b6'
            });
        }

        // Обработчик клика по табам
        const tabs = document.querySelector(".wrapper");
        const tabButton = document.querySelectorAll(".tab-button");
        const tabMobile = document.querySelectorAll(".tab-button_m");
        const contents = document.querySelectorAll(".content");

        tabs.onclick = e => {
            const id = e.target.dataset.id;
            if (id) {
                // Обновляем классы активных элементов
                updateActiveClass(tabButton, e.target);
                updateActiveClass(tabMobile, e.target);
                updateContent(contents, `${id}`);

                // Обновляем карту для нового активного контента
                const mapId = `map-${id}`;
                const newLat = e.target.dataset.lat;
                const newLng = e.target.dataset.lng;
                const newName = e.target.dataset.name;
                const newAddress = e.target.dataset.address;
                const newHours = e.target.dataset.hours;

                initMap(mapId, newLat, newLng, newName, newAddress, newHours);
            }
        };

        // Функция для обновления классов активных элементов
        function updateActiveClass(buttons, target) {
            buttons.forEach(btn => btn.classList.remove('active'));
            target.classList.add('active');
        }

        // Функция для обновления контента
        function updateContent(contents, id) {
            contents.forEach(content => content.classList.remove('active'));
            const element = document.getElementById(id);

            // Проверка на существование элемента перед изменением его класса
            if (element) {
                element.classList.add('active');
            } else {
                console.error(`Элемент с id "${id}" не найден в DOM.`);
            }
        }

        // Обработчики кнопок "Next" и "Prev"
        let tabNext = document.querySelector('.onclick_next');
        let tabPrev = document.querySelector('.onclick_prev');

        // tabNext.addEventListener('click', () => switchTab('next'));
        // tabPrev.addEventListener('click', () => switchTab('prev'));

        // Обработчик для кнопки "Next"
        tabNext.addEventListener('click', () => {
            let currentActive = document.querySelector('.tab-button_m.active');

            if (currentActive) {
                // Определяем следующий элемент или, если находимся на последнем, выбираем первый
                let nextElement = currentActive.nextElementSibling ?? document.querySelector('.tab-button_m');
                // Убираем класс "active" с текущего элемента
                currentActive.classList.remove('active');
                // Добавляем класс "active" к следующему элементу
                nextElement.classList.add('active');
                // Программно вызываем событие "click" на новом активном элементе
                nextElement.click();
            }
        });

        // Обработчик для кнопки "Prev"
        tabPrev.addEventListener('click', () => {
            let currentActive = document.querySelector('.tab-button_m.active');

            if (currentActive) {
                // Определяем предыдущий элемент или, если находимся на первом, выбираем последний
                let prevElement = currentActive.previousElementSibling ?? document.querySelector('.tab-button_m:last-of-type');
                // Убираем класс "active" с текущего элемента
                currentActive.classList.remove('active');
                // Добавим класс "active" к предыдущему элементу
                prevElement.classList.add('active');
                // Программно вызываем событие "click" на новом активном элементе
                prevElement.click();
            }
        });

        function switchTab(direction) {
            let currentTab = Array.from(tabMobile).find(nav => nav.classList.contains('active'));
            let newTab;

            if (direction === 'next') {
                newTab = currentTab.nextElementSibling ?? tabMobile[0];
            } else {
                newTab = currentTab.previousElementSibling ?? tabMobile[tabMobile.length - 1];
            }

            if (newTab) {
                // Обновление активных классов и контента
                updateActiveClass(tabMobile, newTab);
                updateActiveClass(tabButton, newTab);
                updateContent(contents, `home-${newTab.dataset.id}`);
                // Обновление карты
                const mapId = `map-${newTab.dataset.id}`;
                updateMap(mapId, newTab.dataset.lat, newTab.dataset.lng, newTab.dataset.name, newTab.dataset.address, newTab.dataset.hours);
            }
        }

        // Функция для обновления карты
        function updateMap(mapId, lat, lng, name, address, hours) {
            // Инициализируем карту, если она еще не сделана
            if (!myMaps[mapId]) {
                initMap(mapId, lat, lng, name, address, hours);
            } else {
                // Обновляем уже существующую карту
                myMaps[mapId].setCenter([parseFloat(lat), parseFloat(lng)]);
                myMaps[mapId].geoObjects.remove(activePlacemark[mapId]);

                activePlacemark[mapId] = createPlacemark(lat, lng, name, address, hours);
                myMaps[mapId].geoObjects.add(activePlacemark[mapId]);
            }
        }
    });
</script>
@endpush