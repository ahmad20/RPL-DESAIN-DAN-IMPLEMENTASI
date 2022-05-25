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
            <div class="search-box">
                <input type="text" placeholder="Search...">
                <i class='bx bx-search'></i>
            </div>
            <div class="profile-details">
                <i class="glyphicon glyphicon-user"></i>
                <span class="admin_name">{{ Auth::guard('pengajar')->user()->name }}</span>
            </div>
        </nav>
        
        <div class="col d-flex">
            @if ($courses->count() == 0)
                {{ 'belum ada' }}
            @else
                @foreach ($courses as $c)
                    <div class="card">
                        {{-- <img src="https://placeholder.pics/svg/300x200" class="card-img-top" alt="..."> --}}
                        <div class="card-body">
                            <h5 class="card-title">{{ $c->name }}</h5>
                            <p class="card-text">{{ $c->description }}.</p>
                            <p style="color: gray;" class="card-text">Created at
                                {{ date('l, d M Y G:i', strtotime($c->created_at)) }}</p>
                            <p style="color: gray;" class="card-text">Created by
                                {{ $c->pengajar->name }}</p>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
        <div class="col d-flex">
            @foreach ($testpaper as $tp)
                @foreach ($tp as $t)
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $t->course->name }}</h5>
                            <p class="card-text">{{ $t->due_date }}.</p>
                        </div>
                    </div>
                @endforeach
            @endforeach

        </div>
        @if (is_null($pengajar->konsultasi))
            {{ 'belum ada' }}
        @else
            <div class="col d-flex">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Konsultasi</h5>
                        <p>Topik {{ $pengajar->konsultasi->topik }}</p>
                        <p class="card-text">{{ $pengajar->konsultasi->tanggal }}.</p>
                    </div>
                </div>
            </div>
        @endif

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
