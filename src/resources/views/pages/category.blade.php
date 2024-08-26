@extends('layouts.main')

@section('content')

<!-- Start Catalog page content -->
<div class="catalog">
    <div class="h-container">
        <div class="catalog-breadcrumbs">
            <a class="catalog-breadcrumb__item" href="/">Главная</a>
            <a class="catalog-breadcrumb__item" href="/catalog.html">Каталог</a>
        </div>
    </div>
    

                <!-- Menu -->
                <div class="mob-menu-wrap hide-desktop">
                    <div class="mob-menu-wrap__head">
                        <h1 class="mob-menu-wrap__title">Фильтры</h1>
                        <div class="mob-menu-wrap__hamburger">
                            <span class="head-hamburger">
                                <span class="head-hamburger__wrapper">
                                    <span class="head-hamburger__inline"></span>
                            <span class="head-hamburger__inline"></span>
                            <span class="head-hamburger__inline"></span>
                            </span>
                            </span>
                        </div>
                    </div>
                    <div class="catalog-mob-menu-wrap__body">
                        <div class="catalog-menu">
                            <div class="catalog-menu__list">
                                <a href="#" class="catalog-menu__item">Здоровье 2.0</a>
                                <a href="#" class="catalog-menu__item">Подарки</a>
                                <a href="#" class="catalog-menu__item">Аксессуары</a>
                                <a href="#" class="catalog-menu__item">Гейминг</a>
                                <a href="#" class="catalog-menu__item">Рюкзаки и сумки</a>
                                <a href="#" class="catalog-menu__item">Аудио и видеотехника</a>
                                <a href="#" class="catalog-menu__item">Безопасность 2.0</a>
                                <a href="#" class="catalog-menu__item">Путешествия и активные отдыхи</a>
                            </div>
                        </div>
        
                        <div class="catalog-menu catalog-menu__switch mt-2">
                            <div class="form-switch__text">
                                Только в наличии
                            </div>
                            <label class="switch">
                                <input type="checkbox">
                                <span class="slider round"></span>
                            </label>
        
                        </div>
        
                        <div class="catalog-menu catalog-menu__switch mt-2">
                            <div class="form-switch__text">
                                Со скидкой
                            </div>
                            <label class="switch">
                                <input type="checkbox">
                                <span class="slider round"></span>
                            </label>
        
                        </div>
        
                        <div class="catalog-price__title">
                            Цена
                        </div>
                        <div class="catalog-menu catalog-price__range-inputs d-flex">
                            <input type="number" min="0" max="750000" value="0" class="col-6 catalog-price__input">
                            <input type="number" min="0" max="750000" value="750000" class="col-6 catalog-price__input">
                        </div>
                        <div class="catalog-price__range-slider">
                            <div class="price-range__progress"></div>
                            <div class="price-range__inputs">
                                <input class="range-min" type="range" id="range-min" min="0" step="100" max="750000" value="0">
                                <input class="range-max" type="range" id="range-max" min="0" step="100" max="750000" value="750000">
                            </div>
                        </div>
                        
                        <div class="catalog-menu catalog-show">
                            <button>
                                <span>Показать 879</span>
                                <svg width="56" height="116" viewBox="0 0 56 116" xmlns="http://www.w3.org/2000/svg" >
                                    <path d="M56 48.15 27.451 116V67.85H0L28.549 0v48.15H56Z" ></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M9.5 67.849 28.55 0 0 67.849h9.5ZM27.451 116l9.05-48.151h-9.05V116Z" ></path>
                                </svg>  
                            </button>
                        </div>
        
                        <div style="margin-bottom: 60px;" class="catalog-menu catalog-reset">
                            <button>
                                <span>Сбросить все</span>
                                <svg fill="#ffffff" height="200px" width="200px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-256 -256 1024.00 1024.00" xml:space="preserve" stroke="#ffffff" stroke-width="17.919999999999998"><g id="SVGRepo_bgCarrier" stroke-width="0" transform="translate(0,0), scale(1)"><rect x="-256" y="-256" width="1024.00" height="1024.00" rx="512" fill="#778BA5" strokewidth="0"></rect></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="4.096"></g><g id="SVGRepo_iconCarrier"> <g> <g> <polygon points="512,59.076 452.922,0 256,196.922 59.076,0 0,59.076 196.922,256 0,452.922 59.076,512 256,315.076 452.922,512 512,452.922 315.076,256 "></polygon> </g> </g> </g></svg>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- End Menu -->


    
    <div class="catalog-category h-container">
        <aside class="catalog-category__side catalog-category__desktop">
            <div class="catalog-menu">
                <div class="catalog-menu__title">
                    Категории
                </div>
                <div class="catalog-menu__list">
                    <a href="#" class="catalog-menu__item">Здоровье 2.0</a>
                    <a href="#" class="catalog-menu__item">Подарки</a>
                    <a href="#" class="catalog-menu__item">Аксессуары</a>
                    <a href="#" class="catalog-menu__item">Гейминг</a>
                    <a href="#" class="catalog-menu__item">Рюкзаки и сумки</a>
                    <a href="#" class="catalog-menu__item">Аудио и видеотехника</a>
                    <a href="#" class="catalog-menu__item">Безопасность 2.0</a>
                    <a href="#" class="catalog-menu__item">Путешествия и активные отдыхи</a>
                </div>
            </div>

            <div class="catalog-menu catalog-menu__switch">
                <div class="form-switch__text">
                    Только в наличии
                </div>
                <label class="switch">
                    <input type="checkbox">
                    <span class="slider round"></span>
                </label>

            </div>

            <div class="catalog-menu catalog-menu__switch">
                <div class="form-switch__text">
                    Со скидкой
                </div>
                <label class="switch">
                    <input type="checkbox">
                    <span class="slider round"></span>
                </label>

            </div>

            <div class="catalog-price__title">
                Цена
            </div>
            <div class="catalog-menu catalog-price__range-inputs d-flex">
                <input type="number" min="0" max="750000" value="0" class="col-6 catalog-price__input">
                <input type="number" min="0" max="750000" value="750000" class="col-6 catalog-price__input">
            </div>
            <div class="catalog-price__range-slider">
                <div class="price-range__progress"></div>
                <div class="price-range__inputs">
                    <input class="range-min" type="range" id="range-min" min="0" step="100" max="750000" value="0">
                    <input class="range-max" type="range" id="range-max" min="0" step="100" max="750000" value="750000">
                </div>
            </div>
            

            <div class="catalog-menu catalog-reset">
                <button>
                    <span>Сбросить все</span>
                    <svg fill="#ffffff" height="200px" width="200px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-256 -256 1024.00 1024.00" xml:space="preserve" stroke="#ffffff" stroke-width="17.919999999999998"><g id="SVGRepo_bgCarrier" stroke-width="0" transform="translate(0,0), scale(1)"><rect x="-256" y="-256" width="1024.00" height="1024.00" rx="512" fill="#778BA5" strokewidth="0"></rect></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="4.096"></g><g id="SVGRepo_iconCarrier"> <g> <g> <polygon points="512,59.076 452.922,0 256,196.922 59.076,0 0,59.076 196.922,256 0,452.922 59.076,512 256,315.076 452.922,512 512,452.922 315.076,256 "></polygon> </g> </g> </g></svg>
                </button>
            </div>

        </aside>
        <main class="catalog-category__products">
            <h1>Каталог
                <span>777</span>
            </h1>
            <div class="catalog-control__mobile">
                <div class="catalog-filter">
                    <svg fill="#414763" height="200px" width="200px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" stroke="#414763"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M498.723,89.435H183.171V76.958c0-18.3-14.888-33.188-33.188-33.188h-51.5c-18.3,0-33.188,14.888-33.188,33.188v12.477 H13.275C5.943,89.435,0,95.38,0,102.711c0,7.331,5.943,13.275,13.275,13.275h52.018v12.473c0,18.3,14.888,33.188,33.188,33.188 h51.501c18.3,0,33.188-14.888,33.188-33.188v-12.473h315.553c7.332,0,13.275-5.945,13.275-13.275 C511.999,95.38,506.055,89.435,498.723,89.435z M156.621,128.459c0,3.66-2.978,6.638-6.638,6.638H98.482 c-3.66,0-6.638-2.978-6.638-6.638V76.958c0-3.66,2.978-6.638,6.638-6.638h51.501c3.66,0,6.638,2.978,6.638,6.638V128.459z"></path> </g> </g> <g> <g> <path d="M498.725,237.295h-52.019v-12.481c0-18.3-14.888-33.188-33.188-33.188h-51.501c-18.3,0-33.188,14.888-33.188,33.188 v12.481H13.275C5.943,237.295,0,243.239,0,250.57c0,7.331,5.943,13.275,13.275,13.275h315.553v12.469 c0,18.3,14.888,33.188,33.188,33.188h51.501c18.3,0,33.188-14.888,33.188-33.188v-12.469h52.019 c7.332,0,13.275-5.945,13.275-13.275C512,243.239,506.057,237.295,498.725,237.295z M420.155,276.315 c0,3.66-2.978,6.638-6.638,6.638h-51.501c-3.66,0-6.638-2.978-6.638-6.638v-51.501c0-3.66,2.978-6.638,6.638-6.638h51.501 c3.66,0,6.638,2.978,6.638,6.638V276.315z"></path> </g> </g> <g> <g> <path d="M498.725,396.014H276.432v-12.473c0-18.3-14.888-33.188-33.188-33.188h-51.501c-18.3,0-33.188,14.888-33.188,33.188 v12.473H13.275C5.943,396.014,0,401.959,0,409.289c0,7.331,5.943,13.275,13.275,13.275h145.279v12.477 c0,18.3,14.888,33.188,33.188,33.188h51.501c18.3,0,33.188-14.888,33.188-33.188v-12.477h222.293 c7.332,0,13.275-5.945,13.275-13.275C512,401.957,506.057,396.014,498.725,396.014z M249.881,435.042 c0,3.66-2.978,6.638-6.638,6.638h-51.501c-3.66,0-6.638-2.978-6.638-6.638v-51.501c0-3.66,2.978-6.638,6.638-6.638h51.501 c3.66,0,6.638,2.978,6.638,6.638V435.042z"></path> </g> </g> </g></svg>
                </div>
                <div class="catalog-products__controls">
                    <div class="catalog-control">
                        <span>Сначала популярные</span>
                        <svg width="64px" height="64px" viewBox="0 0 20.00 20.00" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#778ba5" stroke="#778ba5"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.16"></g><g id="SVGRepo_iconCarrier"> <title>arrow_down [#778ba5]</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Dribbble-Light-Preview" transform="translate(-180.000000, -6684.000000)" fill="#778ba5"> <g id="icons" transform="translate(56.000000, 160.000000)"> <path d="M144,6525.39 L142.594,6524 L133.987,6532.261 L133.069,6531.38 L133.074,6531.385 L125.427,6524.045 L124,6525.414 C126.113,6527.443 132.014,6533.107 133.987,6535 C135.453,6533.594 134.024,6534.965 144,6525.39" id="arrow_down-[#778ba5]"> </path> </g> </g> </g> </g></svg>
                    </div>
                    <div class="catalog-control__dropdown">
                        <button class="catalog-control__item is-active">
                            <span class="d-block d-md-none d-sm-none">Популярные</span>
                            <span class="d-none d-md-block d-sm-block">Сначала популярные</span>
                        </button>
                        <button class="catalog-control__item">
                            <span class="d-block d-md-none d-sm-none">Новые</span>
                            <span class="d-none d-md-block d-sm-block">Сначала новые</span>
                        </button>
                        <button class="catalog-control__item">
                            <span class="d-block d-md-none d-sm-none">Со скидкой</span>
                            <span class="d-none d-md-block d-sm-block">Со скидкой</span>
                        </button><button class="catalog-control__item">
                            <span class="d-block d-md-none d-sm-none">По цене</span>
                            <span class="d-none d-md-block d-sm-block">По цене</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="catalog-products__controls catalog-control__desktop">
                <div class="catalog-control">
                    <span>Сначала популярные</span>
                    <svg width="64px" height="64px" viewBox="0 0 20.00 20.00" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#778ba5" stroke="#778ba5"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.16"></g><g id="SVGRepo_iconCarrier"> <title>arrow_down [#778ba5]</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Dribbble-Light-Preview" transform="translate(-180.000000, -6684.000000)" fill="#778ba5"> <g id="icons" transform="translate(56.000000, 160.000000)"> <path d="M144,6525.39 L142.594,6524 L133.987,6532.261 L133.069,6531.38 L133.074,6531.385 L125.427,6524.045 L124,6525.414 C126.113,6527.443 132.014,6533.107 133.987,6535 C135.453,6533.594 134.024,6534.965 144,6525.39" id="arrow_down-[#778ba5]"> </path> </g> </g> </g> </g></svg>
                </div>
                <div class="catalog-control__dropdown">
                    <button class="catalog-control__item is-active">
                        <span class="d-block d-md-none d-sm-none">Популярные</span>
                        <span class="d-none d-md-block d-sm-block">Сначала популярные</span>
                    </button>
                    <button class="catalog-control__item">
                        <span class="d-block d-md-none d-sm-none">Новые</span>
                        <span class="d-none d-md-block d-sm-block">Сначала новые</span>
                    </button>
                    <button class="catalog-control__item">
                        <span class="d-block d-md-none d-sm-none">Со скидкой</span>
                        <span class="d-none d-md-block d-sm-block">Со скидкой</span>
                    </button><button class="catalog-control__item">
                        <span class="d-block d-md-none d-sm-none">По цене</span>
                        <span class="d-none d-md-block d-sm-block">По цене</span>
                    </button>
                </div>
            </div>

            <div class="catalog-products__list">

                <div class="inner-product-card">
                    <div class="inner-product-card__head">
                        <div class="inner-product-card__discount">
                            <div class="inner-product-discount this-left">
                                <div class="inner-product-discount__counting this-left">10%</div>
                                <img src="{{ asset('assets/images/products/discount.png') }}" alt="">
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
                                <img src="{{ asset('assets/images/products/0w3379icz37hiqssiep4r8l366aph63l.jpg') }}" alt="" class="inner-product-card__image-product" lazy="loaded">
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
                <div class="inner-product-card">
                    <div class="inner-product-card__head">
                        <div class="inner-product-card__discount">
                            <div class="inner-product-discount this-left">
                                <div class="inner-product-discount__counting this-left">10%</div>
                                <img src="{{ asset('assets/images/products/discount.png') }}" alt="">
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
                                <img src="{{ asset('assets/images/products/0w3379icz37hiqssiep4r8l366aph63l.jpg') }}" alt="" class="inner-product-card__image-product" lazy="loaded">
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
                <div class="inner-product-card">
                    <div class="inner-product-card__head">
                        <div class="inner-product-card__discount">
                            <div class="inner-product-discount this-left">
                                <div class="inner-product-discount__counting this-left">10%</div>
                                <img src="{{ asset('assets/images/products/discount.png') }}" alt="">
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
                                <img src="{{ asset('assets/images/products/0w3379icz37hiqssiep4r8l366aph63l.jpg') }}" alt="" class="inner-product-card__image-product" lazy="loaded">
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
                <div class="inner-product-card">
                    <div class="inner-product-card__head">
                        <div class="inner-product-card__discount">
                            <div class="inner-product-discount this-left">
                                <div class="inner-product-discount__counting this-left">10%</div>
                                <img src="{{ asset('assets/images/products/discount.png') }}" alt="">
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
                                <img src="{{ asset('assets/images/products/0w3379icz37hiqssiep4r8l366aph63l.jpg') }}" alt="" class="inner-product-card__image-product" lazy="loaded">
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
                <div class="inner-product-card">
                    <div class="inner-product-card__head">
                        <div class="inner-product-card__discount">
                            <div class="inner-product-discount this-left">
                                <div class="inner-product-discount__counting this-left">10%</div>
                                <img src="{{ asset('assets/images/products/discount.png') }}" alt="">
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
                                <img src="{{ asset('assets/images/products/0w3379icz37hiqssiep4r8l366aph63l.jpg') }}" alt="" class="inner-product-card__image-product" lazy="loaded">
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
                <div class="inner-product-card">
                    <div class="inner-product-card__head">
                        <div class="inner-product-card__discount">
                            <div class="inner-product-discount this-left">
                                <div class="inner-product-discount__counting this-left">10%</div>
                                <img src="{{ asset('assets/images/products/discount.png') }}" alt="">
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
                                <img src="{{ asset('assets/images/products/0w3379icz37hiqssiep4r8l366aph63l.jpg') }}" alt="" class="inner-product-card__image-product" lazy="loaded">
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
                <div class="inner-product-card">
                    <div class="inner-product-card__head">
                        <div class="inner-product-card__discount">
                            <div class="inner-product-discount this-left">
                                <div class="inner-product-discount__counting this-left">10%</div>
                                <img src="{{ asset('assets/images/products/discount.png') }}" alt="">
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
                                <img src="{{ asset('assets/images/products/0w3379icz37hiqssiep4r8l366aph63l.jpg') }}" alt="" class="inner-product-card__image-product" lazy="loaded">
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
                <div class="inner-product-card">
                    <div class="inner-product-card__head">
                        <div class="inner-product-card__discount">
                            <div class="inner-product-discount this-left">
                                <div class="inner-product-discount__counting this-left">10%</div>
                                <img src="{{ asset('assets/images/products/discount.png') }}" alt="">
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
                                <img src="{{ asset('assets/images/products/0w3379icz37hiqssiep4r8l366aph63l.jpg') }}" alt="" class="inner-product-card__image-product" lazy="loaded">
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
                <div class="inner-product-card">
                    <div class="inner-product-card__head">
                        <div class="inner-product-card__discount">
                            <div class="inner-product-discount this-left">
                                <div class="inner-product-discount__counting this-left">10%</div>
                                <img src="{{ asset('assets/images/products/discount.png') }}" alt="">
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
                                <img src="{{ asset('assets/images/products/0w3379icz37hiqssiep4r8l366aph63l.jpg') }}" alt="" class="inner-product-card__image-product" lazy="loaded">
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

                <div class="inner-product-card">
                    <div class="inner-product-card__head">
                        <div class="inner-product-card__discount">
                            <div class="inner-product-discount this-left">
                                <div class="inner-product-discount__counting this-left">10%</div>
                                <img src="{{ asset('assets/images/products/discount.png') }}" alt="">
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
                                <img src="{{ asset('assets/images/products/0w3379icz37hiqssiep4r8l366aph63l.jpg') }}" alt="" class="inner-product-card__image-product" lazy="loaded">
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
                <div class="inner-product-card">
                    <div class="inner-product-card__head">
                        <div class="inner-product-card__discount">
                            <div class="inner-product-discount this-left">
                                <div class="inner-product-discount__counting this-left">10%</div>
                                <img src="{{ asset('assets/images/products/discount.png') }}" alt="">
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
                                <img src="{{ asset('assets/images/products/0w3379icz37hiqssiep4r8l366aph63l.jpg') }}" alt="" class="inner-product-card__image-product" lazy="loaded">
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
                <div class="inner-product-card">
                    <div class="inner-product-card__head">
                        <div class="inner-product-card__discount">
                            <div class="inner-product-discount this-left">
                                <div class="inner-product-discount__counting this-left">10%</div>
                                <img src="{{ asset('assets/images/products/discount.png') }}" alt="">
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
                                <img src="{{ asset('assets/images/products/0w3379icz37hiqssiep4r8l366aph63l.jpg') }}" alt="" class="inner-product-card__image-product" lazy="loaded">
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
                <div class="inner-product-card">
                    <div class="inner-product-card__head">
                        <div class="inner-product-card__discount">
                            <div class="inner-product-discount this-left">
                                <div class="inner-product-discount__counting this-left">10%</div>
                                <img src="{{ asset('assets/images/products/discount.png') }}" alt="">
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
                                <img src="{{ asset('assets/images/products/0w3379icz37hiqssiep4r8l366aph63l.jpg') }}" alt="" class="inner-product-card__image-product" lazy="loaded">
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
                <div class="inner-product-card">
                    <div class="inner-product-card__head">
                        <div class="inner-product-card__discount">
                            <div class="inner-product-discount this-left">
                                <div class="inner-product-discount__counting this-left">10%</div>
                                <img src="{{ asset('assets/images/products/discount.png') }}" alt="">
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
                                <img src="{{ asset('assets/images/products/0w3379icz37hiqssiep4r8l366aph63l.jpg') }}" alt="" class="inner-product-card__image-product" lazy="loaded">
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
                <div class="inner-product-card">
                    <div class="inner-product-card__head">
                        <div class="inner-product-card__discount">
                            <div class="inner-product-discount this-left">
                                <div class="inner-product-discount__counting this-left">10%</div>
                                <img src="{{ asset('assets/images/products/discount.png') }}" alt="">
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
                                <img src="{{ asset('assets/images/products/0w3379icz37hiqssiep4r8l366aph63l.jpg') }}" alt="" class="inner-product-card__image-product" lazy="loaded">
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

            <div class="catalog-product__pagination">
                <button class="base-button">
                    <span>Показать еще</span>
                    <svg viewBox="0 0 24.00 24.00" xmlns="http://www.w3.org/2000/svg" stroke="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"  stroke-width="0.288"></g><g id="SVGRepo_iconCarrier"> <path d="M7 17L17 7M17 7H8M17 7V16"  stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                </button>
                <ul class="catalog-pagination">
                    <li class="pagination-page-item is-active disabled">
                      <a class="page-link" href="#" tabindex="-1">1</a>
                    </li>
                    <li class="pagination-page-item">
                        <a class="page-link" href="#">2</a>
                    </li>
                    <li class="pagination-page-item">
                        <a class="page-link" href="#">3</a>
                    </li>
                    <li class="pagination-page-item disabled">
                        <a class="page-link" href="#">...</a>
                    </li>
                    <li class="pagination-page-item">
                        <a class="page-link" href="#">175</a>
                    </li>
                  </ul>
            </div>

        </main>
    </div> 


 </div>

<!-- End Catalog page content -->

@endsection