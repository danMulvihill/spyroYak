//heading graphics
$(document).ready(function(){
		   
   $('#s').effect('slide');
   $('#p').fadeOut(1000).fadeIn(5000);
   $('#y').effect('bounce',{times:3},500);
   $('#r').fadeOut(10000).fadeIn(2000).fadeOut(30000).fadeIn(4000);
   $('#o').effect('bounce',{times:7},2000);
   $('#y2').effect('bounce',{times:3},500);
   $('#a').effect('bounce',{times:20},10000);
   $('#k').fadeOut(10).fadeIn(20000).fadeOut(50000).fadeIn(100000);
  });

		/* poor man's CMS (no longer used; replaced by PHP)
 	$(init);
 	function init(){
 		//$("#about").load("includes/about.php");
 		//$("#jQuery").load("includes/jQuery.php");
 	};
 	$("#menuAbout").click(function(){
 		$("#about").load("includes/about.php");
 		
 	});
 		
 	*/


//unicode scripts:

function hex2Decimal( hex ){
            return parseInt("0x"+hex);
        }

function decimal2Hex( num ){
            return num.toString(16);
        }
function displayChars(start,end){
	var out = "<p style=\"float:left\">";
	for (i=start, j=1;i<=end;i++,j++){
		if (j==17){
			j=1;
			out+="</p><p style=\"float:left\">";
	
	}
		out+="<span class=hexIndex>"+decimal2Hex(i)+"</span> <span class=charIndex>["+i+"]</span> <span class=\"chars\">&#"+i+";</span>"+"<br>";
		//if()
		
	}
	out +="</p>";
	var output=document.getElementById("unicodeOutput");
	output.innerHTML=out;
}
function openSec(sec){
	document.getElementById('west').style.display='none';
	document.getElementById('east').style.display='none';
	document.getElementById('brahmi').style.display='none';
	document.getElementById('other').style.display='none';
	document.getElementById('dingbats').style.display='none';
	document.getElementById('cjk').style.display='none';
	document.getElementById(sec).style.display='block';
        //document.getElementById('unicodeOutput').style.display="none";
}