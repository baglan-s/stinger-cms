<div class="cart-contact ">
    <h3>Выберите тип пользователя</h3>
    <ul class="nav nav-tabs cart-contact-list" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="cart-contact-btn active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="false">Есть регистрация</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="cart-contact-btn" id="specification-tab" data-bs-toggle="tab" data-bs-target="#specification" type="button" role="tab" aria-controls="specification" aria-selected="true">Новый пользователь</button>
        </li>
    </ul>


    <div class="tab-content">

        <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
            <div class="cart-contact-form-new">
                <div class="form-floating mb-2">
                    <input type="text" class="form-control" id="cartPhoneAuth" placeholder="Телефон">
                    <label for="cartPhoneAuth">Телефон</label>
                    <div class="auth-phone-required-feedback">Поле Телефон обязательно для заполнения.</div>
                    <div class="auth-phone-invalid-feedback">Ошибка отправки смс</div>
                    <div class="auth-phone-not-found-feedback">Пользователь не нейден</div>
                </div>
                <div class="form-floating hidden-sms mb-2">
                    <input type="text" class="form-control" id="cartSMS" placeholder="СМС-код">
                    <label for="cartSMS">СМС-код</label>
                    <div class="sms-required-feedback">Поле СМС-код обязательно для заполнения.</div>
                    <div class="sms-invalid-feedback">Произошла ошибка либо введен некорректный код.</div>
                </div>
                <div class="cart-sms-timer-block">
                    <span class="cart-sms-timer-text">
                        Отправить смс-код повторно через:  
                        <span class="cart-sms-timer-time">1:00</span>
                    </span>
                    <button class="cart-sms-timer-btn">Отправить повторно</button>
                </div>
                <button id="sendSmsBtn" type="submit">Продолжить</button>
                <button id="checkSmsBtn" type="submit">Войти</button>
            </div>
        </div>

        <div class="tab-pane fade " id="specification" role="tabpanel" aria-labelledby="specification-tab">
            <div class="cart-contact-form-new">
                <div class="form-floating">
                    <input type="text" class="form-control" id="cartRegName" placeholder="Имя">
                    <label for="cartRegName">Имя</label>
                    <div class="invalid-feedback required">Поле Имя обязательно для заполнения.</div>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" id="cartRegLastName" placeholder="Фамилия">
                    <label for="cartRegLastName">Фамилия</label>
                    <div class="invalid-feedback required">Поле Фамилия обязательно для заполнения.</div>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" id="cartRegPhone" placeholder="Телефон">
                    <label for="cartRegPhone">Телефон</label>
                    <div class="invalid-feedback required">Поле Телефон обязательно для заполнения.</div>
                    <div class="invalid-feedback unique">Такой телефон уже существует.</div>
                </div>
                <div class="form-floating">
                    <input type="email" class="form-control" id="cartRegEmail" placeholder="Email">
                    <label for="cartRegEmail">Email</label>
                    <div class="invalid-feedback required">Поле Email обязательно для заполнения.</div>
                    <div class="invalid-feedback unique">Такой Email уже существует.</div>
                    <div class="invalid-feedback invalid">Не корректный Email.</div>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="cartRegPassword" placeholder="Пароль">
                    <label for="cartRegPassword">Пароль</label>
                    <div class="invalid-feedback required">Поле Пароль обязательно для заполнения.</div>
                    <div class="invalid-feedback confirm">Пароли не совпадают.</div>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="cartRegPasswordConfirm" placeholder="Подтверждение пароля">
                    <label for="cartRegPasswordConfirm">Подтверждение пароля</label>
                    <div class="invalid-feedback"></div>
                </div>
                <button class="base-button register">Зарегистрироваться</button>
            </div>
        </div>
    </div>
</div>