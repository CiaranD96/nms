<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
	<title>NMS-Register</title>
  <!-- bootstrap css -->
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet">
  <!-- nms stylesheet -->
	<link href="css/nms.css" rel="stylesheet">
	<?php include'includes/errorCheck.php' ?>
	<?php include'includes/dbconx.php' ?>

</head>
  <body>
    <?php include'includes/navinclude.php' ?>

      <h3 class="text-center"> Enter the Details Below to Register with The National Museum of Scotland</h3>

      <form class="register" action="scripts/register-send.php" method="post">
        <div class="container formbg">

          <div class="form-group">
            <label for="firstName">First Name:</label>
            <input type="text" name="firstName" placeholder="First Name" class="form-control" id="firstName" required>
          </div>

          <div class="form-group">
            <label for="lastName">Last Name:</label>
            <input type="text" name="lastName" placeholder="Last Name" class="form-control" id="lastName" required>
          </div>

          <div class="form-group">
            <label for="username">Username: (This cannot be changed!)</label>
            <input type="text" name="username" placeholder="Username" class="form-control" id="username" required>
          </div>

          <div class="form-group">
            <label for="email">Email Address:</label>
            <input type="email" name="email" placeholder="example@example.com" class="form-control" id="email" required>
          </div>

          <div class="form-group">
            <label for="password"> Password:</label>
            <input type="password" name="password" placeholder="Password" class="form-control" id="password" required>
          </div>

          <button type="submit" name="submit" class="btn" id="registerBtn">Register</button>
        </div>
      </form>
			<!-- footer include -->
			<?php include'includes/footerInclude.php' ?>




    <!-- bootstrap scripts -->
  	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  </body>
</html>
