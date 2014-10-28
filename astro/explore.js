function ToggleVisibility(element){
				
				//find element to hide/unhide
				var element=document.getElementById(element);
				//check the element's current state
				if (element.style.display=="none"){
					//if hidden, unhide it
					element.style.display="block";
				}else{
					//if not hidden, hide it.
					element.style.display="none";
}
				//replace planet info with main contnet
				//document.getElementById("mainContent").style.display='block';
				//document.getElementById('members').style.display='none';
				//replace image show with table
				//document.getElementById('table').style.display='block';
				//document.getElementById('imageShow').style.display='none';
			}
function toggleText(image, element){
				// Find the image.
				var image = document.getElementById(image)
    
				// Find the element to hide/unhide.
				var element = document.getElementById(element)

				// Check the element's current state.
				if (element.style.display == "none"){
					// If hidden, unhide it.
					element.style.display = "block"
					image.src = "img/down.gif"
				} else{
					// If not hidden, hide it.
					element.style.display = "none"
					image.src = "img/closed.gif";
				}
}
function changeContent(newStuff){
				
				document.getElementById('content').style.display="none";
				var newContent=document.getElementbyId(newStuff).innerHTML;
				document.getElementById("content").innerHTML=newContent;
}
function swapContent(newStuff){
				document.getElementById('members').style.display='block';
				//replace main Content with planet information
				document.getElementById('mainContent').style.display='none'; 
				document.getElementById(newStuff).style.display='block';
				//replace table with image slide show
				document.getElementById('table').style.display='none';
				document.getElementById('imageShow').style.display='block';
}
function showHover(id,onOff){
		if(onOff) document.getElementById(id).style.visibility="visible";
		else document.getElementById(id).style.visibility="hidden";
}
	
//image slide show from Samual Salton modified somewhat:
//-------------- Change the following to customize your slide show ------------------

var imgName   = "img/planet";                      //relative URL of the images
var imgType   = ".jpg";                             //type of image .gif, .jpg or .png
var imgNumPad =  false                              //pad image number? example 000, 001, etc.
var total     =  15;                                //total number of images
var cache     =  true;                              //pre-load image? true or false
var autoStart =  true;                              //auto start?
var repeat    =  true;                              //continue loop? true or false
var interval  =  9000;                              //interval 2 second
var dispCtrl  =  true;                              //display control buttons
var dispName  =  true;                              //display image name
var imageCaption=["zero",
	"Mercury photographed by Messenger spacecraft in 2008. Credit: <a href='http://solarsystem.nasa.gov/multimedia/display.cfm?Category=Planets&IM_ID=7543'>NASA</a>",
	"Venus transit photographed by TRACE satellite in 2004. Credit: <a href='http://solarsystem.nasa.gov/multimedia/display.cfm?Category=Planets&IM_ID=2403'>NASA</a>",
	"This photo of 'Earthrise' over the lunar horizon was taken by the Apollo 8 crew in December 1968, showing Earth for the first time as it appears from deep space.",
	"Panoramic view of crater on Mars from NASA's rover Opportunity, taken 2010. Credit: <a href='http://solarsystem.nasa.gov/multimedia/display.cfm?'Category=Planets&IM_ID=12824>NASA</a>",
	"Dwarf planet Ceres within the asteroid belt, photographed by the Hubble Telescope in 2004. Credit: <a href='http://solarsystem.nasa.gov/multimedia/display.cfm?Category=Planets&IM_ID=10723'>NASA</a>",
	"Asteroid Vesta photographed by Dawn spacecraft in 2011. Credit: <a href='http://www.nasa.gov/mission_pages/dawn/multimedia/pia14313.html'>NASA</a>",
	"Jupiter; a composite of 27 images taken by the Cassini spacecraft in 2000. Credit: <a href='http://solarsystem.nasa.gov/multimedia/display.cfm?Category=Planets&IM_ID=342>'NASA</a>",
	"Image of Saturn's rings taken with the Ultaviolet Imaging Spectrograph instrument aboard the Cassini spacecraft in 2011. Blue bands indicate icy material and red bands are dirty rocky material. Credit: <a href='http://solarsystem.nasa.gov/multimedia/display.cfm?Category=Planets&IM_ID=12303'>NASA</a>",
	"Infrared image of Uranus taken by the <a href='http://www.keckobservatory.org/'>Keck Observatory</a> in 2007",
	"Neptune photographed by Voyager 2 in 1989. Credit: <a href='http://solarsystem.nasa.gov/multimedia/display.cfm?Category=Planets&IM_ID=2424'>NASA</a>",
	"Pluto and it's moon Charon revealed by the Hubble telescope in 1997, one of the first views of Pluto and Charon to be resolved separately. Credit: <a href='http://solarsystem.nasa.gov/multimedia/display.cfm?Category=Planets&IM_ID=10193'>NASA</a>",
	"Kuiper belt dwarf planet Eris photographed by <a href='http://www.keckobservatory.org/'>Keck Observatory</a> in 2006.",
	"Dwarf planet Makemake photographed by Hubble Telescope",
	"Dwarf planet Haumea, photographed by <a href='http://www.keckobservatory.org/'>Keck Observatory.</a>",
	"Earliest known scientific illustration of a comet by the artist Giotto. He had observed one of the periodic visits of Halley's Comet in 1301 and used it as a stand-in for the 'star' of Bethlehem in his <em>Adoration of the Magi</em> painted around 1305. "];

