<?php
  session_start();
  if (isset($_POST['submit'])) {

  include'../includes/errorCheck.php';
  include'../includes/dbconx.php';
  $username = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['username']));
  $password = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['password']));
  //error handlers
  //check if inputs are Empty
  if(empty($username) || empty($password)){
    header("Location: ../login.php?login=empty");
    exit();
  }else{
    // if neither username or password exist, pass through message in url string
    $sql = "SELECT * FROM users WHERE username ='$username'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    if($resultCheck < 1){
      header("Location: ../login.php?login=accountdoesnotexist");
      exit();
    } else{
      if($row = mysqli_fetch_assoc($result)){
        // dehashing password - if username or password is incorrect pass message through url string
        $hashpasswordCheck = password_verify($password, $row['password']);
        if($hashpasswordCheck == false){
          header("Location: ../login.php?login=usernameorpasswordincorrect");
          exit();
        } elseif($hashpasswordCheck == true){
          // log in the user here
          $_SESSION["username"] = $username;
          //$_SESSION["authuser"] = 1;
          header("location: ../account.php?loginsuccessful");
        }
      }
    }
  }
} else {
  header("Location: ../login.php");
  exit();
}
?>
