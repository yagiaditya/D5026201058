@extends("layout.happy")
@section("title", "Input Tumbuhan")

@section("isikonten")
    <h1>Input Tumbuhan</h1>

	<a href="/tumbuhan " class="btn btn-secondary"> < Kembali</a>

	<br/>
	<br/>


	<form action="/tumbuhan/store" method="post">
		{{ csrf_field() }}
        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" class="form-control" name="namatumbuhan" required="required">
            </div>
        <div class="mb-3">
            <label class="form-label">Jumlah</label>
            <input type="text" class="form-control" name="jumalhtumbuhan" required="required">
            </div>
            <div class="mb-3">
                <label class="form-label">Tersedia</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="ya" name="tersedia" value="Y" required>
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
@endsection
