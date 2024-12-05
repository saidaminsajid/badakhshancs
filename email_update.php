<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Refresh" content="1000" />
<meta http-equiv="auther" ="Sayedamin Sajid" />
<meta http-equiv="genraticontenton" content="Dreamweaver" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Computer Science of Faculty</title>
<link href="style/style.css" rel="stylesheet" type="text/css" />
</head>
<body dir="rtl">
<?php
session_start();
if(!isset($_SESSION["login"])){
	header("location: cs_cp.php");
}
?>
<div class="general">
<div class="menu">
 &nbsp; &nbsp;<a href="http://www.facebook.com"><img src="image/facebook.png" width="22" height="20" /></a> &nbsp; 
<a href="http://www.skype.com"><img src="image/skype.png" width="24" height="20" /></a> &nbsp; 
<a href="http://www.youtube.com"><img src="image/youtube.png" width="31" height="20" /></a> &nbsp; 
<a href="http://www.yahoo.com"><img src="image/yahoo.png" width="24" height="20" /></a> &nbsp; 
<a href="http://www.twitter.com"><img src="image/twitter.png" width="24" height="20" /></a> &nbsp;  
<ul><li class="cp">
<a href="control_panel.php" class="logo" id="cp"> بازگشت به صفحه مدیریت </a>
<a href="logout.php" class="logo" id="logout">خروج</a>
</li></ul></div>


<div class="banner">

  <div class="datetime">
    <?php
  echo date ("l F d Y   ");
  date_default_timezone_set('Asia/Kabul');
  echo date("h:i");
  ?>
  </div>
  
  <div class="slogan">
  <img src="image/BCS.gif" width="454" height="85" /></div>
</div>
<div class="topmenu">
<ul>
<label><li><a href="index.php"><img src="image/Home.png" width="26" height="20" /></a></li></label>
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
<li><a href="advertise/login_advertise.php">افزودن موضوع جدید</a></li>
<li><a href="advertise/view1_advertise.php">موضوعات اعلان شده</a></li>
</ul></li>
<li class="design"><a href="offer/add_offer.php">نظریات و پیشنهادات</a></li>
</ul>
</div>
   

<div class="body">

<h3>بخش مدیریت سایت</h3><hr color="#0000FF" size="3px" width="900px" />



<?php
$con = mysql_connect("badakhshancs.mysql.database.azure.com","sajid","Aminweb@2025");
mysql_select_db("badakhshancs");
$id;
$row;
if(isset($_GET["id"])){
$id = $_GET["id"];

$command = "SELECT * FROM email WHERE id = $id";
$r = mysql_query($command,$con);
$row = mysql_fetch_assoc($r);
}
if(isset($_POST["name"])){
$name = $_POST["name"];
$lastname = $_POST["lastname"];
$username = $_POST["username"];
$password = $_POST["password"];
$country = $_POST["country"];
$province = $_POST["province"];
$destricte = $_POST["destricte"];
$school = $_POST["school"];
$university = $_POST["university"];
$job = $_POST["job"];
$marid = $_POST["marid"];
$edit_command = "UPDATE email SET name='$name' , lastname='$lastname' , username='$username' , password='$password' , country = '$country' , province='$province' , destricte='$destricte' , school='$school' , university='$university' , job='$job' , marid='$marid' WHERE id=$id";

$result = mysql_query($edit_command,$con);
if($result)
header("location: email_cp.php");
else
echo "<span style='color:red;'>معذرت میخواهیم عملیه نامؤفق بود!</span>";
}
?>
<html>
<body dir="rtl">

<table align="center">
<form action="" method="post" enctype="multipart/form-data">
<tr>
<td width="110px" align="right"> <font color="#0000FF" size="+1">
نام
</font></td><td colspan="2"><input type="text" name="name" size="30px" value="<?php echo $row["name"]; ?>"></td></tr>
<tr><td width="110px" align="right"> <font color="#0000FF" size="+1">
تخلص
</font></td><td colspan="2"><input type="text" name="lastname" size="30px" value="<?php echo $row["lastname"]; ?>"></td></tr>
<tr><td width="110px" align="right"> <font color="#0000FF" size="+1">
نام کاربر
</font></td><td colspan="2"><input type="text" name="username" size="30px" value="<?php echo $row["username"]; ?>"></td>
</tr><tr><td align="right"> <font color="#0000FF" size="+1">
رمز عبور
</font></td><td><input type="password" name="password" size="30px" value="<?php echo $row["password"]; ?>"></td>
</tr><tr><td align="right"> <font color="#0000FF" size="+1">
کشور
</font></td><td><input type="text" name="country" size="30px" value="<?php echo $row["country"]; ?>"></td></tr><tr>
<td width="110px" align="right"> <font color="#0000FF" size="+1">
ولایت
</font></td><td colspan="2"><input type="text" name="province" size="30px" value="<?php echo $row["province"]; ?>"></td>
</tr><tr><td width="110px" align="right"> <font color="#0000FF" size="+1">
ولسوالی
</font></td><td colspan="2"><input type="text" name="destricte" size="30px" value="<?php echo $row["destricte"]; ?>"></td></tr><tr><td width="110px" align="right"> <font color="#0000FF" size="+1">
مکتب
</font></td><td colspan="2"><input type="text" name="school" size="30px" value="<?php echo $row["school"]; ?>"></td></tr><tr><td width="110px" align="right"> <font color="#0000FF" size="+1">
دانشگاه
</font></td><td colspan="2"><input type="text" name="university" size="30px" value="<?php echo $row["university"]; ?>"></td></tr><tr><td width="110px" align="right"> <font color="#0000FF" size="+1">
وظیفه
</font></td><td colspan="2"><input type="text" name="job" size="30px" value="<?php echo $row["job"]; ?>"></td></tr>
<tr><td width="110px" align="right"> <font color="#0000FF" size="+1">
حالت مدنی
</font></td><td colspan="2"><input type="text" name="marid" size="30px" value="<?php echo $row["marid"]; ?>"></td></tr>
<tr><td></td><td align="right">
<input type="submit" value="ذخیره"></td>
</tr>
</table>
</form>

</div>



</div>

</body>
</html>
