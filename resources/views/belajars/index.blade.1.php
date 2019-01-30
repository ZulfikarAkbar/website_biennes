<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Belajar</title>
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
</head>
  <body>
    <nav class="navbar navbar-dark brown navbar-expand-lg navbar-inverse fixed-top scrolling-navbar opaque-navbar">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto"><a href="{{ url('/home') }}"><img src="img/log.png" alt=""></a></ul>
                
            </div>
        </div>

    </nav>
    <br><br><br><br><br>
      <section>
            <div class="container" style="font-size: 20px;">
                    @if(session()->get('success'))
                    <div class="alert alert-success">
                      {{ session()->get('success') }}  
                    </div><br />
                  @endif
              <br><br><br><br>
              <h1 style="text-align: center;font-size: 50px"> <strong>Jadwal Belajar</strong> </h1>
              <br><br>
              <div class="row">
                   <div class="col-xl-3">
                   <a class="btn example hoverable z-depth-3" href="{{url('/videos')}}" role="button" style="font-size: 15px; background-color: chocolate">
                        <i class="fa fa-file-video-o" style="font-size: 15px"></i>
                        {{ __('Lihat video') }}</a>
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
          <div class="table-responsive table-wrapper-scroll-y">
                <table id="dtVerticalScrollExample">
                        <thead class="brown white-text">
                            <tr>
                                <!--<th  style="font-size: 20px"><strong>Id</strong></th>-->
                                <th class="th-lg" style="font-size: 15px; width: 153px"><strong>Tanggal</strong>
                                    
                                </th>
                                <!--<th><strong>Jam</strong></th>-->
                                <!--<th><strong>Ruang</strong></th>-->
                                <th class="th-lg" style="font-size: 15px;"><strong>Topik</strong>
                                    
                                </th>
                                <th class="th-lg" style="font-size: 15px; "  ><strong>Pengajar</strong>
                                    
                                </th>
                                <th class="th-lg" style="font-size: 15px; " ><strong>Materi</strong>
                                    
                                </th>
                                <!--
                                <th class="th-lg" style="font-size: 15px; " ><strong>Soal</strong>
                                    
                                </th>
                            -->
                                <!--
                                <th class="th-lg" style="font-size: 15px; "   ><strong>Video</strong>
                                    
                                </th>
                            -->
                                <th colspan="2" class="th-lg" style="font-size: 15px; "><strong>Action</strong></th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            @foreach ($belajars as $belajar)
                            <tr>
                                <!--<td style="font-size: 15px">{{$belajar->id}}</td>-->
                                <td style="font-size: 15px">{{$belajar->date}}</td>
                                
                                <td style="font-size: 15px">{{$belajar->topik}}</td>
                                <td style="font-size: 15px">{{$belajar->name}}</td>
                                <td style="font-size: 15px"><a href="{{asset('storage/upload_materi/'.$belajar->materi)}}">{{$belajar->materi}}</a></td>
                                <!--<td style="font-size: 15px">{{$belajar->quiz}}</td>-->
                                <!--<td style="font-size: 15px">{{$belajar->video}}</td>-->
                                
                                <td ><a href="" class="btn btn-info example hoverable z-depth-3" style="font-size: 15px;">quiz</a></td>
                                <!--
                                <td ><a class="btn" href="storage/upload_materi/{{$belajar->materi}}" download="{{$belajar->materi}}" type="submit" style="font-size: 15px; background-color: violet;">download</a></td>
                            ``  -->
                            </tr>
                            @endforeach
                            
                        </tbody>
                     </table>
          </div>
        <br><br><br><br>      
          <div class="row">
              
                <div class="col-lg-4"></div>
                <div class="col-lg-4"></div>
                <div class="col-lg-4" style="font-size:25px;"><a class="btn" style="background-color: chocolate; font-size: 15px;" href="{{url('/home')}}">
                    kembali ke home > ></a></div>
          </div>
          <br><br><br><br>
      </section>
      
      
      
  </body>
</html>
