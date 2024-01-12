<?php
include ('admin/connection.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <title> Cars</title>
    <link rel="stylesheet" href="css/car.css">
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
  <section class="banner" style=" background: url('images/banner.jpg') no-repeat center center/cover;">
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
        <a href="index.php">Home > /</a><span> Cars > </span>
        </div>
        <h5>Choose Your Car</h5>
      </div>
    </section>
      <!-- end of banner  -->

<section class="car-main">
    <div class="container-fluid py-5">
        <div class="row justify-content-center">
                <?php
                $data = mysqli_query($conn,"SELECT * FROM tbl_vehicle");
                while( $row = mysqli_fetch_assoc($data)){
              ?>
            <div class="col-md-3 col-sm-12 col-lg-3 py-3 mx-2">
              <div class="card " id="car-cards">
                  <div class="car-image">
                      <img src="admin/upload_img/vehicles/<?php echo $row['featured_photo'] ?>" alt="cars">
                  </div>
                  <div class="box-content">
                    <h5 class="card-title px-3"> <b> <?php echo $row['vehicles_name'] ?> </b> </h5>
                    <p class="card-text d-flex justify-content-end px-3"> <span class="text-primary"><b> RS. <?php echo $row['vehicles_price'] ?> </b> </span>/1day </p>
                      <div class="btn-sec">
                          <a href="booking.php?veh_id=<?= $row['veh_id'] ?>" class="car-bb"> Book now</a>
                          <a href="#" class="car-dd"> Detail</a>
                      </div>
                  </div>
              </div>
            </div>
            <?php } ?>
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