<?php
    session_start();
    $user = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
	<title>NMS-Account</title><!-- bootstrap css -->
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet"><!-- nms stylesheet -->
	<link href="css/nms.css" rel="stylesheet"><?php include'includes/errorCheck.php' ?><?php include'includes/dbconx.php' ?>
</head>
<body>
	<?php include'includes/navinclude.php' ?><?php echo '<h3 class="text-center"> Welcome '. $_SESSION['username'].' To Your Account</h3>'; ?>
	<div class="container">
		<?php
		            $sql = "SELECT * FROM users WHERE username = '$user'";
		            $result = $conn ->query($sql);
		                    // select all rows from the users list where the username is equal to the username stored in the session and display back to the screen as a list.
		            if($result-> num_rows>0){
		            while($row = $result->fetch_assoc()){
		                            echo '<div class="container">';
		                            echo '<h5> Your Account Details </h5>';
		                            echo '<ul class="list-group">';
		                    echo '<li class="list-group-item">'.'<h6>First Name:</h6>'.$row['firstName'].'</li>';
		                    echo '<li class="list-group-item">'.'<h6>Last Name:</h6>'.$row['lastName'].'</li>';
		                    echo '<li class="list-group-item">'.'<h6>Username (can not be changed):</h6>'.$row['username'].'</li>';
		                    echo '<li class="list-group-item">'.'<h6>Email Adress:</h6>'.$row['email'].'</li>';
		                                echo "<li class='list-group-item'> <a href='editAccount.php?id=".$row['id']."'>Update</a></li>";
		                            echo "</ul>";
		                            echo '</div><br>';
		            }
		            }
		          else{
		            echo "0 results";
		          }
		                    // select all rows from booking where the username is equal to the username stored in the session and display back to the page as a list.
		                    $sqlbooking = "SELECT * FROM booking WHERE username = '$user'";
		                    $resultbooking = $conn ->query($sqlbooking);
		                    echo '<div class="container">';
		                    echo '<h5>Your Workshop Bookings</h5>';
		                    if($resultbooking-> num_rows>0){
		                        while($row = $resultbooking->fetch_assoc()){
		                                echo '<ul class="list-group">';
		                                echo '<li class="list-group-item">'.'<h6>Workshop:</h6>'.$row['workshop'].'</li>';
		                                echo '<li class="list-group-item">'.'<h6>Day:</h6>'.$row['day'].'</li>';
		                                echo '<li class="list-group-item">'.'<h6>Time:</h6>'.$row['timeslot'].'</li>';
		                                echo '<li class="list-group-item">'.'<h6>Number of Attendees:</h6>'.$row['attendees'].'</li>';
		                                echo "<li class='list-group-item'> <a href='editBooking.php?id=".$row['bookingId']."'>Update</a></li>";
		                                echo "<li class='list-group-item'> <a href='deleteBooking.php?id=".$row['bookingId']."'>Cancel Booking</a></li>";
		                            echo "</ul><br/>";

		                        }echo '</div>';
		                    }
		                     else{
		                         echo "You have 0 bookings";
		                     }
		                    $conn->close();
		                    ?>
	</div><!-- list showing records ends here -->
	<!-- footer include -->
	<?php include'includes/footerInclude.php' ?><!-- bootstrap scripts -->
	<script src="https://code.jquery.com/jquery-3.3.1.js">
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js">
	</script>
</body>
</html>
