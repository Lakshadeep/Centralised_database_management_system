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
#apDiv3 {	position:absolute;
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
<div align="center">
  <h1><strong>NATIONAL INSTITUTE OF TECHNOLOGY GOA</strong></h1>
</div>
<div id="apDiv3" style="background-image:"></div>
<div>Category:
  <form id="form1" name="form1" method="post" action="">
    <p>
      <label>
        <select name="category" id="category">
          <option>ALL</option>
          <option>ECE</option>
          <option>EEE</option>
          <option>CSE</option>
        </select>
      </label>
    </p>
    <p>
      <label>
        <input type="submit" name="submit" id="submit" value="Submit" />
      </label>
    </p>
  </form>
  <?php
include_once("connect.php");
	if(isset($_REQUEST['del'] ) )
	{
		$del=$_REQUEST['del'];
		$sqlDel="delete from homenotice where id=".$del;
		@mysql_query($sqlDel);
		echo "<META HTTP-EQUIV=\"refresh\" CONTENT=\"10 ; url=deletenotice.php\" >";
				
	}
?>
  <?php
if(isset($_POST['submit']))
{
	include_once('connect.php');
	$category=$_POST['category'];
	$query="select * from homenotice where category='$category' order by id desc";
	$result=@mysql_query($query);
	while($row=mysql_fetch_array($result,MYSQL_BOTH))
	{
		$id=$row['id'];
		
		$title=$row['title'];
		$short_desc=$row['short_desc'];
		$long_desc=$row['long_desc'];
		?>
	
</div>
<table width="80%" border="0" align="center">
  <tr>
    <td>&nbsp;<?php $date=$row['date'];echo"$date"; ?></td>
    <td>&nbsp;<?php echo"$title"; ?></td>
    <td>&nbsp;<?php echo"$short_desc"; ?></td>
    <td>&nbsp;<?php echo"$long_desc"; ?></td>
    <td><a href="<?php echo $_SERVER['PHP_SELF']?>?del=<?php echo $row['id']?>" >
	Delete</a></td>
  </tr>
 
</table>
<?php
	}
}
?>
</body>
</html>
<?php
}
else
{
echo "<META HTTP-EQUIV=\"refresh\" CONTENT=\"0 ; url=adminlogin.php\" >";
}
?>