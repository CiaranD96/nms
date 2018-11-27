<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
	<title>NMS-Login</title>
	<?php include'includes/errorCheck.php' ?>
  <!-- bootstrap css -->
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet">
  <!-- nms stylesheet -->
	<link href="css/nms.css" rel="stylesheet">
</head>
  <body>
    <?php include'includes/navinclude.php' ?>

      <h3 class="text-center"> Enter the Details Below to Login to The National Museum of Scotland Website</h3>

      <form class="register" action="scripts/login-send.php" method="post">
        <div class="container formbg">
          <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" name="username" placeholder="Username" class="form-control" id="username" required>
          </div>

          <div class="form-group">
            <label for="password"> Password:</label>
            <input type="password" name="password" placeholder="Password" class="form-control" id="password" required>
          </div>

          <button type="submit" name="submit" class="btn" id="loginBtn">Login</button>
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
