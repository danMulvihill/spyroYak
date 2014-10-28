<!doctype html>
<html>
<title>SpyroYak</title>
<body>
<div>
<h1>SpyroYak</h1>
<h2>The homepage of Daniel Mulvihill in Yardley, PA</h2>
<h3>Welcome to my website!</h3>
This page once contained my resume, but you can now go to <a href="http://www.linkedin.com/profile/view?id=13321852&trk=nav_responsive_tab_profile">my Linkedin page</a> to see my background.<br>
Befriend me on <a href="https://www.facebook.com/daniel.mulvihill.758">Facebook</a> or see my <a href="/wsy">Wordpress section</a> for other fun stuff.
</div>



<div>
	<h4>Some interesting things you probably don't care about:</h4>
	<p>My server is located in 
	<?php $def=date_default_timezone_get();
	echo "$def "; 

$now=date("g:i:s A");
echo "where the time is currently $now<br>";
date_default_timezone_set("UTC");
$def=date_default_timezone_get();
$now=date("l, F jS, g:i:s A");
echo 'Current date/time in Greenwich, England: '.$now.'<br>';

$timestamp=time();
echo "Number of seconds since January 1st, 1970:<span style=\"color:green\"> $timestamp</span> <br>";
echo "Number of seconds until the end of the Unix Epoch (32-bit signed): <span style=\"color:red\">";
echo 2147483648-$timestamp;
echo "</span>. <strong>Don't say you haven't been warned!</strong></p>";


	echo '<p>For this page, I am using PHP version '.PHP_VERSION;
echo ' running on '.PHP_OS.'</p>';

	?>
</div>
<div>
<form action="scripts/sayHelloWeb.php" method="POST">
	<p>
		<i>Enter your name for a friendly greeting: </i> <input type="text" name="name" size="20" /> <input type="submit" value="say Hello" /></p>
</form>
</div>

<div>
<!--
<h1>SQL Connection test</h1>
<form action="../cgi-bin/connect.php" method="POST">
	<fieldset class="center">
		<input type="submit" value="Connect to MySQL" />
</fieldset>
<form>

</div>
-->
<div>
<?php 
/*
if(isset($_GET['cookiecheck'])){
	if(isset($_COOKIE['testcookie'])){
		print "Cookies are enabled";
	}else{
		print "Cookies are not enabled";
	}
}else{
	setcookies('testcookie', "testvalue");
	die(header("Location: ".$_SERVER['PHP_SELF']."?cookiecheck=1"));
}
*/
 ?>
</div>
<div>
<?php
session_start();

?>


</div>
</body>