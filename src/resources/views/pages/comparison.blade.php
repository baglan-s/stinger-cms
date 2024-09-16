@extends('layouts.main')

@section('content')

<!-- Start comparison -->
<div class="simple-page">
    <div class="l-container">
      <div class="simple-page__inner">
        <div class="simple-page__header">
          <h1 class="simple-page__title page-title">
            Сравнения
            <span class="page-title__number">2</span>
          </h1>
          <div class="simple-page__active">
            <button class="simple-page__filter">
              <img
                src="{{ asset('assets/images/filter-mobile.svg') }}"
                alt="filter mobile"
              />
              Фильтр
            </button>
            <button class="simple-page__clear outline">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="svg-icon svg-icon--close svg-icon--24"
              >
                <path
                  d="M4.3 18.3a1 1 0 1 0 1.4 1.4l6.3-6.29 6.3 6.3a1 1 0 0 0 1.4-1.42L13.42 12l6.3-6.3a1 1 0 0 0-1.42-1.4L12 10.58l-6.3-6.3a1 1 0 0 0-1.4 1.42L10.58 12l-6.3 6.3Z"
                />
              </svg>

              Очистить&nbsp;список
            </button>
          </div>
        </div>
        <button class="simple-page__clear outline desc-hidden">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="svg-icon svg-icon--close svg-icon--24"
          >
            <path
              d="M4.3 18.3a1 1 0 1 0 1.4 1.4l6.3-6.29 6.3 6.3a1 1 0 0 0 1.4-1.42L13.42 12l6.3-6.3a1 1 0 0 0-1.42-1.4L12 10.58l-6.3-6.3a1 1 0 0 0-1.4 1.42L10.58 12l-6.3 6.3Z"
            />
          </svg>

          Очистить&nbsp;список
        </button>
        <div class="simple-page__wrapper">
          <div class="simple-page__sidebar mobile-filter">
            <div class="simple-page__accordion">
              <div class="accordion" id="accordionPanelsStayOpenExample">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button
                      class="accordion-button"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#panelsStayOpen-collapseOne"
                      aria-expanded="true"
                      aria-controls="panelsStayOpen-collapseOne"
                    >
                      Характеристики
                    </button>
                  </h2>
                  <div
                    id="panelsStayOpen-collapseOne"
                    class="accordion-collapse collapse show"
                  >
                    <div class="accordion-body">
                      <div class="accordion-body_radioBtnContainer">
                        <div class="form-check">
                          <input
                            class="form-check__input"
                            type="radio"
                            name="name"
                            id="characters"
                            value="123"
                          />
                          <label for="characters"> Все характеристики </label>
                        </div>
                        <div class="form-check">
                          <input
                            class="form-check__input"
                            type="radio"
                            name="name"
                            id="asd"
                            value="123"
                          />
                          <label for="asd">Только различия</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion" id="accordionPanelsStayOpenExample">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button
                      class="accordion-button"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#panelsStayOpen-collapseTwo"
                      aria-expanded="true"
                      aria-controls="panelsStayOpen-collapseTwo"
                    >
                      Категория
                    </button>
                  </h2>
                  <div
                    id="panelsStayOpen-collapseTwo"
                    class="accordion-collapse collapse show"
                  >
                    <div class="accordion-body">
                      <div class="accordion-body_radioBtnContainer">
                        <div class="form-check">
                          <input
                            class="form-check__input"
                            type="radio"
                            name="name2"
                            id="category"
                            value="123"
                          />
                          <label for="category">Электросамокаты</label>
                        </div>
                        <div class="form-check">
                          <input
                            class="form-check__input"
                            type="radio"
                            name="name2"
                            id="category2"
                            value="123"
                          />
                          <label for="category2">Духовые шкафы</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="mobile-filter__close outline">
              Закрыть
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="svg-icon svg-icon--close svg-icon--24"
              >
                <path
                  d="M4.3 18.3a1 1 0 1 0 1.4 1.4l6.3-6.29 6.3 6.3a1 1 0 0 0 1.4-1.42L13.42 12l6.3-6.3a1 1 0 0 0-1.42-1.4L12 10.58l-6.3-6.3a1 1 0 0 0-1.4 1.42L10.58 12l-6.3 6.3Z"
                />
              </svg>
            </div>
            <div class="simple-page__clear outline accardion-clear">
              Очистить
              <span class="mobile-hidden">&nbsp;список</span>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="svg-icon svg-icon--close svg-icon--24"
              >
                <path
                  d="M4.3 18.3a1 1 0 1 0 1.4 1.4l6.3-6.29 6.3 6.3a1 1 0 0 0 1.4-1.42L13.42 12l6.3-6.3a1 1 0 0 0-1.42-1.4L12 10.58l-6.3-6.3a1 1 0 0 0-1.4 1.42L10.58 12l-6.3 6.3Z"
                />
              </svg>
            </div>
          </div>
          <div class="simple-page__content">
            <div class="simple-page__conteiner">
              <div class="swiper-container" id="carts-carousel">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="inner-product-card">
                      <div class="inner-product-card__head">
                        <div class="inner-product-card__discount">
                          <div class="inner-product-discount this-left">
                            <div
                              class="inner-product-discount__counting this-left"
                            >
                              10%
                            </div>
                            <img
                              src="{{ asset('assets/images/products/discount.png') }}"
                              alt=""
                            />
                          </div>
                        </div>
                        <div class="inner-product-card__favorite">
                          <button
                            class="inner-product-card-favorite inner-outline"
                          >
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              viewBox="0 0 32 32"
                              class="svg-icons"
                            >
                              <path
                                d="M2.485 17.485 16 31l13.515-13.515a8.485 8.485 0 0 0 2.485-6v-.38a8.105 8.105 0 0 0-14.433-5.063L16 8l-1.567-1.958A8.105 8.105 0 0 0 0 11.105v.38c0 2.25.894 4.409 2.485 6Z"
                              />
                            </svg>
                          </button>
                        </div>
                        <div class="inner-product-card__image">
                          <a
                            href="#"
                            class="inner-product-card__image-url"
                            tabindex="-1"
                          >
                            <img
                              src="{{ asset('assets/images/products/0w3379icz37hiqssiep4r8l366aph63l.jpg') }}"
                              alt=""
                              class="inner-product-card__image-product"
                              lazy="loaded"
                            />
                            <!-- <img src="assets/images/products/itvom43zllix3dky899fozzccxfcu1hl.jpg" alt="" class="inner-product-card__image-hover"> -->
                            <div class="inner-product-card__preload">
                              <span class="inner-main-preload">
                                <span
                                  class="inner-main-preload__boxes"
                                ></span>
                              </span>
                            </div>
                          </a>
                        </div>
                      </div>
                      <div class="inner-product-card__body">
                        <div class="inner-product-card__variations">
                          <div class="inner-product-card-variations">
                            <button
                              class="inner-product-card-variations__item out-line this-active"
                              style="background-color: rbg(0, 0, 0)"
                            >
                              <svg
                                viewBox="0 0 14 14"
                                xmlns="http://www.w3.org/2000/svg"
                              >
                                <path
                                  d="m9.79 6.047-2.856 6.55V7.95H4.19l2.855-6.551v4.649h2.745Z"
                                  fill="#ffffff"
                                ></path>
                              </svg>
                            </button>
                            <button
                              class="inner-product-card-variations__item out-line"
                              style="background-color: rgb(157, 209, 159)"
                            >
                              <svg
                                viewBox="0 0 14 14"
                                xmlns="http://www.w3.org/2000/svg"
                              >
                                <path
                                  d="m9.79 6.047-2.856 6.55V7.95H4.19l2.855-6.551v4.649h2.745Z"
                                  fill="#778ba5"
                                ></path>
                              </svg>
                            </button>
                            <button
                              class="inner-product-card-variations__item out-line"
                              style="background-color: rgb(255, 147, 179)"
                            >
                              <svg
                                viewBox="0 0 14 14"
                                xmlns="http://www.w3.org/2000/svg"
                              >
                                <path
                                  d="m9.79 6.047-2.856 6.55V7.95H4.19l2.855-6.551v4.649h2.745Z"
                                  fill="#778ba5"
                                ></path>
                              </svg>
                            </button>
                          </div>
                          <a href="#" class="inner-product-card__title"
                            >Термос для еды MIKU 440 мл</a
                          >
                        </div>
                      </div>
                      <div class="inner-product-card__bottom">
                        <a href="#" class="inner-product-card__cost">
                          <div class="inner-product-card-cost">
                            <div class="inner-product-card-cost__old">
                              2 290 тг
                            </div>
                            <div
                              class="inner-product-card-cost__current this-discount"
                            >
                              2 061 тг
                            </div>
                          </div>
                        </a>
                        <div class="inner-product-card__action">
                          <div class="product-card-action">
                            <button class="inner-product-card-action__btn">
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 32 32"
                                class="inner-product-card-action__icon svg-icons"
                              >
                                <path
                                  d="M0 2v4h4.306l1.66 9.967-1.927 9.64c-.027.134-.04.268-.039.401.003.682 0 1.294 0 1.992a4 4 0 0 0 8 0h8a4 4 0 1 0 4-4H8.44l.8-4H30V2H0Z"
                                />
                              </svg>
                              <span
                                class="inner-main-preload this-small"
                                style="display: none"
                              >
                                <span
                                  class="inner-main-preload__boxes"
                                ></span>
                              </span>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="inner-product-card">
                      <div class="inner-product-card__head">
                        <div class="inner-product-card__discount">
                          <div class="inner-product-discount this-left">
                            <div
                              class="inner-product-discount__counting this-left"
                            >
                              10%
                            </div>
                            <img
                              src="{{ asset('assets/images/products/discount.png') }}"
                              alt=""
                            />
                          </div>
                        </div>
                        <div class="inner-product-card__favorite">
                          <button
                            class="inner-product-card-favorite inner-outline"
                          >
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              viewBox="0 0 32 32"
                              class="svg-icons"
                            >
                              <path
                                d="M2.485 17.485 16 31l13.515-13.515a8.485 8.485 0 0 0 2.485-6v-.38a8.105 8.105 0 0 0-14.433-5.063L16 8l-1.567-1.958A8.105 8.105 0 0 0 0 11.105v.38c0 2.25.894 4.409 2.485 6Z"
                              />
                            </svg>
                          </button>
                        </div>
                        <div class="inner-product-card__image">
                          <a
                            href="#"
                            class="inner-product-card__image-url"
                            tabindex="-1"
                          >
                            <img
                              src="{{ asset('assets/images/products/0w3379icz37hiqssiep4r8l366aph63l.jpg') }}"
                              alt=""
                              class="inner-product-card__image-product"
                              lazy="loaded"
                            />
                            <!-- <img src="assets/images/products/itvom43zllix3dky899fozzccxfcu1hl.jpg" alt="" class="inner-product-card__image-hover"> -->
                            <div class="inner-product-card__preload">
                              <span class="inner-main-preload">
                                <span
                                  class="inner-main-preload__boxes"
                                ></span>
                              </span>
                            </div>
                          </a>
                        </div>
                      </div>
                      <div class="inner-product-card__body">
                        <div class="inner-product-card__variations">
                          <div class="inner-product-card-variations">
                            <button
                              class="inner-product-card-variations__item out-line this-active"
                              style="background-color: rbg(0, 0, 0)"
                            >
                              <svg
                                viewBox="0 0 14 14"
                                xmlns="http://www.w3.org/2000/svg"
                              >
                                <path
                                  d="m9.79 6.047-2.856 6.55V7.95H4.19l2.855-6.551v4.649h2.745Z"
                                  fill="#ffffff"
                                ></path>
                              </svg>
                            </button>
                            <button
                              class="inner-product-card-variations__item out-line"
                              style="background-color: rgb(157, 209, 159)"
                            >
                              <svg
                                viewBox="0 0 14 14"
                                xmlns="http://www.w3.org/2000/svg"
                              >
                                <path
                                  d="m9.79 6.047-2.856 6.55V7.95H4.19l2.855-6.551v4.649h2.745Z"
                                  fill="#778ba5"
                                ></path>
                              </svg>
                            </button>
                            <button
                              class="inner-product-card-variations__item out-line"
                              style="background-color: rgb(255, 147, 179)"
                            >
                              <svg
                                viewBox="0 0 14 14"
                                xmlns="http://www.w3.org/2000/svg"
                              >
                                <path
                                  d="m9.79 6.047-2.856 6.55V7.95H4.19l2.855-6.551v4.649h2.745Z"
                                  fill="#778ba5"
                                ></path>
                              </svg>
                            </button>
                          </div>
                          <a href="#" class="inner-product-card__title"
                            >Термос для еды MIKU 440 мл</a
                          >
                        </div>
                      </div>
                      <div class="inner-product-card__bottom">
                        <a href="#" class="inner-product-card__cost">
                          <div class="inner-product-card-cost">
                            <div class="inner-product-card-cost__old">
                              2 290 тг
                            </div>
                            <div
                              class="inner-product-card-cost__current this-discount"
                            >
                              2 061 тг
                            </div>
                          </div>
                        </a>
                        <div class="inner-product-card__action">
                          <div class="product-card-action">
                            <button class="inner-product-card-action__btn">
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 32 32"
                                class="inner-product-card-action__icon svg-icons"
                              >
                                <path
                                  d="M0 2v4h4.306l1.66 9.967-1.927 9.64c-.027.134-.04.268-.039.401.003.682 0 1.294 0 1.992a4 4 0 0 0 8 0h8a4 4 0 1 0 4-4H8.44l.8-4H30V2H0Z"
                                />
                              </svg>
                              <span
                                class="inner-main-preload this-small"
                                style="display: none"
                              >
                                <span
                                  class="inner-main-preload__boxes"
                                ></span>
                              </span>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="inner-product-card">
                      <div class="inner-product-card__head">
                        <div class="inner-product-card__discount">
                          <div class="inner-product-discount this-left">
                            <div
                              class="inner-product-discount__counting this-left"
                            >
                              10%
                            </div>
                            <img
                              src="{{ asset('assets/images/products/discount.png') }}"
                              alt=""
                            />
                          </div>
                        </div>
                        <div class="inner-product-card__favorite">
                          <button
                            class="inner-product-card-favorite inner-outline"
                          >
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              viewBox="0 0 32 32"
                              class="svg-icons"
                            >
                              <path
                                d="M2.485 17.485 16 31l13.515-13.515a8.485 8.485 0 0 0 2.485-6v-.38a8.105 8.105 0 0 0-14.433-5.063L16 8l-1.567-1.958A8.105 8.105 0 0 0 0 11.105v.38c0 2.25.894 4.409 2.485 6Z"
                              />
                            </svg>
                          </button>
                        </div>
                        <div class="inner-product-card__image">
                          <a
                            href="#"
                            class="inner-product-card__image-url"
                            tabindex="-1"
                          >
                            <img
                              src="{{ asset('assets/images/products/0w3379icz37hiqssiep4r8l366aph63l.jpg') }}"
                              alt=""
                              class="inner-product-card__image-product"
                              lazy="loaded"
                            />
                            <!-- <img src="assets/images/products/itvom43zllix3dky899fozzccxfcu1hl.jpg" alt="" class="inner-product-card__image-hover"> -->
                            <div class="inner-product-card__preload">
                              <span class="inner-main-preload">
                                <span
                                  class="inner-main-preload__boxes"
                                ></span>
                              </span>
                            </div>
                          </a>
                        </div>
                      </div>
                      <div class="inner-product-card__body">
                        <div class="inner-product-card__variations">
                          <div class="inner-product-card-variations">
                            <button
                              class="inner-product-card-variations__item out-line this-active"
                              style="background-color: rbg(0, 0, 0)"
                            >
                              <svg
                                viewBox="0 0 14 14"
                                xmlns="http://www.w3.org/2000/svg"
                              >
                                <path
                                  d="m9.79 6.047-2.856 6.55V7.95H4.19l2.855-6.551v4.649h2.745Z"
                                  fill="#ffffff"
                                ></path>
                              </svg>
                            </button>
                            <button
                              class="inner-product-card-variations__item out-line"
                              style="background-color: rgb(157, 209, 159)"
                            >
                              <svg
                                viewBox="0 0 14 14"
                                xmlns="http://www.w3.org/2000/svg"
                              >
                                <path
                                  d="m9.79 6.047-2.856 6.55V7.95H4.19l2.855-6.551v4.649h2.745Z"
                                  fill="#778ba5"
                                ></path>
                              </svg>
                            </button>
                            <button
                              class="inner-product-card-variations__item out-line"
                              style="background-color: rgb(255, 147, 179)"
                            >
                              <svg
                                viewBox="0 0 14 14"
                                xmlns="http://www.w3.org/2000/svg"
                              >
                                <path
                                  d="m9.79 6.047-2.856 6.55V7.95H4.19l2.855-6.551v4.649h2.745Z"
                                  fill="#778ba5"
                                ></path>
                              </svg>
                            </button>
                          </div>
                          <a href="#" class="inner-product-card__title"
                            >Термос для еды MIKU 440 мл</a
                          >
                        </div>
                      </div>
                      <div class="inner-product-card__bottom">
                        <a href="#" class="inner-product-card__cost">
                          <div class="inner-product-card-cost">
                            <div class="inner-product-card-cost__old">
                              2 290 тг
                            </div>
                            <div
                              class="inner-product-card-cost__current this-discount"
                            >
                              2 061 тг
                            </div>
                          </div>
                        </a>
                        <div class="inner-product-card__action">
                          <div class="product-card-action">
                            <button class="inner-product-card-action__btn">
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 32 32"
                                class="inner-product-card-action__icon svg-icons"
                              >
                                <path
                                  d="M0 2v4h4.306l1.66 9.967-1.927 9.64c-.027.134-.04.268-.039.401.003.682 0 1.294 0 1.992a4 4 0 0 0 8 0h8a4 4 0 1 0 4-4H8.44l.8-4H30V2H0Z"
                                />
                              </svg>
                              <span
                                class="inner-main-preload this-small"
                                style="display: none"
                              >
                                <span
                                  class="inner-main-preload__boxes"
                                ></span>
                              </span>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="inner-product-card">
                      <div class="inner-product-card__head">
                        <div class="inner-product-card__discount">
                          <div class="inner-product-discount this-left">
                            <div
                              class="inner-product-discount__counting this-left"
                            >
                              10%
                            </div>
                            <img
                              src="{{ asset('assets/images/products/discount.png') }}"
                              alt=""
                            />
                          </div>
                        </div>
                        <div class="inner-product-card__favorite">
                          <button
                            class="inner-product-card-favorite inner-outline"
                          >
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              viewBox="0 0 32 32"
                              class="svg-icons"
                            >
                              <path
                                d="M2.485 17.485 16 31l13.515-13.515a8.485 8.485 0 0 0 2.485-6v-.38a8.105 8.105 0 0 0-14.433-5.063L16 8l-1.567-1.958A8.105 8.105 0 0 0 0 11.105v.38c0 2.25.894 4.409 2.485 6Z"
                              />
                            </svg>
                          </button>
                        </div>
                        <div class="inner-product-card__image">
                          <a
                            href="#"
                            class="inner-product-card__image-url"
                            tabindex="-1"
                          >
                            <img
                              src="{{ asset('assets/images/products/0w3379icz37hiqssiep4r8l366aph63l.jpg') }}"
                              alt=""
                              class="inner-product-card__image-product"
                              lazy="loaded"
                            />
                            <!-- <img src="assets/images/products/itvom43zllix3dky899fozzccxfcu1hl.jpg" alt="" class="inner-product-card__image-hover"> -->
                            <div class="inner-product-card__preload">
                              <span class="inner-main-preload">
                                <span
                                  class="inner-main-preload__boxes"
                                ></span>
                              </span>
                            </div>
                          </a>
                        </div>
                      </div>
                      <div class="inner-product-card__body">
                        <div class="inner-product-card__variations">
                          <div class="inner-product-card-variations">
                            <button
                              class="inner-product-card-variations__item out-line this-active"
                              style="background-color: rbg(0, 0, 0)"
                            >
                              <svg
                                viewBox="0 0 14 14"
                                xmlns="http://www.w3.org/2000/svg"
                              >
                                <path
                                  d="m9.79 6.047-2.856 6.55V7.95H4.19l2.855-6.551v4.649h2.745Z"
                                  fill="#ffffff"
                                ></path>
                              </svg>
                            </button>
                            <button
                              class="inner-product-card-variations__item out-line"
                              style="background-color: rgb(157, 209, 159)"
                            >
                              <svg
                                viewBox="0 0 14 14"
                                xmlns="http://www.w3.org/2000/svg"
                              >
                                <path
                                  d="m9.79 6.047-2.856 6.55V7.95H4.19l2.855-6.551v4.649h2.745Z"
                                  fill="#778ba5"
                                ></path>
                              </svg>
                            </button>
                            <button
                              class="inner-product-card-variations__item out-line"
                              style="background-color: rgb(255, 147, 179)"
                            >
                              <svg
                                viewBox="0 0 14 14"
                                xmlns="http://www.w3.org/2000/svg"
                              >
                                <path
                                  d="m9.79 6.047-2.856 6.55V7.95H4.19l2.855-6.551v4.649h2.745Z"
                                  fill="#778ba5"
                                ></path>
                              </svg>
                            </button>
                          </div>
                          <a href="#" class="inner-product-card__title"
                            >Термос для еды MIKU 440 мл</a
                          >
                        </div>
                      </div>
                      <div class="inner-product-card__bottom">
                        <a href="#" class="inner-product-card__cost">
                          <div class="inner-product-card-cost">
                            <div class="inner-product-card-cost__old">
                              2 290 тг
                            </div>
                            <div
                              class="inner-product-card-cost__current this-discount"
                            >
                              2 061 тг
                            </div>
                          </div>
                        </a>
                        <div class="inner-product-card__action">
                          <div class="product-card-action">
                            <button class="inner-product-card-action__btn">
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 32 32"
                                class="inner-product-card-action__icon svg-icons"
                              >
                                <path
                                  d="M0 2v4h4.306l1.66 9.967-1.927 9.64c-.027.134-.04.268-.039.401.003.682 0 1.294 0 1.992a4 4 0 0 0 8 0h8a4 4 0 1 0 4-4H8.44l.8-4H30V2H0Z"
                                />
                              </svg>
                              <span
                                class="inner-main-preload this-small"
                                style="display: none"
                              >
                                <span
                                  class="inner-main-preload__boxes"
                                ></span>
                              </span>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="inner-product-card">
                      <div class="inner-product-card__head">
                        <div class="inner-product-card__discount">
                          <div class="inner-product-discount this-left">
                            <div
                              class="inner-product-discount__counting this-left"
                            >
                              10%
                            </div>
                            <img
                              src="{{ asset('assets/images/products/discount.png') }}"
                              alt=""
                            />
                          </div>
                        </div>
                        <div class="inner-product-card__favorite">
                          <button
                            class="inner-product-card-favorite inner-outline"
                          >
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              viewBox="0 0 32 32"
                              class="svg-icons"
                            >
                              <path
                                d="M2.485 17.485 16 31l13.515-13.515a8.485 8.485 0 0 0 2.485-6v-.38a8.105 8.105 0 0 0-14.433-5.063L16 8l-1.567-1.958A8.105 8.105 0 0 0 0 11.105v.38c0 2.25.894 4.409 2.485 6Z"
                              />
                            </svg>
                          </button>
                        </div>
                        <div class="inner-product-card__image">
                          <a
                            href="#"
                            class="inner-product-card__image-url"
                            tabindex="-1"
                          >
                            <img
                              src="{{ asset('assets/images/products/0w3379icz37hiqssiep4r8l366aph63l.jpg') }}"
                              alt=""
                              class="inner-product-card__image-product"
                              lazy="loaded"
                            />
                            <!-- <img src="assets/images/products/itvom43zllix3dky899fozzccxfcu1hl.jpg" alt="" class="inner-product-card__image-hover"> -->
                            <div class="inner-product-card__preload">
                              <span class="inner-main-preload">
                                <span
                                  class="inner-main-preload__boxes"
                                ></span>
                              </span>
                            </div>
                          </a>
                        </div>
                      </div>
                      <div class="inner-product-card__body">
                        <div class="inner-product-card__variations">
                          <div class="inner-product-card-variations">
                            <button
                              class="inner-product-card-variations__item out-line this-active"
                              style="background-color: rbg(0, 0, 0)"
                            >
                              <svg
                                viewBox="0 0 14 14"
                                xmlns="http://www.w3.org/2000/svg"
                              >
                                <path
                                  d="m9.79 6.047-2.856 6.55V7.95H4.19l2.855-6.551v4.649h2.745Z"
                                  fill="#ffffff"
                                ></path>
                              </svg>
                            </button>
                            <button
                              class="inner-product-card-variations__item out-line"
                              style="background-color: rgb(157, 209, 159)"
                            >
                              <svg
                                viewBox="0 0 14 14"
                                xmlns="http://www.w3.org/2000/svg"
                              >
                                <path
                                  d="m9.79 6.047-2.856 6.55V7.95H4.19l2.855-6.551v4.649h2.745Z"
                                  fill="#778ba5"
                                ></path>
                              </svg>
                            </button>
                            <button
                              class="inner-product-card-variations__item out-line"
                              style="background-color: rgb(255, 147, 179)"
                            >
                              <svg
                                viewBox="0 0 14 14"
                                xmlns="http://www.w3.org/2000/svg"
                              >
                                <path
                                  d="m9.79 6.047-2.856 6.55V7.95H4.19l2.855-6.551v4.649h2.745Z"
                                  fill="#778ba5"
                                ></path>
                              </svg>
                            </button>
                          </div>
                          <a href="#" class="inner-product-card__title"
                            >Термос для еды MIKU 440 мл</a
                          >
                        </div>
                      </div>
                      <div class="inner-product-card__bottom">
                        <a href="#" class="inner-product-card__cost">
                          <div class="inner-product-card-cost">
                            <div class="inner-product-card-cost__old">
                              2 290 тг
                            </div>
                            <div
                              class="inner-product-card-cost__current this-discount"
                            >
                              2 061 тг
                            </div>
                          </div>
                        </a>
                        <div class="inner-product-card__action">
                          <div class="product-card-action">
                            <button class="inner-product-card-action__btn">
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 32 32"
                                class="inner-product-card-action__icon svg-icons"
                              >
                                <path
                                  d="M0 2v4h4.306l1.66 9.967-1.927 9.64c-.027.134-.04.268-.039.401.003.682 0 1.294 0 1.992a4 4 0 0 0 8 0h8a4 4 0 1 0 4-4H8.44l.8-4H30V2H0Z"
                                />
                              </svg>
                              <span
                                class="inner-main-preload this-small"
                                style="display: none"
                              >
                                <span
                                  class="inner-main-preload__boxes"
                                ></span>
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
            <div class="comparePrev control-btns"><</div>
            <div class="compareNext control-btns">></div>
          </div>
        </div>
      </div>
      <div class="simple-page__characters">
        <div
          class="accordion accordion-character"
          id="accordionPanelsStayOpenExample"
        >
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button
                class="accordion-button"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#panelsStayOpen-collapse3"
                aria-expanded="true"
                aria-controls="panelsStayOpen-collapse3"
              >
                Основные характеристики
              </button>
            </h2>
            <div
              id="panelsStayOpen-collapse3"
              class="accordion-collapse collapse show"
            >
              <div class="accordion-body">
                <div class="characters">
                  <div class="characters__title">Емкость батареи</div>
                  <div class="characters__slideContainer">
                    <div class="characters__slide" id="characters__slide">
                      <div class="swiper-wrapper">
                        <div class="swiper-slide">-</div>
                        <div class="swiper-slide">-</div>
                        <div class="swiper-slide">-</div>
                        <div class="swiper-slide">-</div>
                        <div class="swiper-slide">-</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div
              id="panelsStayOpen-collapse3"
              class="accordion-collapse collapse show"
            >
              <div class="accordion-body">
                <div class="characters">
                  <div class="characters__title">
                    Максимальный вес нагрузки
                  </div>
                  <div class="characters__slideContainer">
                    <div class="characters__slide" id="characters__slide">
                      <div class="swiper-wrapper">
                        <div class="swiper-slide">100кг</div>
                        <div class="swiper-slide">100кг</div>
                        <div class="swiper-slide">100кг</div>
                        <div class="swiper-slide">100кг</div>
                        <div class="swiper-slide">100кг</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button
                class="accordion-button"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#panelsStayOpen-collapse4"
                aria-expanded="true"
                aria-controls="panelsStayOpen-collapse4"
              >
                Габариты, цвет и вес
              </button>
            </h2>
            <div
              id="panelsStayOpen-collapse4"
              class="accordion-collapse collapse show"
            >
              <div class="accordion-body">
                <div class="characters">
                  <div class="characters__title">Цвет</div>
                  <div class="characters__slideContainer">
                    <div class="characters__slide" id="characters__slide">
                      <div class="swiper-wrapper">
                        <div class="swiper-slide">Черный</div>
                        <div class="swiper-slide">Черный</div>
                        <div class="swiper-slide">Черный</div>
                        <div class="swiper-slide">Черный</div>
                        <div class="swiper-slide">Черный</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End comparison -->

  <script>
    var cartsSwiper = new Swiper("#carts-carousel", {
      slidesPerView: 4,
      spaceBetween: 30,
      allowTouchMove: false,
      breakpoints: {
        320: {
          slidesPerView: 1,
          spaceBetween: 10,
        },
        480: {
          slidesPerView: 2,
          spaceBetween: 15,
        },
        768: {
          slidesPerView: 3,
          spaceBetween: 25,
        },
        1180: {
          slidesPerView: 3,
          spaceBetween: 35,
        },
      },
      navigation: {
        nextEl: ".compareNext",
        prevEl: ".comparePrev",
      },
    });

    var characterSwiper = new Swiper("#characters__slide", {
      slidesPerView: 4,
      spaceBetween: 30,
      allowTouchMove: false,
      breakpoints: {
        320: {
          slidesPerView: 1,
          spaceBetween: 10,
        },
        480: {
          slidesPerView: 2,
          spaceBetween: 15,
        },
        768: {
          slidesPerView: 3,
          spaceBetween: 40,
        },
      },
      navigation: {
        nextEl: ".compareNext",
        prevEl: ".comparePrev",
      },
    });

    document
      .querySelector(".simple-page__filter")
      .addEventListener("click", openFilter);

    document
      .querySelector(".mobile-filter__close")
      .addEventListener("click", closeFilter);

    function openFilter() {
      const filter = document.querySelector(".mobile-filter");
      filter.classList.add("opened-filter");
      document.body.classList.add("filterModalBg");
    }

    function closeFilter() {
      const filter = document.querySelector(".mobile-filter");
      filter.classList.remove("opened-filter");
      document.body.classList.remove("filterModalBg");
    }
  </script>

@endsection