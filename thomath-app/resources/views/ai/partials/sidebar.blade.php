<div class="sidebar">
    <div class="logo-details">
        <img class="Logo" src="/image/thomath.png" alt="">
        <span class="logo_name">THOMATH</span>
    </div>
    <ul class="nav-links">
        <li>
            <a href="{{ url('siswa/dashboard') }}" class="{{ (request()->is('*/dashboard')) ? 'active' : '' }}" >
                <i class='bx bx-grid-alt'></i>
                <span class="links_name">Dashboard</span>
            </a>
        </li>
        <li>
            <a href="{{ url('siswa/course') }}" class="{{ (request()->is('*/lihat-nilai')) ? 'active' : '' }}">
                <i class='bx bx-book-alt'></i>
                <span class="links_name">Course</span>
            </a>
        </li>
        <li>
            <a href="{{ url('siswa/lihat-nilai') }}" class="{{ (request()->is('*/lihat-nilai')) ? 'active' : '' }}">
                <i class='bx bx-book-alt'></i>
                <span class="links_name">Lihat Nilai</span>
            </a>
        </li>
        <li>
            <a href="{{ url('ai') }}" class="{{ (request()->is('*/lihat-nilai')) ? 'active' : '' }}">
                <i class='bx bx-book-alt'></i>
                <span class="links_name">Search Video</span>
            </a>
        </li>
        <li class="log_out">
            <a href="{{ url('siswa/logout') }}">
                <i class='bx bx-log-out'></i>
                <span class="links_name">Log out</span>
            </a>
        </li>
    </ul>
</div>

