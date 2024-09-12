<x-mail::message>
# Добрый день, {{ $data['name'] }}

Ваш код авторизации: <strong>{{ $data['code'] }}</strong>
<br>
Используйте его на сайте https://nemo.kz

Спасибо,<br>
{{ config('app.name') }}
</x-mail::message>
