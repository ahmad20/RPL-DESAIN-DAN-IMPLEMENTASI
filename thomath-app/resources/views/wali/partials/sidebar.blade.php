<div class="sidebar">
    <div class="logo-details">
        <img class="Logo" src="/image/thomath.png" alt="">
        <span class="logo_name">THOMATH</span>
    </div>
    <ul class="nav-links">
        <li>
            <a href="{{ url('walimurid/dashboard') }}" class="{{ (request()->is('*/dashboard')) ? 'active' : '' }}" >
                <i class='bx bx-grid-alt'></i>
                <span class="links_name">Dashboard</span>
            </a>
        </li>
        <li>
            <a href="{{ url('walimurid/konsultasi') }}" class="{{ (request()->is('*/konsultasi')) ? 'active' : '' }}">
                <i class='bx bx-pie-chart-alt-2'></i>
                <span class="links_name">Konsultasi</span>
            </a>
        </li>
        <li>
            <a href="{{ url('walimurid/lihat-nilai') }}" class="{{ (request()->is('*/lihat-nilai')) ? 'active' : '' }}">
                <i class='bx bx-book-alt'></i>
                <span class="links_name">Lihat Nilai Anak</span>
            </a>
        </li>
        <li>
            <a href="{{ url('walimurid/profile') }}" class="{{ (request()->is('walimurid/profile')) ? 'active' : '' }}"">
                <i class='bx bx-user'></i>
                <span class="links_name">Edit Profile</span>
            </a>
        </li>
        <li class="log_out">
            <a href="{{ url('walimurid/logout') }}">
                <i class='bx bx-log-out'></i>
                <span class="links_name">Log out</span>
            </a>
        </li>
    </ul>
</div>

