<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/course.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css"
        integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>RPL THOMATH</title>
</head>

<body>
    @include('siswa.partials.sidebar')

    <section class="home-section">
        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
        <nav>
            <div class="sidebar-button">
                <i class='bx bx-menu sidebarBtn'></i>
                <span class="dashboard">Dashboard</span>
            </div>
            <div class="profile-details">
                <i class="glyphicon glyphicon-user"></i>
                <div class="admin_name">{{ ucwords($siswa->name) }}</div>
            </div>
        </nav>
        <img class="anaksd" src="/image/anaksd.png" alt="">
        <div class="card1">
            <div class="card-body1" style="background: white; margin-left: 20px; width: 990px">
                <h2 style="margin-top: -70px; font-weight: bold">Halo, Selamat Datang di Thomath</h2>
                <h3 style="margin-top: 10px;">Data Diri</h3>
                <p style="font-size: small"> Email : {{ $siswa->email }}</p>
                <p style="font-size: small"> Nama : {{ $siswa->name }}</p>
                <p style="font-size: small"> Nomor Telepon : {{ $siswa->phone_number }}</p>
            </div>
        </div>
        <div class="col d-flex">
            @foreach ($courses as $course)
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $course->name }}</h5>
                        <a href="singlecourse/{{ $course->id_course }}">
                            <p> More Details</p>
                        </a>
                        <div class="input-group input-group-lg mt-5">
                            <p>{{ $course->pengajar->name }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
        <script>
            let sidebar = document.querySelector(".sidebar");
            let sidebarBtn = document.querySelector(".sidebarBtn");
            sidebarBtn.onclick = function() {
                sidebar.classList.toggle("active");
                if (sidebar.classList.contains("active")) {
                    sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
                } else
                    sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
            }
        </script>

</body>

</html>
