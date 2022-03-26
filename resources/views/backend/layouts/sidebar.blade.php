<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ url('/home') }}"> <img alt="image" src={{ url('backend/img/logo.png') }}
                    class="header-logo" /> <span class="logo-name">Otika</span>
            </a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            @php
                $activeHome = '';
                if (url()->current() == url('/home')) {
                    $activeHome = 'active';
                }
            @endphp
            <li class="dropdown {{ $activeHome }}">
                <a href="{{ url('/home') }}" class="nav-link"><i
                        data-feather="monitor"></i><span>Dashboard</span></a>
            </li>

            @php
                $activeBanner = '';
                if (url()->current() == url('/admin/banner/') || url()->current() == url('/admin/banner/create')) {
                    $activeBanner = 'active';
                }
            @endphp
            <li class="dropdown {{ $activeBanner }}">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i
                        data-feather="briefcase"></i><span>Banner</span></a>
                <ul class="dropdown-menu">
                    <li @if (url()->current() == url('/admin/banner/')) class="active" @endif><a class="nav-link"
                            href="{{ url('admin/banner/') }}">all banner</a>
                    </li>
                    <li @if (url()->current() == url('/admin/banner/create/')) class="active" @endif><a class="nav-link"
                            href="{{ url('admin/banner/create/') }}">add
                            banner</a></li>
                </ul>
            </li>

            @php
                $activeUser = '';
                if (url()->current() == url('/admin/users')) {
                    $activeUser = 'active';
                }
            @endphp
            <li class="dropdown {{ $activeUser }}">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="users"></i><span>Users</span></a>
                <ul class="dropdown-menu">
            </li>
            <li @if (url()->current() == url('/admin/users')) class="active" @endif><a class="nav-link" href="{{ url('/admin/users') }}">All User</a>
            </li>
        </ul>
        </li>

        @php
            $activeMedia = '';
            if (url()->current() == url('/gallery')) {
                $activeMedia = 'active';
            }
        @endphp
        <li class="menu-header">Media</li>
        <li class="dropdown {{ $activeMedia }}">
            <a href="#" class="menu-toggle nav-link has-dropdown">
                <i data-feather="image"></i><span>Gallery</span>
            </a>
            <ul class="dropdown-menu">
                <li @if (url()->current() == url('/gallery')) class="active" @endif>
                    <a class="nav-link" href="{{ url('/gallery') }}">Gallery</a>
                </li>
            </ul>
        </li>
        </ul>
    </aside>
</div>
