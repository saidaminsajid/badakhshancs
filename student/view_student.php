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
<a href="http://www.youtube.com"><img src="i../mage/youtube.png" width="31" height="20" /></a> &nbsp; 
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
$names;
if(isset($_GET["id"])){
$id = $_GET["id"];

$command = "SELECT * FROM student WHERE id = $id";
$r = mysql_query($command,$con);
$names = mysql_fetch_assoc($r);
}

?>


<table align="right" width="1023px">
<tr>
<td width="150">نمبرمسلسل</td><td width="360"><?php echo $names["id"]; ?></td><td align="center">معلومات مختصر</td>
<td align="center">تصویر</td></tr><tr>
<td>اسم</td><td><?php echo $names["name"]; ?></td><td rowspan="16" valign="top"><?php echo $names["information"]; ?></td><td align="left" valign="top" width="160px" rowspan="12"><img src="<?php echo ($names["photo"]) ?>" width="158px"/></td></tr>
</tr><tr><td>تخلص</td><td><?php echo $names["lastname"]; ?></td></tr>
<tr><td>ولد/بنت</td><td><?php echo ($names["fathername"]) ?></td></tr>
<tr><td>ولدیت</td><td><?php echo ($names["grandfathername"]) ?></td></tr>
<tr><td>ایمیل</td><td><?php echo ($names["email"]) ?></td></tr>
<td>نام کاربر</td><td><?php echo $names["username"]; ?></td></tr>
<td>ولایت</td><td><?php echo $names["province"]; ?></td></tr>
<td>مکتب</td><td><?php echo $names["school"]; ?></td></tr>
<td>نمبراخذکانکور</td><td><?php echo $names["numofconckur"]; ?></td></tr>
<td>دیپارتمنت</td><td><?php echo $names["department"]; ?></td></tr>
<td>نمبرتذکره</td><td><?php echo $names["numofpassport"]; ?></td></tr>
<td>تاریخ شمول</td><td><?php echo $names["yearin"]; ?></td></tr>
<td>تاریخ تولد</td><td><?php echo $names["dob"]; ?></td></tr>
<tr><td>&nbsp; </td></tr><tr><td>&nbsp;</td></tr>
</table>
</div>

</body>
</html>