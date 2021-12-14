@extends("layout.happy")
@section("title", "Edit Tumbuhan")

@section("isikonten")
<h1>Edit Tumbuhan</h1>

        <a href="/tumbuhan " class="btn btn-secondary"> < Kembali</a>

	<br/>

	@foreach($tumbuhan as $t)
    <form action="/tumbuhan/update" method="post">
		{{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $t ->kodetumbuhan }}">
        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" class="form-control" name="namatumbuhan" value="{{ $t->namatumbuhan}}" required="required">
            </div>
        <div class="mb-3">
            <label class="form-label">Jumlah</label>
            <input type="text" class="form-control" name="jumlahtumbuhan" value="{{ $t->jumlahtumbuhan}}" required="required">
            </div>
            <div class="mb-3">
                <label class="form-label">Tersedia</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="ya" name="tersedia" value="Y" value="{{ $t->tersedia}}"  required>
                    <label class="form-check-label" for="hadir">
                      YA
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input"  type="radio" id="tidak" name="tersedia" value="X" checked="checked" required>
                    <label class="form-check-label" for="tidak">
                      TIDAK
                    </label>
                  </div>
                </div>
		<input type="submit" value="Simpan Data" class="btn btn-success">
	</form>
	@endforeach
@endsection
