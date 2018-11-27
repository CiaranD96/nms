<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
	<title>NMS-Contact</title>
  <!-- bootstrap css -->
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet">
  <!-- nms stylesheet -->
	<link href="css/nms.css" rel="stylesheet">
	<?php include'includes/errorCheck.php' ?>
</head>
  <body>
    <?php include'includes/navinclude.php' ?>

      <h3 class="text-center"> Enter the Details Below to Contact The National Museum of Scotland Team</h3>

      <form class="container formbg" action="scripts/contact-send.php" method="post">

					<div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" placeholder="name" class="form-control" id="name" required>
          </div>

          <div class="form-group">
            <label for="email">Email Address:</label>
            <input type="email" name="email" placeholder="example@example.com" class="form-control" id="email" required>
          </div>

					<div class="form-group">
						<label for="subject">Subject:</label>
						<input type="text" name="subject" placeholder="Subject Heading" class="form-control" id="subject" required>
					</div>

					<div class="form-group">
						<label for="contact">Message:</label>
						<textarea class="form-control" name="message" rows="8" cols="80" id="contact" placeholder="write your comments here"></textarea>
					</div>

          <button type="submit" name="submit" class="btn">Submit</button>

      </form>
			<!-- footer include -->
			<?php include'includes/footerInclude.php' ?>




    <!-- bootstrap scripts -->
  	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  </body>
</html>
