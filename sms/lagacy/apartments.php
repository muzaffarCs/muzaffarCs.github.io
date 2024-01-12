<?php include('head.php'); ?>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>





    <div class="preloader">
        <div class="preloader__image"></div>
    </div>
    <!-- /.preloader -->


    <div class="page-wrapper">
    <?php include ('header.php');?>

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
                    <h2>Apartments</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Apartments Page Start-->
        <section class="apartments-page">
            <div class="container">
                <div class="row">
                    <!--Apartment Two Single Start-->
                    
        <?php
                            $i=0;
                            $statement = $pdo->prepare("SELECT * FROM tbl_apartments
                                                        ");
                            $statement->execute();
                            $result = $statement->fetchAll(PDO::FETCH_ASSOC);                           
                            foreach ($result as $row) {
                                $i++;
                                ?>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="apartment-two__single">
                            <div class="apartment-two__img">
                                <img src="assets/uploads/<?php echo $row['photo']; ?>" alt="">
                                <div class="apartment-two__btn-box">
                                    <a href="apartment-details-1.php" class="thm-btn apartment-two__btn">Detail</a>
                                </div>
                            </div>
                            <div class="apartment-two__content">
                                <h3 class="apartment-two__title"><a href="apartment-details-1.php"><?php echo $row['title']; ?></a>
                                </h3>
                                <p class="apartment-two__sub-title">Explore now</p>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                    
                    <!--Apartment Two Single End-->
                </div>
            </div>
        </section>
        <!--Apartments Page End-->

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