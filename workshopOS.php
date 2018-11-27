<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
	<title>NMS-Workshop</title>
	<!-- bootstrap css -->
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet">
	<!-- nms stylesheet -->
	<link href="css/nms.css" rel="stylesheet"><?php include'includes/errorCheck.php' ?>
</head>
<body>
	<!-- navigation include file -->
	<?php include'includes/navinclude.php' ?>
	<!-- main header image starts here -->
	<div class="jumbotron jumbotron-fluid nmOS">
		<div class="container">
			<h1 class="display-1">National Museum of<br>
			Scotland Workshop</h1>
			<p class="lead">The History of Scotland at Your Fingertips...</p>
		</div>
	</div>
	<!-- main header image ends here  -->
	<div class="container">
		<h1 class="subheading">Welcome to the National Museum of Scotland Workshop</h1>
	</div>
	<!-- main content starts here -->
	<div class="container imageGallery">
		<div class="row">
			<div class="col-lg-8">
				<h4 class="museumHeading">National Museum of Scotland Image Gallery</h4>
				<!-- image gallery starts here -->
				<img alt="National Museum of Scotland" id="galleryMain" src="images/osJumbo.jpg"><br>
				<div class="gallery">
					<img alt="National Museum of Scotland" class="galleryStyle" src="images/osJumbo.jpg">
					<img alt="National Museum of Scotland Logo" class="galleryStyle" src="images/os1.jpg">
					<img alt="National Museum of Scotland Entrance" class="galleryStyle" src="images/os2.jpg">
					<img alt="National Museum of Scotland" class="galleryStyle" src="images/os3.jpg">
					<img alt="National Museum of Scotland Exhibit" class="galleryStyle" src="images/os4.jpg">
					<img alt="National Museum of Scotland Interior" class="galleryStyle" src="images/os5.jpg">
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
				<p>Chambers Street,<br>
				Edinburgh,<br>
				EH1 1JF</p>
				<h4 class="museumHeading">Phone</h4>
				<p>0300 123 6789</p>
				<h4 class="museumHeading"> Workshop Admission</h4>
				<ul class="list-group">
					<li class="list-group-item">Free</li>


				</ul>
				<a class="btn" href="booking.php">Book Workshop</a>
			</div>
		</div>
	</div><br>
	<div class="container">
		<h4 class="museumHeading">About the National Museum of Scotland Workshop</h4>
		<p>The National Museum of Scotland workshop will take you on a tour around some of the most popular exhibits in the museum!</p>
		<p>You will be told all about these exhibits are why they are such as important part of Scottish history and culture.</p>
		<p>At the end of the workshop you can take part in a group discussion and hear everyones opinions on what their favourite exhibits were and why.</p>
	</div>
	<!-- main content ends here -->
	<!-- footer include -->
	<?php include'includes/footerInclude.php' ?>
	<!-- jquery and javascript for image gallery -->
	<script src="js/googleMapOS.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDPu-PXwdTL5rchjo4kuqvH0gp3hTEGg-c&callback=initMap"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="js/gallery.js"></script>

	<!-- bootstrap scripts -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</body>
</html>
