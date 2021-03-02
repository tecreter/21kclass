<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
    <div class="c-sidebar-brand d-md-down-none bg-white">
        <a class="navbar-brand" href="{{ route('back.home') }}">
            <img class="navbar-brand-full" src="{{ cdn_mix('/images/hotelpoco-logo.png') }}" alt="hotelpoco-logo" width="100">
        </a>
    </div>
    <ul class="c-sidebar-nav ps ps--active-y">
        <li class="c-sidebar-nav-title">{{ __('설정') }}</li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link{!! Request::is('backoffice/popup/*') ? ' c-active' : '' !!}" href="{{ route('back.popup.index') }}">
                <i class="fas fa-parachute-box mr-2"></i> {{ __('팝업창') }}
            </a>
        </li>

        <li class="c-sidebar-nav-dropdown{!! (Request::is('backoffice/sections/about/*') || Request::is('backoffice/sections/room/*') || Request::is('backoffice/sections/offer/*') || Request::is('backoffice/sections/facility/*') || Request::is('backoffice/sections/dining/*') || Request::is('backoffice/sections/wedding/*') || Request::is('backoffice/sections/golf/*') || Request::is('backoffice/sections/page/*')) ? ' c-show' : '' !!}">
            <a class="c-sidebar-nav-dropdown-toggle" href="#"><i class="fas fa-th-large mr-2"></i> 섹션</a>
            <ul class="c-sidebar-nav-dropdown-items">
                @foreach($hotelGlobalPagesData as $item)
                    @if(strpos($item->page->link, 'offer') !== false)
                        <li class="c-sidebar-nav-item">
                            <a class="c-sidebar-nav-link{!! Request::is('backoffice/sections/offer/*') ? ' c-active' : '' !!}" href="{{ route('back.sections.offer.index') }}">
                                <i class="fas fa-fire-alt mr-2"></i> {{ __('스페셜오퍼') }}
                            </a>
                        </li>
                    @endif
                @endforeach
                @foreach($hotelGlobalPagesData as $item)
                    @if(strpos($item->page->link, 'accommodation') !== false)
                        <li class="c-sidebar-nav-item">
                            <a class="c-sidebar-nav-link{!! Request::is('backoffice/sections/room/*') ? ' c-active' : '' !!}" href="{{ route('back.sections.room.index') }}">
                                <i class="fas fa-swatchbook mr-2"></i> {{ __('객실 보기') }}
                            </a>
                        </li>
                    @endif
                @endforeach
                @foreach($hotelGlobalPagesData as $item)
                    @if(strpos($item->page->link, 'about') !== false)
                        <li class="c-sidebar-nav-item">
                            <a class="c-sidebar-nav-link{!! Request::is('backoffice/sections/about/*') ? ' c-active' : '' !!}" href="{{ route('back.sections.about.index') }}">
                                <i class="fas fa-podcast mr-2"></i> {{ __('호텔소개') }}
                            </a>
                        </li>
                    @endif
                @endforeach
                @foreach($hotelGlobalPagesData as $item)
                    @if(strpos($item->page->link, 'facilities') !== false)
                        <li class="c-sidebar-nav-item">
                            <a class="c-sidebar-nav-link{!! Request::is('backoffice/sections/facility/*') ? ' c-active' : '' !!}" href="{{ route('back.sections.facility.index') }}">
                                <i class="fas fa-atom mr-2"></i> {{ __('부대시설') }}
                            </a>
                        </li>
                    @endif
                @endforeach
                @foreach($hotelGlobalPagesData as $item)
                    @if(strpos($item->page->link, 'dining') !== false)
                        <li class="c-sidebar-nav-item">
                            <a class="c-sidebar-nav-link{!! Request::is('backoffice/sections/dining/*') ? ' c-active' : '' !!}" href="{{ route('back.sections.dining.index') }}">
                                <i class="fas fa-utensils mr-2"></i> {{ __('다이닝') }}
                            </a>
                        </li>
                    @endif
                @endforeach
                @foreach($hotelGlobalPagesData as $item)
                    @if(strpos($item->page->link, 'banquet') !== false)
                        <li class="c-sidebar-nav-item">
                            <a class="c-sidebar-nav-link{!! Request::is('backoffice/sections/wedding/*') ? ' c-active' : '' !!}" href="{{ route('back.sections.wedding.index') }}">
                                <i class="fas fa-couch mr-2"></i> {{ __('연회') }}
                            </a>
                        </li>
                    @endif
                @endforeach
                @foreach($hotelGlobalPagesData as $item)
                    @if(strpos($item->page->link, 'golf') !== false)
                        <li class="c-sidebar-nav-item">
                            <a class="c-sidebar-nav-link{!! Request::is('backoffice/sections/golf/*') ? ' c-active' : '' !!}" href="{{ route('back.sections.golf.index') }}">
                                <i class="fas fa-golf-ball mr-2"></i> {{ __('골프') }}
                            </a>
                        </li>
                    @endif
                @endforeach
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link{!! Request::is('backoffice/sections/page/*') ? ' c-active' : '' !!}" href="{{ route('back.sections.page.index') }}">
                        <i class="fas fa-file mr-2"></i> {{ __('페이지') }}
                    </a>
                </li>
            </ul>
        </li>

        <li class="c-sidebar-nav-dropdown{!! (Request::is('backoffice/settings/company/*') || Request::is('backoffice/settings/language/*') || Request::is('backoffice/settings/whitelist/*') || Request::is('backoffice/settings/admin/*')) ? ' c-show' : '' !!}">
            <a class="c-sidebar-nav-dropdown-toggle" href="#"><i class="fas fa-cogs mr-2"></i> 사이트 설정</a>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link{!! Request::is('backoffice/settings/company/*') ? ' c-active' : '' !!}" href="{{ route('back.settings.company.index') }}">
                        <i class="fas fa-address-card mr-2"></i> {{ __('회사정보') }}
                    </a>
                </li>
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link{!! Request::is('backoffice/settings/language/*') ? ' c-active' : '' !!}" href="{{ route('back.settings.language.index') }}">
                        <i class="fas fa-language mr-2"></i> {{ __('언어 설정') }}
                    </a>
                </li>
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link{!! Request::is('backoffice/settings/whitelist/*') ? ' c-active' : '' !!}" href="{{ route('back.settings.whitelist.index') }}">
                        <i class="fas fa-lock mr-2"></i> {{ __('IP 화이트리스트') }}
                    </a>
                </li>
                @if (Auth::user()->isMasterAdmin())
                    <li class="c-sidebar-nav-item">
                        <a class="c-sidebar-nav-link{!! Request::is('backoffice/settings/admin/*') ? ' c-active' : '' !!}" href="{{ route('back.settings.admin.index') }}">
                            <i class="fas fa-user-cog mr-2"></i> {{ __('관리자 설정') }}
                        </a>
                    </li>
                @endif
            </ul>
        </li>

    </ul>
</div>
