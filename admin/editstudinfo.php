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
<?php
if(isset($_POST['eSubmit'] ) )
{
	include_once("connect.php");
	$name=$_POST['ename'];
	$address=$_POST['eaddress'];
	$mobile=$_POST['emobile'];
	$branch=$_POST['ebranch'];
	$roll_no=$_POST['eRoll_no'];
	$email_id=$_POST['eemail_id'];
	$year=$_POST['eyear'];
	// Make sure the user actually 
// selected and uploaded a file
/*if (isset($_FILES['new_img']) && $_FILES['new_img']['size'] > 0) { 

          // Temporary file name stored on the server
          $tmpName  = $_FILES['new_img']['tmp_name'];  
           
          // Read the file 
          $fp     = fopen($tmpName, 'r');
          $data = fread($fp, filesize($tmpName));
          $data = addslashes($data);
          fclose($fp);
          

         

          
}
else {
  
}*/

	$sqlcheck="select * from info where roll_num='$roll_no'";
	$strcheck=@mysql_query($sqlcheck,$db);
	$numrows=@mysql_num_rows($strcheck);
	if($numrows==1)
	{
	
		$sqlStr="update info set name='$name',address='$sddress',email_id='$email_id',branch='$branch',mobile='$mobile',year='$year' where roll_num='$roll_no'"; 
		@mysql_query($sqlStr);
		echo "<META HTTP-EQUIV=\"refresh\" CONTENT=\"1 ; url=editstudshow.php\" >";
		
	}
}

?>
  <h1><strong>NATIONAL INSTITUTE OF TECHNOLOGY GOA</strong></h1>
</div>
<div id="apDiv3" style="background-image:url(logo.jpg)"></div>
<div align="center">Edit student info</div>
<form action="editstudshow.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
<table width="67%" border="0" align="center" bgcolor="#CCCCCC">
  <tr>
    <th width="30%" scope="col">&nbsp;</th>
    <th width="70%" scope="col"><label>
      <div align="right">
        <input type="button" name="logout" id="logout" value="Logout" style="background-color:#03F;color:#FFF" onclick="location.href='logout.php'"/>
      </div>
      </label></th>
      <?php
	  if(isset($_REQUEST['edit']))
{ 
  include_once("connect.php");
  $roll_no=$_REQUEST['edit'];
  $query2="select * from info where roll_num='$roll_no'";
  $result2=@mysql_query($query2);
  if($row=@mysql_fetch_array($result2))
  {
	 
	  $name=$row['name'];
	  $address=$row['address'];
	  $email_id=$row['email_id'];
	  $branch=$row['branch'];
	  $address=$row['address'];
	  $mobile=$row['mobile'];
	  $year=$row['year'];
  }
}
 
  ?>
  </tr>
  <tr>
    <td>Name:</td>
    <td><label>
      <input name="ename" type="text" id="ename" value="<?php echo "$name" ?>" />
    </label></td>
  </tr>
  <tr>
    <td>Branch:</td>
    <td><label>
      <select name="ebranch" id="ebranch" value>
	  <option><?php echo "$branch"; ?></option>
        <option>CSE</option>
        <option>ECE</option>
        <option>EEE</option>
      </select>
    </label></td>
  </tr>
  <tr>
    <td>Roll_no:</td>
    <td><label>
      <input name="eRoll_no" type="text" id="eRoll_no" maxlength="8" value="<?php echo $roll_no ?> "/>
    </label></td>
  </tr>
  <tr>
    <td height="102">Photo:</td>
    <td><label>
      <input type="file" name="new_img" id="new_img" accept="image/jpeg"/>
    </label></td>
  </tr>
  <tr>
    <td>Mobile:</td>
    <td><label>
      <input name="emobile" type="text" id="emobile" maxlength="10" value="<?php echo $mobile ?>"/>
    </label></td>
  </tr>
  <tr>
    <td>Address:</td>
    <td><label>
      <textarea name="eaddress" id="eaddress" value="<?php echo $address ?>"></textarea>
    </label></td>
  </tr>
  <tr>
    <td height="43">Email Id:</td>
    <td><label>
      <input name="eemail_id" type="text" id="eemail_id" maxlength="50" value="<?php echo $email_id ?>"/>
    </label></td>
  </tr>
</table>
<table width="67%" border="0" align="center" bgcolor="#CCCCCC">
  <tr>
    <td width="213" height="62">Year:</td>
    <td width="500"><label>
      <label>
        <select name="eyear" id="eyear">
          <option><?php echo $year ?></option>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>0</option>
        </select>
      </label>
      <div align="left"></div>
      </label></td>
  </tr>
</table>
<table width="19%" height="28" border="0" align="center">
  <tr>
    <th scope="col"><input type="submit" name="eSubmit" id="eSubmit" value="Submit"  style="background-color:#06F;color:#FFF;border-style:solid;border:thick;size:landscape;text-decoration:blink " /></th>
  </tr>
</table>
</form>

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
<?php
}
else
{
echo "<META HTTP-EQUIV=\"refresh\" CONTENT=\"0 ; url=adminlogin.php\" >";
}
?>