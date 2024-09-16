
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
                    <form class="modal-profile-auth__form" onsubmit="return validateForm()">
                      <label class="base-input">
                        <input
                          id="auth-phone"
                          placeholder="Номер телефона"
                          type="tel"
                          name="phone"
                          class="base-input__field base-input--primary phone-number"
                        />
                        <span class="the-personal-input__error">Поле обязательно для заполнения</span>
                      </label>
                      <label class="base-input" id="sms-code-section">
                        <input
                          placeholder="Введите смс код"
                          type="number"
                          name="code"
                          class="base-input__field base-input--primary sms-code-inp"
                        />
                        <span class="the-personal-input__error">Поле обязательно для заполнения</span>
                      </label>
                      <div id="timer" data-value="Повторная отправка смс через: ">Повторная отправка смс через: 01:00</div>
                      <button class="modal-profile-auth__state outline resend-code-btn">
                        Переотправить код
                        <div class="preloader-resend-btn"></div>
                      </button>
                      <button
                        class="base-button outline modal-profile-auth__button base-button--v1 base-button--sm btn-auth-sms" 
                        type="button"
                      >
                        Получить код
                        <span
                          class="global-preloader is-small"
                          style="display: none"
                          ><span class="global-preloader__box"></span
                        ></span>
                        <div id="preloader" class="preloader-btn"></div>
                      </button>
                      <!-- Подтвердить смс код -->
                      <button
                        class="base-button outline modal-profile-auth__button base-button--v1 base-button--sm"
                        id="confirm-sms-code"
                      >
                        Подтвердить код
                        <span
                          class="global-preloader is-small"
                          style="display: none"
                          ><span class="global-preloader__box"></span
                        ></span>
                        <div id="preloader" class="preloader-btn"></div>
                      </button> 
                      <!-- End Подтвердить смс код -->
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
                          id="auth-email"
                        />
                        <span class="the-personal-input__error">Поле обязательно для заполнения</span>
                      </label>
                      <label class="base-input" id="email-code-section">
                        <input
                          placeholder="Введите код с почты"
                          type="number"
                          name="code"
                          class="base-input__field base-input--primary email-code-inp"
                        />
                        <span class="the-personal-input__error">Поле обязательно для заполнения</span>
                      </label>
                      <div id="timer" data-value="Повторная отправка смс через: ">01:00</div>
                      <button class="modal-profile-auth__state outline resend-code-btn">
                        Переотправить код
                      </button>
                      <button
                        class="base-button outline modal-profile-auth__button base-button--v1 base-button--sm btn-auth-email"
                      >
                        Получить код
                        <span
                          class="global-preloader is-small"
                          style="display: none"
                          ><span class="global-preloader__box"></span
                        ></span>
                        <div id="preloader" class="preloader-btn"></div>
                      </button>
                      <!-- Подтвердить email код -->
                      <button
                        class="base-button outline modal-profile-auth__button base-button--v1 base-button--sm"
                        id="confirm-email-code"
                      >
                        Подтвердить код
                        <span
                          class="global-preloader is-small"
                          style="display: none"
                          ><span class="global-preloader__box"></span
                        ></span>
                        <div id="preloader" class="preloader-btn"></div>
                      </button> 
                      <!-- End Подтвердить email код -->
                    </form>
                    <button class="modal-profile-auth__state outline">
                      Войти по номеру
                    </button>
                  </div>
                </div>
                <div class="tab-content register-modal">
                  <div class="modal-profile-auth__login modal-profile-login">
                    <div class="modal-profile-auth__title">Регистрация</div>
                    <form class="modal-profile-auth__form">
                      <label class="base-input">
                        <input
                          placeholder="Имя"
                          type="text"
                          name="name"
                          class="base-input__field base-input--primary"
                          id="name"
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
                          id="last_name"
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
                          id="phone"
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
                          id="email"
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
                          id="city"
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
                          id="password"
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
                          id="password_confirmation"
                        />
                        @error('password_confirmation') <span class="error">{{ $message }}</span> @enderror
                        <span class="the-personal-input__error">Поле обязательно для заполнения</span>
                      </label>
                      <button
                        class="base-button outline modal-profile-auth__button base-button--v1 base-button--sm" type="submit"
                        id="register-btn"
                      >
                        Зарегистрироваться
                        <span
                          class="global-preloader is-small"
                          style="display: none"
                          ><span class="global-preloader__box"></span
                        ></span>
                        <div id="preloader" class="preloader-btn"></div>
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
    @push('scripts')
    <script type="text/javascript" src="{{ asset('assets/js/auth-client.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/register-client.js') }}"></script>
    @endpush