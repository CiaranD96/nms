<?php
include('../includes/errorCheck.php');
include('../includes/dbconx.php');

  if(empty($_POST['username'])){
    die('no username included');
  }
// specials characters in a string for use in sql staement
  $username= htmlspecialchars(mysqli_real_escape_string($conn, $_POST['username']));
  $workshop= htmlspecialchars(mysqli_real_escape_string($conn, $_POST['workshop']));
  $day= htmlspecialchars(mysqli_real_escape_string($conn, $_POST['day']));
  $timeslot= htmlspecialchars(mysqli_real_escape_string($conn, $_POST['timeslot']));
  $attendees= htmlspecialchars(mysqli_real_escape_string($conn, $_POST['attendees']));

  //insert data in to databaseand check whether the connection and query exist and are error free
  $sql="INSERT INTO booking (username, workshop, day, timeslot, attendees) VALUES ('$username','$workshop','$day','$timeslot','$attendees')";

  if ($conn-> query($sql)===TRUE){
    header("location: ../account.php");}
    else{
      echo "<p><a href='../booking.php'> Oops we have an error. Navigate back to booking</a> </p>";
    }

    //close connection
    $conn->close();

?>
