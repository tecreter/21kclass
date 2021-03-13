<header id="header" class="header header-box-shadow-on-scroll header-abs-top header-bg-transparent header-show-hide" data-hs-header-options='{"fixMoment": 1,"fixEffect": "slide"}'>
    <div class="header-section">
        <div class="container header-hide-content pt-2">
            <div class="d-flex align-items-center">

                <div class="ml-auto">
                    <div class="hs-unfold d-sm-none mr-2">
                        <a class="js-hs-unfold-invoker dropdown-nav-link dropdown-toggle d-flex align-items-center"
                           href="javascript:void(0);"
                           data-hs-unfold-options='{
                                                    "target": "#jumpToDropdown",
                                                    "type": "css-animation",
                                                    "event": "hover",
                                                    "hideOnScroll": "true"
                                                   }'>
                            Quick Tabs
                        </a>

                        <div id="jumpToDropdown" class="hs-unfold-content dropdown-menu">
                            <a class="dropdown-item{{ request()->routeIs('coaching.*') ?? true ? ' active' : '' }}" href="{{ route('coaching.index') }}">Coaching</a>
                            <a class="dropdown-item{{ request()->routeIs('tutoring.*') ?? true ? ' active' : '' }}" href="{{ route('tutoring.index') }}">Tutoring</a>
                            <a class="dropdown-item{{ request()->routeIs('commerce.*') ?? true ? ' active' : '' }}" href="{{ route('commerce.index') }}">Commerce</a>
                        </div>
                    </div>

                    <div class="nav nav-sm nav-y-0 d-none d-sm-flex ml-sm-auto">
                        <a class="nav-link{{ request()->routeIs('coaching.*') ?? true ? ' active' : '' }}" href="{{ route('coaching.index') }}">Coaching</a>
                        <a class="nav-link{{ request()->routeIs('tutoring.*') ?? true ? ' active' : '' }}" href="{{ route('tutoring.index') }}">Tutoring</a>
                        <a class="nav-link{{ request()->routeIs('commerce.*') ?? true ? ' active' : '' }}" href="{{ route('commerce.index') }}">Commerce</a>
                    </div>
                </div>

                <ul class="list-inline ml-2 mb-0">
                    <li class="list-inline-item">
                        <div class="hs-unfold">
                            <a class="js-hs-unfold-invoker btn btn-xs btn-icon btn-ghost-secondary" href="javascript:void(0);"
                               data-hs-unfold-options='{
                                                    "target": "#shoppingCartDropdown",
                                                    "type": "css-animation",
                                                    "event": "hover",
                                                    "hideOnScroll": "true"
                                                   }'>
                                <i class="fas fa-shopping-cart"></i>
                                @if(session('SESSION_TOC_CART_COURSE_IDS', null))
                                    <span style="position: absolute;margin: -0.3rem 4rem 0 0.2rem;top: 0;left: 50%;background: #ec5252;color: #fff;display: inline-block;text-align: center;border-radius:9999px;min-width:1.5rem;padding:2px;font-size: 0.75rem" class="" title="{{ __(1) }} item in the cart">{{ count(session()->get('SESSION_TOC_CART_COURSE_IDS')) }}</span>
                                @endif
                            </a>

                            @if(session('SESSION_TOC_CART_COURSE_IDS', null))
                                <div id="shoppingCartDropdown"
                                     class="hs-unfold-content dropdown-menu dropdown-menu-right dropdown-card text-left"
                                     style="min-width: 275px;">
                                    <div class="card">
                                        <div class="card-body p-0">
                                            <div class="list-group list-group-lg list-group-flush list-group-no-gutters" style="max-height:200px;overflow:hidden;overflow-y:scroll">
                                                @php
                                                    $course_details = session('SESSION_TOC_CART_COURSE_DETAILS', null);
                                                @endphp
                                                @foreach($course_details as $course)
                                                    <div class="list-group-item p-3">
                                                        <div class="media">
                                                            <div class="avatar avatar-lg mr-2">
                                                                <img class="img img-fluid" src="{{ ($course['thumb']) ? asset('/storage/'.$course['thumb']) : cdn_mix('/images/logos/logo.png') }}" alt="{{ $course['name'] }}">
                                                            </div>
                                                            <div class="media-body">
                                                                <h6 class="mb-0 pgm-card-title">{{ $course['name'] }}</h6>
                                                                <small class="d-block h6 text-lh-sm mb-0 text-danger mt-1"><strong>₹{{ number_format($course['price']) }}</strong></small>
                                                                @if($course['original_price'] > 0)
                                                                    <small class="d-block text-muted text-lh-sm"><del>₹{{ number_format($course['original_price']) }}</del></small>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="card-footer text-center">
                                            <a href="{{ route('cart') }}" class="btn btn-sm btn-primary transition-3d-hover">Go to cart</a>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div id="shoppingCartDropdown"
                                     class="hs-unfold-content dropdown-menu dropdown-menu-right dropdown-card text-center"
                                     style="min-width: 275px;">
                                    <div class="card">
                                        <div class="card-body">
                                            <figure class="max-w-9rem mx-auto mb-3">
                                                <img class="img-fluid" src="/images/tutoring/svg/illustrations/empty-cart.svg" alt="SVG">
                                            </figure>
                                            <span class="d-block">Your cart is empty.</span>
                                        </div>

                                        <div class="card-footer">
                                            <a href="{{ route('tutoring.index') }}" class="text-primary font-size-1">Keep shopping</a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div id="logoAndNav" class="container">
            <nav class="js-mega-menu navbar navbar-expand-xl">
                <a class="navbar-brand" href="{{ route('tutoring.index') }}" aria-label="Front">
                    <img src="/images/logos/logo.png" alt="Logo">
                </a>

                <button type="button" class="navbar-toggler btn btn-icon btn-sm rounded-circle"
                        aria-label="Toggle navigation"
                        aria-expanded="false"
                        aria-controls="navBar"
                        data-toggle="collapse"
                        data-target="#navBar">
                        <span class="navbar-toggler-default">
                          <svg width="14" height="14" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                            <path fill="currentColor"
                                  d="M17.4,6.2H0.6C0.3,6.2,0,5.9,0,5.5V4.1c0-0.4,0.3-0.7,0.6-0.7h16.9c0.3,0,0.6,0.3,0.6,0.7v1.4C18,5.9,17.7,6.2,17.4,6.2z M17.4,14.1H0.6c-0.3,0-0.6-0.3-0.6-0.7V12c0-0.4,0.3-0.7,0.6-0.7h16.9c0.3,0,0.6,0.3,0.6,0.7v1.4C18,13.7,17.7,14.1,17.4,14.1z"/>
                          </svg>
                        </span>
                        <span class="navbar-toggler-toggled">
                          <svg width="14" height="14" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                            <path fill="currentColor"
                                  d="M11.5,9.5l5-5c0.2-0.2,0.2-0.6-0.1-0.9l-1-1c-0.3-0.3-0.7-0.3-0.9-0.1l-5,5l-5-5C4.3,2.3,3.9,2.4,3.6,2.6l-1,1 C2.4,3.9,2.3,4.3,2.5,4.5l5,5l-5,5c-0.2,0.2-0.2,0.6,0.1,0.9l1,1c0.3,0.3,0.7,0.3,0.9,0.1l5-5l5,5c0.2,0.2,0.6,0.2,0.9-0.1l1-1 c0.3-0.3,0.3-0.7,0.1-0.9L11.5,9.5z"/>
                          </svg>
                        </span>
                </button>

                <div id="navBar" class="collapse navbar-collapse">
                    <div class="navbar-body header-abs-top-inner">
                        <ul class="navbar-nav">

                            <li class="hs-has-sub-menu navbar-nav-item">
                                <a id="aboutusMegaMenu" class="hs-mega-menu-invoker nav-link nav-link-toggle {{ request()->routeIs('tutoring.about-us.*') ?? true ? 'active' : '' }}" href="javascript:void(0);" aria-haspopup="true" aria-expanded="false" aria-labelledby="aboutusSubMenu">About Us</a>

                                <div id="aboutusSubMenu" class="hs-sub-menu dropdown-menu" aria-labelledby="aboutusMegaMenu" style="min-width: 230px;">
                                    <a class="dropdown-item{{ request()->routeIs('tutoring.about-us.what-sets-us-apart') ?? true ? ' active' : '' }}" href="{{ route('tutoring.about-us.what-sets-us-apart') }}">What sets us apart?</a>
                                    <a class="dropdown-item{{ request()->routeIs('tutoring.about-us.values-and-ethos') ?? true ? ' active' : '' }}" href="{{ route('tutoring.about-us.values-and-ethos') }}">Values & Ethos</a>
                                    <a class="dropdown-item{{ request()->routeIs('tutoring.about-us.21k-group') ?? true ? ' active' : '' }}" href="{{ route('tutoring.about-us.21k-group') }}">21K Group</a>
                                    <a class="dropdown-item{{ request()->routeIs('tutoring.about-us.our-team') ?? true ? ' active' : '' }}" href="{{ route('tutoring.about-us.our-team') }}">Our Team</a>
                                    <a class="dropdown-item{{ request()->routeIs('tutoring.about-us.policy-and-governance') ?? true ? ' active' : '' }}" href="{{ route('tutoring.about-us.policy-and-governance') }}">Policy & Governance</a>
                                </div>
                            </li>

                            <li class="hs-has-sub-menu navbar-nav-item">
                                <a id="blogMegaMenu" class="hs-mega-menu-invoker nav-link nav-link-toggle {{ (request()->routeIs('tutoring.academics.*')) ?? true ? 'active' : '' }}" href="javascript:void(0);" aria-haspopup="true" aria-expanded="false" aria-labelledby="blogSubMenu">Academics</a>

                                <div id="pagesSubMenu" class="hs-sub-menu dropdown-menu hs-sub-menu-desktop-lg fadeOut animated" aria-labelledby="pagesMegaMenu" style="min-width: 230px; display: none; animation-duration: 300ms;">
                                    <div class="hs-has-sub-menu">
                                        <a id="navLinkNeetCoaching" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle {{ (request()->routeIs('tutoring.academics.neet.*')) ?? true ? 'active' : '' }}" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuNeetCoaching">NEET Coaching</a>
                                        <div id="navSubmenuNeetCoaching" class="hs-sub-menu dropdown-menu hs-sub-menu-desktop-lg fadeOut animated" aria-labelledby="navLinkNeetCoaching" style="min-width: 230px; display: none; animation-duration: 300ms;">
                                            <a class="dropdown-item{{ request()->routeIs('tutoring.academics.neet.introduction') ?? true ? ' active' : '' }}" href="{{ route('tutoring.academics.neet.introduction') }}">21K NEET Introduction</a>
                                            <a class="dropdown-item{{ request()->routeIs('tutoring.academics.neet.extension-course') ?? true ? ' active' : '' }}" href="{{ route('tutoring.academics.neet.extension-course') }}">21K NEET Extension Course</a>
                                            <a class="dropdown-item{{ request()->routeIs('tutoring.academics.neet.comprehensive-course') ?? true ? ' active' : '' }}" href="{{ route('tutoring.academics.neet.comprehensive-course') }}">21K NEET Comprehensive Course</a>
                                            <a class="dropdown-item{{ request()->routeIs('tutoring.academics.neet.crash-course') ?? true ? ' active' : '' }}" href="{{ route('tutoring.academics.neet.crash-course') }}">21K NEET Crash Course</a>
                                            <a class="dropdown-item{{ request()->routeIs('tutoring.academics.neet.repeater-course') ?? true ? ' active' : '' }}" href="{{ route('tutoring.academics.neet.repeater-course') }}">21K NEET Repeater Course </a>
                                            <a class="dropdown-item{{ request()->routeIs('tutoring.academics.neet.test-series') ?? true ? ' active' : '' }}" href="{{ route('tutoring.academics.neet.test-series') }}">21K NEET Test Series</a>
                                        </div>
                                    </div>

                                    <div class="hs-has-sub-menu">
                                        <a id="navLinkJeeCoaching" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle {{ (request()->routeIs('tutoring.academics.jee.*')) ?? true ? 'active' : '' }}" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuJeeCoaching">JEE Coaching</a>
                                        <div id="navSubmenuJeeCoaching" class="hs-sub-menu dropdown-menu hs-sub-menu-desktop-lg fadeOut animated" aria-labelledby="navLinkJeeCoaching" style="min-width: 230px; display: none; animation-duration: 300ms;">
                                            <a class="dropdown-item{{ request()->routeIs('tutoring.academics.jee.introduction') ?? true ? ' active' : '' }}" href="{{ route('tutoring.academics.jee.introduction') }}">21K JEE Coaching</a>
                                            <a class="dropdown-item{{ request()->routeIs('tutoring.academics.jee.extension-course') ?? true ? ' active' : '' }}" href="{{ route('tutoring.academics.jee.extension-course') }}">21K JEE Extension Course</a>
                                            <a class="dropdown-item{{ request()->routeIs('tutoring.academics.jee.comprehensive-course') ?? true ? ' active' : '' }}" href="{{ route('tutoring.academics.jee.comprehensive-course') }}">21K JEE Comprehensive Course</a>
                                            <a class="dropdown-item{{ request()->routeIs('tutoring.academics.jee.crash-course') ?? true ? ' active' : '' }}" href="{{ route('tutoring.academics.jee.crash-course') }}">21K JEE Crash Course</a>
                                            <a class="dropdown-item{{ request()->routeIs('tutoring.academics.jee.test-series') ?? true ? ' active' : '' }}" href="{{ route('tutoring.academics.jee.test-series') }}">21K JEE Test Series </a>
                                        </div>
                                    </div>

                                    <div class="hs-has-sub-menu">
                                        <a id="navLinkFoundationCourse" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle {{ (request()->routeIs('tutoring.academics.foundation-course.*')) ?? true ? 'active' : '' }}" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuFoundationCourse">21K Class Foundation Courses</a>
                                        <div id="navSubmenuFoundationCourse" class="hs-sub-menu dropdown-menu hs-sub-menu-desktop-lg fadeOut animated" aria-labelledby="navLinkFoundationCourse" style="min-width: 230px; display: none; animation-duration: 300ms;">
                                            <a class="dropdown-item{{ request()->routeIs('tutoring.academics.foundation-course.introduction') ?? true ? ' active' : '' }}" href="{{ route('tutoring.academics.foundation-course.introduction') }}">21K Class Foundation Courses Coaching</a>
                                            <a class="dropdown-item{{ request()->routeIs('tutoring.academics.foundation-course.pre-foundation-course') ?? true ? ' active' : '' }}"  href="{{ route('tutoring.academics.foundation-course.pre-foundation-course') }}">21K Class Pre Foundation Course (Class VIII)</a>
                                            <a class="dropdown-item{{ request()->routeIs('tutoring.academics.foundation-course.preparatory-foundation-course') ?? true ? ' active' : '' }}"  href="{{ route('tutoring.academics.foundation-course.preparatory-foundation-course') }}">21K Class Preparatory Course (Class IX & X)</a>
                                        </div>
                                    </div>

                                    <a class="dropdown-item{{ request()->routeIs('tutoring.academics.competitive-examination') ?? true ? ' active' : '' }}" href="{{ route('tutoring.academics.competitive-examination') }}">21K Competitive Examination Practice Programs</a>
                                    <a class="dropdown-item{{ request()->routeIs('tutoring.academics.ce-test-series') ?? true ? ' active' : '' }}" href="{{ route('tutoring.academics.ce-test-series') }}">21K CE Test Series</a>
                                </div>
                            </li>


                            <li class="hs-has-sub-menu navbar-nav-item">
                                <a id="admissionsMegaMenu" class="hs-mega-menu-invoker nav-link nav-link-toggle {{ request()->routeIs('tutoring.excellence.*') ?? true ? 'active' : '' }}" href="javascript:void(0);" aria-haspopup="true" aria-expanded="false" aria-labelledby="admissionsSubMenu">Excellence</a>

                                <div id="admissionsSubMenu" class="hs-sub-menu dropdown-menu" aria-labelledby="admissionsMegaMenu" style="min-width: 230px;">
                                    <a class="dropdown-item{{ request()->routeIs('tutoring.excellence.olympiads') ?? true ? ' active' : '' }}" href="{{ route('tutoring.excellence.olympiads') }}">Olympiads</a>
                                    <a class="dropdown-item{{ request()->routeIs('tutoring.excellence.national-talent-exam') ?? true ? ' active' : '' }}" href="{{ route('tutoring.excellence.national-talent-exam') }}">National Talent Exam</a>
                                </div>
                            </li>


                            <li class="hs-has-sub-menu navbar-nav-item">
                                <a id="admissionsMegaMenu" class="hs-mega-menu-invoker nav-link nav-link-toggle {{ request()->routeIs('tutoring.admission.*') ?? true ? 'active' : '' }}" href="javascript:void(0);" aria-haspopup="true" aria-expanded="false" aria-labelledby="admissionsSubMenu">Admissions</a>

                                <div id="admissionsSubMenu" class="hs-sub-menu dropdown-menu" aria-labelledby="admissionsMegaMenu" style="min-width: 230px;">
                                    <a class="dropdown-item{{ request()->routeIs('tutoring.admission.how-to-apply') ?? true ? ' active' : '' }}" href="{{ route('tutoring.admission.how-to-apply') }}">How to apply?</a>
                                    <a class="dropdown-item{{ request()->routeIs('tutoring.admission.key-dates') ?? true ? ' active' : '' }}" href="{{ route('tutoring.admission.key-dates') }}">Key Dates</a>
                                    <a class="dropdown-item{{ request()->routeIs('tutoring.admission.fees-and-scholarships') ?? true ? ' active' : '' }}" href="{{ route('tutoring.admission.fees-and-scholarships') }}">Fees & Scholarships </a>
                                    <a class="dropdown-item{{ request()->routeIs('tutoring.admission.who-should-enrol') ?? true ? ' active' : '' }}" href="{{ route('tutoring.admission.who-should-enrol') }}">Who should enrol?</a>
                                    <a class="dropdown-item{{ request()->routeIs('tutoring.admission.process-and-requirements') ?? true ? ' active' : '' }}" href="{{ route('tutoring.admission.process-and-requirements') }}">Process & Requirements</a>
                                </div>
                            </li>

                            <li class="hs-has-sub-menu navbar-nav-item">
                                <a id="howitworksMegaMenu" class="hs-mega-menu-invoker nav-link nav-link-toggle {{ request()->routeIs('tutoring.how-it-works.*') ?? true ? 'active' : '' }}" href="javascript:void(0);" aria-haspopup="true" aria-expanded="false" aria-labelledby="howitworksSubMenu">How it works?</a>

                                <div id="howitworksSubMenu" class="hs-sub-menu dropdown-menu" aria-labelledby="howitworksMegaMenu" style="min-width: 230px;">
                                    <a class="dropdown-item{{ request()->routeIs('tutoring.how-it-works.how-does-it-work') ?? true ? ' active' : '' }}" href="{{ route('tutoring.how-it-works.how-does-it-work') }}">How does it work?</a>
                                    <a class="dropdown-item{{ request()->routeIs('tutoring.how-it-works.technology') ?? true ? ' active' : '' }}" href="{{ route('tutoring.how-it-works.technology') }}">Technology</a>
                                    <a class="dropdown-item{{ request()->routeIs('tutoring.how-it-works.why-online-only') ?? true ? ' active' : '' }}" href="{{ route('tutoring.how-it-works.why-online-only') }}">Why Online only?</a>
                                    <a class="dropdown-item{{ request()->routeIs('tutoring.how-it-works.who-is-21k-class') ?? true ? ' active' : '' }}" href="{{ route('tutoring.how-it-works.who-is-21k-class') }}">Who is 21K Class for?</a>
                                    <a class="dropdown-item{{ request()->routeIs('tutoring.how-it-works.faq') ?? true ? ' active' : '' }}" href="{{ route('tutoring.how-it-works.faq') }}">FAQ</a>
                                    <a class="dropdown-item{{ request()->routeIs('tutoring.how-it-works.your-privacy') ?? true ? ' active' : '' }}" href="{{ route('tutoring.how-it-works.your-privacy') }}">Your Privacy</a>
                                </div>
                            </li>

                            <li class="hs-has-sub-menu navbar-nav-item">
                                <a id="being21kMegaMenu" class="hs-mega-menu-invoker nav-link nav-link-toggle {{ request()->routeIs('tutoring.being21k.*') ?? true ? 'active' : '' }}" href="javascript:void(0);" aria-haspopup="true" aria-expanded="false"  aria-labelledby="being21kSubMenu">#Being21K</a>

                                <div id="being21kSubMenu" class="hs-sub-menu dropdown-menu" aria-labelledby="being21kMegaMenu" style="min-width: 230px;">
                                    <a class="dropdown-item{{ request()->routeIs('tutoring.being21k.student-work') ?? true ? ' active' : '' }}" href="{{ route('tutoring.being21k.student-work') }}">Student Work</a>
                                    <a class="dropdown-item{{ request()->routeIs('tutoring.being21k.parents-speak') ?? true ? ' active' : '' }}" href="{{ route('tutoring.being21k.parents-speak') }}">Parent's Speak</a>
                                    <a class="dropdown-item{{ request()->routeIs('tutoring.being21k.meet-our-faculty') ?? true ? ' active' : '' }}" href="{{ route('tutoring.being21k.meet-our-faculty') }}">Meet our Faculty</a>
                                    <a class="dropdown-item{{ request()->routeIs('tutoring.being21k.events') ?? true ? ' active' : '' }}" href="{{ route('tutoring.being21k.events') }}">Events</a>
                                    <a class="dropdown-item{{ request()->routeIs('tutoring.being21k.media-hub') ?? true ? ' active' : '' }}" href="{{ route('tutoring.being21k.media-hub') }}">Media Hub</a>
                                    <a class="dropdown-item{{ request()->routeIs('tutoring.being21k.insights') ?? true ? ' active' : '' }}" href="{{ route('tutoring.being21k.insights') }}">Insights</a>
                                </div>
                            </li>

                            <li class="hs-has-sub-menu navbar-nav-item">
                                <a id="connectMegaMenu" class="hs-mega-menu-invoker nav-link nav-link-toggle {{ request()->routeIs('tutoring.connect.*') ?? true ? 'active' : '' }}" href="javascript:void(0);" aria-haspopup="true" aria-expanded="false" aria-labelledby="connectSubMenu">Connect</a>

                                <div id="connectSubMenu" class="hs-sub-menu dropdown-menu" aria-labelledby="connectMegaMenu" style="min-width: 230px;">
                                    <a class="dropdown-item{{ request()->routeIs('tutoring.connect.contact-us') ?? true ? ' active' : '' }}" href="{{ route('tutoring.connect.contact-us') }}">Contact Us</a>
                                    <a class="dropdown-item{{ (request()->routeIs('tutoring.connect.work-with-us') || request()->routeIs('tutoring.connect.career-intern') || request()->routeIs('tutoring.connect.career-software-engineer')) ?? true ? ' active' : '' }}" href="{{ route('tutoring.connect.work-with-us') }}">Work with us</a>
                                    <a class="dropdown-item{{ request()->routeIs('tutoring.connect.social') ?? true ? ' active' : '' }}" href="{{ route('tutoring.connect.social') }}">Social</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
