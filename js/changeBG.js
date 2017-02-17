var opacity = 0;
var delay = 6000;
$img = '';
var k, $bgs = [], pos = 0;

window.onload = function() {
	var night = getCSS();

	if(night){
		//-webkit-gradient(linear, right top, right bottom, from(rgba(243,151,91,0.5)), to(rgba(46,10,68,0.5)))
		$bgs.push('-webkit-gradient(linear, right top, right bottom, from(rgba(243,151,91,0.5)), to(rgba(46,10,68,0.5))), url("../wp-content/themes/inrc_webpage/images/stockholm2.jpg")');
		$bgs.push('-webkit-gradient(linear, right top, right bottom, from(rgba(243,151,91,0.5)), to(rgba(46,10,68,0.5))), url("../wp-content/themes/inrc_webpage/images/raleighnight.jpg")');
		$bgs.push('-webkit-gradient(linear, right top, right bottom, from(rgba(243,151,91,0.5)), to(rgba(46,10,68,0.5))), url("../wp-content/themes/inrc_webpage/images/paris2.jpg")');
		$bgs.push('-webkit-gradient(linear, right top, right bottom, from(rgba(243,151,91,0.5)), to(rgba(46,10,68,0.5))), url("../wp-content/themes/inrc_webpage/images/miami2.jpg")');
		$bgs.push('-webkit-gradient(linear, right top, right bottom, from(rgba(243,151,91,0.5)), to(rgba(46,10,68,0.5))), url("../wp-content/themes/inrc_webpage/images/sydney2.jpg")');
		$bgs.push('-webkit-gradient(linear, right top, right bottom, from(rgba(243,151,91,0.5)), to(rgba(46,10,68,0.5))), url("../wp-content/themes/inrc_webpage/images/manhattan_skyline.jpg")');		
	} else {
		$bgs.push('-webkit-gradient(linear, right top, left top, from(rgba(237,231,196,0.3)), to(rgba(93,120,126,0.3))), url("../wp-content/themes/inrc_webpage/images/stockholmday.jpg")');
		$bgs.push('-webkit-gradient(linear, right top, left top, from(rgba(237,231,196,0.3)), to(rgba(93,120,126,0.3))), url("../wp-content/themes/inrc_webpage/images/parisday.jpg")');
		$bgs.push('-webkit-gradient(linear, right top, left top, from(rgba(237,231,196,0.3)), to(rgba(93,120,126,0.3))), url("../wp-content/themes/inrc_webpage/images/sydneyday1.jpg")');
		$bgs.push('-webkit-gradient(linear, right top, left top, from(rgba(237,231,196,0.3)), to(rgba(93,120,126,0.3))), url("../wp-content/themes/inrc_webpage/images/raleigh1.jpg")');
		$bgs.push('-webkit-gradient(linear, right top, left top, from(rgba(237,231,196,0.3)), to(rgba(93,120,126,0.3))), url("../wp-content/themes/inrc_webpage/images/miami.jpg")');
		$bgs.push('-webkit-gradient(linear, right top, left top, from(rgba(237,231,196,0.3)), to(rgba(93,120,126,0.3))), url("../wp-content/themes/inrc_webpage/images/manhattan.png")');
	}
	//$header = document.getElementById('header4');
	

	$img = document.getElementById('header5');

	window.setInterval(function(){
		if(opacity <= 0){
			higherOpacity();
		}
		if(opacity >= 1) {
			lowerOpacity();
		}		
	}, delay);
}

//showing header5
function higherOpacity(){
	var interval = setInterval(function(){
		opacity += 0.1;
		$img.style.opacity = opacity;
		if(opacity > 1){
			$img2 = document.getElementById('header4');
			$img2.style.backgroundImage = $bgs[pos];
			pos++;
			if(pos > $bgs.length)
				pos = 0;
			clearInterval(interval);
		}
	}, 100);
}

//hiding header5
function lowerOpacity(){
	var interval = setInterval(function(){
		opacity -= 0.1;
		$img.style.opacity = opacity;
		if(opacity < 0){
			$img3 = document.getElementById('header5');
			$img3.style.backgroundImage = $bgs[pos];
			pos++;
			if(pos > $bgs.length)
				pos = 0;
			clearInterval(interval);
		}
			
	}, 100);
}