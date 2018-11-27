<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
	<title>NMS-Scotland</title>
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
			Scotland</h1>
			<p class="lead">The History of Scotland at Your Fingertips...</p>
		</div>
	</div>
	<!-- main header image ends here  -->
	<div class="container">
		<h1 class="subheading">Welcome to the National Museum of Scotland</h1>
	</div>
	<!-- main content starts here -->
	<div class="container imageGallery">
		<div class="row">
			<div class="col-lg-8">
				<h4 class="museumHeading">National Museum of Scotland Image Gallery</h4>
				<!-- image gallery starts here -->
				<img alt="National Museum of Scotland" id="galleryMain" src="images/OSjumbo.jpg"><br>
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
				<p>Chambers Street,<br>
				Edinburgh,<br>
				EH1 1JF</p>
				<h4 class="museumHeading">Phone</h4>
				<p>0300 123 6789</p>
				<h4 class="museumHeading">Admission</h4>
				<ul class="list-group">
					<li class="list-group-item">Free</li>
					<li class="list-group-item">Donations Welcome</li>

				</ul>
				<a class="btn" href="workshopOS.php"> National Museum of Scotland Workshop</a>
			</div>
		</div>
	</div><br>
	<div class="container">
		<h4 class="museumHeading">About the National Museum of Scotland</h4>
		<p>The National Museum of Scotland, Edinburgh, Scotland, was formed in 2006 with the merger of the new Museum of Scotland, with collections relating to Scottish antiquities, culture and history, and the adjacent Royal Museum (so renamed in 1995), with collections covering science and technology, natural history, and world cultures.</p>
		<p> The two connected buildings stand beside each other on Chambers Street, by the intersection with the George IV Bridge, in central Edinburgh. The museum is part of National Museums Scotland. Admission is free.
The two buildings retain distinctive characters: the Museum of Scotland is housed in a modern building opened in 1998, while the former Royal Museum building was begun in 1861, and partially opened in 1866, with a Victorian Venetian Renaissance facade and a grand central hall of cast iron construction that rises the full height of the building. This building underwent a major refurbishment and reopened on 29 July 2011 after a three-year, £47 million project to restore and extend the building led by Gareth Hoskins Architects along with the concurrent redesign of the exhibitions by Ralph Appelbaum Associates.</p>
		<p>
The National Museum incorporates the collections of the former National Museum of Antiquities of Scotland. As well as the national collections of Scottish archaeological finds and medieval objects, the museum contains artefacts from around the world, encompassing geology, archaeology, natural history, science, technology, art, and world cultures. The 16 new galleries reopened in 2011 include 8,000 objects, 80 per cent of which were not formerly on display. One of the more notable exhibits is the stuffed body of Dolly the sheep, the first successful clone of a mammal from an adult cell. Other highlights include Ancient Egyptian exhibitions, one of Elton John's extravagant suits and a large kinetic sculpture named the Millennium Clock. A Scottish invention that is a perennial favourite with school parties is The Maiden, an early form of guillotine.
In 2017, the museum received 2,165,601 visitors, making it Scotland's most popular visitor attraction that year</p>

<?php include'includes/accessibilityInclude.php';  ?>
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
