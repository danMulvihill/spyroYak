<h1>About this Site</h1>
<p> This Web site contains some interesting and maybe useful articles about web development, Internet issues, computers, and other related and unrelated topics that catch my interest. I update it irregularly. It was originally created to brag about my talents and skills, and as a platform for me to learn about web development while pursuing a certificate at New York University. <a href="http://spyroyak.com/astro/index.php?parent_id=10&region=All">Exploring the Solar System</a> utilizes PHP and a MySql database to provide and organize information about planets, moons, and space exploration. It also have a quiz created with JavaScript. It is currently incomplete but I tend to work on it and add more data from time to time. </p>
<p>For more information about me, see my <a href="http://www.linkedin.com/pub/dan-mulvihill/4/565/4a4">linked-in profile</a>.</p>
<div id="PHP">
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
	echo "Number of seconds until the end of the Unix Epoch: <span style=\"color:red\">";
	echo 2147483648-$timestamp;
	echo "</span>. <br><strong>Don't say you haven't been warned!</strong></p>";

	echo '<p>For this page, I am using PHP version '.PHP_VERSION;
	echo ' running on '.PHP_OS.'</p>';

	?>
</div>
			