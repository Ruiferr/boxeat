<!DOCTYPE html>
<html>
<head>
	<title>boxeat</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="img/icon.png"/>

	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/resize.css">
	<link rel="stylesheet" type="text/css" href="css/fonts.css">

	<script type="text/javascript" language="javascript" src="js/jquery.js"></script>
	<script type="text/javascript" language="javascript" src="js/main.js"></script>
</head>
<body>
	<video playsinline autoplay muted loop id="main_video">
	  <source src="vid/video01.mp4" type="video/mp4">
	  Your browser does not support HTML5 video.
	</video>
	<script> document.getElementById('main_video').play(); </script>

	<!--  		SLIDE MENU 		 -->

	<nav class="slide">
		<ul>
			<li><a class="active" href="#">BOXEAT</a></li>
			<li><a href="#">EMENTA</a></li>
			<li><a href="#">ENCOMENDAR</a></li>
			<li style="height:5vh ; margin-bottom: 5vh; width: 50%; margin-left: 25%; border-bottom: 1px solid white"></li>
			<li>
				<p>CONTACTOS</p>
				<span>218 670 450</span>
			</li>
			<li>
				<p>SOCIAL</p>
				<figure>
					<a href="#"><img src="img/insta02.svg"></a>
					<a href="#"><img src="img/face.svg"></a>
				</figure>
			</li>
		</ul>
	</nav>



	<header>
		<div class="burger">
			<img id="open-menu" src="img/menu.svg">
			<img id="close-menu" src="img/cancel.svg">
		</div> 
		<div class="login">
			<button>Login / Registar</button>
		</div>
		
	</header>
	<div class="wrapper">

		<figure><img src="img/boxeat-white.png"></figure>
		<div class="content">
		  <h1>Brevemente!</h1>
		  <button><span>Encomendar</span></button>
		</div>
		
	</div>


</body>
</html>