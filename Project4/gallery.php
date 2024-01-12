<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <title> Gallery</title>
    <link rel="stylesheet" href="css/gallery.css">
    <link rel="stylesheet" href="css/services.css">
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/csss.css">
    <style>
    .card #card-images{
    transform: scale(1);
    transition: 0.2s ease-in-out;
    cursor: pointer;
    }
    .card #card-images:hover{
        transform: scale(1.09);
    }
    </style>
  </head>
  <body>
  <section class="banner" style=" background: url('images/gbanner.png') no-repeat center center/cover;">
  <div class="headers">  
            <div class="logo">
            <a class="navbar-brand" href="index.php"><img class="logo" src="images/logo.png" alt="logo"></a>
            </div>
        
        <div class="menus">
            <nav>
                <input type="checkbox" id="click">
                <label for="click" class="menu-btn">
                    <i class="fas fa-bars"></i>
                </label>
                <ul>
                    <li><a class="nav-link" href="index.php">Home</a> </li>
                    <li><a class="nav-link" href="about.php">About</a> </li>
                    <li><a class="nav-link" href="services.php">Services</a> </li>
                    <li> <a class="nav-link" href="gallery.php">Gallery</a> </li>
                    <li> <a class="nav-link" href="pricing.php">Pricing</a> </li>
                    <li> <a class="nav-link" href="cars.php">Cars</a> </li>
                    <li> <a class="nav-link" href="eventANDcltural.php">Event & Cultural</a> </li>
                    <li> <a class="nav-link" href="contact.php">Contacts</a> </li>
                    <li> <a class="nav-link" href="faqs.php">FAQs</a> </li>
                </ul>
            </nav>
        </div>
        </div>
            <div class="whts-icon">
              <a href="https://wa.me/03455828878"> <i class="fa-brands fa-whatsapp"></i></a>
            </div>
        <div class="banner-content-about">
          <div class="link-banner">
        <a href="index.php">Home > /</a><span> Cars ></span>
        </div>
        <h5>Choose Your Car</h5>
      </div>
    </section>
      <!-- end of banner  -->
<section id="gallery-main">
    <div class="container">
    <div class="row row-cols-1 row-cols-md-3 g-4 row-gallery">
        <div class="col py-5" id="img-card">
            <div class="card" >
            <img src="images/car1.png" id="card-images" class=" image-fluid" alt="car1">
            </div>
        </div>
        <div class="col py-5" id="img-card">
            <div class="card" >
            <img src="images/car3.png" id="card-images" class=" image-fluid" alt="car4">
            </div>
        </div>
        <div class="col py-5" id="img-card">
            <div class="card" >
            <img src="images/car2.png" id="card-images" class=" image-fluid" alt="car2">
            </div>
        </div>
        <div class="col py-5" id="img-card">
            <div class="card" >
            <img src="images/car3.png" id="card-images" class=" image-fluid" alt="car3">
            </div>
        </div>
        </div>
    </div>
</section>



<?php
  include "footer.php";
?>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>