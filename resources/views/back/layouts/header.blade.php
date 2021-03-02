<header class="c-header c-header-light c-header-fixed">

    <button class="c-header-toggler c-class-toggler d-lg-none mfe-auto" type="button" data-target="#sidebar" data-class="c-sidebar-show">
        <i class="fas fa-bars"></i>
    </button>
    <a class="c-header-brand d-lg-none c-header-brand-sm-up-center" href="{{ route('back.home') }}">
        <img class="navbar-brand-full" src="{{ cdn_mix('/images/hotelpoco-logo.png') }}" alt="hotelpoco-logo" width="100">
    </a>
    <button class="c-header-toggler c-class-toggler mfs-0 d-md-down-none" type="button" data-target="#sidebar" data-class="c-sidebar-lg-show" responsive="true">
        <i class="fas fa-bars"></i>
    </button>


    <ul class="c-header-nav ml-auto mr-2">
        <li class="c-header-nav-item dropdown">
            <a class="btn dropdown-toggle" id="dropdownMenuButton" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user"></i> {{ Auth::guard('admin')->user()->name }}
            </a>
            <div class="dropdown-menu dropdown-menu-right pt-0 pb-0" aria-labelledby="dropdownMenuButton">
                <form id="logout-form" action="{{ route('back.logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                <a class="dropdown-item" href="{{ route('back.logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    <i class="fa fa-sign-out-alt pr-2"></i> {{ __('로그아웃') }}
                </a>
            </div>
        </li>
    </ul>
</header>
