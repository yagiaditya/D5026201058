@extends('layout.happy')

@section('title', 'EDIT tugas')

@section('isikonten')

	<h2>Yagi ADitya Muhammad (5026201058) / PWEB D</h2>
	<h3>Edit Tugas</h3>

	<a href="/UAS"> Kembali</a>

	<br/>
	<br/>

	@foreach($nilais as $nilai)
	<form action="/UAS/edit" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $nilai->ID }}"> <br/>
		ID<input type="number" required="required" name="ID" value="{{ $nilai->ID }}"> <br/>
		NRP<input type="datetime" required="required" name="NRP" value="{{ $nilai->NRP }}"> <br/>
		Nilai Angka<input type="text" required="required" name="NilaiAngka" value="{{ $nilai->NilaiAngka }}"> <br/>
		SKS<input type="text" required="required" name="SKS" value="{{ $nilai->SKS }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach


@endsection
