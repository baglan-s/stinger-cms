<div class="mob-header-call__city">
    <div class="mob-header-city">
        <div class="mob-header-city__field">
            <img src="{{ asset('assets/images/icons/header/edit-img.svg') }}" alt="">
            <div class="mob-header-city__placeholder">Ваш город</div>
            <input readonly type="text" class="mob-header-city__input" value="{{ $currentCity->translation()?->name ?? 'Алматы' }}">
        </div>
        <div class="mob-header-city__choose-city" data-v-5>
            <div class="mob-header-city__list">
                @forelse ($cities as $city)
                    <button class="mob-header-city__item" wire:click="selectCity({{ $city->id }})">{{ $city->translation()?->name }}</button>
                @empty
                    <button class="mob-header-city__item">Алматы</button>
                @endforelse
            </div>
        </div>
    </div>
</div>