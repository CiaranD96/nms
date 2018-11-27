<?php
 include('../includes/errorCheck.php');
 include('../includes/dbconx.php');

 /*declaring and assigning values to variables using the
 $_POST method. These values are received from the form
 fields.*/
 $bookingId = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['bookingId']));
 $workshop = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['workshop']));
 $day = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['day']));
 $timeslot = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['timeslot']));
 $attendees = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['attendees']));
 //var_dump($_POST); testing only
 if(isset($bookingId)){ //does $bookingID contain a value
 /*update MySQL statement using the record ID to identify and
 update a unique record.*/
$sql = mysqli_query($conn,"UPDATE booking SET workshop='$workshop',day='$day',timeslot='$timeslot',attendees='$attendees' WHERE bookingId='$bookingId'") or die('Error: '.mysqli_error());
}
 // close the connection when done
 mysqli_close($conn);
 /*redirect the user back to view.php to see the changes to a
 record*/
 header( 'Location: ../account.php' ) ;


 ?>
