
<?php
session_start();
if(isset($_SESSION['user']))
{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>new student registration page</title>
<style type="text/css">
<!--
#apDiv1 {
	position:absolute;
	left:5px;
	top:9px;
	width:1104px;
	height:33px;
	z-index:1;
}
#apDiv1 div {
	font-family: Georgia, Times New Roman, Times, serif;
}
#apDiv2 {
	position:absolute;
	left:4px;
	top:56px;
	width:602px;
	height:27px;
	z-index:2;
}
body {
	background-color: #FFF;
}
#apDiv3 {
	position:absolute;
	left:244px;
	top:4px;
	width:47px;
	height:61px;
	z-index:1;
}
-->
</style>
<link href="buttonclass.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
@import url("*.css");
-->
</style>
</head>

<body>
<div id="apDiv3" style="background-image:url(logo.jpg)"></div>
<div align="center">
  <h1><strong>NATIONAL INSTITUTE OF TECHNOLOGY GOA</strong></h1>
</div>
<div align="center">NEW STUDENT REGISTRATION FORM
</div>
<form action="newstudinfo.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
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
  <table width="67%" border="0" align="center" bgcolor="#CCCCCC">
    <tr>
      <th width="30%" scope="col">&nbsp;</th>
      <th width="70%" scope="col"><label>
        <div align="right">
          <input type="button" name="logout" id="logout" value="Logout" style="background-color:#03F;color:#FFF" Onclick="location.href='alogout.php'"/>
        </div>
      </label></th>
    </tr>
    <tr>
      <td>Name:</td>
      <td><label>
        <input name="name" type="text" id="name" value="" />
      </label></td>
    </tr>
    <tr>
      <td>Branch:</td>
      <td><label>
        <select name="branch" id="branch">
          <option>CSE</option>
          <option>ECE</option>
          <option>EEE</option>
        </select>
      </label></td>
    </tr>
    <tr>
      <td>Roll_no:</td>
      <td><label>
        <input name="Roll_no" type="text" id="Roll_no" maxlength="8" />
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
        <input name="mobile" type="text" id="mobile" maxlength="10" />
      </label></td>
    </tr>
    <tr>
      <td>Address:</td>
      <td><label>
        <textarea name="address" id="address"></textarea>
      </label></td>
    </tr>
    <tr>
      <td height="43">Email Id:</td>
      <td><label>
        <input name="email_id" type="text" id="email_id" maxlength="50" />
      </label></td>
    </tr>
  </table>
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
		echo "<META HTTP-EQUIV=\"refresh\" CONTENT=\"1 ; url=newuserreg.php\" >";
		
	}
}
?>
  <div align="center">
    <table width="67%" border="0" bgcolor="#CCCCCC">
      <tr>
        <td width="212" height="62">Year:</td>
        <td width="499"><label>
          <label>
            <select name="year" id="year">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
            </select>
          </label>
          <div align="left"></div>
        </label>        </td>
      </tr>
    </table>
  </div>
  <p>&nbsp;</p>
  <table width="19%" height="28" border="0" align="center">
    <tr>
      <th scope="col"><input type="submit" name="Submit" id="Submit" value="Submit"  style="background-color:#06F;color:#FFF;border-style:solid;border:thick;size:landscape;text-decoration:blink " /></th>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
<?php
if(isset($_POST['Submit'] ) )
{
	include_once("connect.php");
	$name=$_POST['name'];
	$address=$_POST['address'];
	$mobile=$_POST['mobile'];
	$branch=$_POST['branch'];
	$roll_no=$_POST['Roll_no'];
	$email_id=$_POST['email_id'];
	$year=$_POST['year'];
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
	if($numrows==0)
	{
		$sqlStr="insert into info(roll_num,name,address,email_id,branch,mobile,year) values('$roll_no','$name','$address','$email_id','$branch','$mobile','$year')";
		@mysql_query($sqlStr);
		if($year==1)
		{
			$query="insert into semester1(roll_num) values('$roll_no')";
			@mysql_query($result);
			$query1="insert into semester2(roll_num) values('$roll_no') ";
			@mysql_query($result);
		}
		else if($year==2)
		{
			$query="insert into semester3(roll_num) values('$roll_no')";
			@mysql_query($result);
			$query1="insert into semester4(roll_num) values('$roll_no') ";
			@mysql_query($result);
		}
		else if($year==3)
		{
			$query="insert into semester5(roll_num) values('$roll_no')";
			@mysql_query($result);
			$query1="insert into semester6(roll_num) values('$roll_no') ";
			@mysql_query($result);
		}
		else if($year==4)
		{
			$query="insert into semester7(roll_num) values('$roll_no')";
			@mysql_query($result);
			$query1="insert into semester8(roll_num) values('$roll_no') ";
			@mysql_query($result);
		}
		echo "<META HTTP-EQUIV=\"refresh\" CONTENT=\"0 ; url=newstudinfo.php\" >";
	}
	else
	{
		$message="This Contact already exists";
		echo "<META HTTP-EQUIV=\"refresh\" CONTENT=\"0 ; url=newuserreg.php?msg=$message\" >";
	}

}
?>
<p>   </p>
</body>
</html><?php
}
else
{
echo "<META HTTP-EQUIV=\"refresh\" CONTENT=\"0 ; url=adminlogin.php\" >";
}
?>