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