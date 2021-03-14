@extends('front.layouts.app')

@section('content')

    @include('front.layouts.nav-tutoring')

    <main id="content" role="main">

        <div class="d-flex">
            <div class="container d-flex align-items-center vh-100">
                <div class="row justify-content-md-center flex-md-grow-1 text-center">
                    <div class="col-md-9 col-lg-6">
                        <img class="img-fluid mb-2" src="/images/tutoring/svg/illustrations/maintenance-mode.svg" alt="SVG Illustration">
                        <h1 class="h2">We're just tuning up a few things.</h1>
                        <p>We apologize for the inconvenience but 21K Class is preparing this page contents. Stay tuned!</p>
                    </div>
                </div>
            </div>
        </div>

    </main>

    @include('front.layouts.footer-tutoring')


@endsection

@section('script')
@endsection
