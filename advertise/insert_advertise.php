<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="class/html; charset=utf-8" />
<name>دانشگاه بدخشان دانشکده کمپیوترساینس</name>
</head>

<body>
</body>
</html>
<?php
$con = mysql_connect("localhost","root","");
mysql_select_db("badakhshancs");
if(isset($_POST["name"])){
$name = $_POST["name"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$class = $_POST["class"];
$titleadvertise = $_POST["titleadvertise"];
$advertise = $_POST["advertise"];
$date = $_POST["date"];

$insert_command = "INSERT INTO advertise (name,lastname,email,class,titleadvertise,advertise,date)
VALUES ('$name','$lastname','$email','$class','$titleadvertise','$advertise','$date')";

$insert_result = mysql_query($insert_command,$con);
if($insert_result)
header("location: view1_advertise.php");
else
header("location: add_advertise.php?try=yes");
}
?>