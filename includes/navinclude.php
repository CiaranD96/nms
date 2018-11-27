<!--navigation starts here -->
<nav class="navbar navbar-expand-lg">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarToggler">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Museums</a>
        <div class="dropdown-menu">
        <a class="dropdown-item" href="nmofs.php">National Museum of Scotland</a>
        <a class="dropdown-item" href="nmflight.php">National Museum of Flight</a>
        <a class="dropdown-item" href="nmwar.php">National War Museum</a>
  </div>
</li>
<li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Workshops</a>
  <div class="dropdown-menu">
  <a class="dropdown-item" href="workshopOS.php">National Museum of Scotland Workshop</a>
  <a class="dropdown-item" href="workshopFlight.php">National Museum of Flight Workshop</a>
  <a class="dropdown-item" href="workshopWar.php">National Museum of War Workshop</a>
</div>
</li>
      <li class="nav-item">
        <a class="nav-link" href="form.php">Form</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
    </ul>
    <!-- if user is logged in, display account and logout nav links instead -->
    <?php if(isset($_SESSION['username'])){
      ?>
    <ul class="navbar-nav my-2 my-lg-0">
      <li class="nav-item">
        <a class="nav-link" href="account.php"><?php echo $_SESSION['username']; ?></a>
      </li>
      <li class="nav-tem">
        <a class="nav-link" href="scripts/logout.php">Logout</a>
      </li>
    </ul>
    <?php } else { ?>
      <ul class="navbar-nav my-2 my-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="register.php">Register</a>
        </li>
        <li class="nav-tem">
          <a class="nav-link" href="login.php">Login</a>
        </li>
      </ul>
      <?php } ?>
  </div>
</nav>
<!-- navigation ends here -->
