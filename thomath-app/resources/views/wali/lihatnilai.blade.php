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
    @include('wali.partials.sidebar')

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
                                            <th>Material</th>
                                            <th>Judul</th>
                                            <th>Nilai</th>
                                            <th>Tanggal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Quiz</td>
                                            <td>Quiz 1 : Trigonometri Sederhana</td>
                                            <td>90/100</td>
                                            <td>20 April 2022 10:25:33</td>
                                        </tr>
                                        <tr>
                                            <td>Tugas</td>
                                            <td>Tugas 1 : Menghitung Pecahan Campuran</td>
                                            <td>100/100</td>
                                            <td>20 April 2022 20:45:23</td>
                                        </tr>
                                        <tr>
                                            <td>Quiz</td>
                                            <td>Quiz 2 : Trigonometri Lanjutan</td>
                                            <td>100/100</td>
                                            <td>30 April 2022 15:02:53</td>
                                        </tr>
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
