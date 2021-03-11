@extends('front.layouts.app')

@section('content')

    @include('front.layouts.nav')

    <main id="content" role="main">

        <div class="container space-top-3 mt-lg-6 space-bottom-2 space-bottom-lg-3">
            <div class="row justify-content-lg-between align-items-lg-center">
                <div class="col-sm-10 col-lg-5 mb-7 mb-lg-0">
                    <img class="img-fluid" src="{{ cdn_mix('/svg/illustrations/reading.svg') }}" alt="Image Description">
                </div>

                <div class="col-md-6">
                    <div class="mb-5">
                        <h1 class="display-4 mb-3">
                            Why Online only?
                        </h1>
                        <p class="lead">With our 21K Class, you can learn from the experts at your home and at your pace.</p>
                    </div>

                    <div class="d-sm-flex align-items-sm-center flex-sm-wrap">
                        <a class="btn btn-primary transition-3d-hover mb-2" data-toggle="modal" data-target="#applyNow">Apply now</a>

                        <div class="mx-2"></div>

                        <a class="js-fancybox video-player video-player-btn media align-items-center text-dark mb-2" href="javascript:void(0);"
                           data-hs-fancybox-options='{
                             "src": "//youtube.com/watch?v=sWDYkb14clw",
                             "caption": "21K Class Webinar on Homeschooling",
                             "speed": 700,
                             "buttons": ["fullScreen", "close"],
                             "youtube": {
                               "autoplay": 1
                             }
                           }'>
                            <span class="video-player-icon shadow-soft mr-3">
                                <i class="fa fa-play"></i>
                            </span>
                            <span class="media-body">
                                How it works
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container space-2">
            <div class="w-md-80 w-lg-50 text-center mx-md-auto mb-4 mb-md-5">
                <span class="d-block small font-weight-bold text-cap mb-2">Apply Online</span>
                <h2>Why Online only?</h2>
            </div>

            <div class="w-md-80 w-lg-90 mx-md-auto">
                <p>The vision of 21K Class is to provide quality education across geographical boundaries and reach the home of the students. This will ensure equal distribution of content and will provide a platform for students to learn from well-trained experienced Teachers. Our Technology will provide detailed analysis of their test performance and our Teachers will assist the students to work towards enhancing their performance.</p>
            </div>
        </div>

        <div class="bg-soft-primary text-center bg-img-hero" style="background-image: url({{ cdn_mix('/svg/components/abstract-shapes-19.svg') }});">
            <div class="container space-2">
                <div class="mb-5">
                    <h3 class="h2 text-dark">Join your coaching with 21K Class</h3>
                </div>
                <a class="btn btn-sm btn-primary" data-toggle="modal" data-target="#applyNow">Apply now</a>
            </div>
        </div>

        @include('front.layouts.apply')

    </main>

    @include('front.layouts.footer')

@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function () {
            $('.js-fancybox').each(function () {
                var fancybox = $.HSCore.components.HSFancyBox.init($(this));
            });
        });
    </script>
@endsection
