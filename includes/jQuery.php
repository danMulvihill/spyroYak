<article id="jQuery">
<h1>jQuery</h1>
<p>jQuery is a JavaScript 'library', which is really just a bunch of JavaScript code in an external .js file. All you need to do in order to take full advantage of it's awesome power is a relatively easy two step process (one easy step and one not so easy step but not as difficult as learning how to program).</p>
<h4>Link the jQuery script: the easy part</h4>
<p>Link it to your web page as you would for any external JavaScript file by putting a script tag (element) in the head of your html document with the src attribute pointing to the jQuery file. You can either download the jQuery file to your computer (or upload it to your server) or link to a version hosted at a content distribution network (CDN).
</p>
<p><strong>Download it yourself</strong> at <a href="http://docs.jquery.com/Downloading_jQuery">docs.jquery.com/Downloading_jQuery</a>
</p>
<p>The jQuery file comes in two version:
<ul>
	<li><span style="line-height: 13px;">The <strong>uncompressed</strong> file is very large (over 200 KB). The version includes lots of comments that explain what's going on for someone well-versed in JavaScript.</span></li>
	<li>The<strong> minified</strong> version is much smaller; all the comments and unnecessary spaces, tabs, and line-breaks that computers don't read are removed to allow for faster downloading, , but it's much harder for humans to read. Most people use this version, unless you are serious programmer and plan to manipulate and play around with the code.</li>
</ul></p>

<p>So if you put the file in a folder labeled 'scripts', the link tag in the head of your html should look like:
<br>
<code>&lt;script src="scripts/jquery-1.9.1.min.js"&gt;&lt;/script&gt;</code>
<br>
(note that as of this writing, the latest version is 1.9.1; there may be a later version by the time you read this)
</p>
<p>or you can put it in the same directory as your index file:
<br>
<code>&lt;script src="jquery-1.9.1.min.js"&gt;&lt;/script&gt;</code>
</p>
<p>Some people like to put all their html files in one folder and script files in another. If that's the case, you would go up the hierarchy of files to the common parent and back down in to the script folder and your link would something like this:
<br>
<code>&lt;script src="../scripts/jquery-1.9.1.min.js"&gt;&lt;/script&gt;</code>
</p>
<p><strong>Link it to a content distribution network (CDN)</strong>. This will save your web server a few milliseconds. CDNs also have servers located around the world, so if your visitor is closer to one of the CDN's server, she or he will get it faster, or the file may already be in the user's browser's cache if they visited another site using the CDN previously.
<ul>
	<li><span style="line-height: 13px;">To use<strong> jQuery</strong>'s own CDN, put this code in the head of your html doc:<br>
<code>&lt;script src="http://code<wbr>.jquery.com/<wbr>jquery-1.9.1.js"<wbr>&gt;&lt;/<wbr>script&gt;</code></span></li>
	<li><span style="line-height: 13px;">or use<strong> Microsoft</strong>'s version:<br>
<code>&lt;script src="http://ajax.<wbr>aspnetcdn.com/<wbr>ajax/<wbr>jQuery/<wbr>jquery-1.9.1.min.js<wbr>"&gt;&lt;/script&gt;</code> </span></li>
	<li>There is also one from<strong> Google</strong>:<br>
<code>&lt;script src=<wbr>"http://ajax.googleapis.com/<wbr>ajax/<wbr>libs/<wbr>jquery/<wbr>1.9.1/<wbr>jquery.min.js"<wbr>&gt;&lt;/script&gt;</code></li>
</ul></o>
<p>Make sure you put the script after any CSS stylesheets because jQuery often references styles, and before any other JavaScript programming that references jQuery. A good rule to remember is to put scripts before the end of the head:
<ol>
	<li>&lt;head&gt;</li>
	<li>title tag, meta tags, and other boring stuff</li>
	<li><span style="line-height: 13px;">CSS links</span></li>
	<li>jQuery link</li>
	<li>other scripts</li>
	<li>&lt;/head&gt;</li>
</ol></p>
<h4>Write the jQuery scripts (the little more challenging part):</h4>
<p>After you have your link, you are ready to start adding your scripts. If you want the script to run as the page loads, use the following built-in jQuery function:<br>
<code><pre>
&lt;script&gt;
$(document).ready(function(){
//your programming goes here
});
&lt;/script&gt;
</pre></code>
</p>
<p>Or you can use a shortcut method:<br>
<code><pre>
&lt;script&gt;
$(function(){
//your programming goes here
});
&lt;/script&gt;
</pre></code>
</p>
<p>Most of the rest is really just a matter of combining "selectors" with jQuery functions or finding the script you need and customizing. You can find a really good tutorial on <a href="http://www.codecademy.com/tracks/jquery">jQuery at Code Academy</a>. Although some people manage to get away with using jQuery before learning vanilla JavaScript, the real power of jQuery is best harnessed with at least a working knowledge of JavaScript.
</p>
<p>Once you are ready to do some cool stuff like <a title="Animate a div" href="http://api.jquery.com/animate/" target="_blank">animating a div</a>, <a href="http://api.jquery.com/fadeIn/" target="_blank">fading an image into view</a>, making a menu drop down when a user moves over a link, go the jQuery's <a title="jQuery's api" href="http://<wbr>api.jquery.com/" target="_blank">API library</a> or <a title="Plugin Reigstry" href="http://plugins.jquery.com/" target="_blank">plugin registry</a> for more. In addition to <a href="http://jquery.com/" target="_blank">jQuery</a>'s site, the site <a href="http://css-tricks.com/" target="_blank">CSS-tricks</a> is also good source for prepared code, tips, and tutorials.</p>
</article>