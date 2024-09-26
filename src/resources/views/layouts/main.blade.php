@inject('header', 'App\Http\Controllers\Partials\HeaderController')
@inject('footer', 'App\Http\Controllers\Partials\FooterController')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Nemo kz</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-5.3.3/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-11.1.4/swiper-bundle.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/slick-1.8.1/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick-1.8.1/slick-theme.css') }}">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css">
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/about.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/comparison.css') }}" />
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/contacts.css') }}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/shops.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slider.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/catalog.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/favorites.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/personal-account.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/header-login-modal.css') }}">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta3/dist/css/bootstrap-select.min.css">
    <script src="{{ asset('assets/js/swiper-11.1.4/swiper-bundle.min.js') }}"></script>
    @stack('styles')
</head>

<body>
    {!! $header->render() !!}
    @include('partials.auth')

    @yield('content')

    {!! $footer->render() !!}

    <livewire:city-list />
    <x-mobile-panel />
    <x-catalog.mobile-catalog />

    <script type="text/javascript" src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap-5.3.3/bootstrap.bundle.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/slick-1.8.1/slick.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jQuery-Mask-Plugin-master/jquery.mask.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/header.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/catalog.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta3/dist/js/bootstrap-select.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta3/dist/js/i18n/defaults-*.min.js"></script>
    <script type="text/javascript" src="{{ asset('assets/js/custom-select.js') }}"></script>
    <script>
        $(document).ready(function() {
            $("#phone").mask("+0 (000) 000-00-00");

            $(".the-personal-user-card__birthday").click((event) => {
                event.preventDefault();
                $(".the-personal-user-card__group").show();
                $(".the-personal-user-card__birthday").hide();
            })

            $(".the-personal-navigation__title").click(() => {
                $(".the-personal-navigation__title").toggleClass('opened')
                $(".the-personal-navigation__list").toggleClass('opened')
            });

            // Login, register modal
            // $(".phone-number").mask("+0 (000) 000-00-00");
            $("#mail-login").hide();

            $(".register-modal").hide();

            function toggleLogin(selector) {
                $(selector)
                    .children("button.modal-profile-auth__state")
                    .on("click", function() {
                        $(".modal-profile-login").show();
                        $(this).parent().hide();
                    });
            }

            function toggleRegisterLogin(selector) {
                $(selector + "-btn").on("click", function() {
                    $(this).parent().find("button").removeClass("active");
                    $(selector + "-btn").addClass("active");
                    $(".tab-content").hide();
                    $(selector).show();
                });
            }

            // $('.modal-profile-auth__form').children('button').on("click", function(event) {
            //     // event.preventDefault();
            //     const input = $(this).parent().find("input");
            //     if (input.val() === '') {
            //         input.attr('required', 'true');
            //     } else input.removeAttr('required');
            // })

            toggleLogin("#phone-login");
            toggleLogin("#mail-login");
            toggleRegisterLogin(".login-modal");
            toggleRegisterLogin(".register-modal");
            // End login, register modal
        });
    </script>
    {{-- <script type="text/javascript" src="{{ asset('assets/js/header-catalog.js') }}"></script> --}}
    @stack('scripts')
    <script>
        (function(d, s, id) {
            var js, kjs;
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://kaspi.kz/kaspibutton/widget/ks-wi_ext.js';
            kjs = document.getElementsByTagName(s)[0]
            kjs.parentNode.insertBefore(js, kjs);
        }(document, 'script', 'KS-Widget'));
    </script>
</body>

</html>
