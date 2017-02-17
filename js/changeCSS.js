var currentTime = new Date().getHours();
var cssNight = false;
console.log(currentTime);
if(currentTime < 9 || currentTime > 17){
	document.write("<link rel='stylesheet' href='../../wordpress/wp-content/themes/inrc_webpage/cssNight.css' type='text/css'>");
	cssNight = true;
} else {
	document.write("<link rel='stylesheet' href='../../wordpress/wp-content/themes/inrc_webpage/style.css' type='text/css'>");
}

function getCSS(){
	return cssNight;
}