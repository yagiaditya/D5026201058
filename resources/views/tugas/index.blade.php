<!DOCTYPE html>
<html>
<head>
	<title>Penugasan Tabel Laravel - 5026201058</title>
</head>
<body>

	<h2>Yagi Aditya Muhammad (5026201058) / PWEB D</h2>
	<h3>Data Tugas</h3>

	<a href="/tugas/tambah"> + Tambahkan Tugas Baru</a>

	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>ID Pegawai</th>
			<th>Tanggal</th>
			<th>Nama Tugas</th>
			<th>Status</th>
		</tr>
		@foreach($tugas as $t)
		<tr>
			<td>{{ $t->IDPegawai }}</td>
			<td>{{ $t->Tanggal }}</td>
			<td>{{ $t->NamaTugas }}</td>
			<td>{{ $t->Status }}</td>
			<td>
				<a href="/tugas/edit/{{ $t->ID }}">Edit</a>
				|
				<a href="/tugas/hapus/{{ $t->ID }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>


</body>
</html>
