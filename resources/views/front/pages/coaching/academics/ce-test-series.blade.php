@extends('front.layouts.app')

@section('content')

    @include('front.layouts.nav-coaching')

    <main id="content" role="main">

        <div class="bg-img-hero-center" style="background-image: url('/images/banners/banner-ce-test.jpeg');background-color: rgba(0, 0, 0, 0.4)">
            <div class="container space-2 space-sm-3 space-md-4 min-vw-100" style="background-color: rgba(0, 0, 0, 0.45);">
                <div class="w-xs-auto text-center">
                    <div class="mb-4">
                        <h2 class="h1 text-white">CE Test Series</h2>
                    </div>
                </div>
            </div>
        </div>


        <div class="container space-top-1 space-top-lg-2">
            <div class="w-lg-80 text-center mx-lg-auto mb-5">
                <h2 class="mb-3 mb-lg-5">21K Class CS Test Series</h2>
            </div>

            <div class="container">
                <ul style="list-style-type:square;">
                    <li>Planned in a systematic and organized way.</li>
                    <li>Cover all the aspects and complete syllabus.</li>
                    <li>Give a detailed Analysis of student’s test result.</li>
                    <li>Provide relevant solution to each question.</li>
                    <li>Builds Problem solving speed in exams with Series of specially designed Chapter test and Subject test.</li>
                    <li>Analyze errors with step by step self-explanatory solution provided in answer key.</li>
                    <li>Structured Practice with practice sheets, formulae sheet and study cards.</li>
                    <li>Doubt clearance through video chat.</li>
                </ul>
            </div>

            <div class="container">
                <p>The result analysis would show the students topic wise strength and weakness. This will enable them to prepare better for the Competitive Examinations.</p>
            </div>

            <div class="container space-top-1 space-bottom-3">
                <h3 class="text-dark">Performance analysis report</h3>
                <ul style="list-style-type:circle;">
                    <li>Score card (Overall score & rank, Subject score & rank, Percentage)</li>
                    <li>Question wise report (Summary attempted, un-attempted, correct & incorrect)</li>
                    <li>Chapter wise report (Strength & weakness, competent area)</li>
                    <li>Subject Wise report (summarized after each concept test)</li>
                    <li>Difficulty level report (tough, medium & easy)</li>
                    <li>Progression Graph (efforts)</li>
                </ul>
            </div>
        </div>

        <div class="bg-soft-primary text-center bg-img-hero" style="background-image: url('/images/coaching/svg/components/abstract-shapes-19.svg');">
            <div class="container space-2">
                <div class="mb-5">
                    <h3 class="h2 text-dark">Join your coaching with 21K Class</h3>
                </div>
                <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#applyNow">Apply now</button>
            </div>
        </div>

        @include('front.layouts.apply')

    </main>

    @include('front.layouts.footer-coaching')


@endsection

@section('script')
    <script type="text/javascript">
        $(function () {
            $('#header').removeAttr('class').attr('class', 'header');
        });
    </script>
@endsection
