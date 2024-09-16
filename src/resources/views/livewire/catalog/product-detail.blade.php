<div>
    <div class="product-wrap h-container">
        <main class="product-content__wrap">
            <div class="product-content">
                <div class="product-gallery__wrap">
                    <div class="product__gallery">
                        <div class="product-gallery__container">


                        <!-- Swiper -->

                        <div class="swiper-container gallery-thumbs">
                            <div class="swiper-wrapper swiper-thumbs">
                                <div class="swiper-slide"><img src="{{ asset('assets/images/products/product-details/1.jpg') }}" alt=""></div>
                                <div class="swiper-slide"><img src="{{ asset('assets/images/products/product-details/2.jpg') }}" alt=""></div>
                                <div class="swiper-slide"><img src="{{ asset('assets/images/products/product-details/3.jpg') }}" alt=""></div>
                                <div class="swiper-slide"><img src="{{ asset('assets/images/products/product-details/4.jpg') }}" alt=""></div>
                                <div class="swiper-slide"><img src="{{ asset('assets/images/products/product-details/5.jpg') }}" alt=""></div>
                            </div>
                        </div>

                        <div class="swiper-container gallery-top">
                            <div class="swiper-wrapper">

                            <div class="swiper-slide"><img src="{{ asset('assets/images/products/product-details/1.jpg') }}" alt=""></div>
                            <div class="swiper-slide"><img src="{{ asset('assets/images/products/product-details/2.jpg') }}" alt=""></div>
                            <div class="swiper-slide"><img src="{{ asset('assets/images/products/product-details/3.jpg') }}" alt=""></div>
                            <div class="swiper-slide"><img src="{{ asset('assets/images/products/product-details/4.jpg') }}" alt=""></div>
                            <div class="swiper-slide"><img src="{{ asset('assets/images/products/product-details/5.jpg') }}" alt=""></div>

                            </div>
                        </div>
                        </div>
                    </div>
                </div>

               

                <div class="product-body__content">
                    <div class="product-instruction-wrap">
                        <h3>Инструкции и сертификаты</h3>
                        <div class="product-instruction">
                            <a href="#">
                                <div class="instruction-item">
                                    <div class="instruction-item-img-wrap">
                                        <span>PDF</span>
                                        3.6MB
                                    </div>
                                    <div class="instruction-item-description">
                                        Инструкция по эксплуатации
                                    </div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="instruction-item">
                                    <div class="instruction-item-img-wrap">
                                        <span>PDF</span>
                                        779KB
                                    </div>
                                    <div class="instruction-item-description">
                                        Скачать сертификат соответствия
                                    </div>
                                </div>
                            </a>
                            <div class="instruction-item__additional">
                                <div class="img-with__bg-gray">
                                    <img src="{{ asset('assets/images/products/eac.png') }}" alt="">
                                </div>
                                
                                <img src="{{ asset('assets/images/products/certificate.png') }}" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="product-tabs mt-4">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link product-tab__item" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="false">Описание</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active product-tab__item" id="specification-tab" data-bs-toggle="tab" data-bs-target="#specification" type="button" role="tab" aria-controls="specification" aria-selected="true">Характеристика</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link product-tab__item" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews" type="button" role="tab" aria-controls="reviews" aria-selected="false">Отзывы</button>
                            </li>
                        </ul>

                        <div class="tab-content" id="myTabContent">

                            <div class="tab-pane fade " id="description" role="tabpanel" aria-labelledby="description-tab">
                                <div class="product-content__description mt-2">
                                    <h3>
                                        Что это?
                                    </h3>
                                    <div class="product-content__text">
                                        <p>
                                            DROVO Трицератопс Брон ― это миниатюрный деревянный конструктор для детей старше 5 лет. Пазл состоит из 14 деталей и в собранном виде представляет собой фигурку динозавра трицератопса с подвижными деталями. Размер собранного пазла 12,8 x 5,6 сантиметров. Сборка фигурки не требует клея и занимает всего полчаса.
                                        </p>
                                        <p>
                                            Элементы пазла аккуратно и без заусенцев вырезаны из фанеры, на них лазером прорисованы детали: глаза, нос, полоски на спине динозавра. Особенность фигурки — подвижные элементы: если погладить спину динозавра, то он радостно замашет вам своей головой.
                                        </p>
                                        <p>
                                            Сборка игрушки-пазла представляет собой увлекательный процесс, приносящий удовольствие и развивающий пространственное мышление, логику и мелкую моторику. Такой подарок станет отличным стимулом для творчества и прекрасным способом провести время.
                                        </p>
                                        <div class="gradient-block"></div>
                                    </div>
                                    <button class="text-skiper text-skip" data-target="section1">
                                        Развернуть описание
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" class="nav-header__link--arrow svg-icons svg-size--16">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M5.851 8 11.5 2.508 9.95 1l-7.2 7 7.2 7 1.55-1.508L5.851 8Z"></path>
                                        </svg>
                                    </button>
                                    <button class="text-skiper text-skiped" data-target="section1">
                                        Свернуть описание
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" class="nav-header__link--arrow svg-icons svg-size--16">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M5.851 8 11.5 2.508 9.95 1l-7.2 7 7.2 7 1.55-1.508L5.851 8Z"></path>
                                        </svg>
                                    </button>
                                    
                                </div>
                            </div>
                    

                            <div class="tab-pane fade show active" id="specification" role="tabpanel" aria-labelledby="specification-tab">
                                <div class="product-content__property mt-2">
                                    <h3>Характеристика</h3>
                                    <div class="product-content__text">
                                        <ul class="product-property__list">
                                            <li class="property__item">
                                                <span class="property-item__title">Страна-производитель</span>
                                                <span class="property-item__content">Россия</span>
                                            </li>
                                            <li class="property__item">
                                                <span class="property-item__title">Материал</span>
                                                <span class="property-item__content">фанера</span>
                                            </li>
                                            <li class="property__item">
                                                <span class="property-item__title">Артикул</span>
                                                <span class="property-item__content">DR006</span>
                                            </li>
                                            <li class="property__item">
                                                <span class="property-item__title">Кол-во деталей</span>
                                                <span class="property-item__content">14</span>
                                            </li>
                                            <li class="property__item">
                                                <span class="property-item__title">Габариты в собранном виде</span>
                                                <span class="property-item__content">128 x 56 x 14 мм</span>
                                            </li>
                                            <li class="property__item">
                                                <span class="property-item__title">Сложность</span>
                                                <span class="property-item__content">1</span>
                                            </li>
                                            <li class="property__item">
                                                <span class="property-item__title">Рекомендованный возраст</span>
                                                <span class="property-item__content">5+</span>
                                            </li>
                                            <li class="property__item">
                                                <span class="property-item__title">Время сборки</span>
                                                <span class="property-item__content">30 мин</span>
                                            </li>
                                            <li class="property__item">
                                                <span class="property-item__title">Подвижные элементы</span>
                                                <span class="property-item__content">голова двигается вверх-вниз</span>
                                            </li>
                                        </ul>
                                        <h3 class="mt-4">Что в коробке</h3>
                                        <ul class="product-property-second__list">
                                            <li class="product-property-second__item">Сборная модель из дерева</li>
                                            <li class="product-property-second__item">Документация</li>
                                        </ul>
                                        <div class="gradient-block"></div>
                                    </div>
        
                                    <button class="text-skiper text-skip" data-target="section2">
                                        Развернуть характеристики
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" class="nav-header__link--arrow svg-icons svg-size--16">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M5.851 8 11.5 2.508 9.95 1l-7.2 7 7.2 7 1.55-1.508L5.851 8Z"></path>
                                        </svg>
                                    </button>
                                    <button class="text-skiper text-skiped" data-target="section2">
                                        Свернуть характеристики
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" class="nav-header__link--arrow svg-icons svg-size--16">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M5.851 8 11.5 2.508 9.95 1l-7.2 7 7.2 7 1.55-1.508L5.851 8Z"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                    

                            <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                                <div class="product-reviews__wrap mt-2">
                                    <div class="product-reviews-title-wrap">
                                        <h3>Отзывы</h3>
                                        <div class="review-middle-wrap">
                                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M16 4.588l2.833 8.719H28l-7.416 5.387 2.832 8.719L16 22.023l-7.417 5.389 2.833-8.719L4 13.307h9.167L16 4.588z"></path></g></svg>
                                            <div class="review-middle">
                                                4.8 баллов
                                            <span>259 отзывов</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-reviews">
                                        <div class="product-review-item">
                                            <div class="product-review-item__left">
                                                <div class="item-inner__wrap">
                                                    <div class="item-inner-stars">
                                                        <svg class="review-star" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M16 4.588l2.833 8.719H28l-7.416 5.387 2.832 8.719L16 22.023l-7.417 5.389 2.833-8.719L4 13.307h9.167L16 4.588z"></path></g></svg>
                                                        <svg class="review-star" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M16 4.588l2.833 8.719H28l-7.416 5.387 2.832 8.719L16 22.023l-7.417 5.389 2.833-8.719L4 13.307h9.167L16 4.588z"></path></g></svg>
                                                        <svg class="review-star" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M16 4.588l2.833 8.719H28l-7.416 5.387 2.832 8.719L16 22.023l-7.417 5.389 2.833-8.719L4 13.307h9.167L16 4.588z"></path></g></svg>
                                                        <svg class="review-star" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M16 4.588l2.833 8.719H28l-7.416 5.387 2.832 8.719L16 22.023l-7.417 5.389 2.833-8.719L4 13.307h9.167L16 4.588z"></path></g></svg>
                                                        <svg class="review-star" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M16 4.588l2.833 8.719H28l-7.416 5.387 2.832 8.719L16 22.023l-7.417 5.389 2.833-8.719L4 13.307h9.167L16 4.588z"></path></g></svg>
                                                    </div>
                                                    <h4>Татьяна</h4>
                                                </div>
                                                <div class="item-inner-description">
                                                    Уверенна что продукт очень классный
                                                </div>
                                            </div>
                                            <div class="product-review-item__right">
                                                <div class="product-review__date">
                                                    15 августа 2024
                                                </div>
                                                <img src="assets/images/products/kaspi.png" alt="">
                                            </div>
                                        </div>
                                        <div class="product-review-item">
                                            <div class="product-review-item__left">
                                                <div class="item-inner__wrap">
                                                    <div class="item-inner-stars">
                                                        <svg class="review-star" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M16 4.588l2.833 8.719H28l-7.416 5.387 2.832 8.719L16 22.023l-7.417 5.389 2.833-8.719L4 13.307h9.167L16 4.588z"></path></g></svg>
                                                        <svg class="review-star" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M16 4.588l2.833 8.719H28l-7.416 5.387 2.832 8.719L16 22.023l-7.417 5.389 2.833-8.719L4 13.307h9.167L16 4.588z"></path></g></svg>
                                                        <svg class="review-star" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M16 4.588l2.833 8.719H28l-7.416 5.387 2.832 8.719L16 22.023l-7.417 5.389 2.833-8.719L4 13.307h9.167L16 4.588z"></path></g></svg>
                                                        <svg class="review-star" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M16 4.588l2.833 8.719H28l-7.416 5.387 2.832 8.719L16 22.023l-7.417 5.389 2.833-8.719L4 13.307h9.167L16 4.588z"></path></g></svg>
                                                        <svg class="review-star" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M16 4.588l2.833 8.719H28l-7.416 5.387 2.832 8.719L16 22.023l-7.417 5.389 2.833-8.719L4 13.307h9.167L16 4.588z"></path></g></svg>
                                                    </div>
                                                    <h4>Татьяна</h4>
                                                </div>
                                                <div class="item-inner-description">
                                                    Уверенна что продукт очень классный
                                                </div>
                                            </div>
                                            <div class="product-review-item__right">
                                                <div class="product-review__date">
                                                    15 августа 2024
                                                </div>
                                                <img src="{{ asset('assets/images/products/kaspi.png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="product-review-item">
                                            <div class="product-review-item__left">
                                                <div class="item-inner__wrap">
                                                    <div class="item-inner-stars">
                                                        <svg class="review-star" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M16 4.588l2.833 8.719H28l-7.416 5.387 2.832 8.719L16 22.023l-7.417 5.389 2.833-8.719L4 13.307h9.167L16 4.588z"></path></g></svg>
                                                        <svg class="review-star" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M16 4.588l2.833 8.719H28l-7.416 5.387 2.832 8.719L16 22.023l-7.417 5.389 2.833-8.719L4 13.307h9.167L16 4.588z"></path></g></svg>
                                                        <svg class="review-star" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M16 4.588l2.833 8.719H28l-7.416 5.387 2.832 8.719L16 22.023l-7.417 5.389 2.833-8.719L4 13.307h9.167L16 4.588z"></path></g></svg>
                                                        <svg class="review-star" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M16 4.588l2.833 8.719H28l-7.416 5.387 2.832 8.719L16 22.023l-7.417 5.389 2.833-8.719L4 13.307h9.167L16 4.588z"></path></g></svg>
                                                        <svg class="review-star" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M16 4.588l2.833 8.719H28l-7.416 5.387 2.832 8.719L16 22.023l-7.417 5.389 2.833-8.719L4 13.307h9.167L16 4.588z"></path></g></svg>
                                                    </div>
                                                    <h4>Татьяна</h4>
                                                </div>
                                                <div class="item-inner-description">
                                                    Уверенна что продукт очень классный
                                                </div>
                                            </div>
                                            <div class="product-review-item__right">
                                                <div class="product-review__date">
                                                    15 августа 2024
                                                </div>
                                                <img src="{{ asset('assets/images/products/kaspi.png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="product-review-item">
                                            <div class="product-review-item__left">
                                                <div class="item-inner__wrap">
                                                    <div class="item-inner-stars">
                                                        <svg class="review-star" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M16 4.588l2.833 8.719H28l-7.416 5.387 2.832 8.719L16 22.023l-7.417 5.389 2.833-8.719L4 13.307h9.167L16 4.588z"></path></g></svg>
                                                        <svg class="review-star" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M16 4.588l2.833 8.719H28l-7.416 5.387 2.832 8.719L16 22.023l-7.417 5.389 2.833-8.719L4 13.307h9.167L16 4.588z"></path></g></svg>
                                                        <svg class="review-star" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M16 4.588l2.833 8.719H28l-7.416 5.387 2.832 8.719L16 22.023l-7.417 5.389 2.833-8.719L4 13.307h9.167L16 4.588z"></path></g></svg>
                                                        <svg class="review-star" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M16 4.588l2.833 8.719H28l-7.416 5.387 2.832 8.719L16 22.023l-7.417 5.389 2.833-8.719L4 13.307h9.167L16 4.588z"></path></g></svg>
                                                        <svg class="review-star" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M16 4.588l2.833 8.719H28l-7.416 5.387 2.832 8.719L16 22.023l-7.417 5.389 2.833-8.719L4 13.307h9.167L16 4.588z"></path></g></svg>
                                                    </div>
                                                    <h4>Татьяна</h4>
                                                </div>
                                                <div class="item-inner-description">
                                                    Уверенна что продукт очень классный
                                                </div>
                                            </div>
                                            <div class="product-review-item__right">
                                                <div class="product-review__date">
                                                    15 августа 2024
                                                </div>
                                                <img src="{{ asset('assets/images/products/kaspi.png') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="product-details__mobile mt-5">
                            <div class="product-favorite__wrap"><!--IF you need full^ need add class "liked"-->
                                <div class="product-favorite @if($isFavourite) active @endif" wire:click="toggleFavourite">
                                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4.45067 13.9082L11.4033 20.4395C11.6428 20.6644 11.7625 20.7769 11.9037 20.8046C11.9673 20.8171 12.0327 20.8171 12.0963 20.8046C12.2375 20.7769 12.3572 20.6644 12.5967 20.4395L19.5493 13.9082C21.5055 12.0706 21.743 9.0466 20.0978 6.92607L19.7885 6.52734C17.8203 3.99058 13.8696 4.41601 12.4867 7.31365C12.2913 7.72296 11.7087 7.72296 11.5133 7.31365C10.1304 4.41601 6.17972 3.99058 4.21154 6.52735L3.90219 6.92607C2.25695 9.0466 2.4945 12.0706 4.45067 13.9082Z" stroke-width="2"></path> </g></svg>
                                    <span>В избранное</span>
                                </div>
                            </div>
                            <div class="product-side__article-wrap">
                                <div class="product-article">
                                    Артикул: {{ $product->getArticle() }}
                                </div>
                                <h1 class="product-title">
                                    {{ $product->translation()?->name }}
                                </h1>
                                <div class="product-availbale"><!--IF you need change color^ need add class "no-available"-->
                                        <svg class="icon-lighting" width="56" height="116" viewBox="0 0 56 116" fill="none" xmlns="http://www.w3.org/2000/svg" class="header_button_catalog__icon">
                                            <path d="M56 48.15 27.451 116V67.85H0L28.549 0v48.15H56Z" ></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M9.5 67.849 28.55 0 0 67.849h9.5ZM27.451 116l9.05-48.151h-9.05V116Z" ></path>
                                        </svg>                       
                                      <span>Товар в наличии</span>  
                                </div>
                            </div>
                            

                            

        
                            <div class="product-price">
                                <div class="product-price__current">
                                    {{ $product->getPrice() }} <span>₸</span>
                                </div>
                                @if ($product->getOldPrice() > 0)
                                    <div class="product-price__old">
                                        {{ $product->getOldPrice() }} <span>₸</span>
                                    </div>
                                @endif
                            </div>
        
                            <div class="product-controls mt-5">
                                <button class="base-button">
                                    <span>В корзину</span>
                                    <svg viewBox="0 0 24.00 24.00" xmlns="http://www.w3.org/2000/svg" stroke="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"  stroke-width="0.288"></g><g id="SVGRepo_iconCarrier"> <path d="M7 17L17 7M17 7H8M17 7V16"  stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                </button>
                                <button class="base-silver-button">
                                    <span>Купить в 1 клик</span>
                                    <svg viewBox="0 0 24.00 24.00"  xmlns="http://www.w3.org/2000/svg" stroke="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"  stroke-width="0.288"></g><g id="SVGRepo_iconCarrier"> <path d="M7 17L17 7M17 7H8M17 7V16" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                </button>
                                <button class="base-red-button">
                                    <svg width="429" height="524" viewBox="0 0 429 524" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M258.311 319.219C253.97 289.648 246.712 257.876 193.016 249.587C178.079 247.236 167.079 249.403 159.337 255.951C139.347 272.974 139.691 320.411 140.09 375.429L140.189 391.007L140.217 397.035C140.463 449.006 141.202 493.479 153.464 513.441C155.994 517.56 159.925 520.992 164.997 523.694C140.016 522.561 115.847 518.3 92.8658 511.292C95.7975 504.456 97.3511 491.822 96.5674 469.352C95.0637 425.951 87.5806 368.717 75.9443 369.371C63.3996 370.14 58.6283 435.437 64.121 479.029C65.3704 488.662 67.1179 496.713 69.31 502.988C46.0874 493.665 24.3223 481.455 4.45332 466.802C6.43294 464.53 7.90932 458.583 9.15247 453.575L9.23332 453.249L9.61771 451.168L11.2625 443.925C17.4252 415.014 18.6036 386.728 15.214 353.242C13.0829 331.611 9.75664 318.679 6.62483 307.393C3.43508 295.183 0.701698 284.601 0.965515 268.179C1.13108 253.361 4.19464 243.105 7.52577 232.196C11.3808 219.75 15.6753 205.714 16.2991 181.329C17.9271 134.004 22.8402 122.229 37.0758 108.495C51.2078 94.8212 55.522 89.136 55.522 79.0852C55.522 76.8805 54.8796 74.0581 54.1244 70.7406C51.4348 58.9246 47.3154 40.8277 65.7021 21.9872C80.8512 6.59042 95.5512 0.985107 106.13 0.985107C112.111 0.985107 116.769 2.77818 119.501 5.5768C127.038 13.4437 124.927 28.6901 109.865 48.8719C94.7712 69.1695 95.2456 77.9747 96.1268 82.647C97.0831 87.3564 101.664 93.6711 110.493 100.529L110.924 100.877C117.578 106.249 125.167 112.374 130.122 121.129C139.508 137.777 144.961 153.718 152.412 175.496L152.769 176.539L154.921 182.906L155.872 185.387C163.317 203.057 181.287 209.329 212.276 209.329C244.462 209.329 278.63 188.43 278.63 172.318C278.63 164.018 276.835 159.499 275.109 155.152C273.509 151.124 271.968 147.243 271.968 140.638C271.968 126.894 292.64 87.2242 323.782 87.2242C339.641 87.2242 347.919 98.6957 340.239 114.542C337.797 119.63 334.544 125.422 331.263 131.264C324.438 143.414 317.495 155.776 317.495 162.442C317.495 180.726 344.827 166.601 362.019 152.571C379.49 138.532 383.328 134.612 395.306 113.631C402.605 100.667 413.006 98.1943 419.934 101.584C427.587 105.398 432.427 116.651 425.51 132.767C420.134 145.131 405.628 160.829 390.233 177.488L389.765 177.994C368.939 200.381 345.404 225.887 345.404 242.214C345.404 325.412 392.572 398.001 398.041 405.949C401.734 411.472 404.27 414.419 406.01 415.968C394.448 430.088 381.61 443.114 367.673 454.866C370.324 440.948 337.583 362.852 319.301 371.683C305.266 378.641 310.709 458.584 325.212 484.067C325.309 484.231 325.413 484.386 325.523 484.533C308.561 494.374 290.533 502.565 271.654 508.886C273.492 506.962 274.864 504.981 275.692 502.972C277.137 499.179 277.929 492.276 277.929 483.281C277.929 447.638 267.461 379.65 262.291 346.067L262.141 345.094L259.527 327.692L259.034 324.261L258.311 319.219Z" fill="#fff"/>
                                        </svg>
                                        
                                    <div>
                                        <div class="base-red__title">
                                            В рассрочку
                                        </div>
                                        <div class="base-red__description">
                                            2 997 <small>x 3 мес</small>
                                        </div>
                                    </div>
                                </button>
                            </div>
                        </div>

                        <div class="product-delivery__mobile delivery-address__wrap">
                            <span>Город доставки</span>
                            <br>
                            <button class="delivery__city">
                                Алматы, Бостандыкский район, Алматы
                                <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.32951 4.17053L1.125 12.375V16.875H5.625L13.8295 8.67052L9.32951 4.17053Z" fill="#ADBDD2"/>
                                    <path d="M10.9205 2.5795L15.4205 7.07951L17.068 5.43198C17.6648 4.83524 18 4.02589 18 3.18198C18 1.42462 16.5754 0 14.818 0C13.9741 0 13.1648 0.335244 12.568 0.931981L10.9205 2.5795Z" fill="#ADBDD2"/>
                                    </svg>
                                    
                            </button>
                            <div class="delivery__empty">
                                Доставка в ваш регион не осуществляется
                            </div>
                        </div>
                    </div>

                    <div class="product-content__features">
                        <div class="product-feature__title">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="m7.876 0-2.25 5.625V15.75h10.125L18.001 9V5.625h-6.75V2.25A2.25 2.25 0 0 0 9.001 0H7.876ZM3.376 5.625H.001V15.75h3.375V5.625Z" fill="#F0E4D5"/></svg>
                            Особенности
                        </div> 
                        <ul class="product-feature__list">
                            <li class="feature__item">Сборная модель из дерева</li>
                            <li class="feature__item">У собранной фигурки поднимается и опускается голова</li>
                            <li class="feature__item">Сборка без клея</li>
                            <li class="feature__item">Время сборки 30 мин</li>
                            <li class="feature__item">Для детей старше 5 лет</li>
                        </ul>   

                    </div>




                    
                </div>
            </div>
            <div class="product-info">
                <div>
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M40 37.5H0V30L17.5 0h5L40 30v7.5ZM17.5 10h5v12.5h-5V10Zm0 17.5h5v5h-5v-5Z" fill="#F0E4D5"/></svg>

                </div>
                <div>
                    Информация о технических характеристиках, комплекте поставки, 
                    стране изготовления и внешнем виде товара носит справочный 
                    характер и основывается на последних доступных к моменту 
                    публикации сведениях.
                </div>
            </div>
        </main>
        <aside class="product-side">
            
            <div class="product-side__top">
                
                <div class="product-side__article-wrap">
                    <div class="product-article">
                        Артикул: {{ $product->getArticle() }}
                    </div>
                    <div class="product-availbale"><!--IF you need change color^ need add class "no-available"-->
                            {{-- <svg class="icon-lighting" width="56" height="116" viewBox="0 0 56 116" fill="none" xmlns="http://www.w3.org/2000/svg" class="header_button_catalog__icon">
                                <path d="M56 48.15 27.451 116V67.85H0L28.549 0v48.15H56Z" ></path>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.5 67.849 28.55 0 0 67.849h9.5ZM27.451 116l9.05-48.151h-9.05V116Z" ></path>
                            </svg>                        --}}
                          <span>Товар в наличии</span>  
                    </div>
                </div>
                
                <h1 class="product-title">
                    {{ $product->translation()?->name }}
                </h1>
                
                <div class="product-favorite__wrap"><!--IF you need full^ need add class "liked"-->
                    <div class="product-favorite @if($isFavourite) active @endif" wire:click="toggleFavourite">
                        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4.45067 13.9082L11.4033 20.4395C11.6428 20.6644 11.7625 20.7769 11.9037 20.8046C11.9673 20.8171 12.0327 20.8171 12.0963 20.8046C12.2375 20.7769 12.3572 20.6644 12.5967 20.4395L19.5493 13.9082C21.5055 12.0706 21.743 9.0466 20.0978 6.92607L19.7885 6.52734C17.8203 3.99058 13.8696 4.41601 12.4867 7.31365C12.2913 7.72296 11.7087 7.72296 11.5133 7.31365C10.1304 4.41601 6.17972 3.99058 4.21154 6.52735L3.90219 6.92607C2.25695 9.0466 2.4945 12.0706 4.45067 13.9082Z" stroke-width="2"></path> </g></svg>
                        <span>В избранное</span>
                    </div>
                </div>

                <div class="product-price">
                    <div class="product-price__current">
                        {{ $product->getPrice() }} <span>₸</span>
                    </div>
                    @if ($product->getOldPrice() > 0)
                        <div class="product-price__old">
                            {{ $product->getOldPrice() }} <span>₸</span>
                        </div>
                    @endif
                </div>

                <div class="product-controls">
                    <button class="base-button">
                        <span>В корзину</span>
                        <svg viewBox="0 0 24.00 24.00" xmlns="http://www.w3.org/2000/svg" stroke="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"  stroke-width="0.288"></g><g id="SVGRepo_iconCarrier"> <path d="M7 17L17 7M17 7H8M17 7V16"  stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                    </button>
                    <button class="base-silver-button">
                        <span>Купить в 1 клик</span>
                        <svg viewBox="0 0 24.00 24.00"  xmlns="http://www.w3.org/2000/svg" stroke="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"  stroke-width="0.288"></g><g id="SVGRepo_iconCarrier"> <path d="M7 17L17 7M17 7H8M17 7V16" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                    </button>
                    <button class="base-red-button">
                        <svg width="429" height="524" viewBox="0 0 429 524" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M258.311 319.219C253.97 289.648 246.712 257.876 193.016 249.587C178.079 247.236 167.079 249.403 159.337 255.951C139.347 272.974 139.691 320.411 140.09 375.429L140.189 391.007L140.217 397.035C140.463 449.006 141.202 493.479 153.464 513.441C155.994 517.56 159.925 520.992 164.997 523.694C140.016 522.561 115.847 518.3 92.8658 511.292C95.7975 504.456 97.3511 491.822 96.5674 469.352C95.0637 425.951 87.5806 368.717 75.9443 369.371C63.3996 370.14 58.6283 435.437 64.121 479.029C65.3704 488.662 67.1179 496.713 69.31 502.988C46.0874 493.665 24.3223 481.455 4.45332 466.802C6.43294 464.53 7.90932 458.583 9.15247 453.575L9.23332 453.249L9.61771 451.168L11.2625 443.925C17.4252 415.014 18.6036 386.728 15.214 353.242C13.0829 331.611 9.75664 318.679 6.62483 307.393C3.43508 295.183 0.701698 284.601 0.965515 268.179C1.13108 253.361 4.19464 243.105 7.52577 232.196C11.3808 219.75 15.6753 205.714 16.2991 181.329C17.9271 134.004 22.8402 122.229 37.0758 108.495C51.2078 94.8212 55.522 89.136 55.522 79.0852C55.522 76.8805 54.8796 74.0581 54.1244 70.7406C51.4348 58.9246 47.3154 40.8277 65.7021 21.9872C80.8512 6.59042 95.5512 0.985107 106.13 0.985107C112.111 0.985107 116.769 2.77818 119.501 5.5768C127.038 13.4437 124.927 28.6901 109.865 48.8719C94.7712 69.1695 95.2456 77.9747 96.1268 82.647C97.0831 87.3564 101.664 93.6711 110.493 100.529L110.924 100.877C117.578 106.249 125.167 112.374 130.122 121.129C139.508 137.777 144.961 153.718 152.412 175.496L152.769 176.539L154.921 182.906L155.872 185.387C163.317 203.057 181.287 209.329 212.276 209.329C244.462 209.329 278.63 188.43 278.63 172.318C278.63 164.018 276.835 159.499 275.109 155.152C273.509 151.124 271.968 147.243 271.968 140.638C271.968 126.894 292.64 87.2242 323.782 87.2242C339.641 87.2242 347.919 98.6957 340.239 114.542C337.797 119.63 334.544 125.422 331.263 131.264C324.438 143.414 317.495 155.776 317.495 162.442C317.495 180.726 344.827 166.601 362.019 152.571C379.49 138.532 383.328 134.612 395.306 113.631C402.605 100.667 413.006 98.1943 419.934 101.584C427.587 105.398 432.427 116.651 425.51 132.767C420.134 145.131 405.628 160.829 390.233 177.488L389.765 177.994C368.939 200.381 345.404 225.887 345.404 242.214C345.404 325.412 392.572 398.001 398.041 405.949C401.734 411.472 404.27 414.419 406.01 415.968C394.448 430.088 381.61 443.114 367.673 454.866C370.324 440.948 337.583 362.852 319.301 371.683C305.266 378.641 310.709 458.584 325.212 484.067C325.309 484.231 325.413 484.386 325.523 484.533C308.561 494.374 290.533 502.565 271.654 508.886C273.492 506.962 274.864 504.981 275.692 502.972C277.137 499.179 277.929 492.276 277.929 483.281C277.929 447.638 267.461 379.65 262.291 346.067L262.141 345.094L259.527 327.692L259.034 324.261L258.311 319.219Z" fill="#fff"/>
                            </svg>
                            
                        <div>
                            <div class="base-red__title">
                                В рассрочку
                            </div>
                            <div class="base-red__description">
                                2 997 <small>x 3 мес</small>
                            </div>
                        </div>
                    </button>
                </div>

            </div>

            <div class="product-side__center">
                <div class="delivery-address__wrap">
                    <span>Город доставки</span>
                    <button class="delivery__city">
                        Алматы, Бостандыкский район, Алматы
                        <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.32951 4.17053L1.125 12.375V16.875H5.625L13.8295 8.67052L9.32951 4.17053Z" fill="#ADBDD2"/>
                            <path d="M10.9205 2.5795L15.4205 7.07951L17.068 5.43198C17.6648 4.83524 18 4.02589 18 3.18198C18 1.42462 16.5754 0 14.818 0C13.9741 0 13.1648 0.335244 12.568 0.931981L10.9205 2.5795Z" fill="#ADBDD2"/>
                            </svg>
                            
                    </button>
                    <div class="delivery__empty">
                        Доставка в ваш регион не осуществляется
                    </div>
                </div>
            </div>

            <div class="product-side__bottom">
                <div class="side-banner">
                    <a href="#">
                        <img src="{{ asset('/assets/images/products/banner-1--sm.jpg') }}" alt="">
                    </a>
                </div>
                <div class="side-banner">
                    <a href="#">
                        <img src="{{ asset('/assets/images/products/banner-2--sm.jpg') }}" alt="">
                    </a>
                </div>
            </div>
        </aside>
    </div>

    <div class="advantage-block h-container">
        <h3>Уверенность в покупке</h3>
        <div class="advantages">
            
            <div class="advantage-item__wrap">
                <div class="adtavtage-item">
                    <div class="advantage-item__img col-3 advantage_1">
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="m17.5 0-5 12.5V35H35l5-15v-7.5H25V5a5 5 0 0 0-5-5h-2.5ZM7.5 12.5H0V35h7.5V12.5Z" fill="#ffffff"/></svg>
                    </div>
                    <div class="advantage-item__content col-9">
                        <h4>
                            100% подлинность
                        </h4>
                        <div>
                            Мы — официальный дилер компании XD Design на территории России. Подделки встречаются, но не у нас. Будьте осторожны.
                        </div>
                    </div>
                </div>
            </div>
            <div class="advantage-item__wrap">
                <div class="adtavtage-item ">
                    <div class="advantage-item__img col-3 advantage_2">
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="m15 17.5 2.5-2.5-5.732-5.732 1.464-1.465a9.571 9.571 0 0 1 13.536 0l.214.215A10.303 10.303 0 0 1 30 15.303V17.5h5v-2.197c0-4.058-1.612-7.95-4.482-10.82l-.215-.215a14.571 14.571 0 0 0-20.606 0L8.232 5.732 2.5 0 0 2.5v15h15ZM26.768 32.197a9.571 9.571 0 0 1-13.536 0l-.214-.215A10.303 10.303 0 0 1 10 24.697V22.5H5v2.197c0 4.058 1.612 7.95 4.482 10.82l.215.215a14.571 14.571 0 0 0 20.606 0l1.465-1.464L37.5 40l2.5-2.5v-15H25L22.5 25l5.732 5.732-1.464 1.465Z" fill="#ffffff"/></svg>
                    </div>
                    <div class="advantage-item__content col-9">
                        <h4>
                            100% подлинность
                        </h4>
                        <div>
                            Мы — официальный дилер компании XD Design на территории России. Подделки встречаются, но не у нас. Будьте осторожны.
                        </div>
                    </div>
                </div>
            </div>
            <div class="advantage-item__wrap">
                <div class="adtavtage-item ">
                    <div class="advantage-item__img col-3 advantage_3">
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M27.5 5H0v27.5h5a5 5 0 0 0 10 0h10a5 5 0 0 0 10 0h5V20a7.5 7.5 0 0 0-7.5-7.5h-5V5Zm0 12.5v5H35v-5h-7.5Z" fill="#ffffff"/></svg>
                    </div>
                    <div class="advantage-item__content col-9">
                        <h4>
                            100% подлинность
                        </h4>
                        <div>
                            Мы — официальный дилер компании XD Design на территории России. Подделки встречаются, но не у нас. Будьте осторожны.
                        </div>
                    </div>
                </div>
            </div>

            <div class="advantage-item__wrap">
                <div class="adtavtage-item ">
                    <div class="advantage-item__img col-3 advantage_4">
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M40 5H0v7.5h40V5ZM40 17.5H0V35h40V17.5Z" fill="#ffffff"/></svg>
                    </div>
                    <div class="advantage-item__content col-9">
                        <h4>
                            100% подлинность
                        </h4>
                        <div>
                            Мы — официальный дилер компании XD Design на территории России. Подделки встречаются, но не у нас. Будьте осторожны.
                        </div>
                    </div>
                </div>
            </div>
            <div class="advantage-item__wrap">
                <div class="adtavtage-item ">
                    <div class="advantage-item__img col-3 advantage_5">
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3.107 23.107 20 40l16.893-16.893a10.607 10.607 0 0 0 3.107-7.5v-.476a10.13 10.13 0 0 0-18.042-6.329L20 11.25l-1.958-2.448A10.13 10.13 0 0 0 10.13 5C4.536 5 0 9.536 0 15.13v.477c0 2.813 1.117 5.51 3.107 7.5Z" fill="#ffffff"/></svg>
                    </div>
                    <div class="advantage-item__content col-9">
                        <h4>
                            100% подлинность
                        </h4>
                        <div>
                            Мы — официальный дилер компании XD Design на территории России. Подделки встречаются, но не у нас. Будьте осторожны.
                        </div>
                    </div>
                </div>
            </div>
            <div class="advantage-item__wrap">                
                <div class="adtavtage-item ">
                    <div class="advantage-item__img col-3 advantage_6">
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M22.5 0h-5l-1.376 5.506a14.909 14.909 0 0 0-3.63 1.505L7.625 4.09 4.09 7.625l2.92 4.867a14.908 14.908 0 0 0-1.504 3.63L0 17.5v5l5.506 1.376a14.909 14.909 0 0 0 1.505 3.63l-2.92 4.868 3.535 3.536 4.867-2.92a14.906 14.906 0 0 0 3.63 1.504L17.5 40h5l1.376-5.506a14.906 14.906 0 0 0 3.63-1.505l4.868 2.92 3.536-3.535-2.92-4.867a14.91 14.91 0 0 0 1.504-3.63L40 22.5v-5l-5.506-1.376a14.91 14.91 0 0 0-1.505-3.63l2.92-4.868-3.535-3.536-4.867 2.92a14.909 14.909 0 0 0-3.63-1.504L22.5 0ZM20 25a5 5 0 1 0 0-10 5 5 0 0 0 0 10Z" fill="#ffffff"/></svg>
                    </div>
                    <div class="advantage-item__content col-9">
                        <h4>
                            100% подлинность
                        </h4>
                        <div>
                            Мы — официальный дилер компании XD Design на территории России. Подделки встречаются, но не у нас. Будьте осторожны.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
