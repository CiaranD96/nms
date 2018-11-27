<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
	<title>NMS-FlightWorkshop</title>
	<!-- bootstrap css -->
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet">
	<!-- nms stylesheet -->
	<link href="css/nms.css" rel="stylesheet"><?php include'includes/errorCheck.php' ?>
</head>
<body>
	<!-- navigation include file -->
	<?php include'includes/navinclude.php' ?>
	<!-- main header image starts here -->
	<div class="jumbotron jumbotron-fluid nmFlight">
		<div class="container">
			<h1 class="display-1">National Museum of<br>
			Flight Workshop</h1>
			<p class="lead">The History of Scottish Aviation at Your Fingertips...</p>
		</div>
	</div>
	<!-- main header image ends here  -->
	<div class="container">
		<h1 class="subheading">Welcome to the National Museum of Flight Workshop</h1>
	</div>
	<!-- main content starts here -->
	<div class="container imageGallery">
		<div class="row">
			<div class="col-lg-8">
				<h4 class="museumHeading">National Museum of Flight Image Gallery</h4>
				<!-- image gallery starts here -->
				<img alt="Aircraft" id="galleryMain" src="images/flightJumbo.jpg"><br>
				<div class="gallery">
					<img alt="Aircraft" class="galleryStyle" src="images/flightJumbo.jpg">
					<img alt="Aircraft" class="galleryStyle" src="images/flight2.jpg">
					<img alt="Aircraft" class="galleryStyle" src="images/flight3.jpg">
					<img alt="Aircraft" class="galleryStyle" src="images/flight4.jpg">
					<img alt="Aircraft" class="galleryStyle" src="images/flight5.jpg">
					<img alt="Aircraft" class="galleryStyle" src="images/flight6.jpg">
				</div>
				<!-- image gallery ends here -->
			</div>
			<div class="col-lg-4">
				<h4 class="museumHeading">Workshop Running Times</h4>
				<ul class="list-group">
					<li class="list-group-item">10am, 12.00pm, 3pm</li>
					<li class="list-group-item">10am, 12.00pm, 3pm</li>
					<li class="list-group-item">10am, 12.00pm, 3pm</li>
					<li class="list-group-item">10am, 12.00pm, 3pm</li>
					<li class="list-group-item">10am, 12.00pm, 3pm</li>

				</ul>
				<!-- google map container -->
				<div id="map"></div>
				<h4 class="museumHeading">Location</h4>
				<p>East Fortune Airfield<br>
				B1347 North Berwick<br>
				EH39 5LF</p>
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
		<h4 class="museumHeading">About the National Museum of Flight Workshop</h4>
		<p>Book the National Museum of Flight workshop to take to the skies and learn all about Scottish aviation throughout the years!</p>
		<p>Learn all about some of the most famous planes in Scotland, including the famous World War 2 Spitfire and many more! You will learn all about what made these aircraft famous and even learn about various pilots who flew them.</p>
		<p>The workshop will conclude with a quiz - can you identify some of the most famous planes in history?</p>
	</div>
	<!-- main content ends here -->
	<!-- footer include -->
	<?php include'includes/footerInclude.php' ?>
	<!-- jquery and javascript for image gallery -->
	<script src="js/googleMapFlight.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDPu-PXwdTL5rchjo4kuqvH0gp3hTEGg-c&callback=initMap"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="js/gallery.js"></script>

	<!-- bootstrap scripts -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</body>
</html>
