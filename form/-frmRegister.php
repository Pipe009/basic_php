<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscribe</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>index</title>
  </head>
  <body>

<?php
include("-header.php");
?>

<main>
    <div class="container">
      <div class="card">
        <div class="card-header">
          RegisterForm
        </div>
        <div class="card-body">
          <form name="form1" action="-insert.php" method="post">
            <div class="row">
              <!--row1-->
              <div class="col-md-2">
                <label class="form-label">คำนำหน้า</label>
                <select class="form-select" id="fname" name="fname" aria-label="Default select example">
                  <option value="Mr.">นาย</option>
                  <option value="Ms.">นางสาว</option>
                  <option value="Mrs.">นาง</option>
                </select>
              </div>
              <div class="col-md-4">
                <label for="name" class="form-label">ชื่อ</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Enter your Name">
              </div>
              <div class="col-md-4">
                <label for="lname" class="form-label">นามสกุล</label>
                <input type="text" class="form-control" id="lname" placeholder="Enter your Lastname" name="lname">
              </div>
            </div>
            <div class="row">
              <!--row2-->
              <div class="col-md-3">
                <label for="sex" class="form-label">เพศ</label>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="sex" id="sex" value="male">
                  <label class="form-check-label" for="flexRadioDefault1">
                    ชาย
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="sex" id="sex" value="Female">
                  <label class="form-check-label" for="flexRadioDefault2">
                    หญิง
                  </label>
                </div>
              </div>
              <div class="col-md-3">
                <label for="date" class="form-label">วันเดือนปีเกิด</label>
                <input type="date" class="form-control" id="birthday" name="birth" value="birthday">
              </div>
              <div class="col-md-6">
                <label for="ad" class="form-label">เลขที่อยู่</label>
                <input type="text" class="form-control" id="ad" placeholder="Enter your Address" name="ad">
              </div>
              <div class="col-md-3">
                <label for="PNum" class="form-label">เบอร์โทรศัพท์</label>
                <input type="number" class="form-control" id="PNum" placeholder="Enter your phone number" name="PNum">
              </div>
              <div class="col-md-4">
                <label for="Email" class="form-label">Email</label>
                <input type="email" class="form-control" id="Email" placeholder="Enter your Email" name="Email">
              </div>
            </div>
            <br>
            <input type="submit" href="-insert.php" class="btn btn-success btn-primary">
            <input type="reset" href="frmRegister.php" class="btn btn-success btn-danger">
          </form>
        </div>
      </div>
    </div>
    </div>
  </main>

<br>

<?php
include("-footer.php");
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>

</body>
</html>