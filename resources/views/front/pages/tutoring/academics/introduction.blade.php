@extends('front.layouts.app')

@section('content')

    @include('front.layouts.nav-tutoring')

    <main id="content" role="main">

        <div class="bg-img-hero-center" style="background-image: url('/images/banners/banner-jee.jpeg');background-color: rgba(0, 0, 0, 0.4)">
            <div class="container space-2 space-sm-3 space-md-4 min-vw-100" style="background-color: rgba(0, 0, 0, 0.45);">
                <div class="w-xs-auto text-center">
                    <div class="mb-4">
                        <h2 class="h1 text-white">Introduction to Virtual Tutoring</h2>
                    </div>
                </div>
            </div>
        </div>


        <div class="container space-top-1 space-top-lg-2">
            <div class="w-lg-80 text-center mx-lg-auto mb-5">
                <h2 class="mb-3 mb-lg-5">Introduction to Virtual Tutoring</h2>
            </div>

            <div class="container space-bottom-1">
                <p>Students face hurdles in getting the learning assistance of their academic subjects. We save your time and provide safety by providing learning assistance online. We bridge the gap between the expert tutor and the students beyond the geographical boundaries. 21K Class Methodologies are aimed at high quality learning rather than just training. We strive to provide top quality learning easily accessible to every student who is at any corner of the country. We ensure your better understanding of the concepts by providing both the English and the vernacular language (Tamil, Telugu, Malayalam, etc.) as instructional medium. We assist you through online to get clarified with your doubts and queries. <span class="text-dark font-weight-bolder">Satisfying Students is our top priority.</span></p>
                <p>Get the best academic support from our online tutors to nourish your academic preparation. 21k Class Tutoring provides the academic support for both the CBSE and TN SBSE boards. We focus on your conceptual understanding and the developing various skills like application, logical reasoning, problem solving etc. 21K Class provides a detailed performance analysis report which helps you track the learning progression of your child.</p>
            </div>

            <div class="w-md-80 w-lg-60 text-center mx-md-auto mb-md-5">
                <h3>Year Long Tutoring Class (class IX to XII)</h3>
            </div>
            <div class="container space-bottom-1">
                <p>The yearlong class prepares you with the concepts of your specified class and keeps you ready for the
                    next academic class. We provide you the choice of subjects you need academic assistance.
                </p>
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
