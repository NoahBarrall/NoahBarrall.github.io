<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Falcon RecZone</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/RecZone_logo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
  <link href="assets/css/forms.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Remember
  * Template URL: https://bootstrapmade.com/remember-free-multipurpose-bootstrap-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <div class="logo d-flex align-items-center me-auto">
        <img src="assets/img/RecZone_Logo_NoBG.png" alt="">
        <h2>Falcon RecZone</h2>
      </div>

      <nav id="navmenu" class="navmenu">
        <ul>
            <li><a href="index.php">Homepage</a></li>
            <li><a href="intra.php">Intramural Signups</a></li>
            <li><a href="pickup.php">Pickup Signups</a></li>
            <li><a href="login.php" class="active">Login</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
    </div>
  </header>

  <!-- <div id="id01" class="modal"> -->
  <div>
  
    <form class="modal-content animate" action="forms/AddUser.php" method="post">
      <div class="imgcontainer">
        <img src="assets/img/RecZone_Logo_NoBG.png" alt="Avatar" class="avatar">
      </div>
  
      <div class="container">
        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Messiah Email" name="email" required>

        <label for="fname"><b>First Name</b></label>
        <input type="text" placeholder="Enter First Name" name="fname" required>

        <label for="lname"><b>Last Name</b></label>
        <input type="text" placeholder="Enter Last Name" name="lname" required>
        <br></br>

        <label for="grade"><b>Grade Level</b></label>
          <select name="grade" required>
          <option value="" disabled selected>Select Grade Level</option>
          <option value="freshman">Freshman</option>
          <option value="sophomore">Sophomore</option>
          <option value="junior">Junior</option>
          <option value="senior">Senior</option>
          <option value="other">Other</option>
        </select>
        <br></br>


        <label for="gender"><b>Gender</b></label>
          <select name="grade" required>
          <option value="" disabled selected>Select Gender</option>
          <option value="male">Male</option>
          <option value="female">Female</option>
        </select>
        <br></br>


        <label for="DoB"><b>Date of Birth</b></label>
        <input type="date" placeholder="Date of Birth" name="DoB" required>
        <br></br>
  
        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>

        <label for="confirmpsw"><b>Confirm Password</b></label>
        <input type="password" placeholder="Confirm Password" name="confirmpsw" required>
          
        <button type="submit">Register</button>
        <label>
          <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
        <span class="psw"><a href="forgotpsw.php">Forgot Password?</a></span>
      </div>
  
    </form>
  </div>

</body>
</html>