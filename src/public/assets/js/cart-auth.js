$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // Cart auth fields
    const timerDuration = 60;
    const cartPhoneAuthInput = $('#cartPhoneAuth');
    const cartSmsInputBlock = $('.form-floating.hidden-sms');
    const cartSmsInput = $('#cartSMS');
    const sendSmsBtn = $('#sendSmsBtn');
    const checkSmsBtn = $('#checkSmsBtn');
    const phoneInvalidMessage = $('.auth-phone-invalid-feedback');
    const phoneRequiredMessage = $('.auth-phone-required-feedback');
    const phoneNotFoundMessage = $('.auth-phone-not-found-feedback');
    const smsRequiredMessage = $('.sms-required-feedback');
    const smsInvalidMessage = $('.sms-invalid-feedback');
    const cartSmsTimerTxt = $('.cart-sms-timer-text');
    const cartSmsTimerTime = $('.cart-sms-timer-time');
    const resendCodeBtn = $('.cart-sms-timer-btn');
    var userId = null;
    cartPhoneAuthInput.mask("+7 (000) 000-00-00");
    cartSmsInput.mask("0000");

    sendSmsBtn.on('click', function (e) {
      e.preventDefault();

      if (!cartPhoneAuthInput.val()) {
        phoneRequiredMessage.show();
        setTimeout(() => {
          phoneRequiredMessage.hide();
        }, 3000)
        return false;  
      }
      
      sendSms();
    })

    resendCodeBtn.on('click', function (e) {
      e.preventDefault();
      sendSms(true);
    })

    checkSmsBtn.on('click', function (e) {
      e.preventDefault();

      if (!cartSmsInput.val()) {
        smsRequiredMessage.show();
        setTimeout(() => {
          smsRequiredMessage.hide();
        }, 3000)
        return false;  
      }

      confirmSms();
    });

    function sendSms(reseend = false) {
      $.ajax({
        url: '/send-sms',
        method: 'POST',
        data: { phone: cartPhoneAuthInput.val() },
        success: function(response) {
          if (response.status === 'success') {
            if (!reseend) {
              sendSmsBtn.hide();
              checkSmsBtn.show();
              cartSmsInputBlock.show();
              cartSmsInput.focus();
            }

            userId = response.user_id;
            startTimer(timerDuration, cartSmsTimerTime, resendCodeBtn);
          } else {
            phoneInvalidMessage.show();
            setTimeout(() => {
              phoneInvalidMessage.hide();
            }, 3000)
            console.log('Ошибка при отправке SMS:' + response.message);
          }
        },
        error: function(xhr, status, error) {
          phoneNotFoundMessage.show();
          setTimeout(() => {
            phoneNotFoundMessage.hide();
          }, 3000)

          console.log('Произошла ошибка при отправке запроса:' + error);
        }
      });
    }

    function startTimer(duration, displayElement, resendBtn) {
      var timer = duration, minutes, seconds;
      resendBtn.hide();
      cartSmsTimerTxt.show();

      var interval = setInterval(function () {
          minutes = Math.floor(timer / 60);
          seconds = timer % 60;

          minutes = minutes < 10 ? "0" + minutes : minutes;
          seconds = seconds < 10 ? "0" + seconds : seconds;

          displayElement.text(minutes + ":" + seconds);

          if (--timer < 0) {
              clearInterval(interval);
              resendBtn.show();
              cartSmsTimerTxt.hide();
          }
      }, 1000);
    }

    function confirmSms() {
      $.ajax({
        url: '/cofirm-sms',
        method: 'POST',
        data: { 
          phone: cartPhoneAuthInput.val(),
          code: cartSmsInput.val(),
          userId: userId
        },
        beforeSend: function () {
          checkSmsBtn.attr('disabled', true);
        },
        complete: function () {
          checkSmsBtn.attr('disabled', false);
        },
        success: function(response) {
            if (response.status === 'success') {
                window.location.reload();
            } else {
              smsInvalidMessage.show();
              setTimeout(() => {
                smsInvalidMessage.hide();
              }, 3000)
            }
        },
        error: function(xhr, status, error) {
          smsInvalidMessage.show();
          setTimeout(() => {
            smsInvalidMessage.hide();
          }, 3000)
          console.log('Произошла ошибка при отправке запроса: ' + error);
        }
      });
    }
    
});