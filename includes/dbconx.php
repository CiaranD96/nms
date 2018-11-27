<?php
// names have been removed from this page for security reasons.
$servername =" "; //database server location
$username =" "; // databse username
$password=" "; // database password
$dbase=" "; // databse name

// create connection
$conn= new mysqli($servername,$username,$password,$dbase);

//check connection
if ($conn->connect_error){
  die("<p> Oops, we have an error! Navigate back to try again.</p> <p><a href='index.php'>Login</a></p>");
}
 ?>
