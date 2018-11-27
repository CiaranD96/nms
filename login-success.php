<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
	<title>NMS-LoginSuccess</title>
	<!-- bootstrap css -->
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet">
	<!-- nms stylesheet -->
	<link href="css/nms.css" rel="stylesheet">
	<?php include'includes/errorCheck.php' ?>
</head>
  <body>
    <?php include'includes/navinclude.php' ?>

    <!-- main content starts here -->
    <div class="container">
      <h3>Login Successful</h3>
      <h4> <a href="index.php">Click Here to go Home</a></h4>
    </div>
    <!-- main content ends here -->


    <!-- bootstrap scripts -->
  	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  </body>
</html>
