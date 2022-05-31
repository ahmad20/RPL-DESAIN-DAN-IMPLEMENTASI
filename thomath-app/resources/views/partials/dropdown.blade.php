<div class="navbar-nav mx-auto"></div>
<div class="navbar-nav ml-auto">
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
            data-bs-toggle="dropdown" aria-expanded="false"
            style="background: transparent; color: black; border: none; font-family: sans-serif; font-size: medium;">Login</button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <li><a class="dropdown-item" href="{{ url('siswa/login') }}">Murid</a></li>
            <li><a class="dropdown-item" href="{{ url('pengajar/login') }}">Pengajar</a></li>
            <li><a class="dropdown-item" href="{{ url('walimurid/login') }}">Wali Murid</a></li>
        </ul>
    </div>
    <div class="dropdown">
        <button class="btn btn-fill dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
            data-bs-toggle="dropdown" aria-expanded="false"
            style="background-color: rgb(185, 39, 39); background: transparent; color: black; border: none; font-family: sans-serif; font-size: medium;">Registrasi</button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <li><a class="dropdown-item" href="{{ url('siswa/register') }}">Murid</a></li>
            <li><a class="dropdown-item" href="{{ url('pengajar/register') }}">Pengajar</a></li>
            <li><a class="dropdown-item" href="{{ url('walimurid/register') }}">Wali Murid</a></li>
        </ul>
    </div>
</div>
