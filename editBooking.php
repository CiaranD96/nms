<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>NMS-EditWorkshopBooking</title>
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <?php
      include('includes/dbconx.php');

      $id=$_GET['id']; // gets the id from the url string
      if(isset($id)){
        $sql=mysqli_query($conn, "SELECT * FROM booking WHERE bookingId='$id'")or die('Query error. try again:'.mysqli_error());
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
    <h4 class="subheading">Change Your Booking Details Below</h4>

    <form class="container" action="scripts/editBooking-send.php" method="post">
      <input class="form-control" type="hidden" name="bookingId" value="<?php echo $row['bookingId']; ?>"/>
      <br/>
  		<div class="form-group">
  			<label for="workshop">Select Workshop:</label>
  			<select class="form-control" name="workshop" id="workshop">
          <option value="<?php echo $row['workshop']; ?>"><?php echo $row['workshop']; ?></option>
  				<option value="National Museum of Scotland Workshop">National Museum of Scotland Workshop</option>
  				<option value="National Museum of Flight Workshop">National Museum of Flight Workshop</option>
  				<option value="National War Museum Workshop">National War Museum Workshop</option>
  			</select>
  		</div>
  		<div class="form-group">
  			<label for="day">Select Day:</label>
  			<select class="form-control" name="day" id="day">
          <option value="<?php echo $row['day']; ?>"><?php echo $row['day']; ?></option>
  				<option value="Monday">Monday</option>
  				<option value="Tuesday">Tuesday</option>
  				<option value="Wednesday">Wednesday</option>
  				<option value="Thursday">Thursday</option>
  				<option value="Friday">Friday</option>
  			</select>
  		</div>
  		<div class="form-group">
  			<label for="timeslot">Select Time:</label>
  			<select class="form-control" name="timeslot" id="timeslot">
          <option value="<?php echo $row['timeslot']; ?>"><?php echo $row['timeslot']; ?></option>
  				<option value="9:00AM">9:00AM</option>
  				<option value="12:00PM">12:00PM</option>
  				<option value="3:00PM">3:00PM</option>
  			</select>
  		</div>
  		<div class="form-group">
  			<label for="amount">Select Number of Attendee's:</label>
  			<select class="form-control" name="attendees" id="amount">
          <option value="<?php echo $row['attendees']; ?>"><?php echo $row['attendees']; ?></option>
  				<option value="1">1</option>
  				<option value="2">2</option>
  				<option value="3">3</option>
  				<option value="4">4</option>
  				<option value="5">5</option>
  				<option value="6">6</option>
  				<option value="7">7</option>
  				<option value="8">8</option>
  				<option value="9">9</option>
  				<option value="10">10</option>
  				<option value="11">11</option>
  				<option value="12">12</option>
  				<option value="13">13</option>
  				<option value="14">14</option>
  				<option value="15">15</option>
  				<option value="16">16</option>
  				<option value="17">17</option>
  				<option value="18">18</option>
  				<option value="19">19</option>
  				<option value="20">20</option>
  			</select>
  		</div>
<input class="btn" type="submit" name="submit" value="Update Booking"/>
  	</form>
    <!-- footer include -->
    <?php include'includes/footerInclude.php' ?>

  <!-- bootstrap scripts -->
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  </body>
</html>
