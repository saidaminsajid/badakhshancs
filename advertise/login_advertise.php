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

<div class="general">
<div class="menu">
 &nbsp; &nbsp;<a href="http://www.facebook.com"><img src="../image/facebook.png" width="22" height="20" /></a> &nbsp; 
<a href="http://www.skype.com"><img src="../image/skype.png" width="24" height="20" /></a> &nbsp; 
<a href="http://www.youtube.com"><img src="../image/youtube.png" width="31" height="20" /></a> &nbsp; 
<a href="http://www.yahoo.com"><img src="../image/yahoo.png" width="24" height="20" /></a> &nbsp; 
<a href="http://www.twitter.com"><img src="../image/twitter.png" width="24" height="20" /></a> &nbsp; 

<ul><li class="cp" id="back">
<a href="../index.php"> بازگشت </a></li></ul>
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
<li><a href="login_advertise.php">افزودن موضوع جدید</a></li>
<li><a href="view1_advertise.php">موضوعات اعلان شده</a></li>
</ul></li>
<li class="design"><a href="../offer/add_offer.php">نظریات و پیشنهادات</a></li>
</ul>
</div>


<div class="body">
<table align="center" id="log">
<form action="" method="post">

<tr><td align="right"><font color="#0000FF" size="+1" face="Times New Roman, Times, serif">
<label><b>نام کاربر</b></label></font></td><td align="right"> <input type="text" name="username"><br></td></tr>
<tr><td align="right"><font color="#0000FF" size="+1" face="Times New Roman, Times, serif">
<label><b>رمزعبور</b></label></font></td><td align="right"> <input type="password" name="password"><br></td></tr>
<tr><td></td><td align="right"><label><input type="submit" value="ورود"></label></td></tr>
</form>
</table>
<?php

$con  = mysql_connect("localhost","root","");
mysql_select_db("badakhshancs");
if(isset($_POST["username"])){
$username = $_POST["username"];
$password = $_POST["password"];

$command = "SELECT * FROM student where username ='$username' AND password = '$password'";
$result = mysql_query($command,$con);
$row = mysql_num_rows($result);
if($row == 1 ){

header("location: add_advertise.php");
}
else{
echo "<span style='color:red;'>معذرت میخواهیم شما اجازه وارد شدن به این صفحه را ندارید!</span>";
}
}
?>
<br><br><br><br>
<table align="center" id="reg">




<label><b>اگر تا اکنون ثبت نام نکرده اید برای ثبت نام به عنوان محصل بالای لینک ذیل کلیک کنید</b></label>
<br>
<b><a href="reg.student.php"style="hover:red; color:green;text-decoration: none">ثبت نام</a></b>

</table>

</div>



</body>
</html>