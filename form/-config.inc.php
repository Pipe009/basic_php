<?php
$servername = "localhost"; //hosting
$username = "root"; //username
$password = "25382543z"; //userpassword
$dbname = "db_basic_php"; //database name

//create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//change character set to utf8
$conn -> set_charset("utf8");

// Check connection

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }else{
  echo "Connnect Successfully!";
  }

?>