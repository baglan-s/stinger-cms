<div class="the-personal__side">
    <div class="the-personal-navigation">
      <div class="the-personal-navigation__title">
        Мои данные
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 24"><path fill-rule="evenodd" clip-rule="evenodd" d="M5.3 7.3a1 1 0 0 1 1.4 0l4 4a1 1 0 0 1 0 1.4l-4 4a1 1 0 0 1-1.4-1.4L8.58 12l-3.3-3.3a1 1 0 0 1 0-1.4Z" fill="#555770" /></svg>
      </div>
      <ul class="the-personal-navigation__list">
        <li class="the-personal-navigation__item">
          <a
            href="{{ route('account.index', auth()->user()?->id) }}"
            class="the-personal-navigation__link @if(request()->routeIs('account.index')) the-personal-navigation__link--active @endif"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 16 16"
              stroke-width="0"
            >
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M10.333 6.333a2.333 2.333 0 11-4.666 0 2.333 2.333 0 014.666 0zM9 6.333a1 1 0 11-2 0 1 1 0 012 0z"
              ></path>
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M8 14.667A6.667 6.667 0 108 1.333a6.667 6.667 0 000 13.334zm0-1.334a5.31 5.31 0 002.583-.666 2.668 2.668 0 00-5.166 0A5.31 5.31 0 008 13.333zm0-4a4.001 4.001 0 013.709 2.5 5.333 5.333 0 10-7.418 0A4.001 4.001 0 018 9.333z"
              ></path>
            </svg>

            <span>Мои данные</span>
          </a>
        </li>
        <li class="the-personal-navigation__item">
          <a href="{{ route('account.orders', auth()->user()?->id) }}" class="the-personal-navigation__link @if(request()->routeIs('account.orders')) the-personal-navigation__link--active @endif">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 16 16"
              stroke-width="0"
            >
              <path
                d="M4 5.333c0-.368.298-.666.667-.666h4a.667.667 0 010 1.333h-4A.667.667 0 014 5.333zm.667 2a.667.667 0 000 1.334h4a.667.667 0 000-1.334h-4zM4 10.707c0-.368.298-.667.667-.667h2a.667.667 0 010 1.333h-2A.667.667 0 014 10.707z"
              ></path>
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M2.667 1.333c-.772 0-1.334.651-1.334 1.373v9.882c0 1.112.86 2.079 2 2.079h9.334a2 2 0 002-2v-4c0-.736-.598-1.334-1.334-1.334H12V2.706c0-.722-.562-1.373-1.333-1.373h-8zm7.988 1.334H2.678s-.011 8.177-.011 9.921c0 .449.333.745.666.745h7.447a2 2 0 01-.113-.666c0-3.339-.002-6.662-.012-10zm2.012 10.666a.666.666 0 00.666-.666v-4H12v4c0 .368.298.666.667.666z"
              ></path>
            </svg>

            <span>Мои заказы</span>
          </a>
        </li>
        <li class="the-personal-navigation__item">
          <a href="{{ route('account.addresses.index', auth()->user()?->id) }}" class="the-personal-navigation__link @if(request()->routeIs('account.addresses.index')) the-personal-navigation__link--active @endif">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 16 16"
              stroke-width="0"
            >
              <path
                d="M8 13.933l3.3-3.3a4.666 4.666 0 001.011-5.085A4.667 4.667 0 104.7 10.633l3.3 3.3zm0 1.886l-4.243-4.243a6 6 0 118.486 0L8 15.819zm0-7.152A1.333 1.333 0 108 6a1.333 1.333 0 000 2.667zM8 10a2.667 2.667 0 110-5.333A2.667 2.667 0 018 10z"
              ></path>
            </svg>

            <span>Мои адреса</span>
          </a>
        </li>
        <li class="the-personal-navigation__item">
          <button class="the-personal-navigation__link">
            <svg viewBox="0 0 21 21" xmlns="http://www.w3.org/2000/svg">
              <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
              <g
                id="SVGRepo_tracerCarrier"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="1.722"
              >
                <g
                  fill="none"
                  fill-rule="evenodd"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  transform="matrix(-1 0 0 1 18 3)"
                >
                  <path d="m10.595 10.5 2.905-3-2.905-3"></path>
                  <path d="m13.5 7.5h-9"></path>
                  <path
                    d="m10.5.5-8 .00224609c-1.1043501.00087167-1.9994384.89621131-2 2.00056153v9.99438478c.0005616 1.1043502.8956499 1.9996898 2 2.0005615l8 .0022461"
                  ></path>
                </g>
              </g>
              <g id="SVGRepo_iconCarrier">
                <g
                  fill="none"
                  fill-rule="evenodd"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  transform="matrix(-1 0 0 1 18 3)"
                >
                  <path d="m10.595 10.5 2.905-3-2.905-3"></path>
                  <path d="m13.5 7.5h-9"></path>
                  <path
                    d="m10.5.5-8 .00224609c-1.1043501.00087167-1.9994384.89621131-2 2.00056153v9.99438478c.0005616 1.1043502.8956499 1.9996898 2 2.0005615l8 .0022461"
                  ></path>
                </g>
              </g>
            </svg>

            <span id="personal-accaunt-logout-btn">Выйти</span>
          </button>
        </li>
      </ul>
    </div>
</div>