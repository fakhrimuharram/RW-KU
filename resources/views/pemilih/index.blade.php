@extends('admin.dashboard')

@section('content')

<head>
<title> LIHAT DATA USER </title>
        
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


</head>

        <center><img src="{{URL::asset('/img/vote.png')}}" alt="profile Pic" height="120" width="140"></center>
        <a href="/pemilih/tambah" class="btn btn-outline-secondary" role="button" aria-pressed="true">TAMBAH DATA</a>
	<!-- <a href="/pemilih/tambah"> + Tambah Pegawai Baru</a> -->
	<br/>
	<br/>

    

    
    
    <div class="table-responsive">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">NIK</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">RT</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Tgl Lahir</th>
                    <th scope="col">Agama</th>
                    <th scope="col">Opsi</th>
                    </tr>
                </thead>

                <i class="material-icons">cloud</i>
        
                <tbody>
                    @foreach($pemilih as $p)
                        <tr>
                            <td>{{ $p->nik }}</td>
                            <td>{{ $p->nama }}</td>
                            <td>{{ $p->jeniskelamin }}</td>
                            <td>{{ $p->rt }}</td>
                            <td>{{ $p->alamat }}</td>
                            <td>{{ $p->tgl_lahir }}</td>
                            <td>{{ $p->agama }}</td>
                            
                            <td>
                                <a href="/pemilih/edit/{{ $p->nik }}">Edit</a>
                                |
                                <a href="/pemilih/hapus/{{ $p->nik }}">Hapus</a>
                            </td>
                        </tr>
                </tbody>
        @endforeach
        </table>
        </div>
        </div>
        <!-- </div>
        </div> -->
        
   
        @endsection


