<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Edit soal</title>
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

        function goBack() {
          window.history.back()
      }
        
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
    <br><br>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="text-align: center; font-size: 20px; background-color: cornflowerblue; color:white;">{{ __('Perbarui soal') }}</div>
                <div class="card-body">
                  <form method="post" action="/soal/{{$id}}/{{$no}}" enctype="multipart/form-data">
                          
                          {{ csrf_field() }}

                          {{-- <div class="form-group row">
                            <label class="col-sm-4 col-form-label text-md-right">{{ __('Gambar pertanyaan') }}</label>
                            <div class="col-md-6">
                            <input placeholder="Masukkan gambar untuk pertanyaan jika ada" type="file" class="form-control {{ $errors->has('gambar_pertanyaan') ? ' is-invalid' : '' }}" name="gambar_pertanyaan" value="{{ old('gambar_pertanyaan') }}" autofocus>
                            @if ($errors->has('gambar_pertanyaan'))
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('gambar_pertanyaan') }}</strong>
                              </span>
                            @endif
                          </div>
                        </div> --}}
                          <div class="form-group row">
                              <label class="col-sm-4 col-form-label text-md-right">{{ __('Pertanyaan') }}</label>
                              <div class="col-md-6">
                                  
                              <input style="height: 200px" type="text" placeholder="Masukkan pertanyaan" class="form-control {{ $errors->has('pertanyaan') ? ' is-invalid' : '' }}" name="pertanyaan" value="{{$soal->pertanyaan}}" required autofocus>
                                  @if ($errors->has('pertanyaan'))
                                  <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('pertanyaan') }}</strong>
                                  </span>
                                @endif
                              </div>
                          </div>



                          {{-- <div class="form-group row">
                            <label class="col-sm-4 col-form-label text-md-right">{{ __('Gambar pilihan A') }}</label>
                            <div class="col-md-6">
                            <input placeholder="Masukkan gambar untuk pilihan ini jika ada" type="file" class="form-control {{ $errors->has('gambar_a') ? ' is-invalid' : '' }}" name="gambar_a" value="{{ old('gambar_a') }}" autofocus>
                            @if ($errors->has('gambar_a'))
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('gambar_a') }}</strong>
                              </span>
                            @endif
                          </div>
                          </div> --}}
                          <div class="form-group row">
                            <label class="col-sm-4 col-form-label text-md-right">{{ __('A') }}</label>
                            <div class="col-md-6">
                            <input placeholder="Masukkan jawaban untuk opsi ini" type="text" class="form-control {{ $errors->has('a') ? ' is-invalid' : '' }}" name="a" value="{{ $soal->a }}" required autofocus>
                            @if ($errors->has('a'))
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('a') }}</strong>
                              </span>
                            @endif
                          </div>
                        </div>
                          {{-- <div class="form-group row">
                            <label class="col-sm-4 col-form-label text-md-right">{{ __('Gambar pilihan B') }}</label>
                            <div class="col-md-6">
                            <input placeholder="Masukkan gambar untuk pilihan ini jika ada" type="file" class="form-control {{ $errors->has('gambar_b') ? ' is-invalid' : '' }}" name="gambar_b" value="{{ old('gambar_b') }}"  autofocus>
                            @if ($errors->has('gambar_b'))
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('gambar_b') }}</strong>
                              </span>
                            @endif
                          </div>
                        </div> --}}
                          <div class="form-group row">
                            <label class="col-sm-4 col-form-label text-md-right">{{ __('B') }}</label>
                            <div class="col-md-6">
                            <input placeholder="Masukkan jawaban untuk opsi ini" type="text" class="form-control {{ $errors->has('b') ? ' is-invalid' : '' }}" name="b" value="{{ $soal->b }}" required autofocus>
                            @if ($errors->has('b'))
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('b') }}</strong>
                              </span>
                            @endif
                          </div>
                        </div>
                          {{-- <div class="form-group row">
                            <label class="col-sm-4 col-form-label text-md-right">{{ __('Gambar pilihan C') }}</label>
                            <div class="col-md-6">
                            <input placeholder="Masukkan gambar untuk pilihan ini jika ada" type="file" class="form-control {{ $errors->has('gambar_c') ? ' is-invalid' : '' }}" name="gambar_c" value="{{ old('gambar_c') }}"  autofocus>
                            @if ($errors->has('gambar_c'))
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('gambar_c') }}</strong>
                              </span>
                            @endif
                          </div>
                        </div> --}}
                          <div class="form-group row">
                            <label class="col-sm-4 col-form-label text-md-right">{{ __('C') }}</label>
                            <div class="col-md-6">
                            <input placeholder="Masukkan jawaban untuk opsi ini" type="text" class="form-control {{ $errors->has('c') ? ' is-invalid' : '' }}" name="c" value="{{ $soal->c }}" required autofocus>
                            @if ($errors->has('c'))
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('c') }}</strong>
                              </span>
                            @endif
                          </div>
                        </div>
                          {{-- <div class="form-group row">
                            <label class="col-sm-4 col-form-label text-md-right">{{ __('Gambar pilihan D') }}</label>
                            <div class="col-md-6">
                            <input placeholder="Masukkan gambar untuk pilihan ini jika ada" type="file" class="form-control {{ $errors->has('gambar_d') ? ' is-invalid' : '' }}" name="gambar_d" value="{{ old('gambar_d') }}"  autofocus>
                            @if ($errors->has('gambar_d'))
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('gambar_d') }}</strong>
                              </span>
                            @endif
                          </div>
                        </div> --}}
                          <div class="form-group row">
                            <label class="col-sm-4 col-form-label text-md-right">{{ __('D') }}</label>
                            <div class="col-md-6">
                            <input placeholder="Masukkan jawaban untuk opsi ini" type="text" class="form-control {{ $errors->has('d') ? ' is-invalid' : '' }}" name="d" value="{{ $soal->d }}" required autofocus>
                            @if ($errors->has('d'))
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('d') }}</strong>
                              </span>
                            @endif
                          </div>
                        </div>
                          {{-- <div class="form-group row">
                            <label class="col-sm-4 col-form-label text-md-right">{{ __('Gambar pilihan E') }}</label>
                            <div class="col-md-6">
                            <input placeholder="Masukkan gambar untuk pilihan ini jika ada" type="file" class="form-control {{ $errors->has('gambar_e') ? ' is-invalid' : '' }}" name="gambar_e" value="{{ old('gambar_e') }}" autofocus>
                            @if ($errors->has('gambar_e'))
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('gambar_e') }}</strong>
                              </span>
                            @endif
                          </div>
                        </div> --}}
                          <div class="form-group row">
                            <label class="col-sm-4 col-form-label text-md-right">{{ __('E') }}</label>
                            <div class="col-md-6">
                            <input placeholder="Masukkan jawaban untuk opsi ini" type="text" class="form-control {{ $errors->has('e') ? ' is-invalid' : '' }}" name="e" value="{{ $soal->e }}" required autofocus>
                            @if ($errors->has('e'))
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('e') }}</strong>
                              </span>
                            @endif
                          </div>
                        </div>


                          {{-- <div class="form-group row">
                            <label class="col-sm-4 col-form-label text-md-right">{{ __('Gambar jawaban benar') }}</label>
                            <div class="col-md-6">
                            <input placeholder="Masukkan gambar untuk jawaban benar jika ada" type="file" class="form-control {{ $errors->has('gambar_jawaban') ? ' is-invalid' : '' }}" name="gambar_jawaban" value="{{ old('gambar_jawaban') }}" autofocus>
                            @if ($errors->has('gambar_jawaban'))
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('gambar_jawaban') }}</strong>
                              </span>
                            @endif
                          </div>
                        </div> --}}
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label text-md-right">{{ __('Jawaban') }}</label>
                            <div class="col-md-6">
                                <select name="jawaban" style="font-size: 15px" class="form-control" id="jawaban">
                                    <option value="a">A</option>
                                    <option value="b">B</option>
                                    <option value="c">C</option>
                                    <option value="d">D</option>
                                    <option value="e">E</option>
                                </select> 
                                
                          </div>
                        </div>

                        



                          {{-- <div class="form-group row">
                            <label class="col-sm-4 col-form-label text-md-right">{{ __('Gambar pembahasan') }}</label>
                            <div class="col-md-6">
                            <input placeholder="Masukkan gambar untuk penjelasan jika ada" type="file" class="form-control {{ $errors->has('gambar_penjelasan') ? ' is-invalid' : '' }}" name="gambar_penjelasan" value="{{ old('gambar_penjelasan') }}" autofocus>
                            @if ($errors->has('gambar_penjelasan'))
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('gambar_penjelasan') }}</strong>
                              </span>
                            @endif
                          </div>
                        </div> --}}
                          <div class="form-group row">
                            <label class="col-sm-4 col-form-label text-md-right">{{ __('Pembahasan') }}</label>
                            <div class="col-md-6">
                            <input style="height: 200px" placeholder="Masukkan pembahasan soal" type="text" class="form-control {{ $errors->has('penjelasan') ? ' is-invalid' : '' }}" name="penjelasan" value="{{ $soal->penjelasan }}" required autofocus>
                            
                                @if ($errors->has('penjelasan'))
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('penjelasan') }}</strong>
                              </span>
                            @endif
                          </div>
                        </div>


                          
                          <div class="form-group row mb-0">
                              <div class="col-md-8 offset-md-4">
                                <input type="submit" style="background-color: cornflowerblue; border-radius: 2em"  class="btn btn-primary" name="submit" value="Ok" onclick="return confirm('Kamu yakin untuk memperbarui soal?')">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="PUT">
                                <a class="btn" onclick="goBack()" style="border-radius: 2em; background-color: tomato; color: white">
                                  {{-- <i class="fa fa-plus"></i> --}}
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
