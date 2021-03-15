@extends('front.layouts.app')

@section('content')

    @include('front.layouts.nav-commerce')

    <main id="content" role="main">
        <div class="bg-img-hero-center" style="background-image: url('/images/banners/banner-ca2.jpg');background-color: rgba(0, 0, 0, 0.4)">
            <div class="container space-2 space-sm-3 space-md-4 min-vw-100" style="background-color: rgba(0, 0, 0, 0.45);">
                <div class="w-xs-auto text-center">
                    <div class="mb-4">
                        <h2 class="h1 text-white">21K CA Test Series for Class XII</h2>
                    </div>
                </div>
            </div>
        </div>


        <div class="container space-top-1 space-top-lg-2 space-bottom-1 space-bottom-lg-2">
            <div class="w-lg-80 text-center mx-lg-auto mb-5">
                <h2 class="mb-3 mb-lg-5">21K CA Test Series for Class XII</h2>
            </div>

            <div class="w-md-90 w-lg-80 mx-md-auto mb-md-5">
                <h3>Duration - 4 Months</h3>
                <ul>
                    <li>55+ test combo of Unit Test, Subject wise and full portion Mock Test</li>
                    <li>Assess the Preparedness and performance instant result and analysis reports.</li>
                    <li>Builds Problem solving speed & accuracy in exams</li>
                    <li>Doubt clearance through video chat</li>
                    <li>Support practice with formulae sheet, practice sheet & study cards</li>
                </ul>

                <h5>Performance analysis report</h5>
                <ul style="list-style-type:circle">
                    <li>Score card (Overall score & rank, Subject score & rank, Percentage)</li>
                    <li>Question wise report (Summary attempted, un-attempted, correct & incorrect)</li>
                    <li>Chapter wise report (Strength & weakness, competent area)</li>
                    <li>Subject Wise report (summarized after each concept test)</li>
                    <li>Difficulty level report (tough, medium & easy)</li>
                    <li>Progression Graph (efforts)</li>
                </ul>
            </div>
        </div>

        <div class="position-relative text-center border-top">
            <div class="container space-2 space-bottom-lg-3">
                <div class="w-md-60 mx-md-auto mb-5 mb-md-7">
                    <h2 class="h1">Stay in the know</h2>
                    <p>Get offers on our latest programs from 21K Class.</p>
                </div>

                <div class="w-md-75 w-lg-50 mx-md-auto">
                    <form class="js-validate mb-3">
                        <div class="form-row">
                            <div class="col-sm-12">
                                <button type="button" class="btn btn-primary btn-pill btn-wide" data-toggle="modal" data-target="#applyNow">Apply now</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="d-none d-lg-block position-absolute bottom-0 left-0 max-w-35rem w-100">
                    <img class="img-fluid" src="/images/commerce/svg/illustrations/mobile-article.svg" alt="Image Description">
                </div>
            </div>
        </div>

        @include('front.layouts.apply')

    </main>

    @include('front.layouts.footer-commerce')


@endsection

@section('script')
    <script type="text/javascript">
        $(function () {
            $('#header').removeAttr('class').attr('class', 'header');
        });
    </script>
@endsection
