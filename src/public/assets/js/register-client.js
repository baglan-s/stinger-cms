$(document).ready(function() {
    var name = $('#name');
    var lastName = $('#last_name');
    var phone = $('#phone');
    var email = $('#email');
    var city = $('#city');
    var password = $('#password');
    var passwordConfirmation = $('#password_confirmation');
    phone.mask("+7 (000) 000-00-00");
    var emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    var passwordPattern = /^.{8,}$/;
    var requiredElements = [
        name,
        lastName,
        phone,
        email,
        city,
        password,
        passwordConfirmation
    ];

    $('#register-btn').on('click', function (e) {
        e.preventDefault();
        var validate = true;
        $.each(requiredElements, function (index, value) {
            if (!value.val()) {
                value.attr('required', true);
                validate = false;
            }
        });
        if (!emailPattern.test(email.val())) {
            email.next('.the-personal-input__error').text('email должен быть формата example@example.com').show();
            return false;
        };
        if (!passwordPattern.test(password.val())) {
            password.next('.the-personal-input__error').text('Пароль должен быть минимум 8 символов.').show();
            return false;
        };
        if (password.val() !== passwordConfirmation.val()) {
            password.next('.the-personal-input__error').text('Пароль не совпадает').show();
            passwordConfirmation.next('.the-personal-input__error').text('Пароль не совпадает').show();
            return false;
        }
        if (validate) {
            $('.the-personal-input__error').hide();
            alert(123);
        }
    });
});