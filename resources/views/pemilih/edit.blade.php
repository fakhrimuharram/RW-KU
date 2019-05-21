<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>


			<center>  
            <img src="{{URL::asset('/img/vote.png')}}" alt="profile Pic" height="120" width="140">
            <h2>TAMBAH DATA PEMILIH</h2>  
            </center>
              <br><br>

        <div class="container">
			@foreach($pemilih as $p)
            <form class="form-horizontal" role="form" action="/pemilih/update" method="post">
             
			    
              {{ csrf_field() }}
               
                <div class="form-group">
                    <label for="nik" class="col-sm-4 control-label">NIK</label>
                    <div class="col-sm-4">
                        <input type="text" id="nik" placeholder="Nomor Induk Keperndudukan" name="nik" class="form-control" value="{{ $p->nik }}" readonly>
                       
                    </div>
                </div>
				<div class="form-group">
                    <label for="nama" class="col-sm-4 control-label">Nama</label>
                    <div class="col-sm-4">
                        <input type="text" id="nama" placeholder="Nama lengkap pemilih" name="nama" class="form-control" value="{{ $p->nama }}" autofocus>
                       
                    </div>
                </div>

                <div class="form-group">
                    <label for="rt" class="col-sm-4 control-label">RT</label>
                    <div class="col-sm-4">
                        <select id="Select" name="rt" class="form-control" value="{{ $p->rt }}">
                            <option>01</option>
                            <option>02</option>
                            <option>03</option>
                            <option>04</option>
                            <option>05</option>
                        </select>
                    </div>
                </div> <!-- /.form-group -->

                <div class="form-group">
                    <label for="tgl_lahir" class="col-sm-4 control-label">Tanggal Lahir</label>
                    <div class="col-sm-4">
                        <input type="date" id="tgl_lahir" placeholder="Pilih tanggal lahir" name="tgl_lahir" value="{{ $p->tgl_lahir }}"class="form-control" autofocus>
                       
                    </div>
                </div>
               
                <div class="form-group">
                    <label for="agama" class="col-sm-4 control-label">Agama</label>
                    <div class="col-sm-4">
                        <select id="Select" name="agama" value="{{ $p->agama }}" class="form-control">
                            <option>Islam</option>
                            <option>Kristen</option>
                            <option>Budha</option>
                            <option>Hindu</option>
                            <option>Lainnya</option>
                        </select>
                    </div>
                </div> <!-- /.form-group -->
                <div class="form-group">
                    <label class="control-label col-sm-4">Jenis Kelamin</label>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-6">
                                <label class="radio-inline">
                                    <input type="radio" id="perempuan" value="P" name="jeniskelamin">Perempuan
                                </label>
								<label class="radio-inline">
                                    <input type="radio" id="lakilaki" value="L" name="jeniskelamin">Laki-laki 
                                </label>
                            </div>
                           
                            </div>
                            
                                
                            
                        </div>
                    </div>
             
				<div class="form-group">
                    <label for="alamat" class="col-sm-4 control-label">Alamat</label>
                    <div class="col-sm-4">
                        <textarea class="form-control" name="alamat">{{ $p->alamat }}></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-2 col-sm-offset-3">
                        <button type="submit" class="btn btn-info">Submit</button>
                    </div>
                </div>
            </form> <!-- /form -->
			@endforeach
        </div> <!-- ./container -->

	
		
</body>
</html>
