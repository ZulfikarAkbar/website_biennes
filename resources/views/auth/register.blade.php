@extends('layouts.app')

@section('content')
<body style="background-image: url(img/wall4.png)">
<br><br><br><br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="text-align: center; color: white; background-color: green">{{ __('Registrasi') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" placeholder="Masukkan nama lengkap" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone number') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="number" placeholder="Masukkan nomor handphone" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" required>

                                @if ($errors->has('phone'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" placeholder="Masukkan alamat E-Mail" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

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
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" placeholder="Ketik ulang password" class="form-control" name="password_confirmation" required>
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
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" style="background-color: green;border-radius: 2em" class="btn" data-toggle="tooltip" data-placement="right" title="Setelah daftar kamu akan menerima E-mail yang berisi pesan untuk verifikasi akun">
                                    <i class="fa fa-user-plus"></i>
                                    {{ __('  Daftar') }}
                                </button>
                                <p>Sudah pernah mendaftar?
                                        <a href="{{ route('login') }}">Waktunya Login</a>
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
