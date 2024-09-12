<div class="modal fade" id="chooseCity" tabindex="-1" aria-labelledby="chooseCityLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="chooseCityLabel">Ваш город</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul class="choose-city-popup__list">
                    @forelse ($cities as $city)
                        <li 
                            class="choose-city-popup__item {{ $city->id === $currentCityId ? 'selected-city' : '' }}"
                            wire:click="selectCity({{ $city->id }})"
                            data-bs-dismiss="modal"
                        >
                            {{ $city->translation()?->name }}
                        </li>
                    @empty
                        <li class="choose-city-popup__item">Нет записей</li>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
</div>