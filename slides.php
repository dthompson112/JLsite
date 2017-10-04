<!DOCTYPE html>

<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="topnav" id="myTopnav">
  <a href="javascript:void(0);" style="font-size:20px;" class="icon" onclick="burgerSwitch()">&#9776;</a>
  <a href="#home">Home</a>
  <a href="#news">Purchase</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
 
</div>




<script src="script.js"></script>

<body>

<div class="slide_show">
	  <img class="slides" src="temp_1.png" >
	  <img class="slides" src="temp_2.png" >
	  <span class="left_slide_button" onclick="plusDivs(-1)">&#10094;</span>
	  <span class="right_slide_button" onclick="plusDivs(1)">&#10095;</span>
	  
</div>
<div class="dots">
	  <span class="slide_indicator" onclick="currentSlide(1)"></span>
      <span class="slide_indicator" onclick="currentSlide(2)"></span>
</div>
<div class="full_text">
	<p>gonn enter a fairly long bit of full text for you all llllllllllllllllllllllllll
	llllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllll
	llllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllll
	lllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllll
	lllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllll
	lllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllll
	llllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllll
	lllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllll</p>
</div>



<script>
	
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentSlide(n){
	showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("slides");
  var ind = document.getElementsByClassName("slide_indicator");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  for (i = 0; i < ind.length; i++){
	  ind[i].className = ind[i].className.replace("active","");
  }
  x[slideIndex-1].style.display = "block"; 
  ind[slideIndex-1].className += " active"; 
}

</script>




</body>
</html>
