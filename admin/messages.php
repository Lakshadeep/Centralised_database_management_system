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
<div>
  <div align="center">Messages/Notice for Students</div>
  <?php
  if(isset($_POST['submit']))
				  {
					  include_once('connect.php');
					  $heading=$_POST['heading'];
					  $year=$_POST['year'];
					  $roll_num=$_POST['roll_num'];
					  $long_desc=$_POST['long_desc'];
					  $branch=$_POST['branch'];
					  
					  $query1="insert into messages(date,title,year,long_desc,roll_num,branch) values(now(),'$heading','$year','$long_desc','$roll_num','$branch') ";
					  @mysql_query($query1);
				  }
					  ?>
					  
</div>
<form id="form1" name="form1" method="post" action="">
  <table width="50%" border="0" align="center" style="background-color:#CCC">
    <tr>
      <td width="31%">Heading:</td>
      <td width="69%"><label>
        <input name="heading" type="text" id="heading" size="20" />
      </label></td>
    </tr>
    <tr>
      <td>Year:</td>
      <td><label>
        
         <select name="year" id="year">
          <option>ALL</option>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
           <option>None</option>
        </select>
      </label></td>
    </tr>
    <tr>
      <td>Roll_num:</td>
      <td><label>
        <input name="roll_num" type="text" id="short_desc" maxlength="20" />
      </label></td>
    </tr>
    <tr>
      <td>Long_desc:</td>
      <td><label>
        <textarea name="long_desc" cols="40" rows="10" id="long_desc"></textarea>
      </label></td>
    </tr>
    <tr>
      <td>Branch:</td>
      <td><label>
        <select name="branch" id="branch">
          <option>ALL</option>
          <option>ECE</option>
          <option>CSE</option>
          <option>EEE</option>
          <option>NONE</option>
        </select>
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="submit" id="submit" value="Submit" /></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>
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