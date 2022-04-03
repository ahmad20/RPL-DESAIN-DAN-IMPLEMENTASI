<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/konsultasi.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>      
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css"
    integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>RPL THOMATH</title>
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
        <img class="Logo" src="/image/thomath.png" alt="">
        <span class="logo_name">THOMATH</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="{{ url('dashboard')}}">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="{{ url('konsultasi')}}" class="active">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Konsultasi</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-book-alt' ></i>
            <span class="links_name">Lihat Nilai Anak</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-user' ></i>
            <span class="links_name">Edit Profile</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-message' ></i>
            <span class="links_name">Chat</span>
          </a>
        </li>
        <li class="log_out">
          <a href="#">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
    </div>

  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Pendaftaran Konsultasi</span>
      </div>
      <h3 style="margin-left: -1130px; margin-top: 180px; color: rgb(185, 39, 39); font-family: sans-serif;"><i class="fa fa-file-o"></i>  Filing Form</h3>
      <div class="main-header">
        <br>
        <form method="POST" action="{{ url('konsultasi')}}">
          @csrf
            <div class="form-row" style="margin-top: 570px; margin-left: -1005px;">
              <div class="form-group col-md-6">
                <label for="inputEmail4" style="width: 50%;">Email Siswa</label>
                <input type="text" class="form-control" id="inputEmail4" placeholder="Email" name="email">
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">Topik</label>
                <input type="text" class="form-control" id="inputPassword4" placeholder="Topik" name="topik">
              </div>
            </div>
            <div>
                <label style="margin-left: -990px; margin-top: 70px; font-size: small;">Tahun</label>
                <br>
                <select style="height:35px; width:978px; margin-left: -990px;" id="area" name="tahun">
                    <option value="2021/2022">2021/2022</option>
                    <option value="2020/2021">2020/2021</option>
                    <option value="2019/2020">2019/2020</option>
                </select> 
            </div>
            <div class="date-picker">
                <label style="margin-left: -990px; margin-top: 20px; font-size: small;">Tanggal</label>
                <input type="date" id="birthday" name="datepicker" style="margin-top: 20px; margin-left: 70px; height:35px;">
            </div>
            <div class="form-group" style="margin-left: -990px; margin-top: 20px; width: 980px;">
                <label for="exampleFormControlTextarea1">Deskripsi</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="deskripsi"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" style="margin-left: -990px; margin-top: 10px; background-color: rgb(185, 39, 39);">Submit</button>
        </form>
    </div>
    </nav>
  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>

</body>
</html>
