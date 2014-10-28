<script>
//document.getElementById("addLocs").onclick=function(){
//	alert("hello");
//}
function calcTime(offset){
	d=new Date();
	hereday=d.getDate();
	utc=d.getTime()+(d.getTimezoneOffset()*60000);
	nd=new Date(utc+(3600000*offset));
	newday=nd.getDate();
	thehour=nd.getHours();
	//prints the current date for the timezone the user is locationed in, otherwise calculates today, tommorow or yesterday for other time zones
	if (d.getHours()==thehour&&d.getMinutes()==nd.getMinutes()) theday="<span style='color:blue'>"+(nd.getMonth()+1)+"/"+nd.getDate()+"/"+nd.getFullYear()+"</span>";
	else if(newday==hereday) theday="Today";
	else if (hereday>newday) theday="Yesterday";
	else theday="Tomorrow"
	
	var ap;
	if (nd.getHours()>=12) ap="PM";
	else ap="AM";
	if(thehour>12) thehour=thehour-12; 
	if(thehour==0) thehour=12; 
	
	thisdate=theday+" "+nd.getHours()+":";
	if (nd.getMinutes()<10) thisdate+="0";
	thisdate+=nd.getMinutes()+" or "+thehour+":";
	if (nd.getMinutes()<10) thisdate+=0;
	thisdate+=nd.getMinutes()+"&nbsp;"+ap;
	return thisdate;
}

window.onload=function(){
	//window.setTimeout(function(){ document.location.reload(true); }, 60000);
	var locations=[
		[["Christmas Islands"],"+14"],
		[[],"+13.75"],
		[["Tonga"],"+13"],
		[["Chatham Islands"],"12.75"],
		[["New Zealand", "Fiji", "Magadan, Russia"],"+12"],
		[["Norfolk Island"],"+11.5"],
		[["Vanuatu", "Solomon Islands", "Vladivostok"],"+11"],
		[["Lord Howe Island"],"+10.5"],
		[["Sydney, Australia", "Papua New Guinea"],"+10"],
		[["Darwin, Australia", "Adelaide, Australia"],"+9.5"],
		[["Japan", "Korea", "Palau"], "+9"],
		[["Lake Baikal","China","Malaysia", "Perth, Australia"], "+8"],
		[["Jakarta, Indonesia", "Thailand", "Cambodia","Vietnam"],"+7"],
		[["Burma", "Cocos Islands"],"+6.5"],
		[["Bangladesh", "Bhutan", "Astana, Kazakhstan"],"+6"],
		[["Nepal"],"+5.75"],
		[["India"],"+5.5"],
		[["Maldives", "Pakistan", "Uzbekistan", "Turkmenistan"], "+5"],
		[["Afghanistan"], "+4.5"],
		[["Moscow","Georgia", "Armenia", "Mauritius", "Oman"], "+4"],
		[["Iran"],"+3.5"],
		[["Belarus","Iraq","Ethiopia","Madagascar"],"+3"],
		[["Finland","Ukraine","Israel","South Africa"],"+2"],
		[["France","Germany","Poland", "Namibia","Nigeria","Algeria"],"+1"],
		[["U.K.","Portugal","Iceland","Mali","Ghana", "Liberia"], 0],
		[["Cape Verde", "Azores", "Scoresbysund, Greenland"], -1],
		[["South Georgia & South Sandwich Islands"],-2],
		[[],-2.5],
		[["Argentina","Uruguay","S&atilde;o Paulo, Brazil","Suriname"],-3],
		[["Newfoundland"],-3.5],
		[["Chile","Bolivia","Puerto Rico","New Brunswick"], -4],
		[["Venezuela"], "-4.5"],
		[["eastern North America","Cuba","Haiti","Peru","Colombia","Panama"],"-5"],
		[["Central North America", "most of Mexico","Central America","Saskatchewan"], "-6"],
		[["mountains of North America", "Arizona"], "-7"],
		[["west coast of North America","Pitcairn Islands"], "-8"],
		[["most of Alaska"],"-9"],
		[["Marquesas Islands"], "-9.5"],
		[["Hawaii","French Polynesia","Aleutian Islands"], -10],
		[["American Samoa", "Midway Atoll"], -11],
		[["Baker Islands","Howland Islands"], -12]
		]
	//change locations to account for Daylight Savings:
	var dc=new Date();
	if((dc.getMonth()>3||(dc.getMonth==3&&dc.getDate()>=22))&&(dc.getMonth()<9||(dc.getMonth==9&&dc.getDate()<=22))){
		 locations[18][0].unshift("Iran*");locations[20][0].splice(0,1);
                }
        if(dc.getMonth()>3&&dc.getMonth()<9){
		 locations[21][0].unshift("Finland*","Ukraine*","Israel*");locations[22][0].splice(0,3)
		 locations[22][0].unshift("France*","Germany*","Poland*");locations[23][0].splice(0,3);
		 locations[23][0].unshift("U.K.*","Portugal*");locations[24][0].splice(0,2);
                 
		 locations[24][0].unshift("Azores*","Scoresbysund, Greenland*");locations[25][0].splice(1,2);
                }
       if(dc.getMonth()>=3&&dc.getMonth()<=9){
		 locations[27][0].unshift("Newfoundland*");locations[29][0].splice(0,1);
		 locations[28][0].unshift("New Brunswick*");locations[30][0].splice(3,1);
		 locations[30][0].unshift("eastern North America*","Cuba*","Haiti*");locations[32][0].splice(0,3);
		 locations[32][0].unshift("central North America*","most of Mexico*");locations[33][0].splice(0,2);
		 locations[33][0].unshift("North American mountains*");locations[34][0].splice(0,1);
		 locations[34][0].unshift("west coast of North America*");locations[35][0].splice(0,1);
		 locations[35][0].unshift("most of Alaska*");locations[36][0].splice(0,1);
		 locations[36][0].unshift("Aleutian Islands*");locations[38][0].splice(2,1);
		}
	if(dc.getMonth()<=3||dc.getMonth()>=10){
		 locations[1][0].unshift("Chatham Islands*");locations[3][0].splice(0,1)
		 locations[2][0].unshift("New Zealand*");locations[4][0].splice(0,1)
                 locations[5][0].unshift("Lord Howe Island*");locations[7][0].splice(0,1)
		 locations[6][0].unshift("Sydney, Australia*");locations[8][0].splice(0,1)
		 locations[7][0].unshift("Adelaide, Australia*");locations[5][0].splice(1,1)
		 locations[22][0].unshift("Namibia*");locations[23][0].splice(3,1)
		 locations[26][0].unshift("Uruguay*","S&atilde;o Paulo, Brazil*");locations[28][0].splice(1,2);
		 locations[28][0].unshift("Chile*");locations[30][0].splice(0,1);
		 
		}

	var timezones=["+14","+13","+12.75","+12","+11.5","+11","+10.5","+10"]
	var table="<table><tr><th style='text-align:right'>Time<br>Zone</th><th style='text-align:center'>Current Day and Time</th><th>Some Locations in Time Zone</th></tr>";
	
	for (i=0;i<=locations.length-1;i++){
		if (locations[i][0].length==0) continue;
		table+="<tr><td style='text-align:right'>";
		table+=locations[i][1];
		table+="</td><td style='text-align:center'>";
		table+=calcTime(locations[i][1]);
		table+="</td><td>";
		var j=0;
		while(j<=locations[i][0].length-1){
			//if(locations[i][0][j]==undefined){break;}
			if (j!=0) table+=" / ";
			table+=locations[i][0][j];
			j++;
			}
			//if(locations[i][0][j]) table+=" / <a href='#'> more</a>";
		
		table+="</td></tr>";
		

		//if (nd.getMonth()=>3&&nd.getMonth()=<9){
			//locations[i][0].push("Saskatchewan");
			//}
		
	}

	table+="</table>"
	document.getElementById("TimezoneTable").innerHTML=table;
	
}
</script>
<article>
	<h1>Time Zones</h1>
