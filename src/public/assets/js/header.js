$(document).ready(function() {
    // $('.header__button').click(function() {
    //     $('.catalog-in__header').toggleClass('when-click-visible');
    // });

    $('.header-mobile__hamburger').on('click', function() {
        $('.mob-menu-wrap__head').toggleClass('this-active');
        $('.head-hamburger').toggleClass('this-open');
    });

    $('.mob-menu-wrap__hamburger').on('click', function() {
        $('.mob-menu-wrap__head, .mob-menu-wrap-search__head').removeClass('this-active');
        $('.head-hamburger').removeClass('this-open');

        $('.inner-header-hamburger').toggleClass('this-closed');
        $('.mob-menu-wrap__body').removeClass('this-active');
        $("body").css("overflow", "");
    });

    $('.inner-header-hamburger').on('click', function() {
        $(this).removeClass('this-closed');
        $('.mob-menu-wrap__body').toggleClass('this-active');
        $("body").css("overflow", "hidden");
    });

    $('.mob-header-city__input').on('click', function() {
        elemToggleClass('.mob-header-city__choose-city', 'when-slide-down-enter-is-active');
    });

    $('.mobile-nav-panel__catalog').on('click', function() {
        $('.accor').toggleClass('this-active');
        $("body").toggleClass("el-overflow-hidden");
    });

    let isVisibleMobileSearchResults = false;
    $('.header-mobile-search__input').on('click', function() {
        $('.mobile-search-results').fadeIn();

        if (isVisibleMobileSearchResults) {
            elemFadeOut('.mobile-search-results');
        }

        isVisibleMobileSearchResults = !isVisibleMobileSearchResults;
    });

    $(document).click(function(event) {
        if (!$(event.target).closest('.catalog-in__header, .header__button, .header-mobile-search__input').length) {
            $('.catalog-in__header').removeClass('when-click-visible');
            elemFadeOut('.mobile-search-results');
            isVisibleMobileSearchResults = false;
        }
    });

    $('.header__button, .desktop-header-catalog__menu').hover(
        function() {
            $('.desktop-header-catalog__menu').css('display', 'block');
        },
        function() {
            $('.desktop-header-catalog__menu').css('display', 'none');
        }
    );

    function elemFadeOut(className) {
        $(className).fadeOut();
    }

    $('.mob-header-city__item').on('click', function() {
        var selectedCity = $(this).text();

        $('.mob-header-city__input').val(selectedCity);
        elemToggleClass('.mob-header-city__choose-city', 'when-slide-down-enter-is-active');
    });

    function elemToggleClass(elem, className) {
        $(elem).toggleClass(className);
    }
})