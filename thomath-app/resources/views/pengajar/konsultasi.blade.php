<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/lihatnilai.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RPL THOMATH</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    @include('pengajar.partials.sidebar')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

</head>

<body>
    <section class="home-section">
        <nav>
            <div class="sidebar-button">
                <i class='bx bx-menu sidebarBtn'></i>
                <span class="course">List Daftar</span>
            </div>
            
        </nav>
        
    </section>
    <section class="home-section" style="padding-left: 20px; padding-right: 20px;margin-top: -20px">
       
            <div class="table-responsive">
                <table id="myTable" class="display" style="width:100%;">
                    <thead>
                        <tr>
                            <th >#</th>
                            <th>Email</th>
                            <th>Topik</th>
                            <th>Tahun Ajar</th>
                            <th>Tanggal</th>
                            <th>Deskripsi</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $key => $result)
                            <tr>
                                <th>{{ $key + 1 }}</th>
                                <td>{{ $result->email }}</td>
                                <td>{{ $result->topik}}</td>
                                <td>{{ $result->tahun}}</td>
                                <td>{{ $result->tanggal}}</td>
                                <td>{{ $result->deskripsi}}</td>
                                <td> <center>
                                    <button type="button" class="btn btn-success">Accept</button>
                                    <button type="button" class="btn btn-danger">Decline</button>
                                </center>
                                    
                                    </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                
            </div>
        
        
    </section>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
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

            $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>
</body>

</html>
