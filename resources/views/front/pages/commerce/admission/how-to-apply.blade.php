@extends('front.layouts.app')

@section('content')

    @include('front.layouts.nav-commerce')

    <main id="content" role="main">

        <div class="bg-light">
            <div class="container space-top-2 space-top-md-4 space-top-lg-0">
                <div class="row justify-content-lg-between">
                    <div class="col-lg-6 space-2 space-top-lg-5 space-bottom-lg-3">
                        <div class="mb-3">
                            <h1>How to apply?</h1>
                        </div>

{{--                        <forms>--}}
{{--                            <div class="card p-2 mb-3">--}}
{{--                                <div class="form-row input-group-borderless">--}}
{{--                                    <div class="col-sm">--}}
{{--                                        <input type="text" class="form-control shadow-none" placeholder="Search the knowledge base..." aria-label="Search the knowledge base...">--}}
{{--                                    </div>--}}
{{--                                    <div class="col-sm-auto">--}}
{{--                                        <button type="button" class="btn btn-block btn-primary">--}}
{{--                                            <i class="fas fa-search"></i>--}}
{{--                                            <span class="d-sm-none ml-1">Search</span>--}}
{{--                                        </button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </forms>--}}

{{--                        <p class="font-size-1 text-dark">--}}
{{--                            Popular topics:--}}
{{--                            <span class="link text-info">21K NEET Test Series,</span>--}}
{{--                            <span class="link text-info ml-1">NEET Extension Course,</span>--}}
{{--                            <span class="link text-info ml-1">NEET Comprehensive Course,</span>--}}
{{--                            <span class="link text-info ml-1">CA Foundation Course</span>--}}
{{--                        </p>--}}
                    </div>

                    <div class="col-lg-6 align-self-lg-end d-none d-lg-inline-block">
                        <figure class="mb-n7 ml-lg-4">
                            <img class="img-fluid" src="/images/commerce/svg/illustrations/knowledgebase-community-1.svg" alt="Image Description">
                        </figure>
                    </div>
                </div>
            </div>
        </div>

        <div class="container space-2">
            <div class="mb-10">
                <h2>Schools</h2>
                <p>Please send us a mail about your School and an appointment time for our Person to meet the School Authority to <a href="mailto:hello@21kclass.com">hello@21kclass.com</a></p>
            </div>
            <div class="mb-5">
                <h2>Individuals</h2>
                <p>
                    <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#applyNow">Contact us</button>
                </p>
            </div>
        </div>

        <div class="bg-soft-primary text-center bg-img-hero" style="background-image: url('/images/commerce/svg/components/abstract-shapes-21.svg');">
            <div class="container space-2">
                <div class="mb-5">
                    <h3 class="h2 text-dark">Join your coaching with 21K Class</h3>
                </div>
                <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#applyNow">Apply now</button>
            </div>
        </div>

        @include('front.layouts.apply')

    </main>

    @include('front.layouts.footer-commerce')


@endsection

@section('script')
@endsection
