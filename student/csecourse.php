<?php
session_start();
?><!DOCTYPE HTML>
<html>
<?php
if(isset($_POST['login']))
{
	
	include("connect.php");
	$roll_num=$_POST['emailid'];
	$password=$_POST['password'];
		
	/*if($uname=="root" && $pass=="pass")
	{
		$_SESSION['user']=$uname;
		echo "<META HTTP-EQUIV=\"refresh\" CONTENT=\"0 ; url=viewContact.php\" >";
	}
	else
	{
		$msg="Incorrect Login";
		echo "<META HTTP-EQUIV=\"refresh\" CONTENT=\"0 ; url=login.php?msg=$msg\" >";
	}*/
	
	$chklogin="select * from info where roll_num='$roll_num' and password='$password'";
	$strcheck=mysql_query($chklogin,$db);
	$numrows=mysql_num_rows($strcheck);
	if($numrows==0)
	{
		$msg="Incorrect Login";
		echo "<META HTTP-EQUIV=\"refresh\" CONTENT=\"0 ; url=csecourse.php?msg=$msg\" >";
	}
	else
	{
		//echo $numrows;
		$_SESSION['user']=$roll_num;
		//echo $_SESSION['user'];
		//header("Location:viewContact.php");
		echo "<META HTTP-EQUIV=\"refresh\" CONTENT=\"1 ; url=csecourselog.php\" >";
		
	}
}
?>
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
$query="select * from homenotice where category='CSE' order by id desc limit 1";
$result=mysql_query($query);
while($row=mysql_fetch_array($result,MYSQL_ASSOC))
{
	?>

<body>
 
<div id="main" >
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
             <li><a href="login.php">Login</a>
              
               
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
          <h4><strong><?php $title=$row['title']; echo"$title"; ?></strong></h4>
          <h5><?php $date=$row['date'];echo"$date"; ?></h5>
          <p><?php $short_desc=$row['short_desc'];echo"$short_desc"; ?><br /><a href="readmorecse.php">Read more</a></p>
        </div>
        <?php
}
?>
        
        
      </div>
      <div class="content">
      <p class="center" style="color:#0ff"><?php echo $msg;?></p>
        <h1 align="center"> Computer Science and Engineering Department Course Structure</h1>
    <p>Foundation Courses (Fndn)<br>
