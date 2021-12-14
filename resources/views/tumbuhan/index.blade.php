@extends("layout.happy")
@section("title", "Tabel Tumbuhan")

@section("isikonten")

    <h1>Tabel Tumbuhan</h1>

    <a href="/tumbuhan/tambah" class="btn btn-primary"> + Tambah tumbuhan Baru</a>


	<form class="mt-3" action="/tumbuhan/cari" method="GET">
		<input type="text" name="cari" placeholder="Cari tumbuhan .." value="{{ old('cari') }}">
		<input type="submit"  class="btn btn-primary" value="GO">


	<br/>
	<br/>

	<table border="1" class="table table-striped table-hover">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Tersedia</th>
			<th>Opsi</th>

		</tr>
		@foreach($tumbuhan as $t)
		<tr>
            <td>{{ $toop->iteration }}</td>
			<td>{{ $t->namatumbuhan }}</td>
			<td>{{ $t->tersedia }}</td>
			<td>
				<a href="/tumbuhan/edit/{{ $t->kodetumbuhan}} " class="btn btn-warning">Edit</a>
				<a href="/tumbuhan/hapus/{{ $t->kodetumbuhan}}" class="btn btn-danger">Hapus</a>
                <a href="/tumbuhan/detail/{{ $t->kodetumbuhan}}" class="btn btn-success">View Detail</a>
			</td>
		</tr>
		@endforeach
	</table>
    <br/>

	{{ $tumbuhan->links() }}
@endsection
