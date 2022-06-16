<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/course.css">
    {{-- <link rel="stylesheet" href="/css/dashboard.css"> --}}
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
                <span class="dashboard">Dashboard</span>
            </div>
            <div class="profile-details">
                <i class="glyphicon glyphicon-user"></i>
                <span class="admin_name">{{ Auth::guard('pengajar')->user()->name }}</span>
            </div>
        </nav>
        <div style="padding-top:100px; padding-left: 70px; margin-right:500px">
            <h3 style="margin-bottom: 20px">Course Detail</h3>
            <p>Course Name : <a class="form-control" style="margin-left: 80px; margin-top:-25px; padding-top: 10px; margin-bottom: 20px">{{ $c->name }}</a></p>
            <p>Description  : <a class="form-control" style="margin-left: 80px; margin-top:-25px; padding-top: 10px; margin-bottom: 20px">{{ $c->description }}</a></p>
            <p>Created At : <a class="form-control" style="margin-left: 80px; margin-top:-25px; padding-top: 10px; margin-bottom: 20px">{{ $c->created_at }}</a></p>
            <p>Last Update : <a class="form-control" style="margin-left: 80px; margin-top:-25px; padding-top: 10px; margin-bottom: 20px">{{ $c->updated_at }}</a></p>
            <ul style="list-style-type: none">List Siswa :
            @foreach ($c->siswa as $s)
                <li class="form-control" style="margin-left: 80px; margin-top:-25px; padding-top: 10px; margin-bottom: 30px">{{ $s->name }}</li>
            @endforeach
            </ul>
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
