@extends('layouts.app')

@section('content')
<body style="background-image: url(img/wall4.png)">
    <br><br><br><br><br><br>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="text-align: center; font-size: 20px; background-color: green; color: white;">{{ __('Hubungi kami') }}</div>
                    
                    {{-- @if(Session::has('status'))
                        <div class="alert alert-success">{{ Session::get('status') }}</div>
                    @endif --}}
                        <div class="card-body">
                            <form action="" method="post" enctype="multipart/form-data">

                                {{ csrf_field() }}

                                <div class="form-group row">
                                        <label class="col-sm-4 col-form-label text-md-right">{{ __('Nama') }}</label>
                                        <div class="col-md-6">
                                            
                                            <input id="name"  type="text" placeholder="Masukkan nama lengkap" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                                            @if ($errors->has('name'))
                                            <span class="invalid-feedback" role="alert">
                                              <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                          @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                            <label class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>
                                            <div class="col-md-6">
                                                
                                                <input id="email"  type="text" placeholder="Masukkan alamat email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                                @if ($errors->has('email'))
                                                <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                              @endif
                                            </div>
                                        </div>
                                   
                                        <div class="form-group row">
                                                <label class="col-sm-4 col-form-label text-md-right">{{ __('Pesan') }}</label>
                                                <div class="col-md-6">
                                                    
                                                    <textarea id="message" style="height: 200px"  type="text" placeholder="Masukkan pesan Anda" class="form-control {{ $errors->has('message') ? ' is-invalid' : '' }}" name="message" value="{{ old('message') }}" required autofocus></textarea>
                                                    @if ($errors->has('message'))
                                                    <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $errors->first('message') }}</strong>
                                                    </span>
                                                  @endif
                                                </div>
                                            </div>

                                
                                            <div class="form-group row">
                                                    <label for="password" class="col-md-4 col-form-label text-md-right"></label>
                    
                                                    <div class="col-md-6 captcha">
                                                        <span>{!! captcha_img('flat'); !!}</span>
                                                        <!-- <button type="button" class="btn btn-success btn-refresh">Refresh</button> -->
                                                    </div>
                                                    
                                                    <div class="col-md-4 offset-md-4">
                                                        
                                                        <input type="text" id="captcha" class="form-control{{ $errors->has('captcha') ? ' is-invalid' : '' }}" placeholder="Ketik Captcha" name ="captcha" required>
                                                    </div>
                                                        @if ($errors->has('captcha'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('captcha') }}</strong>
                                                            </span>
                                                        @endif
                                                </div>
                                                <div class="form-group row mb-0">
                                                        <div class="col-md-8 offset-md-4">
                                                            <button type="submit" class="btn btn-success" style="border-radius: 2em">
                                                                
                                                                {{ __('Kirim sekarang!') }}
                                                            </button>
                                                            
                                                        </div>
                                                    </div>
                            
                                {{-- <button class="btn btn-success" type="submit" style="border-radius: 2em"></button> --}}
                            </form>
                            
                        </div>
                        
                </div>
            </div>
        </div>
              <br><br><br>                  
    </div>

</body>
