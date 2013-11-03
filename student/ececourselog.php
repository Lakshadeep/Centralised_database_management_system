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
$query="select * from homenotice where category='ECE' order by id desc limit 1";
$result=mysql_query($query);
while($row=mysql_fetch_array($result,MYSQL_ASSOC))
{
	?>

<body>
  
<div id="main" >
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
      <h4><strong>
        <?php $title=$row['title']; echo"$title"; ?>
      </strong></h4>
      <h5>
        <?php $date=$row['date'];echo"$date"; ?>
      </h5>
      <p>
        <?php $short_desc=$row['short_desc'];echo"$short_desc"; ?>
        <br />
        <a href="readmoreecelog.php">Read more</a></p>
    </div>
    <?php
}
?>
    
    
  </div>
  <div class="content">
    <h1 align="center"> Electronics and Communication Engineering Course Structure</h1>
    <p>Foundation Courses (Fndn) <br>
MA100 Engineering Mathematics – I (3-1-0) 4<br>
MA101 Engineering Mathematics – II (3-1-0) 4<br>
PH100 Physics (3-0-0) 3<br>
PH101 Physics Laboratory (0-0-3) 1<br>
CY100 Chemistry (3-0-0) 3<br>
CY101 Chemistry Lab (0-0-3) 1<br>
CV100 Engineering Mechanics (3-1-0) 4<br>
EE100 Elements of Electrical Engg. (3-1-0) 4<br>
EC100 Elements of Electronics &
Communication Engg.
(3-1-0) 4<br>
ME100 Elements of Mechanical Engg. (3-0-0) 3<br>
ME101 Engineering Graphics (1-0-3) 2<br>
ME102 Workshop (0-0-3) 1<br>
CO100 Computer Programming (3-0-0) 3<br>
CO101 Computer Programming Lab (0-0-3) 1<br>
HU100 Professional Communication (3-1-0) 4<br>
HU300 Engineering Economics (3-1-0) 4<br>
HU301 Management Theory and Practice (3-1-0) 4<br>
Programme Specific Core (PSC)<br>
EC200 Analog Electronics Circuits (3-1-0) 4<br>
EC201 Signals and Systems (3-1-0) 4<br>
EC202 Digital Electronics (3-1-0) 4<br>
EC203 Electromagnetic Waves (3-1-0) 4<br>
EC204 Mathematics for E&C Engg. (3-1-0) 4<br>
EC205 Analog Electronic Circuits Lab (0-0-3) 1<br>
EC206 Digital Electronic Circuits Lab (0-0-3) 1<br>
EC207 Signals and Systems Lab (0-0-3) 1<br>
EC250 Linear Integrated Circuits (3-1-0) 4<br>
EC251 Analog Communication (3-1-0) 4<br>
EC252 Microprocessors (3-1-0) 4<br>
EC253 Digital Computer Organisation &
Architecture
(3-1-0) 4<br>
EC254 Linear Integrated Circuits Lab (0-0-3) 1<br>
EC255 Microprocessor Lab (0-0-3) 1<br>
EC290 Seminar (0-0-2) 1<br>
EC300 Digital System Design (3-1-0) 4<br>
EC301 Antennas and Propagation (3-1-0) 4<br>
EC302 Digital Communications (3-1-0) 4<br>
EC303 Linear Control Systems (3-1-0) 4<br>
EC304 Digital System Design Lab (0-0-3) 1<br>
EC305 Basic Communications Lab (0-0-3) 1<br>
EC350 Digital Signal Processing (3-1-0) 4<br>
EC351 VLSI Design (3-1-0) 4<br>
EC352 Microwave Engg & Optical
Communication
(3-1-0) 4<br>
EC353 Communication Networks (3-1-0) 4<br>
EC354 Digital Signal Processing Lab (0-0-3) 1<br>
EC355 VLSI Design Lab (0-0-3) 1<br>
EC356 Advanced Communication Lab (0-0-3) 1<br>
EC440 Practical Training 1<br>
Programme Specific Elective (PSE)<br>
EC400 Data Structures & Algorithms (3-1-0) 4<br>
EC401 Power Electronics (3-1-0) 4<br>
EC402 Opto-Electronics (3-0-0) 3<br>
EC403 VLSI Testing & Testability (3-0-0) 3<br>
EC404 Active Filters and Data Converters (3-1-0) 4<br>
EC405 Advanced Computer Architecture (3-1-0) 4<br>
EC406 Logic Synthesis & Techniques (3-0-0) 3<br>
EC407 Electronic Instrumentation (3-0-0) 3<br>
EC408 Biomedical Instrumentation (3-0-0) 3<br>
EC409 DSP Systems and Architecture (3-1-0) 4<br>
EC410 Advanced Digital Signal
Processing
(3-1-0) 4<br>
EC411 Speech and Image Processing (3-1-0) 4<br>
EC412 Embedded Systems (3-0-0) 3<br>
EC413 Operating Systems (3-1-0) 4<br>
EC414 TV Engineering (3-0-0) 3<br>
EC415 Satellite Communication (3-0-0) 3<br>
EC416 Fiber Optic Technology &
Applications
(3-0-0) 3<br>
EC417 Radar & Electronic Navigation
Systems
(3-0-0) 3<br>
EC418 Wireless Mobile Communication (3-0-0) 3<br>
EC419 Spread Spectrum Communications (3-0-0) 3<br>
EC420 Information Theory and Coding (3-1-0) 4<br>
EC421 Error Control Coding (3-1-0) 4<br>
EC422 Electromagnetic Interference &
Compatibility
(3-0-0) 3<br>
EC423 Adhoc and Sensor Networks (3-0-0) 3<br>
EC424 Digital Signal Compression (3-1-0) 4<br>
EC425 Soft Computing (3-0-0) 3<br>
Open Electives (OE)<br>
EC407 Electronic Instrumentation (3-0-0) 3<br>
EC408 Biomedical Instrumentation (3-0-0) 3<br>
EC412 Embedded Systems (3-0-0) 3<br>
EC425 Soft Computing (3-0-0) 3<br>
Programme Major Project (PMP)<br>
EC449 Major Project - I (0-0-6) 4<br>
EC499 Major Project – II (0-0-9) 6<br>
Mandatory Learning Courses (MLC)<br>
MLC1 Environmental Studies (1-0-0) 1
MLC2 Professional Ethics and Human
Values
(1-0-0) 1<br>
</p>
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
<?php
}
else
{
echo "<META HTTP-EQUIV=\"refresh\" CONTENT=\"0 ; url=ececourse.php\" >";
}
?>
