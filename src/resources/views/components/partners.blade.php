@if ($gallery && $gallery->images->count() > 0)

<div class="main-page-content-section__brands">
    <div id="brands-carousel" class="brands-inner">
        <div class="swiper-wrapper">
            @foreach ($gallery->images as $partner)

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

@push('scripts')
<script>
    var swiper = new Swiper("#brands-carousel", {
        slidesPerView: 4,
        spaceBetween: 30,
        breakpoints: {
            320: {
                slidesPerView: 3,
                spaceBetween: 10,
            },

            768: {
                slidesPerView: 4,
                spaceBetween: 25,
            },
            991: {
                slidesPerView: 4,
                spaceBetween: 25,
            }
        },
        on: {
            init: function() {
                setEqualHeight(this);
            },
            resize: function() {
                setEqualHeight(this);
            }
        },
        autoplay: {
            delay: 3000,
        },
        loop: true,
    });

    function setEqualHeight(swiper) {
        let maxHeight = 0;

        swiper.slides.forEach(function(slide) {
            maxHeight = Math.max(maxHeight, slide.offsetHeight);
        });

        swiper.slides.forEach(function(slide) {
            slide.style.height = maxHeight + 'px';
        });
    }
</script>
@endpush