//-------------- Do not alter the code below ----------------------------------------

var next     =  0;					//the next image number
var picArray = new Array();                             //Create Array to store images

if (cache) {                                            //if caching is requested
    for (var i = 1; i <= total; i++) {                  //loop for total number of images
        picArray[i]     = new Image();                  //Create an Image object 
        picArray[i].src = imgName + pad(i,3) + imgType; //Load Image object with the .jpg file
    }
}
if (!cache) {                                           //if caching is not requested
    picArray[1]     = new Image();                      //Create one Image object 
    picArray[1].src = imgName + pad(1,3) + imgType;        //Load Image object with first .jpg file
}
    
if (dispCtrl)                                                           //if display control buttons is requested                                  
    document.getElementById('controls').style.visibility = 'visible';   //make buttons visible

if (autoStart)                                                          //if auto start is requested 
    timer=setInterval('run()',interval);                                //set up the timer

function run() {
    next = next+1;    

    if (repeat  && next > total)                   //if repeat is requested and going forward
        next = 1;                                  //reset number to 1
    if (repeat && next <= 0)                       //if repeat is requested and going backward
        next = total;                              //reset number to total number of images

    if (!repeat && next > total) {                 //if no repeat and we reached the end   
        next = total;                              //reset number to maximum number of images
        clearInterval(timer);                      //stop the show
        return;                                    //exit
    }
    if (!repeat && next <= 0) {                    //if no repeat and we reached the beginning  
        next = 1;                                  //reset number to 1
        return;                                    //exit
    }

    document.slideShow.src = picArray[next].src;        //Move next image into slideShow

    if (! cache) {                                                 //while waiting, get ready for the next image
        picArray[next+1]     = new Image();                        //Create an Image object 
        picArray[next+1].src = imgName + pad(next+1,3) + imgType;  //Load Image object with next .jpg file
    }

    if (dispName)                                  
        document.getElementById('imgname').innerHTML = "<p style='font-size:10px'>"+imageCaption[next]+"</p>";   //display image name

    if (picArray[total] == null)                                   //if the last image is not loaded yet
        document.getElementById('last').disabled = true;           //disable the last button       
    else
        document.getElementById('last').disabled = false; 
}

function first() {                      //set to first image                                    
    next = 0;                           //Why 0?  because run() will add 1 automatically                         
    run();
}
function forward() {                    //move forward
    next += 0;                          //Why 0?  because run() will add 1 automatically 
    run();
}
function back() {                       //move backward
    next -= 2;                          //Why -2? because run() will add 1 automatically 
    run();
}
function last() {                       //set to last image                                    
    next = total-1;                     //Why total-1?  because run() will add 1 automatically                         
    run();
}
function moveTo(i) {                    //move to image                                    
    next = i-1;                         //Why i-1?  because run() will add 1 automatically                           
    run();
}

