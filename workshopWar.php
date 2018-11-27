<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
	<title>NMS-WarWorkshop</title>
	<!-- bootstrap css -->
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet">
	<!-- nms stylesheet -->
	<link href="css/nms.css" rel="stylesheet"><?php include'includes/errorCheck.php' ?>
</head>
<body>
	<!-- navigation include file -->
	<?php include'includes/navinclude.php' ?>
	<!-- main header image starts here -->
	<div class="jumbotron jumbotron-fluid nmWar">
		<div class="container">
			<h1 class="display-1">National War Museum<br>
			Workshop</h1>
			<p class="lead">The History of Scotland at War at Your Fingertips...</p>
		</div>
	</div>
	<!-- main header image ends here  -->
	<div class="container">
		<h1 class="subheading">Welcome to the National War Museum Workshop</h1>
	</div>
	<!-- main content starts here -->
	<div class="container imageGallery">
		<div class="row">
			<div class="col-lg-8">
				<h4 class="museumHeading">National Museum of War Image Gallery</h4>
				<!-- image gallery starts here -->
				<img alt="National War Museum" id="galleryMain" src="images/war1.jpg"><br>
				<div class="gallery">
					<img alt="National War Museum" class="galleryStyle" src="images/war1.jpg">
					<img alt="National War Museum" class="galleryStyle" src="images/war2.jpg">
					<img alt="National War Museum" class="galleryStyle" src="images/war3.jpg">
					<img alt="National War Museum" class="galleryStyle" src="images/war4.jpg">
					<img alt="Cannons" class="galleryStyle" src="images/war5.jpg">
					<img alt="Edinburgh Castle long shot" class="galleryStyle" src="images/war6.jpg">
				</div>
				<!-- image gallery ends here -->
			</div>
			<div class="col-lg-4">
				<h4 class="museumHeading">Workshop Running Times</h4>
				<ul class="list-group">
					<li class="list-group-item">Monday: 10am, 12.00pm, 3pm</li>
					<li class="list-group-item">Tuesday: 10am, 12.00pm, 3pm</li>
					<li class="list-group-item">Wednesday: 10am, 12.00pm, 3pm</li>
					<li class="list-group-item">Thursday: 10am, 12.00pm, 3pm</li>
					<li class="list-group-item">Friday: 10am, 12.00pm, 3pm</li>

				</ul>
				<!-- google map container -->
				<div id="map"></div>
				<h4 class="museumHeading">Location</h4>
				<p>Edinburgh Castle<br>
				Edinburgh<br>
				EH1 2NG</p>
				<h4 class="museumHeading">Phone</h4>
				<p>0300 123 6789</p>
				<h4 class="museumHeading">Workshop Admission</h4>
				<ul class="list-group">
					<li class="list-group-item">Free</li>

				</ul>
				<a class="btn" href="booking.php">Book Workshop</a>
			</div>
		</div>
	</div><br>
	<div class="container">
		<h4 class="museumHeading">About the National Museum of War Workshop</h4>
		<p>The National War Museum workshop will showcase historic weapons of Scottish warfare, from greatswords to cannons!</p>
		<p>The workshop will also help you learn about famous events that occurred during wartime.</p>
		<p>You will then take part in a quiz all about what you have learned at the workshop and if you win you will get a prize!</p>
		<h4 class="museumHeading">Accessibity</h4>
		<ul class="inline">
			<li class="list-inline-item"><img src="images/wifi.png" alt="Wifi Icon"> Free Wifi</li>
			<li class="list-inline-item"><img src="images/cafe.png" alt="Cafe Icon"> Cafe</li>
			<li class="list-inline-item"><img src="images/camera.png" alt="Camera Icon"> Video and Photography Permitted</li>
			<li class="list-inline-item"><img src="images/shop.png" alt="Shop Icon"> Gift Shop</li>
			<li class="list-inline-item"><img src="images/toilets.png" alt="Toilet Logo"> Toilets</li>
			<li class="list-inline-item"><img src="images/wheelchair.png" alt="Wheelchair Logo"> Wheelchair Accessible</li>
		</ul>
	</div>
	<!-- main content ends here -->
	<!-- footer include -->
	<?php include'includes/footerInclude.php' ?>
	<!-- jquery and javascript for image gallery -->
	<script src="js/googleMapWar.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDPu-PXwdTL5rchjo4kuqvH0gp3hTEGg-c&callback=initMap"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="js/gallery.js"></script>

	<!-- bootstrap scripts -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</body>
</html>
