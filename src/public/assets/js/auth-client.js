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
    resendCodeBtn = $('.resend-code-btn');
    // For timer resend sms
    var duration = 60; // Таймер на 60 секунд
    var codeTimer = $('#timer');
    var resendSmsMessage = codeTimer.data('value');
    var preloaderResend = $('.preloader-resend-btn');
    var errorMessageEl = $('.the-personal-input__error');


    $(btnAuthSms).on('click', function(e) {
      e.preventDefault();
      if (!phoneNumber.val()) {
        phoneNumber.attr('required', true);
        return false;  
      }
      sendSmsAjax();
  });
    
    $(resendCodeBtn).on('click', function(e) {
        e.preventDefault();
        if (!phoneNumber.val()) {
          phoneNumber.attr('required', true);
          return false;  
        }
        resendSmsAjax();
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
              code: smsCode.val(),
              userId: userId
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
                    validateMessage($('.sms-code-inp'), response.message);
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
                    validateMessage($('.email-code-inp'), response.message);
                }
            },
            error: function(xhr, status, error) {
                alert('Произошла ошибка при отправке запроса: ' + error);
            }
          });
    });

    function sendSmsAjax() {
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
          checkSendedSmsResponse(response);
        },
        error: function(xhr, status, error) {
          notFoundData(xhr, error);
        }
      });
    }

    function resendSmsAjax() {
      $.ajax({
        url: '/send-sms',
        method: 'POST',
        data: { phone: phoneNumber.val() },
        beforeSend: function () {
          preloaderResend.css('display', 'inline-block');
        },
        complete: function () {
          preloaderResend.hide();
        },
        success: function(response) {
          checkSendedSmsResponse(response);
        },
        error: function(xhr, status, error) {
          notFoundData(xhr, error);
        }
      });
    }

    function checkSendedSmsResponse(response)
    {
      if (response.status === 'success') {
        smsCodeSection.show();
        confirmSmsCode.show();
        smsCode.show();
        btnAuthSms.hide();
        userId = response.user_id;
        $(codeTimer).show();
        $(resendCodeBtn).hide();
        startTimer(duration, codeTimer);
        $('#auth-phone').next(errorMessageEl).hide();
      } else {
        alert('Ошибка при отправке SMS: ' + response.message);
      }
    }

    // Проверим
    function notFoundData(xhr, error){
      var limitMessage;
      $(resendCodeBtn).hide();
      if (xhr.status) {
        var errors = xhr.responseJSON.errors;
        var errorMessage = '';
        $.each(errors, function(field, messages) {
            errorMessage = field + ": " + messages.join(', ') + '\n';
            $('#auth-'+field).next(errorMessageEl).text(errorMessage).show();
            return false;
        });
        if (limitMessage = xhr.responseJSON.message) {
          alert('Сообщение по лимиту: ' + limitMessage);
        }
      } else {
          alert('Произошла ошибка при отправке запроса: ' + error);
      }
    }

    function validateMessage(elem, message) {
      elem.next('.the-personal-input__error').text(message).show();
    }

    function startTimer(duration, display) {
      var timer = duration, minutes, seconds;
      var interval = setInterval(function () {
          minutes = Math.floor(timer / 60);
          seconds = timer % 60;

          minutes = minutes < 10 ? "0" + minutes : minutes;
          seconds = seconds < 10 ? "0" + seconds : seconds;

          display.text(resendSmsMessage + minutes + ":" + seconds);

          if (--timer < 0) {
              clearInterval(interval);
              $(resendCodeBtn).show();
              $(codeTimer).hide();
          }
      }, 1000);
    }
});