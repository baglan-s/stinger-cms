
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
                          id="phone-sms"
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
                      <button
                        class="base-button outline modal-profile-auth__button base-button--v1 base-button--sm btn-auth-email"
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
                    <form class="modal-profile-auth__form">
                      <label class="base-input">
                        <input
                          placeholder="Имя"
                          type="text"
                          name="name"
                          class="base-input__field base-input--primary"
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
    @push('scripts')
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
  
            let preloader = $('.preloader-btn');
            let btnAuthSms = $('.btn-auth-sms');
            let btnAuthEmail = $('.btn-auth-email');
            let smsCodeSection = $('#sms-code-section');
            let confirmSmsCode = $('#confirm-sms-code');
            let smsCode = $('.sms-code-inp');
            let userId;
            const phoneNumber = $('.phone-number');
            const authEmailInput = $('#auth-email');
            phoneNumber.mask("+7 (000) 000-00-00");
            
            $(btnAuthSms).on('click', function(e) {
                e.preventDefault();
                if (!phoneNumber.val()) {
                  phoneNumber.attr('required', true);
                  return false;  
                }
                
                $.ajax({
                    url: '/send-sms',
                    method: 'POST',
                    data: { phone: phoneNumber.val() },
                    beforeSend: function () {
                      preloader.css('display', 'inline-block');
                    },
                    complete: function () {
                      preloader.hide();
                    },
                    success: function(response) {
                        if (response.status === 'success') {
                            smsCodeSection.show();
                            confirmSmsCode.show();
                            smsCode.show();
                            btnAuthSms.hide();
                            userId = response.user_id;
                        } else {
                            alert('Ошибка при отправке SMS: ' + response.message);
                        }
                    },
                    error: function(xhr, status, error) {
                        alert('Произошла ошибка при отправке запроса: ' + error);
                    }
                });
            });

            $(btnAuthEmail).on('click', function(e) {
                e.preventDefault();
                if (!authEmailInput.val()) {
                  authEmailInput.attr('required', true);
                  return false;  
                }
                
                $.ajax({
                    url: '/send-sms',
                    method: 'POST',
                    data: { phone: phoneNumber.val() },
                    beforeSend: function () {
                      preloader.css('display', 'inline-block');
                    },
                    complete: function () {
                      preloader.hide();
                    },
                    success: function(response) {
                        if (response.status === 'success') {
                            smsCodeSection.show();
                            confirmSmsCode.show();
                            smsCode.show();
                            btnAuthSms.hide();
                            userId = response.user_id;
                        } else {
                            alert('Ошибка при отправке SMS: ' + response.message);
                        }
                    },
                    error: function(xhr, status, error) {
                        alert('Произошла ошибка при отправке запроса: ' + error);
                    }
                });
            });

            $('#confirm-sms-code').on('click', function (e) {
                e.preventDefault();
                const phoneNumber = $('.phone-number').val();
                  $.ajax({
                    url: '/cofirm-sms',
                    method: 'POST',
                    data: { 
                      phone: phoneNumber,
                      code: smsCode.val()
                    },
                    beforeSend: function () {
                      preloader.css('display', 'inline-block');
                    },
                    complete: function () {
                      preloader.hide();
                    },
                    success: function(response) {
                        if (response.status === 'success') {
                            var login = document.getElementById('login');
                            var loginInstance = bootstrap.Modal.getInstance(login);
                            btnAuthSms.show();
                            smsCode.hide();
                            
                            confirmSmsCode.hide();
                            if (loginInstance) {
                              loginInstance.hide();
                            }
                            window.location.href = '{{ route("personal.account", ":user_id") }}'.replace(':user_id', userId);

                        } else {
                            alert('Ошибка проверки SMS: ' + response.message);
                        }
                    },
                    error: function(xhr, status, error) {
                        alert('Произошла ошибка при отправке запроса: ' + error);
                    }
                  });
            });
        });

    </script>
    @endpush