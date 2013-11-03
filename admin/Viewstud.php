<?php
session_start();
if(isset($_SESSION['user']))
{
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
	left:244px;
	top:4px;
	width:47px;
	height:61px;
	z-index:1;
	background-image: url(logo.jpg);
}
-->
</style>
<link href="link1.css" rel="stylesheet" type="text/css" />
</head>
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

<body>
<div align="center">
  <h1><strong>NATIONAL INSTITUTE OF TECHNOLOGY GOA</strong></h1>
</div>
<form id="form1" name="form1" method="post" action="">
  Year:
  <label>
    <select name="year" id="year">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
    </select>
  </label>
  Branch:
  <label>
    <select name="branch" id="branch">
      <option>CSE</option>
      <option>ECE</option>
      <option>EEE</option>
    </select>
  </label>
  <label>
    <input type="submit" name="Submit" id="Submit" value="Submit" style="background-color:#03F;color:#FFF" />
  </label>
  
  <?php
	  if(isset($_POST['Submit']))
					  {
						  include_once("connect.php");
						  $year=$_POST['year'];
						  $branch=$_POST['branch'];
						  
							  $query="select roll_num,name from info where branch='$branch' and year='$year'";
							  $result=mysql_query($query,$db);
							  
							  
							  
						  
						  while($row=mysql_fetch_array($result,MYSQL_BOTH))
													   {
														   $roll_no=$row['roll_num'];
														   $name=$row['name'];
														   
													   
														   
														  
						  
						  
						 ?>
</form>



<table width="63%" border="0" align="center" style="background-color:#CCC">
  <tr>
    <td width="35%"><?php echo "$roll_no"; ?>      <div align="left"></div></td>
    <td width="37%"><?php echo"$name"; ?>
    <div align="left"></div></td>
    <td width="28%"><div align="left"><a href="selectsem.php?enter=<?php echo $row['roll_num']?>" class="link1">Marks</a><a href="inotice.php?notice=<?php echo $row['roll_num']?>"><a><a href="editstudinfo.php?edit=<?php echo $row['roll_num']?>">    <span class="link1">Edit</span></a></div></td>
  </tr>
  <?php
													   
													   }
													   ?>
													   
</table>
<p>&nbsp;</p>
<?php
}
					  ?>

<div id="apDiv3" style="background-image:"></div>
s
</body>
</html>
<?php
}
else
{
echo "<META HTTP-EQUIV=\"refresh\" CONTENT=\"0 ; url=adminlogin.php\" >";
}
?>
