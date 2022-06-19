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

        <div class="col d-flex">
            @if ($courses->count() == 0)
                {{ 'belum ada' }}
            @else
                @foreach ($courses as $c)
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $c->name }}</h5>
                            <a href="singlecourse/{{ $c->id_course }}">
                                <p> More Details</p>
                            </a>
                            <div class="input-group input-group-lg mt-5">
                                <a href="/pengajar/course/edit/{{$c->id_course }}" style="text-decoration: none">
                                    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                    Edit
                                </a>
                                <a href="course/delete/{{$c->id_course }}" style="text-decoration: none">
                                    <span class="glyphicon glyphicon-trash ml-3" aria-hidden="true"></span>
                                    Hapus
                                </a>
                            </div>
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
                            <a href="singletest/{{ $t->id_testpaper }}">
                                <h5 class="card-title">{{ $t->course->name }}</h5>
                                <p class="card-text">{{ $t->due_date }}.</p>
                            </a>
                            <div class="input-group input-group-lg mt-5">
                                <a href="/pengajar/course" style="text-decoration: none">
                                    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                    Edit
                                </a>
                                <a href="/pengajar/course" style="text-decoration: none">
                                    <span class="glyphicon glyphicon-trash ml-3" aria-hidden="true"></span>
                                    Hapus
                                </a>
                            </div>
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
