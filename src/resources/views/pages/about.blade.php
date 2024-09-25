@extends('layouts.main')

@section('content')

<section class="about_page_block">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-md-6 col-sm-12 mb-4">
                        <div class="about_header">
                            <div class="about_header_main">
                                <h1 class="about_header_title"><span>Madrobots</span> — магазин<br>гаджетов для
                                    людей</h1>
                                <div class="about-header__text"> Мы&nbsp;уверены: технологии должны упрощать
                                    жизнь,
                                    а&nbsp;роботы&nbsp;— во&nbsp;всем помогать людям. Поэтому
                                    в&nbsp;нашем магазине
                                    собраны
                                    умные решения для безопасности, комфорта и&nbsp;здоровья. Это передовые
                                    гаджеты
                                    и&nbsp;аксессуары, которыми мы&nbsp;пользуемся сами.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 mb-4">
                        <div class="about-header__side">
                            <div class="about-header__media"><video loop="loop" autoplay="autoplay" muted="muted"
                                    playsinline="" preload="metadata">
                                    <img src="{{ asset('assets/images/aboutpage/94ndt5s727zuo7lrixfutiuhgoybwmh4.png') }}" type="video/mp4">
                                </video>
                                <button class="base-button outline about-header__button base-button--v2 base-button--sm"> 
                                    <i class="fa fa-play-circle" aria-hidden="true"></i>
                                    Фильм о компании <span class="global-preloader is-small"
                                        style="display:none;">
                                        <span
                                            class="global-preloader__box"></span></span>
                                </button>
                            </div>
                            <div class="about-header__info"> Приближаем технологическую сингулярность с 2012 года
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about_page_source">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="about_source_header">
                    <div class="about_source_main">
                        <h2 class="about_source_title">Как мы выбираем гаджеты</h2>
                        <div class="about-source__text"> Мы&nbsp;ищем самые интересные новинки
                            на&nbsp;крупнейших<br>
                            выставках технологий: CES в&nbsp;Лас-Вегасе, IFA в&nbsp;Берлине<br> и&nbsp;HKTDC&nbsp;в
                            Гонконге&nbsp;— и&nbsp;помогаем им&nbsp;освоиться<br> на&nbsp;российском рынке.
                        </div>
                    </div>
                    <img src="{{ asset('assets/images/aboutpage/ces-ifa.png') }}" class="about_source_img" alt="">
                </div>
                <div class="about-source__gallery">
                    <div class="col_one">
                        <img src="{{ asset('assets/images/aboutpage/gallery-1.jpg') }}" class="gallery-1" alt="">
                    </div>
                    <div class="col_two">
                        <img src="{{ asset('assets/images/aboutpage/gallery-2.jpg') }}" class="gallery-2" alt="">
                        <img src="{{ asset('assets/images/aboutpage/gallery-3.jpg') }}" class="gallery-3" alt="">
                    </div>

                </div>
                <div class="about_source_info">
                    <div class="about_source_text">
                        Еще один источник нашего вдохновения — это технологические стартапы и проекты с
                        краудфандинговых площадок Kickstarter и Indiegogo. Мы всегда в поисках «новых айфонов»
                        среди
                        напольных весов, ламп или рюкзаков для гаджетов.
                    </div>
                </div>
                <div class="about-source__info-images">
                    <img src="{{ asset('assets/images/aboutpage/indiegogo.svg') }}" alt="">
                    <img src="{{ asset('assets/images/aboutpage/kickstarter.svg') }}" alt="">
                </div>
                <div class="about-source__media">
                    <img src="{{ asset('assets/images/aboutpage/gallery-4.jpg') }}" alt="">
                    <video loop="loop" autoplay="autoplay" muted="muted" playsinline="" preload="metadata" style=" height: 404px;border-radius: 15px;">
                        <source src="{{ asset('assets/images/aboutpage/IMG_6930.MP4') }}" type="video/mp4">
                    </video>
                </div>
                <div class="about-source__banner">
                    <p>В&nbsp;2013 году мы&nbsp;начали свой путь вместе с&nbsp;брендом Mio Global, который изобрел
                        пульсометры без нагрудного датчика.
                    </p>
                    <img src="{{ asset('assets/images/aboutpage/watch.png') }}" class="watch_img" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about_store_block">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="about-store__title page-title"><span>Madrobots.ru</span> —большечем  просто магазин!
                </h2>
                <div class="about-store__text"> Мы&nbsp;привезли в&nbsp;Россию много крутых брендов
                    и&nbsp;познакомили нашу аудиторию с&nbsp;удивительными продуктами&nbsp;— умными весами,
                    антикражными рюкзаками, кошельками для криптовалюты. Каждый из&nbsp;них стал отдельным
                    проектом&nbsp;— со&nbsp;своим сайтом, сообществом и&nbsp;поддержкой.
                </div>
                <div class="about-store__list">
                    <div class="about-store__item">
                        <div class="about-store-card is-xd">
                            <a href="https://xd-design.ru" target="_blank" class="about-store-card__media"
                                style="transform: rotateX(0deg) rotateY(0deg);">
                                <img src="{{ asset('assets/images/aboutpage/xd.png') }}" alt="" class="about-store-card__image">
                                <img src="{{ asset('assets/images/aboutpage/xd-background.png') }}" alt=""
                                    class="about-store-card__background mobile-hidden is-xd">
                            </a>
                            <div class="about-store-card__info is-xd">
                                <div class="about-store-card__logo is-xd">
                                    <img src="{{ asset('assets/images/aboutpage/xd-logo.svg') }}" alt="">
                                </div>
                                <div class="about-store-card__text">Знаменитый городской рюкзак Bobby с&nbsp;защитой
                                    от&nbsp;карманников
                                </div>
                                <a href="https://xd-design.ru" target="_blank" class="about-store-card__link">
                                    xd-design.ru
                                </a>
                                <div class="about-store-card__info_line"></div>
                            </div>
                        </div>
                    </div>
                    <div class="about-store__item">
                        <div class="about-store-card is-chipolo">
                            <a href="https://chipolo.ru" target="_blank" class="about-store-card__media"
                                style="transform: rotateX(0deg) rotateY(0deg);">
                                <img src="{{ asset('assets/images/aboutpage/chipolo.png') }}" alt=""
                                    class="about-store-card__image">
                                <img src="{{ asset('assets/images/aboutpage/chipolo-background.png') }}" alt=""
                                    class="about-store-card__background mobile-hidden is-chipolo">
                            </a>
                            <div class="about-store-card__info is-chipolo">
                                <div class="about-store-card__logo is-chipolo">
                                    <img src="{{ asset('assets/images/aboutpage/chipolo-logo.svg') }}" alt="">
                                </div>
                                <div class="about-store-card__text">Главный продукт бренда&nbsp;— одноименный
                                    Bluetooth-трекер для поиска потерянных вещей
                                </div>
                                <a href="https://chipolo.ru" target="_blank" class="about-store-card__link">
                                    chipolo.ru
                                </a>
                                <div class="about-store-card__info_line"></div>
                            </div>
                        </div>
                    </div>
                    <div class="about-store__item">
                        <div class="about-store-card is-ledger">
                            <a href="https://ledgerwalletrussia.ru" target="_blank" class="about-store-card__media"
                                style="transform:rotateX(0deg) rotateY(0deg);">
                                <img src="{{ asset('assets/images/aboutpage/ledger.png') }}" alt=""
                                    class="about-store-card__image">
                                <img src="{{ asset('assets/images/aboutpage/ledger-background.png') }}" alt=""
                                    class="about-store-card__background mobile-hidden is-ledger">
                            </a>
                            <div class="about-store-card__info is-ledger">
                                <div class="about-store-card__logo is-ledger">
                                    <img src="{{ asset('assets/images/aboutpage/ledger-logo.svg') }}" alt="">
                                </div>
                                <div class="about-store-card__text">Аппаратные криптокошельки и&nbsp;другие решения
                                    для блокчейна
                                </div>
                                <a href="https://ledgerwalletrussia.ru" target="_blank"
                                    class="about-store-card__link">
                                    ledgerwalletrussia.ru
                                </a>
                                <div class="about-store-card__info_line"></div>
                            </div>
                        </div>
                    </div>
                    <div class="about-store__item">
                        <div class="about-store-card is-picooc">
                            <a href="https://picooc.ru" target="_blank" class="about-store-card__media"
                                style="transform:rotateX(0deg) rotateY(0deg);">
                                <img src="{{ asset('assets/images/aboutpage/picooc.png') }}" alt=""
                                    class="about-store-card__image">
                                <img src="{{ asset('assets/images/aboutpage/picooc-background.png') }}" alt=""
                                    class="about-store-card__background mobile-hidden is-picooc">
                            </a>
                            <div class="about-store-card__info is-picooc">
                                <div class="about-store-card__logo is-picooc">
                                    <img src="{{ asset('assets/images/aboutpage/picooc-logo.svg') }}" alt="">
                                </div>
                                <div class="about-store-card__text">Умные весы, которые измеряют более
                                    10&nbsp;параметров и&nbsp;ведут историю измерений
                                </div>
                                <a href="https://picooc.ru" target="_blank" class="about-store-card__link">
                                    picooc.ru
                                </a>
                                <div class="about-store-card__info_line"></div>
                            </div>
                        </div>
                    </div>
                    <div class="about-store__item">
                        <div class="about-store-card is-petoneer">
                            <a href="https://petoneer.ru" target="_blank" class="about-store-card__media"
                                style="transform:rotateX(0deg) rotateY(0deg);">
                                <img src="{{ asset('assets/images/aboutpage/petoneer.png') }}" alt=""
                                    class="about-store-card__image">
                                <img src="{{ asset('assets/images/aboutpage/petoneer-background.png') }}" alt=""
                                    class="about-store-card__background mobile-hidden is-petoneer">
                            </a>
                            <div class="about-store-card__info is-petoneer">
                                <div class="about-store-card__logo is-petoneer">
                                    <img src="{{ asset('assets/images/aboutpage/petoneer-logo.svg') }}" alt="">
                                </div>
                                <div class="about-store-card__text">Умные кормушки, поилки и&nbsp;игрушки для кошек
                                    и&nbsp;собак
                                </div>
                                <a href="https://petoneer.ru" target="_blank" class="about-store-card__link">
                                    petoneer.ru
                                </a>
                                <div class="about-store-card__info_line"></div>
                            </div>
                        </div>
                    </div>
                    <div class="about-store__item">
                        <div class="about-store-card is-nanoleaf">
                            <a href="https://nanoleaf.ru" target="_blank" class="about-store-card__media"
                                style="transform: rotateX(0deg) rotateY(0deg);">
                                <img src="{{ asset('assets/images/aboutpage/nanoleaf.png') }}" alt=""
                                    class="about-store-card__image">
                                <img src="{{ asset('assets/images/aboutpage/nanoleaf-background.png') }}" alt=""
                                    class="about-store-card__background mobile-hidden is-nanoleaf">
                            </a>
                            <div class="about-store-card__info is-nanoleaf">
                                <div class="about-store-card__logo is-nanoleaf">
                                    <img src="{{ asset('assets/images/aboutpage/nanoleaf-logo.svg') }}" alt="">
                                </div>
                                <div class="about-store-card__text">
                                    Умные многофункциональные системы освещения
                                </div>
                                <a href="https://nanoleaf.ru" target="_blank" class="about-store-card__link">
                                    nanoleaf.ru
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about_page_products">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="about_products">
                    <h2 class="about-products__title page-title"> Мы создаем <br> собственные продукты </h2>
                    <div class="row">
                        <div class="col-md-6 col-sm-12 mb-4">
                            <div class="about_products_card_header">
                                <div class="about-products-card__name">Zavtra</div>
                                <div class="about-products-card__text">В&nbsp;2014&nbsp;мы придумали свою линейку
                                    аксессуаров<br>Zavtra: минималистичные обложки для документов,<br> кошельки,
                                    чехлы,
                                    ключницы из&nbsp;натуральной кожи
                                </div>
                                <a href="https://халатенце.рф/" target="_blank" class="about-products-card__link">
                                    zavtra.co </a>
                                <img src="{{ asset('assets/images/aboutpage/y8c61k65flfgsjnsvoidougd00qa0akz.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 mb-5">
                            <div class="about_products_card_header">
                                <div class="about-products-card__name">Биван</div>
                                <div class="about-products-card__text">В 2016 запустили бренд надувных диванов Биван
                                    —<br>наше видение, какой должна быть мебель для<br>отдыха
                                </div>
                                <a href="https://халатенце.рф/" target="_blank" class="about-products-card__link">
                                    bivan.ru </a>
                                <img src="{{ asset('assets/images/aboutpage/o63xy50p0g85ojooak0fpyq2xf74vg4s.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="about_products_card_header">
                                <div class="about-products-card__name">Халатенце</div>
                                <div class="about-products-card__text">В 2017 стартовали продажи Халатенца. Это
                                    халат<br>плюс полотенце —универсальный аксессуар,<br>разработанный и
                                    произведенный в
                                    России
                                </div>
                                <a href="https://халатенце.рф/" target="_blank" class="about-products-card__link">
                                    халатенце.рф</a>
                                <img src="{{ asset('assets/images/aboutpage/txn5q9d8h62e9qlie0dz03spl0zk8ovb.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="about_products_card_header">
                                <div class="about-products-card__name">MIKU</div>
                                <div class="about-products-card__text">2021 — запуск линейки посуды для
                                    приготовления<br>блюд в микроволновой печи, 2022 — серия стильных<br>городских
                                    термосов, термокувшинов и кружек
                                </div>
                                <a href="https://халатенце.рф/" target="_blank" class="about-products-card__link">
                                    miku-russia.ru</a>
                                <img src="{{ asset('assets/images/aboutpage/94ndt5s727zuo7lrixfutiuhgoybwmh4.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about-page__social">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="about-social">
                            <div class="about-social_main">
                                <h2 class="about-social__title page-title">Мы за открытое<br>общение</h2>
                                <div class="about-social__list">
                                    <a href="https://vk.com/madrobots" target="_blank" class="about-social__link">
                                        <img src="{{ asset('assets/images/aboutpage/vk.svg') }}" alt="">
                                    </a>
                                    <a href="tg://resolve?domain=MadrobotsBot" target="_blank"
                                        class="about-social__link">
                                        <img src="{{ asset('assets/images/aboutpage/telegram.svg') }}" alt="">
                                    </a>
                                    <a href="https://api.whatsapp.com/send?phone=79161307403" target="_blank"
                                        class="about-social__link">
                                        <img src="{{ asset('assets/images/aboutpage/whatsapp.svg') }}" alt="">
                                    </a>
                                    <a href="https://www.youtube.com/channel/UCust46_fnK7DOXhOqenYWAw"
                                        target="_blank" class="about-social__link">
                                        <img src="{{ asset('assets/images/aboutpage/youtube.svg') }}" alt="">
                                    </a>
                                </div>
                                <div class="about-social__text"> Мы&nbsp;влюблены в&nbsp;электронику
                                    и&nbsp;электронную торговлю&nbsp;— и&nbsp;делимся всем, о&nbsp;чем узнали.
                                    С&nbsp;удовольствием рассказываем о&nbsp;наших гаджетах в&nbsp;блоге, ведем
                                    хронику самых ярких событий на&nbsp;популярных площадках, передаем свой опыт
                                    партнерам. </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="about-social__image"><img src="{{ asset('assets/images/aboutpage/image.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about-page__subscribe">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="about-subscribe">
                    <section class="subscribe-form">
                        <div class="subscribe-form__image">
                            <picture><!----><!---->
                                <source media="(max-width: 991px)" srcset="{{ asset('assets/images/aboutpage/small.png') }}">
                                <!---->
                                <img src="{{ asset('assets/images/aboutpage/large.png') }}" alt="">
                            </picture>
                        </div>
                        <div class="subscribe-form__main">
                            <h2 class="subscribe-form__title page-title"> Наша рассылка. Новинки и&nbsp;скидки
                                для&nbsp;своих </h2>
                            <div class="subscribe-form__subtitle">
                                Пишем редко, но&nbsp;от&nbsp;всего сердца
                            </div>
                            <form novalidate="novalidate" class="subscribe-form__form">
                                <input placeholder="Оставьте ваш e-mail" type="text" value=""
                                    class="subscribe-form__input">
                                <button
                                    class="base-button outline subscribe-form__button base-button--v1 base-button--lg">
                                     Подписаться <span class="global-preloader is-small"
                                        style="display:none;"><span class="global-preloader__box"></span></span>
                                        <i class="fa fa-external-link" aria-hidden="true"></i>
                                </button>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="about-page__company">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="about-company">
                    <h2 class="about-company__title page-title"> Madrobots&nbsp;— это в&nbsp;первую очередь люди
                    </h2>
                    <div class="about-company__text"> Кто такие «мы»? Основатель и&nbsp;капитан нашей команды
                        охотников
                        за&nbsp;техно-трендами&nbsp;— Николай Белоусов. Коля собрал вокруг себя людей, которые
                        «горят»
                        идеями и&nbsp;готовы реализовать их&nbsp;в&nbsp;рамках растущего бизнеса. С&nbsp;каждым
                        годом нас
                        становится все больше!
                    </div>
                    <div class="about-company__image">
                        <img src="{{ asset('assets/images/aboutpage/image (1).jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="about-page__brands">
    <section class="about-brands">
        <h2 class="about-brands__title page-title">Наши бренды</h2>
        <div class="about-brands__text"> Мы&nbsp;стали партнерами и&nbsp;локальными представителями в&nbsp;России
            и&nbsp;ЕАЭС для разработчиков инновационных продуктов. Наша главная задача&nbsp;— сделать эти технологии
            известными и&nbsp;доступными, а&nbsp;пользователей&nbsp;— счастливыми.
        </div>
        <button class="base-button outline about-brands__button base-button--v3 base-button--md"> Больше брендов
            <i class="fa fa-external-link" aria-hidden="true"></i>
            <span class="global-preloader is-small" style="display: none;"><span
                    class="global-preloader__box">
                    
        </button>
        <div class="about-brands__list mobile-hidden">
            <div class="about-brands__row">
                <a href="/brands/chipolo" class="about-brands__link">
                    <img src="{{ asset('assets/images/aboutpage/chipolo.svg') }}" alt="">
                </a>
                <a href="/brands/khalatentse" class="about-brands__link">
                    <img src="{{ asset('assets/images/aboutpage/halatence.svg') }}" alt="">
                </a>
                <a href="/brands/picooc" class="about-brands__link">
                    <img src="{{ asset('assets/images/aboutpage/picooc.svg') }}" alt="">
                </a>
                <a href="/brands/xd-design" class="about-brands__link">
                    <img src="{{ asset('assets/images/aboutpage/xd.svg') }}" alt="">
                </a>
                <a href="/p/mio-slice" class="about-brands__link">
                    <img src="{{ asset('assets/images/aboutpage/mio.svg') }}" alt="">
                </a>
                <a href="/brands/bellabeat" class="about-brands__link">
                    <img src="{{ asset('assets/images/aboutpage/bella.svg') }}" alt="">
                </a>
            </div>
            <div class="about-brands__row">
                <a href="/brands/bivan" class="about-brands__link">
                    <img src="{{ asset('assets/images/aboutpage/bivan.svg') }}" alt="">
                </a>
                <a href="/brands/ledger" class="about-brands__link">
                    <img src="{{ asset('assets/images/aboutpage/ledger.svg') }}" alt="">
                </a>
                <a href="/p/umnyy-displey-lametric-time" class="about-brands__link">
                    <img src="{{ asset('assets/images/aboutpage/la-metric.svg') }}" alt="">
                </a>
                <a href="/brands/petoneer" class="about-brands__link">
                    <img src="{{ asset('assets/images/aboutpage/petoneer.svg') }}" alt="">
                </a>
                <a href="/brands/back-to-the-roots-rus" class="about-brands__link">
                    <img src="{{ asset('assets/images/aboutpage/back.svg') }}" alt="">
                </a>
                <a href="/brands/travel-blue" class="about-brands__link">
                    <img src="{{ asset('assets/images/aboutpage/travel-blue.svg') }}" alt="">
                </a>
                <a href="/brands/qardio" class="about-brands__link"><img src="{{ asset('assets/images/aboutpage/qardio.svg') }}"
                        alt="">
                </a>
            </div>
            <div class="about-brands-mini-img">
                <div class="about-brands__row">
                    <div class="about-brands__link"><img src="{{ asset('assets/images/aboutpage/1.svg') }}" alt="./"></div>
                    <div class="about-brands__link"><img src="{{ asset('assets/images/aboutpage/2.svg') }}" alt=""></div>
                    <div class="about-brands__link"><img src="{{ asset('assets/images/aboutpage/3.svg') }}" alt=""></div>
                    <div class="about-brands__link"><img src="{{ asset('assets/images/aboutpage/4.svg') }}" alt=""></div>
                    <div class="about-brands__link"><img src="{{ asset('assets/images/aboutpage/5.svg') }}" alt=""></div>
                    <div class="about-brands__link"><img src="{{ asset('assets/images/aboutpage/6.svg') }}" alt=""></div>
                    <div class="about-brands__link"><img src="{{ asset('assets/images/aboutpage/7.svg') }}" alt=""></div>
                    <div class="about-brands__link"><img src="{{ asset('assets/images/aboutpage/8.svg') }}" alt=""></div>
                </div>
            </div>
           
        </div>

    </section>
