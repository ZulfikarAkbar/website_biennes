<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Materi</title>
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
    <style>
        /*
        .table-wrapper-scroll-y {
        display: block;
        max-height: 200px;
        overflow-y: auto;
        -ms-overflow-style: -ms-autohiding-scrollbar;
        }
        */
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
                <ul class="navbar-nav mr-auto">

                    </ul>
                <ul class="navbar-nav ml-auto">
                    <!--
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/home') }}"><i style="font-size: 20px" class="fa fa-home">{{ __(' Home') }}</i></a>
                    </li>
                    -->
                    <li class="nav-item">
                        <a data-toggle="tooltip" data-placement="right" title="Lihat konten belajar siswa" class="nav-link" href="{{ url('/jadwals') }}"><i style="font-size: 20px" class="fa fa-eye">{{ __(' Konten belajar') }}</i></a>
                    </li>
                    <li class="nav-item">
                        <a data-toggle="tooltip" data-placement="right" title="Lihat Soal" class="nav-link" href="{{ url('/materi') }}"><i style="font-size: 20px" class="fa fa-pencil">{{ __(' Buat Soal') }}</i></a>
                    </li>
                    <li class="nav-item">
                        <a data-toggle="tooltip" data-placement="right" title="Lihat pengguna website" class="nav-link" href="{{ url('/penggunas') }}"><i style="font-size: 20px" class="fa fa-users">{{ __(' Pengguna') }}</i></a>
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
                    </li>
                       
                </ul>
            </div>
        

    </nav>
    <br><br><br><br><br><br><br>
      <section>
            <div class="container" style="font-size: 20px;">
                    @if(session()->get('success'))
                    <div class="alert alert-success">
                      {{ session()->get('success') }}  
                    </div><br />
                  @endif
              <br><br>
              <h1 style="text-align: center;font-size: 50px"> <strong>{{$materi->nama_soal}}</strong> </h1>
              <br><br>
              <div class="row">
                  <div class="col-xl-3">
                      <a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Tambah materi" href="soal/create_soal/create/{{$materi->id}}" role="button" style="font-size: 20px; border-radius: 2em">
                        <i class="fa fa-plus" style="font-size: 15px"></i>
                        {{ __(' Tambah materi') }}</a>
                  </div>
                  <div class="col-xl-3"></div>
                  <div class="col-xl-3"></div>
                  <div class="col-xl-3">
                    <a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Tambah materi" href="/materi" role="button" style="font-size: 20px; border-radius: 2em">
                        <i class="fa fa-back" style="font-size: 15px"></i>
                        {{ __(' Kembali ke materi') }}</a>
                  </div>
              </div>
            </div>
      </section>
    
      <br><br><br>
      <section class="container">
        <table class="table table-bordered">
            @foreach($materi->soals as $soal)
                <tr>
                    <th width="600px"><form>
                        {{ $loop->iteration }}. {{ $soal->pertanyaan }}
                        <ul>
                            <div class="radio disabled">
                                <label><input type="radio" name="jawaban{{ $loop->iteration }}">{{ $soal->a }}</label>
                            </div>
                            <div class="radio disabled">
                                <label><input type="radio" name="jawaban{{ $loop->iteration }}">{{ $soal->b }}</label>
                            </div>
                            <div class="radio disabled">
                                <label><input type="radio" name="jawaban{{ $loop->iteration }}">{{ $soal->c }}</label>
                            </div>
                            <div class="radio disabled">
                                <label><input type="radio" name="jawaban{{ $loop->iteration }}">{{ $soal->d }}</label>
                            </div>
                            <div class="radio disabled">
                                <label><input type="radio" name="jawaban{{ $loop->iteration }}">{{ $soal->e }}</label>
                            </div>
                        </ul>
                    </form> Jawaban: {{ $soal->jawaban }}</th>
                    <th><a href="soal/update_soal/edit/{{$materi->id}}/{{$soal->id}}" class="btn btn-primary btn-sm active">Edit soal</a></th>
                    <th>
                        <form action="soal/delete_soal/{{$materi->id}}/{{$soal->id}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" data-toggle="tooltip" data-placement="right" title="Hapus soal" type="submit" style="background-color: tomato; border-radius: 2em" onclick="return confirm('Kamu yakin ingin menghapus soal ini?');">delete</button>
                        
                        </form>
                    </th>
                </tr>
            @endforeach
        </table>            
          
      </section>
      <br><br>
      
      
      
  </body>
</html>
