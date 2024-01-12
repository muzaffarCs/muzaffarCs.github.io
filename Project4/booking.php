<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <title> Booking</title>
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/csss.css">
<style>
  .car-main{
    background-color: rgba(247, 246, 246, 0.895); 
    }
    
</style>
  </head>
  <body>
  <section class="banner" style=" background: url('images/pricing.jpg') no-repeat center center/cover;">
<div class="headers" id="header">  
            <div class="logo">
                <a class="navbar-brand" href="index.php"><img class="logo" src="images/logo.png" alt="logo"></a>
            </div>
        
        <div class="menus">
            <nav>
                <input type="checkbox" id="click">
                <label for="click" class="menu-btn">
                    <i class="fas fa-bars"></i>
                </label>
                <ul id="cha">
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
                <h5>Contact Us</h5>
    </div>
</section>
      <!-- end of banner  -->
<section class="book-form">
    <div class="container py-5">
        <div class="row py-5 justify-content-center">
        <div class="col-md-10 col-sm-11 py-3 form-bg">
                <form action="admin/code.php" method="post">
                    <div class="form-row px-4">
                        <div class="form-group col-md-12">
                        <input type="text" name="name" class="form-control form-control-lg" id="" placeholder="Your Name" required>
                        </div>
                        <div class="form-group col-md-12">
                        <input type="text" name="mobile_number" class="form-control form-control-lg" id="" placeholder="Mobile Number">
                        </div>
                        <div class="form-group col-md-12">
                        <input type="text" name="whatsapp_number" class="form-control form-control-lg" id="" placeholder="WhatsApp Number">
                        </div>
                        <div class="form-group col-md-12">
                        <input type="text" name="cnic" class="form-control form-control-lg" id="" placeholder="Cnic" required>
                        </div>
                        <div class="form-group col-md-12">
                            <legend>Arrival Date</legend>
                        <input type="date" name="arival_date" class="form-control form-control-lg" id="" placeholder="dd----yyyy">
                        </div>
                        <div class="form-group col-md-12">
                        <legend>Departure Date</legend>
                        <input type="date" name="departure_date" class="form-control form-control-lg" id="" placeholder="dd----yyyy">
                        </div>

                        <div class="form-outline col-md-12">
                            <textarea class="form-control form-control-lg" id="textAreaExample6" rows="7" name="message" placeholder="Messages"></textarea>
                        </div>
                        <button type="submit" name="book_now" class="btn btn-primary btn-lg my-4" > BOOK NOW</button>
                        <div class="col-md-12">
                            <?php include('message.php');  ?>
                            <?php include('status.php');  ?>
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</section>




<section class="contact-map">
    <div class="container-fluid">
        
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3256.1776581900835!2d75.62521981473506!3d35.301566858308405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38e4635682624191%3A0x3cce57e7c2b75e12!2sIttihad%20Travel%20%26%20Tours%20Company!5e0!3m2!1sen!2s!4v1676632525758!5m2!1sen!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    </div>
</section>
<?php
include "footer.php";
?>
<!-- <script src="js/header.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  </body>
</html>