@php

function isCheckedMobile(string $specs = '', int $specificationId, int $specificationValueId): bool {
    $specs = explode(',', $specs);

    $isChecked = false;
    
    foreach ($specs as $spec) {
        $specParts = explode('-', $spec);
        $specId = $specParts[0];

        if (!isset($specParts[1])) {
            continue;
        } 

        $specValueIds = explode(';', $specParts[1]);

        if ($specId == $specificationId && in_array($specificationValueId, $specValueIds)) {
            $isChecked = true;
            break;
        }
    }

    return $isChecked;
}

@endphp

<!-- Menu -->
<div class="mob-menu-wrap hide-desktop">
    <div class="mob-menu-wrap__head">
        <h1 class="mob-menu-wrap__title">Фильтры</h1>
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
    <div class="catalog-mob-menu-wrap__body">
        @if ($category)
            <div class="catalog-menu">
                @if ($category->brands->count() > 0)
                    <div class="catalog-menu__title">
                        Бренды
                    </div>
                    <div class="catalog-menu__list">
                        @foreach ($category->brands as $brand)
                            <div class="checkbox-wrapper-47" :key="$brand->id" wire:click="toggleBrands('{{ $brand->id }}')">
                                <input type="checkbox" @if (isset($filter['brand_ids']) && in_array($brand->id, explode(',', $filter['brand_ids']))) checked @endif id="cb-{{ $brand->id }}" />
                                <label for="cb-{{ $brand->id }}">{{ $brand->translation()?->name }}</label>
                            </div>
                        @endforeach
                    </div>
                @endif

                @if ($category->specifications->count() > 0)
            
                    @foreach ($category->specifications as $specification)

                    <div class="catalog-menu__title">
                        {{ $specification->translation()?->name }}
                    </div>
                    <div class="catalog-menu__list">
                        @if ($specification->values->count() > 0)
                            @foreach ($specification->values as $specValue)
                                <div class="checkbox-wrapper-47" :key="$specification->id . '-' .$specValue->id" wire:click="toggleSpecificationValues('{{ $specification->id }}', '{{ $specValue->id }}')">
                                    <input type="checkbox" @if (isCheckedMobile($filter['specs'] ?? '', $specification->id, $specValue->id)) checked @endif id="cb-{{ $specification->id . '-' .$specValue->id }}" />
                                    <label for="cb-{{ $specification->id . '-' .$specValue->id }}">{{ $specValue->translation()?->name }}</label>
                                </div>
                            @endforeach
                        @endif
                    </div>

                    @endforeach
                
                @endif
            </div>
        @endif

        <div class="catalog-menu catalog-menu__switch mt-2">
            <div class="form-switch__text">
                Только в наличии
            </div>
            <label class="switch" wire:click="toggleAvailable()">
                <input type="checkbox">
                <span class="slider round"></span>
            </label>

        </div>

        {{-- <div class="catalog-menu catalog-menu__switch mt-2">
            <div class="form-switch__text">
                Со скидкой
            </div>
            <label class="switch">
                <input type="checkbox">
                <span class="slider round"></span>
            </label>

        </div> --}}

        <div class="catalog-price__title">
            Цена
        </div>
        <div class="catalog-menu catalog-price__range-inputs mobile d-flex">
            <input type="number" min="{{ $minPrice }}" max="{{ $maxPrice }}" value="{{ $filter['price_from'] ?? 0 }}" class="col-6 catalog-price__input input-min">
            <input type="number" min="{{ $minPrice }}" max="{{ $maxPrice }}" value="{{ $filter['price_to'] ?? $maxPrice }}" class="col-6 catalog-price__input input-max">
        </div>
        <div class="catalog-price__range-slider mobile">
            <div class="price-range__progress mobile"></div>
            <div class="price-range__inputs mobile">
                <input class="range-min" type="range" id="range-min" min="{{ $minPrice }}" step="100" max="{{ $maxPrice }}" value="{{ $filter['price_from'] ?? 0 }}">
                <input class="range-max" type="range" id="range-max" min="{{ $minPrice }}" step="100" max="{{ $maxPrice }}" value="{{ $filter['price_to'] ?? $maxPrice }}">
            </div>
        </div>
        
        {{-- <div class="catalog-menu catalog-show">
            <button>
                <span>Показать 879</span>
                <svg width="56" height="116" viewBox="0 0 56 116" xmlns="http://www.w3.org/2000/svg" >
                    <path d="M56 48.15 27.451 116V67.85H0L28.549 0v48.15H56Z" ></path>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M9.5 67.849 28.55 0 0 67.849h9.5ZM27.451 116l9.05-48.151h-9.05V116Z" ></path>
                </svg>  
            </button>
        </div> --}}

        <div style="margin-bottom: 60px;" class="catalog-menu catalog-reset" wire:click="resetFilter()">
            <button>
                <span>Сбросить все</span>
                <svg fill="#ffffff" height="200px" width="200px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-256 -256 1024.00 1024.00" xml:space="preserve" stroke="#ffffff" stroke-width="17.919999999999998"><g id="SVGRepo_bgCarrier" stroke-width="0" transform="translate(0,0), scale(1)"><rect x="-256" y="-256" width="1024.00" height="1024.00" rx="512" fill="#778BA5" strokewidth="0"></rect></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="4.096"></g><g id="SVGRepo_iconCarrier"> <g> <g> <polygon points="512,59.076 452.922,0 256,196.922 59.076,0 0,59.076 196.922,256 0,452.922 59.076,512 256,315.076 452.922,512 512,452.922 315.076,256 "></polygon> </g> </g> </g></svg>
            </button>
        </div>
    </div>
</div>
<!-- End Menu -->