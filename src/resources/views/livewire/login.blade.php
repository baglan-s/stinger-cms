
<div
      class="modal fade"
      id="login"
      tabindex="-1"
      aria-labelledby="login"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header modal-login">
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body modal-login-body">
            <div class="base-popup__content">
              <div class="modal-profile-auth">
                <div class="modal-profile-auth__tabs">
                  <button
                    class="login-modal-btn modal-profile-auth__tab outline active"
                  >
                    Вход
                  </button>
                  <button
                    class="register-modal-btn modal-profile-auth__tab outline"
                  >
                    Регистрация
                  </button>
                </div>
                <div class="tab-content login-modal">
                  <div
                    id="phone-login"
                    class="modal-profile-auth__login modal-profile-login"
                  >
                    <div class="modal-profile-auth__title">
                      Вход по номеру телефона
                    </div>
                    <form class="modal-profile-auth__form" wire:submit.prevent="login">
                      <label class="base-input">
                        <input
                          placeholder="Номер телефона"
                          type="tel"
                          name="phone"
                          wire:model="phone"
                          class="base-input__field base-input--primary phone-number"
                        />
                        <span class="the-personal-input__error">Поле обязательно для заполнения</span>
                      </label>
                      <button
                        class="base-button outline modal-profile-auth__button base-button--v1 base-button--sm" type
                      >
                        Получить код
                        <span
                          class="global-preloader is-small"
                          style="display: none"
                          ><span class="global-preloader__box"></span
                        ></span>
                      </button>
                    </form>
                    <button class="modal-profile-auth__state outline">
                      Войти по почте
                    </button>
                  </div>
                  <div
                    id="mail-login"
                    class="modal-profile-auth__login modal-profile-login"
                  >
                    <div class="modal-profile-auth__title">Вход по почте</div>
                    <form class="modal-profile-auth__form">
                      <label class="base-input">
                        <input
                          placeholder="Электронная почта"
                          type="email"
                          name="email"
                          class="base-input__field base-input--primary"
                        />
                        <span class="the-personal-input__error">Поле обязательно для заполнения</span>
                      </label>
                      <button
                        class="base-button outline modal-profile-auth__button base-button--v1 base-button--sm"
                      >
                        Получить код
                        <span
                          class="global-preloader is-small"
                          style="display: none"
                          ><span class="global-preloader__box"></span
                        ></span>
                      </button>
                    </form>
                    <button class="modal-profile-auth__state outline">
                      Войти по номеру
                    </button>
                  </div>
                </div>
                <div class="tab-content register-modal">
                  <div class="modal-profile-auth__login modal-profile-login">
                    <div class="modal-profile-auth__title">Регистрация</div>
                    <form class="modal-profile-auth__form" wire:submit.prevent="register">
                      <label class="base-input">
                        <input
                          placeholder="Имя"
                          type="text"
                          name="name"
                          class="base-input__field base-input--primary"
                          wire:model="name"
                        />
                        @error('name') <span class="error">{{ $message }}</span> @enderror
                        <span class="the-personal-input__error">Поле обязательно для заполнения</span>
                      </label>
                      <label class="base-input">
                        <input
                          placeholder="Фамилия"
                          type="text"
                          name="last_name"
                          class="base-input__field base-input--primary"
                          wire:model="last_name"
                        />
                        @error('last_name') <span class="error">{{ $message }}</span> @enderror
                        <span class="the-personal-input__error">Поле обязательно для заполнения</span>
                      </label>
                      <label class="base-input">
                        <input
                          placeholder="Номер телефона"
                          type="tel"
                          name="phone"
                          class="base-input__field base-input--primary phone-number"
                          wire:model="phone"
                        />
                        @error('phone') <span class="error">{{ $message }}</span> @enderror
                        <span class="the-personal-input__error">Поле обязательно для заполнения</span>
                      </label>
                      <label class="base-input">
                        <input
                          placeholder="Электронная почта"
                          type="email"
                          name="email"
                          class="base-input__field base-input--primary"
                          wire:model="email"
                        />
                        @error('email') <span class="error">{{ $message }}</span> @enderror
                        <span class="the-personal-input__error">Поле обязательно для заполнения</span>
                      </label>
                      <label class="base-input">
                        <input
                          placeholder="Город"
                          type="text"
                          name="city"
                          class="base-input__field base-input--primary"
                          wire:model="city"
                        />
                        @error('city') <span class="error">{{ $message }}</span> @enderror
                        <span class="the-personal-input__error">Поле обязательно для заполнения</span>
                      </label>
                      <label class="base-input">
                        <input
                          placeholder="Пароль"
                          type="text"
                          name="password"
                          class="base-input__field base-input--primary"
                          wire:model="password"
                        />
                        @error('password') <span class="error">{{ $message }}</span> @enderror
                        <span class="the-personal-input__error">Поле обязательно для заполнения</span>
                      </label>
                      <label class="base-input">
                        <input
                          placeholder="Повторите пароль"
                          type="text"
                          name="password_confirmation"
                          class="base-input__field base-input--primary"
                          wire:model="password_confirmation"
                        />
                        @error('password_confirmation') <span class="error">{{ $message }}</span> @enderror
                        <span class="the-personal-input__error">Поле обязательно для заполнения</span>
                      </label>
                      <button
                        class="base-button outline modal-profile-auth__button base-button--v1 base-button--sm" type="submit"
                      >
                        Зарегистрироваться
                        <span
                          class="global-preloader is-small"
                          style="display: none"
                          ><span class="global-preloader__box"></span
                        ></span>
                      </button>
                      <div
                        class="base-checkbox modal-profile-auth__checkbox mobile-hidden"
                      >
                        <label class="base-checkbox__label text-after"
                          ><input
                            type="checkbox"
                            class="base-checkbox__input visually-hidden" /><span
                            class="base-checkbox__custom"
                          ></span></label
                        ><span class="base-checkbox__text">
                          Получать информацию о скидках и секретных распродажах
                        </span>
                      </div>
                    </form>
                    <div class="modal-profile-auth__personal-data">
                      Нажимая на кнопку, вы даете согласие на
                      <a href="#" target="_blank">
                        обработку своих персональных данных
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>