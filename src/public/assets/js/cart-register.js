$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    const cartRegNameInput = $('#cartRegName');
    const cartRegLastNameInput = $('#cartRegLastName');
    const cartRegPhoneInput = $('#cartRegPhone');
    const cartRegEmailInput = $('#cartRegEmail');
    const cartRegPasswordInput = $('#cartRegPassword');
    const cartRegPasswordConfirmInput = $('#cartRegPasswordConfirm');
    const cartRegSubmitBtn = $('.base-button.register');
    const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

    cartRegPhoneInput.mask("+7 (000) 000-00-00");

    cartRegSubmitBtn.click(e => {
        if (!validateForm()) {
            return false;
        }

        $.ajax({
            url: '/user-register',
            method: 'POST',
            data: { 
                name: cartRegNameInput.val(),
                last_name: cartRegLastNameInput.val(),
                phone: cartRegPhoneInput.val(),
                email: cartRegEmailInput.val(),
                password: cartRegPasswordConfirmInput.val()
            },
            beforeSend: function () {
                cartRegSubmitBtn.attr('disabled', true);
            },
            complete: function () {
                cartRegSubmitBtn.attr('disabled', false);
            },
            success: function(response) {
                if (response.status === 'success') {
                    window.location.reload();
                } else {
                    console.log('Ошибка при сохранении пользователя: ' + response.message);
                }
            },
            error: function(xhr, status, error) {
                if (xhr.status === 422) {
                    var errors = xhr.responseJSON.errors;
                    var errorMessage = '';
                    $.each(errors, function(field, messages) {
                        errorMessage += field + ": " + messages.join(', ') + '\n';
                        errorMessage += '\n';
                    });
                    cartRegPasswordConfirmInput.text(errorMessage)
                    cartRegPasswordConfirmInput.siblings('.invalid-feedback').show();
                    setTimeout(() => {
                        cartRegPasswordConfirmInput.siblings('.invalid-feedback').hide();
                    }, 3000)
                } else {
                    console.log('Произошла ошибка при отправке запроса: ' + error);
                }
            }
        });
    })


    function validateForm() {
        let isValid = true;

        if (!cartRegNameInput.val()) {
            cartRegNameInput.siblings('.invalid-feedback.required').show();
            isValid = false;
            setTimeout(() => {
                cartRegNameInput.siblings('.invalid-feedback.required').hide();
            }, 3000)
        }

        if (!cartRegLastNameInput.val()) {
            cartRegLastNameInput.siblings('.invalid-feedback.required').show();
            isValid = false;
            setTimeout(() => {
                cartRegLastNameInput.siblings('.invalid-feedback.required').hide();
            }, 3000)
        }

        if (!cartRegPhoneInput.val()) {
            cartRegPhoneInput.siblings('.invalid-feedback.required').show();
            isValid = false;
            setTimeout(() => {
                cartRegPhoneInput.siblings('.invalid-feedback.required').hide();
            }, 3000)
        }

        if (!cartRegEmailInput.val()) {
            cartRegEmailInput.siblings('.invalid-feedback.required').show();
            isValid = false;
            setTimeout(() => {
                cartRegEmailInput.siblings('.invalid-feedback.required').hide();
            }, 3000)
        }

        if (!emailPattern.test(cartRegEmailInput.val())) {
            cartRegEmailInput.siblings('.invalid-feedback.invalid').show();
            isValid = false;
            setTimeout(() => {
                cartRegEmailInput.siblings('.invalid-feedback.invalid').hide();
            }, 3000)
        }

        if (!cartRegPasswordInput.val()) {
            cartRegPasswordInput.siblings('.invalid-feedback.required').show();
            isValid = false;
            setTimeout(() => {
                cartRegPasswordInput.siblings('.invalid-feedback.required').hide();
            }, 3000)
        }

        if (!cartRegPasswordConfirmInput.val()) {
            cartRegPasswordInput.siblings('.invalid-feedback.confirm').show();
            isValid = false;
            setTimeout(() => {
                cartRegPasswordInput.siblings('.invalid-feedback.confirm').hide();
            }, 3000)
        }

        if (cartRegPasswordInput.val() != cartRegPasswordConfirmInput.val()) {
            cartRegPasswordInput.siblings('.invalid-feedback.confirm').show();
            isValid = false;
            setTimeout(() => {
                cartRegPasswordInput.siblings('.invalid-feedback.confirm').hide();
            }, 3000)
        }

        return isValid;
    }
});