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
        var btnAuthEmail = $('.btn-auth-email');
        var emailCodeSection = $('#email-code-section');
        var confirmEmailCode = $('#confirm-email-code');
        var emailCode = $('.email-code-inp');
        const authEmailInput = $('#auth-email');
        var emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        if (!authEmailInput.val()) {
          authEmailInput.attr('required', true);
          return false;  
        }
        if (!emailPattern.test(authEmailInput.val())) {
          authEmailInput.next('.the-personal-input__error').text('email должен быть формата example@example.com');
          return false;
        }
        
        $.ajax({
            url: '/send-code-email',
            method: 'POST',
            data: { email: authEmailInput.val() },
            beforeSend: function () {
              preloader.css('display', 'inline-block');
            },
            complete: function () {
              preloader.hide();
            },
            success: function(response) {
                if (response.status === 'success') {
                    emailCodeSection.show();
                    confirmEmailCode.show();
                    emailCode.show();
                    btnAuthEmail.hide();
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
                    window.location.href = '/personal-account/' + userId;

                } else {
                    alert('Ошибка проверки SMS: ' + response.message);
                }
            },
            error: function(xhr, status, error) {
                alert('Произошла ошибка при отправке запроса: ' + error);
            }
          });
    });

    $('#confirm-email-code').on('click', function (e) {
        e.preventDefault();
        const email = $('#auth-email').val();
        var emailCode = $('.email-code-inp');
          $.ajax({
            url: '/cofirm-email-code',
            method: 'POST',
            data: { 
              email: email,
              code: emailCode.val()
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
                    btnAuthEmail.show();
                    emailCode.hide();
                    
                    confirmSmsCode.hide();
                    if (loginInstance) {
                      loginInstance.hide();
                    }
                    window.location.href = '/personal-account/' + userId;

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