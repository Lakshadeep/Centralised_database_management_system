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
        
        
      </div>
      <div class="content">
<h1 align="center" style="color:#0CF">Welcome to National Institute of Technology                     Goa </h1>
       <?php
		include('connect.php');
		$name=$_SESSION['user'];
		
							
		$query2="select * from  attendance where roll_num='$name'";
        $result2=mysql_query($query2);

        if($row2=mysql_fetch_array($result2,MYSQL_ASSOC))
{
?>

        <p> 
		
          </p>
          <table width="80%" border="0">
            <tr>
              <td width="41%">Subjects</td>
              <td width="59%">Attendance %</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>Subject 1</td>
              <td><?php $s1=$row2['subject1'] ;echo"$s1"; ?></td>
            </tr>
            <tr>
              <td>Subject 2</td>
              <td><?php $s2=$row2['subject2'] ;echo"$s2"; ?></td>
            </tr>
            <tr>
              <td>Subject 3</td>
              <td><?php $s3=$row2['subject3'] ;echo"$s3"; ?></td>
            </tr>
            <tr>
              <td>Subject 4</td>
              <td><?php $s4=$row2['subject4'] ;echo"$s4"; ?>;</td>
            </tr>
            <tr>
              <td>Subject 5</td>
              <td><?php $s5=$row2['subject5'] ;echo"$s5"; ?></td>
            </tr>
            <tr>
              <td>Subject 6</td>
              <td><?php $s6=$row2['subject6'] ;echo"$s6"; ?></td>
            </tr>
            <tr>
              <td>Subject 7</td>
              <td><?php $s7=$row2['subject7'] ;echo"$s7"; ?></td>
            </tr>
            <tr>
              <td>Subject 8</td>
              <td><?php $s8=$row2['subject8'] ;echo"$s8"; ?></td>
            </tr>
          </table>
          <p>&nbsp;</p>
		        <?php
}
else
echo"Sorry,Your attendance haven't been uploaded yet";
?>
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
echo "<META HTTP-EQUIV=\"refresh\" CONTENT=\"0 ; url=index.php\" >";
}
?>
        