<div id="TimeZoneDescription">
 <p>Computers tell time by counting seconds (milliseconds, actually). Some time in the 1970s, someone decided that January 1st, 1970 at Midnight (in the Greenwich Time Zone) was a good point to start the clock. So every millisecond after that time can be represented by a unique number. 
 <p>So for example: 
<ul>
<li>Midnight on January 1st, 1970 (GMT) is represented by the number 0.
<li>One second after midnight on that day is represented by the number 1000 (the number of milliseconds in a second).
<li> 12:01 AM January 1st, 1970 (one minute later) is represented by the number: 60,000 (1 minute x 60 seconds x 1000 milliseconds).
<li>1:00 AM January 1st, 1970 is represented by the number: 3,600,000 (60 minutes x 60 x 1000).
<li>Midnight January 2nd, 1970 is represented by the number: 86,400,000 (24 hours x 60 x 60 x 1000).
<li> Midnight January 1st, 1971 is represented by the number:  31,557,600,000.
<li> The time this pages was last loaded (<script>var d=new Date();document.write(d.toLocaleString())</script>) is represented by the number: <script>
var d = new Date();
document.write(d.getTime().toLocaleString());
</script>
</ul>
 <p>This allows computers to make complicated calculations without you having to do the math. So if you wanted to find the number of seconds from now until Christmas, 
 you don't have to add up the seconds in each minute and each minutes in a each hour or figure out how many days in each month, the computer can simply convert the dates into it's corresponding millisecond, subtract the two numbers, and recalculates it.
 That may seem like a lot of busy work, but computers are good at that, and they do it very fast.
 <p>Computers are useful for figuring out time zones as well. Below the map is a chart using JavaScript to calculate the current time and date in each time zone.
 
</div>
<div class="image"><img src="http://www.spyroYak.com/img/timezoneMap.jpg"></div>
<div id="TimezoneTable"></div>
<div class=columnLeft>* indicates that the region or country is currently observing daylight savings (summer) time.<br><br>
Image from <a href="http://en.wikipedia.org/wiki/Daylight_saving_time_by_country">wikimedia commons </a>. Blue indicates daylight saving observed in northern hemisphere summer (around April to October). Orange indicates daylight saving observed in southern hemisphere summer (around November to March).</div>
<div class=columnRight><img style="width:100%;" src="//spyroyak.com/img/DST_Countries_Map.png"></div>
</article>