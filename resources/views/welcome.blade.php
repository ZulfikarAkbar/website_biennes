<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        


        
        <title>Biennes</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">


        
        <meta name="viewport" content="width=device-width, initial-scale=0, shrink-to-fit=yes">
        
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="css/mdb.min.css" rel="stylesheet">
        <!-- Your custom styles (optional) -->
        <link href="css/style.css" rel="stylesheet">

        <!-- Styles -->
        <style type="text/css">
            @media (min-width: 800px) and (max-width: 850px) {
                    .navbar:not(.top-nav-collapse) {
                        background: #1C2331!important;
                    }
                }
                .opaque-navbar {
                    background-color: rgba(0,0,0,0.5);
                /* Transparent = rgba(0,0,0,0) / Translucent = (0,0,0,0.5)  */
                    /*height: 60px;*/
                    border-bottom: 0px;
                    transition: background-color .5s ease 0s;
                }

                .opaque-navbar.opaque {
                    background-color: #5d4037;
                    /*height: 60px;*/
                    transition: background-color .5s ease 0s;
                }


                @media (max-width: 992px) {
                    .opaque-navbar {
                        background-color: #5d4037;
                        /*height: 60px;*/
                        transition: background-color .5s ease 0s;
                    }

                }
                .parallax1 {
                    /* The image used */
                    background-image: url("img/stanoke.jpg");

                    /* Set a specific height */
                    height: 600px;

                    /* Create the parallax scrolling effect */
                    background-attachment: fixed;
                    background-position: center;
                    background-repeat: no-repeat;
                    background-size: cover;
                }

                
                .parallax2 {
                    /* The image used */
                    background-image: url("img/bocah.jpg");

                    /* Set a specific height */
                    height: 600px;

                    /* Create the parallax scrolling effect */
                    background-attachment: fixed;
                    background-position: center;
                    background-repeat: no-repeat;
                    background-size: cover;
                }

               
                .parallax3 {
                    /* The image used */
                    background-image: url("img/dinamika.jpg");

                    /* Set a specific height */
                    height: 600px;
                    
                    /* Create the parallax scrolling effect */
                    background-attachment: fixed;
                    background-position: center;
                    background-repeat: no-repeat;
                    background-size: cover;
                }

                

        </style>


    </head>
    
    <body>
            <nav class="navbar navbar-dark navbar-expand-lg navbar-inverse fixed-top scrolling-navbar opaque-navbar">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <!--{{ config('app.name', 'Laravel') }}-->
                        <img src="{{asset('img/log3.png')}}" alt="" height=78px width=249px>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            @if (Route::has('login'))       
                                @auth
                                <a class="nav-link" href="{{ url('/home') }}">
                                    <i class="fa fa-home"></i>
                                    Home</a>
                                @else
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">
                                        <i class="fa fa-sign-in"></i>
                                        Login
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">
                                        <i class="fa fa-user-plus"></i>
                                        Register
                                    </a>
                                </li>
                                @endauth
                            @endif            
                        </ul>
                    </div>
                </div>

            </nav>
<!--
        <div class="flex-center position-ref full-height">
        

            <div class="content">
                <div class="title m-b-md">
                    Biennes
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>

            </div>
        </div>
-->

        <section>
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                        <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="img/bendera_stan.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/kampus.png" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/stan.jpg" alt="Third slide">
                        </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                        </a>
                    </div>
        </section>
        
        <div class="parallax2"></div>
        <section>
            <br>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div>
                            <h2><b>BIENNES.</b></h2>
                            <b>
                                <p class="text-justify">
                                    Semangat kami adalah bagian dari solusi. 
                                    Dengan kurikulum dan metode belajar yang sudah teruji,
                                    kami ingin mendorong lahirnya banyak lulusan kami
                                    yang lolos pada USM PKN STAN yang siap menjadi solusi
                                    bagi permasalahan di Indonesia</b>
                                </p>
                            </b>
                            
                        </div>

                    </div>
                    <div class="col-lg-6">
                        <div class="container">
                            <img width="100%" height="100%" src="img/kelas.jpg"><img>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>

        <br>
        
        <div class="parallax1"></div>

        <!-- Section: Testimonials v.1 -->
        <section class="text-center my-5">
            <div class="container">
