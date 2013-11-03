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
<?php
if(isset($_REQUEST['sem1marks']))
				   {
					   include_once('connect.php');
					   $roll_no=$_REQUEST['sem1marks'];
					   $query="select * from semester1 where roll_num='$roll_no'";
$result=@mysql_query($query);
if($row=@mysql_fetch_array($result))
{   $roll_no=$row['roll_num'];
}
					   
					   
					   }




?>

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
</div>
<div id="apDiv3" style="background-image:url(../logo1.jpg)"></div>
<div>
  <?php
include_once('connect.php');

?>
  <form id="form1" name="form1" method="post" action="">
    <table width="123%" border="1">
      <tr>
        <td>Roll no:</td>
        <td>subject1</td>
        <td>subject2</td>
        <td>subject3</td>
        <td>subject4</td>
        <td>subject5</td>
        <td>subject6</td>
        <td>subject7</td>
        <td>subject8</td>
      </tr>
      <tr>
        <td><label>
          <input type="text" name="roll_no" id="roll_no" value="<?php echo"$roll_no" ?>" />
        </label></td
        >
        <td><label>
          <input type="text" name="subject1" id="subject1" />
        </label></td>
        <td><label>
          <input type="text" name="subject2" id="subject2" />
        </label></td>
        <td><label>
          <input type="text" name="subject3" id="subject3" />
        </label></td>
        <td><label>
          <input type="text" name="subject4" id="subject4" />
        </label></td>
        <td><label>
          <input type="text" name="subject5" id="subject5" />
        </label></td>
        <td><label>
          <input type="text" name="subject6" id="subject6" />
        </label></td>
        <td><label>
          <input type="text" name="subject7" id="subject7" />
        </label></td>
        <td><label>
          <input type="text" name="subject8" id="subject8" />
        </label></td>
      </tr>
    </table>
    <p>
      <input type="submit" name="Submitsem2" id="Submitsem2" value="Submit" />
    </p>
  </form>
  <?php
  include_once('connect.php');
  if(isset($_POST['Submitsem2']))
  {
	 $roll_no= $_POST['roll_no'];
	 $subject1=$_POST['subject1'];
	 $subject2=$_POST['subject2'];
	 $subject3=$_POST['subject3'];
	 $subject4=$_POST['subject4'];
	 $subject5=$_POST['subject5'];
	 $subject6=$_POST['subject6'];
	 $subject7=$_POST['subject7'];
	 $subject8=$_POST['subject8'];
     $query="select * from semester5 where roll_num='$roll_no'";
	 $result=@mysql_query($query);
	 $rows=@mysql_num_rows($result);
	 if($rows==1)
	 { $update="update semester5 set subject1='$subject1',subject2='$subject2',subject3='$subject3',subject4='$subject4',subject5='$subject5',subject6='$subject6',subject7='$subject7',subject8='$subject8' where roll_num='$roll_no'";
	 @MYSQL_QUERY($update);
	 header("location:Viewstud.php");
	 
	 
	 }
  }
?>
</div>
</body>
</html>
<?php
}
else
{
echo "<META HTTP-EQUIV=\"refresh\" CONTENT=\"0 ; url=adminlogin.php\" >";
}
?>