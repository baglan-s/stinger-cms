@extends('layouts.main')

@section('content')

<!-- Start comparison -->
<div class="simple-page">
  <livewire:catalog.comparison>
</div>
<!-- End comparison -->
@endsection

@push('scripts')
<script>
  var cartsSwiper = new Swiper("#carts-carousel", {
    slidesPerView: 2,
    spaceBetween: 30,
    allowTouchMove: false,
    breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 10,
      },
      480: {
        slidesPerView: 2,
        spaceBetween: 15,
      },
      768: {
        slidesPerView: 2,
        spaceBetween: 25,
      },
      1180: {
        slidesPerView: 2,
        spaceBetween: 35,
      },
    },
    navigation: {
      nextEl: ".compareNext",
      prevEl: ".comparePrev",
    },
  });

  var characterSwiper = new Swiper("#characters__slide", {
    slidesPerView: 4,
    spaceBetween: 30,
    allowTouchMove: false,
    breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 10,
      },
      480: {
        slidesPerView: 2,
        spaceBetween: 15,
      },
      768: {
        slidesPerView: 3,
        spaceBetween: 40,
      },
    },
    navigation: {
      nextEl: ".compareNext",
      prevEl: ".comparePrev",
    },
  });

  document
    .querySelector(".simple-page__filter")
    .addEventListener("click", openFilter);

  document
    .querySelector(".mobile-filter__close")
    .addEventListener("click", closeFilter);

  function openFilter() {
    const filter = document.querySelector(".mobile-filter");
    filter.classList.add("opened-filter");
    document.body.classList.add("filterModalBg");
  }

  function closeFilter() {
    const filter = document.querySelector(".mobile-filter");
    filter.classList.remove("opened-filter");
    document.body.classList.remove("filterModalBg");
  }
</script>
@endpush