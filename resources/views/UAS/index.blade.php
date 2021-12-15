@extends('layout.happy')

@section('isikonten')

	<a href="/UAS/tambah"> + Tambahkan Tugas Baru</a>

	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>ID</th>
			<th>NRP</th>
			<th>Nilai Angka</th>
			<th>SKS</th>
			<th>Nilai Huruf</th>
			<th>Bobot</th>
		</tr>
		@foreach($nilais as $nilai)
		<tr>
			<td>{{ $nilai->ID}}</td>
			<td>{{ $nilai->NRP }}</td>
			<td>{{ $nilai->NilaiAngka }}</td>
			<td>{{ $nilai->SKS }}</td>
            <td>
            @if($nilai->NilaiAngka <= 40)D
            @elseif($nilai->NilaiAngka <= 60)C
            @elseif($nilai->NilaiAngka <= 80)B
            @elseif($nilai->NilaiAngka <= 100)A
            @endif
            </td>

            <td>{{$nilai->NilaiAngka * $nilai->SKS}}</td>
			<td>
				<a href="/UAS/edit/{{$nilai->ID}}">Edit</a>
				|
				<a href="/UAS/hapus/{{$nilai->ID}}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>


@endsection
