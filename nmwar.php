<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
	<title>NMS-War</title>
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
			<h1 class="display-1">National Museum of<br>
			War</h1>
			<p class="lead">The History of Scotland at War at Your Fingertips...</p>
		</div>
	</div>
	<!-- main header image ends here  -->
	<div class="container">
		<h1 class="subheading">Welcome to the National Museum of War</h1>
	</div>
	<!-- main content starts here -->
	<div class="container imageGallery">
		<div class="row">
			<div class="col-lg-8">
				<h4 class="museumHeading">National Museum of War Image Gallery</h4>
				<!-- image gallery starts here -->
				<img alt="Aircraft" id="galleryMain" src="images/war1.jpg"><br>
				<div class="gallery">
					<img alt="" class="galleryStyle" src="images/war1.jpg">
					<img alt="" class="galleryStyle" src="images/war2.jpg">
					<img alt="" class="galleryStyle" src="images/war3.jpg">
					<img alt="" class="galleryStyle" src="images/war4.jpg">
					<img alt="" class="galleryStyle" src="images/war5.jpg">
					<img alt="" class="galleryStyle" src="images/war6.jpg">
				</div>
				<!-- image gallery ends here -->
			</div>
			<div class="col-lg-4">
				<h4 class="museumHeading">Opening Times</h4>
				<ul class="list-group">
					<li class="list-group-item">Monday: 9.45am - 5.45pm</li>
					<li class="list-group-item">Tuesday: 9.45am - 5.45pm</li>
					<li class="list-group-item">Wednesday: 9.45am - 5.45pm</li>
					<li class="list-group-item">Thursday: 9.45am - 5.45pm</li>
					<li class="list-group-item">Friday: 9.45am - 5.45pm</li>
					<li class="list-group-item">Saturday: 9.45am - 5.45pm</li>
					<li class="list-group-item">Sunday: 9.45am - 5.45pm</li>
				</ul>
				<!-- google map container -->
				<div id="map"></div>
				<h4 class="museumHeading">Location</h4>
				<p>Edinburgh Castle<br>
				Edinburgh<br>
				EH1 2NG</p>
				<h4 class="museumHeading">Phone</h4>
				<p>0300 123 6789</p>
				<h4 class="museumHeading">Admission</h4>
				<ul class="list-group">
					<li class="list-group-item">Entry to the museum is included in admission to Edinburgh Castle.</li>
					<li class="list-group-item">Entry to Edinburgh Castle ranges from £10.20 to £17.00 (under 5s free).</li>
					<li class="list-group-item">National Museums Scotland Members get 10% off adult admission on production of valid membership card.</li>
				</ul>
				<a class="btn" href="workshopWar.php">National War Museum Workshop</a>
			</div>
		</div>
	</div><br>
	<div class="container">
		<h4 class="museumHeading">About the National Museum of War</h4>
		<p>This museum contains a wealth of absorbing material that ranges from letters home from foreign campaigns to Highland broadswords and chemical warfare suits.</p>
		<p>The Scottish National War Museum is housed in a former storehouse for ordnance. It was built in the 1700s and later used as a military hospital.</p>
		<p>The museum opened in 1933 and is now run by the National Museums Scotland.</p>
		<p>The large and fascinating collection includes many artefacts used by the Scottish forces over the centuries, plus paintings including Robert Gibb’s famous “Thin Red Line”, and a research library.</p>
		<?php include'includes/accessibilityInclude.php';  ?>
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
