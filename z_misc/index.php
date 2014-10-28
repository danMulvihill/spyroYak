<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>An HTML Template</title>
		<style>
			p{margin:15px 0}
			#wrapper{
				min-width:600px;
				max-width:1100px;
				float:left;
				margin:0 auto; 
				border:1px solid;
				}
			header{padding:5px 10px;color:#fff;background:#77f;}
			nav.top ul{overflow:hidden}
			nav.top li{float:left;list-style:none;}
			nav.top a{
				display:block;
				padding:0 6px;
				text-decoration:none;
				font:18px Exo, helveica, arial, sans-serif;
				font-weight:400;
				color:#999
				}
			nav.top li+li a {border-left:1px solid #aaa;}
			nav.top a:hover{color:#555;}
			div#threecolwrap{float:left;width:100%}
			div#twocolwrap{float:left;width:100%;margin-right:-250px;}
			nav.side{
				width:125px;
				float:left;
				padding:20px 0;
				}
			nav.side>*{margin:0 10px;}
			nav.side ul {
				border:1px solid #f00;
				border-radius:3px;
				padding:5px 10px 3px;
				}
			nav.side li{list-style-type:none; padding:3px 10px;}
			nav.side li+li{border-top:1px solid #f00;}
			nav.side a {
				text-decoration:none;  
				font:14px Exo, helveica, arial, sans-serif;
				font-weight:400;
				color:#000;
				}
			nav.side a:hover{color:#069; text-deocoration:underline;}
			article{
				width:auto;
				margin-left:0px;
				margin-right:0px;
				background:#ffed83;
				padding:20px 0
				}
			article>*{margin:0 20px;}
			aside{width:250px;float:left;color:#fff;background:#3f7ccf;padding:20px 0}
			aside>*{margin:0 10px}
			footer{clear:both;color:#fff;background:#111}
		</style>
	</head>

	<body>
		<div id="wrapper">
			<header>
				<h1>Daniel Mulvihill </h1>
			</header>
			
			<nav class="top">
			<ul>
			<li><a href="#">Resume</a></li>
			<li><a href="http://spyroyak.com/web">Blog</a></li>
			</ul>
			</nav>
			<!--
			<div id="threecolwrap">
			<div id="twocolwrap">
			<nav class="side">
			<ul>
			<li><a href="#">Resume</a></li>
			<li><a href="http://spyroyak.com/web">Blog</a></li>
			-->
			</ul>
			</nav>
			<article>
			<h4>About me</h4><br>
				<p>I am pursuing a certificate in web development from the New York University School of 
				Continuing and Professional Studies. My skills and interests include HTML5, CSS, 
				JavaScript (&amp; jQuery), PHP, MySQL, and Content Management Systems 
				(specifically WP and Drupal).</p>
<br>
				<p>I am currently working on a couple websites, one redesign and one I created from the ground up 
				(with a little help from WordPress CMS):
</p>
<br>
<ul>
	<li><a href="http://www.uucwc.org/">UUCWC</a> had a website built with a WordPress content management system. I made some enhancements by modifying a rather boring Mimbo theme. I added some CSS3 features and a JavaScript slide show, and made the site responsive. This is still a work-in-progress as I hope to apply more tricks I am currently learning.</li>
	<br><li><a href="http://twistedrootchiro.com/">Twisted Root Chiropractic</a> is a new business in need of a Website.  I encouraged the owner to purchase server space from WestHost hosting company, uploaded the WP CMS, and built the site using and modifying the default Twenty Twelve theme. This is also a work-in-progress as I plan to add my CSS and JS modifications.</li>
</ul>
<br><p>Before web development, I have previously worked as a librarian, program manager for a dental school, 
and a biochemical lab assistant at the University of Texas. I have a Master's degree in Library and Information 
Science from the University of Pittsburgh, I've studied biology at the University of Texas in Austin, and I have 
a B.A. from the University of Wisconsin-Madison.
</p>
<p><br>
If you interested in hiring me, need some assistance, or just have a question, please contact me via 
linked-in: <a href="http://www.linkedin.com/pub/dan-mulvihill/4/565/4a4">www.linkedin.com/pub/dan-mulvihill/4/565/4a4</a>
</p>



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
echo "Number of seconds until the end of the Unix Epoch: <span style=\"color:red\">";
echo 2147483648-$timestamp;
echo "</span>. <br><strong>Don't say you haven't been warned!</strong></p>";


	echo '<p>For this page, I am using PHP version '.PHP_VERSION;
echo ' running on '.PHP_OS.'</p>';

	?>
</div>
			
			</article>
			</div> <!--end twocolwrap-->
<!--			<aside>
<pre>
&lt;!DOCTYPE html&gt;
&lt;html&gt;
 &lt;head&gt;
  &lt;meta charset="utf-8"&gt;
  &lt;title&gt;An HTML Template&lt;/title&gt;
 &lt;/head&gt;
 &lt;body&gt;
  &lt;!-- body content goes here --&gt;
 &lt;/body&gt;
&lt;/html&gt;
</pre>
			</aside> 
-->
			</div> <!--end threecolwrap-->
			<footer>
				<p>last updated 2013 by Daniel Mulvihill, web developer</p>
			</footer>
		</div> <!--end wrapper-->
	</body>
</html>
			
	