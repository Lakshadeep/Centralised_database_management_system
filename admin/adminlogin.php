<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
#apDiv3 {
	position:absolute;
	left:245px;
	top:6px;
	width:47px;
	height:61px;
	background-repeat: no-repeat;
	visibility: visible;
	background-image: url(logo.jpg);
}
#apDiv1 {
	position:absolute;
	left:320px;
	top:80px;
	width:432px;
	height:24px;
	z-index:2;
}
-->
</style>
<link href="logo.css" rel="stylesheet" type="text/css" />
</head>
<p align="center"><?php // echo $msg; ?></p> 

<body>
<?php
if(isset($_POST['adminsubmit']))
{
	
	include("connect.php");
	$uname=$_POST['username'];
	$pass=$_POST['password'];
		$chklogin="select * from adminlogin where Username='$uname' and Password='$pass'";
	$strcheck=mysql_query($chklogin,$db);
	$numrows=mysql_num_rows($strcheck);
	if($numrows==0)
	{
		$msg="Incorrect Login";
		echo "<META HTTP-EQUIV=\"refresh\" CONTENT=\"0 ; url=adminlogin.php?msg=$msg\" >";
	}
	else
	{
		//echo $numrows;
		$_SESSION['user']=$uname;
		//echo $_SESSION['user'];
		//header("Location:viewContact.php");
		echo "<META HTTP-EQUIV=\"refresh\" CONTENT=\"1 ; url=adminhome.php\" >";
		
	}
}
?>
<div align="center">
  <h1><strong>NATIONAL INSTITUTE OF TECHNOLOGY GOA</strong></h1>
  <div>
    <h3>Admin login page</h3>
  </div>
  <form id="form1" name="form1" method="post" action="">
    <?php
					if(isset($_REQUEST['msg']))
					{
						$msg=$_REQUEST['msg'];
					}
					else
					{
						$msg="";
					}
					?>
    <table width="67%" border="0" style="background-color:#CCC">
      <tr>
        <td width="49%">&nbsp;</td>
        <td width="50%">&nbsp;</td>
      </tr>
      <tr>
        <td><div align="center">Username:</div></td>
        <td><label>
          <input type="text" name="username" id="username" />
        </label></td>
      </tr>
      <?php
					if(isset($_REQUEST['msg']))
					{
						$msg=$_REQUEST['msg'];
					}
					else
					{
						$msg="";
					}
					?>
      <tr>
        <td><div align="center">Password:</div></td>
        <td><label>
          <input type="password" name="password" id="password" />
        </label></td>
      </tr>
      <tr>
        <td colspan="2"><label> </label>
          <div align="center"></div></td>
        <td width="1%">&nbsp;</td>
      </tr>
    </table>
    <p>
    <input type="submit" name="adminsubmit" id="adminsubmit" value="Submit" style="background-color:#06C;color:#FFF"/>
  </p>
  </form>
  
</div>
<div id="apDiv3" style="background-image:"></div>
s
</body>
</html>