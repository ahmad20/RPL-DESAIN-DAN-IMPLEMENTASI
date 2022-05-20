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
    @include('pengajar.partials.sidebar')

    <section class="home-section">
        <nav>
            <div class="sidebar-button">
                <i class='bx bx-menu sidebarBtn'></i>
                <span class="course">Course</span>
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
            <div class="card">
                <img src="https://placeholder.pics/svg/300x200" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Matematika</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the
                        bulk of the card's
                        content.</p>
                    <p style="font-size: 12px; color: gray;" class="mb-0">Updated 3 minutes ago</p>
                </div>
            </div>
            <div class="card">
                <img src="https://placeholder.pics/svg/300x200" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Matematika</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the
                        bulk of the card's
                        content.</p>
                    <p style="font-size: 12px; color: gray;" class="mb-0">Updated 3 minutes ago</p>
                </div>
            </div>
            <div class="card">
                <img src="https://placeholder.pics/svg/300x200" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Matematika</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the
                        bulk of the card's
                        content.</p>
                    <p style="font-size: 12px; color: gray;" class="mb-0">Updated 3 minutes ago</p>
                </div>
            </div>
        </div>
        <div class="col d-flex justify-content-center">
            <div class="card" id="card1">
                <img src="https://placeholder.pics/svg/300x200" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Matematika</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the
                        bulk of the card's
                        content.</p>
                    <p style="font-size: 12px; color: gray;" class="mb-0">Updated 3 minutes ago</p>
                </div>
            </div>
            <div class="card" id="card1">
                <img src="https://placeholder.pics/svg/300x200" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Matematika</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the
                        bulk of the card's
                        content.</p>
                    <p style="font-size: 12px; color: gray;" class="mb-0">Updated 3 minutes ago</p>
                </div>
            </div>
            <div class="card" id="card1">
                <img src="https://placeholder.pics/svg/300x200" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Matematika</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the
                        bulk of the card's
                        content.</p>
                    <p style="font-size: 12px; color: gray;" class="mb-0">Updated 3 minutes ago</p>
                </div>
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
