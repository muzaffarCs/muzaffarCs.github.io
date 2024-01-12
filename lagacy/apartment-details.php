<?php include('head.php');
if (isset($_GET['id'])) {
 $apartment_id = $_GET['id'];
}


   
$statement = $pdo->prepare("SELECT * FROM tbl_apartments WHERE id=?");
$statement->execute(array($_REQUEST['id']));
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row) {

    $id       = $row['id'];
    $title       = $row['title'];
    $squre_area        = $row['squre_area'];
    $floor     = $row['floor'];
    $bedrooms        = $row['bedrooms'];
    $bathroom            = $row['bathroom'];
    $terrace      = $row['terrace'];
    $parking        = $row['parking'];
    $details       = $row['details'];
    $status     = $row['status'];
    $price = $row['price'];

      $rooms      = $row['rooms'];
    $hall        = $row['hall'];
    $kicthen       = $row['kicthen'];
    $photo     = $row['photo'];
  
} ?>




<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>





    <div class="preloader">
        <div class="preloader__image"></div>
    </div>
    <!-- /.preloader -->


    <div class="page-wrapper">
  <?php include('header.php'); ?>

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
            </div>
            <div class="page-header__overly"></div>
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.php">Home</a></li>
                        <li><span>/</span></li>
                        <li>Apartments</li>
                    </ul>
                    <h2>Apartments Details One</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Apartments Two Page Start-->
        <section class="apartment-details-one">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="apartment-details-one__img-box">
                            <div class="apartment-details-one__img">
                                <img src="assets/uploads/<?php echo $photo ?>" alt="">
                            </div>
                        </div>
                        <div class="apartment-details-one__list-box">
                            <ul class="list-unstyled apartment-details-one__list">
                                <li>
                                    <div class="apartment-details-one__list-content">
                                        <h3><?php
                                         $val =count(array($squre_area));
                                         if($val >= 1){
                                            echo $row['squre_area']; 
                                         }
                                         ?></h3>
                                        <h5>SQUARE AREAS</h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="apartment-details-one__list-content">
                                        <h3><?php
                                         $val =count(array($floor));
                                         if($val >= 1){
                                            echo $row['floor']; 
                                         }
                                         ?><sub>th</sub></h3>
                                        <h5>floor</h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="apartment-details-one__list-content">
                                        <h3><?php
                                         $val =count(array($bedrooms));
                                         if($val >= 1){
                                            echo $row['bedrooms']; 
                                         }
                                         ?></h3>
                                        <h5>Bedrooms</h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="apartment-details-one__list-content">
                                        <h3><?php
                                         $val =count(array($bathroom));
                                         if($val >= 1){
                                            echo $row['bathroom']; 
                                         }
                                         ?></h3>
                                        <h5>bathrooms</h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="apartment-details-one__list-content">
                                        <h3><?php
                                         $val =count(array($terrace));
                                         if($val >= 1){
                                            echo $row['terrace']; 
                                         }
                                         ?></h3>
                                        <h5>terrace</h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="apartment-details-one__list-content">
                                        <h3><?php
                                         $val =count(array($parking));
                                         if($val >= 1){
                                            echo $row['parking']; 
                                         }
                                         ?></h3>
                                        <h5>parkings</h5>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="apartment-details-one__content-box">
                            <h3 class="apartment-details-one__content-title">Studio apartment</h3>
                            <p class="apartment-details-one__text-1"><?php
                                         $val =count(array($details));
                                         if($val >= 1){
                                            echo $row['details']; 
                                         }
                                         ?></p>
                      
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Apartments Two Page End-->

        <!--Floor Plan Start-->
        <section class="floor-plan">
            <div class="container">
                <div class="floor-plan__top">
                    <div class="row">
                        <div class="col-xl-6 col-lg-5">
                            <div class="floor-plan__top-left">
                                <div class="section-title text-left">
                                    <span class="section-title__tagline">checkout the plan</span>
                                    <h2 class="section-title__title">apartments plans</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7">
                            <div class="floor-plan__top-right">
                                <p class="floor-plan__top-text"><!-- Interior of volumes, space, air, proportion, with
                                    certain light and mood. These interiors are meant to last forever. You need to be
                                    sure there isn't anything embarrassing hidden in the middle of text. --></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="floor-plan__main-tab-box tabs-box">
                    <ul class="tab-buttons clearfix list-unstyled">
                        <li data-tab="#penthouse" class="tab-btn active-btn"><span>Aminities</span></li>
                <!--         <li data-tab="#stuido" class="tab-btn"><span>Stuido</span></li>
                        <li data-tab="#duplex" class="tab-btn"><span>Duplex</span></li> -->
                    </ul>
                    <div class="tabs-content">
                        <!--tab-->
                        <div class="tab active-tab" id="penthouse">
                            <div class="floor-plan__tab-content-inner">
                                <div class="floor-plan__tab-content-left">
                                    <ul class="list-unstyled floor-plan__tab-content-details">
                                        <li>
                                            <p>Total area</p>
                                            <span><?php
                                         $val =count(array($squre_area));
                                         if($val >= 1){
                                            echo $row['squre_area']; 
                                         }
                                         ?> sqft</span>
                                        </li>
                                        <li>
                                            <p>Floor no.</p>
                                            <span><?php
                                         $val =count(array($floor));
                                         if($val >= 1){
                                            echo $row['floor']; 
                                         }
                                         ?></span>
                                        </li>
                                        <li>
                                            <p>Current status</p>
                                            <?php 
                                                switch ($row['status']) {
                                                    case 0:?>
                                                         <span>Available</span>
                                                         <?php
                                                         break;
                                                     case 1:?>
                                                     <span>UnAvailable</span>
                                                     <?php 
                                                     }
                                                       ?>
                                          
                                        </li>
                                        <li>
                                            <p>No. of rooms</p>
                                            <span><?php
                                         $val =count(array($rooms));
                                         if($val >= 1){
                                            echo $row['rooms']; 
                                         }
                                         ?></span>
                                        </li>
                                        <li>
                                            <p>Parking available</p>
                                            <span><?php
                                         $val =count(array($parking));
                                         if($val >= 1){
                                            echo $row['parking']; 
                                         }
                                         ?></span>
                                        </li>
                                        <li>
                                            <p>Price from</p>
                                            <span>Rs. <?php
                                         $val =count(array($price));
                                         if($val >= 1){
                                            echo $row['price']; 
                                         }
                                         ?></span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="floor-plan__tab-content-righ">
                                    <img src="assets/images/resources/floor-plan-tab-content-img-1.png" alt="">
                                </div>
                            </div>
                        </div>
                        <!--tab-->
                    
                    </div>

                </div>
                  <div class="cta-three__btn-box btn-booking">
                            <a href="book.php?id=<?php echo $row['id']; ?>" class="thm-btn cta-three__btn">Book Now</a>
                        </div>
            </div>
        </section>
        <!--Floor Plan End-->

        <!--CTA Three End-->
        <section class="cta-three">
            <div class="cta-three__shape-1 float-bob-x">
                <img src="assets/images/shapes/cta-three-shape-1.png" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-8">
                        <div class="cta-three__left">
                            <p class="cta-three__sub-title">Don’t hestitate to contact us</p>
                            <h3 class="cta-three__title">Make an appointment now</h3>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-4">
                        <div class="cta-three__btn-box">
                            <a href="contact.php" class="thm-btn cta-three__btn">Schedule a visit</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--CTA Three End-->

        <!--Site Footer Start-->
     <?php include('footer.php'); ?>
        <!--Site Footer End-->


    </div><!-- /.page-wrapper -->

