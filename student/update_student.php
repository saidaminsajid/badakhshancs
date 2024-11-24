<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Refresh" content="1000" />
<meta http-equiv="auther" ="Sayedamin Sajid" />
<meta http-equiv="genraticontenton" content="Dreamweaver" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>دانشگاه بدخشان دانشکده کمپیوترساینس</title>
<link href="../style/style.css" rel="stylesheet" type="text/css" />
</head>
<body dir="rtl">
<?php
session_start();
if(!isset($_SESSION["login"])){
	header("location: ../cs_cp.php");
}
?>
<div class="general">
<div class="menu">
 &nbsp; &nbsp;<a href="http://www.facebook.com"><img src="../image/facebook.png" width="22" height="20" /></a> &nbsp; 
<a href="http://www.skype.com"><img src="../image/skype.png" width="24" height="20" /></a> &nbsp; 
<a href="http://www.youtube.com"><img src="../image/youtube.png" width="31" height="20" /></a> &nbsp; 
<a href="http://www.yahoo.com"><img src="../image/yahoo.png" width="24" height="20" /></a> &nbsp; 
<a href="http://www.twitter.com"><img src="../image/twitter.png" width="24" height="20" /></a> &nbsp; 

<ul><li class="cp">
<a href="../control_panel.php" class="logo" id="cp"> بازگشت به صفحه مدیریت </a>
<a href="logout.php" class="logo" id="logout">خروج</a></li></ul>
</div>

<div class="banner">

  <div class="datetime">
    <?php
  echo date ("l F d Y   ");
  date_default_timezone_set('Asia/Kabul');
  echo date("h:i");
  ?>
  </div>
  
  <div class="slogan">
  <img src="../image/BCS.gif" width="454" height="85" /></div>
</div>
  

<div class="topmenu">
<ul>
<label><li><a href="../index.php"><img src="../image/Home.png" width="26" height="20" /></a></li></label>
<li class="net"><a href="#">شبکه</a>
<ul>
<li><a href="#">اساسات شبکه</a></li>
<li><a href="#">دیزاین شبکه</a></li>
<li><a href="#">پروژه</a></li>
<li><a href="#">آموزش</a></li>
<li><a href="#">سیستم عامل شبکه</a></li>
<li><a href="#">Other</a></li>
</ul>
</li>
<li><a href="#">دیتابیس</a>
<ul>
<li><a href="#">اساسات دیتابیس</a></li>
<li><a href="#">Access</a></li>
<li><a href="#">MySQL</a></li>
<li><a href="#">SQL Server</a></li>
<li><a href="#">Oracle</a></li>
<li><a href="#">Other</a></li>
</ul>
</li>
<li class="design"><a href="#">ویب دیزاینینگ</a>
<ul>
<li><a href="#">HTML</a></li>
<li><a href="#">CSS</a></li>
<li><a href="#">PHP</a></li>
<li><a href="#">Javascript</a></li>
<li><a href="#">JQuery</a></li>
<li><a href="#">Other</a></li>
</ul></li>
<li class="design"><a href="#">گرافیک دیزاینینگ</a>
<ul>
<li><a href="#">Photoshop</a></li>
<li><a href="#">Flash</a></li>
<li><a href="#">After Effect</a></li>
<li><a href="#">Premiere</a></li>
<li><a href="#">Video Studeo</a></li>
<li><a href="#">Other</a></li>
</ul></li>
<li class="design"><a href="#">برنامه نویسی</a>
<ul>
<li><a href="#">Java</a></li>
<li><a href="#">Visual Basic</a></li>
<li><a href="#">++C and C</a></li>
<li><a href="#">Other</a></li>
</ul></li>
<li class="design"><a href="#">مایکروسافت آفیس</a>
<ul>
<li><a href="#">Word</a></li>
<li><a href="#">Excel</a></li>
<li><a href="#">Acess</a></li>
<li><a href="#">PowerPoint</a></li>
<li><a href="#">Publisher</a></li>
<li><a href="#">Outlook</a></li>
<li><a href="#">Other</a></li>
</ul></li>
<li><a href="#">سافت ویر</a></li>
<li><a href="#">مختلف</a>
<ul>
<li><a href="#">سخت افزار</a></li>
<li><a href="#">Quick book</a></li>
<li><a href="#">Wndows</a></li>
<li><a href="#">Internet</a></li>
<li><a href="#">ترفند</a></li>
<li><a href="#">کتابخانه</a></li>
<li><a href="#">Other</a></li>
</ul></li>
<li><a href="#">اعلانات</a></li>
<li><a href="#">جریده</a>
<ul>
<li><a href="../advertise/add_advertise.php">افزودن موضوع جدید</a></li>
<li><a href="../advertise/view1_advertise.php">موضوعات اعلان شده</a></li>
</ul></li>
<li class="design"><a href="../offer/add_offer.php">نظریات و پیشنهادات</a></li>
</ul>
</div>


<div class="body">

<h3>بخش مدیریت سایت</h3><hr color="#0000FF" size="3px" width="900px" />



