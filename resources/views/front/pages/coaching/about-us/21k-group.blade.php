@extends('front.layouts.app')

@section('content')

    @include('front.layouts.nav-coaching')

    <main id="content" role="main">
        <div class="bg-img-hero-center" style="background-image: url('/images/banners/21kgroup-banner.jpeg');background-color: rgba(0, 0, 0, 0.4)">
            <div class="container space-2 space-sm-3 space-md-4 min-vw-100" style="background-color: rgba(0, 0, 0, 0.45);">
                <div class="w-xs-auto text-center">
                    <div class="mb-4">
                        <h2 class="h1 text-white">21K Group</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="container space-1">
            <div class="row">
                <div class="col-lg-12 space-top-lg-1 space-bottom-lg-1">
                    <h2 class="h1"><span class="text-dark text-highlight-info">21K Group</span></h2>
                    <p>Change is never easy - unexplored in the beginning, magnificent and groundbreaking at the end. The 21st century has been characterized by constant technological change and disruption like never before. 21K group is on a mission to create online learning spaces for communities that want to explore beyond the conventional. With a trained team that is constantly setting new benchmarks we aim to bring only the best experiences to our students. We have three institutions.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 space-top-lg-0 space-bottom-lg-1">
                    <h2 class="h2"><span class="text-dark text-highlight-info">21K School</span></h2>
                    <p>India's first online school that is redefining education to fit global standards. We provide structured as well as flexible curriculums to fit all needs. World class education from nursery to Grade 12 will now reach everyone, anywhere, anytime.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 space-top-lg-0 space-bottom-lg-2">
                    <h2 class="h2"><span class="text-dark text-highlight-info">21K Skills</span></h2>
                    <p>Brings top up-skilling and re-skilling courses from around the world for individuals, corporates and retired military personnel. For this we have international partners who are leaders in developing talent and capabilities in technical fields such as software engineering and data science.</p>
                </div>
            </div>
        </div>
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
