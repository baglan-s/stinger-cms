@extends('layouts.main')

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/catalogs.css') }}">
@endpush

@section('content')

<div class="catalog">
    <div class="h-container">
        <x-breadcrumbs :breadcrumbs="$breadcrumbs" />
    </div>

    <div class="h-container">
        <h1 class="catalog-title">Категории</h1>
    </div>

    <div class="container">
        <div class="row">
            @if ($categories->count() > 0)
                @foreach ($categories as $category)

                    <div class="col-lg-3 col-md-2 col-12">
                        <a href="{{ route('catalog.categories.show', ['slug' => $category->translation()?->slug]) }}" class="category-block">
                            <div class="category-image">
                                <img src="{{ asset($category->getImage()) }}" alt="">
                            </div>
                            <p class="category-name">{{ $category->translation()?->name }}</p>
                        </a>
                    </div>

                @endforeach
            @endif
        </div>
    </div>
</div>

@endsection