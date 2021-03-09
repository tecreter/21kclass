@extends('front.layouts.app')

@section('content')

    @include('front.layouts.nav')

    <main id="content" role="main">


        <div class="position-relative bg-img-hero" style="background-image: url({{ cdn_mix('/svg/components/abstract-shapes-12.svg') }});">
            <div class="space-top-3 space-bottom-2 space-bottom-lg-3">
                <div class="container mt-lg-11">
                    <div class="row">
                        <div class="col-lg-5 col-xl-6">
                            <div class="mb-5">
                                <h1 class="display-4">Who should enroll the class?</h1>
                                <p class="lead">Get enrolled and Succeed with 21K Class.</p>
                            </div>
                            <button type="button" class="btn btn-primary btn-wide transition-3d-hover" data-toggle="modal" data-target="#applyNow">Enroll now</button>
                        </div>
                    </div>
                </div>
            </div>

            <figure>
                <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1920 100.1">
                    <path fill="#fff" d="M0,0c0,0,934.4,93.4,1920,0v100.1H0L0,0z"/>
                </svg>
            </figure>
        </div>

        <div class="container space-0 space-bottom-3">
            <div class="mb-5">
                <h2>21K NEET Test Series 2021</h2>
            </div>
            <div class="media font-size-1 text-body mb-3">
                <i class="fas fa-check-circle text-success mt-1 mr-2"></i>
                <div class="media-body">
                    Current 12th Class students who are working to take the NEET examination in 2021. Students who attend coaching classes can also enroll for this program.
                </div>
            </div>
            <div class="media font-size-1 text-body mb-3">
                <i class="fas fa-check-circle text-success mt-1 mr-2"></i>
                <div class="media-body">
                    Repeaters of the NEET examination 2020 can enroll for this program.
                </div>
            </div>
        </div>

        <div class="bg-soft-primary text-center bg-img-hero" style="background-image: url({{ cdn_mix('/svg/components/abstract-shapes-19.svg') }});">
            <div class="container space-2">
                <div class="mb-5">
                    <h3 class="h2 text-dark">Enrol your class with 21K Class</h3>
                </div>
                <button type="button" class="btn btn-primary btn-wide transition-3d-hover" data-toggle="modal" data-target="#applyNow">Apply now</button>
            </div>
        </div>

        @include('front.layouts.apply')

    </main>

    @include('front.layouts.footer')

@endsection

@section('script')
@endsection
