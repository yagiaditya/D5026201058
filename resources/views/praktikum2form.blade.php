<!DOCTYPE html>
<html lang="en">
<head>
  <title>Validation Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
  <style>
      .kotak {
            position: absolute;
            background-color: rgba(255, 255, 255, 0.479);
            left: 50%;
            top: 65%;
            transform: translate(-50%, -50%);
            width: 50%;
            height: 130%;
            border-radius: 15px;
            border: 3px solid #8178783f;
        }
  </style>
</head>
<body>

<div class="kotak">
    <div class="container mt-3">
  <h3 class="text-center">JavaScript Form Validation</h3><br>
  <p style="color: rgb(252, 4, 4);">*All Fields are mandatory*</p>

  <form action="https://www.youtube.com/" class="was-validated">
    <div class="mb-3">
        <label for="full" class="form-label">Full Name:</label>
        <input type="fullname" class="form-control" id="full" placeholder="Enter Full Name" name="fulln" pattern="[A-Za-z]{}" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>
    <div class="mb-3 mt-3">
      <label for="uname" class="form-label">Username(6-8 characters):</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" pattern="[A-Za-z]{7}" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="mb-3 mt-3">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>
      <div class="mb-3 mt-3">
        <label for="Name">State:</label>
        <select type="state" class="form-select" id="sel1" placeholder="Enter State" name="sellist1" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
          <option></option>
          <option>Australia</option>
          <option>Malaysia</option>
          <option>Singapore</option>
          <option>Indonesia</option>
        </select>
        </div>
        <div class="mb-3 mt-3">
            <label for="Address">Address:</label>
            <textarea class="form-control" rows="1" id="address" name="text" required></textarea>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
          </div>
          <div class="mb-3 mt-3">
            <label for="zipcode">Zip Code:</label>
            <input type="zipcode" class="form-control" id="zipcode" placeholder="Enter Zip Code" name="zipcode" pattern="[0-9]{5}" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
          </div>
    <div class="form-check mb-3">
      <input class="form-check-input" type="checkbox" id="myCheck"  name="remember" required>
      <label class="form-check-label" for="myCheck">rememmber me.</label>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Check this checkbox to continue.</div>
    </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  </form>
    </div>
</div>

</body>
</html>
