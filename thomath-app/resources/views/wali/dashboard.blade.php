<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/dashboard.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css"
        integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>RPL THOMATH</title>
</head>

<body>
    @include('wali.partials.sidebar')

    <section class="home-section">
        <nav>
            <div class="sidebar-button">
                <i class='bx bx-menu sidebarBtn'></i>
                <span class="dashboard">Dashboard</span>
            </div>
            <div class="profile-details">
                <i class="glyphicon glyphicon-user"></i>
                <div class="admin_name">{{ ucwords(Auth::guard('walimurid')->user()->name) }}</div>
            </div>
        </nav>
        <img class="anaksd" src="/image/anaksd.png" alt="">
        <div class="card1">
            <div class="card-body1" style="background: white; margin-left: 20px; width: 990px">
                <h2 style="margin-top: -70px; font-weight: bold; font-size:25px">Halo, Selamat Datang di Thomath</h2>
                <h3 style="margin-top: 10px;">Data Diri</h3>
                <p style="font-size: small"> Email : {{Auth::guard('walimurid')->user()->email }}</p>
                <p style="font-size: small"> Nama : {{Auth::guard('walimurid')->user()->name }}</p>
                <p style="font-size: small"> Nomor Telepon : {{Auth::guard('walimurid')->user()->phone_number }}</p>
            </div>
        </div>
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
