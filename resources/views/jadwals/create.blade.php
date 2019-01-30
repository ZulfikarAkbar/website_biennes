<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Tambah konten belajar</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
  </head>
  <body style="background-image: url({{url('img/wall4.png')}})">
    <br><br><br><br>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="text-align: center; font-size: 20px; background-color: green; color:white;">{{ __('Masukkan konten') }}</div>
                <div class="card-body">
                  <form method="post" action="{{route('jadwals.store')}}" enctype="multipart/form-data">
                          
                          {{ csrf_field() }}
                          <div class="form-group row">
                              <label class="col-sm-4 col-form-label text-md-right">{{ __('Tanggal') }}</label>
                              <div class="col-md-6">
                                
                                <input placeholder="Masukkan tanggal belajar" class="date form-control {{ $errors->has('date') ? ' is-invalid' : '' }}"  type="text" id="datepicker" name="date"  value="{{ old('date') }}" required autofocus>
                                @if ($errors->has('date'))
                                  <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('date') }}</strong>
                                  </span>
                                @endif
                              </div>
                          </div>

                          <div class="form-group row">
                              <label class="col-sm-4 col-form-label text-md-right">{{ __('Materi') }}</label>
                              <div class="col-md-6">
                                  
                                  <input type="text" placeholder="Masukkan nama materi" class="form-control {{ $errors->has('topik') ? ' is-invalid' : '' }}" name="topik" value="{{ old('topik') }}" required autofocus>
                                  
                                  @if ($errors->has('topik'))
                                  <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('topik') }}</strong>
                                  </span>
                                @endif
                              </div>
                          </div>

                          <div class="form-group row">
                              <label class="col-sm-4 col-form-label text-md-right">{{ __('Waktu belajar') }}</label>
                              <div class="col-md-6">
                                  
                                  <input placeholder="Masukkan rentang waktu belajar" type="text" class="form-control {{ $errors->has('kelas') ? ' is-invalid' : '' }}" name="kelas" value="{{ old('kelas') }}" required autofocus>
                                  @if ($errors->has('kelas'))
                                  <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('kelas') }}</strong>
                                  </span>
                                @endif
                              </div>
                          </div>
<!--
                          <div class="form-group row">
                              <label class="col-sm-4 col-form-label text-md-right">{{ __('Ruangan') }}</label>
                              <div class="col-md-6">
                                  <input type="text" class="form-control {{ $errors->has('ruang') ? ' is-invalid' : '' }}" name="ruang" value="{{ old('ruang') }}" required autofocus>
                                  @if ($errors->has('ruang'))
                                  <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('ruang') }}</strong>
                                  </span>
                                @endif
                              </div>
                          </div>
                        -->
                    <div class="form-group row">
                              <label class="col-sm-4 col-form-label text-md-right">{{ __('Pengajar') }}</label>
                              <div class="col-md-6">
                              <input placeholder="Masukkan nama pengajar" type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                              @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('name') }}</strong>
                                </span>
                              @endif
                            </div>
                          </div>
    
                          <div class="form-group row">
                              <label class="col-sm-4 col-form-label text-md-right">{{ __('Kontak pengajar') }}</label>
                              <div class="col-md-6">
                                <input placeholder="Masukkan nomor telepon/HP pengajar" type="text" class="form-control {{ $errors->has('number') ? ' is-invalid' : '' }}" name="number" value="{{ old('number') }}" required autofocus>
                                  @if ($errors->has('number'))
                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('number') }}</strong>
                                    </span>
                                  @endif
                              </div>
                            </div>
    
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label text-md-right">{{ __('Materi tambahan') }}</label>
                                <div class="col-md-6">
                              <input placeholder="Pilih materi tambahan" type="file" class="form-control {{ $errors->has('materi') ? ' is-invalid' : '' }}" name="materi" value="{{ old('materi') }}" required autofocus>
                              @if ($errors->has('materi'))
                                <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('materi') }}</strong>
                                </span>
                              @endif
                          </div>
                          </div>
    
                          {{-- <div class="form-group row">
                              <label class="col-sm-4 col-form-label text-md-right">{{ __('Soal latihan') }}</label>
                              <div class="col-md-6">
                              <input placeholder="Pilih soal" type="file" class="form-control {{ $errors->has('quiz') ? ' is-invalid' : '' }}" name="quiz" value="{{ old('quiz') }}" required autofocus>
                              @if ($errors->has('quiz'))
                                <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('quiz') }}</strong>
                                </span>
                              @endif
                          </div>
                          </div> --}}
    
                          <div class="form-group row">
                              <label class="col-sm-4 col-form-label text-md-right">{{ __('Video pembelajaran') }}</label>
                              <div class="col-md-6">
                              <input placeholder="Masukkan link video youtube pelajaran" type="text" class="form-control {{ $errors->has('video') ? ' is-invalid' : '' }}" name="video" value="{{ old('video') }}" required autofocus>
                              @if ($errors->has('video'))
                                <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('video') }}</strong>
                                </span>
                              @endif
                          </div>
                          </div>
                          <div class="form-group row mb-0">
                              <div class="col-md-8 offset-md-4">
                              <button type="submit" class="btn btn-success" style="border-radius: 2em; background-color: green">
                                <i class="fa fa-plus"></i>
                                {{ __('Ok') }}</button>
                                <a href="/jadwals" class="btn" style="border-radius: 2em; background-color: tomato; color: white">
                                  <i class="fa fa-plus"></i>
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
    <script type="text/javascript">
        $('#datepicker').datepicker({
            autoclose: true,
            format: 'dd-mm-yyyy'
         });
    </script>
  </body>
</html>
