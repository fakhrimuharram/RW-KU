<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-primary">
			
                <div class="panel-heading">Registrasi Pemilih</div>
                <div class="panel-body">
                    <form role="Form" method="post" action="/pemilih/store" accept-charset="UTF-8">
						<div class="form-group">
							<label for="nik">NIK</label>
							<input type="text" id="nik" class="form-control" name="nik" placeholder="XXXXXXXXXXXXXXXX">
						</div>
                        <div class="form-group">
							<label for="nama">Nama</label>
							<input type="text" id="nama" class="form-control" name="nama" placeholder="Nama Pemilih">
                        </div>
                        <div class="form-group">
							<label for="jeniskelamin">Jenis Kelamin</label>
							<input type="text" id="jeniskelamin" class="form-control" name="jeniskelamin" placeholder="Jenis Kelamin">
                        </div>
						<div class="form-group">
							<label for="asal">Alamat</label>
							<input type="text" id="alamat" class="form-control" name="alamat" placeholder="">
                        </div>
						<div class="form-group">
							<label for="date">Tanggal Lahir</label>
							<input type="date" id="tgl_lahir" class="form-control" name="tgl_lahir">
                        </div>
						<div class="form-group">
							<label for="states">Agama</label>
							<select id="agama" class="form-control" name="agama">
								<option value="islam">Islam</option>
								<option value="kristen">Kristen</option>
								<option value="hindu">Hindu</option>
								<option value="budha">Budha</option>
								<option value="lainnya">Lainnya</option>
							
							</select>
                        </div>
						<div class="form-group text-center">
							<button type="submit" class="btn btn-primary btn-lg" id="submitbtn" name="submit">Input</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>