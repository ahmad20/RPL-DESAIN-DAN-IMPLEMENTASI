<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/teachertest.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css"
        integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>RPL THOMATH</title>
</head>

<body>
    @include('pengajar.partials.sidebar')

    <section class="home-section">
        <nav>
            <div class="sidebar-button">
                <i class='bx bx-menu sidebarBtn'></i>
                <span class="course">Test</span>
            </div>
        <form method="POST" action="{{ url('pengajar/test/tambah') }}">
            @csrf
            <label for="course" style="margin-top: 350px; margin-left: -990px; font-size: 130%">Course:</label>
            <select name="courseName" id="course" style="height:35px; width:600px; margin-left: 88px;">
                <option value="{{ session()->get('course') }}" selected>{{ session()->get('course') }}</option>
                @foreach ($courses as $c)
                    <option value='{{ $c->name }}'>{{ $c->name }}</option>
                @endforeach
            </select>
            @error('courseName')
                {{ $message }}
            @enderror
            <div>
                <label for="date" style="margin-top: 20px; margin-left: -990px; font-size: 130%">Deadline:</label>
                <input type="datetime-local" class="form-control" id="date" name="dueDate" style="margin-left: -900px; margin-top: -35px; width: 600px">
            </div>
            <div>
                <label for="question" style="margin-top: 20px; margin-left: -990px; font-size: 130%">Pertanyaan:</label>
                <textarea class="form-control" id="question" name="question" style="margin-left: -900px; margin-top: -35px; width: 600px"></textarea>
            </div>
            <button class="btn btn-primary" type="submit" style="margin-top: 50px; margin-left: -990px; background: rgb(185, 39, 39)">Tambah Test</button>
        </form>
    </nav>
        <script>
            const today = new Date()
            var tomorrow = new Date(today)
            tomorrow.setDate(tomorrow.getDate() + 1)
            tomorrow = tomorrow.toISOString().split('T')[0];
            document.getElementsByName("dueDate")[0].setAttribute('min', tomorrow+"T00:00");

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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        
        {{-- <script>
            $(document).ready(function() {
                $(".add").click(function() {
                    var total_q = parseInt($('#total_q').val()) + 1;
                    if (total_q<=5){
                        $("#newText").append("<b id='label_"+total_q+"'>Pertanyaan " + total_q + "</b>\
                            <textarea class='form-control' id='question_" + total_q +
                        "' name='question_" + total_q + "'></textarea>");
                    $('#total_q').val(total_q);
                    }
                    
                });
                $(".delete").click(function() {
                    var total_q = $('#total_q').val();
                    if (total_q > 1) {
                        $('#question_' + total_q).remove();
                        $('#label_' + total_q).remove();
                        $('#total_q').val(total_q - 1);
                    }
                });
            });
        </script> --}}

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
