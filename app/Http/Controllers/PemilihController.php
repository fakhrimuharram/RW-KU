<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PemilihController extends Controller
{
	public function index()
	{
    	// mengambil data dari table pemilih
		$pemilih = DB::table('pemilih')->get();

    	// mengirim data pemilih ke view index
		return view('pemilih.index',['pemilih' => $pemilih]);

	}

	// method untuk menampilkan view form tambah pemilih
	public function tambah()
	{

		// memanggil view tambah
		return view('pemilih.tambah');

	}

	// method untuk insert data ke table pemilih
	public function store(Request $request)
	{
		// insert data ke table pemilih
		DB::table('pemilih')->insert([
			'nik' => $request->nik,
			'nama' => $request->nama,
			'rt' => $request->rt,
			'jeniskelamin' => $request->jeniskelamin,
            'alamat' => $request->alamat,
            'tgl_lahir' => $request->tgl_lahir,
            'agama' => $request->agama
		]);
		// alihkan halaman ke halaman pemilih
		return redirect('/pemilih');

	}

	// method untuk edit data pemilih
	public function edit($nik)
	{
		// mengambil data pemilih berdasarkan id yang dipilih
		$pemilih = DB::table('pemilih')->where('nik',$nik)->get();
		// passing data pemilih yang didapat ke view edit.blade.php
		return view('pemilih.edit',['pemilih' => $pemilih]);

	}

	// update data pemilih
	public function update(Request $request)
	{
		// update data pemilih
		DB::table('pemilih')->where('nik',$request->nik)->update([
            'nik' => $request->nik,
			'nama' => $request->nama,
			'rt' => $request->rt,
			'jeniskelamin' => $request->jeniskelamin,
            'alamat' => $request->alamat,
            'tgl_lahir' => $request->tgl_lahir,
            'agama' => $request->agama
		]);
		// alihkan halaman ke halaman pemilih
		return redirect('/pemilih');
	}

	// method untuk hapus data pemilih
	public function hapus($nik)
	{
		// menghapus data pemilih berdasarkan id yang dipilih
		DB::table('pemilih')->where('nik',$nik)->delete();
		
		// alihkan halaman ke halaman pemilih
		return redirect('/pemilih');
	}

	
		public function __construct()
		{
			$this->middleware('auth');
		}
}
