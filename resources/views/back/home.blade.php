@extends('back.layouts.app')

@section('content')
    <body class="c-app pg-home">
    @include('back.layouts.left_menu')
    <div class="c-wrapper">
        @include('back.layouts.header')
        Dashboard Contents Goes Here....
        @include('back.layouts.footer')
    </div>
    </body>
@endsection

@section('script')
@endsection
