<!-- Mobile panel -->
<div class="mobile-nav-panel hide-desktop">
    <div class="mobile-nav-panel__list">
        <div class="mobile-nav-panel__item">
            <div class="hc-item-profile-control control-item outline">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="hc-control-item__icon">
                    <path d="M16 14a6 6 0 1 0 0-12 6 6 0 0 0 0 12ZM28 24a6 6 0 0 0-6-6H10a6 6 0 0 0-6 6v6h24v-6Z" />
                </svg>
                <span class="hc-control-item__name">Войти</span>
            </div>
        </div>
        <div class="mobile-nav-panel__item">
            <div class="hc-item-profile-control control-item outline">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="hc-control-item__icon">
                    <path d="M0 2v4h4.306l1.66 9.967-1.927 9.64c-.027.134-.04.268-.039.401.003.682 0 1.294 0 1.992a4 4 0 0 0 8 0h8a4 4 0 1 0 4-4H8.44l.8-4H30V2H0Z" />
                </svg>
                <span class="hc-control-item__name">Корзина</span>
            </div>
        </div>
        <!-- <button class="mobile-nav-panel__search">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 46 46" class="svg-icons svg-icon--search svg-size--32">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M42 17.296c0 9-7.313 16.296-16.334 16.296-3.083 0-5.967-.853-8.427-2.334L8.152 45 3 40.991 14.147 28.85a16.227 16.227 0 0 1-4.815-11.553C9.332 8.296 16.645 1 25.666 1S42 8.296 42 17.296Zm-4.083 0c0 6.75-5.485 12.222-12.25 12.222-6.767 0-12.251-5.472-12.251-12.222 0-6.75 5.485-12.222 12.25-12.222 6.766 0 12.25 5.472 12.25 12.222Z" />
            </svg>
        </button> -->

        <button class="mobile-nav-panel__catalog">
            <svg width="50" height="51" viewBox="0 0 50 51" fill="none" xmlns="http://www.w3.org/2000/svg" class="styles_icon__dSn0y styles_active__qW489">
                <ellipse cx="12.7132" cy="13.1839" rx="4.096" ry="4.096" fill="#029AAD"></ellipse>
                <circle cx="26.5101" cy="13.1839" r="4.096" fill="#029AAD"></circle>
                <ellipse cx="12.7132" cy="26.981" rx="4.096" ry="4.096" fill="#029AAD"></ellipse>
                <ellipse cx="40.3089" cy="13.1839" rx="4.096" ry="4.09599" fill="#029AAD"></ellipse>
                <ellipse cx="26.5101" cy="26.981" rx="4.096" ry="4.096" fill="#029AAD"></ellipse>
                <ellipse cx="40.3089" cy="26.981" rx="4.096" ry="4.096" fill="#029AAD"></ellipse>
                <ellipse cx="12.7132" cy="40.7779" rx="4.096" ry="4.09599" fill="#029AAD"></ellipse>
                <ellipse cx="26.5101" cy="40.7779" rx="4.096" ry="4.09599" fill="#029AAD"></ellipse>
            </svg>
        </button>

        <div class="mobile-nav-panel__item">
            <div class="hc-item-profile-control control-item outline">
                <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="hc-control-item__icon">
                    <path d="M2.485 17.485 16 31l13.515-13.515a8.485 8.485 0 0 0 2.485-6v-.38a8.105 8.105 0 0 0-14.433-5.063L16 8l-1.567-1.958A8.105 8.105 0 0 0 0 11.105v.38c0 2.25.894 4.409 2.485 6Z" />
                </svg>
                <span class="hc-control-item__name">Избранное</span> -->
                <livewire:favourite-modal />
            </div>
        </div>
        <div class="mobile-nav-panel__item">
            <div class="hc-item-profile-control control-item outline">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="hc-control-item__icon">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M22 4H0v22h4a4 4 0 0 0 8 0h8a4 4 0 0 0 8 0h4V16a6 6 0 0 0-6-6h-4V4Zm0 10v4h6v-4h-6Z" />
                </svg>
                <span class="hc-control-item__name">Обратная связь</span>
            </div>
        </div>
    </div>
</div>
<!-- End mobile panel -->