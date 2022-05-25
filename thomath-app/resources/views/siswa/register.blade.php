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
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="2navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                @include('partials.dropdown')
            </div>
        </div>
    </nav>
    <div class="gambar">
        <a href="{{ url('/') }}"><img width="500" height="500" src="/image/thomath.png"></a>
    </div>
    <h3><span class="head">Register Siswa</span></h3>
    <div>
        <form method="POST" action="{{ url('siswa/register') }}">
            @csrf
            <input style="width: 30%; margin-left: 700px; margin-top: -410px;" type="text"
                class="form-control @error('name') is-invalid @enderror" placeholder="Nama" name="name"
                value={{ old('name') }}>
            @error('name')
                <div class="invalid-feedback" style="margin-left: 700px">
                    {{ $message }}
                </div>
            @enderror
            <input style="width: 30%; margin-left: 700px; margin-top: 10px;" type="text"
                class="form-control @error('email') is-invalid @enderror" id="myInput" placeholder="Email" name="email"
                value={{ old('email') }}>
            @error('email')
                <div class="invalid-feedback" style="margin-left: 700px">
                    {{ $message }}
                </div>
            @enderror
            <input style="width: 30%; margin-left: 700px; margin-top: 10px;" type="text"
                class="form-control @error('phone_number') is-invalid @enderror" id="myInput" placeholder="No Handphone"
                name="phone_number" value={{ old('phone_number') }}>
            @error('phone_number')
                <div class="invalid-feedback" style="margin-left: 700px">
                    {{ $message }}
                </div>
            @enderror
            <input style="width: 30%; margin-left: 700px; margin-top: 10px;" type="password"
                class="form-control @error('password') is-invalid @enderror" id="myInput" placeholder="Password"
                name="password">
            @error('password')
                <div class="invalid-feedback" style="margin-left: 700px">
                    {{ $message }}
                </div>
            @enderror
            <button type="submit" class="btn"
                style="margin-left: 700px; margin-top:20px; background-color: rgb(185, 39, 39); border-radius: 5px; font-family: sans-serif; font-size: medium; color: white; width: 10%;">Daftar</button>
            <br><span class="Daftar">Sudah punya akun?</span> <a href="{{ url('siswa/login') }}"
                class="regist">Login</a>
        </form>
    </div>
</body>

</html>