</div>

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
    const contents = document.querySelectorAll(".content");

    tabs.onclick = e => {
        const id = e.target.dataset.id;
        if (id) {
            tabButton.forEach(btn => {
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



    const slider = document.getElementById("slider");
    const arrowLeft = document.querySelector(".arrow-left");
    const arrowRight = document.querySelector(".arrow-right");
    const slides = document.querySelectorAll(".slider-image");
    const bottom = document.getElementById("bottom");

    let currentSlideIndex = 0;
    const paginationCircles = [];
    const sliderWidth = slider.clientWidth;

    function createPaginationCircle() {
        const div = document.createElement("div");
        div.className = "pagination-circle";
        bottom.appendChild(div);
        paginationCircles.push(div);
    }

    function addPagination() {
        slides.forEach(createPaginationCircle);
        paginationCircles[0].classList.add("active");
        paginationCircles.forEach((circle, index) => {
            circle.addEventListener("click", () => changeSlide(index));
        });
    }

    function addActiveClass() {
        paginationCircles[currentSlideIndex].classList.add("active");
    }

    function removeActiveClass() {
        paginationCircles[currentSlideIndex].classList.remove("active");
    }

    function showSlide() {
        slider.style.transform = `translateX(-${currentSlideIndex * sliderWidth}px)`;
    }

    function changeSlide(slideIndex) {
        removeActiveClass();
        currentSlideIndex = slideIndex;
        addActiveClass();
        showSlide();
    }

    function nextSlide() {
        let newSlideIndex = currentSlideIndex + 1;
        if (newSlideIndex > slides.length - 1) {
            newSlideIndex = 0;
        }
        changeSlide(newSlideIndex);
    }

    function previousSlide() {
        let newSlideIndex = currentSlideIndex - 1;
        if (newSlideIndex < 0) {
            newSlideIndex = slides.length - 1;
        }
        changeSlide(newSlideIndex);
    }

    addPagination();
    arrowLeft.addEventListener("click", previousSlide);
    arrowRight.addEventListener("click", nextSlide);

</script>

@endsection