<!-- Section heading -->
            <h2 class="h1-responsive font-weight-bold my-5">Testimonial</h2>
            <!-- Section description -->
            <p class="dark-grey-text w-responsive mx-auto mb-5">
                
            </p>

            <!-- Grid row -->
            <div class="row">

                <!--Grid column-->
                <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">
                    <!--Card-->
                    <div class="card testimonial-card">
                        <!--Background color-->
                        <div class="card-up info-color"></div>
                        <!--Avatar-->
                        <div class="avatar mx-auto white">
                            <img src="img/testi6.jpg" weight="250px" width="250px" class="rounded-circle img-fluid">
                        </div>
                        <div class="card-body">
                            <!--Name-->
                            <h4 class="font-weight-bold mb-4">Yoppi Rispradana</h4>
                            <hr>
                            <!--Quotation-->
                            <p class="dark-grey-text mt-4">
                                <i class="fa fa-quote-left pr-2"></i>
                                Biennes merupakan tempat bimbel terbaik
                            </p>
                            <p>
                                - D-3 Akuntansi 2017
                            </p>
                        </div>
                    </div>
                    <!--Card-->
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-md-0 mb-4">
                    <!--Card-->
                    <div class="card testimonial-card">
                        <!--Background color-->
                        <div class="card-up blue-gradient">
                        </div>
                        <!--Avatar-->
                        <div class="avatar mx-auto white">
                            <img src="img/testi1.jpg" height="250px" width="250px" class="rounded-circle img-fluid">
                        </div>
                        <div class="card-body">
                            <!--Name-->
                            <h4 class="font-weight-bold mb-4">Sultan</h4>
                            <hr>
                            <!--Quotation-->
                            <p class="dark-grey-text mt-4">
                                <i class="fa fa-quote-left pr-2"></i>
                                Biennes merupakan tempat bimbel terbaik
                            </p>
                            <p>
                                - D-1 Bea Cukai 2018
                            </p>
                        </div>
                    </div>
                    <!--Card-->
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-6">
                    <!--Card-->
                    <div class="card testimonial-card">
                        <!--Background color-->
                        <div class="card-up indigo"></div>
                        <!--Avatar-->
                        <div class="avatar mx-auto white">
                            <img src="img/testi5.jpg" width="250px" height="100px" class="rounded-circle img-fluid">
                        </div>
                        <div class="card-body">
                            <!--Name-->
                            <h4 class="font-weight-bold mb-4">Mufti</h4>
                            <hr>
                            <!--Quotation-->
                            <p class="dark-grey-text mt-4">
                                <i class="fa fa-quote-left pr-2"></i>
                                Biennes merupakan tempat bimbel terbaik
                            </p>
                            <p>
                                - D-1 Bea Cukai 2017
                            </p>
                        </div>
                    </div>
                    <!--Card-->
                </div>
                <!--Grid column-->

            </div>
            <!-- Grid row -->

            <br><br><br>
            <!-- Grid row -->
            <div class="row">

                <!--Grid column-->
                <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">
                    <!--Card-->
                    <div class="card testimonial-card">
                        <!--Background color-->
                        <div class="card-up info-color"></div>
                        <!--Avatar-->
                        <div class="avatar mx-auto white">
                            <img src="img/testi3.jpg" class="rounded-circle img-fluid" width="250px" height="250px">
                        </div>
                        <div class="card-body">
                            <!--Name-->
                            <h4 class="font-weight-bold mb-4">Rani</h4>
                            <hr>
                            <!--Quotation-->
                            <p class="dark-grey-text mt-4">
                                <i class="fa fa-quote-left pr-2"></i>
                                Biennes merupakan tempat bimbel terbaik
                            </p>
                            <p>
                                - D-1 Bea Cukai 2018
                            </p>
                        </div>
                    </div>
                    <!--Card-->
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-md-0 mb-4">
                    <!--Card-->
                    <div class="card testimonial-card">
                        <!--Background color-->
                        <div class="card-up blue-gradient">
                        </div>
                        <!--Avatar-->
                        <div class="avatar mx-auto white">
                            <img src="img/testi4.jpg" width = "250px" height = "250px" class="rounded-circle img-fluid">
                        </div>
                        <div class="card-body">
                            <!--Name-->
                            <h4 class="font-weight-bold mb-4">Aston</h4>
                            <hr>
                            <!--Quotation-->
                            <p class="dark-grey-text mt-4">
                                <i class="fa fa-quote-left pr-2"></i>
                                Biennes merupakan tempat bimbel terbaik
                            </p>
                            <p>
                                - D-1 Akuntansi 2016
                            </p>
                        </div>
                    </div>
                    <!--Card-->
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-6">
                    <!--Card-->
                    <div class="card testimonial-card">
                        <!--Background color-->
                        <div class="card-up indigo"></div>
                        <!--Avatar-->
                        <div class="avatar mx-auto white">
                            <img src="img/testi2.jpg" width="250px" height="250px" class="rounded-circle img-fluid">
                        </div>
                        <div class="card-body">
                            <!--Name-->
                            <h4 class="font-weight-bold mb-4">Maria</h4>
                            <hr>
                            <!--Quotation-->
                            <p class="dark-grey-text mt-4">
                                <i class="fa fa-quote-left pr-2"></i>
                                Biennes merupakan tempat bimbel terbaik
                            </p>
                            <p>
                                - D-1 Bea Cukai 2018
                            </p>
                        </div>
                    </div>
                    <!--Card-->
                </div>
                <!--Grid column-->

            </div>
            <!-- Grid row -->
            </div>
            
        </section>
        <!-- Section: Testimonials v.1 -->
        <div class="parallax3"></div>
        
        <footer class="page-footer font-small unique-color-dark mt-4">

                <div style="background-color: saddlebrown;">
                  <div class="container">
              
                    <!-- Grid row-->
                    <div class="row py-4 d-flex align-items-center">
              
                      <!-- Grid column -->
                      <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                        <p><strong>Kirim pertanyaanmu ke sini !</strong></p>
                      <p><a href="{{url('/contact')}}" class="btn unique-color-dark"><i class="fa fa-envelope mr-3"></i>support@bimbel-biennes.com</a></p>
                      </div>
                      <!-- Grid column -->
                    </div>
                    <!-- Grid row-->
              
                  </div>
                </div>
              
                <!-- Footer Links -->
                <div class="container text-center text-md-left mt-5">
              
                  <!-- Grid row -->
                  <div class="row">
        
                    <!-- Grid column -->
                    <div class="col-md-6">
              
                      <!-- Links -->
                      <h6>Tentang kami</h6>
                      <hr class="deep-orange accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 125px;">
                      <p>
                        <i class="fa fa-home mr-3"></i>Perumahan Bintaro Gallery blok C1 No. 1 Pondok Kacang Timur, ID</p>
                      
                      <p>
                        <i class="fa fa-phone mr-3"></i>085692832116</p>
                      <p>
                        <i class="fa fa-calendar mr-3"></i>Senin-Jumat, 08:00-12:00</p>
              
                    </div>
                    <!-- Grid column -->
        
                    <!-- Grid column -->
                    <div class="col-md-6">
              
                      <!-- Links -->
                      <h6>Peta</h6>
                      <hr class="deep-orange accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                      <P>
                        <divs>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1402.2158320790888!2d106.70015947030825!3d-6.255128561650261!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fa677a42e71f%3A0x859e9168468e4380!2sHousing+Bintaro+Gallery!5e0!3m2!1sen!2sid!4v1547796727832" 
                             width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                      </P>
                      
              
                    </div>
                    <!-- Grid column -->
              
                  </div>
                  <!-- Grid row -->
                  <br><br>
              
                </div>
                <!-- Footer Links -->
              
                <!-- Copyright -->
                <div class="footer-copyright py-3">
                    <div class="container">
                        Hak cipta © Biennes Education
                    </div>
                    
                  <!--<a href="#">Biennes</a>-->
                </div>
                <!-- Copyright -->
              
              </footer>
              <!-- Footer -->



    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    
    <script type="text/javascript">
        // Animations initialization
        new WOW().init();
        /*
     **********************************************************
     * OPAQUE NAVBAR SCRIPT
     **********************************************************
     */
   
     // Toggle tranparent navbar when the user scrolls the page
   
     $(window).scroll(function() {
       if($(this).scrollTop() > 50)  /*height in pixels when the navbar becomes non opaque*/ 
       {
           $('.opaque-navbar').addClass('opaque');
       } else {
           $('.opaque-navbar').removeClass('opaque');
       }
   });
    </script>
     
    </body>
</html>
