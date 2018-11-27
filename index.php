<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
	<title>NMS-Home</title>
	<!-- bootstrap css -->
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet">
	<!-- nms stylesheet -->
	<link href="css/nms.css" rel="stylesheet">
	<?php include'includes/errorCheck.php' ?>
</head>
<body>
	<!-- navigation include file -->
	<?php include'includes/navinclude.php' ?>
  <!-- main header image starts here -->
	<div class="jumbotron jumbotron-fluid">
		<div class="container">
			<h1 class="display-1">National Museums of Scotland</h1>
			<p class="lead">The History of Scotland at Your Fingertips...</p>
		</div>
	</div>
  <!-- main header image ends here  -->
	<!-- card content starts here -->
	<div class="container">
		<div class="row">
			<!-- museum card starts here -->
			<div class="col-md-6 col-lg-4">
				<div class="card">
					<img alt="Museum" class="card-img-top img-fluid" src="images/os5.jpg">
					<div class="card-block">
						<h3 class="card-title">Museums</h3>
						<p>Click below to discover some of Scotland's greatest museums!</p>
						<div class="dropdown">
							<button class="btn dropdown-toggle" data-toggle="dropdown" type="button">Museums</button>
							<ul class="dropdown-menu">
								<li>
									<a href="nmofs.php">National Museum of Scotland</a>
								</li>
								<li>
									<a href="nmflight.php">National Museum of Flight</a>
								</li>
								<li>
									<a href="nmwar.php"> National Museum of War</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
      <!-- museum card ends here -->
			<!-- workshop card starts here -->
			<div class="col-md-6 col-lg-4">
				<div class="card">
					<img alt="workshop" class="card-img-top img-fluid" src="images/war5.jpg">
					<div class="card-block">
						<h3 class="card-title">Workshops</h3>
						<p>Click below to view the workshops currently running in Scottish museums!</p>
						<div class="dropdown">
							<button class="btn dropdown-toggle" data-toggle="dropdown" type="button">Workshops</button>
							<ul class="dropdown-menu">
								<li>
									<a href="workshopOS.php">National Museum of Scotland Workshop</a>
								</li>
								<li>
									<a href="workshopFlight.php">National Museum of Flight Workshop</a>
								</li>
								<li>
									<a href="workshopWar.php">National War Museum Workshop</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
      <!-- wokshop card ends here -->
			<!-- form card starts here -->
			<div class="col-md-6 col-lg-4">
				<div class="card">
					<img alt="Form" class="card-img-top img-fluid" src="images/flight2.jpg">
					<div class="card-block">
						<h3 class="card-title">Online Form</h3>
						<p>Click below to join the discussion about what Scotland's museums have to offer!</p><a class="btn" href="form.php">Go</a>
					</div>
				</div>
			</div>
      <!-- form card ends here -->
		</div>
	</div>
  <!-- card content ends here -->
  <!-- main content starts here -->
  <br>
  <div class="container">
    <h1 class="subheading"> Welcome to the National Museums of Scotland</h1>
		<p>National Museums Scotland (NMS) (Scottish Gaelic: Taigh-tasgaidh Nàiseanta na h-Alba) is an executive non-departmental public body of the Scottish Government. It runs the national museums of Scotland.NMS is one of the country's National Collections, and holds internationally important collections of natural sciences, decorative arts, world cultures, science and technology, and Scottish history and archaeology.</p>
		<h4>List of Museums</h4>
		<ul class="list-group">
			<li class="list-group-item">The National Museum of Scotland, comprising two linked museums on Chambers Street, in the Old Town of Edinburgh:
			</li>
			<li class="list-group-item">-The Museum of Scotland - concerned with the history and people of Scotland</li>
			<li class="list-group-item">-The Royal Museum - a general museum encompassing global geology, archaeology, natural history, science, technology and art</li>
			<li class="list-group-item">The National Museum of Flight, at East Fortune, East Lothian</li>
			<li class="list-group-item">The National Museum of Rural Life, at Wester Kittochside farm, in South Lanarkshire (previously the Museum of Scottish Country Life, previously the Scottish Agricultural Museum)</li>
			<li class="list-group-item">The National War Museum, at Edinburgh Castle</li>

		</ul>
  </div>
	<br>
  <!-- main content ends here -->
	<!-- footer include -->
	<?php include'includes/footerInclude.php' ?>

	<!-- bootstrap scripts -->
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</body>
</html>
