<div>
    <div class="product-wrap h-container">
        <main class="product-content__wrap">
            <div class="product-content">
                <div class="product-gallery__wrap">
                    @if ($product->parent_id)
                        <span class="label-lowered">Уценка</span>
                    @endif

                    <div class="product__gallery">
                        <div class="product-gallery__container">
                        <!-- Swiper -->

                        <div class="swiper-container gallery-thumbs">
                            <div class="swiper-wrapper swiper-thumbs">
                                @if ($product->images->count() > 0)
                                    @foreach ($product->images as $image)
                                        <div class="swiper-slide">
                                            <img src="{{ asset('storage/' . $image->path) }}" alt="">
                                        </div>
                                    @endforeach
                                @else
                                    <div class="swiper-slide">
                                        <img src="{{ asset($product->getDefaultImage()) }}" alt="">
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="swiper-container gallery-top">
                            <div class="swiper-wrapper">
                                @if ($product->images->count() > 0)
                                    @foreach ($product->images as $image)
                                        <div class="swiper-slide">
                                            <img src="{{ asset('storage/' . $image->path) }}" alt="">
                                        </div>
                                    @endforeach
                                @else
                                    <div class="swiper-slide">
                                        <img src="{{ asset($product->getDefaultImage()) }}" alt="">
                                    </div>
                                @endif
                            </div>
                        </div>
                        </div>
                    </div>
                </div>

               

                <div class="product-body__content">
                    @if ($product->files->count() > 0)
                        <div class="product-instruction-wrap">
                            <h3>Инструкции и сертификаты</h3>
                            <div class="product-instruction">
                                @foreach ($product->files as $file)
                                    <a href="{{ route('catalog.products.file', ['productId' => $product->id, 'fileId' => $file->id]) }}" target="_blank">
                                        <div class="instruction-item">
                                            <div class="instruction-item-img-wrap">
                                                <span>{{ mb_strtoupper($file->mime_type) }}</span>
                                                {{ $file->size }}MB
                                            </div>
                                            <div class="instruction-item-description">
                                                {{ $file->translation()?->name }}
                                            </div>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    <div class="product-tabs mt-4">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            @if ($product->translation()?->description)
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link product-tab__item" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="false">Описание</button>
                                </li>
                            @endif
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active product-tab__item" id="specification-tab" data-bs-toggle="tab" data-bs-target="#specification" type="button" role="tab" aria-controls="specification" aria-selected="true">Характеристики</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link product-tab__item" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews" type="button" role="tab" aria-controls="reviews" aria-selected="false">Отзывы</button>
                            </li>
                            @if ($product->parent_id && $product->translation()?->cons)
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link product-tab__item" id="cons-tab" data-bs-toggle="tab" data-bs-target="#cons" type="button" role="tab" aria-controls="cons" aria-selected="false">Минусы</button>
                                </li>
                            @endif
                        </ul>

                        <div class="tab-content" id="myTabContent">
                            @if ($product->translation()?->description)
                                <div class="tab-pane fade " id="description" role="tabpanel" aria-labelledby="description-tab">
                                    <div class="product-content__description mt-2">
                                        <h3>Что это?</h3>
                                        {!! html_entity_decode($product->translation()?->description) !!}
                                        
                                    </div>
                                </div>
                            @endif

                            <div class="tab-pane fade show active" id="specification" role="tabpanel" aria-labelledby="specification-tab">
                                <div class="product-content__property mt-2">
                                    <h3>Характеристики</h3>
                                    <div class="product-content__text">
                                        <ul class="product-property__list">
                                            @if ($product->brand)
                                                <li class="property__item">
                                                    <span class="property-item__title">Бренд</span>
                                                    <span class="property-item__content">{{ $product->brand->translation()?->name }}</span>
                                                </li>
                                            @endif
                                            @if (isset($product->specifications) && $product->specifications->count() > 0)
                                                @foreach ($product->specifications as $specification)
                                                    <li class="property__item">
                                                        <span class="property-item__title">{{ $specification->translation()?->name }}</span>
                                                        @if ($specification->multiple)
                                                            <span class="property-item__content">{{ $specification->productValuesString() }}</span>
                                                        @else
                                                            <span class="property-item__content">{{ $specification->productValues?->first()?->translation()?->name }}</span>
                                                        @endif
                                                    </li>
                                                @endforeach
                                            @endif
                                            
                                        </ul>
                                        {{-- <h3 class="mt-4">Что в коробке</h3>
                                        <ul class="product-property-second__list">
                                            <li class="product-property-second__item">Сборная модель из дерева</li>
                                            <li class="product-property-second__item">Документация</li>
                                        </ul> --}}
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

                            @if ($product->parent_id && $product->translation()?->cons)

                                <div class="tab-pane fade " id="cons" role="tabpanel" aria-labelledby="cons-tab">
                                    <div class="product-content__description mt-2">
                                        <div class="product-content__features">
                                            <div class="product-feature__title">
                                                Минусы товара
                                            </div> 
                                            <ul class="product-feature__list">
                                                @foreach (explode(',', $product->translation()?->cons) as $con)
                                                    <li class="feature__item">{{ $con }}</li>
                                                @endforeach
                                            </ul>   
                    
                                        </div>
                                    </div>
                                </div>

                            @endif
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
                                @if ($product->stocks->sum('available') > 0)
                                    <div class="product-availbale"><!--IF you need change color^ need add class "no-available"-->
                                        <span>Товар в наличии</span>  
                                    </div>
                                @else
                                    <div class="product-availbale unavailable"><!--IF you need change color^ need add class "no-available"-->
                                        <span>Нет в наличии</span>  
                                    </div>
                                @endif
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
                            </div>
                        </div>

                        <div class="product-delivery__mobile delivery-address__wrap">
                            @if ($product->parent_id)
                                <a class="parent-product-link" href="{{ route('catalog.products.show', $product->parent->translation()?->slug) }}">Посмотреть основной товар</a>
                            @elseif ($product->children->count() > 0)
                                <a class="parent-product-link" href="{{ route('catalog.products.index', ['parent_id' => $product->id]) }}">Купить товар дешевле</a>
                            @endif

                            @if ($product->stocks->sum('available') > 0)
                                @php($cityGroups = $product->stocksGroupedByCity())
                                @foreach ($cityGroups as $key => $group)
                                    <p class="city-group-title">{{ $key }}</p>
                                    <ul class="city-group-stocks">
                                        @foreach ($group as $stock)
                                            <li>
                                                <b>{{ $stock->store->translation()?->name }}:</b>
                                                @if ($stock->available > $setting->product_min_amount)
                                                    <span>Более {{ $setting->product_min_amount }} товаров</span>
                                                @else
                                                    <span>Менее {{ $setting->product_min_amount }} товаров</span>
                                                @endif
                                            </li>
                                        @endforeach
                                    </ul>
                                @endforeach
                            @endif
                        </div>
                    </div>




                    
                </div>
            </div>
        </main>
        <aside class="product-side">
            
            <div class="product-side__top">
                
                <div class="product-side__article-wrap">
                    <div class="product-article">
                        Артикул: {{ $product->getArticle() }}
                    </div>
                    @if ($product->stocks->sum('available') > 0)
                        <div class="product-availbale"><!--IF you need change color^ need add class "no-available"-->
                            <span>Товар в наличии</span>  
                        </div>
                    @else
                        <div class="product-availbale unavailable"><!--IF you need change color^ need add class "no-available"-->
                            <span>Нет в наличии</span>  
                        </div>
                    @endif
                    
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
                    @if($product->id_1c && $currentCity->kaspi_index)
                    <div class="ks-widget"
                        data-template="button"
                        data-merchant-sku="{{ $product->id_1c }}"
                        data-merchant-code="{{ $kaspiMerchantCode }}"
                        data-city="{{ $currentCity->kaspi_index }}"
                        data-style="bigBlue"
                    ></div>
                    @endif
                </div>

            </div>

            <div class="product-side__center">
                @if ($product->parent_id)
                    <div class="delivery-address__wrap">
                        <a class="parent-product-link" href="{{ route('catalog.products.show', $product->parent->translation()?->slug) }}">Посмотреть основной товар</a>
                    </div>
                @elseif ($product->children->count() > 0)
                    <div class="delivery-address__wrap">
                        <a class="parent-product-link" href="{{ route('catalog.products.index', ['parent_id' => $product->id]) }}">Купить товар дешевле</a>
                    </div>
                @endif

                @if ($product->stocks->sum('available') > 0)
                    <div class="delivery-address__wrap">
                        @php($cityGroups = $product->stocksGroupedByCity())
                        @foreach ($cityGroups as $key => $group)
                            <p class="city-group-title">{{ $key }}</p>
                            <ul class="city-group-stocks">
                                @foreach ($group as $stock)
                                    <li>
                                        <b>{{ $stock->store->translation()?->name }}:</b>
                                        @if ($stock->available > $setting->product_min_amount)
                                            <span>Более {{ $setting->product_min_amount }} товаров</span>
                                        @else
                                            <span>Менее {{ $setting->product_min_amount }} товаров</span>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        @endforeach
                    </div>
                @endif
            </div>
        </aside>
    </div>

    <div class="product-wrap h-container">
        <x-catalog.similar-products :products="$similarProducts" />
    </div>
</div>
