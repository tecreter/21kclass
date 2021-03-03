@extends('front.layouts.app')

@section('content')

    @include('front.layouts.nav')

    <main id="content" role="main">

        <div class="d-lg-flex position-relative">
            <div class="container d-lg-flex align-items-lg-center space-top-2 space-lg-0 min-vh-lg-100">
                <div class="w-md-100">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="mb-5 mt-11">
                                <p class="lead">Become a part of 21st Century Learning</p>
                                <h2 class="mb-3">
                                    Anywhere Learning at your convenient
                                    <span class="text-primary text-highlight-warning">
                                        <span class="js-text-animation"
                                              data-hs-typed-options='{
                                                "strings": ["pace.", "time.", "place."],
                                                "typeSpeed": 90,
                                                "loop": true,
                                                "backSpeed": 30,
                                                "backDelay": 2500
                                              }'></span>
                                      </span>
                                </h2>
                                <p class="lead">21K Class offers courses to Coach Students for Competitive Exams &
                                    Tuition Classes for various boards.</p>
                            </div>

                            <a class="btn btn-primary btn-wide transition-3d-hover" href="javascript:;">Get Started</a>
                            <a class="btn btn-link btn-wide" href="javascript:;">Learn More <i class="fas fa-angle-right fa-sm ml-1"></i></a>
                        </div>
                    </div>
                </div>

                <figure class="col-lg-7 col-xl-6 d-none d-lg-block position-absolute top-0 right-0 pr-0 ie-main-hero" style="margin-top: 6.75rem;">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1137.5 979.2">
                        <path fill="#F9FBFF" d="M565.5,957.4c81.1-7.4,155.5-49.3,202.4-115.7C840,739.8,857,570,510.7,348.3C-35.5-1.5-4.2,340.3,2.7,389
              c0.7,4.7,1.2,9.5,1.7,14.2l29.3,321c14,154.2,150.6,267.8,304.9,253.8L565.5,957.4z"/>
                        <defs>
                            <path id="mainHeroSVG1" d="M1137.5,0H450.4l-278,279.7C22.4,430.6,24.3,675,176.8,823.5l0,0C316.9,960,537.7,968.7,688.2,843.6l449.3-373.4V0z"/>
                        </defs>
                        <clipPath id="mainHeroSVG2">
                            <use xlink:href="#mainHeroSVG1"/>
                        </clipPath>
                        <g transform="matrix(1 0 0 1 0 0)" clip-path="url(#mainHeroSVG2)">
                            <image width="750" height="750" xlink:href="{{ cdn_mix('/images/750x750/img2.jpg') }}" transform="matrix(1.4462 0 0 1.4448 52.8755 0)"></image>
                        </g>
                    </svg>
                </figure>
            </div>
        </div>

        <div class="container space-2 space-lg-3">
            <div class="w-md-80 w-lg-60 text-center mx-md-auto mb-9">
                <span class="d-block small font-weight-bold text-cap mb-2">What we do</span>
                <h3>Learn with us from Expert Faculty supported by latest Technology through our On-Line Live Classes, from the luxury of your Home – The 21K Class.</h3>
            </div>

            <div class="row justify-content-lg-center">
                <div class="col-md-6 col-lg-5 mb-3 mb-md-5 mb-lg-7">
                    <div class="media pr-lg-5" data-aos="fade-up">
                        <figure class="w-100 max-w-8rem mr-4">
                            <img class="img-fluid" src="{{ cdn_mix('/svg/icons/icon-18.svg') }}" alt="SVG">
                        </figure>
                        <div class="media-body">
                            <h4>Test Series</h4>
                            <p>Avail the Test Series and take your tests. We will provide you with your Performance Analysis Report which will enable to understand your areas of strengths and weakness in the preparation of the Exams.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-5 mb-3 mb-md-5 mb-lg-7">
                    <div class="media pl-lg-5" data-aos="fade-up" data-aos-delay="100">
                        <figure class="w-100 max-w-8rem mr-4">
                            <img class="img-fluid" src="{{ cdn_mix('/svg/icons/icon-27.svg') }}" alt="SVG">
                        </figure>
                        <div class="media-body">
                            <h4>Coaching Classes</h4>
                            <p>Our Expert Faculty will enable you to understand the concepts, clear your doubts and assist you to score in the competitive exams like NEET, JEE, CA Entrance Examination, etc. There are a variety of courses to choose from depending on the choice you want to make.</p>
                        </div>
                    </div>
                </div>

                <div class="w-100"></div>

                <div class="col-md-6 col-lg-5 mb-3 mb-md-5 mb-lg-7">
                    <div class="media pr-lg-5" data-aos="fade-up" data-aos-delay="200">
                        <figure class="w-100 max-w-8rem mr-4">
                            <img class="img-fluid" src="{{ cdn_mix('/svg/icons/icon-24.svg') }}" alt="SVG">
                        </figure>
                        <div class="media-body">
                            <h4>Tuition Classes</h4>
                            <p>For those students who want an additional academic support to excel in their school examinations. Our Faculty will mentor and support you to achieve your objectives.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-light rounded-lg mx-3 mx-md-11">
            <div class="container space-1 space-md-2">
                <div class="card bg-transparent shadow-none">
                    <div class="row">
                        <div class="col-lg-3 d-none d-lg-block">
                            <div class="dzsparallaxer auto-init height-is-based-on-content use-loading mode-scroll bg-light" data-options='{direction: "reverse"}' style="overflow: visible;">
                                <div data-parallaxanimation='[{property: "transform", value:" translate3d(0,0.5rem,0)", initial:"4", mid:"0", final:"-4"}]'>
                                    <img class="img-fluid rounded-lg shadow-lg" src="{{ cdn_mix('/images/160x160/img39.jpg') }}" alt="Image Description">
                                    <figure class="max-w-15rem w-100 position-absolute bottom-0 left-0 z-index-n1">
                                        <div class="mb-n7 ml-n7">
                                            <img class="img-fluid" src="{{ cdn_mix('/svg/components/dots-5.svg') }}" alt="Image Description">
                                        </div>
                                    </figure>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-9">
                            <div class="card-body h-100 rounded-lg p-0 p-md-4">
                                <figure class="mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="36" height="36" viewBox="0 0 8 8">
                                        <path fill="#FEB607" d="M3,1.3C2,1.7,1.2,2.7,1.2,3.6c0,0.2,0,0.4,0.1,0.5c0.2-0.2,0.5-0.3,0.9-0.3c0.8,0,1.5,0.6,1.5,1.5c0,0.9-0.7,1.5-1.5,1.5
                      C1.4,6.9,1,6.6,0.7,6.1C0.4,5.6,0.3,4.9,0.3,4.5c0-1.6,0.8-2.9,2.5-3.7L3,1.3z M7.1,1.3c-1,0.4-1.8,1.4-1.8,2.3
                      c0,0.2,0,0.4,0.1,0.5c0.2-0.2,0.5-0.3,0.9-0.3c0.8,0,1.5,0.6,1.5,1.5c0,0.9-0.7,1.5-1.5,1.5c-0.7,0-1.1-0.3-1.4-0.8
                      C4.4,5.6,4.4,4.9,4.4,4.5c0-1.6,0.8-2.9,2.5-3.7L7.1,1.3z"/>
                                    </svg>
                                </figure>

                                <div class="row">
                                    <div class="col-lg-8 mb-3 mb-lg-0">
                                        <div class="pr-lg-5">
                                            <blockquote class="h3 font-weight-normal mb-4">I have coached students for the last 15 years for JEE & Medical Entrance (NEET) Exams. Have enabled 100s of students to clear the exams. Come join our On-Line Live Classes to learn with us and be a part of the success story..</blockquote>
                                            <div class="media">
                                                <div class="avatar avatar-xs avatar-circle d-lg-none mr-2">
                                                    <img class="avatar-img" src="{{ cdn_mix('/images/160x160/img39.jpg') }}" alt="Image Description">
                                                </div>
                                                <div class="media-body">
                                                    <!--<span class="text-dark font-weight-bold"></span>-->
                                                    <span class="font-size-1">&mdash; Happy Teacher</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 column-divider-lg">
                                        <hr class="d-lg-none">

                                        <div class="pl-lg-5">
                                            <span class="h1 text-primary">3,500+</span>
                                            <p class="font-size-1">Students are learning with us from Expert Faculty supported by latest Technology.</p>
                                            <a class="font-size-1 text-nowrap" href="#">Read the case studies <i class="fas fa-angle-right fa-sm ml-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container space-2 space-lg-3">
            <div class="row justify-content-lg-between">
                <div class="col-lg-5 order-lg-2 pl-lg-0">
                    <div class="bg-img-hero h-100 min-h-450rem rounded-lg" style="background-image: url({{ cdn_mix('/images/900x900/img19.jpg') }});"></div>
                </div>

                <div class="col-lg-6 order-lg-1">
                    <div class="pt-8 pb-lg-8">
                        <div class="mb-5 mb-md-7">
                            <p class="lead">Learning from your home at your pace is the essence of 21K Class. We will provide additional support through our Doubt Clearing Sessions and enable you with the recordings of the live classes. We administer a series of Tests and provide you with such a detailed report, that you will understand to focus on topics that could accelerate your scores in the exams.</p>
                        </div>

                        <div class="row">
                            <div class="col-6 mb-3 mb-md-5">
                                <div class="pr-lg-4">
                                    <span class="js-counter h2 text-primary" data-hs-counter-options='{"isCommaSeparated": true}'>232343</span>
                                    <p>Happy Students</p>
                                </div>
                            </div>

                            <div class="col-6 mb-3 mb-md-5">
                                <div class="pr-lg-4">
                                    <span class="js-counter h2 text-primary" data-hs-counter-options='{"isCommaSeparated": true}'>45542455</span>
                                    <p>Hours of Live Learning</p>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="pr-lg-4">
                                    <span class="js-counter h2 text-primary" data-hs-counter-options='{"isCommaSeparated": true}'>32435</span>
                                    <p>Tests Taken</p>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="pr-lg-4">
                                    <span class="js-counter h2 text-primary" data-hs-counter-options='{"isCommaSeparated": true}'>56533</span>
                                    <p>Doubts Answered</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @if($courseCategories)
            <div id="demoExamplesSection" class="bg-light overflow-hidden">
                <div class="container-fluid space-2 space-lg-3 px-lg-5">
                    <div class="w-md-80 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
                        <h2>Popular Courses</h2>
                        <p>Discover your perfect program in our courses.</p>
                    </div>

                    <div class="row">
                        <div id="stickyBlockStartPoint" class="col-lg-3 pr-xl-5 mb-5 mb-lg-0">
                            <div id="cbpStickyFilter" class="js-sticky-block card p-4"
                                 data-hs-sticky-block-options='{
                                                               "parentSelector": "#stickyBlockStartPoint",
                                                               "targetSelector": "#logoAndNav",
                                                               "breakpoint": "lg",
                                                               "startPoint": "#stickyBlockStartPoint",
                                                               "endPoint": "#stickyBlockEndPoint",
                                                               "stickyOffsetTop": 16
                                                             }'>
                                <div id="filterControls" class="nav nav-sm nav-x-0 flex-lg-column">
                                    <div class="cbp-filter-scrollbar">
                                        @foreach($courseCategories as $courseCategory)
                                            <a class="cbp-filter-item cbp-filter d-flex justify-content-between align-items-center-item-active nav-link mx-2 mx-lg-0"
                                               href="javascript:;" data-filter=".{{ $courseCategory->name }}">
                                                {{ $courseCategory->name }}
                                                <span class="badge border badge-pill ml-2">{{ $courseCategory->courses->count() }}</span>
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-9 pl-xl-0">
                            <div class="cbp mt-n3 mx-n3" data-hs-cbp-options='{"defaultFilter": ".all-course","animationType": "fadeOut","caption": "zoom","gapHorizontal": 0,"gapVertical": 0,"mediaQueries": [{"width": 1500, "cols": 3},{"width": 1100, "cols": 3},{"width": 800, "cols": 3},{"width": 480, "cols": 2},{"width": 380, "cols": 1}]}'>
                                @foreach($courseCategories as $courseCategory)
                                    @foreach($courseCategory->courses as $course)
                                        <article class="cbp-item all-course {{ $courseCategory->name }}">
                                            <div class="card card-bordered h-100 m-3">
                                                <a class="card-img-top position-relative" href="/course/{{ $course->slug }}">
                                                    <img class="card-img-top" src="{{ ($course->thumb) ? asset('/storage/'.$course->thumb) : cdn_mix('/images/logos/logo.png') }}" alt="{{ $course->name }}">
                                                </a>
                                                <div class="card-body">
                                                    <div class="mb-3">
                                                        <h3>
                                                            <a class="text-inherit" href="/course/{{ $course->slug }}">{{ $course->name }}</a>
                                                        </h3>
                                                    </div>
                                                    <p class="mb-0">{{ $course->excerpt }}</p>
                                                    <div class="d-flex align-items-center">
                                                        <div class="bottom-0 left-0 mb-3">
                                                            <div class="d-flex align-items-center flex-wrap">
                                                                <ul class="list-inline mt-b2 mb-0 mr-2">
                                                                    @if ($course->rating >= 1)
                                                                        <li class="list-inline-item mx-0"><i class="fas fa-star fa-xs text-primary"></i></li>
                                                                    @elseif ($course->rating > 0 && $course->rating < 1)
                                                                        <li class="list-inline-item mx-0"><i class="fas fa-star-half-alt fa-xs text-primary"></i></li>
                                                                    @else
                                                                        <li class="list-inline-item mx-0"><i class="far fa-star fa-xs text-primary"></i></li>
                                                                    @endif

                                                                    @if ($course->rating >= 2)
                                                                        <li class="list-inline-item mx-0"><i class="fas fa-star fa-xs text-primary"></i></li>
                                                                    @elseif ($course->rating > 1 && $course->rating < 2)
                                                                        <li class="list-inline-item mx-0"><i class="fas fa-star-half-alt fa-xs text-primary"></i></li>
                                                                    @else
                                                                        <li class="list-inline-item mx-0"><i class="far fa-star fa-xs text-primary"></i></li>
                                                                    @endif

                                                                    @if ($course->rating >= 3)
                                                                        <li class="list-inline-item mx-0"><i class="fas fa-star fa-xs text-primary"></i></li>
                                                                    @elseif ($course->rating > 2 && $course->rating < 3)
                                                                        <li class="list-inline-item mx-0"><i class="fas fa-star-half-alt fa-xs text-primary"></i></li>
                                                                    @else
                                                                        <li class="list-inline-item mx-0"><i class="far fa-star fa-xs text-primary"></i></li>
                                                                    @endif

                                                                    @if ($course->rating >= 4)
                                                                        <li class="list-inline-item mx-0"><i class="fas fa-star fa-xs text-primary"></i></li>
                                                                    @elseif ($course->rating > 3 && $course->rating < 4)
                                                                        <li class="list-inline-item mx-0"><i class="fas fa-star-half-alt fa-xs text-primary"></i></li>
                                                                    @else
                                                                        <li class="list-inline-item mx-0"><i class="far fa-star fa-xs text-primary"></i></li>
                                                                    @endif

                                                                    @if ($course->rating >= 5)
                                                                        <li class="list-inline-item mx-0"><i class="fas fa-star fa-xs text-primary"></i></li>
                                                                    @elseif ($course->rating > 4 && $course->rating < 5)
                                                                        <li class="list-inline-item mx-0"><i class="fas fa-star-half-alt fa-xs text-primary"></i></li>
                                                                    @else
                                                                        <li class="list-inline-item mx-0"><i class="far fa-star fa-xs text-primary"></i></li>
                                                                    @endif
                                                                </ul>
                                                                <span class="d-inline-block">
                                                              <small class="font-weight-bold text-dark mr-1">{{ $course->rating }} / 5</small>
                                                            </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer border-0 pt-0">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="mr-2">
                                                            @if($course->original_price > 0)
                                                                <small class="d-block text-muted text-lh-sm"><del>₹{{ number_format($course->original_price) }}</del></small>
                                                            @endif
                                                            <span class="d-block h5 text-lh-sm mb-0 text-danger">₹{{ number_format($course->price) }}</span>
                                                        </div>
                                                        <a class="btn btn-sm btn-info transition-3d-hover" href="javascript:void(0);">Buy This Course</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    @endforeach
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div id="stickyBlockEndPoint"></div>
                </div>
            </div>
        @endif

        <div class="container space-top-1 space-top-md-2 space-bottom-2 space-bottom-lg-3">
            <div class="row justify-content-lg-center">
                <div class="col-md-4 mb-7 mb-lg-0">
                    <div data-aos="fade-up" data-aos-delay="100">
                        <div class="text-center px-md-3 px-lg-7">
                            <figure class="mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 71.7 64" width="71" height="64">
                                    <path fill="#FFC107" d="M36.8,14.6L42,25.3c0,0.2,0.2,0.2,0.3,0.3L54,27.2c0.3,0,0.5,0.5,0.3,0.8l-8.5,8.2c-0.2,0.2-0.2,0.3-0.2,0.5
                    l2,11.7c0,0.3-0.3,0.7-0.7,0.5l-10.5-5.6c-0.2,0-0.3,0-0.5,0l-10.5,5.6c-0.3,0.2-0.8-0.2-0.7-0.5l2-11.7c0-0.2,0-0.3-0.2-0.5
                    L18,28.1c-0.3-0.3-0.2-0.8,0.3-0.8L30,25.6c0.2,0,0.3-0.2,0.3-0.3l5.3-10.7C36.1,14.2,36.6,14.2,36.8,14.6z"/>
                                    <path opacity=".25" fill="#FFC107" d="M56,5.9l1.5,2.8c0,0,0,0,0.2,0l3.1,0.5c0.2,0,0.2,0.2,0,0.2l-2.3,2.3c0,0,0,0,0,0.2l0.5,3.1
                    c0,0.2-0.2,0.2-0.2,0.2L56,13.6h-0.2L53,15.1c-0.2,0-0.2,0-0.2-0.2l0.5-3.1v-0.2l-2.3-2.3V9.2l3.1-0.5c0,0,0,0,0.2,0l1.5-2.8
                    C55.8,5.7,55.8,5.7,56,5.9z"/>
                                    <path opacity=".25" fill="#FFC107" d="M12.3,0.3l1.3,2.8c0,0,0,0,0.2,0l3,0.5c0.2,0,0.2,0.2,0,0.2l-2.1,2.1c0,0,0,0,0,0.2l0.5,3
                    c0,0.2-0.2,0.2-0.2,0.2l-2.6-1.5c0,0,0,0-0.2,0L9.5,9.2c-0.2,0-0.2,0-0.2-0.2l0.5-3c0,0,0,0,0-0.2L7.5,3.7V3.6l3-0.5c0,0,0,0,0.2,0
                    l1.3-2.8C12.1,0.3,12.3,0.3,12.3,0.3z"/>
                                    <path opacity=".25" fill="#FFC107" d="M13.9,49.9l1.5,2.8c0,0,0,0,0.2,0l3.1,0.5c0.2,0,0.2,0.2,0,0.2l-2.3,2.3c0,0,0,0,0,0.2l0.5,3.1
                    c0,0.2-0.2,0.2-0.2,0.2l-2.8-1.5h-0.2L11,59.1c-0.2,0-0.2,0-0.2-0.2l0.5-3.1v-0.2L9,53.4v-0.2l3.1-0.5c0,0,0,0,0.2,0l1.3-2.8
                    C13.8,49.8,13.9,49.8,13.9,49.9z"/>
                                    <path opacity=".25" fill="#FFC107" d="M60.8,53.5l1.6,3.1c0,0,0,0,0.2,0l3.5,0.5c0.2,0,0.2,0.2,0,0.3l-2.5,2.5c0,0,0,0,0,0.2l0.7,3.5
                    c0,0.2-0.2,0.2-0.2,0.2l-3.1-1.6h-0.2l-3.1,1.6c-0.2,0-0.2,0-0.2-0.2l0.7-3.5v-0.2l-2.5-2.5c-0.2-0.2,0-0.2,0-0.3l3.5-0.5h0.2
                    l1.6-3.1C60.4,53.4,60.6,53.4,60.8,53.5z"/>
                                </svg>
                            </figure>
                            <p class="mb-0"><span class="text-dark font-weight-bold">4.83 out of 5 starts</span> from 53 reviews</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-7 mb-lg-0">
                    <div data-aos="fade-up">
                        <div class="text-center column-divider-md column-divider-20deg px-md-3 px-lg-7">
                            <figure class="mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 71.7 64" width="71" height="64">
                                    <defs>
                                        <circle id="SVGID_1_" cx="50.9" cy="43.1" r="18.9"/>
                                    </defs>
                                    <clipPath id="SVGID_2_">
                                        <use xlink:href="#SVGID_1_"/>
                                    </clipPath>
                                    <g transform="matrix(1 0 0 1 0 1.907349e-06)" style="clip-path:url(#SVGID_2_);">
                                        <image width="100" height="100" xlink:href="{{ cdn_mix('/images/100x100/img10.jpg') }}" transform="matrix(0.36 0 0 0.36 32.8571 25.1429)"></image>
                                    </g>
                                    <use xlink:href="#SVGID_1_" fill="none" stroke="#FFFFFF" stroke-width="4"/>
                                    <defs>
                                        <circle id="SVGID_3_" cx="34.6" cy="20.9" r="18.9"/>
                                    </defs>
                                    <clipPath id="SVGID_4_">
                                        <use xlink:href="#SVGID_3_"/>
                                    </clipPath>
                                    <g style="clip-path:url(#SVGID_4_);">
                                        <image width="100" height="100" xlink:href="{{ cdn_mix('/images/100x100/img3.jpg') }}" transform="matrix(0.36 0 0 0.36 16.5714 2.8571)"></image>
                                    </g>
                                    <use xlink:href="#SVGID_3_" fill="none" stroke="#FFFFFF" stroke-width="4"/>
                                    <defs>
                                        <circle id="SVGID_5_" cx="20.9" cy="43.1" r="18.9"/>
                                    </defs>
                                    <clipPath id="SVGID_6_">
                                        <use xlink:href="#SVGID_5_"/>
                                    </clipPath>
                                    <g style="clip-path:url(#SVGID_6_);">
                                        <image width="100" height="100" xlink:href="{{ cdn_mix('/images/100x100/img2.jpg') }}" transform="matrix(0.3771 0 0 0.3771 2 24.2857)"></image>
                                    </g>
                                    <use xlink:href="#SVGID_5_" fill="none" stroke="#FFFFFF" stroke-width="4"/>
                                </svg>
                            </figure>
                            <p class=" mb-0"><span class="text-dark font-weight-bold">500+</span> support questions have been closed</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div data-aos="fade-up" data-aos-delay="100">
                        <div class="text-center column-divider-md column-divider-20deg px-md-3 px-lg-7">
                            <figure class="mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="71" height="64" viewBox="0 0 71.7 64">
                                    <path fill="none" stroke="#21325b" stroke-width="2" d="M47.9,1.3H20.1c-2,0-3.5,1.5-3.5,3.5v51.4c0,2,1.5,3.5,3.5,3.5h36.5c2,0,3.5-1.5,3.5-3.5v-8.6V21.2v-7.5
                    L47.9,1.3z"/>
                                    <path fill="#21325b" d="M49.1,14.7c-1.1,0-1.8-0.9-1.8-1.8V2L60,14.7H49.1z"/>
                                    <line fill="none" stroke="#21325b" stroke-width="2" stroke-linecap="round" x1="48.2" y1="21" x2="28" y2="21"/>
                                    <line fill="none" stroke="#21325b" stroke-width="2" stroke-linecap="round" x1="48.2" y1="27.9" x2="28" y2="27.9"/>
                                    <line fill="none" stroke="#21325b" stroke-width="2" stroke-linecap="round" x1="48.2" y1="34.8" x2="28" y2="34.8"/>
                                    <line fill="none" stroke="#21325b" stroke-width="2" stroke-linecap="round" x1="48.2" y1="42" x2="28" y2="42"/>
                                    <path opacity=".2" fill="#21325b" d="M17.1,56V10.2c0-1.4-1.1-2.5-2.5-2.5h-0.5c-1.4,0-2.5,1.1-2.5,2.5v51.1c0,1.4,1.1,2.5,2.5,2.5h2.9h34.7
                    c1.4,0,2.5-1.1,2.5-2.5v-0.5c0-1.4-1.1-2.5-2.5-2.5H19.5C18.1,58.4,17.1,57.4,17.1,56z"/>
                                </svg>
                            </figure>
                            <p class="mb-0"><span class="text-dark font-weight-bold">12.8K</span> doubts answered to students</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

    @include('front.layouts.footer')

@endsection

@section('script')
    <script>
        $(document).on('ready', function () {

            if ($('#cbpStickyFilter').length) {
                var cbpStickyFilter = new HSStickyBlock($('#cbpStickyFilter'));

                $('.cbp').each(function () {
                    var cbp = $.HSCore.components.HSCubeportfolio.init($(this), {
                        layoutMode: 'grid',
                        filters: '#filterControls',
                        displayTypeSpeed: 0
                    });
                });

                $('.cbp').on('initComplete.cbp', function () {
                    cbpStickyFilter.update();
                });

                $('.cbp').on('filterComplete.cbp', function () {
                    cbpStickyFilter.update();
                });

                $('.cbp').on('pluginResize.cbp', function () {
                    cbpStickyFilter.update();
                });

                $('#cbpStickyFilter').on('click', '.cbp-filter-item', function (e) {
                    $('html, body').stop().animate({
                        scrollTop: $('#demoExamplesSection').offset().top
                    }, 200);
                });
            }

        });
    </script>
@endsection
