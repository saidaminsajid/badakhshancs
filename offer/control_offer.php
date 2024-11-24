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
<li><a href="../advertise/login_advertise.php">افزودن موضوع جدید</a></li>
<li><a href="../advertise/view1_advertise.php">موضوعات اعلان شده</a></li>
</ul></li>
<li class="design"><a href="add_offer.php">نظریات و پیشنهادات</a></li>
</ul>
</div>
   





<div class="body" id="bod">
<h3>بخش مدیریت سایت</h3><hr color="#0000FF" size="3px" width="900px" />
<?php

$con = mysql_connect("localhost","root","");
mysql_select_db("badakhshancs");
$command = "SELECT * FROM offer ORDER BY id DESC";

$result = mysql_query($command,$con);
$names = mysql_fetch_assoc($result);

?>
<?php
if(isset($_GET["delete"]))
echo "<span style='color:green;'>نظر ویا پیشنهاد را که انتخاب نموده بودید با مؤفقیت حذف شد!</span>";
if(isset($_GET["nodelete"]))
echo "<span style='color:red;'>نظر ویا پیشنهاد را که انتخاب نموده بودید حذف نشد!</span>";
?>
<table class="ti_da" align="right">
<th>نام</th><th width="4px"></th>
<th>تخلص</th><th width="4px"></th>
<th>نمبرمبائیل</th><th width="4px"></th>
<th>ایمیل</th><th width="4px"></th>
<th>آدرس</th><th width="4px"></th>
<th>عنوان نظر</th><th width="4px"></th>
<th>تاریخ</th><th width="4px"></th>
<th>حذف</th>
<?php
do { ?>
<tr>
<td> <a style="float:right;text-decoration:none;" href="view_offer.php?id= <?php echo $names["id"]; ?>" > <?php echo $names['name']; ?> </a></td><td></td>
<td> <a style="float:right;text-decoration:none;" href="view_offer.php?id= <?php echo $names["id"]; ?>" > <?php echo $names['lastname']; ?> </a></td><td></td>
<td> <a style="float:right;text-decoration:none;" href="view_offer.php?id= <?php echo $names["id"]; ?>" > <?php echo $names['phone']; ?> </a></td><td></td>
<td> <a style="float:right;text-decoration:none;" href="view_offer.php?id= <?php echo $names["id"]; ?>" > <?php echo $names['email']; ?> </a></td><td></td>
<td> <a style="float:right;text-decoration:none;" href="view_offer.php?id= <?php echo $names["id"]; ?>" > <?php echo $names['address']; ?> </a></td><td></td>
<td> <a style="float:right;text-decoration:none;" href="view_offer.php?id= <?php echo $names["id"]; ?>" > <?php echo $names['titleoffer']; ?> </a></td><td></td>
<td> <a style="float:right;text-decoration:none;" href="view_offer.php?id= <?php echo $names["id"]; ?>" > <?php echo $names['date']; ?> </a></td>
<?php
echo "<td>" . "</td>";
echo "<td>" . "<a href='delete_offer.php?id=" . $names["id"] . 
"'><img src='../image/delete.jpg'width='24px'></a></td>";echo "<td>" . "</td>";
echo "</tr>";
} 
while($names = mysql_fetch_assoc($result));
?>

</table>

</div>

</body>
</html>