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
            <p style="margin-top: 20px; margin-left: -990px; margin-right: 200px;">Pertanyaan : </p>
            <p style="margin-top: 20px; margin-left: -990px; margin-right: 200px;">{!! $test->question !!}</p>
            <form method="POST" action="/singletest/{{ $test->id_testpaper }}">
                @csrf
                {{-- <div style="margin-top: 510px; margin-left: -990px; margin-right: 200px">
                    <label for="question" style="font-size: medium">Pertanyaan</label>
                    <textarea class="form-control @error('question') is-invalid @enderror" id="question" name="question" readonly>{{ $test->question }}</textarea>
                    @error('question')
                        {{ $message }}
                    @enderror
                </div> --}}
                <div style="margin-top: 20px; margin-left: -990px; margin-right: 200px;">
                    <label for="answer" style="font-size: medium">Jawaban</label>
                    <textarea class="form-control @error('answer') is-invalid @enderror" id="answer" name="answer" rows=10>{{ $test_siswa->value('answer') }}</textarea>
                    @error('answer')
                        {{ $message }}
                    @enderror
                </div>
                <button class="btn btn-primary" type="submit"
                    style="margin-top: 30px; margin-left: -990px; background: rgb(185, 39, 39)">Submit</button>
            </form>

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
