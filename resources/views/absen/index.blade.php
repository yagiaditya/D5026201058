@extends('layout.happy')

@section('isikonten')

	<h2><a href="https://www.malasngoding.com"></a></h2>
	<h3>Absen Pegawai</h3>

    <a href="/absen/tambah" class="btn btn-primary" > + Tambah Absen Pegawai Baru</a>
	<br/>
    <br/>

	<table class="table table-success table-striped">
		<tr>
			<th>ID</th>
			<th>ID Pegawai</th>
			<th>Tanggal</th>
			<th>Status</th>
			<th>Opsi</th>
		</tr>
		@foreach($absen as $a)
		<tr>
			<td>{{ $p->ID }}</td>
			<td>{{ $p->IDPegawai }}</td>
			<td>{{ $p->Tanggal }}</td>
			<td>{{ $p->Status }}</td>
			<td>
				<a href="/absen/edit/{{ $a->ID }}" class="btn btn-warning" >Edit</a>
				|
				<a href="/absen/hapus/{{ $a->ID }}" class="btn btn-danger" >Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

@endsection
