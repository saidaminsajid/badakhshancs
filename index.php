<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Refresh" content="1000" />
<meta http-equiv="auther" ="Sayedamin Sajid" />
<meta http-equiv="genraticontenton" content="Dreamweaver" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Computer Science of Faculty</title>
<link href="style/style.css" rel="stylesheet" type="text/css" />


<?php
$con = mysql_connect("badakhshancs.mysql.database.azure.com","sajid","Aminweb@2025");
mysql_select_db("badakhshancs");
$f = 0;

if(isset($_POST["uid"])) {
$uid = $_POST["uid"];
$command = "SELECT * FROM student WHERE name = '$uid'";
$user_row = mysql_query($command,$con);
$us_row =  mysql_fetch_assoc($user_row);
$f = 1;
}
?>

</head>
<body dir="rtl">

<div class="general">
<div class="menu">
 &nbsp; &nbsp;<a href="http://www.facebook.com"><img src="image/facebook.png" width="22" height="20" /></a> &nbsp; 
<a href="http://www.skype.com"><img src="image/skype.png" width="24" height="20" /></a> &nbsp; 
<a href="http://www.youtube.com"><img src="image/youtube.png" width="31" height="20" /></a> &nbsp; 
<a href="http://www.yahoo.com"><img src="image/yahoo.png" width="24" height="20" /></a> &nbsp; 
<a href="http://www.twitter.com"><img src="image/twitter.png" width="24" height="20" /></a> &nbsp; 

<ul><li class="cp">
<a href="cs_cp.php"> مدیریت ویب سایت </a></li></ul>
</div>

<div class="banner">

  <div class="datetime">
    <?php
  echo date ("l F d Y   ");
  date_default_timezone_set('Asia/Kabul');
  echo date("h:i");
  ?>
  </div>
  
  <div class="slogan" style="margin-right:450px;">
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
<div class="sidebar">



<?php
$con = mysql_connect("badakhshancs.mysql.database.azure.com","sajid","Aminweb@2025");
mysql_select_db("badakhshancs");
$command = "SELECT * FROM student";

$result = mysql_query($command,$con);
$sajid = mysql_fetch_assoc($result);

?>

<?php
if($f == 1) {
echo '<table class="ti_da" align="right" id="viewt" style="border-bottom:2px solid #0F0;">';

echo '<th>اسم</th><th width="4px"></th>';
echo '<th>تخلص</th><th width="4px"></th>';

?>
<?php

	do {
		?>
	<tr >
	<td><?php echo $us_row["name"];?><td>
	<td><?php echo $us_row["lastname"];?><td>
   
	<?php
	}while($us_row = mysql_fetch_assoc($user_row));
	}

?>
</table>

<table class="ti_da" align="left" id="view1t">

<th>Lastname</th><th width="4px"></th>
<th>Name</th><th width="4px"></th>

<?php
do { ?>
<tr style="border-bottom:2px solid #000;">
<td style="border-bottom:2px solid #000;"> <?php echo $sajid['lastname']; ?> </td><td style="border-bottom:2px solid #000;"></td>
<td style="border-bottom:2px solid #000; align:left;"><?php echo $sajid['name']; ?> </a></td>


<?php
} 
while($sajid = mysql_fetch_assoc($result));
?>

</table>

</div>

<div class="content">

</div>



</div>
</div>



</body>
</html>
