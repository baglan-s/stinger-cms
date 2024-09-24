
<div id="feedback">
    <div id="feedback-form" style='display:none;' class="col-xs-4 col-md-4 panel panel-default">
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
        <form wire:submit.prevent="submitForm" class="form panel-body" role="form">
            <div wire:loading wire:target="submitForm">
                <div class="alert alert-info">Отправка данных...</div>
            </div>
            <div wire:loading.remove wire:target="submitForm">
                <div class="form-group">
                    <input class="form-control @error('name') is-invalid @enderror" name="name" autofocus placeholder="Ваше имя" type="text" wire:model.prevent="name" />
                    @error('name') <span class="invalid-feedback">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <input class="form-control @error('email') is-invalid @enderror" name="email" autofocus placeholder="Ваш e-mail" type="email" wire:model.prevent="email" />
                    @error('email') <span class="invalid-feedback">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <textarea class="form-control @error('message') is-invalid @enderror" name="body" required placeholder="Ваш текст..." rows="5" wire:model.prevent="message"></textarea>
                    @error('message') <span class="invalid-feedback">{{ $message }}</span> @enderror
                </div>
                <button class="btn btn-primary pull-right" type="submit">Отправить</button>
            </div>
        </form>
    </div>
    <div id="feedback-tab">Напишите нам</div>
</div>

