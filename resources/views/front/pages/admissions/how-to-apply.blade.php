@extends('front.layouts.app')

@section('content')

    @include('front.layouts.nav')

    <main id="content" role="main">

        <div class="bg-light">
            <div class="container space-top-2 space-top-md-4 space-top-lg-0">
                <div class="row justify-content-lg-between">
                    <div class="col-lg-6 space-2 space-top-lg-5 space-bottom-lg-3">
                        <div class="mb-3">
                            <h1>How to apply?</h1>
                        </div>

                        <forms>
                            <div class="card p-2 mb-3">
                                <div class="form-row input-group-borderless">
                                    <div class="col-sm">
                                        <input type="text" class="form-control shadow-none" placeholder="Search the knowledge base..." aria-label="Search the knowledge base...">
                                    </div>
                                    <div class="col-sm-auto">
                                        <button type="button" class="btn btn-block btn-primary">
                                            <i class="fas fa-search"></i>
                                            <span class="d-sm-none ml-1">Search</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </forms>

                        <p class="font-size-1 text-dark">
                            Popular topics:
                            <span class="link text-info">21K NEET Test Series,</span>
                            <span class="link text-info ml-1">NEET Extension Course,</span>
                            <span class="link text-info ml-1">NEET Comprehensive Course,</span>
                            <span class="link text-info ml-1">CA Foundation Course</span>
                        </p>
                    </div>

                    <div class="col-lg-6 align-self-lg-end d-none d-lg-inline-block">
                        <figure class="mb-n7 ml-lg-4">
                            <img class="img-fluid" src="{{ cdn_mix('/svg/illustrations/knowledgebase-community-1.svg') }}" alt="Image Description">
                        </figure>
                    </div>
                </div>
            </div>
        </div>

        <div class="container space-2">
            <div class="mb-5">
                <h2>Steps to apply for 21K Class NEET Test Series 2021</h2>
            </div>
            <ul class="step step-dashed">
                <li class="step-item">
                    <div class="step-content-wrapper">
                        <span class="step-icon step-icon-xs step-icon-soft-indigo step-icon-pseudo"></span>
                        <div class="step-content">
                            <span class="timeline-heading text-dark">Click the link for Test Series Registration in the Website</span>
                        </div>
                    </div>
                </li>
                <li class="step-item">
                    <div class="step-content-wrapper">
                        <span class="step-icon step-icon-xs step-icon-soft-indigo step-icon-pseudo"></span>
                        <div class="step-content">
                            <span class="timeline-heading text-dark">A drop down asking for Name, Mobile no and email id for authentication with an OTP</span>
                        </div>
                    </div>
                </li>
                <li class="step-item">
                    <div class="step-content-wrapper">
                        <span class="step-icon step-icon-xs step-icon-soft-indigo step-icon-pseudo"></span>
                        <div class="step-content">
                            <span class="timeline-heading text-dark">OTP will be sent to the registered mobile number</span>
                        </div>
                    </div>
                </li>
                <li class="step-item">
                    <div class="step-content-wrapper">
                        <span class="step-icon step-icon-xs step-icon-soft-indigo step-icon-pseudo"></span>
                        <div class="step-content">
                            <span class="timeline-heading text-dark">On typing the OTP number and pressing “ENTER” the Registration form opens</span>
                        </div>
                    </div>
                </li>
                <li class="step-item">
                    <div class="step-content-wrapper">
                        <span class="step-icon step-icon-xs step-icon-soft-indigo step-icon-pseudo"></span>
                        <div class="step-content">
                            <span class="timeline-heading text-dark">The mandatory columns are marked in red color star (<span class="text-danger">*</span>) and these are to be typed compulsorily.</span>
                        </div>
                    </div>
                </li>
                <li class="step-item">
                    <div class="step-content-wrapper">
                        <span class="step-icon step-icon-xs step-icon-soft-indigo step-icon-pseudo"></span>
                        <div class="step-content">
                            <span class="timeline-heading text-dark">For Private School students no attachment is required.</span>
                        </div>
                    </div>
                </li>
                <li class="step-item">
                    <div class="step-content-wrapper">
                        <span class="step-icon step-icon-xs step-icon-soft-indigo step-icon-pseudo"></span>
                        <div class="step-content">
                            <span class="timeline-heading text-dark">Login Credentials will be sent to the registered mail id.</span>
                        </div>
                    </div>
                </li>
                <li class="step-item">
                    <div class="step-content-wrapper">
                        <span class="step-icon step-icon-xs step-icon-soft-indigo step-icon-pseudo"></span>
                        <div class="step-content">
                            <span class="timeline-heading text-dark"><h5>For students from Government or Government aided school attach their current/last year ID card is mandatory as the Test Series will be Free for them.</h5></span>
                        </div>
                    </div>
                </li>
                <li class="step-item">
                    <div class="step-content-wrapper">
                        <span class="step-icon step-icon-xs step-icon-soft-indigo step-icon-pseudo"></span>
                        <div class="step-content">
                            <span class="timeline-heading text-dark">After verifying the document attached the login credentials will be sent to the registered mail id.</span>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

        <div class="bg-soft-primary text-center bg-img-hero" style="background-image: url({{ cdn_mix('/svg/components/abstract-shapes-21.svg') }});">
            <div class="container space-2">
                <div class="mb-5">
                    <h3 class="h2 text-dark">Join your coaching with 21K Class</h3>
                </div>
                <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#applyNow">Apply now</button>
            </div>
        </div>

        @include('front.layouts.apply')

    </main>

    @include('front.layouts.footer')

@endsection

@section('script')
@endsection
