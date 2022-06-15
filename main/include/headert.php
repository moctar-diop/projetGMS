<?php
$session=session::getInstance();
?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>GENIE MANAGEMENT SOLUTION </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/logo.jpeg" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap-grid.rtl.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap-grid.rtl.css.map" rel="stylesheet">

  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/styles.css" rel="stylesheet">



</head>
<style>
 #header {
    transition: all 0.5s;
    z-index: 997;
    padding: 20px 0;
    background-color: #05094d;
  }
  #header .logo {
    font-size: 30px;
    margin: 0;
    padding: 0;
    line-height: 1;
    font-weight: 600;
    letter-spacing: 1px;
    text-transform: uppercase;
  }
  #header .logo a {
    color: #fff;
  }
  #header .logo img {
    max-height: 40px;
  }
  #header.header-scrolled, #header.header-inner-pages {
    background: rgba(4, 1, 56, 0.9);
    padding: 12px 0;
  }
  
</style>
<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html"><img src="../assets/img/logo.jpeg" alt="" class="img-fluid"></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="../index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto " href="teranga/index.php">Teranga Etudes</a></li>
         <?php if(isset($_SESSION['auth'])): ?>
          <li><a class="nav-link scrollto" href="logout.php">Logout</a></li>
          <li class="dropdown"><a href="auth/account.php"><span><?= $session->getName()?></span> <i class="bi bi-chevron-down"></i></a>
          </li>
          <?php else : ?>
          <li><a href="account/login.php">Login</a></li>
          <li><a href="account/register.php">S'inscrire</a></li>

          <?php endif; ?>
         
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>

  
  </header>

  <?php 
  if (isset($_SESSION['flash'])) :?>
  <?php foreach($_SESSION['flash'] as $type => $message ) :?>
  <div class="alert alert-<?= $type ?>">
  <? $message ?>
  </div>
<?php endforeach; ?>
<?php unset($_SESSION['flash']) ?>

<?php endif ?>


