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
<?php
If(isset($_REQUEST['notice']))
{
	include_once('connect.php');
	$roll_no=$_REQUEST['notice'];
	$query="select * from notice where roll_num='$roll_no'";
	$result=@mysql_query($query);
If(isset($_POST['submitinotice']))
{	
	while($row=mysql_fetch_array($result))
													 {
														 for($i=0;$i<mysql_num_fields($result);$i++)
														 {
															
															 if($row[$i]==null)
															 {
																  $inotice=$_POST['inotice'];
																  include_once('connect.php');
							 
				$query1="insert into notice set 'mysql_fetch_field($result,$i)->name'='$inotice' where roll_num='$roll_no' ";
	            $result1=@mysql_query($query1);
															 }
														 }
													 }
		
}
}
	

?>

<body>
<div align="center">
  <h1><strong>NATIONAL INSTITUTE OF TECHNOLOGY GOA</strong></h1>
  <div>
    <form id="form1" name="form1" method="post" action="">
      <p>
        <label>
          <textarea name="inotice" cols="60" rows="8" id="inotice" style="background-color:#CCC"></textarea>
        </label>
      </p>
      <p>
        <label>
          <input type="submit" name="submitinotice" id="submitinotice" value="Submit" />
        </label>
      </p>
    </form>
  </div>
</div>
<div id="apDiv3" style="background-image:url(../logo1.jpg)"></div>
</body>
</html>
<?php
}
else
{
echo "<META HTTP-EQUIV=\"refresh\" CONTENT=\"0 ; url=adminlogin.php\" >";
}
?>