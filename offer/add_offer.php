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
<li><a href="../advertise/login_advertise.php">افزودن موضوع جدید</a></li>
<li><a href="../advertise/view1_advertise.php">موضوعات اعلان شده</a></li>
</ul></li>
<li class="design"><a href="add_offer.php">نظریات و پیشنهادات</a></li>
</ul>
</div>

<div class="body">


<form action="insert_offer.php" method="post" enctype="multipart/form-data">
<table align="center" class="offer"><tr>
<td align="right"><label>نام</label></td><td align="right"> <input type="text" name="name" /></td><br /></tr><tr>
<td align="right"><label>تخلص</label></td><td align="right"> <input type="text" name="lastname"><br /></td></tr><tr>
<td align="right"><label>نمبرمبائیل</label></td><td align="right"> <input type="text" name="phone"><br /></td></tr><tr>
<td align="right"><label>ایمیل</label></td><td align="right"> <input type="text" name="email" /><br /></td></tr><tr>
<td align="right"><label>آدرس</label></td><td align="right"> <input type="text" name="address" /></td><br /></tr><tr>
<td align="right"><label>خلاصه نظر یا<br /> پیشنهاد</label></td><td align="right"> <textarea name="titleoffer" cols="50" rows="3"></textarea><br /></td></tr><tr>
<td align="right"><label>نظر یا <br />پیشنهاد کامل</label></td><td align="right"> <textarea name="offer" cols="50" rows="10"></textarea><br /></td></tr><tr>
<td align="right"><label>تاریخ</label></td><td align="right"> <input type="text" name="date" value="<?php echo date ('Y-m-d')?>" /></td><br /></tr><tr>
<td align="right"></td><td align="right"><label> <input type="submit" value="ارسال" /></label></td></tr></table>
</form>

<?php
if(isset($_GET["try"]))
echo "<span style='color:red;'>معذرت میخواهیم ارسال نظر یا پیشنهاد شما نامؤفق بود!</span>";
if(isset($_GET["ok"]))
echo "<span style='color:green;'>ارسال نظر یا پیشنهاد شما مؤفق بود!</span>";
?>
</div>



</body>
</html>