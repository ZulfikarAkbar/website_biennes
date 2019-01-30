@extends('layouts.app')

@section('content')
<br><br>
<body  style="background-image: url(img/wall5.jpg)">
    <div class="container">


        @if (auth()->user()->isAdmin())
        <br><br><br>
        <div class="row justify-content-center">
            <div class="col-lg-4" style="text-align: center;">
                <!-- Card -->
                <div class="card">

                        <!-- Card image -->
                        <div class="view overlay">
                        <img class="card-img-top" src="img/sche.jpg" alt="Card image cap">
                        <a href="{{ url('/jadwals') }}">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                        </div>
                    
                        <!-- Card content -->
                        <div class="card-body">
                    
                        
                        <!-- Button -->
                        <a href="{{ url('/jadwals') }}" data-toggle="tooltip" data-placement="right" title="Silahkan membuat konten belajar" class="btn btn-primary" style="border-radius: 2em" ><i class="fa fa-edit" style="border-radius: 2em"> Buat konten</i></a>
                    
                        </div>
                    
                    </div>
                    <!-- Card -->
            </div>
            <div class="col-lg-4" style="text-align: center;">
                <!-- Card -->
                <div class="card">

                        <!-- Card image -->
                        <div class="view overlay">
                        <img class="card-img-top" src="img/gp.png" alt="Card image cap">
                        <a href="/materi">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                        </div>
                    
                        <!-- Card content -->
                        <div class="card-body">
                    
                        
                        <!-- Button -->
                        <a href="{{ url('/materi') }}" data-toggle="tooltip" data-placement="right" title="Silahkan membuat soal" class="btn btn-primary" style="border-radius: 2em" ><i class="fa fa-pencil" style="border-radius: 2em"> Soal latihan</i></a>
                    
                        </div>
                    
                    </div>
                    <!-- Card -->
            </div>
            <div class="col-lg-4" style="text-align: center;">
                <div class="card">

                        <!-- Card image -->
                        <div class="view overlay">
                        <img class="card-img-top" src="img/group.png" alt="Card image cap">
                        <a href="{{ url('/penggunas') }}">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                        </div>
                    
                        <!-- Card content -->
                        <div class="card-body">
                    
                        
                        <!-- Button -->
                        <a href="{{ url('/penggunas') }}" class="btn btn-primary" style="border-radius: 2em" ><i class="fa fa-users" style="border-radius: 2em" data-toggle="tooltip" data-placement="right" title="Lihat user terjadwal"> Lihat user</i></a>
                    
                        </div>
                    
                    </div>
                    <!-- Card -->
            </div>
        </div>
        <br><br><br><br>
        @else
        <br><br>
        <div class="row justify-content-center">
            <div class="col-6">
                <br>
                <a href="{{ url('/belajars') }}"><img class="btn" src="img/logobelajar.png" alt="" style=""></a>
            </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        "Ayo tingkatkan terus kemampuanmu dalam mengerjakan soal-soal latihan USM PKN STAN.
                        Di sini kamu akan diberikan quiz oleh tutor berpengalaman dan materi-materi 
                        yang sangat berguna."
                        <br><br>
                        <a href="{{ url('/belajars') }}">Let's start our bright future! >></a>
                    </div>
                </div>
            </div> 
        </div>
        <br><br>
        @endif
    
    </div>
</body>
@endsection
