<?php
  if(isset($_POST['submit'])){
    $name = htmlspecialchars($_POST['name']);
    $emailFrom = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    $mailTo = "ciaran.donnachie@hotmail.co.uk";
    $headers = "From: ".$emailFrom;
    $txt = "You Have Received an Email From ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("location: ../contact.php?mailsent");
  }
 ?>
