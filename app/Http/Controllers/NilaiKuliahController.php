<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class NilaiKuliahController extends Controller
{
    public function view()
    {
    	// mengambil data dari table pegawai
    	// $pegawai = DB::table('nilaikuliah')->get();
        $nilais = DB::table('nilaikuliah')->get();
    	// mengirim data pegawai ke view index
    	return view('UAS.index',[
            'nilais' => $nilais
        ]);

    }


// method untuk menampilkan view form tambah pegawai
public function tambah()
{

	// memanggil view tambah
	return view('UAS.tambah');

}
// method untuk insert data ke table pegawai
public function store(Request $request)
{
	// insert data ke table pegawai
	DB::table('nilaikuliah')->insert([
		'ID' => $request->ID,
		'NRP' => $request->NRP,
		'NilaiAngka' => $request->NilaiAngka,
		'SKS' => $request->SKS
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/UAS');
}
// method untuk edit data pegawai
public function edit($id)
{
	// mengambil data pegawai berdasarkan id yang dipilih
	$nilais = DB::table('nilaikuliah')->where('ID',$id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('UAS.edit',['nilais' => $nilais]);

}
// update data pegawai
public function update(Request $request)
{
	// update data pegawai
	DB::table('nilaikuliah')->where('ID',$request->ID)->update([
		'ID' => $request->ID,
		'NRP' => $request->NRP,
		'NilaiAngka' => $request->NilaiAngka,
		'SKS' => $request->SKS
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/UAS');
}
// method untuk hapus data pegawai
public function hapus($ID)
{
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('nilaikuliah')->where('ID',$ID)->delete();

	// alihkan halaman ke halaman pegawai
	return redirect('/UAS');
}
}
