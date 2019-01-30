<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Materi</title>
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
                <div class="card-header" style="text-align: center; font-size: 20px; background-color: green; color:white;">{{ __('Masukkan nama materi') }}</div>
                <div class="card-body">
                  <form method="post" action="{{route('materi.store')}}" enctype="multipart/form-data">
                          
                          {{ csrf_field() }}

                          <div class="form-group row">
                              <label class="col-sm-4 col-form-label text-md-right">{{ __('Materi') }}</label>
                              <div class="col-md-6">
                                  
                                  <input type="text" placeholder="Masukkan nama materi" class="form-control {{ $errors->has('materi') ? ' is-invalid' : '' }}" name="materi" value="{{ old('materi') }}" required autofocus>
                                  
                                  @if ($errors->has('materi'))
                                  <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('materi') }}</strong>
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
