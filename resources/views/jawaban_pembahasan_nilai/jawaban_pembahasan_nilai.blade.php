<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Hasil Quiz</title>
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
    <style>
        /***** Youtube Responsive Code *****/
        .embed-container {
            position: relative;
            padding-bottom: 56.25%;
            padding-top: 30px;
            height: 0;
            overflow: hidden;
            max-width: 100%;
            height: auto;
        }

        .embed-container iframe, .embed-container object, .embed-container embed {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
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
</head>
  <body style="background-image: url(img/wall5.jpg)">
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
                        <a data-toggle="tooltip" data-placement="right" title="Lihat quizmu" class="nav-link" href="/soal"><i style="font-size: 20px" class="fa fa-bullseye">{{ __(' Quiz') }}</i></a>
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
              <br>
              <h1 style="text-align: center;font-size: 50px"> <strong>Hasil Quiz</strong> </h1>
              <br>
              <div class="row">

                  <div class="col-xl-4"></div>
                  <div class="col-xl-4"></div>
                  <div class="col-xl-4">

                  </div>
              </div>
            </div>
      </section>

      <br><br>

      <section>

            <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="panel panel-default">


                                <div class="panel-body">
                                    @if (session('status'))
                                        <div class="alert alert-success">
                                            {{ session('status') }}
                                        </div>
                                    @endif

                                    <p style="text-align: center; font-size:xx-large;">Nilai : {{$nilai}}</p>

                                    <table class="table table-bordered">
                                        <thead>
                                            <tr class="text-center" style="font-size: 150%; color: white; background-color: #4CAF50">
                                                <th class="text-center">Soal dan Jawaban Benar</th>
                                                <th >Jawaban Anda</th>
                                            </tr>
                                        </thead>
                                    @foreach($soals as $soal)
                                        <tr>
                                            <th width="600px"><form>
                                                {{ $loop->iteration }}. {{ $soal->pertanyaan }}
                                                <ul>
                                                    <div class="radio disabled">
                                                        <label><input type="radio" name="jawaban{{ $loop->iteration }}">A. {{ $soal->a }}</label>
                                                    </div>
                                                    <div class="radio disabled">
                                                        <label><input type="radio" name="jawaban{{ $loop->iteration }}">B. {{ $soal->b }}</label>
                                                    </div>
                                                    <div class="radio disabled">
                                                        <label><input type="radio" name="jawaban{{ $loop->iteration }}">C. {{ $soal->c }}</label>
                                                    </div>
                                                    <div class="radio disabled">
                                                        <label><input type="radio" name="jawaban{{ $loop->iteration }}">D. {{ $soal->d }}</label>
                                                    </div>
                                                    <div class="radio disabled">
                                                        <label><input type="radio" name="jawaban{{ $loop->iteration }}">E. {{ $soal->e }}</label>
                                                    </div>
                                                </ul>
                                            </form>
                                            <p class="text-uppercase" > Jawaban: {{ $soal->jawaban }} </p>
                                            <br>
                                            <div class="dropdown center-block" >
                                              <button class="dropbtn">Lihat Pembahasan</button>
                                              <div class="dropdown-content">
                                                <a href="#">{{$soal->penjelasan}} </a>
                                              </div>
                                            </div>
                                        </th>
                                            <th class="text-uppercase text-center" style="color:#4CAF50; font-size: 150%">
                                                {{ $jawaban[$loop->index] }}
                                            </th>
                                        </tr>
                                    @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
      </section>
      <br><br>

      <br><br><br><br>



  </body>
</html>
