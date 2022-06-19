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
            <table style="width:auto; border:1px solid-black;">
                <tr>
                    <th>Course Name </th>
                    <td>{{ ': ' . $test->course->name }}</td>
                </tr>
                <tr>
                    <th>Due Date </th>
                    <td>{{ ': ' . $test->due_date }}</td>
                </tr>
            </table>
            <p>Pertanyaan : </p>
            <p>{!! $test->question !!}</p>
            <p class="mb-2">List Siswa :</p>
            <ul type>
                @foreach ($test->course->siswa as $s)
                    <li class="m-1"><a href="{{ $test->id_testpaper }}/{{$s->id_siswa}}">{{ $s->name }}</a></li>
                @endforeach
            </ul>
        </div>
        {{-- <div style="margin-top:100px">
            <h3>Test Detail</h3>
            <p>Course Name : {{ $test->course->name }}</p>
            <p>Due Date : {{ $test->due_date }}</p>
            <p>Questions : </p>
            <p>{{ $test->question }}</p>

            <ul>List Siswa :
                @foreach ($test->course->siswa as $s)
                    {{-- //buat link ke pengerjaan masing2
                    <li>{{ $s->name }}</li>
                @endforeach
            </ul>
        </div> --}}

        </nav>
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