function pad(number,length)             //pad a number with leading 000 
{                                       
    if (!imgNumPad) return(number);     //padding is not requested
    var str = '' + number;
    while (str.length < length)
        str = '0' + str;
    return(str);
}

//javascript functions for page 2(Quiz):
function checkCookie(){
	document.form1.txtName.focus();
	var username=getCookie("username");
	if (username!=null && username!=""){
		document.getElementById(form1).style.display='none';
		document.getElementById("WB").innerHTML="Welcome Back "+username+".";
	}else {
			textNameOnChage();
			if (username!=null && username!=""){
			setCookie("username",username,365);
		}
	}
}
//getCookie and setCookie functions borrowed from Samual Salton:
function getCookie(name) {
    cookieValue = '';

    var httpCookies = document.cookie;		    //get all the cookies
    var allCookies  = httpCookies + "; "            //append '; ' at the end

    var found = allCookies.indexOf(name);             //find the cookie by name 
    if (found >=0) {                                  //if cookie name is found
        var beg = allCookies.indexOf("=",found) +1    //get the beginning of value
        var end = allCookies.indexOf(";",found)       //get the end of value            
        cookieValue = allCookies.substring(beg,end);  //extract of the value
    }
    return(cookieValue);
}
function setCookie() {
    var username = document.getElementById('userName').value; 
    document.cookie  = "username=" + username;
}

function textNameOnChange(){
	var nameProvided=document.form1.txtName.value;
	if (nameProvided){
		document.getElementById("Go").innerHTML="Hello "+nameProvided+"!";
		document.getElementById("Go").style.color="blue";

		}else {
		document.getElementById("Go").innerHTML="Please provide a name";
		document.getElementById("Go").style.color="red";
		document.form1.txtName.focus();
		}
}
function EnterName(){
	if(document.form1.txtName.value==''){
		document.getElementById("Go").innerHTML="Please provide a name";
		document.getElementById("Go").style.color="red";
		document.form1.txtName.focus();
		return (false);
	}else{
		score=0;
		setCookie();
		document.getElementById('form1').style.display="none";
		document.getElementById('form2').style.display="block";
		return (true);
		}
}
//fly-in:
function next(){
	setTimeout("moveBlock()",1000);
	}
function moveBlock(){
	x+=20;
	y+=20;
	var obj=document.getElementById(element[elem]);
	obj.style.top=x+"px";
	obj.style.left=y+"px";
	if (x<(100+elem*60)){
		setTimeout("moveBlock()",100);
	}else{
		elem++
		x=0; y=0;
		}
	}
//changes text and image:
function nextQuestion(outQ,inQ,outI,inI){
	document.getElementById(outQ).style.display='none';
	document.getElementById(inQ).style.display='block';
	document.getElementById(outI).style.display='none';
	document.getElementById(inI).style.display='block';

	}
function favPlanetComment(){
	document.getElementById("GoQ2").style.display="block";
	var favPlanet=document.getElementById("planet").value;
	document.getElementById("GoPlanet").innerHTML=favPlanet+" is a good choice.";
	}
//if the correct answer is chosen:
function correctA(cId,eId,formId){
	document.getElementById(cId).style.display="block";
	score++;
	clearButtons(eId,formId);
	}
//if the wrong answer is chosen:
function wrongA(wId,eId,formId){
	document.getElementById(wId).style.display="block";
	clearButtons(eId,formId);
	}
function clearButtons(eId,formId){
	document.getElementById(eId).style.display="block";
	document.getElementById(formId).style.display="none";
		for(var i=0;i<a.length;i++){
		document.getElementById('a[i]').checked=false;
		}
	}
function tallyScore(outQ,inQ,outI,inI){
	nextQuestion(outQ,inQ,outI,inI);
	//document.getElementById("finalScoreComment").innnerHTML="";
	if (score>=5) document.getElementById("finalScore").innerHTML="You correctly answered "+score+" out of 6 questions. Good Job!";
	else if (score<5 && score>2) document.getElementById("finalScore").innerHTML="You correctly answered "+score+" out of 6 questions. Not bad, for an amateur";
	else document.getElementById("finalScore").innerHTML="You correctly answered "+score+" out of 6 questions. You should go back and re-read the material";
}
