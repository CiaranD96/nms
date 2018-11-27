<?php
  // collects the id through the url;
  $myID=$_GET['id'];

  // for testing purposes to show that they id has been sent
  echo $myID;

  // connect to the database
  include('includes/dbconx.php');

  // if the variable ($myID) has been set then execute if statement which contains delete query
  if(isset($myID)){
    $sql = "DELETE FROM booking WHERE bookingId='$myID'";
  }

  // if the query returns true then execute if statement
  if($conn->query($sql) === TRUE){
    header("Location: account.php");
  } else{// if the query returns false
    echo "Error deleting record: ". $conn->error;
  }
  $conn->close(); // close connection
 ?>
