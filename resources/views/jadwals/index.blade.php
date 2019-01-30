<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Konten belajar</title>
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
  <body  style="background-image: url(img/wall5.jpg);">
    
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
                        <a data-toggle="tooltip" data-placement="right" title="Lihat konten belajar siswa" class="nav-link" href="{{ url('/jadwals') }}"><i style="font-size: 20px" class="fa fa-eye">{{ __(' Konten Belajar') }}</i></a>
                    </li>
                    <li class="nav-item">
                        <a data-toggle="tooltip" data-placement="right" title="Lihat latihan soal" class="nav-link" href="{{ url('/materi') }}"><i style="font-size: 20px" class="fa fa-pencil">{{ __(' Latihan soal') }}</i></a>
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
            @include('sweetalert::alert')
            <div class="container" style="font-size: 20px;">
                    @if(session()->get('success'))
                    <div class="alert alert-success">
                      {{ session()->get('success') }}  
                    </div><br />
                  @endif
              <br><br>
              <h1 style="text-align: center;font-size: 50px"> <strong>Konten Bimbingan Belajar</strong> </h1>
              <br><br>
              <div class="row">
                  <div class="col-xl-3">
                      <a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Tambah konten baru" href="jadwals/create" role="button" style="font-size: 20px; border-radius: 2em">
                        <i class="fa fa-plus" style="font-size: 15px"></i>
                        {{ __(' Tambah konten') }}</a>
                  </div>
                  <div class="col-xl-3"></div>
                  <div class="col-xl-3"></div>
                  <div class="col-xl-3">
                      <iframe src="http://free.timeanddate.com/clock/i6fvh9wh/n108/tlid38/fn10/fs16/fc009/ahr/ftb/pa8/tt0/th1/ta1/tb4" frameborder="0" width="245" height="54"></iframe>

                  </div>
              </div>
            </div>
      </section>
    
      <br><br><br>
      <section class="container">
            <div class="row">
                    @foreach($jadwals as $jadwal)
                    <div class="col-4">
                            <!-- Card -->
                            <div class="card example hoverable" style="background-color:white ;">

                                    <!-- Card image -->
                                <div class="view view-cascade overlay">
                                        <iframe class="embed-responsive-item card-img-top" src={{$jadwal->video}} allowfullscreen alt="video not found"></iframe>
                                </div>
                                
                                    <!-- Card content -->
                                <div class="card-body" style="background-color: khaki">
                                
                                    <!-- Title -->
                                    <h1 class="card-title" style="color: black">{{$jadwal->topik}}</h1>
                                    <h4><i class="fa fa-user-tie" style="color: black"> {{$jadwal->name}}</i></h4>
                                    <h4><i class="fa fa-calendar" style="color: black"> {{$jadwal->date}} ( {{$jadwal->kelas}} )</i></h4>
                                    
                                    <p>
                                        <a href="{{ route('jadwals.edit',$jadwal->id)}}" data-toggle="tooltip" data-placement="right" title="Perbarui konten" class="btn" style="font-size: 15px; background-color: green; color:white;border-radius: 2em" onclick="return confirm('Kamu yakin ingin memperbarui konten ini?');" ><i class="fa fa-edit" style="font-size: 15px; border-radius: 2em"> Edit</i></a>
                                        {{-- <a href="{{ route('buat_soal.index',$jadwal->id)}}" data-toggle="tooltip" data-placement="right" title="Masukkan quiz" class="btn" style="font-size: 15px; background-color: green; border-radius: 2em"  ><i class="fa fa-edit" style="font-size: 15px; border-radius: 2em"> Quiz</i></a>
                                         --}}
                                        <form action="{{ route('jadwals.destroy', $jadwal->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button data-toggle="tooltip" data-placement="right" title="Hapus konten" class="btn btn-danger" type="submit" style="font-size: 15px; background-color: tomato; border-radius: 2em" onclick="return confirm('Kamu yakin ingin menghapus konten ini?');"><i class="fa fa-eraser" style="font-size: 15px;border-radius: 2em"> Hapus</i></button>
                                            
                                        </form>    
                                    
                                    </p>
                                
                                </div>
                                
                            </div>
                            <!-- Card -->
                            <br><br><br>
                        </div>
                        @endforeach
            </div>
          <br><br><br><br><br><br>
         
          
      </section>
      <br><br>
      
      
      
  </body>
</html>
