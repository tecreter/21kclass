@extends('front.layouts.app')

@section('content')

    @include('front.layouts.nav-coaching')

    <main id="content" role="main">

        <div class="position-relative bg-img-hero" style="background-image: url('/images/coaching/svg/components/abstract-shapes-12.svg');">
            <div class="container space-top-3 space-top-lg-4 space-bottom-2 space-bottom-lg-3 position-relative z-index-2">
                <div class="row justify-content-lg-between align-items-md-center">
                    <div class="col-md-6 col-lg-5 mb-11 mb-md-0">
                        <div class="mb-5">
                            <h1 class="display-4">Empowering Students with the latest tech.</h1>
                            <p class="lead">Own the unlimited power of the latest technologies for taking 21K Class.</p>
                        </div>

                        <a class="js-fancybox btn btn-primary btn-pill transition-3d-hover" href="javascript:;"
                           data-hs-fancybox-options='{
                                                     "src": "//youtube.com/watch?v=sWDYkb14clw",
                                                     "caption": "21K Class Webinar on Homeschooling",
                                                     "speed": 700,
                                                     "buttons": ["fullScreen", "close"],
                                                     "youtube": {
                                                       "autoplay": 1
                                                     }
                                                   }'>
                            <i class="fas fa-play-circle mr-1"></i>
                            Play Video
                        </a>

                        <a class="btn btn-link" data-toggle="modal" data-target="#applyNow">Learn More <i class="fas fa-angle-right fa-sm ml-1"></i></a>
                    </div>

                    <div class="col-md-6">
                        <div class="row justify-content-end">
                            <div class="col-3 mb-4">
                                <div class="d-block bg-white avatar avatar-lg shadow-sm rounded-circle p-3 mt-n3 ml-5" data-aos="fade-up">
                                    <img class="avatar-img" src="/images/coaching/160x160/img17.png" alt="Image Description">
                                </div>
                            </div>
                            <div class="col-4 mb-4">
                                <div class="d-block bg-white avatar avatar-xl shadow-sm rounded-circle p-4 mx-auto mt-5" data-aos="fade-up" data-aos-delay="50">
                                    <img class="avatar-img" src="/images/coaching/160x160/img12.png" alt="Image Description">
                                </div>
                            </div>
                            <div class="col-4 mb-4">
                                <div class="d-block bg-white avatar avatar-xl shadow-sm rounded-circle p-4 ml-auto" data-aos="fade-up" data-aos-delay="150">
                                    <img class="avatar-img" src="/images/coaching/160x160/img13.png" alt="Image Description">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-3 offset-1 my-4">
                                <div class="d-block bg-white avatar avatar-xl shadow-sm rounded-circle p-4 ml-auto" data-aos="fade-up" data-aos-delay="200">
                                    <img class="avatar-img" src="/images/coaching//160x160/img8.jpg" alt="Image Description">
                                </div>
                            </div>
                            <div class="col-3 offset-2 my-4">
                                <div class="d-block bg-white avatar avatar-xl shadow-sm rounded-circle p-4 ml-auto" data-aos="fade-up" data-aos-delay="250">
                                    <img class="avatar-img" src="/images/coaching/160x160/img29.png" alt="Image Description">
                                </div>
                            </div>
                        </div>

                        <div class="row d-none d-md-flex">
                            <div class="col-6">
                                <div class="d-block bg-white avatar avatar-lg shadow-sm rounded-circle p-3 ml-auto" data-aos="fade-up" data-aos-delay="300">
                                    <img class="avatar-img" src="/images/coaching/160x160/img35.png" alt="Image Description">
                                </div>
                            </div>
                            <div class="col-6 mt-6">
                                <div class="d-block bg-white avatar avatar-xl shadow-sm rounded-circle p-4 ml-auto" data-aos="fade-up" data-aos-delay="350">
                                    <img class="avatar-img" src="/images/coaching/160x160/img24.png" alt="Image Description">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <figure class="position-absolute bottom-0 right-0 left-0">
                <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1921 273">
                    <polygon fill="#fff" points="0,273 1921,273 1921,0 "/>
                </svg>
            </figure>
        </div>

        <div class="container space-2">
            <div class="w-md-80 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
                <span class="d-block small font-weight-bold text-cap mb-2">Technology</span>
                <h2>Our Learning Management System will enable</h2>
            </div>

            <div class="row">
                <div class="col-sm-6 col-md-4 mb-3 mb-sm-7">
                    <div class="media">
                        <span class="mr-3">—</span>
                        <div class="media-body">
                            <h2 class="h4">Distance learning</h2>
                            <p>Learn from any location – no geographical boundary for learning. Our Teachers are equipped with the technological tools to deliver classes at your location.</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 mb-3 mb-sm-7">
                    <div class="media">
                        <span class="mr-3">—</span>
                        <div class="media-body">
                            <h3 class="h4">Live and Interactive Classes</h3>
                            <p>The class sessions will be live and interactive in nature.</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 mb-3 mb-sm-0">
                    <div class="media">
                        <span class="mr-3">—</span>
                        <div class="media-body">
                            <h4>Video Library</h4>
                            <p>All the regular class sessions would be available as a video for future reference for the students. This will help the students to revisit the entire class session.</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 mb-3 mb-sm-7">
                    <div class="media">
                        <span class="mr-3">—</span>
                        <div class="media-body">
                            <h4>Online Sessions and Assessment</h4>
                            <p>All the tests and assessments will be in the on-line mode through our Question Paper Generator. This will deliver instant result and provide analytics on the performance of the student for a single test and also the series of tests taken by the student.</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 mb-3 mb-sm-0">
                    <div class="media">
                        <span class="mr-3">—</span>
                        <div class="media-body">
                            <h4>Online Library</h4>
                            <p>A repository of content will be available for the students to use at the time of their convenience.</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media">
                        <span class="mr-3">—</span>
                        <div class="media-body">
                            <h4>Discussion Forum</h4>
                            <p>To facilitate conceptual understanding Discussion forum would be used and the students would be asked to participate. There will be a guided discussion by the faculty to enable peer to peer learning.</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media">
                        <span class="mr-3">—</span>
                        <div class="media-body">
                            <h4>Doubt Board</h4>
                            <p>Doubt clearing channel for the students.</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media">
                        <span class="mr-3">—</span>
                        <div class="media-body">
                            <h4>Structured Practice</h4>
                            <p>Each chapter is designed in such a way that the students would have series of tests and assignments to practice.</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media">
                        <span class="mr-3">—</span>
                        <div class="media-body">
                            <h4>Feedback</h4>
                            <p>Dashboard for Students and Teachers. Parents will get automated notifications on the attendance of the students and other academic related information.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-soft-primary text-center bg-img-hero" style="background-image: url('/images/coaching/svg/components/abstract-shapes-19.svg');">
            <div class="container space-2">
                <div class="mb-5">
                    <h3 class="h2 text-dark">Join your coaching with 21K Class</h3>
                </div>
                <a class="btn btn-sm btn-primary" data-toggle="modal" data-target="#applyNow">Apply now</a>
            </div>
        </div>

        @include('front.layouts.apply')

    </main>

    @include('front.layouts.footer-coaching')


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
