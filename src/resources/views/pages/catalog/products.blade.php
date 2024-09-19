@extends('layouts.main')

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/catalogs.css') }}">
@endpush

@section('content')


<!-- Start Catalog page content -->
<div class="catalog">
    <div class="h-container">
        <div class="catalog-breadcrumbs">
            <a class="catalog-breadcrumb__item" href="/">Главная</a>
            <a class="catalog-breadcrumb__item" href="/catalog.html">Каталог</a>
        </div>
    </div>
    

    <livewire:catalog.product-filter-mobile />


    
    <div class="catalog-category h-container">
        <livewire:catalog.product-filter />

        <livewire:catalog.product-list :filter="$filter" />
    </div> 


 </div>

<!-- End Catalog page content -->

@endsection