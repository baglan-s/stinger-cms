<div>
    @if ($products->count() > 0)

    <!-- Search modal -->
    <div class="mobile-search__box mobile-search-box-body">
        <div class="mobile-search-results">
            <div class="mobile-search-wrapper">
                <div class="mobile-search-container">
                    <div class="mobile-search-group">
                        @if ($searchHints->count() > 0)
                            <div class="mobile-search-group-title">Результаты</div>
                            <div class="mobile-search-group-description">
                                @foreach ($searchHints as $searchHint)
                                    <a class="mobile-search-row" href="{{ route('catalog.products.index', ['search' => $searchHint->search_hint]) }}">
                                        <span>{{ $searchHint->search_hint }}</span>
                                    </a>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
                <div class="mobile-search-container" id="mobile_search_products">
                    <div class="mobile-search-group mobile-search-products">
                        <div class="mobile-search-group-title">Подходящие товары</div>
                        <div class="mobile-search-group-description">
                            @foreach ($products as $product)
                                <a class="mobile-search-product" href="{{ route('catalog.products.show', ['slug' => $product->translation()?->slug]) }}">
                                    <div class="mobile-search-product__image" style="background-image: url({{ $product->getDefaultImage() }})"></div>
                                    <div class="mobile-search-product__name-holder">
                                        <div class="mobile-search-product__name">{{ $product->translation()?->name }}</div>
                                        <div class="mobile-search-product__price">
                                            <div class="mobile-search-product__price-current">{{ $product->getPrice() }} ₸</div>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="mobile-search-close"></div>
            </div>
        </div>
    </div>
    <!-- End search modal -->

    @endif
</div>