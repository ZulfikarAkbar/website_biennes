<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Soal</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap.no-icons.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <link href="css/style_custom.css" rel="stylesheet">


    <meta name="viewport" content="width=device-width, initial-scale=0, shrink-to-fit=yes">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
    <script type="text/javascript" async="" src="js/script.js"></script>
    <SCript>
        $(document).ready(function () {
        $('#dtVerticalScrollExample').DataTable({
            "scrollY": "200px",
            "scrollCollapse": true,
        });
        $('.dataTables_length').addClass('bs-select');
        });



    </SCript>
    <script>
    function myFunction() {
    var x = document.getElementById("myDIV");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
    }
    </script>
    <style>
        /*
        .table-wrapper-scroll-y {
        display: block;
        max-height: 200px;
        overflow-y: auto;
        -ms-overflow-style: -ms-autohiding-scrollbar;
        }
        */
                .dropbtn {
            background-color: #4CAF50;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #d1e8d2;
            min-width: 650px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {background-color: #ddd;}

        .dropdown:hover .dropdown-content {display: block;}

        .dropdown:hover .dropbtn {background-color: #3e8e41;}
    </style>
     <script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>
</head>
  <body style="background-image: url(img/wall5.jpg);">
    @include('sweetalert::alert')
    <nav class="navbar navbar-dark brown navbar-expand-lg navbar-inverse fixed-top scrolling-navbar opaque-navbar">
        <a class="navbar-brand" href="{{ url('/home') }}"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                {{-- <ul class="navbar-nav mr-auto"></ul> --}}

                <ul class="navbar-nav ml-auto">

                    <li class="nav-item">
                        <a data-toggle="tooltip" data-placement="right" title="Buat soal quiz" class="nav-link" href="{{ url('/materi') }}"><i style="font-size: 20px" class="fa fa-chevron-left">{{ __(' Kembali') }}</i></a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="{{ url('/home') }}"><i style="font-size: 20px" class="fa fa-home">{{ __(' Home') }}</i></a>
                    </li>
                 --}}
                    {{-- <li class="nav-item">
                        <a data-toggle="tooltip" data-placement="right" title="Lihat konten belajar siswa" class="nav-link" href="{{ url('/jadwals') }}"><i style="font-size: 20px" class="fa fa-eye">{{ __(' Konten belajar') }}</i></a>
                    </li>
                    <li class="nav-item">
                        <a data-toggle="tooltip" data-placement="right" title="Buat soal quiz" class="nav-link" href="{{ url('/materi') }}"><i style="font-size: 20px" class="fa fa-pencil">{{ __(' Buat Soal') }}</i></a>
                    </li>
                    <li class="nav-item">
                        <a data-toggle="tooltip" data-placement="right" title="Lihat pengguna" class="nav-link" href="{{ url('/penggunas') }}"><i style="font-size: 20px" class="fa fa-users">{{ __(' Pengguna') }}</i></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" style="font-size: 20px" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <i class="fa fa-user"></i>
                            {{ Auth::user()->name }} <span class=""></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a style="font-size: 15px" class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                <i class="fa fa-sign-out"></i>
                                {{ __('Keluar') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li> --}}

                </ul>
            </div>


    </nav>
    <br>
      <section>
            <div class="container" style="font-size: 20px;">
                    @if(session()->get('success'))
                    <div class="alert alert-success">
                      {{ session()->get('success') }}
                    </div><br />
                  @endif

              <h1 style="text-align: center;font-size: 50px"> <strong>{{$materi->nama_soal}}</strong> </h1>
              <br><br>
              <div class="row">
                  <div class="col-xl-3">
                      <a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Buat soal baru" href="create_soal/create/{{$materi->id}}" role="button" style="font-size: 20px; border-radius: 2em">
                        <i class="fa fa-plus" style="font-size: 15px"></i>
                        {{ __(' Tambah soal') }}</a>
                  </div>
                  <div class="col-xl-3"></div>
                  <div class="col-xl-3"></div>
                  <div class="col-xl-3">
                    {{-- <a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Tambah materi" href="/materi" role="button" style="font-size: 20px; border-radius: 2em; background-color: green">
                        <i class="fa fa-back" style="font-size: 15px"></i>
                        {{ __(' Kembali ke materi') }}</a> --}}
                  </div>
              </div>
            </div>
      </section>

      <br>
      <section class="container">
        <table class="table">
            @foreach($materi->soals as $soal)
                <tr>
                    <th width="200px"> </th>
                    <th width="500px">
                        <form>
                        {{ $loop->iteration }}. {{ $soal->pertanyaan }}
                        <ul>
                            <div class="radio disabled">
                                <label><input type="radio" name="jawaban{{ $loop->iteration }}"> A. {{ $soal->a }}</label>
                            </div>
                            <div class="radio disabled">
                                <label><input type="radio" name="jawaban{{ $loop->iteration }}"> B. {{ $soal->b }}</label>
                            </div>
                            <div class="radio disabled">
                                <label><input type="radio" name="jawaban{{ $loop->iteration }}"> C. {{ $soal->c }}</label>
                            </div>
                            <div class="radio disabled">
                                <label><input type="radio" name="jawaban{{ $loop->iteration }}"> D. {{ $soal->d }}</label>
                            </div>
                            <div class="radio disabled">
                                <label><input type="radio" name="jawaban{{ $loop->iteration }}"> E. {{ $soal->e }}</label>
                            </div>
                        </ul>
                    </form>

                    <!-- <button onclick="myFunction()">Lihat Pembahasan</button>
                    <div id="myDIV" style="padding-left: 50px; padding-top: 10px;"> {{$soal->penjelasan}} </div>
                    </th>
                    <div class="dropdown"> -->
                    <div class="dropdown">
                      <button class="dropbtn">Lihat Pembahasan</button>
                      <div class="dropdown-content">
                        <a href="#">{{$soal->penjelasan}} </a>
                      </div>
                    </div>

                    <th>
                      <p class="text-center" > Jawaban </p>
                      <br>
                      <p class="text-uppercase text-center" style="color:blue;">{{ $soal->jawaban }} </p>
                    </th>
                    <th>
                        <a href="update_soal/edit/{{$soal->id}}/{{$materi->id}}" data-toggle="tooltip" data-placement="right" title="Edit soal" class="btn btn-primary btn-sm active" style="border-radius: 2em; font-size: 20px; background-color: cornflowerblue" onclick="return confirm('Kamu yakin ingin memperbarui soal ini?');"><i class="fa fa-edit" style="font-size: 20px"> Edit</i></a>
                        <br>
                        <form action="delete_soal/{{$soal->id}}/{{$materi->id}}" method="post" style="padding-top: 20px;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" data-toggle="tooltip" data-placement="right" title="Hapus soal" type="submit" style="background-color: tomato; border-radius: 2em; font-size: 20px" onclick="return confirm('Kamu yakin ingin menghapus soal ini?');"><i class="fa fa-eraser" style="font-size: 20px"> Hapus</i></button>

                        </form>
                    </th>
                </tr>
            @endforeach
        </table>

      </section>
      <br><br>
  </body>
</html>
