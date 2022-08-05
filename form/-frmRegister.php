<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
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
    สมัครสมาชิก
  </div>
  <div class="card-body">
   <form name="form1" action="#" method="post">
        <div class="row">
            <div class="col-md-3"><label for="exampleFormControlInput1" class="form-label">คำนำหน้าชื่อ</label>
            <select class="form-select form-select-lg mb-1" aria-label=".form-select-lg example">
            <option selected>เลือกนำหน้าชื่อ</option>
            <option value="นาย">นาย</option>
             <option value="นาง">นางสาว</option>
             <option value="นางสาว">นาง</option>
            </select>
        </div>
        <div class="col-md-4"><label for="exampleFormControlInput1" class="form-label">ชื่อ</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="ชื่อของคุณ">
        </div>
        <div class="col-md-5"><label for="exampleFormControlInput1" class="form-label">นามสกุล</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="นามสกุลของคุณ">
        </div>
</div>

<div class="row">
    <div class="col-md-2"><label for="exampleFormControlInput1" class="form-label">เพศ</label>
            <div class="form-check">
            <input type="radio" class="form-check-input" name="sex" id="sex">ชาย 
            </div>

            <div class="form-check">
             <input type="radio" class="form-check-input" name="sex" id="sex">หญิง
            </div>

        </div>

        <div class="col-md-3"><label for="exampleFormControlInput1" class="form-label">วันเกิด</label>
        <input type="date" class="form-control" id="txt_birthdate" name="txt_birthdate"
                                placeholder="00/00/0000" data-provide="datepicker" data-date-language="th-th">
        </div>

        <div class="col-md-7"><label for="exampleFormControlInput1" class="form-label">เพศ</label>
        <textarea class="form-control"  name="txt_address" id="txt_address"> </textarea>
        </div>
</div>

<br>
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
  <button class="btn btn-success me-md-2" type="button">บันทึก</button>
  <button class="btn btn-danger" type="button">ยกเลิก</button>
</div>
<hr>

<?php
include("-footer.php");
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>

</body>
</html>