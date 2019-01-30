@extends('layouts.app')

@section('content')
<body style="background-image: url(img/wall4.png)">
<br><br><br><br><br>
<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="text-align: center; background-color: cornflowerblue; color: white;">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" placeholder="Masukkan alamat E-Mail" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" placeholder="Masukkan password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
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
                            
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Ingat saya') }}
                                    </label>
                                </div>
                                <a  href="{{ route('password.request') }}">
                                    {{ __('Saya lupa password') }}
                                </a>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary" style="border-radius: 2em">
                                    <i class="fa fa-sign-in"></i>
                                    {{ __('Login') }}
                                </button>
                                <p> Tidak bisa login?
                                    <a href="{{ route('register') }}">Ayo daftarkan dirimu !</a>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
@endsection
