@extends('front.layouts.app')

@section('content')

    @include('front.layouts.nav')

    <main id="content" role="main">

        <div class="gradient-y-gray position-relative">
            <div class="space-top-3 space-bottom-2 space-bottom-lg-3">
                <div class="container mt-lg-11">
                    <div class="row">
                        <div class="col-lg-5 col-xl-6">
                            <div class="mb-5">
                                <h1 class="display-4">Who should enroll the class?</h1>
                                <p class="lead">Get enrolled and Succeed with 21K Class.</p>
                            </div>
                            <a class="btn btn-primary btn-wide transition-3d-hover" href="javascript:;">Enroll Now</a>
                        </div>
                    </div>
                </div>

                <div class="transform-rotate-5">
                    <div class="d-none d-lg-flex flex-lg-wrap align-items-lg-end position-absolute top-0 left-50 transform-rotate-6" style="width: 35rem;">
                        <div style="width: 35rem;" data-aos="fade-up" data-aos-delay="150" data-aos-offset="-300">
                            <div class="shadow-none rounded bg-soft-info text-indigo p-4 p-lg-7 mb-3 mb-sm-5 mb-lg-11" href="#">
                                <img class="img-fluid mb-7" src="{{ cdn_mix('/images/mockups/img13.png') }}" alt="Image Description">
                            </div>
                        </div>

                        <figure class="max-w-23rem w-100 position-absolute bottom-0 left-0 z-index-n1" data-aos="fade-up" data-aos-delay="300" data-aos-offset="-400">
                            <div class="mb-n7 ml-n11">
                                <img class="img-fluid" src="{{ cdn_mix('/svg/components/abstract-shapes-10.svg') }}" alt="Image Description">
                            </div>
                        </figure>
                    </div>
                </div>
            </div>

            <figure>
                <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1920 100.1">
                    <path fill="#fff" d="M0,0c0,0,934.4,93.4,1920,0v100.1H0L0,0z"/>
                </svg>
            </figure>
        </div>

        <div class="container space-3">
            <div class="mb-5">
                <h3>21K NEET Test Series 2021</h3>
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

        <div class="bg-soft-primary text-center bg-img-hero" style="background-image: url(./assets/svg/components/abstract-shapes-19.svg);">
            <div class="container space-2">
                <div class="mb-5">
                    <h3 class="h2 text-dark">Enrol your class with 21K Class</h3>
                </div>
                <a class="btn btn-sm btn-primary" href="javascript:;">Apply course</a>
            </div>
        </div>

    </main>

    @include('front.layouts.footer')

@endsection

@section('script')
@endsection
