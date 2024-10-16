<form type="text" class="header-mobile-search__form" action="{{ route('catalog.products.index') }}">
    <div class="header-mobile-search__wrapper">
        <input type="text" class="header-mobile-search__input" placeholder="Поиск" name="search" wire:model.live.debounce.500ms="search" autocomplete="off">
        <button class="header-mobile-search__btn">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 46 46" id="search-icon">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M42 17.296c0 9-7.313 16.296-16.334 16.296-3.083 0-5.967-.853-8.427-2.334L8.152 45 3 40.991 14.147 28.85a16.227 16.227 0 0 1-4.815-11.553C9.332 8.296 16.645 1 25.666 1S42 8.296 42 17.296Zm-4.083 0c0 6.75-5.485 12.222-12.25 12.222-6.767 0-12.251-5.472-12.251-12.222 0-6.75 5.485-12.222 12.25-12.222 6.766 0 12.25 5.472 12.25 12.222Z"></path>
            </svg>
        </button>
    </div>
</form>