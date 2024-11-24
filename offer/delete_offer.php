<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>دانشگاه بدخشان دانشکده کمپیوترساینس</title>
</head>

<body>
</body>
</html>
<?php
$con = mysql_connect("localhost","root","");
mysql_select_db("badakhshancs");
$id;
if(isset($_GET["id"])){
$id = $_GET["id"];

$command = "DELETE FROM offer WHERE id = $id";
$result = mysql_query($command,$con);
if($result)
header("location: control_offer.php?delete=done");
else
header("location: control_offer.php?nodelete=true");
}
?>