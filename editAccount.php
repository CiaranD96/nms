<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>NMS-EditAccount</title>
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <?php
      include('includes/dbconx.php');

      $id=$_GET['id']; // gets the id from the url string
      if(isset($id)){
        $sql=mysqli_query($conn, "SELECT * FROM users WHERE id='$id'")or die('Query error. try again:'.mysqli_error());

        $row = mysqli_fetch_array($sql);
        //echo "Update Record".$id; // testing purposes only
      }else{
        echo "Problem with the record update";
      }

     ?>
     <!-- bootstrap css -->
   	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet">
     <!-- nms css -->
     <link rel="stylesheet" href="css/nms.css">
  </head>

  <body>

    <?php include'includes/navinclude.php' ?>
    <br>
    <h4 class="subheading">Change Your Account Details Below</h4>
    <div class="container">
    <form action="scripts/editAccount-send.php" method="post">
      <div class="form-group">

      <input class="form-control" type="hidden" name="id" value="<?php echo $row['id']; ?>"/>
      <br/>

      <label for="firstname"> First Name:</label>
      <br/>
      <input class="form-control" type="text" name="firstName" id="firstname" value="<?php echo $row['firstName']; ?>"/>
      <br/>

      <label for="lastName">Last Name:</label>
      <br/>
      <input class="form-control" type="text" name="lastName" id="lastName" value="<?php echo $row['lastName']; ?>"/>
      <br/>

      <label for="email">Email Address:</label>
      <br/>
      <input class="form-control" type="text" name="email" id="email" value="<?php echo $row['email']; ?>"/>
      <br/>
      <br>

      <input class="btn" type="submit" name="submit" value="Update Account"/>
      </div>
    </form>
  </div>
  <!-- footer include -->
	<?php include'includes/footerInclude.php' ?>

  <!-- bootstrap scripts -->
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  </body>
</html>
