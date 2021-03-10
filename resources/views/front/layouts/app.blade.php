<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="index,follow">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', '21kclass.com')</title>

    <meta name="author" content="21kclass.com"/>
    <meta name="description" content="21kclass.com"/>
    <meta name="keywords" content="21kclass.com"/>
    <meta name="format-detection" content="telephone=no"/>

    <meta property="og:type" content="website"/>
    <meta property="og:title" content="21kclass.com"/>
    <meta property="og:description" content="21kclass.com"/>
    {{--    <meta property="og:image" content="{{ cdn_mix('/images/og.jpg') }}" />--}}
    <meta property="og:url" content="http://21kclass.com/"/>
    <meta property="fb:app_id" content=""/>

    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

    <link href="/css/vendor.min.css" rel="stylesheet">
    <link href="/css/theme.min.css" rel="stylesheet">
    <link href="/css/custom.css" rel="stylesheet">

    @yield('css')
</head>
<noscript>
    <div class="jsnotice">
        <div class="msg">In order to utilize all the features of 21K Class<br><strong>you need to enable JavaScript.</strong><a href="https://www.enable-javascript.com/" target="_blank">Read more</a></div>
    </div>
</noscript>
<body>
@yield('nav')
@yield('content')

<script src="/js/vendor.min.js"></script>

<script src="/js/theme.min.js"></script>

<script type="text/javascript">


    $(function () {


        @if(!Request::is('course/*'))
            var header = new HSHeader($('#header')).init();
        @endif


        var megaMenu = new HSMegaMenu($('.js-mega-menu'), {
            desktop: {
                position: 'left'
            }
        }).init();

        var unfold = new HSUnfold('.js-hs-unfold-invoker').init();

        var typed = $.HSCore.components.HSTyped.init(".js-text-animation");

        AOS.init({
            duration: 650,
            once: true
        });

        $('.js-validate').each(function () {
            $.HSCore.components.HSValidation.init($(this), {
                rules: {
                    confirmPassword: {
                        equalTo: '#signupPassword'
                    }
                }
            });
        });

        $('.js-animation-link').each(function () {
            var showAnimation = new HSShowAnimation($(this)).init();
        });

        $('.js-counter').each(function () {
            var counter = new HSCounter($(this)).init();
        });

        $('.js-go-to').each(function () {
            var goTo = new HSGoTo($(this)).init();
        });
    });

</script>

@yield('script')
</body>
</html>
