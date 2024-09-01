
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap-5.3.3/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/header.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/header-login-modal.css') }}">


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
                    <form class="modal-profile-auth__form">
                      <label class="base-input">
                        <input
                          placeholder="Номер телефона"
                          type="tel"
                          name="phone"
                          class="base-input__field base-input--primary phone-number"
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
                    <form class="modal-profile-auth__form">
                      <label class="base-input">
                        <input
                          placeholder="Имя"
                          type="text"
                          name="name"
                          class="base-input__field base-input--primary"
                        />
                        <span class="the-personal-input__error">Поле обязательно для заполнения</span>
                      </label>
                      <label class="base-input">
                        <input
                          placeholder="Фамилия"
                          type="text"
                          name="surname"
                          class="base-input__field base-input--primary"
                        />
                        <span class="the-personal-input__error">Поле обязательно для заполнения</span>
                      </label>
                      <label class="base-input">
                        <input
                          placeholder="Номер телефона"
                          type="tel"
                          name="phone"
                          class="base-input__field base-input--primary phone-number"
                        />
                        <span class="the-personal-input__error">Поле обязательно для заполнения</span>
                      </label>
                      <label class="base-input">
                        <input
                          placeholder="Электронная почта"
                          type="email"
                          name="email"
                          class="base-input__field base-input--primary"
                        />
                        <span class="the-personal-input__error">Поле обязательно для заполнения</span>
                      </label>
                      <label class="base-input">
                        <input
                          placeholder="Город"
                          type="text"
                          name="city"
                          class="base-input__field base-input--primary"
                        />
                        <span class="the-personal-input__error">Поле обязательно для заполнения</span>
                      </label>
                      <button
                        class="base-button outline modal-profile-auth__button base-button--v1 base-button--sm"
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

    <script type="text/javascript" src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap-5.3.3/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/jQuery-Mask-Plugin-master/jquery.mask.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/header.js') }}"></script>
    <script>
        $(document).ready(function () {
            // $(".phone-number").mask("+0 (000) 000-00-00");
            $("#mail-login").hide();
            
            $(".register-modal").hide();

            function toggleLogin(selector) {
            $(selector)
                .children("button.modal-profile-auth__state")
                .on("click", function () {
                $(".modal-profile-login").show();
                $(this).parent().hide();
                });
            }

            function toggleRegisterLogin(selector) {
            $(selector + "-btn").on("click", function () {
                $(this).parent().find("button").removeClass("active");
                $(selector + "-btn").addClass("active");
                $(".tab-content").hide();
                $(selector).show();
            });
            }

            $('.modal-profile-auth__form').children('button').on("click", function(event) {
                event.preventDefault();
                const input = $(this).parent().find("input");
                if (input.val() === '') {
                    input.attr('required', 'true');
                } else input.removeAttr('required');
            })

            toggleLogin("#phone-login");
            toggleLogin("#mail-login");
            toggleRegisterLogin(".login-modal");
            toggleRegisterLogin(".register-modal");
        });
    </script>