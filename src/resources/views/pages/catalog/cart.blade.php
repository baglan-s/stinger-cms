@extends('layouts.main')

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/cart.css') }}">
@endpush

@section('content')


<livewire:catalog.cart>


@endsection

@push('scripts')
<script type="text/javascript" src="{{ asset('assets/js/cart.js') }}"></script>
@endpush