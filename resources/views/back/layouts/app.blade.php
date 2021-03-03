<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="index,nofollow">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', '21kclass.com Admin')</title>
    <meta name="description" content="21kclass.com Admin"/>
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    <link href="{{ cdn_mix('/css/admin-app.css') }}" rel="stylesheet">
    @yield('css')
</head>
<noscript>
    <div class="jsnotice">
        <div class="msg">In order to utilize all the features of 21K Class<br><strong>you need to enable JavaScript.</strong><a href="https://www.enable-javascript.com/" target="_blank">Read more</a></div>
    </div>
</noscript>
@yield('content')
<script type="text/javascript" src="{{ cdn_mix('js/tocb/manifest.js') }}"></script>
<script type="text/javascript" src="{{ cdn_mix('js/tocb/vendor.js') }}"></script>
<script>window.MSInputMethodContext && document.documentMode && document.write('<script src="https://cdn.jsdelivr.net/npm/ie11-custom-properties@latest/ie11CustomProperties.js"><\x2fscript>');</script>
<script type="text/javascript" src="{{ cdn_mix('js/tocb/app.js') }}"></script>
@yield('script')
</html>
