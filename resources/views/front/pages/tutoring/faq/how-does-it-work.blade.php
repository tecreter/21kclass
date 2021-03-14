@extends('front.layouts.app')

@section('content')

    @include('front.layouts.nav-tutoring')

    <main id="content" role="main">

        <div class="bg-light">
            <div class="container space-top-2 space-top-md-4 space-top-lg-0">
                <div class="row justify-content-lg-between">
                    <div class="col-lg-6 space-2 space-top-lg-5 space-bottom-lg-3">
                        <div class="mb-3">
                            <h1>How it works?</h1>
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
                            <img class="img-fluid" src="/images/tutoring/svg/illustrations/knowledgebase-community-1.svg" alt="Image Description">
                        </figure>
                    </div>
                </div>
            </div>
        </div>

        <div class="container space-2 space-top-md-4 space-top-lg-2">
            <div class="w-md-60 text-center mx-md-auto mb-5 mb-md-7">
                <h2>How does it Works?</h2>
            </div>
            <p>All the Coaching Classes from 21K Class will be Live and Interactive sessions through our specifically designed Learning Management System Portal. The schedule of classes will be provided and the students are expected to log in to the class at their designated time. Our Expert Faculty will deliver the class and will clear doubts raised by the student. The class sessions will be bilingual in delivery with English and the Vernacular Language (Tamil in Tamil Nadu) as a medium of instruction. Recorded classes and supportive videos will be available for students to learn at their own pace.</p>
            <p>We will be providing every student with a Tablet to attend the 21K Class sessions which will be inbuilt with Data Card, Camera and a Head Phone. More so, we will also pay the data charges for the student during the periodicity of the course.</p>
            <p>21K Class will administer tests and assignments through this portal and will provide detailed results of the tests. With the detailed results the student can understand their strength, weakness & competent area of the various Chapters and Topics in their subjects.</p>
            <p>All these will be available on an easy to handle portal and be accessible from Tablets, Desk Tops & Laptops at an affordable price.</p>
        </div>

        <div class="bg-soft-primary text-center bg-img-hero" style="background-image: url('/images/tutoring/svg/components/abstract-shapes-19.svg');">
            <div class="container space-2">
                <div class="mb-5">
                    <h3 class="h2 text-dark">Join your tutoring with 21K Class</h3>
                </div>
                <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#applyNow">Apply now</button>
            </div>
        </div>

        @include('front.layouts.apply')

    </main>

    @include('front.layouts.footer-tutoring')


@endsection

@section('script')
@endsection
