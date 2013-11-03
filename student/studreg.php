<!DOCTYPE HTML>
<html>

<head>
  <title>National Institute of Technology Goa</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
<style type="text/css">
<!--
#apDiv1 {
	position:absolute;
	left:708px;
	top:131px;
	width:320px;
	height:95px;
	z-index:1;
}
#apDiv2 {
	position:absolute;
	left:38px;
	top:71px;
	width:44px;
	height:55px;
	z-index:2;
	background-image: url(../../../../Users/Lakshadeep/Documents/Unnamed%20Site%202/logo.jpg);
}
-->
</style>
</head>

<body>
  
<div id="main" >
<?php
if(isset($_POST['submit']))
				{
					$name=$_POST['name'];
					$roll_no=$_POST['roll_no'];
					$email_id=$_POST['email_id'];
					$password=$_POST['password2'];
					include_once('connect.php');
					$query1="select * from info where name='$name'and email_id='$email_id' and roll_num='$roll_no'";
					$result1=@mysql_query($query1);
					$numrows=mysql_num_rows($result1);
					if($numrows==0)
					{
						$msg="Your information have not been stored in database till now .Please contact admin ";
		                echo "<META HTTP-EQUIV=\"refresh\" CONTENT=\"0 ; url=studreg.php?msg=$msg\" >";
		            }
					else
					{
					$query="update info set password='$password' where name='$name' and email_id='$email_id' and roll_num='$roll_no'";
					@mysql_query($query);
					$msg="You are successfully registered please login to continue";
					echo "<META HTTP-EQUIV=\"refresh\" CONTENT=\"0 ; url=studreg.php?msg=$msg\" >";
					}
				}
				?>
<header>
      <div id="logo" >
        <span class="center"><img src="images/back0.jpg" alt="example graphic" /></span>
      </div>
      <nav>
        <div id="menu_container">
          <ul class="sf-menu" id="nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="admissions.php">Admissions</a></li>
            <li><a href="aboutdirector.php">Governance</a></li>
            <li><a href="#">Departments</a>
              <ul>
             
                <li><a href="cse.php">CSE</a></li>
                <li><a href="ece.php">ECE</a></li>
                <li><a href="eee.php">EEE</a></li>
              </ul></li>
            
           
            <li><a href="location.php">Location</a>
              
               
            </li>
            <li><a href="contactus.php">Contact Us</a></li>
          </ul>
        </div>
      </nav>
    </header>
    <div id="site_content">
      <div id="sidebar_container">
        <div class="sidebar">
          <h3>Latest News</h3>
          <h4>New Website Launched</h4>
          <h5>January 1st, 2012</h5>
          <p>2012 sees the redesign of our website. Take a look around and let us know what you think.<br /><a href="#">Read more</a></p>
        </div>
       
       
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
        
      </div>
      <div class="content">
        <h1 align="center">Student Registration Page</h1>
        <p><?php echo"$msg"; ?></p>
        <form name="form2" method="post" action="">
          <table width="96%" border="0" align="center" style="background-color:#000">
            <tr>
              <td width="50%">Name:(as on NITG ID Card)</td>
              <td width="50%"><label>
                <input type="text" name="name" id="name">
              </label></td>
            </tr>
            <tr>
              <td>Roll_no:</td>
              <td><label>
                <input type="text" name="roll_no" id="roll_no">
              </label></td>
            </tr>
            <tr>
              <td>Email_Id(from Id card):</td>
              <td><label>
                <input type="text" name="email_id" id="email_id">
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
              <td>Password:</td>
              <td><label>
                <input type="password" name="password2" id="password2">
              </label></td>
            </tr>
            <tr>
              <td>Retype Password:</td>
              <td><label>
                <input type="password" name="rpassword" id="rpassword">
              </label></td>
            </tr>
           
          </table>
          <p align="center"> 
            <label class="submit">
              <input type="submit" input class="submit" name="submit" id="submit" value="Submit">
            </label><p></p>
          </p>
        </form>
        <p></p>
      </div>
    </div>
    <footer>
      <p>Copyright &copy;National Institute of Technology Goa 2012</p>
    </footer>
  </div>
  <p>&nbsp;</p>
  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/jquery.easing-sooper.js"></script>
  <script type="text/javascript" src="js/jquery.sooperfish.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('ul.sf-menu').sooperfish();
    });
  </script>
</body>
</html>
