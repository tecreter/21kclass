<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
    <div class="c-sidebar-brand d-md-down-none bg-white">
        <a class="navbar-brand" href="{{ route('back.home') }}">
            <img class="navbar-brand-full" src="/images/logos/s-logo.png" alt="logo" width="100">
        </a>
    </div>
    <ul class="c-sidebar-nav ps ps--active-y">
        <li class="c-sidebar-nav-title">{{ __('Modules') }}</li>

        <li class="c-sidebar-nav-dropdown{!! (Request::is('backoffice/course/*')) ? ' c-show' : '' !!}">
            <a class="c-sidebar-nav-dropdown-toggle" href="#"><i class="fas fa-book mr-2"></i> Course</a>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link{!! Request::is('backoffice/course/types/*') ? ' c-active' : '' !!}" href="{{ route('back.course.types.index') }}">
                        <i class="fas fa-award mr-2"></i> {{ __('List') }}
                    </a>
                </li>
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link{!! Request::is('backoffice/course/category/*') ? ' c-active' : '' !!}" href="{{ route('back.course.category.index') }}">
                        <i class="fas fa-swatchbook mr-2"></i> {{ __('Category') }}
                    </a>
                </li>
            </ul>
        </li>

        <li class="c-sidebar-nav-dropdown{!! (Request::is('backoffice/faculty/*')) ? ' c-show' : '' !!}">
            <a class="c-sidebar-nav-link{!! Request::is('backoffice/faculty/tutor*') ? ' c-active' : '' !!}" href="{{ route('back.faculty.tutor.index') }}">
                <i class="fas fa-user-tie mr-2"></i> {{ __('Tutors') }}
            </a>
        </li>

        <li class="c-sidebar-nav-dropdown{!! (Request::is('backoffice/order/*')) ? ' c-show' : '' !!}">
            <a class="c-sidebar-nav-link{!! Request::is('backoffice/order/tutor*') ? ' c-active' : '' !!}" href="{{ route('back.order.index') }}">
                <i class="fas fa-file mr-2"></i> {{ __('Orders') }}
            </a>
        </li>

    </ul>
</div>
