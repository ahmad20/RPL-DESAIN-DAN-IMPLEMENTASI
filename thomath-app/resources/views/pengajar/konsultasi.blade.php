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
                <span class="dashboard">Lihat Nilai Anak</span>
            </div>
            <div class="main-header">
                <br>
                <div class="form-row" style="margin-top: 270px; margin-left: -1005px;">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4" style="width: 50%;">Nama Siswa : Ridho </label>
                    </div>
                    <div>
                        <label style="margin-left: -487px; margin-top: 25px; font-size: small;">Kelas : 6A</label>
                        <br>
                    </div>
                    <center>
                        <div class="section-body" style="width:90%;">
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
                                        @foreach ($data as $k)
                                            <tr>
                                                <td>{{ $k->id_konsultasi }}</td>
                                                <td>{{ $k->email }}</td>
                                                <td>{{ $k->topik }}</td>
                                                <td>{{ $k->tahun }}</td>
                                                <td>{{ $k->tanggal }}</td>
                                                <td>{{ $k->deskripsi }}</td>
                                                <td>
                                                    <form action="{{ url('konsultasi/assign', $k->id_konsultasi) }}"
                                                        method="post">
                                                        @csrf
                                                        <button class="btn btn-danger" type="submit">Tambah</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </center>
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
