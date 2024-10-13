@extends('layouts.main')

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/cart.css') }}">
@endpush

@push('headScripts')
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
@endpush

@section('content')


<livewire:catalog.cart>


@endsection

@push('scripts')
<script type="text/javascript" src="{{ asset('assets/js/cart.js') }}"></script>
@endpush