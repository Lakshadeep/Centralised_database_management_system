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
#apDiv3 {
	position:absolute;
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

<body>
<div id="apDiv3" style="background-image:url(logo.jpg)"></div>
<div align="center">
  <h1><strong>NATIONAL INSTITUTE OF TECHNOLOGY GOA</strong></h1>
  <p>&nbsp;</p>
</div>
<div align="center"></div>
<table width="67%" height="519" border="0" align="center" style="background-color:#CCC">
  <tr>
    <td width="44%">Name:</td>
    <?php
	include_once("connect.php");
	if(isset($_POST['Submit'])) {
						   $name=$_POST['name'];
						   $branch=$_POST['branch'];
						   $roll_no=$_POST['Roll_no'];
						   $mobile=$_POST['mobile'];
						   $address=$_POST['address'];
						   $email_id=$_POST['email_id'];
						   $year=$_POST['year'];
						   $photo=$_FILES['new_img'];
	
	$sqlStr="insert into info(roll_num,name,address,email_id,branch,mobile,year) values('$roll_no','$name','$address','$email_id','$branch','$mobile','$year')";
		@mysql_query($sqlStr);
		
		include_once('connect.php');
		$sqlstr1="insert into attendance(roll_num,branch,year) values('$roll_no','$branch','$year')";
		@mysql_query($sqlstr1,$db);
		if($year=='1')
		{
			$query="insert into semester1(roll_num) values('$roll_no')";
			@mysql_query($query);
			$query1="insert into semester2(roll_num) values('$roll_no') ";
			@mysql_query($query1);
		}
		else if($year==2)
		
		{
			$query="insert into semester1(roll_num) values('$roll_no')";
			@mysql_query($query);
			$query1="insert into semester2(roll_num) values('$roll_no') ";
			@mysql_query($query1);
			$query2="insert into semester3(roll_num) values('$roll_no')";
			@mysql_query($query2);
			$query3="insert into semester4(roll_num) values('$roll_no') ";
			@mysql_query($query3);
		}
		else if($year==3)
		{
			$query="insert into semester1(roll_num) values('$roll_no')";
			@mysql_query($query);
			$query1="insert into semester2(roll_num) values('$roll_no') ";
			@mysql_query($query1);
			$query2="insert into semester3(roll_num) values('$roll_no')";
			
			@mysql_query($query2);
			$query3="insert into semester4(roll_num) values('$roll_no')";
			
			@mysql_query($query3);
			
			
			$query4="insert into semester5(roll_num) values('$roll_no')";
			@mysql_query($query4);
			$query5="insert into semester6(roll_num) values('$roll_no') ";
			@mysql_query($query5);
		}
		else if($year==4)
		{
			$query="insert into semester1(roll_num) values('$roll_no')";
			@mysql_query($query);
			$query1="insert into semester2(roll_num) values('$roll_no') ";
			@mysql_query($query1);
			$query2="insert into semester3(roll_num) values('$roll_no')";
			
			@mysql_query($query2);
			$query3="insert into semester4(roll_num) values('$roll_no')";
			
			@mysql_query($query3);
			
			
			$query4="insert into semester5(roll_num) values('$roll_no')";
			@mysql_query($query4);
			$query5="insert into semester6(roll_num) values('$roll_no') ";
			@mysql_query($query5);
			$query6="insert into semester7(roll_num) values('$roll_no')";
			@mysql_query($query6);
			$query7="insert into semester8(roll_num) values('$roll_no') ";
			@mysql_query($query7);
		}
	}
				   
	?>					   
						   
	
	
    <td width="56%"><?php echo "$name"; ?>	</td>
  </tr>
  <tr>
    <td>Branch:</td>
    <td><?php echo "$branch"; ?> </td>
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
    <td> <?php echo $mobile ?> </td>
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
<p align="center"><a href="newuserreg.php">Return to registration page</a></p>

</body>
</html>
<?php
}
else
{
echo "<META HTTP-EQUIV=\"refresh\" CONTENT=\"0 ; url=adminlogin.php\" >";
}
?>