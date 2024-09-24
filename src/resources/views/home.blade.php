@extends('layouts.main')

@section('content')
    

<!-- Home page content -->
<div class="main-page-content-section" id="web">
    <div class="wrapper-inner slider-container">
        <div class="main-page-content-section__inner">
            <div class="main-page-content-section-inner">
                <x-main-slider />
                <x-catalog.weekly-product />
            </div>
        </div>
    </div>
    <x-video-review />
    <x-partners />
    <div class="wrapper-inner">
        <!-- Novelty -->
        <div class="main-page-content-section-products__block">
            <div class="main-inner-products-block">
                <div class="inner-products-block">
                    <x-catalog.novelty />
                    <x-catalog.popular-products />
                    <x-catalog.discounted-products />
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End home page content -->
@endsection