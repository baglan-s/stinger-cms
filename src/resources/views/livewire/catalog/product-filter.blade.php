@php

function isChecked(string $specs = '', int $specificationId, int $specificationValueId): bool {
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

<aside class="catalog-category__side catalog-category__desktop">
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
                                <input type="checkbox" @if (isChecked($filter['specs'] ?? '', $specification->id, $specValue->id)) checked @endif id="cb-{{ $specification->id . '-' .$specValue->id }}" />
                                <label for="cb-{{ $specification->id . '-' .$specValue->id }}">{{ $specValue->translation()?->name }}</label>
                            </div>
                        @endforeach
                    @endif
                </div>

                @endforeach
            
            @endif
            
        </div>

    @endif

    <div class="catalog-menu catalog-menu__switch">
        <div class="form-switch__text">
            Только в наличии
        </div>
        <label class="switch" wire:click="toggleAvailable()">
            <input type="checkbox">
            <span class="slider round"></span>
        </label>

    </div>

    {{-- <div class="catalog-menu catalog-menu__switch">
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
    <div class="catalog-menu catalog-price__range-inputs desktop d-flex">
        <input type="number" min="{{ $minPrice }}" max="{{ $maxPrice }}" value="{{ $filter['price_from'] ?? 0 }}" class="col-6 catalog-price__input input-min">
        <input type="number" min="{{ $minPrice }}" max="{{ $maxPrice }}" value="{{ $filter['price_to'] ?? $maxPrice }}" class="col-6 catalog-price__input input-max">
    </div>
    <div class="catalog-price__range-slider desktop">
        <div class="price-range__progress desktop"></div>
        <div class="price-range__inputs desktop">
            <input class="range-min" type="range" id="range-min" min="{{ $minPrice }}" step="100" max="{{ $maxPrice }}" value="{{ $filter['price_from'] ?? 0 }}">
            <input class="range-max" type="range" id="range-max" min="{{ $minPrice }}" step="100" max="{{ $maxPrice }}" value="{{ $filter['price_to'] ?? $maxPrice }}">
        </div>
    </div>
    

    <div class="catalog-menu catalog-reset">
        <button wire:click="resetFilter()">
            <span>Сбросить все</span>
            <svg fill="#ffffff" height="200px" width="200px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-256 -256 1024.00 1024.00" xml:space="preserve" stroke="#ffffff" stroke-width="17.919999999999998"><g id="SVGRepo_bgCarrier" stroke-width="0" transform="translate(0,0), scale(1)"><rect x="-256" y="-256" width="1024.00" height="1024.00" rx="512" fill="#778BA5" strokewidth="0"></rect></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="4.096"></g><g id="SVGRepo_iconCarrier"> <g> <g> <polygon points="512,59.076 452.922,0 256,196.922 59.076,0 0,59.076 196.922,256 0,452.922 59.076,512 256,315.076 452.922,512 512,452.922 315.076,256 "></polygon> </g> </g> </g></svg>
        </button>
    </div>

</aside>