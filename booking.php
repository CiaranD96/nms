<?php
  session_start();
  if(!$_SESSION['username']){
    header("location:login.php");
    die();
  }

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
	<title>NMS-Booking</title>
	<!-- bootstrap css -->
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet">
	<!-- nms stylesheet -->
	<link href="css/nms.css" rel="stylesheet">
	<?php include'includes/errorCheck.php' ?>
</head>
<body>
	<!-- navigation include file -->
	<?php include'includes/navinclude.php' ?>
	<br>
	<h4 class="subheading">Fill in the Form Below to Book A Workshop!</h4>
	<!-- booking form starts here -->
	<form class="container" action="scripts/booking-send.php" method="post">
		<div class="form-group">
			<input class="form-control" type="hidden" name="username" value="<?php echo $_SESSION['username']; ?>">
		</div>
		<div class="form-group">
			<label for="workshop">Select Workshop:</label>
			<select class="form-control" name="workshop" id="workshop">
				<option>National Museum of Scotland Workshop</option>
				<option>National Museum of Flight Workshop</option>
				<option>National War Museum Workshop</option>
			</select>
		</div>
		<div class="form-group">
			<label for="day">Select Day:</label>
			<select class="form-control" name="day" id="day">
				<option>Monday</option>
				<option>Tuesday</option>
				<option>Wednesday</option>
				<option>Thursday</option>
				<option>Friday</option>
			</select>
		</div>
		<div class="form-group">
			<label for="timeslot">Select Time:</label>
			<select class="form-control" name="timeslot" id="timeslot">
				<option>10:00AM</option>
				<option>12:00PM</option>
				<option>3:00PM</option>
			</select>
		</div>
		<div class="form-group">
			<label for="amount">Select Number of Attendee's:</label>
			<select class="form-control" name="attendees" id="amount">
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
				<option>6</option>
				<option>7</option>
				<option>8</option>
				<option>9</option>
				<option>10</option>
				<option>11</option>
				<option>12</option>
				<option>13</option>
				<option>14</option>
				<option>15</option>
				<option>16</option>
				<option>17</option>
				<option>18</option>
				<option>19</option>
				<option>20</option>
			</select>
		</div>
		<button class="btn" type="submit" name="button">Book</button>
	</form>
  <!-- footer include -->
  <?php include'includes/footerInclude.php' ?>

	<!-- bootstrap scripts -->
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</body>
</html>
