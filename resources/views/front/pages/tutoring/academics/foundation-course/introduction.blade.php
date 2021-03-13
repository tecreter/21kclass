@extends('front.layouts.app')

@section('content')

    @include('front.layouts.nav-tutoring')

    <main id="content" role="main">

        <div class="bg-img-hero-center" style="background-image: url('/images/banners/banner-foundation-course.jpeg');background-color: rgba(0, 0, 0, 0.4)">
            <div class="container space-2 space-sm-3 space-md-4 min-vw-100" style="background-color: rgba(0, 0, 0, 0.45);">
                <div class="w-xs-auto text-center">
                    <div class="mb-4">
                        <h2 class="h1 text-white">Foundation Courses tutoring</h2>
                    </div>
                </div>
            </div>
        </div>


        <div class="container space-top-1 space-top-lg-2">
            <div class="w-lg-80 text-center mx-lg-auto mb-5">
                <h2 class="mb-3 mb-lg-5">21K Class Foundation Course – Introduction</h2>
            </div>

            <div class="container space-bottom-1">
                <p>Every Successful thing needs the firm foundation. As cracking the competitive exams like NEET and JEE is Challenging, students need to prepare for such exams from an early age. Our Foundation Program for JEE and NEET caters to this specific need by ensuring strong fundamentals.</p>
                <p>Preparing from an early stage also provides ample time to students to understand the complicated aspects of topics. 21K Class Foundation program provides strong support to help students get familiar with various aspects of the relevant exams, as well as the associated careers. Our Foundation programme helps students to have better conceptual understanding and develop the application skill, Computational thinking and Scientific temperament. As a result, every student becomes a strong contender not only for the Board examinations but also for competitive exams like NTSE, Olympiads, KVPY, etc.</p>
                <p>21k programme comprises of two courses Pre Foundation Course (Class VIII) and Preparatory Course (Class IX & X)</p>
            </div>


            <div class="container space-bottom-1">
                <h3>Key Features</h3>
                <ul style="list-style-type:square;">
                    <li>Interactive Online Live Classes</li>
                    <li>All-inclusive Study Material</li>
                    <li>Dedicated online tutors – Individual attention</li>
                    <li>Recorded videos of online classes to revisit</li>
                    <li>Instant Doubt resolution</li>
                    <li>Question Paper discussion</li>
                    <li>Integrated Tests and Assessments</li>
                    <li>Individualized Analyzer of Performance</li>
                </ul>
            </div>
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
    <script type="text/javascript">
        $(function () {
            $('#header').removeAttr('class').attr('class', 'header');
        });
    </script>
@endsection
