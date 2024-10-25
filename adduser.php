<?php
$fO = $_GET ["username"];
$f1 = $_GET["email"];
$f2 = $_GET["password"];
$f3 = $_GET["phone"];
require_once('connect.php');
$connect=mysqli_connect(HOST,USER,PASS,DB)
or die("CAN NOT CONNECT");
$sq1="INSERT INTO user VALUES ('','$fO','$f1','$f2','$f3')";
$result =mysqli_query($connect,$sq1);

echo '<a href="index.php">Link</a>'
?>