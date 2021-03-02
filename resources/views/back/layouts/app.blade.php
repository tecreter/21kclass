<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="index,nofollow">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', '호텔 포코 관리자')</title>
    <meta name="description" content="호텔 포코 관리자"/>
    <link rel="shortcut icon" type="image/x-icon" href="{{ cdn_mix('/images/favicon.ico') }}">
    <link href="{{ cdn_mix('/css/admin-app.css') }}" rel="stylesheet">
    @yield('css')
</head>
<noscript><div class="jsnotice"><div class="msg">KOLON-LSI-CRM의 기능을 모두 활용하기 위해서는<br><strong>자바스크립트 활성화가 필요합니다.</strong><a href="https://www.enable-javascript.com/" target="_blank">더보기</a></div></div></noscript>
@yield('content')
<script type="text/javascript" src="{{ cdn_mix('js/back/manifest.js') }}"></script>
<script type="text/javascript" src="{{ cdn_mix('js/back/vendor.js') }}"></script>
<script>window.MSInputMethodContext && document.documentMode && document.write('<script src="https://cdn.jsdelivr.net/npm/ie11-custom-properties@latest/ie11CustomProperties.js"><\x2fscript>');</script>
<script type="text/javascript" src="{{ cdn_mix('js/back/app.js') }}"></script>
@yield('script')
</html>
