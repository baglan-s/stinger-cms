@if ($gallery && $gallery->images->count() > 0)

<div class="main-page-content-section__brands">
    <div id="brands-carousel" class="brands-inner">
        <div class="swiper-wrapper">
            @foreach ($partners->images as $partner)

            <div class="swiper-slide">
                <a href="#">
                    <img src="{{ asset("storage/{$partner->path}") }}" alt="">
                </a>
            </div>

            @endforeach
        </div>
    </div>
</div>

@endif