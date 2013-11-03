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
	background-image: url(logo.jpg);
}
-->
</style>
</head>
<?php
if(isset($_REQUEST['roll_no']))
{ include_once("connect.php");
	$roll_no=$_REQUEST['roll_no'];
	}


?>

<?php
if(isset($_POST['Submit']))
{
	include_once('connect.php');
	$sub=$_POST['selsub'];
	$nocc=$_POST['nocc'];
	$noca=$_POST['noca'];
	$per=($nocc*100)/$noca;
	if($sub=='subject1')
	{
	
	$query="update  attendance set subject1='$per' where roll_num='$roll_no'";
	@mysql_query($query);
	}
	else if($sub=='subject2')
	{
	
	$query="update  attendance set subject2='$per' where roll_num='$roll_no'";
	@mysql_query($query);
	}
	else if($sub=='subject3')
	{
	
	$query="update  attendance set subject3='$per' where roll_num='$roll_no'";
	@mysql_query($query);
	}
	else if($sub=='subject4')
	{
	
	$query="update  attendance set subject4='$per' where roll_num='$roll_no'";
	@mysql_query($query);
	}
	else if($sub=='subject5')
	{
	
	$query="update  attendance set subject5='$per' where roll_num='$roll_no'";
	@mysql_query($query);
	}
	else if($sub=='subject6')
	{
	
	$query="update  attendance set subject6='$per' where roll_num='$roll_no'";
	@mysql_query($query);
	}
	else if($sub=='subject7')
	{
	
	$query="update  attendance set subject7='$per' where roll_num='$roll_no'";
	@mysql_query($query);
	}
	else if($sub=='subject8')
	{
	
	$query="update  attendance set subject8='$per' where roll_num='$roll_no'";
	@mysql_query($query);
	}
}
?>

<body>
<div align="center">
  <h1><strong>NATIONAL INSTITUTE OF TECHNOLOGY GOA</strong></h1>
</div>
<div id="apDiv3" style="backgm1" methround-image:="methround-image:""></div>
<form id="form1" name="form1" method="post" action="">
  <p>Select subject:
    <label>
      <select name="selsub" id="selsub">
        <option>subject1</option>
        <option>subject2</option>
        <option>subject3</option>
        <option>subject4</option>
        <option>subject5</option>
        <option>subject6</option>
        <option>subject7</option>
        <option>subject8</option>
      </select>
    </label>
  </p>
  <p>Number of classes conducted:
    <label>
      <input type="text" name="nocc" id="nocc" />
    </label>
  </p>
  <p>Number of classes attended:
    <label>
      <input type="text" name="noca" id="noca" />
    </label>
  </p>
  <p>
    <label>
      <input type="submit" name="Submit" id="Submit" value="Submit" />
    </label>
  </p>
</form>
<p>Subject order is as per subject order displayed in respective semester table<br>
<a href="attendance.php">Go to attendance home page</a> </p>
</body>
</html>
<?php
}
else
{
echo "<META HTTP-EQUIV=\"refresh\" CONTENT=\"0 ; url=adminlogin.php\" >";
}
?>