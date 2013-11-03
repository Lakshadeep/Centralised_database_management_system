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
</head>

<body>
<div align="center">
  <h1><strong>NATIONAL INSTITUTE OF TECHNOLOGY GOA</strong></h1>
  <p>&nbsp;</p>
</div>
<div id="apDiv3" style="background-image:url(logo.jpg)"></div>
<table width="67%" height="519" border="0" align="center" style="background-color:#CCC">
  <tr>
    <td width="44%">Name:</td>
    <?php
	include_once("connect.php");
	if(isset($_POST['eSubmit'])) {
						   $name=$_POST['ename'];
						   $branch=$_POST['ebranch'];
						   $roll_no=$_POST['eRoll_no'];
						   $mobile=$_POST['emobile'];
						   $address=$_POST['eaddress'];
						   $email_id=$_POST['eemail_id'];
						   $year=$_POST['eyear'];
						  // $photo=$_FILES['enew_img'];
	}
	$sqlStr="update info set name='$name',address='$address',email_id='$email_id',branch='$branch',mobile='$mobile',year='$year' where roll_num='$roll_no'";
		@mysql_query($sqlStr);
		if($year==2)
		{
			$query="insert into semester3(roll_num) values('$roll_no')";
			@mysql_query($query);
			$query1="insert into semester4(roll_num) values('$roll_no') ";
			@mysql_query($query1);
			
		}
		else if($year==3)
		{
			$query="insert into semester5(roll_num) values('$roll_no')";
			@mysql_query($query);
			$query1="insert into semester6(roll_num) values('$roll_no') ";
			@mysql_query($query1);
			
		}
		else if($year==4)
		{
			$query="insert into semester7(roll_num) values('$roll_no')";
			@mysql_query($query);
			$query1="insert into semester8(roll_num) values('$roll_no') ";
			@mysql_query($query1);
			
		}else if($year==0)
		{
			
			
		}
				   
	?>
    <td width="56%"><?php echo "$name"; ?></td>
  </tr>
  <tr>
    <td>Branch:</td>
    <td><?php echo "$branch"; ?></td>
  </tr>
  <tr>
    <td>Roll_no:</td>
    <td><?php echo $roll_no ?></td>
  </tr>
  <tr>
    <td>Photo:</td>
    <td><?Php /* echo $photo */ ?></td>
  </tr>
  <tr>
    <td>Mobile:</td>
    <td><?php echo $mobile ?></td>
  </tr>
  <tr>
    <td>Address:</td>
    <td><?php echo $address ?></td>
  </tr>
  <tr>
    <td>Email Id:</td>
    <td><?php  echo $email_id ?></td>
  </tr>
  <tr>
    <td>Year:</td>
    <td><?php echo $year ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
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