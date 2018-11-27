<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
	<title>NMS-Flight</title>
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
			Flight</h1>
			<p class="lead">The History of Scottish Aviation at Your Fingertips...</p>
		</div>
	</div>
	<!-- main header image ends here  -->
	<div class="container">
		<h1 class="subheading">Welcome to the National Museum of Flight</h1>
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
				<h4 class="museumHeading">Opening Times</h4>
				<ul class="list-group">
					<li class="list-group-item">Monday: 10am - 5pm</li>
					<li class="list-group-item">Tuesday: 10am - 5pm</li>
					<li class="list-group-item">Wednesday: 10am - 5pm</li>
					<li class="list-group-item">Thursday: 10am - 5pm</li>
					<li class="list-group-item">Friday: 10am - 5pm</li>
					<li class="list-group-item">Saturday: 10am - 5pm</li>
					<li class="list-group-item">Sunday: 10am - 5pm</li>
				</ul>
				<!-- google map container -->
				<div id="map"></div>
				<h4 class="museumHeading">Location</h4>
				<p>East Fortune Airfield<br>
				B1347 North Berwick<br>
				EH39 5LF</p>
				<h4 class="museumHeading">Phone</h4>
				<p>0300 123 6789</p>
				<h4 class="museumHeading">Admission</h4>
				<ul class="list-group">
					<li class="list-group-item">Adult: £12</li>
					<li class="list-group-item">Child(5-15): £7 (under 5 free)</li>
					<li class="list-group-item">Adult: £12</li>
					<li class="list-group-item">Family: £32 (2 adults and 2 children)</li>
					<li class="list-group-item">National Museums Scotland Members: Free</li>
				</ul>
				<a class="btn" href="workshopFlight.php">National Museum of Flight Workshop</a>
			</div>
		</div>
	</div><br>
	<div class="container">
		<h4 class="museumHeading">About the National Museum of Flight</h4>
		<p>The collections date back to 1909 when the Royal Scottish Museum acquired Percy Pilcher's Hawk glider. This was the first aircraft collected by any museum in the United Kingdom. The same year the museum acquired models of the Wright Model A and Blériot XI. During the early 1920s several aero engines were added to the collection, including a 1910 33 hp Wright engine donated by Orville Wright. In 1968 a Slingsby Gull sailplane was acquired. In 1971 the museum was given a Supermarine Spitfire XVI by the Ministry of Defence. This could not be displayed in Edinburgh and was stored in a hangar at East Fortune. The following year a Hawker Sea Hawk, de Havilland Sea Vampire and de Havilland Sea Venom were received from RNAS Lossiemouth. The growth in the aircraft collection led to the decision to open a Museum of Flight at East Fortune, with the public admitted for the first time on 7 July 1975. The displays included several aircraft on loan, including de Havilland Dragon Rapide (G-ADAH), BA Swallow (G-AEVZ) and Fairey Delta 2 WG774. In 1979 a temporary exhibition about the R34 airship was mounted, followed by Fighters of the RFC and RAF, 1914 to 1940 the following year. The 1981 temporary exhibition was The Flight of Rudolf Hess 1941.</p>
		<p>The museum expanded significantly in 1981 as a result of the sale by auction of much of the Strathallan Collection of aircraft. The museum purchased five aircraft (Bristol Fairchild Bolingbroke, de Havilland Dragon, de Havilland Puss Moth, General Aircraft Cygnet and Percival Provost). Of these, the Cygnet and Provost were the first aircraft to make their final flights to join the museum. That same year, the de Havilland Comet also flew in to the museum,[4] as did the Avro Vulcan in 1984. Another significant expansion took place with the donation of much of the British Airways Collection of aircraft in 2006. This collection was previously displayed at the Royal Air Force Museum Cosford. The museum acquired the BAC 1-11, Vickers Viscount, Boeing 707 forward fuselage and Hawker Siddeley Trident cockpit. Visitors are able to walk through the 1-11 and 707 and look into the flight deck of the Trident. This is in addition to walking through the de Havilland Comet and Jetstream 31 fuselage which were already in the museum collections.</p>
		<p>A £3.6 million project, completed in 2016, installed heating and insulation for the first time to two hangars that were built in 1940.</p>
		<?php include'includes/accessibilityInclude.php';  ?>
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
