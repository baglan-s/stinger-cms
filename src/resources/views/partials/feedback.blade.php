
<div id="feedback">
    <div id="feedback-form" style='display:none;' class="col-xs-4 col-md-4 panel panel-default">
        <form method="POST" action="/feedback" class="form panel-body" role="form">
            <div class="form-group">
                <input class="form-control" name="email" autofocus placeholder="Ваш e-mail" type="email" />
            </div>
            <div class="form-group">
                <textarea class="form-control" name="body" required placeholder="Ваш текст..." rows="5"></textarea>
            </div>
            <button class="btn btn-primary pull-right" type="submit">Отправить</button>
        </form>
    </div>
    <div id="feedback-tab">Напишите нам</div>
</div>
@push('scripts')
<script type="text/javascript" src="{{ asset('assets/js/feedback.js') }}"></script>
@endpush

