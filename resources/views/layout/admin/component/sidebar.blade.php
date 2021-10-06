<div class="iq-sidebar">
    <div class="iq-sidebar-logo d-flex justify-content-between">
        <a href="{{ route('user.dashboard') }}">
            <img src="{{ asset('website/images/logo_landscape1.png') }}" class="img-fluid" alt="">
        </a>
        <div class="iq-menu-bt-sidebar">
            <div class="iq-menu-bt align-self-center">
                <div class="wrapper-menu">
                    <div class="main-circle"><i class="ri-arrow-left-s-line"></i></div>
                    <div class="hover-circle"><i class="ri-arrow-right-s-line"></i></div>
                </div>
            </div>
        </div>
    </div>
    <div id="sidebar-scrollbar">
        <nav class="iq-sidebar-menu">
            <ul id="iq-sidebar-toggle" class="iq-menu">

                <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>My Account</span></li>
                <li class="{{ request()->routeIs('admin.wa-broadcast') ? ' active' : '' }}">
                    <a href="{{ route('admin.wa-broadcast') }}" class="iq-waves-effect">
                        <i class="ri-message-line"></i><span>Personal Information</span>
                    </a>
                </li>
                <li class="{{ request()->routeIs('admin.wa-broadcast') ? ' active' : '' }}">
                    <a href="{{ route('admin.wa-broadcast') }}" class="iq-waves-effect">
                        <i class="ri-message-line"></i><span>Privacy Setting</span>
                    </a>
                </li>
                <li class="{{ request()->routeIs('admin.wa-broadcast') ? ' active' : '' }}">
                    <a href="{{ route('admin.wa-broadcast') }}" class="iq-waves-effect">
                        <i class="ri-message-line"></i><span>Change Password</span>
                    </a>
                </li>

                @if (auth()->user()->role_id == 0)
                <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>Super Admin</span></li>
                <li class="{{ request()->routeIs('admin.wa-broadcast') ? ' active' : '' }}">
                    <a href="{{ route('admin.wa-broadcast') }}" class="iq-waves-effect">
                        <i class="ri-message-line"></i><span>WA Broadcast</span>
                    </a>
                </li>
                @endif

                @if (auth()->user()->role_id == 0 or auth()->user()->role_id > 1)
                <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>Dashboard</span></li>
                <li
                    class="{{ request()->routeIs('user.event.index') || request()->routeIs('admin.event') ? 'active' : '' }}">
                    <a href="#event-kepanitiaan"
                        class="iq-waves-effect {{ request()->routeIs('user.event.index') || request()->routeIs('admin.event') ? '' : 'collapsed' }}"
                        data-toggle="collapse"
                        aria-expanded="{{ request()->routeIs('user.event.index') || request()->routeIs('admin.event') ? ' true' : 'false' }}"><i
                            class="fa fa-tasks"></i><span>Event dan Kepanitiaan</span><i
                            class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                    <ul id="event-kepanitiaan"
                        class="iq-submenu collapse {{ request()->routeIs('user.event.index') || request()->routeIs('admin.event') ? 'show' : '' }}"
                        data-parent="#iq-sidebar-toggle">
                        <li class="{{ request()->routeIs('admin.event') ? 'active' : '' }}"><a
                                href="{{ route('admin.event') }}"><i class="fa fa-plus"></i>Buat Event</a></li>
                        <li class="{{ request()->routeIs('user.event.index') ? 'active' : '' }}"><a
                                href="{{ route('user.event.index') }}"><i class="fa fa-calendar"></i>Event Lain</a>
                        </li>
                    </ul>
                </li>
                @endif
            </ul>
        </nav>
    </div>
</div>
