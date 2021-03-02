@extends('front.layouts.app')

@section('content')

    @include('front.layouts.nav')

    <main id="content" role="main">

        <div class="gradient-x-overlay-sm-indigo position-relative overflow-hidden">
            <div class="container space-top-3 space-top-lg-4 space-bottom-2">
                <div class="w-lg-60 text-center mx-lg-auto">
                    <div class="mb-5">
                        <h1 class="display-4 mb-3">21K Classes for NEET Coaching</h1>
                        <p class="lead">21K Class is a pioneer to provide a comprehensive Virtual Class for the NEET aspirants.</p>
                    </div>
                    <a class="btn btn-sm btn-indigo transition-3d-hover" href="javascript:void(0);">Join class now</a>
                </div>
            </div>

            <div class="container space-2">
                <div class="position-relative w-lg-75 text-center mx-lg-auto">
                    <div class="position-relative shadow-lg z-index-2 rounded-lg" data-aos="fade-up" data-aos-offset="-50">
                        <img class="img-fluid rounded-lg" src="{{ cdn_mix('/images/1920x800/img2.jpg') }}" alt="Image Description">
                    </div>

                    <figure class="max-w-15rem w-100 position-absolute top-0 right-0" data-aos="fade-up" data-aos-delay="100" data-aos-offset="-50">
                        <div class="mt-n11 mr-n11">
                            <img class="img-fluid" src="{{ cdn_mix('/svg/components/dots-1.svg') }}" alt="Image Description">
                        </div>
                    </figure>
                    <figure class="max-w-15rem w-100 position-absolute bottom-0 left-0" data-aos="fade-up">
                        <div class="mb-n7 ml-n7">
                            <img class="img-fluid" src="{{ cdn_mix('/svg/components/dots-1.svg') }}" alt="Image Description">
                        </div>
                    </figure>
                </div>
            </div>

            <figure class="w-35 position-absolute top-0 right-0 z-index-n1 mt-n11 mr-n11">
                <img class="img-fluid" src="{{ cdn_mix('/svg/components/half-circle-1.svg') }}" alt="Image Description">
            </figure>

            <figure class="w-25 position-absolute bottom-0 left-0 z-index-n1 mb-n11 ml-n11">
                <img class="img-fluid" src="{{ cdn_mix('/svg/components/half-circle-2.svg') }}" alt="Image Description">
            </figure>
        </div>

        <div class="container space-2 space-lg-3">
            <div class="w-md-80 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
                <span class="d-block small font-weight-bold text-cap mb-2">Our values</span>
                <h2>NEET 2021 Personal Coaching</h2>
            </div>

            <div class="w-md-80 mx-md-auto">
                <div class="row">
                    <div class="col-lg-6">
                        <p>The aspirants for becoming a Doctor through NEET has no geographical boundary. But the availability of preparatory courses are restricted to big cities. It is not possible for the parent to either migrate as a family or send their ward alone to such cities for the schooling and the coaching classes. It is also not financially viable to do so.</p>

                        <p>Hence, we at 21K Class is bringing in the Technology enabled Virtual Class mode to break the geographical barrier for learning and provide expert teaching to the students across Tamil Nadu irrespective of the place they live.</p>

                        <p>Our team of Expert Faculty Members have more than 15 years of experience in preparing the students for the competitive exams like JEE and Medical Entrance Examinations.</p>
                    </div>

                    <div class="col-lg-6">
                        <p>We shall deliver our on-line classes in a multi lingual mode – English & Vernacular (Tamil in Tamil Nadu) to enable the students to understand the concepts better. Further, we shall provide the recorded session for the students to revisit the class at their convenience. Our tests and assessments will be in on-line mode, which will also give instant results once the tests are completed. This will make the students to evaluate their understanding of the concepts taught in the class.</p>

                        <p>At 21K class, we have designed our Learning Management System (LMS) the foundation on which the entire classes shall happen. This platform will have the multiple features ensuring a better teaching-learning process.</p>

                        <p>Our Goal is to take our Coaching Classes to the students wherever they live, irrespective of their geographical location and enable them to study and prepare for the NEET exam to fulfill their aspirations of being a Doctor.</p>
                    </div>
                </div>
            </div>
        </div>

    </main>

    @include('front.layouts.footer')

@endsection

@section('script')
@endsection
