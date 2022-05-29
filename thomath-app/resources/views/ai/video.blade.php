<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <h2 class="ml-3">Cari Video</h2>
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
                    {{-- <div>
                    <iframe width="280" height="150" src="http://youtube.com/embed/{{ $d['id']['videoId'] }}"
                        frameborder=0 allowfullscreen></iframe>
                    <p>{{ htmlspecialchars_decode($d['snippet']['title']) }}</p>
                </div> --}}
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
                                {{-- <p class="card-text" style="height: 4em;text-overflow: ellipsis;">
                                {{ $item['snippet']['description'] }}</p> --}}
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
</body>

</html>
