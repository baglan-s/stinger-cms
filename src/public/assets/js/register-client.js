$(document).ready(function() {
    var preloader = $('.preloader-btn');
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
            var errorMessageEl = $('.the-personal-input__error');
            $(errorMessageEl).hide();
            $.ajax({
                url: '/user-register',
                method: 'POST',
                data: { 
                    name: name.val(),
                    last_name: lastName.val(),
                    phone: phone.val(),
                    email: email.val(),
                    city: city.val(),
                    password: password.val()
                },
                beforeSend: function () {
                  preloader.css('display', 'inline-block');
                },
                complete: function () {
                  preloader.hide();
                },
                success: function(response) {
                    if (response.status === 'success') {
                        $.each(requiredElements, function (index, value) {
                            value.attr('disabled');
                        });
                        window.location.href = '/personal-account/' + response.user_id;
                    } else {
                        alert('Ошибка при сохранении пользователя: ' + response.message);
                    }
                },
                error: function(xhr, status, error) {
                    if (xhr.status === 422) {
                        var errors = xhr.responseJSON.errors;
                        var errorMessage = '';
                        $.each(errors, function(field, messages) {
                            errorMessage = field + ": " + messages.join(', ') + '\n';
                            $('#'+field).next(errorMessageEl).text(errorMessage).show();
                        });
                    } else {
                        alert('Произошла ошибка при отправке запроса: ' + error);
                    }
                }
            });
        }
    });
});