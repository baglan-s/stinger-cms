var galleryThumbs = new Swiper('.gallery-thumbs', {
  slidesPerView: 5,
  loop: true,
  freeMode: true,
  watchSlidesVisibility: true,
  watchSlidesProgress: true,
    direction: 'vertical'
});
var galleryTop = new Swiper('.gallery-top', {
  spaceBetween: 10,
  loop: true,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  thumbs: {
    swiper: galleryThumbs,
  },
});



const rangeInput = document.querySelectorAll(".price-range__inputs input"),
  priceInput = document.querySelectorAll(".catalog-price__range-inputs input"),
  range = document.querySelector(".price-range__progress");
let priceGap = 1000;

priceInput.forEach((input) => {
  input.addEventListener("input", (e) => {
    let minPrice = parseInt(priceInput[0].value),
      maxPrice = parseInt(priceInput[1].value);

    if (maxPrice - minPrice >= priceGap && maxPrice <= rangeInput[1].max) {
      if (e.target.className === "input-min") {
        rangeInput[0].value = minPrice;
        range.style.left = (minPrice / rangeInput[0].max) * 100 + "%";
      } else {
        rangeInput[1].value = maxPrice;
        range.style.right = 100 - (maxPrice / rangeInput[1].max) * 100 + "%";
      }
    }
  });
});

rangeInput.forEach((input) => {
  input.addEventListener("input", (e) => {
    let minVal = parseInt(rangeInput[0].value),
      maxVal = parseInt(rangeInput[1].value);

    if (maxVal - minVal < priceGap) {
      if (e.target.className === "range-min") {
        rangeInput[0].value = maxVal - priceGap;
      } else {
        rangeInput[1].value = minVal + priceGap;
      }
    } else {
      priceInput[0].value = minVal;
      priceInput[1].value = maxVal;
      range.style.left = (minVal / rangeInput[0].max) * 100 + "%";
      range.style.right = 100 - (maxVal / rangeInput[1].max) * 100 + "%";
    }
  });
});



$(document).ready(function() {
    $('.catalog-control').click(function(event) {
        event.stopPropagation();
        $('.catalog-control__dropdown').addClass('is-active');
    });

    $('.catalog-control__item').click(function() {
        $('.catalog-control__item').removeClass('is-active');
        $(this).addClass('is-active');
        var selectedText = $(this).find('span.d-none.d-sm-block').text();
        $('.catalog-control span').text(selectedText);
        $('.catalog-control__dropdown').removeClass('is-active');
    });

    $(document, '.catalog-control__item').click(function(event) {
        if (!$(event.target).closest('.catalog-control__dropdown').length) {
            $('.catalog-control__dropdown').removeClass('is-active');
        }
    });

    $('.product-favorite').click(function() {
      let svg = $(this).find('svg');

      if ($(this).hasClass('active')) {
          $(this).removeClass('active');
          svg.css('animation', 'none'); 
          setTimeout(function() {
              svg.css('animation', 'prod-anime 0.3s'); 
          }, 10);
      } else {
          $(this).addClass('active');
          svg.css('animation', 'none'); 
          setTimeout(function() {
              svg.css('animation', 'prod-anime 0.3s'); 
          }, 10);
      }
  });

$('.text-skiper.text-skip').click(function() {
  var parent = $(this).closest('.product-content__description, .product-content__property');
  var content = parent.find('.product-content__text');
  var gradientBlock = parent.find('.gradient-block');
  var skipButton = parent.find('.text-skiped');

  content.addClass('expanded');
  $(this).hide();
  skipButton.show();
  gradientBlock.hide(); 
});

$('.text-skiper.text-skiped').click(function() {
  var parent = $(this).closest('.product-content__description, .product-content__property');
  var content = parent.find('.product-content__text');
  var gradientBlock = parent.find('.gradient-block');
  var skipButton = parent.find('.text-skip');

  content.removeClass('expanded');
  $(this).hide();
  skipButton.show();
  gradientBlock.show(); 
});



$('.catalog-filter').on('click', function() {
  $('.mob-menu-wrap__head').toggleClass('this-active');
  $('.head-hamburger').toggleClass('this-open');
});

$('.mob-menu-wrap__hamburger').on('click', function() {
  $('.mob-menu-wrap__head, .mob-menu-wrap-search__head').removeClass('this-active');
  $('.head-hamburger').removeClass('this-open');

  $('.inner-header-hamburger').toggleClass('this-closed');
  $('.catalog-mob-menu-wrap__body').removeClass('this-active');
  $("body").css("overflow", "");
});

$('.catalog-filter').on('click', function() {
  $(this).removeClass('this-closed');
  $('.catalog-mob-menu-wrap__body').toggleClass('this-active');
  $("body").css("overflow", "hidden");
});



})