<header id="header" class="header header-box-shadow-on-scroll header-abs-top header-bg-transparent header-show-hide"
        data-hs-header-options='{
            "fixMoment": 1,
            "fixEffect": "slide"
          }'>

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
                            <a class="dropdown-item" href="javascript:void(0);">Tutoring</a>
                            <a class="dropdown-item active" href="javascript:void(0);">Coaching</a>
                            <a class="dropdown-item" href="javascript:void(0);">Commerce</a>
                        </div>
                    </div>

                    <div class="nav nav-sm nav-y-0 d-none d-sm-flex ml-sm-auto">
                        <a class="nav-link" href="javascript:void(0);">Tutoring</a>
                        <a class="nav-link active" href="javascript:void(0);">Coaching</a>
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
                                                        "hideOnScroll": "true"
                                                       }'>
                                <i class="fas fa-shopping-cart"></i>
                            </a>

                            <div id="shoppingCartDropdown"
                                 class="hs-unfold-content dropdown-menu dropdown-menu-right dropdown-card text-center"
                                 style="min-width: 275px;">
                                <div class="card">
                                    <div class="card-body">
                                        <figure class="max-w-9rem mx-auto mb-3">
                                            <img class="img-fluid"
                                                 src="{{ cdn_mix('/svg/illustrations/empty-cart.svg') }}"
                                                 alt="SVG">
                                        </figure>
                                        <span class="d-block">Your cart is empty</span>
                                    </div>

                                    <div class="card-footer">
                                        <button type="button" class="btn btn-primary btn-xs">View Cart</button>
                                    </div>
                                </div>
                            </div>
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
                                <a id="aboutusMegaMenu" class="hs-mega-menu-invoker nav-link nav-link-toggle {{ (request()->routeIs('what-sets-us-apart') || request()->routeIs('values-and-ethos') || request()->routeIs('21k-group') || request()->routeIs('our-team') || request()->routeIs('our-partners') || request()->routeIs('policy-and-governance')) ?? true ? 'active' : '' }}" href="javascript:void(0);" aria-haspopup="true" aria-expanded="false" aria-labelledby="aboutusSubMenu">About Us</a>

                                <div id="aboutusSubMenu" class="hs-sub-menu dropdown-menu" aria-labelledby="aboutusMegaMenu" style="min-width: 230px;">
                                    <a class="dropdown-item{{ request()->routeIs('what-sets-us-apart') ?? true ? ' active' : '' }}" href="{{ route('what-sets-us-apart') }}">What sets us apart?</a>
                                    <a class="dropdown-item{{ request()->routeIs('values-and-ethos') ?? true ? ' active' : '' }}" href="{{ route('values-and-ethos') }}">Values & Ethos</a>
                                    <a class="dropdown-item{{ request()->routeIs('21k-group') ?? true ? ' active' : '' }}" href="{{ route('21k-group') }}">21K Group</a>
                                    <a class="dropdown-item{{ request()->routeIs('our-team') ?? true ? ' active' : '' }}" href="{{ route('our-team') }}">Our Team</a>
                                    <a class="dropdown-item{{ request()->routeIs('our-partners') ?? true ? ' active' : '' }}" href="{{ route('our-partners') }}">Our Partners</a>
                                    <a class="dropdown-item{{ request()->routeIs('policy-and-governance') ?? true ? ' active' : '' }}" href="{{ route('policy-and-governance') }}">Policy & Governance</a>
                                </div>
                            </li>

                            <li class="hs-has-sub-menu navbar-nav-item">
                                <a id="blogMegaMenu" class="hs-mega-menu-invoker nav-link nav-link-toggle {{ (request()->routeIs('neet-test-series') || request()->routeIs('neet-2021-personal-coaching') || request()->routeIs('neet-2022-full-year') || request()->routeIs('iit-jee-2022-full-year') || request()->routeIs('olympiads') || request()->routeIs('national-talent-exam')) ?? true ? 'active' : '' }}" href="javascript:void(0);" aria-haspopup="true" aria-expanded="false" aria-labelledby="blogSubMenu">Academics</a>

                                <div id="blogSubMenu" class="hs-sub-menu dropdown-menu" aria-labelledby="blogMegaMenu" style="min-width: 230px;">
                                    <a class="dropdown-item{{ request()->routeIs('neet-test-series') ?? true ? ' active' : '' }}" href="{{ route('neet-test-series') }}">NEET Test Series</a>
                                    <a class="dropdown-item{{ request()->routeIs('neet-2021-personal-coaching') ?? true ? ' active' : '' }}" href="{{ route('neet-2021-personal-coaching') }}">NEET Coaching</a>
                                    <a class="dropdown-item{{ request()->routeIs('neet-2022-full-year') ?? true ? ' active' : '' }}" href="{{ route('neet-2022-full-year') }}">JEE Test Series</a>
                                    <a class="dropdown-item{{ request()->routeIs('iit-jee-2022-full-year') ?? true ? ' active' : '' }}" href="{{ route('iit-jee-2022-full-year') }}">JEE Coaching</a>

                                    <div class="dropdown-divider"></div>

                                    <span class="d-block h5 mx-4 mt-4">Excellence</span>
                                    <a class="dropdown-item{{ request()->routeIs('olympiads') ?? true ? ' active' : '' }}" href="{{ route('olympiads') }}">Olympiads</a>
                                    <a class="dropdown-item{{ request()->routeIs('national-talent-exam') ?? true ? ' active' : '' }}" href="{{ route('national-talent-exam') }}">National Talent Exam</a>
                                </div>
                            </li>

                            <li class="hs-has-sub-menu navbar-nav-item">
                                <a id="admissionsMegaMenu" class="hs-mega-menu-invoker nav-link nav-link-toggle {{ (request()->routeIs('how-to-apply') || request()->routeIs('key-dates') || request()->routeIs('fees-finance-and-scholarships') || request()->routeIs('who-should-enrol') || request()->routeIs('process-and-requirements')) ?? true ? 'active' : '' }}" href="javascript:void(0);" aria-haspopup="true" aria-expanded="false" aria-labelledby="admissionsSubMenu">Admissions</a>

                                <div id="admissionsSubMenu" class="hs-sub-menu dropdown-menu" aria-labelledby="admissionsMegaMenu" style="min-width: 230px;">
                                    <a class="dropdown-item{{ request()->routeIs('how-to-apply') ?? true ? ' active' : '' }}" href="{{ route('how-to-apply') }}">How to apply?</a>
                                    <a class="dropdown-item{{ request()->routeIs('key-dates') ?? true ? ' active' : '' }}" href="{{ route('key-dates') }}">Key Dates</a>
                                    <a class="dropdown-item{{ request()->routeIs('fees-finance-and-scholarships') ?? true ? ' active' : '' }}" href="{{ route('fees-finance-and-scholarships') }}">Fees, Finance & Scholarships </a>
                                    <a class="dropdown-item{{ request()->routeIs('who-should-enrol') ?? true ? ' active' : '' }}" href="{{ route('who-should-enrol') }}">Who should enrol?</a>
                                    <a class="dropdown-item{{ request()->routeIs('process-and-requirements') ?? true ? ' active' : '' }}" href="{{ route('process-and-requirements') }}">Process & Requirements</a>
                                </div>
                            </li>

                            <li class="hs-has-sub-menu navbar-nav-item">
                                <a id="howitworksMegaMenu" class="hs-mega-menu-invoker nav-link nav-link-toggle {{ (request()->routeIs('how-does-it-work') || request()->routeIs('technology') || request()->routeIs('why-online-only') || request()->routeIs('who-is-21k-class') || request()->routeIs('faq') || request()->routeIs('health-and-wealthness') || request()->routeIs('your-privacy') || request()->routeIs('safety-and-security')) ?? true ? 'active' : '' }}" href="javascript:void(0);" aria-haspopup="true" aria-expanded="false" aria-labelledby="howitworksSubMenu">How it works?</a>

                                <div id="howitworksSubMenu" class="hs-sub-menu dropdown-menu" aria-labelledby="howitworksMegaMenu" style="min-width: 230px;">
                                    <a class="dropdown-item{{ request()->routeIs('how-does-it-work') ?? true ? ' active' : '' }}" href="{{ route('how-does-it-work') }}">How does it work?</a>
                                    <a class="dropdown-item{{ request()->routeIs('technology') ?? true ? ' active' : '' }}" href="{{ route('technology') }}">Technology</a>
                                    <a class="dropdown-item{{ request()->routeIs('why-online-only') ?? true ? ' active' : '' }}" href="{{ route('why-online-only') }}">Why Online only?</a>
                                    <a class="dropdown-item{{ request()->routeIs('who-is-21k-class') ?? true ? ' active' : '' }}" href="{{ route('who-is-21k-class') }}">Who is 21K Class for?</a>
                                    <a class="dropdown-item{{ request()->routeIs('faq') ?? true ? ' active' : '' }}" href="{{ route('faq') }}">FAQ</a>
                                    <a class="dropdown-item{{ request()->routeIs('health-and-wealthness') ?? true ? ' active' : '' }}" href="{{ route('health-and-wealthness') }}">Health & Wealthness</a>
                                    <a class="dropdown-item{{ request()->routeIs('your-privacy') ?? true ? ' active' : '' }}" href="{{ route('your-privacy') }}">Your Privacy</a>
                                    <a class="dropdown-item{{ request()->routeIs('safety-and-security') ?? true ? ' active' : '' }}" href="{{ route('safety-and-security') }}">Safety & Security</a>
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
