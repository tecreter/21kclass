@extends('front.layouts.app')

@section('content')

    @include('front.layouts.nav-commerce')

    <main id="content" role="main">

        <div class="container space-top-3 space-top-lg-4 space-bottom-2">
            <div class="row align-items-lg-center">
                <div class="col-lg-6 mb-7 mb-lg-0">
                    <div class="mb-4">
                        <h1>21K Classes – For Whom?</h1>
                    </div>
                </div>

                <div class="col-lg-6">
                    <img class="img-fluid" src="/images/commerce/svg/illustrations/digital-currency-2.svg" alt="Image Description">
                </div>
            </div>
        </div>

        <div class="container space-bottom-lg-2">
            <div class="w-md-80 w-lg-90 mx-md-auto">
                <div class="media pb-3">
                    <span class="icon icon-xs icon-indigo icon-circle mr-3">
                      <i class="fas fa-angle-right"></i>
                    </span>
                    <div class="media-body">
                        <p class="text-dark mb-0">For those students who do not have access or not wanting to go to physical coaching centers.</p>
                    </div>
                </div>
                <div class="media py-3">
                    <span class="icon icon-xs icon-indigo icon-circle mr-3">
                      <i class="fas fa-angle-right"></i>
                    </span>
                    <div class="media-body">
                        <p class="text-dark mb-0">Students who want to learn at their own pace and revisit the classes that have been conducted earlier.</p>
                    </div>
                </div>
                <div class="media py-3">
                    <span class="icon icon-xs icon-indigo icon-circle mr-3">
                      <i class="fas fa-angle-right"></i>
                    </span>
                    <div class="media-body">
                        <p class="text-dark mb-0">Students who want to study at the comfort of their homes.</p>
                    </div>
                </div>
                <div class="media py-3">
                    <span class="icon icon-xs icon-indigo icon-circle mr-3">
                      <i class="fas fa-angle-right"></i>
                    </span>
                    <div class="media-body">
                        <p class="text-dark mb-0">Students who want to have the study materials in the digital mode.</p>
                    </div>
                </div>
                <div class="media py-3">
                    <span class="icon icon-xs icon-indigo icon-circle mr-3">
                      <i class="fas fa-angle-right"></i>
                    </span>
                    <div class="media-body">
                        <p class="text-dark mb-0">Students who look for a lot of practice tests and know the result instantly and enable themselves to perform better.</p>
                    </div>
                </div>
                <div class="media py-3">
                    <span class="icon icon-xs icon-indigo icon-circle mr-3">
                      <i class="fas fa-angle-right"></i>
                    </span>
                    <div class="media-body">
                        <p class="text-dark mb-0">Parents who look for an economically viable proposition to coach their wards for competitive examination.</p>
                    </div>
                </div>
                <div class="media py-3">
                    <span class="icon icon-xs icon-indigo icon-circle mr-3">
                      <i class="fas fa-angle-right"></i>
                    </span>
                    <div class="media-body">
                        <p class="text-dark mb-0">Parents who are worried about the safety of their children to travel long distance or at late hours.</p>
                    </div>
                </div>
                <div class="media py-3">
                    <span class="icon icon-xs icon-indigo icon-circle mr-3">
                      <i class="fas fa-angle-right"></i>
                    </span>
                    <div class="media-body">
                        <p class="text-dark mb-0">Parents who would like to monitor their child’s progress in the coaching class on a regular basis.</p>
                    </div>
                </div>
                <div class="media py-3">
                    <span class="icon icon-xs icon-indigo icon-circle mr-3">
                      <i class="fas fa-angle-right"></i>
                    </span>
                    <div class="media-body">
                        <p class="text-dark mb-0">Physically Challenged Children – to study without worrying about moving around out of their homes.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="border-top">
            <div class="container space-2">
                <div class="text-center" style="background: url('/images/commerce/svg/components/abstract-shapes-19.svg') center no-repeat;">
                    <h2>Find the right learning path for you</h2>
                    <p>Answer a few questions and match your goals to our programs.</p>
                    <span class="d-block mt-5">
                      <a class="btn btn-primary transition-3d-hover" data-toggle="modal" data-target="#applyNow">Explore by Category</a>
                    </span>
                </div>
            </div>
        </div>

        @include('front.layouts.apply')

    </main>

    @include('front.layouts.footer-commerce')


@endsection

@section('script')
@endsection
