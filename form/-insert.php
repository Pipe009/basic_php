<html>
<body>

<?php 

include("-config.inc.php");
echo "<br>";
echo $_POST["fname"]; 
echo $_POST["name"]; 
echo $_POST["lname"]; 
echo"<br>";
echo $_POST["birth"]; 
echo"<br>";
echo $_POST["sex"];
echo"<br>";
echo $_POST["ad"]; 
echo"<br>";
echo $_POST["Email"]; 
echo"<br>";
echo $_POST["PNum"]; 


$firstname = $_POST['fname'];
$name = $_POST['name'];
$lastname = $_POST['lname'];
$sex = $_POST['sex'];
$birthday = $_POST['birth'];
$address = $_POST['ad'];
$phone = $_POST['PNum'];
$email = $_POST['Email'];



$sql = "INSERT INTO tbl_member (id, Firstname, name, Lastname, sex, birthday, address, phone, email) VALUES ('', '$firstname', '$name', '$lastname', '$sex', '$birthday', '$address', '$phone', '$email')";

if(mysqli_query($conn, $sql)) {
    echo "เพิ่มข้อมูลสำเร็จ";
}else{
    echo "เพิ่มข้อมูลไม่สำเร็จ";
}
$conn -> close();

?>
</body>
</html>