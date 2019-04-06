<?php
    if (!isset($_SESSION)) {
        session_start();
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title> NewLife Hospital
    </title>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> -->
    <link href="bootstrap.min.css" rel="stylesheet">
    <!-- <link href="jumbotron.css" rel="stylesheet"> -->
  </head>
  <body style="background-image: linear-gradient(to bottom right,#ff9999 0%, #66ff66 100%);">
      <div class="container" style="padding-top: 10px;">
        <nav class="navbar navbar-static-top">
        <h2 style="color:#000000">❆ NewLife Hospital</h2>
            <ul class="nav nav-pills">
              <li class="nav-item">
                <a href="https://www.google.com/maps/place/BIET+Davangere/@14.4449289,75.8995376,17z/data=!3m1!4b1!4m5!3m4!1s0x3bba256183723769:0xc0d54a9de2b6f57c!8m2!3d14.4449237!4d75.9017263?hl=en" target="_blank"><B> Address: BIET College,Shamnur Road,Davangere:577004</B></a>
              </li>
              <li class="nav-item">
                <h5>Ambulance Number: +91 9482361270</h5>
              </li>
              <?php
                if (isset($_SESSION['username'])) {
                    echo '<a href="logout.php" style="align-items: right;"> <button class="btn btn-danger" >Logout
                  </button></a>';
                }
              ?>
            </ul>
        </nav>
        </div>
