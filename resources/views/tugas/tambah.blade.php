@extends('layout.happy')

@section('isikonten')


	<h2>Yagi Aditya Muhammad (5026201058) / PWEB D</h2>
	<h3>Data Tugas</h3>

	<a href="/tugas"> Kembali</a>

	<br/>
	<br/>

	<form action="/tugas/store" method="post">
		{{ csrf_field() }}
        ID Pegawai <input type="number" name="idpegawai" required="required"> <br/>
		Tanggal <input type="datetime" name="tanggal" required="required"> <br/>
		Nama Tugas <input type="text" name="namatugas" required="required"> <br/>
		Status <input type="text" name="status" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>

@endsection
