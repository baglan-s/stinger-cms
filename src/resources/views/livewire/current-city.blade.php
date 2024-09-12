<div class="nav-header__city">
    <button class="header-city_btn" data-bs-toggle="modal" data-bs-target="#chooseCity">
        <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" class="location-icon svg-size--24">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M16.893 14.581c3.029-.438 5.357-3.073 5.357-6.258C22.25 4.83 19.452 2 16 2S9.75 4.83 9.75 8.323c0 3.185 2.328 5.82 5.357 6.258v11.806h1.786V14.581ZM16 12.84c2.466 0 4.464-2.022 4.464-4.516 0-2.495-1.998-4.517-4.464-4.517s-4.464 2.022-4.464 4.517c0 2.494 1.998 4.516 4.464 4.516Z" />
            <path fill-rule="evenodd" clip-rule="evenodd" d="M5.322 26.27c.027-.03.069-.071.133-.122.227-.18.614-.387 1.186-.596 1.135-.414 2.797-.762 4.81-.976l-.187-1.797c-2.087.222-3.907.59-5.23 1.074-.656.24-1.241.525-1.68.872-.424.336-.854.849-.854 1.544 0 .924.741 1.528 1.363 1.886.692.398 1.634.727 2.72.992C9.77 29.68 12.747 30 16 30c3.254 0 6.23-.32 8.416-.853 1.087-.265 2.029-.594 2.72-.992.623-.358 1.364-.962 1.364-1.886 0-.695-.43-1.207-.854-1.544-.439-.347-1.024-.633-1.68-.872-1.323-.483-3.143-.852-5.23-1.074l-.187 1.797c2.013.214 3.675.562 4.81.976.572.209.96.416 1.186.596.064.05.106.091.133.121-.053.061-.17.17-.425.316-.483.278-1.24.559-2.255.805-2.014.491-4.842.804-7.998.804-3.156 0-5.985-.313-7.998-.803-1.014-.247-1.772-.528-2.255-.806-.254-.146-.372-.255-.425-.316Z" />
        </svg>
        <span class="header-city__title">{{ $currentCity->translation()?->name }}</span>
    </button>
</div>