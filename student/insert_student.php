<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="class/html; charset=utf-8" />
<title>دانشگاه بدخشان دانشکده کمپیوترساینس</title>
</head>

<body>
</body>
</html>
<?php
$con = mysql_connect("localhost","root","");
mysql_select_db("badakhshancs");
if(isset($_POST["id"])){
$id = $_POST["id"];
$name = $_POST["name"];
$lastname = $_POST["lastname"];
$fathername = $_POST["fathername"];
$grandfathername = $_POST["grandfathername"];
$email = $_POST["email"];
$username = $_POST["username"];
$password = $_POST["password"];
$conform = $_POST["conform"];
$province = $_POST["province"];
$school = $_POST["school"];
$numofconckur = $_POST["numofconckur"];
$department = $_POST["department"];
$numofpassport = $_POST["numofpassport"];
$yearin = $_POST["yearin"];
$dob = $_POST["dob"];
$information =$_POST["information"];
if($_FILES["photo"]["name"] != "")
	$pic = "image/" . $_FILES["photo"]["name"];
	else
	$pic = "";
	move_uploaded_file($_FILES["photo"]["tmp_name"],"image/" . $_FILES["photo"]["name"]);
if($password == $conform){
$insert_command = "INSERT INTO student (id,name,lastname,fathername,grandfathername,email,username,password,province,school,numofconckur,department,numofpassport,yearin,dob,information,photo)
VALUES ('$id','$name','lastname','$fathername','$grandfathername','$email','$username','$password','$province','$school', '$numofconckur','$department','$numofpassport','$yearin','$dob','$information','$pic')";

$insert_result = mysql_query($insert_command,$con);
if($insert_result)
header("location: control_student.php");
else
header("location: add_student.php?try=yes");
}
else {
header("location: add_student.php?error=password");
}
}
?>