<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/lihatnilai.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css"
        integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>RPL THOMATH</title>
</head>

<body>
    @include('pengajar.partials.sidebar')

    <section class="home-section">
        <nav>
            <div class="sidebar-button">
                <i class='bx bx-menu sidebarBtn'></i>
                <span class="course">Daftar Konsultasi</span>
            </div>
        <div class="section-body" style="width:100%; margin-top: 200px; margin-left: -180px">
            <div class="table-responsive">
                <table id="myTable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Email</th>
                            <th>Topik</th>
                            <th>Tahun</th>
                            <th>Tanggal</th>
                            <th>Deskripsi</th>
                            <th>Action</th>
                        </tr>
                        
                    </thead>
                    <tbody>
                        {{-- @foreach ($data as $k)
                            <tr>
                                <td>{{ $k->id_konsultasi }}</td>
                                <td>{{ $k->email }}</td>
                                <td>{{ $k->topik }}</td>
                                <td>{{ $k->tahun }}</td>
                                <td>{{ $k->tanggal }}</td>
                                <td>{{ $k->deskripsi }}</td>
                                <td>
                                    <form action="{{ url('konsultasi/assign', $k->id_konsultasi) }}" method="post">
                                        @csrf
                                        <button class="btn btn-danger" type="submit">Accept</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach --}}
                        <tr>
                            <th>#</th>
                            <th>Email</th>
                            <th>Topik</th>
                            <th>Tahun</th>
                            <th>Tanggal</th>
                            <th>Deskripsi</th>
                            <th>Action</th>
                        </tr>
                        <tr>
                            <th>#</th>
                            <th>Email</th>
                            <th>Topik</th>
                            <th>Tahun</th>
                            <th>Tanggal</th>
                            <th>Deskripsi</th>
                            <th>Action</th>
                        </tr>
                        <tr>
                            <th>#</th>
                            <th>Email</th>
                            <th>Topik</th>
                            <th>Tahun</th>
                            <th>Tanggal</th>
                            <th>Deskripsi</th>
                            <th>Action</th>
                        </tr>
                        <tr>
                            <th>#</th>
                            <th>Email</th>
                            <th>Topik</th>
                            <th>Tahun</th>
                            <th>Tanggal</th>
                            <th>Deskripsi</th>
                            <th>Action</th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </nav>
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
