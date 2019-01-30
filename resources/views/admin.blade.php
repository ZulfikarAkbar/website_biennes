<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Masukkan jadwal dan soal </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
  </head>
  <body>
    <div class="container">
      <h2>Masukkan jadwal</h2><br/>
      <form method="post" action="{{url('jadwals')}}" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <strong>Tanggal : </strong>
            <input class="date form-control"  type="text" id="datepicker" name="date">
         </div>
        </div>
         <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <lable for="Topik"><strong>Topik materi : </strong></lable>
                <select name="topik" >
                  <option value="Matematika">Matematika</option>
                  <option value="Inggris">Bahasa Inggris<option>
                  <option value="Indonesia">Bahasa Indonesia</option>
                  <option value="Verbal">Kemampuan Verbal</option>
                </select>
            </div>
        </div>
	<div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <lable for="Kelas"><strong>Jam kelas : </strong></lable>
                <select name="kelas">
                  <option value="sore">16.00-18.00</option>
                  <option value="malam">18.30-20.30<option>
                  <option value="siang">13.00-15.00</option>
                  <option value="pagi">9.00-12.00</option>
                </select>
            </div>
        </div>
	<div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <lable><strong>Ruangan : </strong></lable>
                <select name="ruang">
                  <option value="201">Ruang 201</option>
                  <option value="202">Ruang 202<option>
                  <option value="301">Ruang 301</option>
                  <option value="302">Ruang 302</option>
                </select>
            </div>
        </div>
	<div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Name">Tutor:</label>
            <input type="text" class="form-control" name="name">
          </div>
        </div>

        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Number">No. HP:</label>
              <input type="text" class="form-control" name="number">
            </div>
          </div>

        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
		<label for="Materi">Unggah materi:</label>
            <input type="file" name="filename" class="form-control" name="materi">
         </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
    </div>
    <script type="text/javascript">
        $('#datepicker').datepicker({
            autoclose: true,
            format: 'dd-mm-yyyy'
         });
    </script>
  </body>
</html>
