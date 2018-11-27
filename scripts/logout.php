<?php
session_start();
// remove all session variables
session_unset();
// destroy the session
session_destroy();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>NMS - Logout</title>
    <!-- bootstrap css -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- revive css -->
    <link rel="stylesheet" href="../css/nms.css">
  </head>
  <body>
    <?php include'../includes/navIncludeLogout.php' ?>

    <div class="container">
      <br>
      <h2>You have succesfully logged out. <a href="../index.php">Click Here</a> to return to the home page.</h2>
    </div>

    <!-- bootstrap scripts -->
  	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    </body>
