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
            <a class="catalog-breadcrumb__item" href="/catalog.html">Игры и развлечения</a>
            <a class="catalog-breadcrumb__item" href="/catalog.html">Деревянные конструкторы</a>
            <a class="catalog-breadcrumb__item" href="/catalog.html">Деревянный конструктор DROVO Трицератопс Брон</a>
        </div>
    </div>

    <livewire:catalog.product-detail :product="$product" :similarProducts="$similarProducts" />
 </div>

<!-- End Catalog page content -->

@endsection