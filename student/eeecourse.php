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
		echo "<META HTTP-EQUIV=\"refresh\" CONTENT=\"0 ; url=eeecourse.php?msg=$msg\" >";
	}
	else
	{
		//echo $numrows;
		$_SESSION['user']=$roll_num;
		//echo $_SESSION['user'];
		//header("Location:viewContact.php");
		echo "<META HTTP-EQUIV=\"refresh\" CONTENT=\"1 ; url=eeecourselog.php\" >";
		
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
$query="select * from homenotice where category='EEE' order by id desc limit 1";
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
         <h1 align="center"> Electrical and Engineering Department Course Structure</h1>
    <p>Foundation Courses (Fndn)<br>
MA100 Engineering Mathematics – I (3-1-0) 4<br>
MA101 Engineering Mathematics - II (3-1-0) 4<br>
PH100 Physics (3-0-0) 3<br>
PH101 Physics Lab (0-0-3) 1<br>
CY100 Chemistry (3-0-0) 3<br>
CY101 Chemistry Lab (0-0-3) 1<br>
CV100 Engineering Mechanics (3-1-0) 4<br>
EE100 Elements of Electrical Engineering (3-1-0) 4<br>
EC101 Elements of of Electronics & (3-1-0) 4
Communication Engineering.<br>
ME100 Elements of Mechanical Engineering (3-0-0) 3<br>
ME101 Engineering Graphics (1-0-3) 2<br>
ME102 Workshop (0-0-3) 1<br>
CO100 Computer Programming (3-0-0) 3<br>
CO101 Computer Programming Lab (0-0-3) 1<br>
HU100 Professional Communication (3-1-0) 4<br>
HU300 Engineering Economics (3-0-0) 4<br>
HU301 Management Theory and Practice (3-0-0) 4<br>
Programme Specific Core (PSC)<br>
EE200 Circuit Theory (3-1-0) 4<br>
EE201 Mathematics for E&E Engg. (3-1-0) 4<br>
EE202 Electromagnetic Theory (3-1-0) 4<br>
EE203 Transformers and Induction Machines (3-1-0) 4<br>
EE204 Signals and Systems (3-1-0) 4<br>
EE205 Linear Integrated Circuits (3-1-0) 4<br>
EE206 Transformers and Induction (0-0-3) 1<br>
Machines Lab<br>
EE207 Signals and Systems Lab (0-0-3) 1<br>
EE250 Electrical Measurements & Measuring (3-1-0) 4<br>
Instruments<br>
EE251 Synchronous Machines (3-1-0) 4<br>
EE252 Power Electronics (3-1-0) 4<br>
EE253 Digital Electronic Circuits (3-1-0) 4<br>
EE254 Electrical Measurements Lab (0-0-3) 1<br>
EE255 Analog and Digital Electronics Lab (0-0-3) 1<br>
EE300 Elements of Power System (3-1-0) 4<br>
Engineering (3-1-0) 4<br>
EE301 Digital Signal Processing (3-1-0) 4<br>
EE302 Electronic Measurements & (3-1-0) 4<br>
Instrumentation<br>
EE303 Linear and Digital Control Theory (3-1-0) 4<br>
EE304 Microprocessors (3-1-0) 4<br>
EE305 Power Electronics Lab (0-0-3) 1<br>
EE350 Power System Analysis (3-1-0) 4<br>
EE351 Switchgear and Protection (3-1-0) 4<br>
EE352 Microprocessors Lab (0-0-3) 1<br>
EE353 Power System Simulation Lab (0-0-3) 1<br>
EE440 Practical Training/Educational Tour 1<br>
Programme Specific Electives (PSE)<br>
EE230 Polyphase Systems & Component (3-1-0) 4<br>
Transformations<br>
EE231 Commutator Machines (3-1-0) 4<br>
EE232 Introduction to Algorithms & Data (3-0-0) 3<br>
Structures<br>
EE270 Digital Computer Organization & (3-0-0) 3<br>
Architecture<br>
EE271 Commutator Machines Lab (0-0-3) 1<br>
EE272 Synchronous Machines Lab (0-0-3) 1<br>
EE273 Elements of Analog and Digital (3-0-0) 3<br>
Communication<br>
EE330 Distribution Systems Planning & (3-1-0) 4<br>
Control<br>
EE331 Network Synthesis (3-1-0) 4<br>
EE332 Digital System Design (3-1-0) 4<br>
EE333 Power System Harmonics (3-1-0) 4<br>
EE334 Neural Networks and Applications (3-0-0) 3<br>
EE335 Linear and Nonlinear Systems (3-1-0) 4<br>
EE336 Traveling Waves on Transmission (3-0-0) 3<br>
Systems<br>
EE337 Distribution Systems Lab (0-0-3) 1<br>
EE338 Digital System Design Lab (0-0-3) 1<br>
EE339 Power System Harmonics Lab (0-0-3) 1<br>
EE370 Energy Auditing (3-0-0) 3<br>
EE371 Power System Communications (3-0-0) 3<br>
EE372 Optimal Operation of Power Systems (3-1-0) 4<br>
EE373 Advanced Digital Signal Processing (3-0-0) 3<br>
EE374 Special Machines and Drives (3-1-0) 4<br>
EE375 Embedded System Design (3-0-0) 3<br>
EE376 Power Electronic Applications (3-0-0) 3<br>
to Power Systems<br>
EE377 Solid-State Drives (3-1-0) 4<br>
EE430 Electric Power Stations (3-0-0) 3<br>
EE431 Electric Energy Systems (3-0-0) 3<br>
EE432 Advanced Control Systems (3-0-0) 3<br>
EE433 Modeling and Simulation Techniques (3-0-0) 3<br>
for Dynamic Systems<br>
EE434 Incremental Motion Control (3-0-0) 3<br>
EE340 Energy Auditing Lab (0-0-3) 1<br>
EE386 Digital Signal Processing Lab (0-0-3) 1<br>
EE470 HVDC Transmission (3-1-0) 4<br>
EE471 Soft Computing (3-0-0) 3<br>
EE472 Electromagnetic Compatibility (3-0-0) 3<br>
EE473 Power System Protection (3-0-0) 3<br>
EE474 Operation of Restructured Power (3-0-0) 3<br>
Systems under Deregulation<br>
EE475 Random Signal Processing (3-0-0) 3<br>
EE476 Non-Conventional Energy Systems (3-0-0) 3<br>
EE477 Advanced Power Electronics (3-1-0) 4<br>
EE478 Power System Dynamics (3-1-0) 4<br>
EE479 Computer Networks (3-0-0) 3<br>
EE480 The ARM Core: Architecture & (3-0-0) 3<br>
Programming<br>
EE481 Advanced Power Electronics Lab (0-0-3) 1<br>
EE482 Flexible AC Transmission Systems (3-1-0) 4<br>
EE483 High-Voltage Engineering (3-1-0) 4<br>
EE484 Photovoltaics and Applications (3-0-0) 3<br>
EE485 Power Generation and Economics (3-1-0) 4<br>
Open Electives (OE)<br>
EE334 Neural Networks and Applications (3-0-0) 3<br>
EE373 Advanced Digital Signal Processing (3-0-0) 3<br>
EE431 Electric Energy Systems (3-0-0) 3<br>
EE432 Advanced Control Systems (3-0-0) 3<br>
EE471 Soft Computing (3-0-0) 3<br>
EE476 Non-Conventional Energy Systems (3-0-0) 3<br>
EE479 Computer Networks (3-0-0) 3<br>
EE382 Utilization of Electrical Energy (3-0-0) 3<br>
EE383 Computational Technique for (3-0-0) 3<br>
large system analysis<br>
EE486 Optimisation Techniques (3-0-0) 3<br>
Programme Major Project (PMP)<br>
EE449 Major Project – I (0-0-6) 4<br>
EE499 Major Project - II (0-0-9) 6<br>
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
