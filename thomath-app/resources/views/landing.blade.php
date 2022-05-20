<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="landingpage.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css"
        integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>RPL THOMATH</title>

    <style>
        .container-fluid {
            margin-left: 20px;
            margin-right: 20px;
            border-radius: 15px;
        }

        .navbar-light .navbar-nav .nav-link.active {
            color: white;
            font-family: sans-serif;
            font-size: medium;
            margin-left: 20px;
        }

        .Logo {
            position: absolute;
            width: 80px;
            left: 10px;
            top: 0px;
        }

        .gambar {
            margin-left: 780px;
            margin-top: -10px;
        }

        .head {
            color: #243142;
            position: relative;
            font-size: 40px;
            left: 75px;
            top: -400px;
            font-family: sans-serif;
            font-weight: bold;
        }

        .dropdown {
            z-index: 9;
        }

        .dropdown-menu {
            z-index: 9;
        }

    </style>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <img class="Logo" src="/image/logo.png" alt="">
                @include('partials.dropdown')
            </div>
        </div>
    </nav>

    <div class="gambar"><img width="500" height="500" src="/image/thomath1.png"></div>
    <h3><span class="head">Halo adik-adik,</span></h3>
    <h3><span class="head">Selamat datang di <span style="color:rgb(185, 39, 39)">THOMATH</span></span></h3>
    <h5><span class="head" style="font-size: medium; font-weight: normal; margin-left: 3px;">Belajar seru
            bersama kami!!</span></h5>
    <div class="d-flex flex-sm-row flex-column align-items-center mx-auto mx-lg-0 justify-content-center gap-3">
        <button class="btn btn-get d-inline-flex"
            style="margin-top: -700px; margin-left: -1010px; background-color:rgb(185, 39, 39); color: white; font-family: sans-serif; font-size: medium;">Get
            Started</button>
    </div>
</body>

</html>
