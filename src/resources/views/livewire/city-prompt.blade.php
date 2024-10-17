<div>
    @if ($show)

    <div class="city-prompt-wrapper">
        <div class="city-prompt-modal">
            <div class="city-prompt-modal__header">
                {{-- <button class="city-prompt-modal__close">
                    <svg fill="#000000" width="800px" height="800px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.41,12l4.3-4.29a1,1,0,1,0-1.42-1.42L12,10.59,7.71,6.29A1,1,0,0,0,6.29,7.71L10.59,12l-4.3,4.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L12,13.41l4.29,4.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Z"/>
                    </svg>
                </button> --}}
            </div>
            <div class="city-prompt-modal__body">
                <h3 class="city-prompt-modal__title">Ваш текущий город {{ $city?->translation()?->name ?? 'Алматы' }}?</h3>
                <div class="city-prompt-modal__actions">
                    <button class="city-prompt-modal__button approve" wire:click="approve()">Да</button>
                    <button class="city-prompt-modal__button cancel" wire:click="cancel()">Нет</button>
                </div>
            </div>
        </div>
    </div>

    @endif
</div>
