<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Membuat soal</title>
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
                <div class="card-header" style="text-align: center; font-size: 20px; background-color: green; color:white;">{{ __('Masukkan soal') }}</div>
                <div class="card-body">
                  <form method="post" action="{{route('materi.store_pertanyaan')}}" enctype="multipart/form-data">
                          
                          {{ csrf_field() }}
                          <div class="form-group row">
                            <label class="col-sm-4 col-form-label text-md-right">{{ __('Materi') }}</label>
                            <div class="col-md-6">
                                
                                <input  type="text" placeholder="Masukkan materi belajar" class="form-control {{ $errors->has('materi') ? ' is-invalid' : '' }}" name="materi" value="{{ old('materi') }}" required autofocus></textarea>
                                @if ($errors->has('materi'))
                                <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('materi') }}</strong>
                                </span>
                              @endif
                            </div>
                        </div>

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
                                  
                                  <textarea style="height: 200px" type="text" placeholder="Masukkan pertanyaan" class="form-control {{ $errors->has('pertanyaan') ? ' is-invalid' : '' }}" name="pertanyaan" value="{{ old('pertanyaan') }}" required autofocus></textarea>
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
                            <label class="col-sm-4 col-form-label text-md-right">{{ __('Pilihan A') }}</label>
                            <div class="col-md-6">
                            <input placeholder="Masukkan jawaban untuk opsi ini" type="text" class="form-control {{ $errors->has('a') ? ' is-invalid' : '' }}" name="a" value="{{ old('a') }}" required autofocus>
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
                            <label class="col-sm-4 col-form-label text-md-right">{{ __('Pilihan B') }}</label>
                            <div class="col-md-6">
                            <input placeholder="Masukkan jawaban untuk opsi ini" type="text" class="form-control {{ $errors->has('b') ? ' is-invalid' : '' }}" name="b" value="{{ old('b') }}" required autofocus>
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
                            <label class="col-sm-4 col-form-label text-md-right">{{ __('Pilihan C') }}</label>
                            <div class="col-md-6">
                            <input placeholder="Masukkan jawaban untuk opsi ini" type="text" class="form-control {{ $errors->has('c') ? ' is-invalid' : '' }}" name="c" value="{{ old('c') }}" required autofocus>
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
                            <label class="col-sm-4 col-form-label text-md-right">{{ __('Pilihan D') }}</label>
                            <div class="col-md-6">
                            <input placeholder="Masukkan jawaban untuk opsi ini" type="text" class="form-control {{ $errors->has('d') ? ' is-invalid' : '' }}" name="d" value="{{ old('d') }}" required autofocus>
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
                            <label class="col-sm-4 col-form-label text-md-right">{{ __('Pilihan E') }}</label>
                            <div class="col-md-6">
                            <input placeholder="Masukkan jawaban untuk opsi ini" type="text" class="form-control {{ $errors->has('e') ? ' is-invalid' : '' }}" name="e" value="{{ old('e') }}" required autofocus>
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
                            <label class="col-sm-4 col-form-label text-md-right">{{ __('Jawaban benar') }}</label>
                            <div class="col-md-6">
                            <input placeholder="Masukkan jawaban benar" type="text" class="form-control {{ $errors->has('jawaban') ? ' is-invalid' : '' }}" name="jawaban" value="{{ old('jawaban') }}" required autofocus>
                            @if ($errors->has('jawaban'))
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('jawaban') }}</strong>
                              </span>
                            @endif
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
                            <textarea style="height: 200px" placeholder="Masukkan pembahasan soal" type="text" class="form-control {{ $errors->has('penjelasan') ? ' is-invalid' : '' }}" name="penjelasan" value="{{ old('penjelasan') }}" required autofocus>
                            </textarea>
                                @if ($errors->has('penjelasan'))
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('penjelasan') }}</strong>
                              </span>
                            @endif
                          </div>
                        </div>


                          
                          <div class="form-group row mb-0">
                              <div class="col-md-8 offset-md-4">
                              <button type="submit" class="btn btn-success" style="border-radius: 2em; background-color: green">
                                <i class="fa fa-plus"></i>
                                {{ __('Submit') }}</button>
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
