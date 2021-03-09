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
                            <a class="dropdown-item active" href="javascript:void(0);">Coaching</a>
                            <a class="dropdown-item" href="javascript:void(0);">Tutoring</a>
                            <a class="dropdown-item" href="javascript:void(0);">Commerce</a>
                        </div>
                    </div>

                    <div class="nav nav-sm nav-y-0 d-none d-sm-flex ml-sm-auto">
                        <a class="nav-link active" href="javascript:void(0);">Coaching</a>
                        <a class="nav-link" href="javascript:void(0);">Tutoring</a>
                        <a class="nav-link" href="javascript:void(0);">Commerce</a>
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
                                                    <div class="list-group-item">
                                                        <div class="media">
                                                            <img  class="img img-fluid" width="50" src="{{ ($course['thumb']) ? asset('/storage/'.$course['thumb']) : cdn_mix('/images/logos/logo.png') }}" alt="{{ $course['name'] }}">
                                                            <div class="media-body">
                                                                <div class="row align-items-left">
                                                                    <div class="col-sm mb-1 mb-sm-0">
                                                                        <h6 class="mb-0">{{ $course['name'] }}</h6>
                                                                        <small class="d-block h6 text-lh-sm mb-0 text-danger mt-1"><strong>₹{{ number_format($course['price']) }}</strong></small>
                                                                        @if($course['original_price'] > 0)
                                                                            <small class="d-block text-muted text-lh-sm"><del>₹{{ number_format($course['original_price']) }}</del></small>
                                                                        @endif
                                                                    </div>
                                                                </div>
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
                                                <img class="img-fluid" src="{{ cdn_mix('/svg/illustrations/empty-cart.svg') }}" alt="SVG">
                                            </figure>
                                            <span class="d-block">Your cart is empty.</span>
                                        </div>

                                        <div class="card-footer">
                                            <a href="{{ route('index') }}" class="text-primary font-size-1">Keep shopping</a>
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
                <a class="navbar-brand" href="{{ route('index') }}" aria-label="Front">
                    <img src="{{ cdn_mix('/images/logos/logo.png') }}" alt="Logo">
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
                                <a id="aboutusMegaMenu" class="hs-mega-menu-invoker nav-link nav-link-toggle {{ (request()->routeIs('what-sets-us-apart') || request()->routeIs('values-and-ethos') || request()->routeIs('21k-group') || request()->routeIs('our-team') || request()->routeIs('policy-and-governance')) ?? true ? 'active' : '' }}" href="javascript:void(0);" aria-haspopup="true" aria-expanded="false" aria-labelledby="aboutusSubMenu">About Us</a>

                                <div id="aboutusSubMenu" class="hs-sub-menu dropdown-menu" aria-labelledby="aboutusMegaMenu" style="min-width: 230px;">
                                    <a class="dropdown-item{{ request()->routeIs('what-sets-us-apart') ?? true ? ' active' : '' }}" href="{{ route('what-sets-us-apart') }}">What sets us apart?</a>
                                    <a class="dropdown-item{{ request()->routeIs('values-and-ethos') ?? true ? ' active' : '' }}" href="{{ route('values-and-ethos') }}">Values & Ethos</a>
                                    <a class="dropdown-item{{ request()->routeIs('21k-group') ?? true ? ' active' : '' }}" href="{{ route('21k-group') }}">21K Group</a>
                                    <a class="dropdown-item{{ request()->routeIs('our-team') ?? true ? ' active' : '' }}" href="{{ route('our-team') }}">Our Team</a>
                                    <a class="dropdown-item{{ request()->routeIs('policy-and-governance') ?? true ? ' active' : '' }}" href="{{ route('policy-and-governance') }}">Policy & Governance</a>
                                </div>
                            </li>

                            <li class="hs-has-sub-menu navbar-nav-item">
                                <a id="blogMegaMenu" class="hs-mega-menu-invoker nav-link nav-link-toggle {{ (request()->routeIs('21k-neet-test-series') || request()->routeIs('21k-neet-extension-course') || request()->routeIs('21k-neet-comprehensive-course') || request()->routeIs('21k-neet-crash-course') || request()->routeIs('21k-neet-repeater-course') || request()->routeIs('21k-jee-extension-course') || request()->routeIs('21k-jee-comprehensive-course') || request()->routeIs('21k-jee-crash-course') || request()->routeIs('21k-jee-test-series') || request()->routeIs('21k-class-pre-foundation-course') || request()->routeIs('21k-class-preparatory-course')) ?? true ? 'active' : '' }}" href="javascript:void(0);" aria-haspopup="true" aria-expanded="false" aria-labelledby="blogSubMenu">Courses</a>
                                <div id="blogSubMenu" class="hs-sub-menu dropdown-menu" aria-labelledby="blogMegaMenu" style="min-width: 230px;">
                                    <a class="dropdown-item{{ request()->routeIs('21k-neet-test-series') ?? true ? ' active' : '' }}" href="{{ route('21k-neet-test-series') }}">21K NEET Test Series</a>
                                    <a class="dropdown-item{{ request()->routeIs('21k-neet-extension-course') ?? true ? ' active' : '' }}" href="{{ route('21k-neet-extension-course') }}">21K NEET Extension Course</a>
                                    <a class="dropdown-item{{ request()->routeIs('21k-neet-comprehensive-course') ?? true ? ' active' : '' }}" href="{{ route('21k-neet-comprehensive-course') }}">21K NEET Comprehensive Course</a>
                                    <a class="dropdown-item{{ request()->routeIs('21k-neet-crash-course') ?? true ? ' active' : '' }}" href="{{ route('21k-neet-crash-course') }}">21K NEET Crash Course</a>
                                    <a class="dropdown-item{{ request()->routeIs('21k-neet-repeater-course') ?? true ? ' active' : '' }}" href="{{ route('21k-neet-repeater-course') }}">21K NEET Repeater Course</a>
                                    <a class="dropdown-item{{ request()->routeIs('21k-jee-extension-course') ?? true ? ' active' : '' }}" href="{{ route('21k-jee-extension-course') }}">21K JEE Extension Course</a>
                                    <a class="dropdown-item{{ request()->routeIs('21k-jee-comprehensive-course') ?? true ? ' active' : '' }}" href="{{ route('21k-jee-comprehensive-course') }}">21K JEE Comprehensive Course</a>
                                    <a class="dropdown-item{{ request()->routeIs('21k-jee-crash-course') ?? true ? ' active' : '' }}" href="{{ route('21k-jee-crash-course') }}">21K JEE Crash Course</a>
                                    <a class="dropdown-item{{ request()->routeIs('21k-jee-test-series') ?? true ? ' active' : '' }}" href="{{ route('21k-jee-test-series') }}">21K JEE Test Series</a>
                                    <a class="dropdown-item{{ request()->routeIs('21k-class-pre-foundation-course') ?? true ? ' active' : '' }}" href="{{ route('21k-class-pre-foundation-course') }}">21K Class Pre Foundation Course (Class VIII)</a>
                                    <a class="dropdown-item{{ request()->routeIs('21k-class-preparatory-course') ?? true ? ' active' : '' }}" href="{{ route('21k-class-preparatory-course') }}">21K Class Preparatory Course (Class IX & X)</a>
                                </div>
                            </li>

                            <li class="hs-has-sub-menu navbar-nav-item">
                                <a id="admissionsMegaMenu" class="hs-mega-menu-invoker nav-link nav-link-toggle {{ (request()->routeIs('olympiads') || request()->routeIs('national-talent-exam')) ?? true ? 'active' : '' }}" href="javascript:void(0);" aria-haspopup="true" aria-expanded="false" aria-labelledby="admissionsSubMenu">Excellence</a>

                                <div id="admissionsSubMenu" class="hs-sub-menu dropdown-menu" aria-labelledby="admissionsMegaMenu" style="min-width: 230px;">
                                    <a class="dropdown-item{{ request()->routeIs('olympiads') ?? true ? ' active' : '' }}" href="{{ route('olympiads') }}">Olympiads</a>
                                    <a class="dropdown-item{{ request()->routeIs('national-talent-exam') ?? true ? ' active' : '' }}" href="{{ route('national-talent-exam') }}">National Talent Exam</a>
                                </div>
                            </li>


                            <li class="hs-has-sub-menu navbar-nav-item">
                                <a id="admissionsMegaMenu" class="hs-mega-menu-invoker nav-link nav-link-toggle {{ (request()->routeIs('how-to-apply') || request()->routeIs('key-dates') || request()->routeIs('fees-and-scholarships') || request()->routeIs('who-should-enrol') || request()->routeIs('process-and-requirements')) ?? true ? 'active' : '' }}" href="javascript:void(0);" aria-haspopup="true" aria-expanded="false" aria-labelledby="admissionsSubMenu">Admissions</a>

                                <div id="admissionsSubMenu" class="hs-sub-menu dropdown-menu" aria-labelledby="admissionsMegaMenu" style="min-width: 230px;">
                                    <a class="dropdown-item{{ request()->routeIs('how-to-apply') ?? true ? ' active' : '' }}" href="{{ route('how-to-apply') }}">How to apply?</a>
                                    <a class="dropdown-item{{ request()->routeIs('key-dates') ?? true ? ' active' : '' }}" href="{{ route('key-dates') }}">Key Dates</a>
                                    <a class="dropdown-item{{ request()->routeIs('fees-and-scholarships') ?? true ? ' active' : '' }}" href="{{ route('fees-and-scholarships') }}">Fees & Scholarships </a>
                                    <a class="dropdown-item{{ request()->routeIs('who-should-enrol') ?? true ? ' active' : '' }}" href="{{ route('who-should-enrol') }}">Who should enrol?</a>
                                    <a class="dropdown-item{{ request()->routeIs('process-and-requirements') ?? true ? ' active' : '' }}" href="{{ route('process-and-requirements') }}">Process & Requirements</a>
                                </div>
                            </li>

                            <li class="hs-has-sub-menu navbar-nav-item">
                                <a id="howitworksMegaMenu" class="hs-mega-menu-invoker nav-link nav-link-toggle {{ (request()->routeIs('how-does-it-work') || request()->routeIs('technology') || request()->routeIs('why-online-only') || request()->routeIs('who-is-21k-class') || request()->routeIs('faq') || request()->routeIs('your-privacy') || request()->routeIs('safety-and-security')) ?? true ? 'active' : '' }}" href="javascript:void(0);" aria-haspopup="true" aria-expanded="false" aria-labelledby="howitworksSubMenu">How it works?</a>

                                <div id="howitworksSubMenu" class="hs-sub-menu dropdown-menu" aria-labelledby="howitworksMegaMenu" style="min-width: 230px;">
                                    <a class="dropdown-item{{ request()->routeIs('how-does-it-work') ?? true ? ' active' : '' }}" href="{{ route('how-does-it-work') }}">How does it work?</a>
                                    <a class="dropdown-item{{ request()->routeIs('technology') ?? true ? ' active' : '' }}" href="{{ route('technology') }}">Technology</a>
                                    <a class="dropdown-item{{ request()->routeIs('why-online-only') ?? true ? ' active' : '' }}" href="{{ route('why-online-only') }}">Why Online only?</a>
                                    <a class="dropdown-item{{ request()->routeIs('who-is-21k-class') ?? true ? ' active' : '' }}" href="{{ route('who-is-21k-class') }}">Who is 21K Class for?</a>
                                    <a class="dropdown-item{{ request()->routeIs('faq') ?? true ? ' active' : '' }}" href="{{ route('faq') }}">FAQ</a>
                                    <a class="dropdown-item{{ request()->routeIs('your-privacy') ?? true ? ' active' : '' }}" href="{{ route('your-privacy') }}">Your Privacy</a>
                                </div>
                            </li>

                            <li class="hs-has-sub-menu navbar-nav-item">
                                <a id="being21kMegaMenu" class="hs-mega-menu-invoker nav-link nav-link-toggle {{ (request()->routeIs('student-work') || request()->routeIs('parents-speak') || request()->routeIs('meet-our-faculty') || request()->routeIs('events') || request()->routeIs('media-hub') || request()->routeIs('insights')) ?? true ? 'active' : '' }}" href="javascript:void(0);" aria-haspopup="true" aria-expanded="false"  aria-labelledby="being21kSubMenu">#Being21K</a>

                                <div id="being21kSubMenu" class="hs-sub-menu dropdown-menu" aria-labelledby="being21kMegaMenu" style="min-width: 230px;">
                                    <a class="dropdown-item{{ request()->routeIs('student-work') ?? true ? ' active' : '' }}" href="{{ route('student-work') }}">Student Work</a>
                                    <a class="dropdown-item{{ request()->routeIs('parents-speak') ?? true ? ' active' : '' }}" href="{{ route('parents-speak') }}">Parent's Speak</a>
                                    <a class="dropdown-item{{ request()->routeIs('meet-our-faculty') ?? true ? ' active' : '' }}" href="{{ route('meet-our-faculty') }}">Meet our Faculty</a>
                                    <a class="dropdown-item{{ request()->routeIs('events') ?? true ? ' active' : '' }}" href="{{ route('events') }}">Events</a>
                                    <a class="dropdown-item{{ request()->routeIs('media-hub') ?? true ? ' active' : '' }}" href="{{ route('media-hub') }}">Media Hub</a>
                                    <a class="dropdown-item{{ request()->routeIs('insights') ?? true ? ' active' : '' }}" href="{{ route('insights') }}">Insights</a>
                                </div>
                            </li>

                            <li class="hs-has-sub-menu navbar-nav-item">
                                <a id="connectMegaMenu" class="hs-mega-menu-invoker nav-link nav-link-toggle {{ (request()->routeIs('contact-us') || request()->routeIs('work-with-us') || request()->routeIs('social') || request()->routeIs('career-intern') || request()->routeIs('career-software-engineer')) ?? true ? 'active' : '' }}" href="javascript:void(0);" aria-haspopup="true" aria-expanded="false" aria-labelledby="connectSubMenu">Connect</a>

                                <div id="connectSubMenu" class="hs-sub-menu dropdown-menu" aria-labelledby="connectMegaMenu" style="min-width: 230px;">
                                    <a class="dropdown-item{{ request()->routeIs('contact-us') ?? true ? ' active' : '' }}" href="{{ route('contact-us') }}">Contact Us</a>
                                    <a class="dropdown-item{{ (request()->routeIs('work-with-us') || request()->routeIs('career-intern') || request()->routeIs('career-software-engineer')) ?? true ? ' active' : '' }}" href="{{ route('work-with-us') }}">Work with us</a>
                                    <a class="dropdown-item{{ request()->routeIs('social') ?? true ? ' active' : '' }}" href="{{ route('social') }}">Social</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
