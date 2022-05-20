<div class="sidebar">
    <div class="logo-details">
        <img class="Logo" src="/image/thomath.png" alt="">
        <span class="logo_name">THOMATH</span>
    </div>
    <ul class="nav-links">
        <li>
            <a href="{{ url('pengajar/dashboard') }}" class="{{ (request()->is('*/dashboard')) ? 'active' : '' }}">
                <i class='bx bx-grid-alt'></i>
                <span class="links_name">Dashboard</span>
            </a>
        </li>
        <li>
            <a href="{{ url('pengajar/konsultasi') }}" class="{{ (request()->is('*/konsultasi')) ? 'active' : '' }}">
                <i class='bx bx-pie-chart-alt-2'></i>
                <span class="links_name">Konsultasi</span>
            </a>
        </li>
        <li>
            <a href="{{ url('pengajar/course') }}" class="{{ (request()->is('*/course')) ? 'active' : '' }}">
                <i class='bx bx-book-alt'></i>
                <span class="links_name">Course</span>
            </a>
        </li>
        <li>
            <a href="{{ url('pengajar/course-material') }}" class="{{ (request()->is('*/course-material')) ? 'active' : '' }}">
                <i class='bx bx-book-content'></i>
                <span class="links_name">Course Material</span>
            </a>
        </li>
        <li>
            <a href="{{ url('pengajar/test') }}" class="{{ (request()->is('*/test')) ? 'active' : '' }}">
                <i class='bx bx-highlight'></i>
                <span class="links_name">Teacher Test</span>
            </a>
        </li>
        <li class="log_out">
            <a href="{{ url('pengajar/logout') }}">
                <i class='bx bx-log-out'></i>
                <span class="links_name">Log out</span>
            </a>
        </li>
    </ul>
</div>