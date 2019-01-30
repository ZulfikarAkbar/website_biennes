@extends('layouts.app')

@section('content')
<br><br><br><br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <br>
                    @if (auth()->user()->isAdmin())
                    <a href="{{ url('/jadwals') }}">Lihat jadwal . . .</a></br>
                    <a href="{{ url('/penggunas') }}">Lihat user terdaftar . . .</a></br>
                    @else
                    <a href="{{ url('/belajars') }}">Waktunya belajar . . .</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
