<!DOCTYPE html>

<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="topnav" id="myTopnav">
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="burgerSwitch()">&#9776;</a>
  <a href="#home">Home</a>
  <a href="#news">Purchase</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
 
</div>

<div class = "card_spc">
	<div class="card">
		<div class="card_cont">
			<h4><b>some content</b></h4>
			<p>paragraph content</p>
		</div>
	</div>

	<div class="card">
		<div class="card_cont">
			<h4><b>some content</b></h4>
			<p>paragraph content</p>
		</div>
	</div>
	
	<div class="card">
		<div class="card_cont">
			<h4><b>some content</b></h4>
			<p>paragraph content</p>
		</div>
	</div>
</div>

<div class = "card_spc">
	<div class="card">
		<div class="card_cont">
			<h4><b>some content</b></h4>
			<p>paragraph content</p>
		</div>
	</div>

	<div class="card">
		<div class="card_cont">
			<h4><b>some content</b></h4>
			<p>paragraph content</p>
		</div>
	</div>
	
	<div class="card">
		<div class="card_cont">
			<h4><b>some content</b></h4>
			<p>paragraph content</p>
		</div>
	</div>
</div>



<script src="script.js"></script>

<script>
function card_mobile() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}

</script>

</body>
</html>

