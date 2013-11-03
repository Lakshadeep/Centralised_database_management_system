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
		echo "<META HTTP-EQUIV=\"refresh\" CONTENT=\"0 ; url=location.php?msg=$msg\" >";
	}
	else
	{
		//echo $numrows;
		$_SESSION['user']=$roll_num;
		//echo $_SESSION['user'];
		//header("Location:viewContact.php");
		echo "<META HTTP-EQUIV=\"refresh\" CONTENT=\"1 ; url=locationlog.php\" >";
		
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
      <h4><strong>
        <?php $title=$row['title']; echo"$title"; ?>
      </strong></h4>
      <h5>
        <?php $date=$row['date'];echo"$date"; ?>
      </h5>
      <p>
        <?php $short_desc=$row['short_desc'];echo"$short_desc"; ?>
        <br />
        <a href="readmorehome.php">Read more</a></p>
    </div>
    <?php
}
?>
    
    
  </div>
  <div class="content">
  <p class="center" style="color:#0ff"><?php echo $msg;?></p>
    <h3 align="center"> About Location</h3>
     <span class="center"><img src="images/graphic.jpg" alt="example graphic" /></span>
    <p> Ponda  is a city and a municipal council in North Goa district in the Indian state of Goa. It is located in the central part of Goa. Ponda city lies about 28 km south-east of Panaji and 17 km north-east of Margao and is also the capital of Ponda Taluka. Ponda is well connected by road to the Panaji (Capital of Goa) and main railway junction of Margao. It is the industrial centre of the state of Goa with many large factories and industrial estates located there. Ponda also is the fastest growing city in Goa. Ponda is popularly known as to be the " Cultural Capital of Goa".
Farmagudi is located on a plateau 3 km from the main Ponda City on the way towards Panaji.<br ></p>
 <span class="center"><img src="images/graphic.jpg" alt="example graphic" /></span>
<p>Here is the location through Wikimapia <a href="http://wikimapia.org/#lat=15.4230274&lon=73.980681&z=18&l=0&m=s&v=9">Click Here</a> <br >
<p>The approximate location through google mapmaker is here.  
Here is a map of Goa. (From the Internet, locally cached with thanks to the original creator).<br >
 
About goa
From Wikipaedia ...
Goa (Konkani: गोंय) is India's smallest state by area and the fourth smallest by population. Located on India's west coast in the region known as the Konkan, it is bounded by the state of Maharashtra to the north, and by Karnataka to the east and south, while the Arabian Sea forms its western coast.Goa encompasses an area of 3,702 km² (1,430 sq mile). It lies between the latitudes 14°53′54″ N and 15°40′00″ N and longitudes 73°40′33″ E and 74°20′13″ E.<br >
Panaji is the state's capital, while Vasco da Gama is the largest city. The historic city of Margao still exhibits the cultural influence of the Portuguese.Renowned for its beaches, places of worship and world heritage architecture, Goa is visited by a large numbers of international and domestic tourists each year. It also has rich flora and fauna, owing to its location on the Western Ghats range, which is classified as a biodiversity hotspot.<br >
 
The name Goa came to European languages from the Portuguese. In ancient literature, Goa was known by many names such as Gomanta, Gomanchala, Gopakapattam, Gopakapuri, Govapuri, Govem, and Gomantak.<br >
Goa's main rivers are the Mandovi, the Zuari, the Terekhol, Chapora River and the Sal. The Mormugao harbour on the mouth of the River Zuari is one of the best natural harbours in South Asia. <br >
Goa, being in the tropical zone and near the Arabian Sea, has a hot and humid climate for most of the year. The month of May is the hottest, seeing day temperatures of over 35 °C (95 °F) coupled with high humidity. The monsoon rains arrive by early June and provide a much needed respite from the heat. Most of Goa's annual rainfall is received through the monsoons which last till late September.Goa has a short winter season between mid-December and February. These months are marked by nights of around 20 °C (68 °F) and days of around 29 °C (84 °F) with moderate amounts of humidity. Further inland, due to altitudinal gradation, the nights are a few degrees cooler<br >
The state is divided into two districts: North Goa and South Goa. Panaji is the headquarters of the North Goa district and Margao of the south district. Each district is governed by a district collector, an administrator appointed by the Indian government.The districts are further divided into eleven talukas – Talukas of North Goa are Bardez, Bicholim, Pernem, Ponda, Sattari and Tiswadi, the talukas of South Goa are Canacona, Mormugao, Quepem, Salcete and Sanguem. Headquarters of the respective talukas are Mapusa, Bicholim, Pernem, Ponda, Valpoy, Panjim, Chaudi, Vasco, Quepem, Margao and Sanguem.Goa's major cities include Vasco, Margao, Mormugao, Panaji and Mapusa. The region connecting the first four cities is considered a de facto conurbation, or a more or less continuous urban area.<br >
A native of Goa is called a Goan in English,Goenkar (गोंयकार) in Konkani, Govekar (गोवेकर ) in Marathi, Goês (male) or Goesa (female) in Portuguese.
Goa's sole airport, the Dabolim Airport, is both a military and civilian airport catering to domestic and international airlines that stop en route to other Indian destinations. The airport also handles a large number of chartered flights. Goa receives international flights from Dubai, Sharjah and Kuwait in the Middle East and from Britain, Germany and Russia during the charter flight tourist season. Dabolim Airport is serviced by the following carriers – Air India, Indian Airlines, Kingfisher Airlines, Go Air, SpiceJet, Jet Airways besides Charter flights from the UK, Russia, Germany operated by Thomas Cook, Condor, Monarch Airlines etc.<br >
Goa's public transport largely consists of privately operated buses linking the major towns to rural areas. Government-run buses, maintained by the Kadamba Transport Corporation, links both major routes (like the Panjim–Margao route) and some remote parts of the state. In large towns such as Panjim and Margao, intra-city buses ply. However, residents depend heavily on their own transport, usually motorised two-wheelers. <br >
Goa has two National Highways passing through it. NH-17 runs along India's west coast and links Goa to Mumbai in the north and Mangalore to the south. NH-4A running across the state connects the capital Panjim to Belgaum in east, linking Goa to cities in the Deccan. The NH-17A connects NH-17 to Mormugao Harbour from Cortalim, and the new NH-17B, is a four lane highway connecting Mormugao Harbour to NH-17 at another location, Verna, via Dabolim airport. Goa has a total of 224 km (139 mi) of National highway, 232 km (144 mi) of state highway and 815 km of district highway.<br >
Hired forms of transport include unmetered taxis, and, in urban areas, auto rickshaws. A unique form of transport in Goa is the Motorcycle taxi, operated by drivers who are locally called "pilots". These vehicles transport a single pillion rider, at fares that are usually negotiated.<br >
 
River crossings in Goa are serviced by flat-bottomed ferry boats, operated by the river navigation departments. Goa has two rail lines—one run by the South Western Railway and the other by the Konkan Railway. The line run by the South Western Railway was built during the colonial era linking the port town of Vasco da Gama, Goa with Hubli, Karnataka via Margao. The Konkan Railway line, which was built during the 1990s, runs parallel to the coast connecting major cities on the western coast.<br >
The Mormugao harbour near the city of Vasco handles mineral ore, petroleum, coal and international containers. Much of the shipments consist of minerals and ores from Goa's hinterland. Panjim, which is situated on the banks of the Mandovi, also has a minor port, which used to handle passenger steamers between Goa and Mumbai till the late 1980s. There was also a short-lived catamaran service linking Mumbai and Panaji operated by Damania Shipping in the 1990s.<br >
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
