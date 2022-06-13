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
    @include('siswa.partials.sidebar')

    <section class="home-section">
        <nav>
            <div class="sidebar-button">
                <i class='bx bx-menu sidebarBtn'></i>
                <span class="dashboard">Dashboard</span>
            </div>
            <div class="profile-details">
                <i class="glyphicon glyphicon-user"></i>
                <span class="admin_name">{{ Auth::guard('siswa')->user()->name }}</span>
            </div>
        </nav>

        <div class="col d-flex">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">{{ $course->name }}</h3>
                    <p>Deskripsi : {{ $course->description }}</p>
                    <p>Dibuat Oleh : {{ $course->pengajar->name }}</p>
                </div>
            </div>
        </div>
        <div class="col d-flex">
            <div class="card">
                <div class="card-body">
                    <h3>Materi : </h3>
                    @if (is_string($cm))
                        <p>{{ 'Belum Ada Materi' }}</p>
                    @else
                        <ul>
                            <li>Slide :<a href="https://{{ $cm->slide }}">{{ $cm->slide }}</a></li>
                            <li>Video :<a href="https://{{ $cm->video }}">{{ $cm->video }}</a></li>
                            <li>Kuis :<a href="https://{{ $cm->kuis }}">{{ $cm->kuis }}</a></li>
                            <li>Tugas :<a href="https://{{ $cm->tugas }}">{{ $cm->tugas }}</a></li>
                            <li>Referensi :<a href="https://{{ $cm->referensi }}">{{ $cm->referensi }}</a></li>
                        </ul>
                    @endif
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h3>Tugas : </h3>
                    @if (is_string($cm))
                        <p>{{ 'Belum Ada Materi' }}</p>
                    @else
                        <ul>
                            @foreach ($test as $t)
                                <li>{{ 'Deadline : ' . $t->due_date }}</li>
                            @endforeach
                            
                        </ul>
                    @endif
                </div>
            </div>
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
