<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="/css/login.css">
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
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            @include('partials.dropdown')
          </div>
        </div>
      </nav>
      <div class="gambar">
        <a href="{{url('/')}}">
          <img width="500" height="500" src="/image/thomath1.png">
        </a>
        
      </div>
      <h3><span class="head">Login Siswa</span></h3>
      <div class="row">
        <form method="POST" action="{{ url('siswa/login')}}">
          @csrf
            <div class="mb-4">
              <input style="width: 30%; margin-left: 700px; margin-top: -390px;" type="text" class="form-control" placeholder="Email" name="email">
              <div id="emailHelp" class="form-text"></div>
            </div>
            <div class="mb-2">
              <input style="width: 30%; margin-left: 700px;" type="password" class="form-control" id="myInput" placeholder="Password" name="password">
            </div>
            <button type="submit" class="btn" style="margin-left: 700px; margin-top:20px; background-color: rgb(185, 39, 39); border-radius: 5px; font-family: sans-serif; font-size: medium; color: white; width: 10%;">Login</button>
            <br><span class="Daftar">Belum punya akun?</span> <a href="{{ url('siswa/register') }}" class="regist">Register</a> 
        </form>
    </div>
</body>
</html>