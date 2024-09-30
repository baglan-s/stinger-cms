<div id="feedback">
    <div id="feedback-success" class="alert alert-success" role="alert">
        <p>Заявка успешно отправлена</p>
    </div>
    <div id="feedback-form" style='display:none;' class="col-xs-4 col-md-4 panel panel-default">
        <form class="form panel-body" role="form">
            <div class="form-group">
                <input id="feedback-name" class="form-control" name="name" required autofocus placeholder="Ваше имя" type="text" />
            </div>
            <div class="form-group">
                <input id="feedback-email" class="form-control" name="email" required autofocus placeholder="Ваш e-mail" type="email" />
            </div>
            <div class="form-group">
                <textarea id="feedback-message" class="form-control" name="body" required placeholder="Ваш текст..." rows="5"></textarea>
            </div>
            <button id="feedback-submit-btn" class="btn btn-primary pull-right" type="submit">
                Отправить
                <div id="preloader" class="preloader-btn"></div>
            </button>
        </form>
    </div>
    <div id="feedback-tab">Напишите нам</div>
</div>
@push('scripts')
<script type="text/javascript" src="{{ asset('assets/js/feedback.js') }}"></script>
<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#feedback-submit-btn').on('click', function(e) {
            e.preventDefault();
            var name = $('#feedback-name').val();
            var email = $('#feedback-email').val();
            var message = $('#feedback-message').val();
            var preloader = $('.preloader-btn');
            var feedbackSuccess = $('#feedback-success');

            $.ajax({
                url: '/send-feedback',
                method: 'POST',
                data: {
                    name: name,
                    email: email,
                    message: message
                },
                beforeSend: function() {
                    preloader.css('display', 'inline-block');
                },
                complete: function() {
                    preloader.hide();
                },
                success: function(response) {
                    if (response.status === 'success') {
                        $(feedbackSuccess).show().animate({
                            opacity: 1
                        }, 500);
                        setTimeout(function() {
                            $(feedbackSuccess).animate({
                                opacity: 0
                            }, 500, function() {
                                $(this).hide();
                            });
                        }, 3000);
                    };
                },
                error: function(xhr, status, error) {
                    alert('Произошла ошибка при отправке запроса: ' + error);;
                }
            });
        });
    });
</script>
@endpush