<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Buat nama materi</title>
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
    <script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>
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
  </head>
  <body style="background-image: url({{url('img/wall4.png')}})">
    {{-- <nav class="navbar navbar-dark brown navbar-expand-lg navbar-inverse fixed-top scrolling-navbar opaque-navbar">
        
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
      

  </nav> --}}
    <br><br><br><br>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="text-align: center; font-size: 20px; background-color: cornflowerblue; color:white;">{{ __('Masukkan nama materi') }}</div>
                <div class="card-body">
                  <form method="post" action="/materi" enctype="multipart/form-data">
                          
                          {{ csrf_field() }}

                          <div class="form-group row">
                              <label class="col-sm-4 col-form-label text-md-right">{{ __('Materi') }}</label>
                              <div class="col-md-6">
                                  
                                  <input type="text" placeholder="Masukkan nama materi" class="form-control {{ $errors->has('nama_soal') ? ' is-invalid' : '' }}" name="nama_soal" value="{{ old('nama_soal') }}" required autofocus>
                                  
                                  @if ($errors->has('nama_soal'))
                                  <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('nama_soal') }}</strong>
                                  </span>
                                @endif
                              </div>
                          </div>

                          
                          <div class="form-group row mb-0">
                              <div class="col-md-8 offset-md-4">
                              <button type="submit" class="btn btn-success" style="border-radius: 2em; background-color: cornflowerblue">
                                {{-- <i class="fa fa-plus"></i> --}}
                                {{ __('Ok') }}</button>
                                
                                <a href="/materi" class="btn" style="border-radius: 2em; background-color: tomato; color: white">
                                  
                                  {{ __('Batal') }}</a>
                            </div>
                          </div>
                          
                        </form>
                </div>
            </div>
            <br><br>
          </div>
        </div>
        
    
    </div>
    
  </body>
</html>
