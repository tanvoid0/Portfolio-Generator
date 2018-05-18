<nav class="pcoded-navbar">
    <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
    <div class="pcoded-inner-navbar main-menu">

        {{-- <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">AirCV</div> --}}
        <ul class="pcoded-item pcoded-left-item">
            <li class="
            @if(Request::route()->getName() == 'dashboard') active 
            @endif
            ">
                <a href="{{ route('admin') }}">
                    <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="
            @if(Request::route()->getName() == 'profile') active 
            @endif
            ">
                <a href="{{ route('profile') }}">
                    <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.dash.main">Profile</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
        </ul>
    </div>
</nav>