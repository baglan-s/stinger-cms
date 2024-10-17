<div class="header__search">
    <div class="header-search">
        <form action="{{ route('catalog.products.index') }}" class="header-search__form">
            <input type="text" class="header-search__input" placeholder="Поиск" name="search" wire:model.live.debounce.500ms="search">
            <button class="header-search__button mobile-hidden outline">
                <!-- <img src="assets/images/icons/header/magnifying-glass-solid.svg" alt="Search"> -->
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 46 46" id="search-icon">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M42 17.296c0 9-7.313 16.296-16.334 16.296-3.083 0-5.967-.853-8.427-2.334L8.152 45 3 40.991 14.147 28.85a16.227 16.227 0 0 1-4.815-11.553C9.332 8.296 16.645 1 25.666 1S42 8.296 42 17.296Zm-4.083 0c0 6.75-5.485 12.222-12.25 12.222-6.767 0-12.251-5.472-12.251-12.222 0-6.75 5.485-12.222 12.25-12.222 6.766 0 12.25 5.472 12.25 12.222Z" />
                </svg>
            </button>
            @if ($products->count() > 0)
                <!-- Desktop search result -->
            <div class="desktop-search__box desktop-search-box-body">
                <div class="desktop-search-results">
                    <div class="desktop-search-wrapper">
                        <div class="desktop-search-container">
                            <div class="desktop-search-group">
                                @if ($searchHints->count() > 0)
                                    <div class="desktop-search-group-title">
                                        Результаты
                                    </div>
                                    <div class="desktop-search-group-description">
                                        @foreach ($searchHints as $searchHint)
                                            <a class="mobile-search-row" href="{{ route('catalog.products.index', ['search' => $searchHint->search_hint]) }}">
                                                <span>{{ $searchHint->search_hint }}</span>
                                            </a>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="desktop-search-container" id="desktop_search_products">
                            <div class="desktop-search-group desktop-search-products">
                                <div class="desktop-search-group-title">Подходящие товары</div>
                                <div class="desktop-search-group-description">
                                    @foreach ($products as $product)
                                        <a class="desktop-search-product" href="{{ route('catalog.products.show', ['slug' => $product->translation()?->slug]) }}">
                                            <div class="desktop-search-product__image" style="background-image: url('{{ asset($product->getDefaultImage()) }}')"></div>
                                            <div class="desktop-search-product__name-holder">
                                                <div class="desktop-search-product__name">{{ $product->translation()?->name }}</div>
                                                <div class="desktop-search-product__price">
                                                    <div class="desktop-search-product__price-current">{{ $product->getPrice() }}₸</div>
                                                </div>
                                            </div>
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End desktop search result -->
            @endif
        </form>
    </div>
</div>