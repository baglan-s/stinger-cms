@extends('layouts.main')

@section('content')
    

<!-- Home page content -->
<div class="main-page-content-section" id="web">
    <div class="wrapper-inner slider-container">
        <div class="main-page-content-section__inner">
            <div class="main-page-content-section-inner">
                <div class="main-page-content-section-inner__main">
                    <div class="main-page-content-section-banner">
                        <div class="main-page-content-section-banner__slider swiper-wrapper-pointer-events mainSwiperSlider">
                            <div class="swiper-wrapper">
                                <div class="main-page-content-section-banner__card swiper-slide">
                                    <a href="https://madrobots.ru/catalog/sale" target="_blank" class="home-banner-card">
                                        <img alt="Распродажа 2024" class="swiper-lazy swiper-lazy-loaded" src="https://api.madrobots.ru/upload/iblock/4fb/z6nw4036khfor15l7v0lf6y0ubafie25.jpg">
                                    </a>
                                </div>
                                <div class="main-page-content-section-banner__card swiper-slide">
                                    <a href="https://madrobots.ru/catalog/sale" target="_blank" class="home-banner-card">
                                        <img alt="Распродажа 2024" class="" src="https://api.madrobots.ru/upload/iblock/4fb/z6nw4036khfor15l7v0lf6y0ubafie25.jpg">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Right slide -->
                <div class="main-page-content-section-inner__side">
                    <div class="main-page-content-section-inner__product">
                        <a href="#" class="main-page-content-section-inner-product">
                            <div class="main-page-content-section-inner-product__main">
                                <div class="main-page-content-section-inner-product__discount">
                                    <div class="product-discount hidden-mobile right-slide">
                                        <div class="right-product-discount__count right-slide">13%</div>
                                        <img src="assets/images/slider/discount.png" alt="Discount">
                                    </div>
                                    <div class="product-discount hidden-desktop left-slide">
                                        <div class="right-product-discount__count left-slide">13%</div>
                                        <img src="assets/images/slider/discount.png" alt="Discount">
                                    </div>
                                </div>
                                <div class="main-page-content-product__image">
                                    <img src="assets/images/slider/bf29c59ddb633ec489a2cb186abbef2a.jpg" alt="bf29c59ddb633ec489a2cb186abbef2a">
                                </div>
                                <div class="main-page-content-product__text">
                                    <div class="main-page-content-product__subtitle">
                                        Наш выбор
                                        <img src="assets/images/icons/robot.png" alt="Robot">
                                    </div>
                                    <div class="main-page-content-product__name">
                                        Фотоаппарат моментальной печати Lumicube Lumicam DK04
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
                                    <span class="when-mobile-hidden">со скидкой</span>
                                    <span>за 2 080 тг</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- End right slide -->
            </div>
        </div>
    </div>
    <!-- Video -->
    <div class="container">
        <h2 class="inner-products__title inner-page-title">Видеообзоры</h2>
        <div class="swiper videoSwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="blog_card">
                        <div class="blog_video">
                            <img alt="" loading="lazy" width="480" height="360" decoding="async" data-nimg="1" class="img" src="https://i.ytimg.com/vi/MaoA2vqbqQw/hqdefault.jpg" style="color: transparent; object-fit: cover;">
                            <a target="_blank" href="https://www.youtube.com/watch?v=MaoA2vqbqQw">
                                <div class="blog_video-play">
                                    <svg width="21" height="26" viewBox="0 0 21 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.27849 2.25039C2.81269 1.95099 2.19999 2.28549 2.19999 2.83929V22.9106C2.19999 23.4644 2.81269 23.7989 3.27849 23.4994L18.8896 13.4638C19.3182 13.1882 19.3182 12.5617 18.8896 12.2861L3.27849 2.25039ZM0.799988 2.83929C0.799988 1.17779 2.63799 0.174386 4.03559 1.07279L19.6466 11.1085C20.9325 11.9351 20.9325 13.8148 19.6466 14.6414L4.03559 24.6771C2.63799 25.5755 0.799988 24.5721 0.799988 22.9106V2.83929Z" fill="black"></path>
                                    </svg>
                                </div>
                            </a>
                        </div>
                        <div class="blog_card-content">
                            <div class="blog_card-title">
                                32 дюйма – удобно или нет? Обзор монитора XTREON XT3266QP
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="blog_card">
                        <div class="blog_video">
                            <img alt="" loading="lazy" width="480" height="360" decoding="async" data-nimg="1" class="img" src="https://i.ytimg.com/vi/MaoA2vqbqQw/hqdefault.jpg" style="color: transparent; object-fit: cover;">
                            <a target="_blank" href="https://www.youtube.com/watch?v=MaoA2vqbqQw">
                                <div class="blog_video-play">
                                    <svg width="21" height="26" viewBox="0 0 21 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.27849 2.25039C2.81269 1.95099 2.19999 2.28549 2.19999 2.83929V22.9106C2.19999 23.4644 2.81269 23.7989 3.27849 23.4994L18.8896 13.4638C19.3182 13.1882 19.3182 12.5617 18.8896 12.2861L3.27849 2.25039ZM0.799988 2.83929C0.799988 1.17779 2.63799 0.174386 4.03559 1.07279L19.6466 11.1085C20.9325 11.9351 20.9325 13.8148 19.6466 14.6414L4.03559 24.6771C2.63799 25.5755 0.799988 24.5721 0.799988 22.9106V2.83929Z" fill="black"></path>
                                    </svg>
                                </div>
                            </a>
                        </div>
                        <div class="blog_card-content">
                            <div class="blog_card-title">
                                32 дюйма – удобно или нет? Обзор монитора XTREON XT3266QP
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="blog_card">
                        <div class="blog_video">
                            <img alt="" loading="lazy" width="480" height="360" decoding="async" data-nimg="1" class="img" src="https://i.ytimg.com/vi/MaoA2vqbqQw/hqdefault.jpg" style="color: transparent; object-fit: cover;">
                            <a target="_blank" href="https://www.youtube.com/watch?v=MaoA2vqbqQw">
                                <div class="blog_video-play">
                                    <svg width="21" height="26" viewBox="0 0 21 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.27849 2.25039C2.81269 1.95099 2.19999 2.28549 2.19999 2.83929V22.9106C2.19999 23.4644 2.81269 23.7989 3.27849 23.4994L18.8896 13.4638C19.3182 13.1882 19.3182 12.5617 18.8896 12.2861L3.27849 2.25039ZM0.799988 2.83929C0.799988 1.17779 2.63799 0.174386 4.03559 1.07279L19.6466 11.1085C20.9325 11.9351 20.9325 13.8148 19.6466 14.6414L4.03559 24.6771C2.63799 25.5755 0.799988 24.5721 0.799988 22.9106V2.83929Z" fill="black"></path>
                                    </svg>
                                </div>
                            </a>
                        </div>
                        <div class="blog_card-content">
                            <div class="blog_card-title">
                                32 дюйма – удобно или нет? Обзор монитора XTREON XT3266QP
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="blog_card">
                        <div class="blog_video">
                            <img alt="" loading="lazy" width="480" height="360" decoding="async" data-nimg="1" class="img" src="https://i.ytimg.com/vi/MaoA2vqbqQw/hqdefault.jpg" style="color: transparent; object-fit: cover;">
                            <a target="_blank" href="https://www.youtube.com/watch?v=MaoA2vqbqQw">
                                <div class="blog_video-play">
                                    <svg width="21" height="26" viewBox="0 0 21 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.27849 2.25039C2.81269 1.95099 2.19999 2.28549 2.19999 2.83929V22.9106C2.19999 23.4644 2.81269 23.7989 3.27849 23.4994L18.8896 13.4638C19.3182 13.1882 19.3182 12.5617 18.8896 12.2861L3.27849 2.25039ZM0.799988 2.83929C0.799988 1.17779 2.63799 0.174386 4.03559 1.07279L19.6466 11.1085C20.9325 11.9351 20.9325 13.8148 19.6466 14.6414L4.03559 24.6771C2.63799 25.5755 0.799988 24.5721 0.799988 22.9106V2.83929Z" fill="black"></path>
                                    </svg>
                                </div>
                            </a>
                        </div>
                        <div class="blog_card-content">
                            <div class="blog_card-title">
                                32 дюйма – удобно или нет? Обзор монитора XTREON XT3266QP
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="blog_card">
                        <div class="blog_video">
                            <img alt="" loading="lazy" width="480" height="360" decoding="async" data-nimg="1" class="img" src="https://i.ytimg.com/vi/MaoA2vqbqQw/hqdefault.jpg" style="color: transparent; object-fit: cover;">
                            <a target="_blank" href="https://www.youtube.com/watch?v=MaoA2vqbqQw">
                                <div class="blog_video-play">
                                    <svg width="21" height="26" viewBox="0 0 21 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.27849 2.25039C2.81269 1.95099 2.19999 2.28549 2.19999 2.83929V22.9106C2.19999 23.4644 2.81269 23.7989 3.27849 23.4994L18.8896 13.4638C19.3182 13.1882 19.3182 12.5617 18.8896 12.2861L3.27849 2.25039ZM0.799988 2.83929C0.799988 1.17779 2.63799 0.174386 4.03559 1.07279L19.6466 11.1085C20.9325 11.9351 20.9325 13.8148 19.6466 14.6414L4.03559 24.6771C2.63799 25.5755 0.799988 24.5721 0.799988 22.9106V2.83929Z" fill="black"></path>
                                    </svg>
                                </div>
                            </a>
                        </div>
                        <div class="blog_card-content">
                            <div class="blog_card-title">
                                32 дюйма – удобно или нет? Обзор монитора XTREON XT3266QP
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="blog_card">
                        <div class="blog_video">
                            <img alt="" loading="lazy" width="480" height="360" decoding="async" data-nimg="1" class="img" src="https://i.ytimg.com/vi/MaoA2vqbqQw/hqdefault.jpg" style="color: transparent; object-fit: cover;">
                            <a target="_blank" href="https://www.youtube.com/watch?v=MaoA2vqbqQw">
                                <div class="blog_video-play">
                                    <svg width="21" height="26" viewBox="0 0 21 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.27849 2.25039C2.81269 1.95099 2.19999 2.28549 2.19999 2.83929V22.9106C2.19999 23.4644 2.81269 23.7989 3.27849 23.4994L18.8896 13.4638C19.3182 13.1882 19.3182 12.5617 18.8896 12.2861L3.27849 2.25039ZM0.799988 2.83929C0.799988 1.17779 2.63799 0.174386 4.03559 1.07279L19.6466 11.1085C20.9325 11.9351 20.9325 13.8148 19.6466 14.6414L4.03559 24.6771C2.63799 25.5755 0.799988 24.5721 0.799988 22.9106V2.83929Z" fill="black"></path>
                                    </svg>
                                </div>
                            </a>
                        </div>
                        <div class="blog_card-content">
                            <div class="blog_card-title">
                                32 дюйма – удобно или нет? Обзор монитора XTREON XT3266QP
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="blog_card">
                        <div class="blog_video">
                            <img alt="" loading="lazy" width="480" height="360" decoding="async" data-nimg="1" class="img" src="https://i.ytimg.com/vi/MaoA2vqbqQw/hqdefault.jpg" style="color: transparent; object-fit: cover;">
                            <a target="_blank" href="https://www.youtube.com/watch?v=MaoA2vqbqQw">
                                <div class="blog_video-play">
                                    <svg width="21" height="26" viewBox="0 0 21 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.27849 2.25039C2.81269 1.95099 2.19999 2.28549 2.19999 2.83929V22.9106C2.19999 23.4644 2.81269 23.7989 3.27849 23.4994L18.8896 13.4638C19.3182 13.1882 19.3182 12.5617 18.8896 12.2861L3.27849 2.25039ZM0.799988 2.83929C0.799988 1.17779 2.63799 0.174386 4.03559 1.07279L19.6466 11.1085C20.9325 11.9351 20.9325 13.8148 19.6466 14.6414L4.03559 24.6771C2.63799 25.5755 0.799988 24.5721 0.799988 22.9106V2.83929Z" fill="black"></path>
                                    </svg>
                                </div>
                            </a>
                        </div>
                        <div class="blog_card-content">
                            <div class="blog_card-title">
                                32 дюйма – удобно или нет? Обзор монитора XTREON XT3266QP
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="blog_card">
                        <div class="blog_video">
                            <img alt="" loading="lazy" width="480" height="360" decoding="async" data-nimg="1" class="img" src="https://i.ytimg.com/vi/MaoA2vqbqQw/hqdefault.jpg" style="color: transparent; object-fit: cover;">
                            <a target="_blank" href="https://www.youtube.com/watch?v=MaoA2vqbqQw">
                                <div class="blog_video-play">
                                    <svg width="21" height="26" viewBox="0 0 21 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.27849 2.25039C2.81269 1.95099 2.19999 2.28549 2.19999 2.83929V22.9106C2.19999 23.4644 2.81269 23.7989 3.27849 23.4994L18.8896 13.4638C19.3182 13.1882 19.3182 12.5617 18.8896 12.2861L3.27849 2.25039ZM0.799988 2.83929C0.799988 1.17779 2.63799 0.174386 4.03559 1.07279L19.6466 11.1085C20.9325 11.9351 20.9325 13.8148 19.6466 14.6414L4.03559 24.6771C2.63799 25.5755 0.799988 24.5721 0.799988 22.9106V2.83929Z" fill="black"></path>
                                    </svg>
                                </div>
                            </a>
                        </div>
                        <div class="blog_card-content">
                            <div class="blog_card-title">
                                32 дюйма – удобно или нет? Обзор монитора XTREON XT3266QP
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="blog_card">
                        <div class="blog_video">
                            <img alt="" loading="lazy" width="480" height="360" decoding="async" data-nimg="1" class="img" src="https://i.ytimg.com/vi/MaoA2vqbqQw/hqdefault.jpg" style="color: transparent; object-fit: cover;">
                            <a target="_blank" href="https://www.youtube.com/watch?v=MaoA2vqbqQw">
                                <div class="blog_video-play">
                                    <svg width="21" height="26" viewBox="0 0 21 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.27849 2.25039C2.81269 1.95099 2.19999 2.28549 2.19999 2.83929V22.9106C2.19999 23.4644 2.81269 23.7989 3.27849 23.4994L18.8896 13.4638C19.3182 13.1882 19.3182 12.5617 18.8896 12.2861L3.27849 2.25039ZM0.799988 2.83929C0.799988 1.17779 2.63799 0.174386 4.03559 1.07279L19.6466 11.1085C20.9325 11.9351 20.9325 13.8148 19.6466 14.6414L4.03559 24.6771C2.63799 25.5755 0.799988 24.5721 0.799988 22.9106V2.83929Z" fill="black"></path>
                                    </svg>
                                </div>
                            </a>
                        </div>
                        <div class="blog_card-content">
                            <div class="blog_card-title">
                                32 дюйма – удобно или нет? Обзор монитора XTREON XT3266QP
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="blog_card">
                        <div class="blog_video">
                            <img alt="" loading="lazy" width="480" height="360" decoding="async" data-nimg="1" class="img" src="https://i.ytimg.com/vi/MaoA2vqbqQw/hqdefault.jpg" style="color: transparent; object-fit: cover;">
                            <a target="_blank" href="https://www.youtube.com/watch?v=MaoA2vqbqQw">
                                <div class="blog_video-play">
                                    <svg width="21" height="26" viewBox="0 0 21 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.27849 2.25039C2.81269 1.95099 2.19999 2.28549 2.19999 2.83929V22.9106C2.19999 23.4644 2.81269 23.7989 3.27849 23.4994L18.8896 13.4638C19.3182 13.1882 19.3182 12.5617 18.8896 12.2861L3.27849 2.25039ZM0.799988 2.83929C0.799988 1.17779 2.63799 0.174386 4.03559 1.07279L19.6466 11.1085C20.9325 11.9351 20.9325 13.8148 19.6466 14.6414L4.03559 24.6771C2.63799 25.5755 0.799988 24.5721 0.799988 22.9106V2.83929Z" fill="black"></path>
                                    </svg>
                                </div>
                            </a>
                        </div>
                        <div class="blog_card-content">
                            <div class="blog_card-title">
                                32 дюйма – удобно или нет? Обзор монитора XTREON XT3266QP
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="blog_card">
                        <div class="blog_video">
                            <img alt="" loading="lazy" width="480" height="360" decoding="async" data-nimg="1" class="img" src="https://i.ytimg.com/vi/MaoA2vqbqQw/hqdefault.jpg" style="color: transparent; object-fit: cover;">
                            <a target="_blank" href="https://www.youtube.com/watch?v=MaoA2vqbqQw">
                                <div class="blog_video-play">
                                    <svg width="21" height="26" viewBox="0 0 21 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.27849 2.25039C2.81269 1.95099 2.19999 2.28549 2.19999 2.83929V22.9106C2.19999 23.4644 2.81269 23.7989 3.27849 23.4994L18.8896 13.4638C19.3182 13.1882 19.3182 12.5617 18.8896 12.2861L3.27849 2.25039ZM0.799988 2.83929C0.799988 1.17779 2.63799 0.174386 4.03559 1.07279L19.6466 11.1085C20.9325 11.9351 20.9325 13.8148 19.6466 14.6414L4.03559 24.6771C2.63799 25.5755 0.799988 24.5721 0.799988 22.9106V2.83929Z" fill="black"></path>
                                    </svg>
                                </div>
                            </a>
                        </div>
                        <div class="blog_card-content">
                            <div class="blog_card-title">
                                32 дюйма – удобно или нет? Обзор монитора XTREON XT3266QP
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="blog_card">
                        <div class="blog_video">
                            <img alt="" loading="lazy" width="480" height="360" decoding="async" data-nimg="1" class="img" src="https://i.ytimg.com/vi/MaoA2vqbqQw/hqdefault.jpg" style="color: transparent; object-fit: cover;">
                            <a target="_blank" href="https://www.youtube.com/watch?v=MaoA2vqbqQw">
                                <div class="blog_video-play">
                                    <svg width="21" height="26" viewBox="0 0 21 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.27849 2.25039C2.81269 1.95099 2.19999 2.28549 2.19999 2.83929V22.9106C2.19999 23.4644 2.81269 23.7989 3.27849 23.4994L18.8896 13.4638C19.3182 13.1882 19.3182 12.5617 18.8896 12.2861L3.27849 2.25039ZM0.799988 2.83929C0.799988 1.17779 2.63799 0.174386 4.03559 1.07279L19.6466 11.1085C20.9325 11.9351 20.9325 13.8148 19.6466 14.6414L4.03559 24.6771C2.63799 25.5755 0.799988 24.5721 0.799988 22.9106V2.83929Z" fill="black"></path>
                                    </svg>
                                </div>
                            </a>
                        </div>
                        <div class="blog_card-content">
                            <div class="blog_card-title">
                                32 дюйма – удобно или нет? Обзор монитора XTREON XT3266QP
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="blog_card">
                        <div class="blog_video">
                            <img alt="" loading="lazy" width="480" height="360" decoding="async" data-nimg="1" class="img" src="https://i.ytimg.com/vi/MaoA2vqbqQw/hqdefault.jpg" style="color: transparent; object-fit: cover;">
                            <a target="_blank" href="https://www.youtube.com/watch?v=MaoA2vqbqQw">
                                <div class="blog_video-play">
                                    <svg width="21" height="26" viewBox="0 0 21 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.27849 2.25039C2.81269 1.95099 2.19999 2.28549 2.19999 2.83929V22.9106C2.19999 23.4644 2.81269 23.7989 3.27849 23.4994L18.8896 13.4638C19.3182 13.1882 19.3182 12.5617 18.8896 12.2861L3.27849 2.25039ZM0.799988 2.83929C0.799988 1.17779 2.63799 0.174386 4.03559 1.07279L19.6466 11.1085C20.9325 11.9351 20.9325 13.8148 19.6466 14.6414L4.03559 24.6771C2.63799 25.5755 0.799988 24.5721 0.799988 22.9106V2.83929Z" fill="black"></path>
                                    </svg>
                                </div>
                            </a>
                        </div>
                        <div class="blog_card-content">
                            <div class="blog_card-title">
                                32 дюйма – удобно или нет? Обзор монитора XTREON XT3266QP
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="blog_card">
                        <div class="blog_video">
                            <img alt="" loading="lazy" width="480" height="360" decoding="async" data-nimg="1" class="img" src="https://i.ytimg.com/vi/MaoA2vqbqQw/hqdefault.jpg" style="color: transparent; object-fit: cover;">
                            <a target="_blank" href="https://www.youtube.com/watch?v=MaoA2vqbqQw">
                                <div class="blog_video-play">
                                    <svg width="21" height="26" viewBox="0 0 21 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.27849 2.25039C2.81269 1.95099 2.19999 2.28549 2.19999 2.83929V22.9106C2.19999 23.4644 2.81269 23.7989 3.27849 23.4994L18.8896 13.4638C19.3182 13.1882 19.3182 12.5617 18.8896 12.2861L3.27849 2.25039ZM0.799988 2.83929C0.799988 1.17779 2.63799 0.174386 4.03559 1.07279L19.6466 11.1085C20.9325 11.9351 20.9325 13.8148 19.6466 14.6414L4.03559 24.6771C2.63799 25.5755 0.799988 24.5721 0.799988 22.9106V2.83929Z" fill="black"></path>
                                    </svg>
                                </div>
                            </a>
                        </div>
                        <div class="blog_card-content">
                            <div class="blog_card-title">
                                32 дюйма – удобно или нет? Обзор монитора XTREON XT3266QP
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="blog_card">
                        <div class="blog_video">
                            <img alt="" loading="lazy" width="480" height="360" decoding="async" data-nimg="1" class="img" src="https://i.ytimg.com/vi/MaoA2vqbqQw/hqdefault.jpg" style="color: transparent; object-fit: cover;">
                            <a target="_blank" href="https://www.youtube.com/watch?v=MaoA2vqbqQw">
                                <div class="blog_video-play">
                                    <svg width="21" height="26" viewBox="0 0 21 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.27849 2.25039C2.81269 1.95099 2.19999 2.28549 2.19999 2.83929V22.9106C2.19999 23.4644 2.81269 23.7989 3.27849 23.4994L18.8896 13.4638C19.3182 13.1882 19.3182 12.5617 18.8896 12.2861L3.27849 2.25039ZM0.799988 2.83929C0.799988 1.17779 2.63799 0.174386 4.03559 1.07279L19.6466 11.1085C20.9325 11.9351 20.9325 13.8148 19.6466 14.6414L4.03559 24.6771C2.63799 25.5755 0.799988 24.5721 0.799988 22.9106V2.83929Z" fill="black"></path>
                                    </svg>
                                </div>
                            </a>
                        </div>
                        <div class="blog_card-content">
                            <div class="blog_card-title">
                                32 дюйма – удобно или нет? Обзор монитора XTREON XT3266QP
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End video -->
    <div class="main-page-content-section__brands">
        <div id="brands-carousel" class="brands-inner">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="#">
                        <img src="assets/images/brands/bivan.svg" alt="">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#">
                        <img src="assets/images/brands/chipolo.svg" alt="">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#">
                        <img src="assets/images/brands/ledger.svg" alt="">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#">
                        <img src="assets/images/brands/miku.svg" alt="">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#">
                        <img src="assets/images/brands/petoneer.svg" alt="">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#">
                        <img src="assets/images/brands/picooc.svg" alt="">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#">
                        <img src="assets/images/brands/xd-design.svg" alt="">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#">
                        <img src="assets/images/brands/zavtra.svg" alt="">
                    </a>
                </div>
                <!-- Loop 2 -->
                <div class="swiper-slide">
                    <a href="#">
                        <img src="assets/images/brands/bivan.svg" alt="">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#">
                        <img src="assets/images/brands/chipolo.svg" alt="">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#">
                        <img src="assets/images/brands/ledger.svg" alt="">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#">
                        <img src="assets/images/brands/miku.svg" alt="">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#">
                        <img src="assets/images/brands/petoneer.svg" alt="">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#">
                        <img src="assets/images/brands/picooc.svg" alt="">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#">
                        <img src="assets/images/brands/xd-design.svg" alt="">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#">
                        <img src="assets/images/brands/zavtra.svg" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper-inner">
        <div class="main-page-content-section__categories">
            <div class="inner-categories">
                <div class="inner-categories__list">
                    <div class="inner-categories__item">
                        <a href="" class="inner-categories-card">
                            <div class="inner-categories-card__img">
                                <img src="assets/images/categories/hits--lg.png" alt="">
                            </div>
                            <div class="inner-categories-card__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" class="svg-icons external-svg-icon">
                                    <path d="M3.043 0H14v11.043h-2.191V3.658L1.549 14 0 12.438l10.148-10.23H3.043V0Z" />
                                </svg>
                            </div>
                            <div class="inner-categories-card__title">Хиты</div>
                        </a>
                    </div>
                    <div class="inner-categories__item">
                        <a href="" class="inner-categories-card">
                            <div class="inner-categories-card__img">
                                <img src="assets/images/categories/certificates--lg.png" alt="">
                            </div>
                            <div class="inner-categories-card__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" class="svg-icons external-svg-icon">
                                    <path d="M3.043 0H14v11.043h-2.191V3.658L1.549 14 0 12.438l10.148-10.23H3.043V0Z" />
                                </svg>
                            </div>
                            <div class="inner-categories-card__title">Сертификаты</div>
                        </a>
                    </div>
                    <div class="inner-categories__item">
                        <a href="" class="inner-categories-card">
                            <div class="inner-categories-card__img">
                                <img src="assets/images/categories/him--lg.png" alt="">
                            </div>
                            <div class="inner-categories-card__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" class="svg-icons external-svg-icon">
                                    <path d="M3.043 0H14v11.043h-2.191V3.658L1.549 14 0 12.438l10.148-10.23H3.043V0Z" />
                                </svg>
                            </div>
                            <div class="inner-categories-card__title">Для него</div>
                        </a>
                    </div>
                    <div class="inner-categories__item">
                        <a href="" class="inner-categories-card">
                            <div class="inner-categories-card__img">
                                <img src="assets/images/categories/her--lg.png" alt="">
                            </div>
                            <div class="inner-categories-card__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" class="svg-icons external-svg-icon">
                                    <path d="M3.043 0H14v11.043h-2.191V3.658L1.549 14 0 12.438l10.148-10.23H3.043V0Z" />
                                </svg>
                            </div>
                            <div class="inner-categories-card__title">Для нее</div>
                        </a>
                    </div>
                    <div class="inner-categories__item">
                        <a href="" class="inner-categories-card">
                            <div class="inner-categories-card__img">
                                <img src="assets/images/categories/sport--lg.png" alt="">
                            </div>
                            <div class="inner-categories-card__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" class="svg-icons external-svg-icon">
                                    <path d="M3.043 0H14v11.043h-2.191V3.658L1.549 14 0 12.438l10.148-10.23H3.043V0Z" />
                                </svg>
                            </div>
                            <div class="inner-categories-card__title">Спорт и отдых</div>
                        </a>
                    </div>
                    <div class="inner-categories__item">
                        <a href="" class="inner-categories-card">
                            <div class="inner-categories-card__img">
                                <img src="assets/images/categories/child--lg.png" alt="">
                            </div>
                            <div class="inner-categories-card__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" class="svg-icons external-svg-icon">
                                    <path d="M3.043 0H14v11.043h-2.191V3.658L1.549 14 0 12.438l10.148-10.23H3.043V0Z" />
                                </svg>
                            </div>
                            <div class="inner-categories-card__title">Детям</div>
                        </a>
                    </div>
                    <div class="inner-categories__item helpers">
                        <a href="#" class="inner-categories-gift-guide">
                            <div class="inner-categories-gift-guide__inner">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" class="inner-categories-gift-guide__icon svg-icons external-svg-icon">
                                    <path d="M3.043 0H14v11.043h-2.191V3.658L1.549 14 0 12.438l10.148-10.23H3.043V0Z" />
                                </svg>
                                <picture>
                                    <source media="(max-width: 991px)" srcset="assets/images/categories/guide-small.png">
                                    <img src="assets/images/categories/guide.png" alt="" class="inner-categories-gift-guide__image">
                                </picture>
                                <div class="inner-categories-gift-guide__title">
                                    Гид по <br> подаркам
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Novelty -->
        <div class="main-page-content-section-products__block">
            <div class="main-inner-products-block">
                <div class="inner-products-block">
                    <!-- Start novelty -->
                    <div class="inner-block__products">
                        <div class="inner-products">
                            <div class="inner-products__main">
                                <h2 class="inner-products__title inner-page-title">
                                    <a href="#">Новинки</a>
                                    <img src="assets/images/products/star.svg" alt="">
                                </h2>
                                <div class="inner-products__desktop hide-mobile">
                                    <div class="swiper-main js-main-products-novelty-slider mainSwiperNoveltySlider">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide main-products__card">
                                                <div class="inner-product-card">
                                                    <div class="inner-product-card__head">
                                                        <div class="inner-product-card__discount">
                                                            <div class="inner-product-discount this-left">
                                                                <div class="inner-product-discount__counting this-left">10%</div>
                                                                <img src="assets/images/products/discount.png" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="inner-product-card__favorite">
                                                            <button class="inner-product-card-favorite inner-outline">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="svg-icons">
                                                                    <path d="M2.485 17.485 16 31l13.515-13.515a8.485 8.485 0 0 0 2.485-6v-.38a8.105 8.105 0 0 0-14.433-5.063L16 8l-1.567-1.958A8.105 8.105 0 0 0 0 11.105v.38c0 2.25.894 4.409 2.485 6Z" />
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="inner-product-card__image">
                                                            <a href="#" class="inner-product-card__image-url" tabindex="-1">
                                                                <img src="assets/images/products/0w3379icz37hiqssiep4r8l366aph63l.jpg" alt="" class="inner-product-card__image-product" lazy="loaded">
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
                                                            <a href="#" class="inner-product-card__title">Термос для еды MIKU 440 мл</a>
                                                        </div>
                                                    </div>
                                                    <div class="inner-product-card__bottom">
                                                        <a href="#" class="inner-product-card__cost">
                                                            <div class="inner-product-card-cost">
                                                                <div class="inner-product-card-cost__old"> 2 290 тг</div>
                                                                <div class="inner-product-card-cost__current this-discount"> 2 061 тг</div>
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
                                            <div class="swiper-slide main-products__card">
                                                <div class="inner-product-card">
                                                    <div class="inner-product-card__head">
                                                        <div class="inner-product-card__discount">
                                                            <div class="inner-product-discount this-left">
                                                                <div class="inner-product-discount__counting this-left">10%</div>
                                                                <img src="assets/images/products/discount.png" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="inner-product-card__favorite">
                                                            <button class="inner-product-card-favorite inner-outline">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="svg-icons">
                                                                    <path d="M2.485 17.485 16 31l13.515-13.515a8.485 8.485 0 0 0 2.485-6v-.38a8.105 8.105 0 0 0-14.433-5.063L16 8l-1.567-1.958A8.105 8.105 0 0 0 0 11.105v.38c0 2.25.894 4.409 2.485 6Z" />
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="inner-product-card__image">
                                                            <a href="#" class="inner-product-card__image-url" tabindex="-1">
                                                                <img src="assets/images/products/0w3379icz37hiqssiep4r8l366aph63l.jpg" alt="" class="inner-product-card__image-product" lazy="loaded">
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
                                                            <a href="#" class="inner-product-card__title">Термос для еды MIKU 440 мл</a>
                                                        </div>
                                                    </div>
                                                    <div class="inner-product-card__bottom">
                                                        <a href="#" class="inner-product-card__cost">
                                                            <div class="inner-product-card-cost">
                                                                <div class="inner-product-card-cost__old"> 2 290 тг</div>
                                                                <div class="inner-product-card-cost__current this-discount"> 2 061 тг</div>
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
                                            <div class="swiper-slide main-products__card">
                                                <div class="inner-product-card">
                                                    <div class="inner-product-card__head">
                                                        <div class="inner-product-card__discount">
                                                            <div class="inner-product-discount this-left">
                                                                <div class="inner-product-discount__counting this-left">10%</div>
                                                                <img src="assets/images/products/discount.png" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="inner-product-card__favorite">
                                                            <button class="inner-product-card-favorite inner-outline">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="svg-icons">
                                                                    <path d="M2.485 17.485 16 31l13.515-13.515a8.485 8.485 0 0 0 2.485-6v-.38a8.105 8.105 0 0 0-14.433-5.063L16 8l-1.567-1.958A8.105 8.105 0 0 0 0 11.105v.38c0 2.25.894 4.409 2.485 6Z" />
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="inner-product-card__image">
                                                            <a href="#" class="inner-product-card__image-url" tabindex="-1">
                                                                <img src="assets/images/products/0w3379icz37hiqssiep4r8l366aph63l.jpg" alt="" class="inner-product-card__image-product" lazy="loaded">
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
                                                            <a href="#" class="inner-product-card__title">Термос для еды MIKU 440 мл</a>
                                                        </div>
                                                    </div>
                                                    <div class="inner-product-card__bottom">
                                                        <a href="#" class="inner-product-card__cost">
                                                            <div class="inner-product-card-cost">
                                                                <div class="inner-product-card-cost__old"> 2 290 тг</div>
                                                                <div class="inner-product-card-cost__current this-discount"> 2 061 тг</div>
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
                                            <div class="swiper-slide main-products__card">
                                                <div class="inner-product-card">
                                                    <div class="inner-product-card__head">
                                                        <div class="inner-product-card__discount">
                                                            <div class="inner-product-discount this-left">
                                                                <div class="inner-product-discount__counting this-left">10%</div>
                                                                <img src="assets/images/products/discount.png" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="inner-product-card__favorite">
                                                            <button class="inner-product-card-favorite inner-outline">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="svg-icons">
                                                                    <path d="M2.485 17.485 16 31l13.515-13.515a8.485 8.485 0 0 0 2.485-6v-.38a8.105 8.105 0 0 0-14.433-5.063L16 8l-1.567-1.958A8.105 8.105 0 0 0 0 11.105v.38c0 2.25.894 4.409 2.485 6Z" />
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="inner-product-card__image">
                                                            <a href="#" class="inner-product-card__image-url" tabindex="-1">
                                                                <img src="assets/images/products/0w3379icz37hiqssiep4r8l366aph63l.jpg" alt="" class="inner-product-card__image-product" lazy="loaded">
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
                                                            <a href="#" class="inner-product-card__title">Термос для еды MIKU 440 мл</a>
                                                        </div>
                                                    </div>
                                                    <div class="inner-product-card__bottom">
                                                        <a href="#" class="inner-product-card__cost">
                                                            <div class="inner-product-card-cost">
                                                                <div class="inner-product-card-cost__old"> 2 290 тг</div>
                                                                <div class="inner-product-card-cost__current this-discount"> 2 061 тг</div>
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
                                            <div class="swiper-slide main-products__card">
                                                <div class="inner-product-card">
                                                    <div class="inner-product-card__head">
                                                        <div class="inner-product-card__discount">
                                                            <div class="inner-product-discount this-left">
                                                                <div class="inner-product-discount__counting this-left">10%</div>
                                                                <img src="assets/images/products/discount.png" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="inner-product-card__favorite">
                                                            <button class="inner-product-card-favorite inner-outline">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="svg-icons">
                                                                    <path d="M2.485 17.485 16 31l13.515-13.515a8.485 8.485 0 0 0 2.485-6v-.38a8.105 8.105 0 0 0-14.433-5.063L16 8l-1.567-1.958A8.105 8.105 0 0 0 0 11.105v.38c0 2.25.894 4.409 2.485 6Z" />
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="inner-product-card__image">
                                                            <a href="#" class="inner-product-card__image-url" tabindex="-1">
                                                                <img src="assets/images/products/0w3379icz37hiqssiep4r8l366aph63l.jpg" alt="" class="inner-product-card__image-product" lazy="loaded">
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
                                                            <a href="#" class="inner-product-card__title">Термос для еды MIKU 440 мл</a>
                                                        </div>
                                                    </div>
                                                    <div class="inner-product-card__bottom">
                                                        <a href="#" class="inner-product-card__cost">
                                                            <div class="inner-product-card-cost">
                                                                <div class="inner-product-card-cost__old"> 2 290 тг</div>
                                                                <div class="inner-product-card-cost__current this-discount"> 2 061 тг</div>
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
                                            <div class="swiper-slide main-products__card">
                                                <div class="inner-product-card">
                                                    <div class="inner-product-card__head">
                                                        <div class="inner-product-card__discount">
                                                            <div class="inner-product-discount this-left">
                                                                <div class="inner-product-discount__counting this-left">10%</div>
                                                                <img src="assets/images/products/discount.png" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="inner-product-card__favorite">
                                                            <button class="inner-product-card-favorite inner-outline">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="svg-icons">
                                                                    <path d="M2.485 17.485 16 31l13.515-13.515a8.485 8.485 0 0 0 2.485-6v-.38a8.105 8.105 0 0 0-14.433-5.063L16 8l-1.567-1.958A8.105 8.105 0 0 0 0 11.105v.38c0 2.25.894 4.409 2.485 6Z" />
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="inner-product-card__image">
                                                            <a href="#" class="inner-product-card__image-url" tabindex="-1">
                                                                <img src="assets/images/products/0w3379icz37hiqssiep4r8l366aph63l.jpg" alt="" class="inner-product-card__image-product" lazy="loaded">
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
                                                            <a href="#" class="inner-product-card__title">Термос для еды MIKU 440 мл</a>
                                                        </div>
                                                    </div>
                                                    <div class="inner-product-card__bottom">
                                                        <a href="#" class="inner-product-card__cost">
                                                            <div class="inner-product-card-cost">
                                                                <div class="inner-product-card-cost__old"> 2 290 тг</div>
                                                                <div class="inner-product-card-cost__current this-discount"> 2 061 тг</div>
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
                                            <div class="swiper-slide main-products__card">
                                                <div class="inner-product-card">
                                                    <div class="inner-product-card__head">
                                                        <div class="inner-product-card__discount">
                                                            <div class="inner-product-discount this-left">
                                                                <div class="inner-product-discount__counting this-left">10%</div>
                                                                <img src="assets/images/products/discount.png" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="inner-product-card__favorite">
                                                            <button class="inner-product-card-favorite inner-outline">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="svg-icons">
                                                                    <path d="M2.485 17.485 16 31l13.515-13.515a8.485 8.485 0 0 0 2.485-6v-.38a8.105 8.105 0 0 0-14.433-5.063L16 8l-1.567-1.958A8.105 8.105 0 0 0 0 11.105v.38c0 2.25.894 4.409 2.485 6Z" />
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="inner-product-card__image">
                                                            <a href="#" class="inner-product-card__image-url" tabindex="-1">
                                                                <img src="assets/images/products/0w3379icz37hiqssiep4r8l366aph63l.jpg" alt="" class="inner-product-card__image-product" lazy="loaded">
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
                                                            <a href="#" class="inner-product-card__title">Термос для еды MIKU 440 мл</a>
                                                        </div>
                                                    </div>
                                                    <div class="inner-product-card__bottom">
                                                        <a href="#" class="inner-product-card__cost">
                                                            <div class="inner-product-card-cost">
                                                                <div class="inner-product-card-cost__old"> 2 290 тг</div>
                                                                <div class="inner-product-card-cost__current this-discount"> 2 061 тг</div>
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
                                            <div class="swiper-slide main-products__card">
                                                <div class="inner-product-card">
                                                    <div class="inner-product-card__head">
                                                        <div class="inner-product-card__discount">
                                                            <div class="inner-product-discount this-left">
                                                                <div class="inner-product-discount__counting this-left">10%</div>
                                                                <img src="assets/images/products/discount.png" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="inner-product-card__favorite">
                                                            <button class="inner-product-card-favorite inner-outline">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="svg-icons">
                                                                    <path d="M2.485 17.485 16 31l13.515-13.515a8.485 8.485 0 0 0 2.485-6v-.38a8.105 8.105 0 0 0-14.433-5.063L16 8l-1.567-1.958A8.105 8.105 0 0 0 0 11.105v.38c0 2.25.894 4.409 2.485 6Z" />
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="inner-product-card__image">
                                                            <a href="#" class="inner-product-card__image-url" tabindex="-1">
                                                                <img src="assets/images/products/0w3379icz37hiqssiep4r8l366aph63l.jpg" alt="" class="inner-product-card__image-product" lazy="loaded">
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
                                                            <a href="#" class="inner-product-card__title">Термос для еды MIKU 440 мл</a>
                                                        </div>
                                                    </div>
                                                    <div class="inner-product-card__bottom">
                                                        <a href="#" class="inner-product-card__cost">
                                                            <div class="inner-product-card-cost">
                                                                <div class="inner-product-card-cost__old"> 2 290 тг</div>
                                                                <div class="inner-product-card-cost__current this-discount"> 2 061 тг</div>
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
                                            <div class="swiper-slide main-products__card">
                                                <div class="inner-product-card">
                                                    <div class="inner-product-card__head">
                                                        <div class="inner-product-card__discount">
                                                            <div class="inner-product-discount this-left">
                                                                <div class="inner-product-discount__counting this-left">10%</div>
                                                                <img src="assets/images/products/discount.png" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="inner-product-card__favorite">
                                                            <button class="inner-product-card-favorite inner-outline">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="svg-icons">
                                                                    <path d="M2.485 17.485 16 31l13.515-13.515a8.485 8.485 0 0 0 2.485-6v-.38a8.105 8.105 0 0 0-14.433-5.063L16 8l-1.567-1.958A8.105 8.105 0 0 0 0 11.105v.38c0 2.25.894 4.409 2.485 6Z" />
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="inner-product-card__image">
                                                            <a href="#" class="inner-product-card__image-url" tabindex="-1">
                                                                <img src="assets/images/products/0w3379icz37hiqssiep4r8l366aph63l.jpg" alt="" class="inner-product-card__image-product" lazy="loaded">
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
                                                            <a href="#" class="inner-product-card__title">Термос для еды MIKU 440 мл</a>
                                                        </div>
                                                    </div>
                                                    <div class="inner-product-card__bottom">
                                                        <a href="#" class="inner-product-card__cost">
                                                            <div class="inner-product-card-cost">
                                                                <div class="inner-product-card-cost__old"> 2 290 тг</div>
                                                                <div class="inner-product-card-cost__current this-discount"> 2 061 тг</div>
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
                                            <div class="swiper-slide main-products__card">
                                                <div class="inner-product-card">
                                                    <div class="inner-product-card__head">
                                                        <div class="inner-product-card__discount">
                                                            <div class="inner-product-discount this-left">
                                                                <div class="inner-product-discount__counting this-left">10%</div>
                                                                <img src="assets/images/products/discount.png" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="inner-product-card__favorite">
                                                            <button class="inner-product-card-favorite inner-outline">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="svg-icons">
                                                                    <path d="M2.485 17.485 16 31l13.515-13.515a8.485 8.485 0 0 0 2.485-6v-.38a8.105 8.105 0 0 0-14.433-5.063L16 8l-1.567-1.958A8.105 8.105 0 0 0 0 11.105v.38c0 2.25.894 4.409 2.485 6Z" />
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="inner-product-card__image">
                                                            <a href="#" class="inner-product-card__image-url" tabindex="-1">
                                                                <img src="assets/images/products/0w3379icz37hiqssiep4r8l366aph63l.jpg" alt="" class="inner-product-card__image-product" lazy="loaded">
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
                                                            <a href="#" class="inner-product-card__title">Термос для еды MIKU 440 мл</a>
                                                        </div>
                                                    </div>
                                                    <div class="inner-product-card__bottom">
                                                        <a href="#" class="inner-product-card__cost">
                                                            <div class="inner-product-card-cost">
                                                                <div class="inner-product-card-cost__old"> 2 290 тг</div>
                                                                <div class="inner-product-card-cost__current this-discount"> 2 061 тг</div>
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
                                            <div class="swiper-slide main-products__card">
                                                <div class="inner-product-card">
                                                    <div class="inner-product-card__head">
                                                        <div class="inner-product-card__discount">
                                                            <div class="inner-product-discount this-left">
                                                                <div class="inner-product-discount__counting this-left">10%</div>
                                                                <img src="assets/images/products/discount.png" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="inner-product-card__favorite">
                                                            <button class="inner-product-card-favorite inner-outline">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="svg-icons">
                                                                    <path d="M2.485 17.485 16 31l13.515-13.515a8.485 8.485 0 0 0 2.485-6v-.38a8.105 8.105 0 0 0-14.433-5.063L16 8l-1.567-1.958A8.105 8.105 0 0 0 0 11.105v.38c0 2.25.894 4.409 2.485 6Z" />
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="inner-product-card__image">
                                                            <a href="#" class="inner-product-card__image-url" tabindex="-1">
                                                                <img src="assets/images/products/0w3379icz37hiqssiep4r8l366aph63l.jpg" alt="" class="inner-product-card__image-product" lazy="loaded">
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
                                                            <a href="#" class="inner-product-card__title">Термос для еды MIKU 440 мл</a>
                                                        </div>
                                                    </div>
                                                    <div class="inner-product-card__bottom">
                                                        <a href="#" class="inner-product-card__cost">
                                                            <div class="inner-product-card-cost">
                                                                <div class="inner-product-card-cost__old"> 2 290 тг</div>
                                                                <div class="inner-product-card-cost__current this-discount"> 2 061 тг</div>
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
                                            <div class="swiper-slide main-products__card">
                                                <div class="inner-product-card">
                                                    <div class="inner-product-card__head">
                                                        <div class="inner-product-card__discount">
                                                            <div class="inner-product-discount this-left">
                                                                <div class="inner-product-discount__counting this-left">10%</div>
                                                                <img src="assets/images/products/discount.png" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="inner-product-card__favorite">
                                                            <button class="inner-product-card-favorite inner-outline">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="svg-icons">
                                                                    <path d="M2.485 17.485 16 31l13.515-13.515a8.485 8.485 0 0 0 2.485-6v-.38a8.105 8.105 0 0 0-14.433-5.063L16 8l-1.567-1.958A8.105 8.105 0 0 0 0 11.105v.38c0 2.25.894 4.409 2.485 6Z" />
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="inner-product-card__image">
                                                            <a href="#" class="inner-product-card__image-url" tabindex="-1">
                                                                <img src="assets/images/products/0w3379icz37hiqssiep4r8l366aph63l.jpg" alt="" class="inner-product-card__image-product" lazy="loaded">
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
                                                            <a href="#" class="inner-product-card__title">Термос для еды MIKU 440 мл</a>
                                                        </div>
                                                    </div>
                                                    <div class="inner-product-card__bottom">
                                                        <a href="#" class="inner-product-card__cost">
                                                            <div class="inner-product-card-cost">
                                                                <div class="inner-product-card-cost__old"> 2 290 тг</div>
                                                                <div class="inner-product-card-cost__current this-discount"> 2 061 тг</div>
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
                                        </div>
                                    </div>
                                </div>
                                <div class="inner-products__mobile hide-desktop">
                                    <div class="main-products__card">
                                        <div class="inner-product-card">
                                            <div class="inner-product-card__head">
                                                <div class="inner-product-card__discount">
                                                    <div class="inner-product-discount this-left">
                                                        <div class="inner-product-discount__counting this-left">10%</div>
                                                        <img src="assets/images/products/discount.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="inner-product-card__favorite">
                                                    <button class="inner-product-card-favorite inner-outline">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="svg-icons">
                                                            <path d="M2.485 17.485 16 31l13.515-13.515a8.485 8.485 0 0 0 2.485-6v-.38a8.105 8.105 0 0 0-14.433-5.063L16 8l-1.567-1.958A8.105 8.105 0 0 0 0 11.105v.38c0 2.25.894 4.409 2.485 6Z" />
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="inner-product-card__image">
                                                    <a href="#" class="inner-product-card__image-url" tabindex="-1">
                                                        <img src="assets/images/products/0w3379icz37hiqssiep4r8l366aph63l.jpg" alt="" class="inner-product-card__image-product" lazy="loaded">
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
                                                    <a href="#" class="inner-product-card__title">Термос для еды MIKU 440 мл</a>
                                                </div>
                                            </div>
                                            <div class="inner-product-card__bottom">
                                                <a href="#" class="inner-product-card__cost">
                                                    <div class="inner-product-card-cost">
                                                        <div class="inner-product-card-cost__old"> 2 290 тг</div>
                                                        <div class="inner-product-card-cost__current this-discount"> 2 061 тг</div>
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
                                    <!-- 2 -->
                                    <div class="main-products__card">
                                        <div class="inner-product-card">
                                            <div class="inner-product-card__head">
                                                <div class="inner-product-card__discount">
                                                    <div class="inner-product-discount this-left">
                                                        <div class="inner-product-discount__counting this-left">10%</div>
                                                        <img src="assets/images/products/discount.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="inner-product-card__favorite">
                                                    <button class="inner-product-card-favorite inner-outline">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="svg-icons">
                                                            <path d="M2.485 17.485 16 31l13.515-13.515a8.485 8.485 0 0 0 2.485-6v-.38a8.105 8.105 0 0 0-14.433-5.063L16 8l-1.567-1.958A8.105 8.105 0 0 0 0 11.105v.38c0 2.25.894 4.409 2.485 6Z" />
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="inner-product-card__image">
                                                    <a href="#" class="inner-product-card__image-url" tabindex="-1">
                                                        <img src="assets/images/products/0w3379icz37hiqssiep4r8l366aph63l.jpg" alt="" class="inner-product-card__image-product" lazy="loaded">
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
                                                    <a href="#" class="inner-product-card__title">Термос для еды MIKU 440 мл</a>
                                                </div>
                                            </div>
                                            <div class="inner-product-card__bottom">
                                                <a href="#" class="inner-product-card__cost">
                                                    <div class="inner-product-card-cost">
                                                        <div class="inner-product-card-cost__old"> 2 290 тг</div>
                                                        <div class="inner-product-card-cost__current this-discount"> 2 061 тг</div>
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
                                    <!-- 3 -->
                                    <div class="main-products__card">
                                        <div class="inner-product-card">
                                            <div class="inner-product-card__head">
                                                <div class="inner-product-card__discount">
                                                    <div class="inner-product-discount this-left">
                                                        <div class="inner-product-discount__counting this-left">10%</div>
                                                        <img src="assets/images/products/discount.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="inner-product-card__favorite">
                                                    <button class="inner-product-card-favorite inner-outline">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="svg-icons">
                                                            <path d="M2.485 17.485 16 31l13.515-13.515a8.485 8.485 0 0 0 2.485-6v-.38a8.105 8.105 0 0 0-14.433-5.063L16 8l-1.567-1.958A8.105 8.105 0 0 0 0 11.105v.38c0 2.25.894 4.409 2.485 6Z" />
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="inner-product-card__image">
                                                    <a href="#" class="inner-product-card__image-url" tabindex="-1">
                                                        <img src="assets/images/products/0w3379icz37hiqssiep4r8l366aph63l.jpg" alt="" class="inner-product-card__image-product" lazy="loaded">
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
                                                    <a href="#" class="inner-product-card__title">Термос для еды MIKU 440 мл</a>
                                                </div>
                                            </div>
                                            <div class="inner-product-card__bottom">
                                                <a href="#" class="inner-product-card__cost">
                                                    <div class="inner-product-card-cost">
                                                        <div class="inner-product-card-cost__old"> 2 290 тг</div>
                                                        <div class="inner-product-card-cost__current this-discount"> 2 061 тг</div>
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
                                    <!-- 4 -->
                                    <div class="main-products__card">
                                        <div class="inner-product-card">
                                            <div class="inner-product-card__head">
                                                <div class="inner-product-card__discount">
                                                    <div class="inner-product-discount this-left">
                                                        <div class="inner-product-discount__counting this-left">10%</div>
                                                        <img src="assets/images/products/discount.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="inner-product-card__favorite">
                                                    <button class="inner-product-card-favorite inner-outline">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="svg-icons">
                                                            <path d="M2.485 17.485 16 31l13.515-13.515a8.485 8.485 0 0 0 2.485-6v-.38a8.105 8.105 0 0 0-14.433-5.063L16 8l-1.567-1.958A8.105 8.105 0 0 0 0 11.105v.38c0 2.25.894 4.409 2.485 6Z" />
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="inner-product-card__image">
                                                    <a href="#" class="inner-product-card__image-url" tabindex="-1">
                                                        <img src="assets/images/products/0w3379icz37hiqssiep4r8l366aph63l.jpg" alt="" class="inner-product-card__image-product" lazy="loaded">
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
                                                    <a href="#" class="inner-product-card__title">Термос для еды MIKU 440 мл</a>
                                                </div>
                                            </div>
                                            <div class="inner-product-card__bottom">
                                                <a href="#" class="inner-product-card__cost">
                                                    <div class="inner-product-card-cost">
                                                        <div class="inner-product-card-cost__old"> 2 290 тг</div>
                                                        <div class="inner-product-card-cost__current this-discount"> 2 061 тг</div>
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
                                </div>
                                <a href="#" class="inner-products__link hide-desktop"> 
                                    Больше новинок 
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" class="svg-icons svg-icon--external">
                                        <path d="M3.043 0H14v11.043h-2.191V3.658L1.549 14 0 12.438l10.148-10.23H3.043V0Z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End novelty -->
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
                                            <div class="swiper-slide main-products__card">
                                                <div class="inner-product-card">
                                                    <div class="inner-product-card__head">
                                                        <div class="inner-product-card__discount">
                                                            <div class="inner-product-discount this-left">
                                                                <div class="inner-product-discount__counting this-left">10%</div>
                                                                <img src="assets/images/products/discount.png" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="inner-product-card__favorite">
                                                            <button class="inner-product-card-favorite inner-outline">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="svg-icons">
                                                                    <path d="M2.485 17.485 16 31l13.515-13.515a8.485 8.485 0 0 0 2.485-6v-.38a8.105 8.105 0 0 0-14.433-5.063L16 8l-1.567-1.958A8.105 8.105 0 0 0 0 11.105v.38c0 2.25.894 4.409 2.485 6Z" />
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="inner-product-card__image">
                                                            <a href="#" class="inner-product-card__image-url" tabindex="-1">
                                                                <img src="assets/images/products/0w3379icz37hiqssiep4r8l366aph63l.jpg" alt="" class="inner-product-card__image-product" lazy="loaded">
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
                                                            <a href="#" class="inner-product-card__title">Термос для еды MIKU 440 мл</a>
                                                        </div>
                                                    </div>
                                                    <div class="inner-product-card__bottom">
                                                        <a href="#" class="inner-product-card__cost">
                                                            <div class="inner-product-card-cost">
                                                                <div class="inner-product-card-cost__old"> 2 290 тг</div>
                                                                <div class="inner-product-card-cost__current this-discount"> 2 061 тг</div>
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
                                            <div class="swiper-slide main-products__card">
                                                <div class="inner-product-card">
                                                    <div class="inner-product-card__head">
                                                        <div class="inner-product-card__discount">
                                                            <div class="inner-product-discount this-left">
                                                                <div class="inner-product-discount__counting this-left">10%</div>
                                                                <img src="assets/images/products/discount.png" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="inner-product-card__favorite">
                                                            <button class="inner-product-card-favorite inner-outline">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="svg-icons">
                                                                    <path d="M2.485 17.485 16 31l13.515-13.515a8.485 8.485 0 0 0 2.485-6v-.38a8.105 8.105 0 0 0-14.433-5.063L16 8l-1.567-1.958A8.105 8.105 0 0 0 0 11.105v.38c0 2.25.894 4.409 2.485 6Z" />
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="inner-product-card__image">
                                                            <a href="#" class="inner-product-card__image-url" tabindex="-1">
                                                                <img src="assets/images/products/0w3379icz37hiqssiep4r8l366aph63l.jpg" alt="" class="inner-product-card__image-product" lazy="loaded">
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
                                                            <a href="#" class="inner-product-card__title">Термос для еды MIKU 440 мл</a>
                                                        </div>
                                                    </div>
                                                    <div class="inner-product-card__bottom">
                                                        <a href="#" class="inner-product-card__cost">
                                                            <div class="inner-product-card-cost">
                                                                <div class="inner-product-card-cost__old"> 2 290 тг</div>
                                                                <div class="inner-product-card-cost__current this-discount"> 2 061 тг</div>
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
                                            <div class="swiper-slide main-products__card">
                                                <div class="inner-product-card">
                                                    <div class="inner-product-card__head">
                                                        <div class="inner-product-card__discount">
                                                            <div class="inner-product-discount this-left">
                                                                <div class="inner-product-discount__counting this-left">10%</div>
                                                                <img src="assets/images/products/discount.png" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="inner-product-card__favorite">
                                                            <button class="inner-product-card-favorite inner-outline">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="svg-icons">
                                                                    <path d="M2.485 17.485 16 31l13.515-13.515a8.485 8.485 0 0 0 2.485-6v-.38a8.105 8.105 0 0 0-14.433-5.063L16 8l-1.567-1.958A8.105 8.105 0 0 0 0 11.105v.38c0 2.25.894 4.409 2.485 6Z" />
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="inner-product-card__image">
                                                            <a href="#" class="inner-product-card__image-url" tabindex="-1">
                                                                <img src="assets/images/products/0w3379icz37hiqssiep4r8l366aph63l.jpg" alt="" class="inner-product-card__image-product" lazy="loaded">
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
                                                            <a href="#" class="inner-product-card__title">Термос для еды MIKU 440 мл</a>
                                                        </div>
                                                    </div>
                                                    <div class="inner-product-card__bottom">
                                                        <a href="#" class="inner-product-card__cost">
                                                            <div class="inner-product-card-cost">
                                                                <div class="inner-product-card-cost__old"> 2 290 тг</div>
                                                                <div class="inner-product-card-cost__current this-discount"> 2 061 тг</div>
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
                                            <div class="swiper-slide main-products__card">
                                                <div class="inner-product-card">
                                                    <div class="inner-product-card__head">
                                                        <div class="inner-product-card__discount">
                                                            <div class="inner-product-discount this-left">
                                                                <div class="inner-product-discount__counting this-left">10%</div>
                                                                <img src="assets/images/products/discount.png" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="inner-product-card__favorite">
                                                            <button class="inner-product-card-favorite inner-outline">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="svg-icons">
                                                                    <path d="M2.485 17.485 16 31l13.515-13.515a8.485 8.485 0 0 0 2.485-6v-.38a8.105 8.105 0 0 0-14.433-5.063L16 8l-1.567-1.958A8.105 8.105 0 0 0 0 11.105v.38c0 2.25.894 4.409 2.485 6Z" />
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="inner-product-card__image">
                                                            <a href="#" class="inner-product-card__image-url" tabindex="-1">
                                                                <img src="assets/images/products/0w3379icz37hiqssiep4r8l366aph63l.jpg" alt="" class="inner-product-card__image-product" lazy="loaded">
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
                                                            <a href="#" class="inner-product-card__title">Термос для еды MIKU 440 мл</a>
                                                        </div>
                                                    </div>
                                                    <div class="inner-product-card__bottom">
                                                        <a href="#" class="inner-product-card__cost">
                                                            <div class="inner-product-card-cost">
                                                                <div class="inner-product-card-cost__old"> 2 290 тг</div>
                                                                <div class="inner-product-card-cost__current this-discount"> 2 061 тг</div>
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
                                            <div class="swiper-slide main-products__card">
                                                <div class="inner-product-card">
                                                    <div class="inner-product-card__head">
                                                        <div class="inner-product-card__discount">
                                                            <div class="inner-product-discount this-left">
                                                                <div class="inner-product-discount__counting this-left">10%</div>
                                                                <img src="assets/images/products/discount.png" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="inner-product-card__favorite">
                                                            <button class="inner-product-card-favorite inner-outline">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="svg-icons">
                                                                    <path d="M2.485 17.485 16 31l13.515-13.515a8.485 8.485 0 0 0 2.485-6v-.38a8.105 8.105 0 0 0-14.433-5.063L16 8l-1.567-1.958A8.105 8.105 0 0 0 0 11.105v.38c0 2.25.894 4.409 2.485 6Z" />
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="inner-product-card__image">
                                                            <a href="#" class="inner-product-card__image-url" tabindex="-1">
                                                                <img src="assets/images/products/0w3379icz37hiqssiep4r8l366aph63l.jpg" alt="" class="inner-product-card__image-product" lazy="loaded">
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
                                                            <a href="#" class="inner-product-card__title">Термос для еды MIKU 440 мл</a>
                                                        </div>
                                                    </div>
                                                    <div class="inner-product-card__bottom">
                                                        <a href="#" class="inner-product-card__cost">
                                                            <div class="inner-product-card-cost">
                                                                <div class="inner-product-card-cost__old"> 2 290 тг</div>
                                                                <div class="inner-product-card-cost__current this-discount"> 2 061 тг</div>
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
                                            <div class="swiper-slide main-products__card">
                                                <div class="inner-product-card">
                                                    <div class="inner-product-card__head">
                                                        <div class="inner-product-card__discount">
                                                            <div class="inner-product-discount this-left">
                                                                <div class="inner-product-discount__counting this-left">10%</div>
                                                                <img src="assets/images/products/discount.png" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="inner-product-card__favorite">
                                                            <button class="inner-product-card-favorite inner-outline">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="svg-icons">
                                                                    <path d="M2.485 17.485 16 31l13.515-13.515a8.485 8.485 0 0 0 2.485-6v-.38a8.105 8.105 0 0 0-14.433-5.063L16 8l-1.567-1.958A8.105 8.105 0 0 0 0 11.105v.38c0 2.25.894 4.409 2.485 6Z" />
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="inner-product-card__image">
                                                            <a href="#" class="inner-product-card__image-url" tabindex="-1">
                                                                <img src="assets/images/products/0w3379icz37hiqssiep4r8l366aph63l.jpg" alt="" class="inner-product-card__image-product" lazy="loaded">
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
                                                            <a href="#" class="inner-product-card__title">Термос для еды MIKU 440 мл</a>
                                                        </div>
                                                    </div>
                                                    <div class="inner-product-card__bottom">
                                                        <a href="#" class="inner-product-card__cost">
                                                            <div class="inner-product-card-cost">
                                                                <div class="inner-product-card-cost__old"> 2 290 тг</div>
                                                                <div class="inner-product-card-cost__current this-discount"> 2 061 тг</div>
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
                                            <div class="swiper-slide main-products__card">
                                                <div class="inner-product-card">
                                                    <div class="inner-product-card__head">
                                                        <div class="inner-product-card__discount">
                                                            <div class="inner-product-discount this-left">
                                                                <div class="inner-product-discount__counting this-left">10%</div>
                                                                <img src="assets/images/products/discount.png" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="inner-product-card__favorite">
                                                            <button class="inner-product-card-favorite inner-outline">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="svg-icons">
                                                                    <path d="M2.485 17.485 16 31l13.515-13.515a8.485 8.485 0 0 0 2.485-6v-.38a8.105 8.105 0 0 0-14.433-5.063L16 8l-1.567-1.958A8.105 8.105 0 0 0 0 11.105v.38c0 2.25.894 4.409 2.485 6Z" />
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="inner-product-card__image">
                                                            <a href="#" class="inner-product-card__image-url" tabindex="-1">
                                                                <img src="assets/images/products/0w3379icz37hiqssiep4r8l366aph63l.jpg" alt="" class="inner-product-card__image-product" lazy="loaded">
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
                                                            <a href="#" class="inner-product-card__title">Термос для еды MIKU 440 мл</a>
                                                        </div>
                                                    </div>
                                                    <div class="inner-product-card__bottom">
                                                        <a href="#" class="inner-product-card__cost">
                                                            <div class="inner-product-card-cost">
                                                                <div class="inner-product-card-cost__old"> 2 290 тг</div>
                                                                <div class="inner-product-card-cost__current this-discount"> 2 061 тг</div>
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
                                            <div class="swiper-slide main-products__card">
                                                <div class="inner-product-card">
                                                    <div class="inner-product-card__head">
                                                        <div class="inner-product-card__discount">
                                                            <div class="inner-product-discount this-left">
                                                                <div class="inner-product-discount__counting this-left">10%</div>
                                                                <img src="assets/images/products/discount.png" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="inner-product-card__favorite">
                                                            <button class="inner-product-card-favorite inner-outline">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="svg-icons">
                                                                    <path d="M2.485 17.485 16 31l13.515-13.515a8.485 8.485 0 0 0 2.485-6v-.38a8.105 8.105 0 0 0-14.433-5.063L16 8l-1.567-1.958A8.105 8.105 0 0 0 0 11.105v.38c0 2.25.894 4.409 2.485 6Z" />
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="inner-product-card__image">
                                                            <a href="#" class="inner-product-card__image-url" tabindex="-1">
                                                                <img src="assets/images/products/0w3379icz37hiqssiep4r8l366aph63l.jpg" alt="" class="inner-product-card__image-product" lazy="loaded">
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
                                                            <a href="#" class="inner-product-card__title">Термос для еды MIKU 440 мл</a>
                                                        </div>
                                                    </div>
                                                    <div class="inner-product-card__bottom">
                                                        <a href="#" class="inner-product-card__cost">
                                                            <div class="inner-product-card-cost">
                                                                <div class="inner-product-card-cost__old"> 2 290 тг</div>
                                                                <div class="inner-product-card-cost__current this-discount"> 2 061 тг</div>
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
                                            <div class="swiper-slide main-products__card">
                                                <div class="inner-product-card">
                                                    <div class="inner-product-card__head">
                                                        <div class="inner-product-card__discount">
                                                            <div class="inner-product-discount this-left">
                                                                <div class="inner-product-discount__counting this-left">10%</div>
                                                                <img src="assets/images/products/discount.png" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="inner-product-card__favorite">
                                                            <button class="inner-product-card-favorite inner-outline">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="svg-icons">
                                                                    <path d="M2.485 17.485 16 31l13.515-13.515a8.485 8.485 0 0 0 2.485-6v-.38a8.105 8.105 0 0 0-14.433-5.063L16 8l-1.567-1.958A8.105 8.105 0 0 0 0 11.105v.38c0 2.25.894 4.409 2.485 6Z" />
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="inner-product-card__image">
                                                            <a href="#" class="inner-product-card__image-url" tabindex="-1">
                                                                <img src="assets/images/products/0w3379icz37hiqssiep4r8l366aph63l.jpg" alt="" class="inner-product-card__image-product" lazy="loaded">
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
                                                            <a href="#" class="inner-product-card__title">Термос для еды MIKU 440 мл</a>
                                                        </div>
                                                    </div>
                                                    <div class="inner-product-card__bottom">
                                                        <a href="#" class="inner-product-card__cost">
                                                            <div class="inner-product-card-cost">
                                                                <div class="inner-product-card-cost__old"> 2 290 тг</div>
                                                                <div class="inner-product-card-cost__current this-discount"> 2 061 тг</div>
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
                                            <div class="swiper-slide main-products__card">
                                                <div class="inner-product-card">
                                                    <div class="inner-product-card__head">
                                                        <div class="inner-product-card__discount">
                                                            <div class="inner-product-discount this-left">
                                                                <div class="inner-product-discount__counting this-left">10%</div>
                                                                <img src="assets/images/products/discount.png" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="inner-product-card__favorite">
                                                            <button class="inner-product-card-favorite inner-outline">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="svg-icons">
                                                                    <path d="M2.485 17.485 16 31l13.515-13.515a8.485 8.485 0 0 0 2.485-6v-.38a8.105 8.105 0 0 0-14.433-5.063L16 8l-1.567-1.958A8.105 8.105 0 0 0 0 11.105v.38c0 2.25.894 4.409 2.485 6Z" />
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="inner-product-card__image">
                                                            <a href="#" class="inner-product-card__image-url" tabindex="-1">
                                                                <img src="assets/images/products/0w3379icz37hiqssiep4r8l366aph63l.jpg" alt="" class="inner-product-card__image-product" lazy="loaded">
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
                                                            <a href="#" class="inner-product-card__title">Термос для еды MIKU 440 мл</a>
                                                        </div>
                                                    </div>
                                                    <div class="inner-product-card__bottom">
                                                        <a href="#" class="inner-product-card__cost">
                                                            <div class="inner-product-card-cost">
                                                                <div class="inner-product-card-cost__old"> 2 290 тг</div>
                                                                <div class="inner-product-card-cost__current this-discount"> 2 061 тг</div>
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
                                            <div class="swiper-slide main-products__card">
                                                <div class="inner-product-card">
                                                    <div class="inner-product-card__head">
                                                        <div class="inner-product-card__discount">
                                                            <div class="inner-product-discount this-left">
                                                                <div class="inner-product-discount__counting this-left">10%</div>
                                                                <img src="assets/images/products/discount.png" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="inner-product-card__favorite">
                                                            <button class="inner-product-card-favorite inner-outline">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="svg-icons">
                                                                    <path d="M2.485 17.485 16 31l13.515-13.515a8.485 8.485 0 0 0 2.485-6v-.38a8.105 8.105 0 0 0-14.433-5.063L16 8l-1.567-1.958A8.105 8.105 0 0 0 0 11.105v.38c0 2.25.894 4.409 2.485 6Z" />
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="inner-product-card__image">
                                                            <a href="#" class="inner-product-card__image-url" tabindex="-1">
                                                                <img src="assets/images/products/0w3379icz37hiqssiep4r8l366aph63l.jpg" alt="" class="inner-product-card__image-product" lazy="loaded">
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
                                                            <a href="#" class="inner-product-card__title">Термос для еды MIKU 440 мл</a>
                                                        </div>
                                                    </div>
                                                    <div class="inner-product-card__bottom">
                                                        <a href="#" class="inner-product-card__cost">
                                                            <div class="inner-product-card-cost">
                                                                <div class="inner-product-card-cost__old"> 2 290 тг</div>
                                                                <div class="inner-product-card-cost__current this-discount"> 2 061 тг</div>
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
                                            <div class="swiper-slide main-products__card">
                                                <div class="inner-product-card">
                                                    <div class="inner-product-card__head">
                                                        <div class="inner-product-card__discount">
                                                            <div class="inner-product-discount this-left">
                                                                <div class="inner-product-discount__counting this-left">10%</div>
                                                                <img src="assets/images/products/discount.png" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="inner-product-card__favorite">
                                                            <button class="inner-product-card-favorite inner-outline">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="svg-icons">
                                                                    <path d="M2.485 17.485 16 31l13.515-13.515a8.485 8.485 0 0 0 2.485-6v-.38a8.105 8.105 0 0 0-14.433-5.063L16 8l-1.567-1.958A8.105 8.105 0 0 0 0 11.105v.38c0 2.25.894 4.409 2.485 6Z" />
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="inner-product-card__image">
                                                            <a href="#" class="inner-product-card__image-url" tabindex="-1">
                                                                <img src="assets/images/products/0w3379icz37hiqssiep4r8l366aph63l.jpg" alt="" class="inner-product-card__image-product" lazy="loaded">
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
                                                            <a href="#" class="inner-product-card__title">Термос для еды MIKU 440 мл</a>
                                                        </div>
                                                    </div>
                                                    <div class="inner-product-card__bottom">
                                                        <a href="#" class="inner-product-card__cost">
                                                            <div class="inner-product-card-cost">
                                                                <div class="inner-product-card-cost__old"> 2 290 тг</div>
                                                                <div class="inner-product-card-cost__current this-discount"> 2 061 тг</div>
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
                                        </div>
                                    </div>
                                </div>
                                <div class="inner-products__mobile hide-desktop">
                                    <div class="main-products__card">
                                        <div class="inner-product-card">
                                            <div class="inner-product-card__head">
                                                <div class="inner-product-card__discount">
                                                    <div class="inner-product-discount this-left">
                                                        <div class="inner-product-discount__counting this-left">10%</div>
                                                        <img src="assets/images/products/discount.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="inner-product-card__favorite">
                                                    <button class="inner-product-card-favorite inner-outline">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="svg-icons">
                                                            <path d="M2.485 17.485 16 31l13.515-13.515a8.485 8.485 0 0 0 2.485-6v-.38a8.105 8.105 0 0 0-14.433-5.063L16 8l-1.567-1.958A8.105 8.105 0 0 0 0 11.105v.38c0 2.25.894 4.409 2.485 6Z" />
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="inner-product-card__image">
                                                    <a href="#" class="inner-product-card__image-url" tabindex="-1">
                                                        <img src="assets/images/products/0w3379icz37hiqssiep4r8l366aph63l.jpg" alt="" class="inner-product-card__image-product" lazy="loaded">
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
                                                    <a href="#" class="inner-product-card__title">Термос для еды MIKU 440 мл</a>
                                                </div>
                                            </div>
                                            <div class="inner-product-card__bottom">
                                                <a href="#" class="inner-product-card__cost">
                                                    <div class="inner-product-card-cost">
                                                        <div class="inner-product-card-cost__old"> 2 290 тг</div>
                                                        <div class="inner-product-card-cost__current this-discount"> 2 061 тг</div>
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
                                    <!-- 2 -->
                                    <div class="main-products__card">
                                        <div class="inner-product-card">
                                            <div class="inner-product-card__head">
                                                <div class="inner-product-card__discount">
                                                    <div class="inner-product-discount this-left">
                                                        <div class="inner-product-discount__counting this-left">10%</div>
                                                        <img src="assets/images/products/discount.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="inner-product-card__favorite">
                                                    <button class="inner-product-card-favorite inner-outline">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="svg-icons">
                                                            <path d="M2.485 17.485 16 31l13.515-13.515a8.485 8.485 0 0 0 2.485-6v-.38a8.105 8.105 0 0 0-14.433-5.063L16 8l-1.567-1.958A8.105 8.105 0 0 0 0 11.105v.38c0 2.25.894 4.409 2.485 6Z" />
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="inner-product-card__image">
                                                    <a href="#" class="inner-product-card__image-url" tabindex="-1">
                                                        <img src="assets/images/products/0w3379icz37hiqssiep4r8l366aph63l.jpg" alt="" class="inner-product-card__image-product" lazy="loaded">
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
                                                    <a href="#" class="inner-product-card__title">Термос для еды MIKU 440 мл</a>
                                                </div>
                                            </div>
                                            <div class="inner-product-card__bottom">
                                                <a href="#" class="inner-product-card__cost">
                                                    <div class="inner-product-card-cost">
                                                        <div class="inner-product-card-cost__old"> 2 290 тг</div>
                                                        <div class="inner-product-card-cost__current this-discount"> 2 061 тг</div>
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
                                    <!-- 3 -->
                                    <div class="main-products__card">
                                        <div class="inner-product-card">
                                            <div class="inner-product-card__head">
                                                <div class="inner-product-card__discount">
                                                    <div class="inner-product-discount this-left">
                                                        <div class="inner-product-discount__counting this-left">10%</div>
                                                        <img src="assets/images/products/discount.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="inner-product-card__favorite">
                                                    <button class="inner-product-card-favorite inner-outline">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="svg-icons">
                                                            <path d="M2.485 17.485 16 31l13.515-13.515a8.485 8.485 0 0 0 2.485-6v-.38a8.105 8.105 0 0 0-14.433-5.063L16 8l-1.567-1.958A8.105 8.105 0 0 0 0 11.105v.38c0 2.25.894 4.409 2.485 6Z" />
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="inner-product-card__image">
                                                    <a href="#" class="inner-product-card__image-url" tabindex="-1">
                                                        <img src="assets/images/products/0w3379icz37hiqssiep4r8l366aph63l.jpg" alt="" class="inner-product-card__image-product" lazy="loaded">
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
                                                    <a href="#" class="inner-product-card__title">Термос для еды MIKU 440 мл</a>
                                                </div>
                                            </div>
                                            <div class="inner-product-card__bottom">
                                                <a href="#" class="inner-product-card__cost">
                                                    <div class="inner-product-card-cost">
                                                        <div class="inner-product-card-cost__old"> 2 290 тг</div>
                                                        <div class="inner-product-card-cost__current this-discount"> 2 061 тг</div>
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
                                    <!-- 4 -->
                                    <div class="main-products__card">
                                        <div class="inner-product-card">
                                            <div class="inner-product-card__head">
                                                <div class="inner-product-card__discount">
                                                    <div class="inner-product-discount this-left">
                                                        <div class="inner-product-discount__counting this-left">10%</div>
                                                        <img src="assets/images/products/discount.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="inner-product-card__favorite">
                                                    <button class="inner-product-card-favorite inner-outline">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="svg-icons">
                                                            <path d="M2.485 17.485 16 31l13.515-13.515a8.485 8.485 0 0 0 2.485-6v-.38a8.105 8.105 0 0 0-14.433-5.063L16 8l-1.567-1.958A8.105 8.105 0 0 0 0 11.105v.38c0 2.25.894 4.409 2.485 6Z" />
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="inner-product-card__image">
                                                    <a href="#" class="inner-product-card__image-url" tabindex="-1">
                                                        <img src="assets/images/products/0w3379icz37hiqssiep4r8l366aph63l.jpg" alt="" class="inner-product-card__image-product" lazy="loaded">
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
                                                    <a href="#" class="inner-product-card__title">Термос для еды MIKU 440 мл</a>
                                                </div>
                                            </div>
                                            <div class="inner-product-card__bottom">
                                                <a href="#" class="inner-product-card__cost">
                                                    <div class="inner-product-card-cost">
                                                        <div class="inner-product-card-cost__old"> 2 290 тг</div>
                                                        <div class="inner-product-card-cost__current this-discount"> 2 061 тг</div>
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
                    <!-- Start with discount -->
                    <div class="inner-block__products">
                        <div class="inner-products">
                            <div class="inner-products__main">
                                <h2 class="inner-products__title inner-page-title">
                                    <a href="#">Со скидкой</a>
                                    <img src="assets/images/products/title-with-discount-icon.svg" alt="">
                                </h2>
                                <div class="inner-products__desktop hide-mobile">
                                    <div class="swiper-main js-main-products-disocunt-slider mainSwiperDiscountSlider">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide main-products__card">
                                                <div class="inner-product-card">
                                                    <div class="inner-product-card__head">
                                                        <div class="inner-product-card__discount">
                                                            <div class="inner-product-discount this-left">
                                                                <div class="inner-product-discount__counting this-left">10%</div>
                                                                <img src="assets/images/products/discount.png" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="inner-product-card__favorite">
                                                            <button class="inner-product-card-favorite inner-outline">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="svg-icons">
                                                                    <path d="M2.485 17.485 16 31l13.515-13.515a8.485 8.485 0 0 0 2.485-6v-.38a8.105 8.105 0 0 0-14.433-5.063L16 8l-1.567-1.958A8.105 8.105 0 0 0 0 11.105v.38c0 2.25.894 4.409 2.485 6Z" />
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="inner-product-card__image">
                                                            <a href="#" class="inner-product-card__image-url" tabindex="-1">
                                                                <img src="assets/images/products/0w3379icz37hiqssiep4r8l366aph63l.jpg" alt="" class="inner-product-card__image-product" lazy="loaded">
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
                                                            <a href="#" class="inner-product-card__title">Термос для еды MIKU 440 мл</a>
                                                        </div>
                                                    </div>
                                                    <div class="inner-product-card__bottom">
                                                        <a href="#" class="inner-product-card__cost">
                                                            <div class="inner-product-card-cost">
                                                                <div class="inner-product-card-cost__old"> 2 290 тг</div>
                                                                <div class="inner-product-card-cost__current this-discount"> 2 061 тг</div>
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
                                            <div class="swiper-slide main-products__card">
                                                <div class="inner-product-card">
                                                    <div class="inner-product-card__head">
                                                        <div class="inner-product-card__discount">
                                                            <div class="inner-product-discount this-left">
                                                                <div class="inner-product-discount__counting this-left">10%</div>
                                                                <img src="assets/images/products/discount.png" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="inner-product-card__favorite">
                                                            <button class="inner-product-card-favorite inner-outline">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="svg-icons">
                                                                    <path d="M2.485 17.485 16 31l13.515-13.515a8.485 8.485 0 0 0 2.485-6v-.38a8.105 8.105 0 0 0-14.433-5.063L16 8l-1.567-1.958A8.105 8.105 0 0 0 0 11.105v.38c0 2.25.894 4.409 2.485 6Z" />
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="inner-product-card__image">
                                                            <a href="#" class="inner-product-card__image-url" tabindex="-1">
                                                                <img src="assets/images/products/0w3379icz37hiqssiep4r8l366aph63l.jpg" alt="" class="inner-product-card__image-product" lazy="loaded">
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
                                                            <a href="#" class="inner-product-card__title">Термос для еды MIKU 440 мл</a>
                                                        </div>
                                                    </div>
                                                    <div class="inner-product-card__bottom">
                                                        <a href="#" class="inner-product-card__cost">
                                                            <div class="inner-product-card-cost">
                                                                <div class="inner-product-card-cost__old"> 2 290 тг</div>
                                                                <div class="inner-product-card-cost__current this-discount"> 2 061 тг</div>
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
                                            <div class="swiper-slide main-products__card">
                                                <div class="inner-product-card">
                                                    <div class="inner-product-card__head">
                                                        <div class="inner-product-card__discount">
                                                            <div class="inner-product-discount this-left">
                                                                <div class="inner-product-discount__counting this-left">10%</div>
                                                                <img src="assets/images/products/discount.png" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="inner-product-card__favorite">
                                                            <button class="inner-product-card-favorite inner-outline">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="svg-icons">
                                                                    <path d="M2.485 17.485 16 31l13.515-13.515a8.485 8.485 0 0 0 2.485-6v-.38a8.105 8.105 0 0 0-14.433-5.063L16 8l-1.567-1.958A8.105 8.105 0 0 0 0 11.105v.38c0 2.25.894 4.409 2.485 6Z" />
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="inner-product-card__image">
                                                            <a href="#" class="inner-product-card__image-url" tabindex="-1">
                                                                <img src="assets/images/products/0w3379icz37hiqssiep4r8l366aph63l.jpg" alt="" class="inner-product-card__image-product" lazy="loaded">
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
                                                            <a href="#" class="inner-product-card__title">Термос для еды MIKU 440 мл</a>
                                                        </div>
                                                    </div>
                                                    <div class="inner-product-card__bottom">
                                                        <a href="#" class="inner-product-card__cost">
                                                            <div class="inner-product-card-cost">
                                                                <div class="inner-product-card-cost__old"> 2 290 тг</div>
                                                                <div class="inner-product-card-cost__current this-discount"> 2 061 тг</div>
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
                                            <div class="swiper-slide main-products__card">
                                                <div class="inner-product-card">
                                                    <div class="inner-product-card__head">
                                                        <div class="inner-product-card__discount">
                                                            <div class="inner-product-discount this-left">
                                                                <div class="inner-product-discount__counting this-left">10%</div>
                                                                <img src="assets/images/products/discount.png" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="inner-product-card__favorite">
                                                            <button class="inner-product-card-favorite inner-outline">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="svg-icons">
                                                                    <path d="M2.485 17.485 16 31l13.515-13.515a8.485 8.485 0 0 0 2.485-6v-.38a8.105 8.105 0 0 0-14.433-5.063L16 8l-1.567-1.958A8.105 8.105 0 0 0 0 11.105v.38c0 2.25.894 4.409 2.485 6Z" />
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="inner-product-card__image">
                                                            <a href="#" class="inner-product-card__image-url" tabindex="-1">
                                                                <img src="assets/images/products/0w3379icz37hiqssiep4r8l366aph63l.jpg" alt="" class="inner-product-card__image-product" lazy="loaded">
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
                                                            <a href="#" class="inner-product-card__title">Термос для еды MIKU 440 мл</a>
                                                        </div>
                                                    </div>
                                                    <div class="inner-product-card__bottom">
                                                        <a href="#" class="inner-product-card__cost">
                                                            <div class="inner-product-card-cost">
                                                                <div class="inner-product-card-cost__old"> 2 290 тг</div>
                                                                <div class="inner-product-card-cost__current this-discount"> 2 061 тг</div>
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
                                            <div class="swiper-slide main-products__card">
                                                <div class="inner-product-card">
                                                    <div class="inner-product-card__head">
                                                        <div class="inner-product-card__discount">
                                                            <div class="inner-product-discount this-left">
                                                                <div class="inner-product-discount__counting this-left">10%</div>
                                                                <img src="assets/images/products/discount.png" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="inner-product-card__favorite">
                                                            <button class="inner-product-card-favorite inner-outline">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="svg-icons">
                                                                    <path d="M2.485 17.485 16 31l13.515-13.515a8.485 8.485 0 0 0 2.485-6v-.38a8.105 8.105 0 0 0-14.433-5.063L16 8l-1.567-1.958A8.105 8.105 0 0 0 0 11.105v.38c0 2.25.894 4.409 2.485 6Z" />
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="inner-product-card__image">
                                                            <a href="#" class="inner-product-card__image-url" tabindex="-1">
                                                                <img src="assets/images/products/0w3379icz37hiqssiep4r8l366aph63l.jpg" alt="" class="inner-product-card__image-product" lazy="loaded">
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
                                                            <a href="#" class="inner-product-card__title">Термос для еды MIKU 440 мл</a>
                                                        </div>
                                                    </div>
                                                    <div class="inner-product-card__bottom">
                                                        <a href="#" class="inner-product-card__cost">
                                                            <div class="inner-product-card-cost">
                                                                <div class="inner-product-card-cost__old"> 2 290 тг</div>
                                                                <div class="inner-product-card-cost__current this-discount"> 2 061 тг</div>
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
                                            <div class="swiper-slide main-products__card">
                                                <div class="inner-product-card">
                                                    <div class="inner-product-card__head">
                                                        <div class="inner-product-card__discount">
                                                            <div class="inner-product-discount this-left">
                                                                <div class="inner-product-discount__counting this-left">10%</div>
                                                                <img src="assets/images/products/discount.png" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="inner-product-card__favorite">
                                                            <button class="inner-product-card-favorite inner-outline">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="svg-icons">
                                                                    <path d="M2.485 17.485 16 31l13.515-13.515a8.485 8.485 0 0 0 2.485-6v-.38a8.105 8.105 0 0 0-14.433-5.063L16 8l-1.567-1.958A8.105 8.105 0 0 0 0 11.105v.38c0 2.25.894 4.409 2.485 6Z" />
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="inner-product-card__image">
                                                            <a href="#" class="inner-product-card__image-url" tabindex="-1">
                                                                <img src="assets/images/products/0w3379icz37hiqssiep4r8l366aph63l.jpg" alt="" class="inner-product-card__image-product" lazy="loaded">
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
                                                            <a href="#" class="inner-product-card__title">Термос для еды MIKU 440 мл</a>
                                                        </div>
                                                    </div>
                                                    <div class="inner-product-card__bottom">
                                                        <a href="#" class="inner-product-card__cost">
                                                            <div class="inner-product-card-cost">
                                                                <div class="inner-product-card-cost__old"> 2 290 тг</div>
                                                                <div class="inner-product-card-cost__current this-discount"> 2 061 тг</div>
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
                                            <div class="swiper-slide main-products__card">
                                                <div class="inner-product-card">
                                                    <div class="inner-product-card__head">
                                                        <div class="inner-product-card__discount">
                                                            <div class="inner-product-discount this-left">
                                                                <div class="inner-product-discount__counting this-left">10%</div>
                                                                <img src="assets/images/products/discount.png" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="inner-product-card__favorite">
                                                            <button class="inner-product-card-favorite inner-outline">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="svg-icons">
                                                                    <path d="M2.485 17.485 16 31l13.515-13.515a8.485 8.485 0 0 0 2.485-6v-.38a8.105 8.105 0 0 0-14.433-5.063L16 8l-1.567-1.958A8.105 8.105 0 0 0 0 11.105v.38c0 2.25.894 4.409 2.485 6Z" />
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="inner-product-card__image">
                                                            <a href="#" class="inner-product-card__image-url" tabindex="-1">
                                                                <img src="assets/images/products/0w3379icz37hiqssiep4r8l366aph63l.jpg" alt="" class="inner-product-card__image-product" lazy="loaded">
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
                                                            <a href="#" class="inner-product-card__title">Термос для еды MIKU 440 мл</a>
                                                        </div>
                                                    </div>
                                                    <div class="inner-product-card__bottom">
                                                        <a href="#" class="inner-product-card__cost">
                                                            <div class="inner-product-card-cost">
                                                                <div class="inner-product-card-cost__old"> 2 290 тг</div>
                                                                <div class="inner-product-card-cost__current this-discount"> 2 061 тг</div>
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
                                            <div class="swiper-slide main-products__card">
                                                <div class="inner-product-card">
                                                    <div class="inner-product-card__head">
                                                        <div class="inner-product-card__discount">
                                                            <div class="inner-product-discount this-left">
                                                                <div class="inner-product-discount__counting this-left">10%</div>
                                                                <img src="assets/images/products/discount.png" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="inner-product-card__favorite">
                                                            <button class="inner-product-card-favorite inner-outline">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="svg-icons">
                                                                    <path d="M2.485 17.485 16 31l13.515-13.515a8.485 8.485 0 0 0 2.485-6v-.38a8.105 8.105 0 0 0-14.433-5.063L16 8l-1.567-1.958A8.105 8.105 0 0 0 0 11.105v.38c0 2.25.894 4.409 2.485 6Z" />
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="inner-product-card__image">
                                                            <a href="#" class="inner-product-card__image-url" tabindex="-1">
                                                                <img src="assets/images/products/0w3379icz37hiqssiep4r8l366aph63l.jpg" alt="" class="inner-product-card__image-product" lazy="loaded">
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
                                                            <a href="#" class="inner-product-card__title">Термос для еды MIKU 440 мл</a>
                                                        </div>
                                                    </div>
                                                    <div class="inner-product-card__bottom">
                                                        <a href="#" class="inner-product-card__cost">
                                                            <div class="inner-product-card-cost">
                                                                <div class="inner-product-card-cost__old"> 2 290 тг</div>
                                                                <div class="inner-product-card-cost__current this-discount"> 2 061 тг</div>
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
                                            <div class="swiper-slide main-products__card">
                                                <div class="inner-product-card">
                                                    <div class="inner-product-card__head">
                                                        <div class="inner-product-card__discount">
                                                            <div class="inner-product-discount this-left">
                                                                <div class="inner-product-discount__counting this-left">10%</div>
                                                                <img src="assets/images/products/discount.png" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="inner-product-card__favorite">
                                                            <button class="inner-product-card-favorite inner-outline">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="svg-icons">
                                                                    <path d="M2.485 17.485 16 31l13.515-13.515a8.485 8.485 0 0 0 2.485-6v-.38a8.105 8.105 0 0 0-14.433-5.063L16 8l-1.567-1.958A8.105 8.105 0 0 0 0 11.105v.38c0 2.25.894 4.409 2.485 6Z" />
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="inner-product-card__image">
                                                            <a href="#" class="inner-product-card__image-url" tabindex="-1">
                                                                <img src="assets/images/products/0w3379icz37hiqssiep4r8l366aph63l.jpg" alt="" class="inner-product-card__image-product" lazy="loaded">
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
                                                            <a href="#" class="inner-product-card__title">Термос для еды MIKU 440 мл</a>
                                                        </div>
                                                    </div>
                                                    <div class="inner-product-card__bottom">
                                                        <a href="#" class="inner-product-card__cost">
                                                            <div class="inner-product-card-cost">
                                                                <div class="inner-product-card-cost__old"> 2 290 тг</div>
                                                                <div class="inner-product-card-cost__current this-discount"> 2 061 тг</div>
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
                                            <div class="swiper-slide main-products__card">
                                                <div class="inner-product-card">
                                                    <div class="inner-product-card__head">
                                                        <div class="inner-product-card__discount">
                                                            <div class="inner-product-discount this-left">
                                                                <div class="inner-product-discount__counting this-left">10%</div>
                                                                <img src="assets/images/products/discount.png" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="inner-product-card__favorite">
                                                            <button class="inner-product-card-favorite inner-outline">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="svg-icons">
                                                                    <path d="M2.485 17.485 16 31l13.515-13.515a8.485 8.485 0 0 0 2.485-6v-.38a8.105 8.105 0 0 0-14.433-5.063L16 8l-1.567-1.958A8.105 8.105 0 0 0 0 11.105v.38c0 2.25.894 4.409 2.485 6Z" />
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="inner-product-card__image">
                                                            <a href="#" class="inner-product-card__image-url" tabindex="-1">
                                                                <img src="assets/images/products/0w3379icz37hiqssiep4r8l366aph63l.jpg" alt="" class="inner-product-card__image-product" lazy="loaded">
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
                                                            <a href="#" class="inner-product-card__title">Термос для еды MIKU 440 мл</a>
                                                        </div>
                                                    </div>
                                                    <div class="inner-product-card__bottom">
                                                        <a href="#" class="inner-product-card__cost">
                                                            <div class="inner-product-card-cost">
                                                                <div class="inner-product-card-cost__old"> 2 290 тг</div>
                                                                <div class="inner-product-card-cost__current this-discount"> 2 061 тг</div>
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
                                            <div class="swiper-slide main-products__card">
                                                <div class="inner-product-card">
                                                    <div class="inner-product-card__head">
                                                        <div class="inner-product-card__discount">
                                                            <div class="inner-product-discount this-left">
                                                                <div class="inner-product-discount__counting this-left">10%</div>
                                                                <img src="assets/images/products/discount.png" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="inner-product-card__favorite">
                                                            <button class="inner-product-card-favorite inner-outline">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="svg-icons">
                                                                    <path d="M2.485 17.485 16 31l13.515-13.515a8.485 8.485 0 0 0 2.485-6v-.38a8.105 8.105 0 0 0-14.433-5.063L16 8l-1.567-1.958A8.105 8.105 0 0 0 0 11.105v.38c0 2.25.894 4.409 2.485 6Z" />
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="inner-product-card__image">
                                                            <a href="#" class="inner-product-card__image-url" tabindex="-1">
                                                                <img src="assets/images/products/0w3379icz37hiqssiep4r8l366aph63l.jpg" alt="" class="inner-product-card__image-product" lazy="loaded">
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
                                                            <a href="#" class="inner-product-card__title">Термос для еды MIKU 440 мл</a>
                                                        </div>
                                                    </div>
                                                    <div class="inner-product-card__bottom">
                                                        <a href="#" class="inner-product-card__cost">
                                                            <div class="inner-product-card-cost">
                                                                <div class="inner-product-card-cost__old"> 2 290 тг</div>
                                                                <div class="inner-product-card-cost__current this-discount"> 2 061 тг</div>
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
                                            <div class="swiper-slide main-products__card">
                                                <div class="inner-product-card">
                                                    <div class="inner-product-card__head">
                                                        <div class="inner-product-card__discount">
                                                            <div class="inner-product-discount this-left">
                                                                <div class="inner-product-discount__counting this-left">10%</div>
                                                                <img src="assets/images/products/discount.png" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="inner-product-card__favorite">
                                                            <button class="inner-product-card-favorite inner-outline">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="svg-icons">
                                                                    <path d="M2.485 17.485 16 31l13.515-13.515a8.485 8.485 0 0 0 2.485-6v-.38a8.105 8.105 0 0 0-14.433-5.063L16 8l-1.567-1.958A8.105 8.105 0 0 0 0 11.105v.38c0 2.25.894 4.409 2.485 6Z" />
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="inner-product-card__image">
                                                            <a href="#" class="inner-product-card__image-url" tabindex="-1">
                                                                <img src="assets/images/products/0w3379icz37hiqssiep4r8l366aph63l.jpg" alt="" class="inner-product-card__image-product" lazy="loaded">
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
                                                            <a href="#" class="inner-product-card__title">Термос для еды MIKU 440 мл</a>
                                                        </div>
                                                    </div>
                                                    <div class="inner-product-card__bottom">
                                                        <a href="#" class="inner-product-card__cost">
                                                            <div class="inner-product-card-cost">
                                                                <div class="inner-product-card-cost__old"> 2 290 тг</div>
                                                                <div class="inner-product-card-cost__current this-discount"> 2 061 тг</div>
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
                                        </div>
                                    </div>
                                </div>
                                <div class="inner-products__mobile desktop-hide">
                                    <div class="main-products__card">
                                        <div class="inner-product-card">
                                            <div class="inner-product-card__head">
                                                <div class="inner-product-card__discount">
                                                    <div class="inner-product-discount this-left">
                                                        <div class="inner-product-discount__counting this-left">10%</div>
                                                        <img src="assets/images/products/discount.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="inner-product-card__favorite">
                                                    <button class="inner-product-card-favorite inner-outline">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="svg-icons">
                                                            <path d="M2.485 17.485 16 31l13.515-13.515a8.485 8.485 0 0 0 2.485-6v-.38a8.105 8.105 0 0 0-14.433-5.063L16 8l-1.567-1.958A8.105 8.105 0 0 0 0 11.105v.38c0 2.25.894 4.409 2.485 6Z" />
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="inner-product-card__image">
                                                    <a href="#" class="inner-product-card__image-url" tabindex="-1">
                                                        <img src="assets/images/products/0w3379icz37hiqssiep4r8l366aph63l.jpg" alt="" class="inner-product-card__image-product" lazy="loaded">
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
                                                    <a href="#" class="inner-product-card__title">Термос для еды MIKU 440 мл</a>
                                                </div>
                                            </div>
                                            <div class="inner-product-card__bottom">
                                                <a href="#" class="inner-product-card__cost">
                                                    <div class="inner-product-card-cost">
                                                        <div class="inner-product-card-cost__old"> 2 290 тг</div>
                                                        <div class="inner-product-card-cost__current this-discount"> 2 061 тг</div>
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
                                    <!-- 2 -->
                                    <div class="main-products__card">
                                        <div class="inner-product-card">
                                            <div class="inner-product-card__head">
                                                <div class="inner-product-card__discount">
                                                    <div class="inner-product-discount this-left">
                                                        <div class="inner-product-discount__counting this-left">10%</div>
                                                        <img src="assets/images/products/discount.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="inner-product-card__favorite">
                                                    <button class="inner-product-card-favorite inner-outline">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="svg-icons">
                                                            <path d="M2.485 17.485 16 31l13.515-13.515a8.485 8.485 0 0 0 2.485-6v-.38a8.105 8.105 0 0 0-14.433-5.063L16 8l-1.567-1.958A8.105 8.105 0 0 0 0 11.105v.38c0 2.25.894 4.409 2.485 6Z" />
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="inner-product-card__image">
                                                    <a href="#" class="inner-product-card__image-url" tabindex="-1">
                                                        <img src="assets/images/products/0w3379icz37hiqssiep4r8l366aph63l.jpg" alt="" class="inner-product-card__image-product" lazy="loaded">
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
                                                    <a href="#" class="inner-product-card__title">Термос для еды MIKU 440 мл</a>
                                                </div>
                                            </div>
                                            <div class="inner-product-card__bottom">
                                                <a href="#" class="inner-product-card__cost">
                                                    <div class="inner-product-card-cost">
                                                        <div class="inner-product-card-cost__old"> 2 290 тг</div>
                                                        <div class="inner-product-card-cost__current this-discount"> 2 061 тг</div>
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
                                    <!-- 3 -->
                                    <div class="main-products__card">
                                        <div class="inner-product-card">
                                            <div class="inner-product-card__head">
                                                <div class="inner-product-card__discount">
                                                    <div class="inner-product-discount this-left">
                                                        <div class="inner-product-discount__counting this-left">10%</div>
                                                        <img src="assets/images/products/discount.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="inner-product-card__favorite">
                                                    <button class="inner-product-card-favorite inner-outline">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="svg-icons">
                                                            <path d="M2.485 17.485 16 31l13.515-13.515a8.485 8.485 0 0 0 2.485-6v-.38a8.105 8.105 0 0 0-14.433-5.063L16 8l-1.567-1.958A8.105 8.105 0 0 0 0 11.105v.38c0 2.25.894 4.409 2.485 6Z" />
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="inner-product-card__image">
                                                    <a href="#" class="inner-product-card__image-url" tabindex="-1">
                                                        <img src="assets/images/products/0w3379icz37hiqssiep4r8l366aph63l.jpg" alt="" class="inner-product-card__image-product" lazy="loaded">
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
                                                    <a href="#" class="inner-product-card__title">Термос для еды MIKU 440 мл</a>
                                                </div>
                                            </div>
                                            <div class="inner-product-card__bottom">
                                                <a href="#" class="inner-product-card__cost">
                                                    <div class="inner-product-card-cost">
                                                        <div class="inner-product-card-cost__old"> 2 290 тг</div>
                                                        <div class="inner-product-card-cost__current this-discount"> 2 061 тг</div>
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
                                    <!-- 4 -->
                                    <div class="main-products__card">
                                        <div class="inner-product-card">
                                            <div class="inner-product-card__head">
                                                <div class="inner-product-card__discount">
                                                    <div class="inner-product-discount this-left">
                                                        <div class="inner-product-discount__counting this-left">10%</div>
                                                        <img src="assets/images/products/discount.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="inner-product-card__favorite">
                                                    <button class="inner-product-card-favorite inner-outline">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="svg-icons">
                                                            <path d="M2.485 17.485 16 31l13.515-13.515a8.485 8.485 0 0 0 2.485-6v-.38a8.105 8.105 0 0 0-14.433-5.063L16 8l-1.567-1.958A8.105 8.105 0 0 0 0 11.105v.38c0 2.25.894 4.409 2.485 6Z" />
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="inner-product-card__image">
                                                    <a href="#" class="inner-product-card__image-url" tabindex="-1">
                                                        <img src="assets/images/products/0w3379icz37hiqssiep4r8l366aph63l.jpg" alt="" class="inner-product-card__image-product" lazy="loaded">
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
                                                    <a href="#" class="inner-product-card__title">Термос для еды MIKU 440 мл</a>
                                                </div>
                                            </div>
                                            <div class="inner-product-card__bottom">
                                                <a href="#" class="inner-product-card__cost">
                                                    <div class="inner-product-card-cost">
                                                        <div class="inner-product-card-cost__old"> 2 290 тг</div>
                                                        <div class="inner-product-card-cost__current this-discount"> 2 061 тг</div>
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
                                </div>
                                <a href="#" class="inner-products__link hide-desktop"> 
                                    Больше скидок 
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" class="svg-icons svg-icon--external">
                                        <path d="M3.043 0H14v11.043h-2.191V3.658L1.549 14 0 12.438l10.148-10.23H3.043V0Z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End with discount -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End home page content -->


@endsection