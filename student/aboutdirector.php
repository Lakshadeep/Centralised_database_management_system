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
		echo "<META HTTP-EQUIV=\"refresh\" CONTENT=\"0 ; url=aboutdirector.php?msg=$msg\" >";
	}
	else
	{
		//echo $numrows;
		$_SESSION['user']=$roll_num;
		//echo $_SESSION['user'];
		//header("Location:viewContact.php");
		echo "<META HTTP-EQUIV=\"refresh\" CONTENT=\"1 ; url=aboutdirectorlog.php\" >";
		
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
        </div>
        <?php
}
?>
        
      <div class="content">
      <p class="center" style="color:#0ff"><?php echo $msg;?></p>
        <h1 align="left" style="color:#0CF">Dr.G.R.C Reddy  </h1>
         <span class="center"><img src="images/director.JPG" alt="example graphic" /></span>
        <p>Dr.G.R.C.Reddy Graduated from Osmania University with majors in maths, physics and chemistry. He obtained his MSc.(Technology) in Engineering Physics and PhD.(Optical Information Processing) from Faculty of Engineering and Technology, NIT(REC) Warangal. He joined on the faculty of the then REC Warangal and now NIT Warangal in the year 1979 and became full professor in 1995 in the Department of Physics.<br><br><br>
Dr. Reddy`s specialization is Photonics. He was an investigator in a number of research projects sanctioned by CSIR, MHRD, DRDO etc. He published over 80 research papers in various National and International journals / Conference proceedings. He is a specialist in Optical Information Processing. His present interests include ‘Optics applications in Nano-Science and Technology’ and ‘Non-Linear Optics’.<br><br><br>
He has guided a number of MSc. (Technology) students for their dissertation thesis for the award of their degree and a few PhD students.
He has attended several National and International conferences and delivered lectures in various fora both in India and Abroad. <br><br><br>
He himself is instrumental in conducting quite a few National and International conferences at NIT Warangal as well as at NIT Calicut. He is a widely travelled person both east and west.<br><br>
He was on the high level delegation of Heads of Technical Institutions lead by Secretary, MHRD, Govt. of India in the year 2008 which visited a number of world famous Universities like Stanford Univ., Univ. of California, Berkley etc which boast a large number of Nobel Laureates on their faculty to study the Technical education in their country.<br><br><br>
Earlier he was Director of NIT Calicut during 2005 – 2010. During his tenure he started a number of post graduate as well as undergraduate programmes. During this period the PhD students strength alone rose to more than 250 from a mere hand full when he took over. Research funding from external sources rose from a mere couple of lakhs to more than 12 crores by the time he demitted his office. During his tenure he could attract quite a few world class researchers from abroad to be on the faculty of NIT Calicut. <br><br><br>
The infrastructure was tripled and several crores worth of modern equipment was added. In a nutshell Dr. Reddy made untiring efforts to turn NIT Calicut from a mere ordinary engineering college to an excellent teaching and research ‘National Institute’.<br><br>
Dr. Reddy served on several National committees constituted by Ministry of Human Resource Development (MHRD), Govt. of India which include faculty restructure committee for NITs, pay anomalies committee, AIEEE exam reforms committee etc. In fact their recommendations resulted in change in the pattern of question paper as well as conducting the AIEEE examination online.<br><br>
Dr. Reddy has taken over the charge as Director, NIT Goa on 19/10/2011. He takes it as a great challenge to build this newly started NIT as an Institution of ‘National Importance’. <br><br>
He invites all those academics willing to contribute to the growth to associate themselves with this Institution.                  
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
