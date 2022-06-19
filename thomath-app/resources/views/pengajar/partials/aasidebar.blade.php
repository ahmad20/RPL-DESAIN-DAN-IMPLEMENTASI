
<div class="l-navbar" id="nav-bar">
    <nav class="nav">
        <div>
            <a href="#" class="nav_logo">
                <i class="bx bx-layer nav_logo-icon"></i>
                <span class="nav_logo-name">Thomath</span>
            </a>
            <div class="nav_list">
                <a href="{{ url('pengajar/dashboard') }}"
                    class="nav_link {{ request()->is('*/dashboard') ? 'active' : '' }}">
                    <i class='bx bx-grid-alt nav_icon'></i>
                    <span class="nav_name">Dashboard</span>
                </a>
                <a href="{{ url('pengajar/konsultasi') }}"
                    class="nav_link {{ request()->is('*/konsultasi') ? 'active' : '' }}">
                    <i class='bx bx-pie-chart-alt-2 nav_icon'></i>
                    <span class="nav_name">Konsultasi</span>
                </a>
                <a href="{{ url('pengajar/course') }}" class="nav_link {{ request()->is('*/course') ? 'active' : '' }}">
                    <i class='bx bx-book-alt nav_icon'></i>
                    <span class="nav_name">Course</span>
                </a>
                <a href="{{ url('pengajar/course-material') }}"
                    class="nav_link {{ request()->is('*/course-material') ? 'active' : '' }}">
                    <i class='bx bx-book-content nav_icon'></i>
                    <span class="nav_name">Course Material</span>
                </a>
                <a href="{{ url('pengajar/test') }}" class="nav_link {{ request()->is('*/test') ? 'active' : '' }}">
                    <i class='bx bx-highlight nav_icon'></i>
                    <span class="nav_name">Teacher Test</span>
                </a>
                {{-- <a href="{{ url('pengajar/logout') }}" class="nav_link ">
                    <i class='bx bx-log-out nav_icon'></i>
                    <span class="nav_name">Log out</span>
                </a> --}}
            </div>
        </div>
        <a href="{{ url('pengajar/logout') }}" class="nav_link ">
            <i class="bx bx-log-out nav_icon"></i>
            <span class="nav_name">SignOut</span>
        </a>
    </nav>
</div>
