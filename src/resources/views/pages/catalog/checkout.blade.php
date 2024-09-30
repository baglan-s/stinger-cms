@extends('layouts.main')

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/cart.css') }}">
@endpush

@section('content')


<livewire:catalog.checkout>


@endsection

@push('scripts')
<script type="text/javascript" src="{{ asset('assets/js/cart.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/cart-auth.js') }}"></script>
@endpush