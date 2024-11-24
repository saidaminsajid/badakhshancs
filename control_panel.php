<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Refresh" content="1000" />
<meta http-equiv="auther" ="Sayedamin Sajid" />
<meta http-equiv="genraticontenton" content="Dreamweaver" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>دانشگاه بدخشان دانشکده کمپیوترساینس</title>
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
<a href="logout.php" id="z" >خروج</a></li></ul>
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



<table align="center" id="cp">
  <tr>
    <td width="80px" height="80px"><a href="pass_cp.php"><img src="image/key.png" width="42" height="42" /><br />تغییررمز ورود</a></td>
    <td width="80px" height="80px"><a href="email_cp.php"><img src="image/email.png" width="42" height="39" /><br />تغییرایمیل آدرس</a></td>
    <td width="80px" height="80px"><a href="offer/control_offer.php"><img src="image/Comment 1.png" width="42" height="42" /><br />کنترول نظریات</a></td>
    <td width="80px" height="80px"><a href="advertise/control_advertise.php"><img src="image/jareda.png" width="42" height="42" /><br />
      جریده</a></td>
  </tr>
  <tr>
    <td width="80px" height="80px"><a href="#"><img src="image/advertise.png" width="42" height="42" /><br />
      اعلانات</a></td>
    <td width="80px" height="80px"><a href="#"><img src="image/user.png" width="42" height="36" /><br />مدیرت کاربران</a></td>
    <td width="80px" height="80px"><a href="#"><img src="image/network.png" width="44" height="36" /><br />شبکه</a></td>
    <td width="80px" height="80px"><a href="#"><img src="image/database.png" width="48" height="40" /><br />دیتابیس</a></td>
  </tr>
  <tr>
    <td width="80px" height="80px"><a href="#"><img src="image/www.png" width="50" height="38" /><br />ویب</a></td>
    <td width="80px" height="80px"><a href="#"><img src="image/graphic.png" width="45" height="38" /><br />گرافیک</a></td>
    <td width="80px" height="80px"><a href="#"><img src="image/java1.png" width="52" height="36" /><br />برنامه نویسی</a></td>
    <td width="80px" height="80px"><a href="#"><img src="image/soft.png" width="45" height="38" /><br />سافت ویر</a></td>
  </tr>
  <tr>
    <td width="80px" height="80px"><a href="#"><img src="image/other.jpg" width="52" height="42" /><br />مختلف</a></td>
    <td width="80px" height="80px"><a href="#"><img src="image/office1.png" width="48" height="44" /><br />آفیس</a></td>

        <td width="80px" height="80px"><a href="student/control_student.php"><img src="image/student.png" width="49" height="42" /><br />محصلین</a></td>
    <td>&nbsp;</td>
  </tr>
</table>
</div>

</body>
</html>