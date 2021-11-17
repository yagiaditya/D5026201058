<!DOCTYPE html>
<html lang="en">
<head>
  <title>Form Input Data Barang</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
  <style>
      .kotak {
            position: absolute;
            background-color: rgba(255, 255, 255, 0.479);
            left: 50%;
            top: 55%;
            transform: translate(-50%, -50%);
            width: 50%;
            height: 110%;
            border-radius: 15px;
            border: 3px solid #8178783f;
        }
  </style>
</head>
<body>

<div class="kotak">
    <div class="container mt-3">
    <p>Nama Mahasiwa: Yagi Aditya Muhammad<br>Nama Panggilan: Yagi<br>NRP: 5026201058</p>
  <h3 class="text-center"><br>Form Input Data Barang</h3><br>

  <form action="https://www.youtube.com/" class="was-validated" id="validation">
    <div class="mb-3">
        <label for="fullname" class="form-label">Nama Barang:</label>
        <input type="fullname" class="form-control" id="full" placeholder="Enter Full Name" name="fulln" minlength="10" maxlength="100" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this Nama Barang.</div>
      </div>
      <div class="mb-3">
        <label class="form-label" for="productPrice">HARGA</label>
        <div class="input-group mb-3">
            <span class="input-group-text">Rp. </span>
            <input type="number" id="productPrice" name="productPrice" class="form-control" minlength="4" maxlength="100" required>
        </div>
    </div>
      <div class="mb-3 mt-3">
        <label for="Name">Jenis Barang:</label>
        <select type="Jenis" class="form-select" id="sel1" placeholder="Enter Jenis Barang" name="sellist1" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this Jenis barang.</div>
          <option></option>
          <option value="1" >Makanan</option>
          <option value="2">Minuman</option>
          <option value="3">Non Mamin</option>
        </select>
        </div>
          <div class="mb-3 mt-3">
            <label for="barcode">Kode Barcode:</label>
            <input type="barcode" class="form-control" id="barcode" placeholder="Enter Bar Code" name="barcode" minlength="10" maxlength="100"required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this Kode Barcode.</div>
          </div>
    <div class="form-check mb-3">
      <input class="form-check-input" type="checkbox" id="myCheck"  name="remember" required>
      <label class="form-check-label" for="myCheck">Im not a Robot.</label>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Check this to continue.</div>
    </div>
    <div class="row mt-3">
        <div class="col-6 d-flex justify-content-center" style="border-right:2px solid rgb(187, 187, 187);">
            <button type="submit" class="btn btn-primary">
                &nbsp;&nbsp;&nbsp;Kirim
            </button>

        </div>
        <div class="col-6 d-flex justify-content-center">
            <button type="reset" class="btn btn-success">
            &nbsp;&nbsp;&nbsp;Reset
            </button>
        </div>
    </div>
  </form>
    </div>
</div>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<script type="text/javascript" src="js/additional-methods.min.js"></script>
<script type="text/javascript" src="js/validateform.js"></script>
</body>
</html>
