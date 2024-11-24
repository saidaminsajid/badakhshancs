<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="phone/html; charset=utf-8" />
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
$phone = $_POST["phone"];
$email = $_POST["email"];
$address = $_POST["address"];
$titleoffer = $_POST["titleoffer"];
$offer = $_POST["offer"];
$date = $_POST["date"];

$insert_command = "INSERT INTO offer (name,lastname,phone,email,address,titleoffer,offer,date)
VALUES ('$name','$lastname','$phone','$email','$address','$titleoffer','$offer','$date')";

$insert_result = mysql_query($insert_command,$con);
if($insert_result)
header("location: add_offer.php?ok=no");
else
header("location: add_offer.php?try=yes");
}
?>