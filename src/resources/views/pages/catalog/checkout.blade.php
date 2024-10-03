@extends('layouts.main')

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/cart.css') }}">
@endpush

@push('headScripts')
<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&apikey={{ config('services.yandex.key') }}&suggest_apikey={{ config('services.yandex.geo_suggest_key') }}"></script>
@endpush

@section('content')


<livewire:catalog.checkout>


@endsection

@push('scripts')
<script type="text/javascript" src="{{ asset('assets/js/cart.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/cart-auth.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/cart-register.js') }}"></script>
@endpush