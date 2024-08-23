<!-- Start header -->
<header class="header">
    <div class="header__inner">
        <div class="h-container">
            <div class="header__top">
                <div class="header__logo">
                    <a href="/" class="header-logo-link" style="background-image: url('{{ asset($mainLogo) }}')"></a>
                </div>
                <button class="header__button outline">
                    <span>Каталог</span>
                    <svg width="56" height="116" viewBox="0 0 56 116" fill="none" xmlns="http://www.w3.org/2000/svg" class="header_button_catalog__icon">
                        <path d="M56 48.15 27.451 116V67.85H0L28.549 0v48.15H56Z" fill="#03A9F4"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.5 67.849 28.55 0 0 67.849h9.5ZM27.451 116l9.05-48.151h-9.05V116Z" fill="#65CFFF"></path>
                    </svg>
                </button>
                <div class="header__search">
                    <div class="header-search">
                        <form action="" class="header-search__form">
                            <input type="text" class="header-search__input" placeholder="Поиск">
                            <button class="header-search__button mobile-hidden outline">
                                <!-- <img src="assets/images/icons/header/magnifying-glass-solid.svg" alt="Search"> -->
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 46 46" id="search-icon">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M42 17.296c0 9-7.313 16.296-16.334 16.296-3.083 0-5.967-.853-8.427-2.334L8.152 45 3 40.991 14.147 28.85a16.227 16.227 0 0 1-4.815-11.553C9.332 8.296 16.645 1 25.666 1S42 8.296 42 17.296Zm-4.083 0c0 6.75-5.485 12.222-12.25 12.222-6.767 0-12.251-5.472-12.251-12.222 0-6.75 5.485-12.222 12.25-12.222 6.766 0 12.25 5.472 12.25 12.222Z" />
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="header__controls-wrapp">
                    <div class="header-controls__inner">
                        <div class="header-controls__list">
                            <div class="header-controls__item">
                                <div class="hc-item-profile-control control-item outline">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="hc-control-item__icon">
                                        <path d="M16 14a6 6 0 1 0 0-12 6 6 0 0 0 0 12ZM28 24a6 6 0 0 0-6-6H10a6 6 0 0 0-6 6v6h24v-6Z" />
                                    </svg>
                                    <span class="hc-control-item__name">Войти</span>
                                </div>
                            </div>
                            <div class="header-controls__item">
                                <div class="hc-item-status-control control-item outline">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="hc-control-item__icon">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M22 4H0v22h4a4 4 0 0 0 8 0h8a4 4 0 0 0 8 0h4V16a6 6 0 0 0-6-6h-4V4Zm0 10v4h6v-4h-6Z" />
                                    </svg>
                                    <span class="hc-control-item__name">Сравнение</span>
                                </div>
                            </div>
                            <div class="header-controls__item">
                                <div class="hc-item-favorite-control control-item outline">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="hc-control-item__icon">
                                        <path d="M2.485 17.485 16 31l13.515-13.515a8.485 8.485 0 0 0 2.485-6v-.38a8.105 8.105 0 0 0-14.433-5.063L16 8l-1.567-1.958A8.105 8.105 0 0 0 0 11.105v.38c0 2.25.894 4.409 2.485 6Z" />
                                    </svg>
                                    <span class="hc-control-item__name">Избранное</span>
                                </div>
                            </div>
                            <div class="header-controls__item">
                                <div class="hc-item-cart-control control-item outline">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="hc-control-item__icon">
                                        <path d="M0 2v4h4.306l1.66 9.967-1.927 9.64c-.027.134-.04.268-.039.401.003.682 0 1.294 0 1.992a4 4 0 0 0 8 0h8a4 4 0 1 0 4-4H8.44l.8-4H30V2H0Z" />
                                    </svg>
                                    <span class="hc-control-item__name">Корзина</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header__bottom">
                <div class="nav-header__city">
                    <button class="header-city_btn" data-bs-toggle="modal" data-bs-target="#chooseCity">
                        <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" class="location-icon svg-size--24">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M16.893 14.581c3.029-.438 5.357-3.073 5.357-6.258C22.25 4.83 19.452 2 16 2S9.75 4.83 9.75 8.323c0 3.185 2.328 5.82 5.357 6.258v11.806h1.786V14.581ZM16 12.84c2.466 0 4.464-2.022 4.464-4.516 0-2.495-1.998-4.517-4.464-4.517s-4.464 2.022-4.464 4.517c0 2.494 1.998 4.516 4.464 4.516Z" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M5.322 26.27c.027-.03.069-.071.133-.122.227-.18.614-.387 1.186-.596 1.135-.414 2.797-.762 4.81-.976l-.187-1.797c-2.087.222-3.907.59-5.23 1.074-.656.24-1.241.525-1.68.872-.424.336-.854.849-.854 1.544 0 .924.741 1.528 1.363 1.886.692.398 1.634.727 2.72.992C9.77 29.68 12.747 30 16 30c3.254 0 6.23-.32 8.416-.853 1.087-.265 2.029-.594 2.72-.992.623-.358 1.364-.962 1.364-1.886 0-.695-.43-1.207-.854-1.544-.439-.347-1.024-.633-1.68-.872-1.323-.483-3.143-.852-5.23-1.074l-.187 1.797c2.013.214 3.675.562 4.81.976.572.209.96.416 1.186.596.064.05.106.091.133.121-.053.061-.17.17-.425.316-.483.278-1.24.559-2.255.805-2.014.491-4.842.804-7.998.804-3.156 0-5.985-.313-7.998-.803-1.014-.247-1.772-.528-2.255-.806-.254-.146-.372-.255-.425-.316Z" />
                        </svg>
                        <span class="header-city__title">Алматы</span>
                    </button>
                </div>

                <div class="nav-header__item">
                    <div class="nav-header-item">
                        <div class="nav-header-item__title">
                            О нас
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" class="nav-header__link--arrow svg-icons svg-size--16">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.851 8 11.5 2.508 9.95 1l-7.2 7 7.2 7 1.55-1.508L5.851 8Z" />
                            </svg>
                        </div>
                        <div class="nav-header-item__dropdown">
                            <div class="nav-header-item__list">
                                <a href="#" class="nav-header-item__link">Магазины</a>
                                <a href="#" class="nav-header-item__link">О компании</a>
                                <a href="#" class="nav-header-item__link">Контакты</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nav-header__item">
                    <div class="nav-header-item">
                        <div class="nav-header-item__title">
                            Покупателям
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" class="nav-header__link--arrow svg-icons svg-size--16">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.851 8 11.5 2.508 9.95 1l-7.2 7 7.2 7 1.55-1.508L5.851 8Z" />
                            </svg>
                        </div>
                        <div class="nav-header-item__dropdown">
                            <div class="nav-header-item__list">
                                <a href="#" class="nav-header-item__link">Доставка и оплата</a>
                                <a href="#" class="nav-header-item__link">Гарантия и сервис</a>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#" class="nav-header__link">
                    Уцененные товары
                </a>
                <a href="tel:+7 (777) 777-77-77" class="nav-header__phone">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="svg-icons nav-header__link--call">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5 13C5 6.925 9.925 2 16 2s11 4.925 11 11v4h-2v-4a9 9 0 1 0-18 0v4H5v-4Zm11 15a9 9 0 0 0 8.04-4.95l1.785.9A11 11 0 0 1 16 30v-2Z" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.773 13.273C6.64 11.865 8.283 11 11 11h1v12h-1c-2.717 0-4.36-.865-5.227-2.273C4.998 19.467 5 17.973 5 17.075a94.395 94.395 0 0 0 0-.15c0-.898-.002-2.393.773-3.652Zm1.704 1.048C7.024 15.057 7 16.014 7 17c0 .986.024 1.943.477 2.679.321.523.975 1.097 2.523 1.27V13.05c-1.548.173-2.202.747-2.523 1.27ZM26.227 13.273C25.36 11.865 23.717 11 21 11h-1v12h1c2.717 0 4.36-.865 5.227-2.273.775-1.26.774-2.754.773-3.652v-.15c0-.898.002-2.393-.773-3.652Zm-1.704 1.048c.453.736.477 1.693.477 2.679 0 .986-.024 1.943-.477 2.679-.321.523-.975 1.097-2.523 1.27V13.05c1.548.173 2.202.747 2.523 1.27Z" />
                    </svg> +7 (777) 777-77-77
                </a>
                <div class="nav-header__worktime"> 08:00–21:00 </div>
            </div>
            <x-catalog.category />
        </div>
    </div>
