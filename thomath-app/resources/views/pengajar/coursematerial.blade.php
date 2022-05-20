<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/coursematerial.css">
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
    @include('pengajar.partials.sidebar')

    <section class="home-section">
        <nav>
            <div class="sidebar-button">
                <i class='bx bx-menu sidebarBtn'></i>
                <span class="course">Course Material</span>
            </div>
            <div class="search-box">
                <input type="text" placeholder="Search...">
                <i class='bx bx-search'></i>
            </div>
            <div class="profile-details">
                <i class="glyphicon glyphicon-user"></i>
                <span class="admin_name">{{ Auth::guard('pengajar')->user()->name }}</span>
            </div>
        </nav>
        <div class="col d-flex justify-content-center">
            <div class="card" style="width: 30rem;">
                <div class="card-header">
                    Bilangan Bulat
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Bilangan Bulat Positif</li>
                    <li class="list-group-item">Bilangan Bulat Negatif</li>
                    <li class="list-group-item">Bilangan Prima</li>
                </ul>
            </div>
            <div class="card" style="width: 30rem;">
                <div class="card-header">
                    Operasi Matematika
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Perkalian</li>
                    <li class="list-group-item">Pembagian</li>
                    <li class="list-group-item">Pertambahan dan Pengurangan</li>
                </ul>
            </div>
            <div class="card" style="width: 30rem;">
                <div class="card-header">
                    Bilangan Pecahan
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Pecahan Campuran</li>
                    <li class="list-group-item">Pecahan Desimal</li>
                    <li class="list-group-item">Operasi Bilangan Pecahan</li>
                </ul>
            </div>
        </div>
        <div class="col d-flex justify-content-center">
            <div class="card" style="width: 30rem;">
                <div class="card-header">
                    Bilangan Bulat
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Bilangan Bulat Positif</li>
                    <li class="list-group-item">Bilangan Bulat Negatif</li>
                    <li class="list-group-item">Bilangan Prima</li>
                </ul>
            </div>
            <div class="card" style="width: 30rem;">
                <div class="card-header">
                    Operasi Matematika
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Perkalian</li>
                    <li class="list-group-item">Pembagian</li>
                    <li class="list-group-item">Pertambahan dan Pengurangan</li>
                </ul>
            </div>
            <div class="card" style="width: 30rem;">
                <div class="card-header">
                    Bilangan Pecahan
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Pecahan Campuran</li>
                    <li class="list-group-item">Pecahan Desimal</li>
                    <li class="list-group-item">Operasi Bilangan Pecahan</li>
                </ul>
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

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
                integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
                integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
                integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>
</body>

</html>
