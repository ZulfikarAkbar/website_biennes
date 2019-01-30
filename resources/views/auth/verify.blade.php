@extends('verif')

@section('content')
<body  style="background-image: url(img/wall5.jpg)">
<br><br><br><br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifikasi akun Anda') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Link verifikasi akun sudah dikirim ke email Anda.') }}
                        </div>
                    @endif

                    {{ __('Mohon cek email Anda untuk meilhat link verifikasi akun.') }}
                    {{ __('Jika Anda tidak menerima email tersebut') }}, <a href="{{ route('verification.resend') }}">{{ __('klik di sini untuk mengirim ulang.') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
</body>
@endsection
