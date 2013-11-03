<?php
session_start();
if(isset($_SESSION['user']))
{
	?><!DOCTYPE HTML>
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
<?php
include_once('connect.php');
$query="select * from homenotice where category='ALL' order by id desc limit 1";
$result=mysql_query($query);
while($row=mysql_fetch_array($result,MYSQL_ASSOC))
{
	?>

<body>
  <div id="apDiv1">
    <form name="form1" method="post" action="">
      <p align="right">Email ID:
        <label>
          <input type="text" name="emailid" id="emailid">
        </label>
      </p>
      <p align="right">Password:
        <label>
          <input type="text" name="password" id="password">
        </label>
      </p>
      <p align="right">
        <label>
          <input type="submit" name="login" id="login" value="Log in">
          <input type="submit" name="register" id="register" value="Register" >
        </label>
      </p>
    </form>
    
    
  </div>
<div id="main" >
<header>
     <div id="logo" >
         <div id="logo" >
        <span class="center"><img src="images/back0.jpg" alt="example graphic" /></span>
      </div>
      <nav>
       <div id="menu_container">
          <ul class="sf-menu" id="nav">
            <li><a href="indexhome.php">Home</a></li>
            <li><a href="#">Student</a><ul>
             
                <li><a href="aattendance.php">Attendance</a></li>
                <li><a href="marks.php">Marks</a></li>
                 <li><a href="messages.php">Messages</a></li>
                
                </ul></li>
            <li><a href="admissionslog.php">Admissions</a></li>
            <li><a href="aboutdirectorlog.php">Governance</a></li>
            <li><a href="#">Departments</a>
              <ul>
             
                <li><a href="cselog.php">CSE</a></li>
                <li><a href="ecelog.php">ECE</a></li>
                <li><a href="eeelog.php">EEE</a></li>
                </ul></li>
            
           
            <li><a href="locationlog.php">Location</a>
              
               
            </li>
            <li><a href="contactuslog.php">Contact Us</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </div>
      </nav>
  </header>
    <div id="site_content">
      <div id="sidebar_container">
        <div class="sidebar">
          <h3>Latest News</h3>
          <h4><strong><?php $title=$row['title']; echo"$title"; ?></strong></h4>
          <h5><?php $date=$row['date'];echo"$date"; ?></h5>
          <p><?php $short_desc=$row['short_desc'];echo"$short_desc"; ?><br /><a href="readmorehomelog.php">Read more</a></p>
        </div>
        <?php
}
?>
        <div class="sidebar">
          <h3>Notice for students</h3>
          <h4>New Website Launched</h4>
          <h5>January 1st, 2012</h5>
          <p>2012 sees the redesign of our website. Take a look around and let us know what you think.<br /><a href="#">Read more</a></p>
        </div>
        
      </div>
      <div class="content">
       <h3 style="color:#0FF">Admissions</h3>
        <p>
The first batch of students has been admitted and academic activities of NITG have started from 2010-11 session.  
Classes are being handled by contract faculty and the laboratories of GEC are being used.
To begin with, MHRD allocated an annual intake of 90 students to NIT, Goa, comprising of 30 students each in the following B. Tech programs:
•	Computer Science and Engineering
•	Electronics and Communication Engineering
•	Electrical and Electronics Engineering
 
 
In addition, 6 seats have been allocated under the Direct Admission for Students Abroad (DASA) scheme.
 
Based on recommendations of an expert committee it was decided that NIT, Goa would start functioning temporarily in the Goa Engineering College (GEC) Campus located at Farmagudi, Goa.  

</p>
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
<?php
}
else
{
echo "<META HTTP-EQUIV=\"refresh\" CONTENT=\"0 ; url=acadamics.php\" >";
}
?>
