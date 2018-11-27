<?php
 include('../includes/errorCheck.php');
 include('../includes/dbconx.php');

 /*declaring and assigning values to variables using the
 $_POST method. These values are received from the form
 fields.*/
 $id = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['id']));
 $firstName = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['firstName']));
 $lastName = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['lastName']));
 $email = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['email']));
 if(isset($id)){ //does $recordID contain a value
 /*update MySQL statement using the record ID to identify and
 update a unique record.*/
$sql = mysqli_query($conn,"UPDATE users SET firstName='$firstName',lastName='$lastName',email='$email' WHERE id='$id'") or die('Error: '.mysqli_error());
}
 // close the connection when done
 mysqli_close($conn);
 /*redirect the user back to account.php to see the changes to a
 record*/
 header( 'Location: ../account.php' ) ;

 ?>
