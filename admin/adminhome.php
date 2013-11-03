<?php
session_start();
if(isset($_SESSION['user']))
{
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
#apDiv3 {position:absolute;
	left:244px;
	top:4px;
	width:47px;
	height:61px;
	z-index:1;
}
-->
</style>
<link href="*.css" rel="stylesheet" type="text/css" />
<link href="link2.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div align="center">
  <h1><strong>NATIONAL INSTITUTE OF TECHNOLOGY GOA</strong></h1>
</div>
<div id="apDiv3" style="background-image:url(logo.jpg)"></div>
<table width="60%" height="328" border="0" align="center" style="background-color:#CCC">
  <tr>
    <td><a href="newuserreg.php"><div align="center" class="link2">New student Registration </div></a></td>
  </tr>
  <tr>
    <td><a href="Viewstud.php"><div align="center" class="link2">View registered students</div></a></td>
  </tr>
  <tr>
    <td><a href="Viewstud.php"><div align="center" class="link2">Edit ,Insert Maks</div></td>
  </tr>
  
  <tr>
    <td><a href="newnotice.php"><div align="center" class="link2">Latest News</div></td>
  </tr>
  <tr>
    <td><a href="messages.php">
    <div align="center" class="link2">Messages</div></td>
  </tr>
  <tr>
  <tr>
    <td><a href="deletenotice.php"><div align="center" class="link2">Delete Latest News</div></td>
  </tr>
  <tr>
    <td><a href="attendance.php"><div align="center" class="link2">Attendance</div></td>
  </tr>
   <tr>
   <tr>
    <td><a href="people_info.php"><div align="center" class="link2">Right to information</div></td>
  </tr>
    <td><a href="alogout.php"><div align="center" class="link2">Logout</div></td>
  </tr>
</table>
</body>
</html>
<?php
}
else
{
echo "<META HTTP-EQUIV=\"refresh\" CONTENT=\"0 ; url=adminlogin.php\" >";
}
?>
