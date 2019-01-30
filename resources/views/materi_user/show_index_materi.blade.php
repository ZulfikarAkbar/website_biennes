<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Latihan soal</title>
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
                    <ul class="navbar-nav ml-auto">
                        <!--
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/home') }}"><i style="font-size: 20px" class="fa fa-home">{{ __(' Home') }}</i></a>
                        </li>
                         -->
                        <li class="nav-item">
                            <a data-toggle="tooltip" data-placement="right" title="Lihat sumber dayamu" class="nav-link" href="{{ url('/belajars') }}"><i style="font-size: 20px" class="fa fa-eye">{{ __(' Konten belajar') }}</i></a>
                        </li>
                        <li class="nav-item">
                            <a data-toggle="tooltip" data-placement="right" title="Lihat latihan soal" class="nav-link" href="/soal"><i style="font-size: 20px" class="fa fa-bullseye">{{ __(' Latihan soal') }}</i></a>
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
                      
                  </div>
                  <div class="col-xl-3"></div>
                  <div class="col-xl-3"></div>
                  <div class="col-xl-3">
                      
                  </div>
              </div>
            </div>
      </section>
    
      <br><br>
      <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">Kerjakan dengan baik & benar</div>
        
                        <div class="panel-body">
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif
        
                            {{-- <p style="text-align: center; font-weight: bold">{{ $soal->nm_soal }}</p> --}}
                            @foreach($materi->soals as $soal)
                                <table> <tr>
                                <th style="width:25px; vertical-align: text-top; font-weight: normal">{{ $loop->iteration }}.</th> <th style="white-space: pre-line; font-weight: normal">{{ $soal->pertanyaan }}</th>
                                </tr> </table>
                                <form action="/soal/{{$soal->materi_id}}/{{ Auth::user()->id }}" class="form-group" method="POST">
                                <ul>
                                    <div class="radio">
                                        <label><input type="radio" name="jawaban{{ $loop->iteration }}" value="a">{{ $soal->a }}</label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="jawaban{{ $loop->iteration }}" value="b">{{ $soal->b }}</label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="jawaban{{ $loop->iteration }}" value="c">{{ $soal->c }}</label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="jawaban{{ $loop->iteration }}" value="d">{{ $soal->d }}</label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="jawaban{{ $loop->iteration }}" value="e">{{ $soal->e }}</label>
                                    </div>
                                </ul>
                            @endforeach
                                <p style="text-align: center"><input type="submit" class="btn btn-primary btn-lg" name="jawab" value="Jawab" onclick="return confirm('Kamu yakin untuk mengumpulkan jawaban?')"></p>
                                {{ csrf_field() }}
                                </form>
                                {{-- <button onclick="goBack()" class="btn btn-info">Back</button> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
      <br><br>
      
      
      
  </body>
</html>