</header>
<!-- End header -->
<!-- Start mobile header -->
<div class="header-mobile">
    <div class="header-mobile__wrapp">
        <div class="header-mobile__scrollbar">
            <div class="header-mobile__logotype">
                <a href="#" class="this-logotype"></a>
            </div>
            <!-- <button class="header-mobile__btn">
                Каталог
                <img src="assets/images/categories/lightning.svg" alt="">
            </button> -->
            <form type="text" class="header-mobile-search__form">
                <div class="header-mobile-search__wrapper">
                    <input type="text" name="search-mobile" class="header-mobile-search__input" placeholder="Поиск" autocomplete="off">
                    <button class="header-mobile-search__btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 46 46" id="search-icon">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M42 17.296c0 9-7.313 16.296-16.334 16.296-3.083 0-5.967-.853-8.427-2.334L8.152 45 3 40.991 14.147 28.85a16.227 16.227 0 0 1-4.815-11.553C9.332 8.296 16.645 1 25.666 1S42 8.296 42 17.296Zm-4.083 0c0 6.75-5.485 12.222-12.25 12.222-6.767 0-12.251-5.472-12.251-12.222 0-6.75 5.485-12.222 12.25-12.222 6.766 0 12.25 5.472 12.25 12.222Z"></path>
                        </svg>
                    </button>
                </div>
            </form>
            <div class="header-mobile__hamburger">
                <span class="inner-header-hamburger">
                    <span class="inner-header-hamburger__wrapper">
                        <span class="inner-header-hamburger__line"></span>
                <span class="inner-header-hamburger__line"></span>
                <span class="inner-header-hamburger__line"></span>
                </span>
                </span>
            </div>
        </div>
        <!-- Menu -->
        <div class="mob-menu-wrap hide-desktop">
            <div class="mob-menu-wrap__head">
                <h1 class="mob-menu-wrap__title">Меню</h1>
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
            <div class="mob-menu-wrap__body">
                <div class="mob-menu-header">
                    <div class="mob-menu-header__call">
                        <div class="mob-header-call">
                            <div class="mob-header-call__inner">
                                <a href="tel:+7 777 777-77-77" class="mob-header-call__phone">+7 777 777-77-77</a>
                                <div class="mob-header-call__time">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="svg-icons svg-size--16">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5 13C5 6.925 9.925 2 16 2s11 4.925 11 11v4h-2v-4a9 9 0 1 0-18 0v4H5v-4Zm11 15a9 9 0 0 0 8.04-4.95l1.785.9A11 11 0 0 1 16 30v-2Z" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.773 13.273C6.64 11.865 8.283 11 11 11h1v12h-1c-2.717 0-4.36-.865-5.227-2.273C4.998 19.467 5 17.973 5 17.075a94.395 94.395 0 0 0 0-.15c0-.898-.002-2.393.773-3.652Zm1.704 1.048C7.024 15.057 7 16.014 7 17c0 .986.024 1.943.477 2.679.321.523.975 1.097 2.523 1.27V13.05c-1.548.173-2.202.747-2.523 1.27ZM26.227 13.273C25.36 11.865 23.717 11 21 11h-1v12h1c2.717 0 4.36-.865 5.227-2.273.775-1.26.774-2.754.773-3.652v-.15c0-.898.002-2.393-.773-3.652Zm-1.704 1.048c.453.736.477 1.693.477 2.679 0 .986-.024 1.943-.477 2.679-.321.523-.975 1.097-2.523 1.27V13.05c1.548.173 2.202.747 2.523 1.27Z"/>
                                    </svg>
                                    <span>09:00–21:00</span>
                                </div>
                                <div class="mob-header-call__city">
                                    <div class="mob-header-city">
                                        <div class="mob-header-city__field">
                                            <img src="assets//images/icons/header/edit-img.svg" alt="">
                                            <div class="mob-header-city__placeholder">Ваш город</div>
                                            <input readonly type="text" class="mob-header-city__input" value="Алматы">
                                        </div>
                                        <div class="mob-header-city__choose-city" data-v-5>
                                            <div class="mob-header-city__list">
                                                <button class="mob-header-city__item">Алматы</button>
                                                <button class="mob-header-city__item">Астана</button>
                                                <button class="mob-header-city__item">Шымкент</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mob-menu-header__navigation">
                        <div class="mob-menu-header-navigation">
                            <button class="mob-menu-header-navigation__btn this-active" type="button" data-bs-toggle="collapse" data-bs-target="#mob-menu-header-navigation__wrap1" aria-expanded="false" aria-controls="mob-menu-header-navigation__wrap1">
                                Компания
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" class="svg-icons svg-size--16">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.851 8 11.5 2.508 9.95 1l-7.2 7 7.2 7 1.55-1.508L5.851 8Z" />
                                </svg>
                            </button>
                            <div class="mob-menu-header-navigation__wrap collapse multi-collapse" id="mob-menu-header-navigation__wrap1">
                                <div class="mob-menu-header-navigation__list">
                                    <a href="#" class="mob-menu-header-navigation__link">О nemo.kz</a>
                                    <a href="#" class="mob-menu-header-navigation__link">Магазины</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mob-menu-header__navigation">
                        <div class="mob-menu-header-navigation">
                            <button class="mob-menu-header-navigation__btn this-active" type="button" data-bs-toggle="collapse" data-bs-target="#mob-menu-header-navigation__wrap2" aria-expanded="false" aria-controls="mob-menu-header-navigation__wrap2">
                                Покупателям
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" class="svg-icons svg-size--16">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.851 8 11.5 2.508 9.95 1l-7.2 7 7.2 7 1.55-1.508L5.851 8Z" />
                                </svg>
                            </button>
                            <div class="mob-menu-header-navigation__wrap collapse multi-collapse" id="mob-menu-header-navigation__wrap2">
                                <div class="mob-menu-header-navigation__list">
                                    <a href="#" class="mob-menu-header-navigation__link">Доставка и оплата</a>
                                    <a href="#" class="mob-menu-header-navigation__link">Гарантия и сервис</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mob-menu-header__links">
                        <div class="mob-menu-header-links">
                            <a href="/contacts" class="mob-menu-header-links__item">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="this-icon svg-icons svg-size--32">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M25 10v12h-4.52l-4 5H7V5h9.48l4 5H25Zm-2 2h-3.48l-4-5H9v18h6.52l4-5H23v-8Z" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M24 15h7v2h-7v-2ZM1 10h7v2H1v-2ZM1 20h7v2H1v-2ZM14.072 10.628l1.857.743L14.476 15h4l-2.549 6.371-1.857-.743L15.524 17h-4l2.549-6.372Z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" class="this-arrow svg-icons">
                                    <path d="M3.043 0H14v11.043h-2.191V3.658L1.549 14 0 12.438l10.148-10.23H3.043V0Z" />
                                </svg> Контакты
                            </a>
                        </div>
                    </div>
                    <div class="mob-menu-header__contacts">
                        <div class="mob-menu-header-contacts">
                            <div class="mob-menu-header-contacts__inner">
                                <div class="mob-menu-header-contacts__title">Связаться с нами</div>
                                <div class="mob-menu-header-contacts__links">
                                    <a href="#" class="bs-btn mob-menu-heade-contacts__link bs-btn--ver-3 bs-btn--small">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" class="bs-btn__add-icons svg-icons">
                                            <path d="M3.043 0H14v11.043h-2.191V3.658L1.549 14 0 12.438l10.148-10.23H3.043V0Z" />
                                        </svg> Telegram
                                    </a>
                                    <a href="#" class="bs-btn mob-menu-heade-contacts__link bs-btn--ver-3 bs-btn--small">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" class="bs-btn__add-icons svg-icons">
                                            <path d="M3.043 0H14v11.043h-2.191V3.658L1.549 14 0 12.438l10.148-10.23H3.043V0Z" />
                                        </svg> Email
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Menu -->
        <!-- Search modal -->
        <div class="mobile-search__box mobile-search-box-body">
            <div class="mobile-search-results">
                <div class="mobile-search-wrapper">
                    <div class="mobile-search-container">
                        <div class="mobile-search-group">
                            <div class="mobile-search-group-title">Результаты</div>
                            <div class="mobile-search-group-description">
                                <a class="mobile-search-row" href="#">
                                    <span>айфон</span>
                                </a>
                                <a class="mobile-search-row" href="#">
                                    <span>айфон</span>
                                </a>
                                <a class="mobile-search-row" href="#">
                                    <span>айфон</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="mobile-search-container" id="mobile_search_products">
                        <div class="mobile-search-group mobile-search-products">
                            <div class="mobile-search-group-title">Подходящие товары</div>
                            <div class="mobile-search-group-description">
                                <a class="mobile-search-product" href="#">
                                    <div class="mobile-search-product__image" style="background-image: url('assets/images/products/hGCW9m0TgGjlCAfLByJ9Ob6g3raUJZMl5LdOyZTf.jpg')"></div>
                                    <div class="mobile-search-product__name-holder">
                                        <div class="mobile-search-product__name"> Смартфон Apple iPhone 13 128GB Slim... </div>
                                        <div class="mobile-search-product__price">
                                            <div class="mobile-search-product__price-current">349 990 ₸</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="mobile-search-close"></div>
                </div>
            </div>
        </div>
        <!-- End search modal -->
    </div>
</div>
<!-- End mobile header -->