MA100 Engineering Mathematics – I (3-1-0) 4<br>
MA101 Engineering Mathematics – II (3-1-0) 4<br>
PH100 Physics (3-0-0) 3<br>
PH101 Physics Lab (0-0-3) 1<br>
CY100 Chemistry (3-0-0) 3<br>
CY101 Chemistry Lab (0-0-3) 1<br>
CV100 Engineering Mechanics (3-1-0) 4<br>
EE100 Elements of Electrical Engg (3-1-0) 4<br>
EC100 Elements of Electronics and
Communication Engg. (3-1-0) 4<br>
ME100 Elements of Mechanical Engg. (3-0-0) 3<br>
ME101 Engineering Graphics (1-0-3) 2<br>
ME102 Workshop (0-0-3) 1<br>
CS100 Computer Programming (3-0-0) 3<br>
CS101 Computer Programming Lab (0-0-3) 1<br>
HU100 Professional Communication (3-1-0) 4<br>
HU300 Engineering Economics (3-1-0) 4<br>
HU301 Management Theory & Practice (3-1-0) 4<br>
Programme Specific Core (PSC)<br>
CS200 Design of Digital Systems (3-1-0) 4<br>
CS201 Data Structures and Algorithms (3-1-0) 4<br>
CS202 Computer Organization and
Architecture (3-1-0) 4<br>
CS203 Principles of Data Communication (3-1-0) 4<br>
CS204 Discrete Mathematics (3-1-0) 4<br>
CS205 Digital Systems Lab (0-0-3) 1<br>
CS206 Data Structures Lab (0-0-3) 1<br>
CS207 Unix Programming Lab (0-0-3) 1<br>
CS250 Microprocessor and Interfacing (3-1-0) 4<br>
CS251 Computer Graphics (3-1-0) 4<br>
CS252 Theory of Computation (3-1-0) 4<br>
CS253 Systems Programming (3-1-0) 4<br>
CS254 Microprocessor Lab (0-0-3) 1<br>
CS255 Computer Graphics Lab (0-0-3) 1<br>
CS290 Seminar (0-0-2) 1<br>
CS300 Operating Systems (3-1-0) 4<br>
CS301 Database Systems (3-1-0) 4<br>
CS302 Software Engineering (3-1-0) 4<br>
CS303 Computer Networks (3-1-0) 4<br>
CS304 Operating Systems Lab (0-0-3) 1<br>
CS305 Database Systems Lab (0-0-3) 1<br>
CS306 Networks Lab (0-0-3) 1<br>
CS350 Design and Analysis of Algorithms (3-1-0) 4<br>
CS351 Compiler Design (3-1-0) 4<br>
CS352 Distributed Computing Systems (3-1-0) 4<br>
CS353 Internet Technologies & Applications (3-1-0) 4<br>
CS354 Compilers Lab (0-0-3) 1<br>
CS355 Web Technologies Lab (0-0-3) 1<br>
CS440 Practical Training 1<br>
Programme Specific Electives (PSE)<br>
CS400 Object Oriented Programming (3-0-0) 3<br>
CS401 Information Systems (3-0-0) 3<br>
CS402 Object Oriented Analysis & Design (3-1-0) 4<br>
CS403 Advanced Data Structures (3-1-0) 4<br>
CS404 Computer Vision (3-0-0) 3<br>
CS405 Advance Computer Architecture (3-1-0) 4<br>
CS406 Advanced Microprocessors (3-0-0) 3<br>
CS407 Optimization Techniques in Computing (3-1-0) 4<br>
CS408 Artificial Intelligence (3-0-0) 3<br>
CS409 Multimedia and Virtual Reality (3-0-0) 3<br>
CS410 Advanced Database Systems (3-1-0) 4<br>
CS411 Data Warehousing and Data Mining (3-1-0) 4<br>
CS412 Soft Computing (3-0-0) 3<br>
CS413 Number Theory and Cryptography (3-1-0) 4<br>
CS414 Applied Algorithms (3-1-0) 4<br>
CS415 Software Quality Assurance (3-0-0) 3<br>
CS416 Network Management (3-0-0) 3<br>
CS417 Protocol Engineering (3-0-0) 3<br>
CS418 Software Testing (3-0-0) 3<br>
CS419 Cyber laws & Security Standards (3-0-0) 3<br>
CS420 Mobile Communication (3-0-0) 3<br>
CS421 Software Architecture (3-0-0) 3<br>
CS422 Information Security (3-1-0) 4<br>
CS423 Network Security (3-0-0) 3<br>
CS 424Wireless Networks & Systems (3-0-0) 3<br>
CS425 Parallel Algorithms (3-1-0) 4<br>
CS426 Distributed Algorithms (3-1-0) 4<br>
CS427 Web Engineering (3-0-0) 3<br>
CS428 Software Project Management (3-0-0) 3<br>
CS429 Cloud Computing (3-0-0) 3<br>
CS430 E-Commerce (3-0-0) 3<br>
CS 431 Advanced Operating Systems (3-1-0) 4<br>
CS 432 Advanced Compilers (3-1-0) 4<br>
CS433 Web Services (3-0-0) 3<br>
Open Electives (OE)<br>
CS400 Object Oriented Programming (3-0-0) 3<br>
CS401 Information Systems (3-0-0) 3<br>
CS408 Artificial Intelligence (3-0-0) 3<br>
CS412 Soft Computing (3-0-0) 3<br>
Programme Major Project (PMP)<br>
CS449 Major Project – I (0-0-6) 4<br>
CS499 Major Project – II (0-0-9) 6<br>
Mandatory Learning Courses (MLC)<br>
MLC1 Environmental Studies (1-0-0) 1<br>
MLC2 Professional Ethics and Human Values (1-0-0) 1<br>
<a href="#">Download PDF</a></p>
    
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
