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
                                    <div class="swiper-slide" wire:key="{{ $image->id }}">
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
                                    <div class="swiper-slide" wire:key="{{ $image->id }}">
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
                            <button class="base-button" wire:click="addToCart('{{ $product->id }}')" @if ($product->stocks->sum('available') <= 0) disabled @endif>
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
                        @if ($product->parent_id)
                            <a class="parent-product-link" href="{{ route('catalog.products.show', $product->parent->translation()?->slug) }}">Посмотреть основной товар</a>
                        @elseif ($product->children->count() > 0)
                            <a class="parent-product-link" href="{{ route('catalog.products.index', ['parent_id' => $product->id]) }}">Купить товар дешевле</a>
                        @endif

                        @if ($product->cityStocks->sum('available') > 0)
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
        {{-- <div class="product-info">
            <div>
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M40 37.5H0V30L17.5 0h5L40 30v7.5ZM17.5 10h5v12.5h-5V10Zm0 17.5h5v5h-5v-5Z" fill="#F0E4D5"/></svg>

            </div>
            <div>
                Информация о технических характеристиках, комплекте поставки, 
                стране изготовления и внешнем виде товара носит справочный 
                характер и основывается на последних доступных к моменту 
                публикации сведениях.
            </div>
        </div> --}}
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
                <button class="base-button" wire:click="addToCart('{{ $product->id }}')" @if ($product->stocks->sum('available') <= 0) disabled @endif>
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
            @if ($product->parent_id)
                <div class="delivery-address__wrap">
                    <a class="parent-product-link" href="{{ route('catalog.products.show', $product->parent->translation()?->slug) }}">Посмотреть основной товар</a>
                </div>
            @elseif ($product->children->count() > 0)
                <div class="delivery-address__wrap">
                    <a class="parent-product-link" href="{{ route('catalog.products.index', ['parent_id' => $product->id]) }}">Купить товар дешевле</a>
                </div>
            @endif

            @if ($product->cityStocks->sum('available') > 0)
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

        {{-- <div class="product-side__bottom">
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
        </div> --}}
    </aside>
</div>