<?php include('nav-detail.php');  ?>
    <!-- /.search-popup -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="icon-up-arrow"></i></a>


    <script src="assets/vendors/jquery/jquery-3.6.0.min.js"></script>
    <script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendors/jarallax/jarallax.min.js"></script>
    <script src="assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <script src="assets/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <script src="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/vendors/jquery-validate/jquery.validate.min.js"></script>
    <script src="assets/vendors/nouislider/nouislider.min.js"></script>
    <script src="assets/vendors/odometer/odometer.min.js"></script>
    <script src="assets/vendors/swiper/swiper.min.js"></script>
    <script src="assets/vendors/tiny-slider/tiny-slider.min.js"></script>
    <script src="assets/vendors/wnumb/wNumb.min.js"></script>
    <script src="assets/vendors/wow/wow.js"></script>
    <script src="assets/vendors/isotope/isotope.js"></script>
    <script src="assets/vendors/countdown/countdown.min.js"></script>
    <script src="assets/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="assets/vendors/bxslider/jquery.bxslider.min.js"></script>
    <script src="assets/vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="assets/vendors/vegas/vegas.min.js"></script>
    <script src="assets/vendors/jquery-ui/jquery-ui.js"></script>
    <script src="assets/vendors/timepicker/timePicker.js"></script>
    <script src="assets/vendors/circleType/jquery.circleType.js"></script>
    <script src="assets/vendors/circleType/jquery.lettering.min.js"></script>
    <script src="assets/vendors/nice-select/jquery.nice-select.min.js"></script>




    <!-- template js -->
    <script src="assets/js/alipes.js"></script>
</body>

</html>