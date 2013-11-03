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
<div id="apDiv3" style="backgm1" methround-image:"></div>
<form id="form1" name="form1" method="post" action="">
  <p>Year:
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
  <p>&nbsp;</p>
</form>
<?php
if(isset($_POST['Submit']))
{
	 include_once("connect.php");
						  $year=$_POST['year'];
						  $branch=$_POST['branch'];
						  
							  $query="select roll_num from attendance where branch='$branch' and year='$year'";
							  $result=@mysql_query($query,$db);
							  
							  
							  
						  
						  while($row=mysql_fetch_array($result,MYSQL_BOTH))
													   {
														   $roll_no=$row['roll_num'];
														   
														   
													   
														   
														  
						  
						  
						 ?>
<table width="80%" border="0" align="center">
  <tr>
    <td width="28%"><?php echo "$roll_no"; ?>&nbsp;</td>
     
    <td width="43%">&nbsp;</td>
    <td width="29%">&nbsp;<a href="attselect.php?roll_no=<?php echo $row['roll_num']?>" class="link1">Attendance</a></td>
  </tr>
</table>
<?php
													   }
}
?>

  <p>&nbsp;</p>
</form>
</body>
</html>
<?php
}
else
{
echo "<META HTTP-EQUIV=\"refresh\" CONTENT=\"0 ; url=adminlogin.php\" >";
}
?>