
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
		echo "<META HTTP-EQUIV=\"refresh\" CONTENT=\"0 ; url=index.php?msg=$msg\" >";
	}
	else
	{
		//echo $numrows;
		$_SESSION['user']=$roll_num;
		//echo $_SESSION['user'];
		//header("Location:viewContact.php");
		echo "<META HTTP-EQUIV=\"refresh\" CONTENT=\"1 ; url=indexhome.php\" >";
		
	}
}
?>

<head>
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
          <p><?php $short_desc=$row['short_desc'];echo"$short_desc"; ?><br /><a href="readmorehome.php">Read more</a></p>
        </div>
        
        <div class="sidebar">
          <h3>Our Partners</h3>
            <span class="center"><img src="images/20040816.jpg" alt="example graphic" /></span>
            <span class="center"><img src="images/logo1.jpg" alt="example graphic" /></span>
             <span class="center"><img src="images/spie.gif" alt="example graphic" /></span>
          
        </div>
        
      </div>
        <?php
}
?>
       
      <div class="content">
      <p class="center" style="color:#0ff"><?php echo $msg;?></p>
        <h1 align="center" style="color:#0CF;">Welcome to National Institute of Technology                     Goa </h1>
        <span class="left"><img src="images/nit goa logo 3.JPG" alt="example graphic" /></span>
        
        <p>The National Institutes of Technology are premier institutions of technology in India offering academic programs at undergraduate, post graduate and doctoral levels. Originally started as the Regional Engineering Colleges (RECs), they have grown in stature and are today rated among the top technological institutions of the country. In 2002, while granting them autonomy, they were taken under the ambit of Centrally Funded Technical Institutions of Ministry of Human Resource Development (MHRD) and renamed as National Institutes of Technology. Further, under the NIT Act 2007, they were elevated to the status of Institutes of National Importance.<br><br> 


Students are admitted to B. Tech programs in the NITs on the basis of ranks obtained in the All India Engineering Entrance Examination (AIEEE). While 50% of the seats are reserved for students of the state in which the particular NIT is located, the remaining 50% of seats are open for students from across the country on the basis of merit. Reservation of seats is followed as per Government of India norms.<br><br>
In 2009, MHRD vide its Order No. F. 23-13-2009-TS-III dated 30th October and 3rd March 2010 decided to set up 10 new NITs during the 11th Five Year Plan. The National Institute of Technology, Goa is one such new NIT. Initially this Institute was looked after and mentored by NITK Surathkal.50% of the seats in this Institute are reserved for State of Goa.<br><br> 

At present The NITGoa is temporarily accommodated and functioning in the Goa Engineering College (GEC)  Campus located at Farmagudi, Goa. Policy of student admissions to the new NITs is same as that for the existing NITs i.e. through AIEEE rank. The first batch of students has been admitted and academic activities of NITGoa started from 2010-11 session when the first batch was admitted.<br><br>

To begin with, MHRD allocated an annual intake of 90 students to NIT, Goa, comprising of 30 students each in the following B. Tech programmes:
<br><br>
    Computer Science and Engineering<br>
    Electronics and Communication Engineering<br>
    Electrical and Electronics Engineering<br><br>
In addition, 6 seats have been allocated under the Direct Admission for Students Abroad (DASA) scheme.  <br>             
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
