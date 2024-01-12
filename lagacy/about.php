<?php include('head.php'); ?>

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
                        <li><a href="index.html">Home</a></li>
                        <li><span>/</span></li>
                        <li>about</li>
                    </ul>
                    <h2>about us</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Feature One Start-->
        <section class="feature-one">
            <div class="container">
                <div class="row">
                    <!--Feature One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="feature-one__single">
                            <div class="feature-one__img">
                                <img src="assets/images/resources/feature-1-1.jpg" alt="">
                            </div>
                            <div class="feature-one__content">
                                <h3 class="feature-one__title"><a href="apartment-details-2.html">MODERN SPACES & <br>
                                        COMPLEXES</a></h3>
                                <p class="feature-one__text">Nullam eu nibh vitae est tempor <br> molestie id sed ex.
                                    Quisque
                                    dignissim <br> maximus ipsum,</p>
                            </div>
                        </div>
                    </div>
                    <!--Feature One Single End-->
                    <!--Feature One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                        <div class="feature-one__single">
                            <div class="feature-one__img">
                                <img src="assets/images/resources/feature-1-2.jpg" alt="">
                            </div>
                            <div class="feature-one__content">
                                <h3 class="feature-one__title"><a href="apartment-details-2.html">VALUES OF SMART <br>
                                        LIVING</a></h3>
                                <p class="feature-one__text">Nullam eu nibh vitae est tempor <br> molestie id sed ex.
                                    Quisque
                                    dignissim <br> maximus ipsum,</p>
                            </div>
                        </div>
                    </div>
                    <!--Feature One Single End-->
                    <!--Feature One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                        <div class="feature-one__single">
                            <div class="feature-one__img">
                                <img src="assets/images/resources/feature-1-1.jpg" alt="">
                            </div>
                            <div class="feature-one__content">
                                <h3 class="feature-one__title"><a href="apartment-details-2.html">enjoy luxury <br>
                                        residential life</a></h3>
                                <p class="feature-one__text">Nullam eu nibh vitae est tempor <br> molestie id sed ex.
                                    Quisque
                                    dignissim <br> maximus ipsum,</p>
                            </div>
                        </div>
                    </div>
                    <!--Feature One Single End-->
                </div>
            </div>
        </section>
        <!--Feature One End-->

        <!--Testimonial Two Start-->
        <section class="testimonial-two">
            <div class="testimonial-two__bg"
                style="background-image: url(assets/images/backgrounds/testimonial-two-bg.png);"></div>
            <div class="container">
                <div class="testimonial-two__top">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="testimonial-two__top-left">
                                <div class="section-title text-left">
                                    <span class="section-title__tagline">our feedbakcs</span>
                                    <h2 class="section-title__title">what they’re talking <br> about us</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="testimonial-two__top-right">
                                <p class="testimonial-two__top-text">Interior of volumes, space, air, proportion, with
                                    certain light and mood. These interiors are meant to last forever. You need to be
                                    sure there isn't anything embarrassing hidden in the middle of text.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-two__bottom">
                    <div class="testimonial-two__carousel thm-owl__carousel owl-theme owl-carousel" data-owl-options='{
                        "loop": true,
                        "autoplay": true,
                        "margin": 30,
                        "nav": false,
                        "dots": false,
                        "smartSpeed": 500,
                        "autoplayTimeout": 10000,
                        "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow1\"></span>"],
                        "responsive": {
                            "0": {
                                "items": 1
                            },
                            "768": {
                                "items": 1
                            },
                            "992": {
                                "items": 2
                            },
                            "1200": {
                                "items": 2
                            }
                        }
                    }'>
                    <?php
							$i=0;
							$statement = $pdo->prepare("SELECT
														
														id,
														name,
														designation,
														company,
														photo,
														comment

							                           	FROM tbl_testimonial
							                           	
							                           	");
							$statement->execute();
							$result = $statement->fetchAll(PDO::FETCH_ASSOC);							
							foreach ($result as $row) {
								$i++;
								?>
                    <!--Testimonial Two Single Start-->
                    <div class="item">
                        <div class="testimonial-two__single">
                            <div class="testimonial-two__client-img-box">
                                <div class="testimonial-two__client-img">
                                    <img src="assets/uploads/<?php echo $row['photo']; ?>" alt="<?php echo $row['photo']; ?>">
                                </div>
                            </div>
                            <div class="testimonial-two__client-info">
                                <div class="testimonial-two__client-details">
                                    <div class="testimonial-two__client-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h3 class="testimonial-two__client-name"><?php echo $row['name']; ?></h3>
                                    <p class="testimonial-two__client-sub-title"><?php echo $row['designation']; ?></p>
                                </div>
                                <div class="testimonial-two__quote">
                                    <span class="icon-quote"></span>
                                </div>
                            </div>
                            <p class="testimonial-two__text"> <?php echo $row['comment']; ?></p>
                        </div>
                    </div>
                    <!--Testimonial Two Single Start-->
<?php }?>
                    </div>
                </div>
            </div>
        </section>
        <!--Testimonial Two End-->

        <!--Brand One Start-->
        <section class="brand-one brand-two">
            <div class="brand-one__wrap">
                <div class="brand-one__shape-1 float-bob-y">
                    <img src="assets/images/shapes/brand-one-shape-1.png" alt="">
                </div>
                <div class="brand-one__shape-2 float-bob-x">
                    <img src="assets/images/shapes/brand-one-shape-2.png" alt="">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="brand-one__inner">
                                <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
                        "0": {
                            "spaceBetween": 30,
                            "slidesPerView": 2
                        },
                        "375": {
                            "spaceBetween": 30,
                            "slidesPerView": 2
                        },
                        "575": {
                            "spaceBetween": 30,
                            "slidesPerView": 3
                        },
                        "767": {
                            "spaceBetween": 50,
                            "slidesPerView": 4
                        },
                        "991": {
                            "spaceBetween": 50,
                            "slidesPerView": 5
                        },
                        "1199": {
                            "spaceBetween": 100,
                            "slidesPerView": 6
                        }
                    }}'>
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img src="assets/images/brand/brand-1-1.png" alt="">
                                        </div><!-- /.swiper-slide -->
                                        <div class="swiper-slide">
                                            <img src="assets/images/brand/brand-1-2.png" alt="">
                                        </div><!-- /.swiper-slide -->
                                        <div class="swiper-slide">
                                            <img src="assets/images/brand/brand-1-3.png" alt="">
                                        </div><!-- /.swiper-slide -->
                                        <div class="swiper-slide">
                                            <img src="assets/images/brand/brand-1-4.png" alt="">
                                        </div><!-- /.swiper-slide -->
                                        <div class="swiper-slide">
                                            <img src="assets/images/brand/brand-1-5.png" alt="">
                                        </div><!-- /.swiper-slide -->
                                        <div class="swiper-slide">
                                            <img src="assets/images/brand/brand-1-6.png" alt="">
                                        </div><!-- /.swiper-slide -->
                                        <div class="swiper-slide">
                                            <img src="assets/images/brand/brand-1-1.png" alt="">
                                        </div><!-- /.swiper-slide -->
                                        <div class="swiper-slide">
                                            <img src="assets/images/brand/brand-1-2.png" alt="">
                                        </div><!-- /.swiper-slide -->
                                        <div class="swiper-slide">
                                            <img src="assets/images/brand/brand-1-3.png" alt="">
                                        </div><!-- /.swiper-slide -->
                                        <div class="swiper-slide">
                                            <img src="assets/images/brand/brand-1-4.png" alt="">
                                        </div><!-- /.swiper-slide -->
                                        <div class="swiper-slide">
                                            <img src="assets/images/brand/brand-1-5.png" alt="">
                                        </div><!-- /.swiper-slide -->
                                        <div class="swiper-slide">
                                            <img src="assets/images/brand/brand-1-6.png" alt="">
                                        </div><!-- /.swiper-slide -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Brand One End-->

        <!--Values One Start-->
        <section class="values-one">
            <div class="values-one__wrap">
                <div class="values-one__left">
                    <div class="values-one__bg" style="background-image: url(assets/images/resources/values-1-1.jpg);">
                    </div>
                </div>
                <div class="values-one__right">
                    <div class="values-one__shape-1 float-bob-x">
                        <img src="assets/images/shapes/values-one-shape-1.png" alt="">
                    </div>
                    <div class="values-one__content">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">Apartments Amenities</span>
                            <h2 class="section-title__title">Values of smart living in amazon residence</h2>
                        </div>
                        <p class="values-one__text">Lorem ipsum simply free text available in the market. At vero eos et
                            accusamus et iusto odio dig ducimus qui blan ditiis sit praesentium.</p>
                        <div class="values-one__points-box">
                            <div class="values-one__points-img">
                                <img src="assets/images/resources/values-1-2.jpg" alt="">
                            </div>
                            <ul class="values-one__points list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="fa fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>Nsectetur cing elit</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fa fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>Suspe ndisse suscipit leo</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fa fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>Strong communication skills</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Values One End-->

        <!--Team One Start-->
        <section class="team-one">
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">expert agents</span>
                    <h2 class="section-title__title">meet property agents</h2>
                </div>
                <div class="row">
                    <!--Team One Single Start-->
                    <?php
							$i=0;
							$statement = $pdo->prepare("SELECT
														
														t1.id,
														t1.name,
														t1.designation_id,
														t1.photo,
														t1.status,
														t1.facebook,
														t1.twitter,
														t1.linkedin,
														t1.google_plus,

														t2.designation_id,
														t2.designation_name

							                           	FROM tbl_team_member t1
							                           	JOIN tbl_designation t2
							                           	ON t1.designation_id = t2.designation_id
							                           	");
							$statement->execute();
							$result = $statement->fetchAll(PDO::FETCH_ASSOC);							
							foreach ($result as $row) {
								$i++;
								?>
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                        <div class="team-one__single">
                            <div class="team-one__img-box">
                                <div class="team-one__img">
                                    <img src="assets/uploads/<?php echo $row['photo']; ?>" alt="">
                                </div>
                                <ul class="list-unstyled team-one__social-two">
                                    <li><a href="#"><i class="fas fa-share-alt"></i></a></li>
                                </ul>
                                <ul class="list-unstyled team-one__social">
                                    <li><a href="<?php echo $row['facebook']; ?>"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="<?php echo $row['twitter']; ?>"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="<?php echo $row['linkedin']; ?>"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="<?php echo $row['google_plus']; ?>"><i class="fab fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-one__content">
                                <h3 class="team-one__name"><a href="agents.html"><?php echo $row['name']; ?></a></h3>
                                <h5 class="team-one__sub-title"><?php echo $row['designation_name']; ?></h5>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <!--Team One Single End-->
                </div>
            </div>
        </section>
        <!--Team One End-->

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
                            <a href="contact.html" class="thm-btn cta-three__btn">Schedule a visit</a>
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