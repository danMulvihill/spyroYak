<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
                <meta name="viewport" content="initial-scale=1, maximum-scale=1">
		<title>spyroYak: web development and other things</title>
		<link rel="stylesheet" href="css/main.css">
		<script src="scripts/jquery-1.11.1.min.js" ></script>
		<!--<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
		-->
		<script src="scripts/jquery-ui.min.js"></script>
		<script src="scripts/mainSpyroYak.js"></script>
	</head>
    <body>
		<div id="wrapper">
			<header>
	            <div id='s'><h2>S</h2></div>
	            <div id='p'><h2>p</h2></div>
	            <div id='y'><h2>y</h2></div>
	            <div id='r'><h2>r</h2></div>
	            <div id='o'><h2>o</h2></div>
	            <div id='y2'><h2>Y</h2></div>
	            <div id='a'><h2>a</h2></div>
	            <div id='k'><h2>k</h2></div>
				<h3>Web development, computers & other fun stuff</h3>
			</header>
			
			<nav class="top">
			<ul>
                <li><a id="menuAbout" href="#about">About this site</a></li>
               <li><a  href="#unicodeCharts">Unicode Charts</a></li>
                <li><a id="menuUnicode" href="#jQuery">jQuery</a></li>
				<li><a href="http://spyroyak.com/astro/mobile.php">Explore the Solar System</a></li>
			
			</ul>
			</nav>
			<!--
			<div id="threecolwrap">
			<div id="twocolwrap">
			<nav class="side">
			<ul>
				<li><a href="http://spyroyak.com/web">Blog</a></li>			
				<li><a href="http://spyroyak.com/astro/index.php?parent_id=10&region=All">Explore the Solar System</a></li>
			-->
			</ul>
			</nav>
			<div id="timezones"><?php include("includes/timezones.php") ?></div>
			<div id="unicodeCharts"><?php include("includes/unicodeList.php") ?></div>
			<article id="jQuery" style="clear:left"><?php include("includes/jQuery.php") ?></article>
			
			<article id="about" ><?php include("includes/about.php") ?></article>
			<!--
			</div> 
						<aside>
				<pre>
				&lt;!DOCTYPE html&gt;
				&lt;html&gt;
				 &lt;head&gt;
				  &lt;meta charset="utf-8"&gt;
				  &lt;title&gt;An HTML Template&lt;/title&gt;
				 &lt;/head&gt;
				 &lt;body&gt;
				  &lt;&gt;
				 &lt;/body&gt;
				&lt;/html&gt;
				</pre>
							</aside> 

			</div> <-->
			<footer>
				<p>last updated 2014 by Daniel Mulvihill</p>
			</footer>
		</div> <!--end wrapper-->
	</body>
</html>

