<?php
$servername ="localhost";
$username ="root";
$password="root";
$dbase="nms";

// create connection
$conn= new mysqli($servername,$username,$password,$dbase);

//check connection
if ($conn->connect_error){
  die("<p> Oops, we have an error! Navigate back to try again.</p> <p><a href='index.php'>Login</a></p>");
}
 ?>
