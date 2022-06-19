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
                    <p>Dibuat Oleh : {{ $course->created_by }}</p>
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
                        <ul style="margin-left: 15px">
                            <li>Slide :{{ $cm->slide }}</li>
                            <li>Video :{{ $cm->video }}</li>
                            <li>Kuis :{{ $cm->kuis }}</li>
                            <li>Tugas :{{ $cm->tugas }}</li>
                            <li>Referensi :{{ $cm->referensi }}</li>
                        </ul>
                    @endif
                </div>
            </div>
        </div>
        @if (is_string($test))
            <div class="col d-flex">
                <div class="card">
                    <div class="card-body">
                        <h3>Tugas : </h3>
                        <p>{{ 'Belum Ada Tugas' }}</p>
                    </div>
                </div>
            </div>
        @else
            <div class="col d-flex">
                <?php
                $now = new DateTime();
                $now = $now->format('Y-m-d H:i:s');
                foreach ($test as $t) {
                    if ($now > $t->due_date) {
                        echo "<div class='card'>";
                        echo "<div class='card-body'>";
                        echo "<h3 style='color:red;'>" . e($t->course->name) . "(Closed)</h3>";
                        echo "<ul style='margin-left: 15px'>";
                        echo "<li style='color:red;'>Due Date :" . e($t->due_date) . "</li>";
                        echo '</ul>';
                        echo '</div>';
                        echo '</div>';
                    } else {
                        echo "<a href='../singletest/". e($t->id_testpaper) ."'>";
                        echo "<div class='card'>";
                        echo "<div class='card-body'>";
                        echo "<h3>" . e($t->course->name) . "</h3>";
                        echo "<ul style='margin-left: 15px'>";
                        echo '<li>Due Date :' . e($t->due_date) . '</li>';
                        echo '</ul>';
                        echo '</div>';
                        echo '</div>';
                        echo '</a>';
                    }
                }
                ?>
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
