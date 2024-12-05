<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Computer Science of Faculty</title>
</head>

<body>

</body>
</html>
<?php
unset ($_SESSION["login"]);
$_SESSION["login"] ="";

if(isset($_SESSION["login"])){
	echo "لطفاًدوباره کوشش نماید!";
}
header("location:index.php");
?>
