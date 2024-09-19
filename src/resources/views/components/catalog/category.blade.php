<!-- Catalog -->
<div class="desktop-header-catalog__menu">
    <div class="desktop-header-catalog-menu__container">
        <div class="desktop-header-catalog-menu__link-content">
            @forelse ($categories as $category)

                <div class="desktop-header-catalog-menu__link-container">
                    <a class="menu-link-container__link" href="{{ route('catalog.categories.show', $category->translation()?->slug) }}">
                        <img src="assets/images/icons/catalog/8SIWB4I21vjXxFrVX16ym6gVNYEpLd0OyeEcmdan.svg" alt="">{{ $category->translation()?->name }}
                        <svg xmlns="http://www.w3.org/2000/svg" width="5" height="10" viewBox="0 0 5 10" class="styles_arrow__2rmjw">
                            <path d="M0.427315 0.822949C0.38037 0.776009 0.316705 0.749634 0.250315 0.749634C0.183925 0.749634 0.12026 0.776009 0.0733149 0.822949C0.0263699 0.869894 0 0.933564 0 0.999954C0 1.06634 0.0263699 1.13001 0.0733149 1.17695L3.89682 4.99997L0.0733149 8.82298C0.0263699 8.86987 0 8.93358 0 8.99998C0 9.06633 0.0263699 9.13002 0.0733149 9.17698C0.12026 9.22388 0.183925 9.25027 0.250315 9.25027C0.316705 9.25027 0.38037 9.22388 0.427315 9.17698L4.42732 5.17697C4.45062 5.15372 4.46907 5.12612 4.48167 5.09577C4.49427 5.06537 4.50076 5.03282 4.50076 4.99997C4.50076 4.96707 4.49427 4.93452 4.48167 4.90412C4.46907 4.87377 4.45062 4.84617 4.42732 4.82297L0.427315 0.822949Z"></path>
                        </svg>
                    </a>
                    <div class="menu-link-container__body">
                        <div class="container-body__content-head">
                            <span class="container-body-content-head__title">{{ $category->translation()?->name }}</span>
                            <a class="desktop-header-catalog__allcats" href="{{ route('catalog.categories.show', $category->translation()?->slug) }}">
                                Все категории
                                <svg xmlns="http://www.w3.org/2000/svg" width="5" height="10" viewBox="0 0 5 10" class="styles_arrow__2rmjw">
                                    <path d="M0.427315 0.822949C0.38037 0.776009 0.316705 0.749634 0.250315 0.749634C0.183925 0.749634 0.12026 0.776009 0.0733149 0.822949C0.0263699 0.869894 0 0.933564 0 0.999954C0 1.06634 0.0263699 1.13001 0.0733149 1.17695L3.89682 4.99997L0.0733149 8.82298C0.0263699 8.86987 0 8.93358 0 8.99998C0 9.06633 0.0263699 9.13002 0.0733149 9.17698C0.12026 9.22388 0.183925 9.25027 0.250315 9.25027C0.316705 9.25027 0.38037 9.22388 0.427315 9.17698L4.42732 5.17697C4.45062 5.15372 4.46907 5.12612 4.48167 5.09577C4.49427 5.06537 4.50076 5.03282 4.50076 4.99997C4.50076 4.96707 4.49427 4.93452 4.48167 4.90412C4.46907 4.87377 4.45062 4.84617 4.42732 4.82297L0.427315 0.822949Z"></path>
                                </svg>
                            </a>
                        </div>
                        <ul class="desktop-header-catalog_contentLinks">
                            <div>
                                <div class="contentLinks__wrapp">
                                    @if ($category->children->count() > 0)
                                        @foreach ($category->children as $child)

                                            <div class="contentLinks-inner__wrapp">
                                                <li class="desktop-header-catalog-linkItems">
                                                    <a href="{{ route('catalog.categories.show', $child->translation()?->slug) }}" class="desktop-header-catalog__topLink">{{ $child->translation()?->name }}</a>

                                                    @if ($child->children->count() > 0)
                                                        @foreach ($child->children as $grandChild)
                                                            <a class="desktop-header-catalog__otherLinks" href="{{ route('catalog.categories.show', $grandChild->translation()?->slug) }}">{{ $grandChild->translation()?->name }}</a>
                                                        @endforeach
                                                    @endif
                                                </li>
                                            </div>

                                        @endforeach
                                    @endif
                                
                                </div>
                            </div>
                        </ul>
                    </div>
                </div>

            @empty

                <div class="desktop-header-catalog-menu__link-container">
                    Нет категорий
                </div>
                
            @endforelse
            
        </div>
    </div>
</div>
<!-- End catalog -->