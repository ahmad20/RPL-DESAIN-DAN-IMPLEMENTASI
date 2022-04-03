<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="/css/registrasi.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css"
    integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>RPL THOMATH</title>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="2navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <div class="navbar-nav mx-auto"></div>
            <div class="navbar-nav ml-auto">
                <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false" style="background: transparent; color: black; border: none; font-family: sans-serif; font-size: medium;">Login</button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="#">Murid</a></li>
                    <li><a class="dropdown-item" href="#">Pengajar</a></li>
                    <li><a class="dropdown-item" href="#">Wali Murid</a></li>
                </ul>
                </div>
                <button class="btn btn-fill text-white" style="font-family: sans-serif; font-size: medium; background-color: rgb(185, 39, 39);">Register</button>
            </div>
          </div>
        </div>
      </nav>
      <div class="gambar">
        <a href="{{url('/')}}"><img width="500" height="500" src="image/thomath1.png"></a>
    </div>
      <h3><span class="head">Register Wali</span></h3>
      <div>
        <form method="POST" action="{{ url('register-wali')}}">
          @csrf
            <input style="width: 30%; margin-left: 700px; margin-top: -410px;" type="text" class="form-control" placeholder="Nama" name="nama">
            <div id="emailHelp" class="form-text"></div>
            <input style="width: 30%; margin-left: 700px; margin-top: 10px;" type="text" class="form-control" id="myInput" placeholder="Email" name="email">
            <input style="width: 30%; margin-left: 700px; margin-top: 10px;" type="text" class="form-control" id="myInput" placeholder="No Handphone" name="no_hp">
            <input style="width: 30%; margin-left: 700px; margin-top: 10px;" type="password" class="form-control" id="myInput" placeholder="Password" name="password">
            <button type="submit" class="btn" style="margin-left: 700px; margin-top:20px; background-color: rgb(185, 39, 39); border-radius: 5px; font-family: sans-serif; font-size: medium; color: white; width: 10%;">Daftar</button>
            <br><span class="Daftar">Sudah punya akun?</span> <a href="{{ url('login-wali') }}" class="regist">Login</a> 
        </form>
    </div>
</body>
</html>