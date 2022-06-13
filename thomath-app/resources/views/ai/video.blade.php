<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/course.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css"
        integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>RPL THOMATH</title>
</head>

<body>
    @include('ai.partials.sidebar')
    <section class="home-section">
        <nav>
            <div class="sidebar-button">
                <i class='bx bx-menu sidebarBtn'></i>
                <span class="dashboard">Cari Video</span>
            </div>
            <div>
                <form id="keywordForm" method="post" action="{{ url('search') }}">
                    @csrf
                    <div class="input-row">
                        <label for="keyword" class="form-label" style="margin-left: -110px; margin-top: 200px; color: black">Cari: </label>
                        <input class="form-control" type="search" id="keyword" name="keyword" placeholder="Enter Search Keyword" style="margin-top: -30px; margin-left: -70px; width: 300px">
                        <span class="text-danger" id="nameErrorMsg"></span>
                    </div>
                    <input class="btn btn-primary mt-3" type="submit" name="submit" value="Search" style="margin-left: -110px; background: rgb(185, 39, 39)">
                </form>
            </div>
            <br>
            <div>
                <div class="row gx-2">
                    @if (!is_string($data))
                        @foreach ($data as $item)
                            <div class="col-sm-12 col-md-6 col-lg-3">
                                <div class="card mb-3">
                                    @if (isset($item['snippet']['thumbnails']['high']['url']))
                                        <img class="card-img-top" src="{{ $item['snippet']['thumbnails']['high']['url'] }}"
                                            alt="Card image cap">
                                    @endif
                                    <div class="card-body">
                                        @if (isset($item['snippet']['title']))
                                            <p class="card-title" style="min-height: 4em;text-overflow: ellipsis;">
                                                {{ htmlspecialchars_decode($item['snippet']['title']) }}</p>
                                        @endif
                                        @if (isset($item['id']['videoId']))
                                            <a href="https://www.youtube.com/watch?v={{ $item['id']['videoId'] }}"
                                                class="btn btn-primary" target="_blank">Go To Video</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <p class="ml-5">{{ $data }}</p>
                    @endif
                </div>
            </div>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>

            <script type="text/javascript">
                $('#keywordForm').on('submit', function(e) {
                    e.preventDefault();

                    let keyword = $('#keyword').val();

                    $.ajax({
                        url: form.prop('action'),
                        type: "post",
                        data: {
                            "_token": "{{ csrf_token() }}",
                            keyword: keyword,
                        },
                        success: function(response) {
                            console.log(data);

                        }
                        error: function(response) {
                            $('#nameErrorMsg').text("Tidak Ada Hasil");
                        },
                    });
                });
            </script>
            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
                integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
            </script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
                integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
            </script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
                integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
            </script> 
        </nav>
    {{-- <h2 class="ml-3">Cari Video</h2>
    <div class="search-form-container">
        <form class="form-control" id="keywordForm" method="post" action="{{ url('search') }}">
            @csrf
            <div class="input-row">
                <label for="keyword" class="form-label">Search Keyword : </label>
                <input class="form-control" type="search" id="keyword" name="keyword"
                    placeholder="Enter Search Keyword">
                <span class="text-danger" id="nameErrorMsg"></span>
            </div>

            <input class="btn btn-primary mt-3" type="submit" name="submit" value="Search">
        </form>
    </div>
    <div class="container-fluid mt-5">
        <div class="row gx-2">
            @if (!is_string($data))
                @foreach ($data as $item)
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="card mb-3">
                            @if (isset($item['snippet']['thumbnails']['high']['url']))
                                <img class="card-img-top" src="{{ $item['snippet']['thumbnails']['high']['url'] }}"
                                    alt="Card image cap">
                            @endif
                            <div class="card-body">
                                @if (isset($item['snippet']['title']))
                                    <p class="card-title" style="min-height: 4em;text-overflow: ellipsis;">
                                        {{ htmlspecialchars_decode($item['snippet']['title']) }}</p>
                                @endif
                                @if (isset($item['id']['videoId']))
                                    <a href="https://www.youtube.com/watch?v={{ $item['id']['videoId'] }}"
                                        class="btn btn-primary" target="_blank">Go To Video</a>
                                @endif

                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <p class="ml-5">{{ $data }}</p>
            @endif
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>

    <script type="text/javascript">
        $('#keywordForm').on('submit', function(e) {
            e.preventDefault();

            let keyword = $('#keyword').val();

            $.ajax({
                url: form.prop('action'),
                type: "post",
                data: {
                    "_token": "{{ csrf_token() }}",
                    keyword: keyword,
                },
                success: function(response) {
                    console.log(data);

                }
                error: function(response) {
                    $('#nameErrorMsg').text("Tidak Ada Hasil");
                },
            });
        });
    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script> --}}
</body>

</html>
