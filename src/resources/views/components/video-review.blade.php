<!-- Video -->
@if ($videoReviews->count() > 0)
<div class="container">
    <h2 class="inner-products__title inner-page-title">Видеообзоры</h2>
    <div class="swiper videoSwiper">
        <div class="swiper-wrapper">

            @foreach ($videoReviews as $videoReview)

                <div class="swiper-slide">
                    <div class="blog_card">
                        <div class="blog_video">
                            <img alt="" loading="lazy" width="480" height="360" decoding="async" data-nimg="1" class="img" src="https://i.ytimg.com/vi/MaoA2vqbqQw/hqdefault.jpg" style="color: transparent; object-fit: cover;">
                            <a target="_blank" href="{{ $videoReview->link }}">
                                <div class="blog_video-play">
                                    <svg width="21" height="26" viewBox="0 0 21 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.27849 2.25039C2.81269 1.95099 2.19999 2.28549 2.19999 2.83929V22.9106C2.19999 23.4644 2.81269 23.7989 3.27849 23.4994L18.8896 13.4638C19.3182 13.1882 19.3182 12.5617 18.8896 12.2861L3.27849 2.25039ZM0.799988 2.83929C0.799988 1.17779 2.63799 0.174386 4.03559 1.07279L19.6466 11.1085C20.9325 11.9351 20.9325 13.8148 19.6466 14.6414L4.03559 24.6771C2.63799 25.5755 0.799988 24.5721 0.799988 22.9106V2.83929Z" fill="black"></path>
                                    </svg>
                                </div>
                            </a>
                        </div>
                        <div class="blog_card-content">
                            <div class="blog_card-title">
                                {{ $videoReview->translation()?->title }}
                            </div>
                        </div>
                    </div>
                </div>

            @endforeach

                
        </div>
    </div>
</div>
@endif
<!-- End video -->
@push('scripts')
<script>
var swiper = new Swiper(".videoSwiper", {
        slidesPerView: 4,
        spaceBetween: 30,
        autoplay: {
            delay: 5000,
        },
        loop: true,
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
    });
</script>
@endpush