<?php
$con = mysql_connect("localhost","root","");
mysql_select_db("badakhshancs");
$id;
$row;
if(isset($_GET["id"])){
$id = $_GET["id"];

$command = "SELECT * FROM student WHERE id = $id";
$r = mysql_query($command,$con);
$row = mysql_fetch_assoc($r);
}
if(isset($_POST["id"])){
$id = $_POST["id"];
$name = $_POST["name"];
$lastname = $_POST["lastname"];
$fathername = $_POST["fathername"];
$grandfathername = $_POST["grandfathername"];
$email = $_POST["email"];
$username = $_POST["username"];
$password = $_POST["password"];
$province = $_POST["province"];
$school = $_POST["school"];
$numofconckur = $_POST["numofconckur"];
$department = $_POST["department"];
$numofpassport = $_POST["numofpassport"];
$yearin = $_POST["yearin"];
$dob = $_POST["dob"];
$photo = $_POST["photo"];
	$pho;
	if($_FILES["photo"]["name"] != "") {
		unlink($row["photo"]);
	$pho = "image/" . $_FILES["photo"]["name"];
	
	move_uploaded_file($_FILES["photo"]["tmp_name"],"image/" . $_FILES["photo"]["name"]);
	}
	else {
		$pho = $row["photo"];	
	}

$edit_command = "UPDATE student SET id='$id' , name='$name' , lastname='$lastname' , fathername='$fathername' , grandfathername='$grandfathername' , email='$email' , username='$username' , password='$password' , province='$province' , school='$school' , numofconckur='$numofconckur' , department='$department' , numofpassport='$numofpassport' , yearin='$yearin' , dob='$dob' , photo='$pho' WHERE id=$id";

$result = mysql_query($edit_command,$con);
if($result)
header("location: control_student.php");
else
echo "<span style='color:red;'>معذرت میخواهیم عملیه نامؤفق بود!</span>";
}
?>
<html>
<body dir="rtl">

<table align="center">
<form action="" method="post" enctype="multipart/form-data">
<tr>
<td align="right"> <font color="#0000FF" size="+1">
نمبرمسلسل
</font></td><td><input type="text" name="id" size="30px" value="<?php echo $row["id"]; ?>"></td><td width="10px"></td>
<td align="right"> <font color="#0000FF" size="+1">
اسم
</font></td><td><input type="text" name="name" size="30px" value="<?php echo $row["name"]; ?>"></td></tr>

<tr><td align="right"> <font color="#0000FF" size="+1">
تخلص
</font></td><td><input type="text" name="lastname" size="30px" value="<?php echo $row["lastname"]; ?>"></td><td width="10px"></td>
<td align="right"> <font color="#0000FF" size="+1">
ولد/بنت
</font></td><td><input type="text" name="fathername" size="30px" value="<?php echo $row["fathername"]; ?>"></td></tr>

<tr>
<td align="right"> <font color="#0000FF" size="+1">
ولدیت
</font></td><td><input type="text" name="grandfathername" size="30px" value="<?php echo $row["grandfathername"]; ?>"></td><td width="10px"></td>
<td align="right"> <font color="#0000FF" size="+1">
ایمیل
</font></td><td><input type="text" name="email" size="30px" value="<?php echo $row["email"]; ?>"></td>
</tr><tr>
<td align="right"> <font color="#0000FF" size="+1">
نام کاربر
</font></td><td><input type="text" name="username" size="30px" value="<?php echo $row["username"]; ?>"></td></td><td width="10px"></td>
<td align="right"> <font color="#0000FF" size="+1">
پسورد
</font></td><td><input type="password" name="password" size="30px" value="<?php echo $row["password"]; ?>"></td></tr>
<tr><td align="right"><font color="#0000FF" size="+1">
ولایت
</font></td><td><input type="text" name="province" size="30px" value="<?php echo $row["province"]; ?>"></td></td><td width="10px"></td>
<td align="right"> <font color="#0000FF" size="+1">
مکتب
</font></td><td><input type="text" name="school" size="30px" value="<?php echo $row["school"]; ?>"></td></tr><tr>
<td align="right"> <font color="#0000FF" size="+1">
نمبراخذه شده درکانکور
</font></td><td><input type="text" name="numofconckur" size="30px" value="<?php echo $row["numofconckur"]; ?>"></td>
</td><td width="10px"></td><td width="110px" align="right"> <font color="#0000FF" size="+1">
دیپارتمنت
</font></td><td><input type="text" name="department" size="30px" value="<?php echo $row["department"]; ?>"></td></tr>
</tr><tr><td align="right"> <font color="#0000FF" size="+1">
نمبرتذکره
</font></td><td><input type="text" name="numofpassport" size="30px" value="<?php echo $row["numofpassport"]; ?>"></td></td><td width="10px"></td>
<td align="right"> <font color="#0000FF" size="+1">
تاریخ شمول
</font></td><td><input type="text" name="yearin" size="30px" value="<?php echo $row["yearin"]; ?>"></td></tr><tr>
<td align="right"> <font color="#0000FF" size="+1">
تاریخ تولد
</font></td><td><input type="text" name="dob" size="30px" value="<?php echo $row["dob"]; ?>"></td><td width="10px"></td>
<td align="right"> <font color="#0000FF" size="+1">
تصویر
</font></td><td><input type="file" name="photo" size="30px" value="<?php echo $row["photo"]; ?>"></td>
</tr><tr><td><br /></td></tr>
</tr><tr><td></td><td></td><td align="right">
<input type="submit" value="ذخیره"></td>
</tr>
</table>
</form>

</div>



</body>
</html>