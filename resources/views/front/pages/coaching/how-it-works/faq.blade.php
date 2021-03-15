@extends('front.layouts.app')

@section('content')

    @include('front.layouts.nav-coaching')

    <main id="content" role="main">

        <div class="bg-img-hero" style="background-image: url('/images/coaching/svg/components/abstract-shapes-12.svg');">
            <div class="container space-top-3 space-top-lg-4 space-bottom-2 position-relative z-index-2">
                <div class="w-md-80 w-lg-60 text-center mx-md-auto">
                    <h1>FAQ</h1>
                    <p>Search our FAQ for answers to anything you might ask.</p>
                </div>
            </div>
        </div>

        <div class="container space-2">
            <div class="row justify-content-lg-center">
                <div class="col-lg-8">
                    <div id="basics" class="space-bottom-1">
                        <h2 class="my-2">Basics</h2>

                        <div id="basicsAccordion">
                            <div class="card shadow-none mb-3">
                                <div class="card-header card-collapse" id="basicsHeadingOne">
                                    <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed bg-white px-0" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapseOne" aria-expanded="false" aria-controls="basicsCollapseOne">
                                        What will the medium of instruction be in Tamil Nadu?

                                        <span class="card-btn-toggle">
                                          <span class="card-btn-toggle-default">&plus;</span>
                                          <span class="card-btn-toggle-active">&minus;</span>
                                        </span>
                                    </a>
                                </div>
                                <div id="basicsCollapseOne" class="collapse" aria-labelledby="basicsHeadingOne" data-parent="#basicsAccordion">
                                    <div class="card-body px-0">
                                        <p>English & Tamil</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card shadow-none mb-3">
                                <div class="card-header card-collapse" id="basicsHeadingTwo">
                                    <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed bg-white px-0" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapseTwo" aria-expanded="false" aria-controls="basicsCollapseTwo">
                                        Are the classes live?
                                        <span class="card-btn-toggle">
                                          <span class="card-btn-toggle-default">&plus;</span>
                                          <span class="card-btn-toggle-active">&minus;</span>
                                        </span>
                                    </a>
                                </div>
                                <div id="basicsCollapseTwo" class="collapse" aria-labelledby="basicsHeadingTwo" data-parent="#basicsAccordion">
                                    <div class="card-body px-0">
                                        <p>Yes</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card shadow-none mb-3">
                                <div class="card-header card-collapse" id="basicsHeadingThree">
                                    <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed bg-white px-0" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapseThree" aria-expanded="false" aria-controls="basicsCollapseThree">
                                        Can I take an hourly rate?
                                        <span class="card-btn-toggle">
                                          <span class="card-btn-toggle-default">&plus;</span>
                                          <span class="card-btn-toggle-active">&minus;</span>
                                        </span>
                                    </a>
                                </div>
                                <div id="basicsCollapseThree" class="collapse" aria-labelledby="basicsHeadingThree" data-parent="#basicsAccordion">
                                    <div class="card-body px-0">
                                        <p>No Course wise Fees need to be paid.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card shadow-none mb-3">
                                <div class="card-header card-collapse" id="basicsHeadingFour">
                                    <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed bg-white px-0" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapseFour" aria-expanded="false" aria-controls="basicsCollapseFour">
                                        Will I be able to ask doubts to my instructor?
                                        <span class="card-btn-toggle">
                                          <span class="card-btn-toggle-default">&plus;</span>
                                          <span class="card-btn-toggle-active">&minus;</span>
                                        </span>
                                    </a>
                                </div>
                                <div id="basicsCollapseFour" class="collapse" aria-labelledby="basicsHeadingFour" data-parent="#basicsAccordion">
                                    <div class="card-body px-0">
                                        <p>Yes</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card shadow-none mb-3">
                                <div class="card-header card-collapse" id="basicsHeadingFive">
                                    <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed bg-white px-0" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapseFive" aria-expanded="false" aria-controls="basicsCollapseFive">
                                        Do I need internet connection for watching the videos?
                                        <span class="card-btn-toggle">
                                          <span class="card-btn-toggle-default">&plus;</span>
                                          <span class="card-btn-toggle-active">&minus;</span>
                                        </span>
                                    </a>
                                </div>
                                <div id="basicsCollapseFive" class="collapse" aria-labelledby="basicsHeadingFive" data-parent="#basicsAccordion">
                                    <div class="card-body px-0">
                                        <p>Yes</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card shadow-none mb-3">
                                <div class="card-header card-collapse" id="basicsHeadingSix">
                                    <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed bg-white px-0" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapseSix" aria-expanded="false" aria-controls="basicsCollapseSix">
                                        I currently attend on-line classes through my Mobile Phone and have limited Internet Data. Can I use it?
                                        <span class="card-btn-toggle">
                                          <span class="card-btn-toggle-default">&plus;</span>
                                          <span class="card-btn-toggle-active">&minus;</span>
                                        </span>
                                    </a>
                                </div>
                                <div id="basicsCollapseSix" class="collapse" aria-labelledby="basicsHeadingSix" data-parent="#basicsAccordion">
                                    <div class="card-body px-0">
                                        <p>Do not worry. We will provide you with a Tablet with a data card for Internet connectivity and data card paid for the duration of the course.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card shadow-none mb-3">
                                <div class="card-header card-collapse" id="basicsHeadingSix">
                                    <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed bg-white px-0" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapseSix" aria-expanded="false" aria-controls="basicsCollapseSix">
                                        Can we download the videos and watch offline?
                                        <span class="card-btn-toggle">
                                          <span class="card-btn-toggle-default">&plus;</span>
                                          <span class="card-btn-toggle-active">&minus;</span>
                                        </span>
                                    </a>
                                </div>
                                <div id="basicsCollapseSix" class="collapse" aria-labelledby="basicsHeadingSix" data-parent="#basicsAccordion">
                                    <div class="card-body px-0">
                                        <p>Yes</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card shadow-none mb-3">
                                <div class="card-header card-collapse" id="basicsHeadingSeven">
                                    <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed bg-white px-0" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapseSeven" aria-expanded="false" aria-controls="basicsCollapseSeven">
                                        In how many devices can I access once I purchase?
                                        <span class="card-btn-toggle">
                                          <span class="card-btn-toggle-default">&plus;</span>
                                          <span class="card-btn-toggle-active">&minus;</span>
                                        </span>
                                    </a>
                                </div>
                                <div id="basicsCollapseSeven" class="collapse" aria-labelledby="basicsHeadingSeven" data-parent="#basicsAccordion">
                                    <div class="card-body px-0">
                                        <p>Maximum 2 devices</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card shadow-none mb-3">
                                <div class="card-header card-collapse" id="basicsHeadingEight">
                                    <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed bg-white px-0" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapseEight" aria-expanded="false" aria-controls="basicsCollapseEight">
                                        Can I take a trial?
                                        <span class="card-btn-toggle">
                                          <span class="card-btn-toggle-default">&plus;</span>
                                          <span class="card-btn-toggle-active">&minus;</span>
                                        </span>
                                    </a>
                                </div>
                                <div id="basicsCollapseEight" class="collapse" aria-labelledby="basicsHeadingEight" data-parent="#basicsAccordion">
                                    <div class="card-body px-0">
                                        <p>Yes just click the Contact us given below.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="w-lg-85 mx-lg-auto my-lg-4">
                <div class="card bg-indigo text-white overflow-hidden p-4">
                    <div class="row justify-content-md-start align-items-md-center text-center text-md-left">
                        <div class="col-md-6 offset-md-3 mb-3 mb-md-0">
                            <h3 class="text-white mb-1">Got a question?</h3>
                            <p class="text-white-70 mb-0">We'd love to talk about how we can help you.</p>
                        </div>
                        <div class="col-md-3 text-md-right">
                            <a class="btn btn-light transition-3d-hover" data-toggle="modal" data-target="#applyNow">Contact Us</a>
                        </div>
                    </div>

                    <figure class="w-25 d-none d-md-block content-centered-y ml-n4">
                        <img class="img-fluid" src="/images/coaching/svg/illustrations/communication.svg" alt="Image Description">
                    </figure>
                </div>
            </div>
        </div>

        @include('front.layouts.apply')

    </main>

    @include('front.layouts.footer-coaching')


@endsection

@section('script')
@endsection
