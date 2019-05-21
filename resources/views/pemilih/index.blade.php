@extends('admin.dashboard')

@section('content')

<head>
<title> LIHAT DATA USER </title>
        

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
                            <a class="btn btn-info" href="/pemilih/edit/{{ $p->nik }}" role="button">EDIT</a>
                            <a class="btn btn-danger" href="/pemilih/hapus/{{ $p->nik }}" role="button">DELETE</a>
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


