<?php session_start(); 
include('connection.php');

?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <!-- Meta Tags -->
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="">
  <!-- Page Title -->
  <title>BeginWise</title>
  <!-- Favicon Icon -->
  <!-- <link rel="icon" href="assets/img/" /> -->
  <!-- Stylesheets -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/fontawesome.css" />
  <!-- <link rel="stylesheet" href="assets/css/slick.css" /> -->
  <link rel="stylesheet" href="assets/css/lightgallery.min.css" />
  <link rel="stylesheet" href="assets/css/animate.css" />
  <link rel="stylesheet" href="assets/css/jQueryUi.min.css" />
  <link rel="stylesheet" href="assets/css/textRotate.css" />
  <link rel="stylesheet" href="assets/css/select2.min.css" />
  <link rel="stylesheet" href="assets/css/style.css" />
 
</head>

<body>

  <!-- Start Header Section -->
  <header class="st-site-header st-style1 st-sticky-header">
    <div class="st-main-header">
      <div class="container">
        <div class="st-main-header-in">
          <div class="st-main-header-left">
            <a class="st-site-branding" href="index.php"><img src="assets/img/logo.svg" alt="beginwise" width="130px" height="51px"></a>
          </div>
          <div class="st-main-header-right">
            <div class="st-nav">
              <ul class="st-nav-list ">
                <li><a href="index.php" >Home</a></li>
                <li class=""><a href="schoolfinder.php">SchoolFinder</a></li>
                <li><a href="prephub.php">PrepHub</a></li>
                <li><a href="about.php">About</a></li>
  
                <?php  if(!isset($_SESSION['USER_IMAGE'])) { ?>
                <li><a href="signup.php" >Sign UP</a></li>
                <li><a href="login.php" >Login</a></li>
                <?php  } else { ?>
                  <li><img src="<?php echo  $_SESSION['USER_IMAGE'] ?>" height=15px; width=30px style=""></a>
                <ul>
                <li><a href="profile.php?id=<?php echo$_SESSION['USER_NAME'] ?>"><?php echo  $_SESSION['USER_NAME'] ?></a></li>
                <li><a href="child_detail_form.php" >Add Child Details</a></li>
                <li><a href="child_detail_show.php" >Show Child Details</a></li>
                <li><a href="logout.php" >LOG OUT</a></li>
                </ul>
                </li>
                  
                <?php } ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- End Header Section -->
  