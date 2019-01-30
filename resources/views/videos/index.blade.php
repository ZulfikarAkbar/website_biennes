<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Video</title>
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
    </style>
</head>
  <body style="background-image: url(img/doodle.jpg)">
    <nav class="navbar navbar-dark brown navbar-expand-lg navbar-inverse fixed-top scrolling-navbar opaque-navbar">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto"><a href="{{ url('/home') }}"><img src="img/log.png" alt=""></a></ul>
                
            </div>
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
              <h1 style="text-align: center;font-size: 50px"> <strong>Video Pembelajaran</strong> </h1>
              <br><br>
              <div class="row">
                   
                  <div class="col-xl-4"></div>
                  <div class="col-xl-4"></div>
                  <div class="col-xl-4">
                      
                  </div>
              </div>
            </div>
      </section>
    
      <br><br><br>
      
      <section>
            
          <div class="container">
                <div class="row">
                        @foreach($videos as $video)
                        <div class="col-4">
                                <!-- Card -->
                                <div class="card example hoverable" style="background-color: chocolate; color: white;">

                                        <!-- Card image -->
                                    <div class="view view-cascade overlay">
                                            <iframe class="embed-responsive-item card-img-top" src={{$video->video}} allowfullscreen alt="video not found"></iframe>
                                    </div>
                                    
                                        <!-- Card content -->
                                    <div class="card-body">
                                    
                                        <!-- Title -->
                                        <h1 class="card-title">{{$video->topik}}</h1>
                                        <h4><i class="fa fa-calendar"> {{$video->date}}</i></h4>
                                        <h4><i class="fa fa-user-tie"> {{$video->name}}</i></h4>
                                    
                                    </div>
                                    
                                </div>
                                <!-- Card -->
                                <br><br><br>
                            </div>
                            @endforeach
                </div>
                
               
          </div>
          
      </section>
      <br><br>
      
      <br><br><br><br>
      
     
      
  </body>
</html>
