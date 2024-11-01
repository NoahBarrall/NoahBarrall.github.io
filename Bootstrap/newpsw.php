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
  
    <form class="modal-content animate" action="/action_page.php" method="post">
      <div class="imgcontainer">
        <img src="assets/img/RecZone_Logo_NoBG.png" alt="Avatar" class="avatar">
      </div>
  
      <div class="container">
        <label for="newpsw"><b>New Password</b></label>
        <input type="password" placeholder="New Password" name="new password" required>
  
        <label for="confnewpsw"><b>Confirm New Password</b></label>
        <input type="password" placeholder="Confirm New Password" name="confirm new psw" required>
          
        <button type="submit">Reset Password</button>
        <div>
          <label class="bottom-bar">
            <input type="checkbox" checked="checked" name="remember"> Remember me
          </label>
        </div>
      </div>
  
    </form>
  </div>

</body>
</html>