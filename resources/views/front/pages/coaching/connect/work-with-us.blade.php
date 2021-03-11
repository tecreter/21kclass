@extends('front.layouts.app')

@section('content')

    @include('front.layouts.nav')

    <main id="content" role="main">

        <div class="position-relative">
            <div class="container space-top-3 space-top-lg-4 space-bottom-md-2 position-relative z-index-2">
                <div class="w-md-80 w-lg-60 text-center mx-md-auto mb-9">
                    <div class="mb-5">
                        <h1>Work with us</h1>
                        <p>Work hard with highly motivated team of talented people and great teammates to launch perfectly crafted products you'll love.</p>
                    </div>
                    <a class="btn btn-primary btn-wide transition-3d-hover" href="#openRolesSection">See Job Openings</a>
                </div>

                <div class="row mx-n1 mx-sm-n2">
                    <div class="col-4 align-self-end px-1 px-sm-2 mb-2 mb-sm-3">
                        <div class="ml-md-8">
                            <img class="img-fluid rounded-lg" src="{{ cdn_mix('/images/900x900/img1.jpg') }}" alt="Image Description">
                        </div>
                    </div>
                    <div class="col-8 px-1 px-sm-2 mb-2 mb-sm-3">
                        <div id="youTubeVideoPlayer" class="video-player d-none d-md-block rounded-lg" style="background-color: #000;">
                            <img class="img-fluid video-player-preview rounded-lg" src="{{ cdn_mix('/images/900x450/img14.jpg') }}" alt="Image">

                            <a class="js-inline-video-player video-player-btn video-player-centered" href="javascript:;"
                               data-hs-video-player-options='{
                                   "videoId": "sWDYkb14clw",
                                   "parentSelector": "#youTubeVideoPlayer",
                                   "targetSelector": "#youTubeVideoIframe",
                                   "isAutoplay": true,
                                   "classMap": {
                                     "toggle": "video-player-played"
                                   }
                                 }'>
                                <span class="video-player-icon">
                                  <i class="fas fa-play"></i>
                                </span>
                            </a>

                            <div class="embed-responsive embed-responsive-16by9 rounded-lg">
                                <div id="youTubeVideoIframe"></div>
                            </div>
                        </div>

                        <div class="d-md-none">
                            <img class="img-fluid rounded-lg" src="{{ cdn_mix('/images/900x450/img14.jpg') }}" alt="Image Description">
                        </div>
                    </div>
                    <div class="col-8 px-1 px-sm-2 mb-2 mb-sm-3">
                        <img class="img-fluid rounded-lg" src="{{ cdn_mix('/images/900x450/img13.jpg') }}" alt="Image Description">
                    </div>
                    <div class="col-4 px-1 px-sm-2 mb-2 mb-sm-3">
                        <div class="mr-md-8">
                            <img class="img-fluid rounded-lg" src="{{ cdn_mix('/images/750x750/img2.jpg') }}" alt="Image Description">
                        </div>
                    </div>
                </div>
            </div>

            <div class="position-absolute top-0 right-0 left-0 w-100 h-100 bg-img-hero mt-n11" style="background-image: url({{ cdn_mix('/svg/components/abstract-shapes-12.svg') }});"></div>

            <figure class="position-absolute bottom-0 right-0 left-0 mb-11">
                <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1921 273">
                    <polygon fill="#fff" points="0,273 1921,273 1921,0 "/>
                </svg>
            </figure>
        </div>

        <div class="container">
            <div class="border-bottom space-2 space-lg-3">
                <div class="w-md-80 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
                    <span class="d-block small font-weight-bold text-cap mb-2">Company values</span>
                    <h2>The Front culture</h2>
                </div>

                <div class="row">
                    <div class="col-sm-6 col-md-4 mb-3 mb-sm-7">
                        <div class="media">
                            <span class="mr-3">&mdash;</span>
                            <div class="media-body">
                                <h2 class="h4">Hit heavy, stay small</h2>
                                <p>Tight-knit, dynamic teams work with more agility, communication, and freedom than other ed-tech company.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 mb-3 mb-sm-7">
                        <div class="media">
                            <span class="mr-3">&mdash;</span>
                            <div class="media-body">
                                <h3 class="h4">Ambition by the boatload</h3>
                                <p>We love people who aim for greatness. They inspire and excite their teammates, raising the bar for all of us.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 mb-3 mb-sm-7">
                        <div class="media">
                            <span class="mr-3">&mdash;</span>
                            <div class="media-body">
                                <h4>Open communication</h4>
                                <p>We're big fans of transparency for many reasons, but the abridged version is: it makes easier.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 mb-3 mb-sm-0">
                        <div class="media">
                            <span class="mr-3">&mdash;</span>
                            <div class="media-body">
                                <h4>Autonomy and attitude</h4>
                                <p>We're a team of self-starters who take serious pride in our work – and it shows.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 mb-3 mb-sm-0">
                        <div class="media">
                            <span class="mr-3">&mdash;</span>
                            <div class="media-body">
                                <h4>Support and win</h4>
                                <p>When we empower others to succeed, we all win. (And we're not talking about participation trophies.)</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <div class="media">
                            <span class="mr-3">&mdash;</span>
                            <div class="media-body">
                                <h4>Teamwork makes the dream work</h4>
                                <p>We work together to bring our passions and expertise to make Teachable the best it can be.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container space-2 space-lg-3">
            <div class="w-md-80 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
                <span class="d-block small font-weight-bold text-cap mb-2">Our values</span>
                <h2>What it's like to work here</h2>
            </div>

            <div class="w-md-75 mx-md-auto">
                <div class="row">
                    <div class="col-lg-6">
                        <p>21K Class is an independent, a primary medium of learning for our students, the learning app allows students to experience a holistic education at their finger tips. Asking doubts, giving tests, attending LIVE classes and connecting with teachers are few of its many features.</p>

                        <p>Using technology applications, academic operations team manages million students synchronously.</p>
                    </div>

                    <div class="col-lg-6">
                        <p>As we challenge the conventional education methods, our sales team employs a unique empathetic framework for showcasing the prospective student’s potential through our revolutionary product.</p>

                        <p>A new-age ed-tech venture also requires a re-imagined pedagogy. The pedagogical innovations at 21K Class leverage technology to be in a constant state of improvement through feedback loops and deep insights generated by the AI/ML models.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix mx-3 mx-md-11">
            <img class="img-fluid rounded-lg" src="{{ cdn_mix('/images/1920x800/img2.jpg') }}" alt="Image Description">
        </div>

        <div id="openRolesSection" class="container space-2 space-lg-3">
            <div class="w-md-80 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
                <span class="d-block small font-weight-bold text-cap mb-2">Open positions</span>
                <h2>Current job openings</h2>
            </div>

            <div class="row justify-content-lg-between align-items-lg-center mt-7 mb-3">
                <div class="col-sm-auto">
                    <h3 class="h4">Teaching</h3>
                </div>
                <div class="col-sm text-sm-right">
                    <small>1 opening</small>
                </div>
            </div>

            <a class="card card-frame py-3 px-4 mb-2" href="{{ route('coaching.connect.career-intern') }}">
                <div class="row align-items-sm-center">
                  <span class="col-sm-6 text-dark">
                    Interns
                  </span>
                            <span class="col-6 col-sm-3 text-body">
                    Bengaluru
                  </span>
                            <span class="col-6 col-sm-3 text-right">
                    Apply <i class="fas fa-angle-right fa-sm ml-1"></i>
                  </span>
                </div>
            </a>

            <div class="row justify-content-lg-between align-items-lg-center mt-7 mb-3">
                <div class="col-sm-auto">
                    <h3 class="h4">Technology</h3>
                </div>
                <div class="col-sm text-sm-right">
                    <small>1 opening</small>
                </div>
            </div>

            <a class="card card-frame py-3 px-4 mb-2" href="{{ route('coaching.connect.career-software-engineer') }}">
                <div class="row align-items-sm-center">
                  <span class="col-sm-6 text-dark">
                    Software Engineer
                  </span>
                            <span class="col-6 col-sm-3 text-body">
                    Bengaluru
                  </span>
                            <span class="col-6 col-sm-3 text-right">
                    Apply <i class="fas fa-angle-right fa-sm ml-1"></i>
                  </span>
                </div>
            </a>
        </div>

    </main>

    @include('front.layouts.footer')

@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function () {
            $('.js-inline-video-player').each(function () {
                var videoPlayer = new HSVideoPlayer($(this)).init();
            });
        });
    </script>
@endsection
