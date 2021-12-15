@extends('layout.happy')

@section('isikonten')


	<h2>Yagi Aditya Muhammad (5026201058) / PWEB D</h2>
	<h3>Data Tugas</h3>

	<a href="/UAS"> Kembali</a>

	<br/>
	<br/>

	<form action="/UAS/tambah" method="post">
		{{ csrf_field() }}
        ID<input type="number" name="ID" required="required"> <br/>
		NRP<input type="datetime" name="NRP" required="required"> <br/>
		NilaiAngka<input type="text" name="NilaiAngka" required="required"> <br/>
		SKS<input type="text" name="SKS" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>

@endsection
