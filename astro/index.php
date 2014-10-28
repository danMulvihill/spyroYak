<?php
require 'scripts/database_connection.php';
$object_id=1;
?>

<html>
	<head>
	<link rel="stylesheet" type="text/css" href="explore.css" />
	<script type="text/javascript" src="explore.js"></script>
		<title>Exploring the Solar System</title>

</head>

<body onload="run(); timer=setInterval('run()',interval);">
	<div id="nav2">
		<ul>
		<li style="background-color:#ddddff;font-size:12px">Explore</li>
		<li><a href="explore2.html">Quiz and other Fun Stuff</a></li>
		<li><a href="#">About this Website</a></li>
		</ul>
	</div>
		
	<div id="nav">
		<ul>
		<li><a href="index.php?parent_id=10&region=All">Planets, Asteriods, and Comets</a></li>
			<ul>
			<li><a href="index.php?parent_id=10&region=Inner">Small Rocky Planets</a></li>
			<li><a href="index.php?parent_id=10&region=Asteroid">Asteroid Belt</a></li>
			<li><a href="index.php?parent_id=10&region=Outer">Gasous Giants</a></li>
			<li><a href="index.php?parent_id=10&region=Kuiper">Kuiper Belt</a></li>
			<li><a href="index.php?parent_id=10&region=Oort">Oort Cloud</a></li>
			</ul>

		<li><a href="index.php?parent_id=0&region=Satellite">Moons and other Satellites</a></li>
			<ul>
			<li><a href="index.php?parent_id=3&region=Satellite">of Earth</a></li>
			<li><a href="index.php?parent_id=4&region=Satellite">of Mars</a></li> 
			<li><a href="index.php?parent_id=5&region=Satellite">of Jupiter</a></li>
			<li><a href="index.php?parent_id=6&region=Satellite">of Saturn</a></li>
			<li><a href="index.php?parent_id=7&region=Satellite">of Uranus</a></li>
			<li><a href="index.php?parent_id=8&region=Satellite">of Neptune</a></li>
			<li><a href="index.php?parent_id=9&region=Satellite">of Pluto</a></li>
			</ul>
		<!--<li><a href="#observers">Observers and Visitors</a></li>-->
			
		</ul>
	</div>

	<div id="header">
		<h1 style="text-align:center">Exploring the Solar System</h1>
		<p>Our solar system consist of planets, asteroids, comets, and
		other objects revolving around the Sun. Some of these objects have moons that
		revolving around them. Much of what we know about the solar
		system (and beyond) comes from information gathered from telescopes, probes, 
		and other instruments designed and built by Earthlings. Although space exploration has a long history, 
		recent advance in technology have lead to a 'golden age' of discovery in the past fifty years or so. Explore 
		this site to learn a little about these instruments, the Earthling who built and used them, and the planets and other 
		revolving objects they explore.</p>
	</div>
		
	<div id="content" style="display:block">

	<div id="mainContent">
	
		<div id="planets">
		
		
<?php
$region='%';
$parent='%';
@$region=$_REQUEST['region'];
if ($region=='All') $region='%';
@$parent_id=$_GET['parent_id'];
if ($parent_id=='0') $parent_id='%';

	//Build a SELECT query
$query = "SELECT c.object_id, c.object_name, c.object_description, c.distance_from_parent, c.diameter, c.startdate, c.deathdate, c.region, c.parent_id, p.object_name
 FROM objects c LEFT JOIN objects p
 ON c.object_id=p.object_id
 WHERE c.parent_id LIKE '$parent_id' and c.region LIKE '%$region%'
 ORDER by c.distance_from_parent";
 
$cursor=mysql_query($query);
if (!$cursor)
	die ('Could not execute query: '.mysql_error($connect));
$num=mysql_num_rows($cursor);

		$i=0;
		
	while ($i<$num){
			//variables for metric conversions and if statement bypasses
		$dfp=mysql_result($cursor,$i, "c.distance_from_parent");
		$dia=mysql_result($cursor,$i, "c.diameter");
		$pid=mysql_result($cursor,$i, "c.parent_id");
		$reg=mysql_result($cursor,$i, "c.region");

	print "<h3>";
	echo mysql_result($cursor,$i,"c.object_name");
	print "</h3>";
	print "<p><strong>Distance from ";
	print mysql_result($cursor,$i,"c.parent_name"); 

	print "</strong> ";
	if ($reg=='Satellite (Ring)') {
	echo number_format($dfp)." to ";
	echo number_format($dfp+$dia)." km";}
	else echo number_format($dfp)." km (".number_format(ROUND($dfp*0.62))." miles)";
	print "<br />";
	if ($pid=='10') print '<strong>Distance in Astronomical Units (A.U.):</strong> '.ROUND($dfp/149600000,1).'<br />';
	if ($reg=='Satellite (Ring)') print "<strong>Width of ring: </strong>";
	else print "<strong>Diameter:</strong> ";
	echo number_format(mysql_result($cursor,$i,"c.diameter"));
	print " km (";
	echo ROUND($dia*0.62)." miles)";
	print "<p>";
	echo mysql_result($cursor,$i,"c.object_description");
	print"</p>";
	
	$i++;
	}
mysql_free_result($cursor);
		

?>	
			</div>	
	<br />
	<span style="font-size:10px">1 A.U.(astronomical unit)=93 million miles (the average distance between the Sun and Earth.)</span>	
	<br />	


<!--

	<div id="observers">


				<h2>Chronological list of important discoveries and observations</h2>
				
<?php
	//Build a SELECT query
$query2 = "SELECT observers.observer_name, observers.agency, interactions.interaction_description, interactions.date, objects.object_name
FROM observers, interactions, objects
WHERE observers.observer_id = interactions.observer_id  AND interactions.object_id = objects.object_id
ORDER by interactions.date";
$cursor=mysql_query($query2);
if (!$cursor)
	die ('Could not execute query: '.mysql_error($connect));
$num=mysql_numrows($cursor);

		$i=0;
		while ($i<$num){
	
	print "<h4>";
	echo mysql_result($cursor,$i,"interactions.date");
	print ": ";
	echo mysql_result($cursor,$i,"observers.observer_name");
	print " (";
	echo mysql_result($cursor,$i,"observers.agency");
	print ") observes ".mysql_result($cursor,$i,"objects.object_name")."</h4><p> ";
	echo mysql_result($cursor,$i,"interactions.interaction_description");
	print"</p>";
	
	$i++;
	}
mysql_free_result($cursor);
?>	
				
		</div>

-->
		</div>
		
<div id="content2">
		
		<div id=imageShow style="display:block">
			
			<div id=image>
			<img name=slideShow>
			<span id=imgname></span>
			</div>
			
			<div id=controls  style='border-style:solid; border-width:2px; border-color:#ddddff;'>
			
			<input type=button id=start   value="  Start  " onClick="run(); timer=setInterval('run()',interval);">
			<input type=button id=stop    value="  Stop  "  onClick="clearInterval(timer);"><input type=button id=first   value=" |< "      onClick="first()">
			<input type=button id=back    value=" < "       onClick="back()">
			<input type=button id=forward value=" > "       onClick="forward()">
			<input type=button id=last    value=" >| "      onClick="last()">
			
			</div>
		
			
		</div>	
		</div>
		<br />
		<br />
<div id="content3">

		<div id=table style="display:none">
		</div>




</div>
		
	</div>
		
	

</body>
</html>