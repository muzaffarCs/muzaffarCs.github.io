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

        <div class="stricky-header stricked-menu main-menu main-menu-two">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <!--Main Slider Start-->
        <section class="main-slider-two clearfix">
            <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
                "effect": "fade",
                "pagination": {
                "el": "#main-slider-pagination",
                "type": "bullets",
                "clickable": true
                },
                "navigation": {
                "nextEl": "#main-slider__swiper-button-next",
                "prevEl": "#main-slider__swiper-button-prev"
                },
                "autoplay": {
                "delay": 5000
                }}'>
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="image-layer-two"
                            style="background-image: url(assets/images/backgrounds/main-slider-2-1.jpg);"></div>
                        <!-- /.image-layer -->
                        <div class="main-slider-two__shape-1">
                            <img src="assets/images/shapes/main-slider-two-shape-1.png" alt="">
                        </div>
                        <div class="main-slider-two__shape-2">
                            <img src="assets/images/shapes/main-slider-two-shape-2.png" alt="">
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-7">
                                    <div class="main-slider-two__content">
                                        <h2 class="main-slider-two__title">Residence</h2>
                                        <p class="main-slider-two__text">34000 sqft. Best Price 2 Bed Room <br>
                                            Apartments</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="image-layer-two"
                            style="background-image: url(assets/images/backgrounds/main-slider-2-2.jpg);"></div>
                        <!-- /.image-layer -->
                        <div class="main-slider-two__shape-1">
                            <img src="assets/images/shapes/main-slider-two-shape-1.png" alt="">
                        </div>
                        <div class="main-slider-two__shape-2">
                            <img src="assets/images/shapes/main-slider-two-shape-2.png" alt="">
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider-two__content">
                                        <h2 class="main-slider-two__title">Residence</h2>
                                        <p class="main-slider-two__text">34000 sqft. Best Price 2 Bed Room <br>
                                            Apartments</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="image-layer-two"
                            style="background-image: url(assets/images/backgrounds/main-slider-2-3.jpg);"></div>
                        <!-- /.image-layer -->
                        <div class="main-slider-two__shape-1">
                            <img src="assets/images/shapes/main-slider-two-shape-1.png" alt="">
                        </div>
                        <div class="main-slider-two__shape-2">
                            <img src="assets/images/shapes/main-slider-two-shape-2.png" alt="">
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider-two__content">
                                        <h2 class="main-slider-two__title">Residence</h2>
                                        <p class="main-slider-two__text">34000 sqft. Best Price 2 Bed Room <br>
                                            Apartments</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- If we need navigation buttons -->
                <div class="swiper-pagination" id="main-slider-pagination"></div>

            </div>
        </section>
        <!--Main Slider End-->


        <!--About Two Start-->
        <section class="about-two">
            <div class="about-two__shape-3 float-bob-x">
                <img src="assets/images/shapes/about-two-shape-3.png" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-6">
                        <div class="about-two__left">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">our building overview</span>
                                <h2 class="section-title__title">The luxury Building
                                    You Never want To Leave</h2>
                            </div>
                            <p class="about-two__text-1"><?php echo $footer_about ;?></p>
                            <ul class="about-two__points-list list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="fa fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>Luxury Living Rooms</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fa fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>Italian Hand-Made Furniture</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fa fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>Anatomical Medical Beds</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fa fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>Bluetooth Room Key</p>
                                    </div>
                                </li>
                            </ul>
                            <div class="about-two__btn-box">
                                <a href="about.php" class="thm-btn about-two__btn">Discover more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6">
                        <div class="about-two__middle">
                            <div class="about-two__img">
                                <img src="assets/images/resources/about-2-1.jpg" alt="">
                                <div class="about-two__shape-2">
                                    <img src="assets/images/shapes/about-two-shape-2.png" alt="">
                                </div>
                                <div class="about-two__year">
                                    <div class="about-two__shape-1">
                                        <img src="assets/images/shapes/about-two-shape-1.png" alt="">
                                    </div>
                                    <h3>2016</h3>
                                    <p>Build Year of Building</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4">
                        <div class="about-two__right">
                            <ul class="about-two__counter list-unstyled">
                                <li>
                                    <div class="about-two__count-box">
                                        <h3 class="odometer" data-count="34,000">00</h3>
                                        <p class="about-two__text">Total sqft Areas</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="about-two__count-box">
                                        <h3 class="odometer" data-count="680">00</h3>
                                        <p class="about-two__text">Total Car parkings</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="about-two__count-box">
                                        <h3 class="odometer" data-count="390">00</h3>
                                        <p class="about-two__text">Luxury apartments</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="about-two__count-box">
                                        <h3 class="odometer" data-count="726">00</h3>
                                        <p class="about-two__text">deluxe bedrooms</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--About Two End-->

        <!--Services One Start-->
        <section class="services-one">
            <div class="services-one__shape-1 float-bob-x">
                <img src="assets/images/shapes/services-one-shape-1.png" alt="">
            </div>
            <div class="services-one__shape-2 float-bob-x">
                <img src="assets/images/shapes/services-one-shape-2.png" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-12">
                        <div class="services-one__left">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">Apartments Amenities</span>
                                <h2 class="section-title__title">STUNNING LUXURY RENTAL APARTMENTS, DESIGNED FOR LIFE
                                </h2>
                            </div>
                            <div class="services-one__btn-box">
                                <a href="services.php" class="thm-btn services-one__btn">schedule a visit</a>
                            </div>
                        </div>
                    </div>
                    <!--Services One Single Start-->
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="services-one__single">
                            <div class="services-one__single-inner">
                                <div class="services-one__single-bg"
                                    style="background-image: url(assets/images/backgrounds/services-one-single-bg.jpg);">
                                </div>
                                <div class="services-one__icon">
                                    <span class="icon-residential"></span>
                                </div>
                                <h3 class="services-one__title"><a href="services.php">Smart Living</a></h3>
                                <p class="services-one__text">There are many new ways of text.</p>
                            </div>
                        </div>
                    </div>
                    <!--Services One Single End-->
                    <!--Services One Single Start-->
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="services-one__single">
                            <div class="services-one__single-inner">
                                <div class="services-one__single-bg"
                                    style="background-image: url(assets/images/backgrounds/services-one-single-bg.jpg);">
                                </div>
                                <div class="services-one__icon">
                                    <span class="icon-sustainable"></span>
                                </div>
                                <h3 class="services-one__title"><a href="services.php">Eco construction</a></h3>
                                <p class="services-one__text">There are many new ways of text.</p>
                            </div>
                        </div>
                    </div>
                    <!--Services One Single End-->
                    <!--Services One Single Start-->
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="services-one__single">
                            <div class="services-one__single-inner">
                                <div class="services-one__single-bg"
                                    style="background-image: url(assets/images/backgrounds/services-one-single-bg.jpg);">
                                </div>
                                <div class="services-one__icon">
                                    <span class="icon-world"></span>
                                </div>
                                <h3 class="services-one__title"><a href="services.php">good locationn</a></h3>
                                <p class="services-one__text">There are many new ways of text.</p>
                            </div>
                        </div>
                    </div>
                    <!--Services One Single End-->
                    <!--Services One Single Start-->
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                        <div class="services-one__single">
                            <div class="services-one__single-inner">
                                <div class="services-one__single-bg"
                                    style="background-image: url(assets/images/backgrounds/services-one-single-bg.jpg);">
                                </div>
                                <div class="services-one__icon">
                                    <span class="icon-home-automation"></span>
                                </div>
                                <h3 class="services-one__title"><a href="services.php">High technology</a></h3>
                                <p class="services-one__text">There are many new ways of text.</p>
                            </div>
                        </div>
                    </div>
                    <!--Services One Single End-->
                    <!--Services One Single Start-->
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="500ms">
                        <div class="services-one__single">
                            <div class="services-one__single-inner">
                                <div class="services-one__single-bg"
                                    style="background-image: url(assets/images/backgrounds/services-one-single-bg.jpg);">
                                </div>
                                <div class="services-one__icon">
                                    <span class="icon-electric-appliance"></span>
                                </div>
                                <h3 class="services-one__title"><a href="services.php">luxury appliance</a></h3>
                                <p class="services-one__text">There are many new ways of text.</p>
                            </div>
                        </div>
                    </div>
                    <!--Services One Single End-->
                    <!--Services One Single Start-->
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="600ms">
                        <div class="services-one__single">
                            <div class="services-one__single-inner">
                                <div class="services-one__single-bg"
                                    style="background-image: url(assets/images/backgrounds/services-one-single-bg.jpg);">
                                </div>
                                <div class="services-one__icon">
                                    <span class="icon-swimming-pool"></span>
                                </div>
                                <h3 class="services-one__title"><a href="services.php">swimming pool</a></h3>
                                <p class="services-one__text">There are many new ways of text.</p>
                            </div>
                        </div>
                    </div>
                    <!--Services One Single End-->
                </div>
            </div>
        </section>
        <!--Services One End-->

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
     <section class="news-carousel-page">
            <div class="container">
                    <div class="section-title text-center">
                    <span class="section-title__tagline">apartment & complex</span>
                    <h2 class="section-title__title">choose your apartment</h2>
                </div>
                <div class="news-carousel thm-owl__carousel owl-theme owl-carousel carousel-dot-style" data-owl-options='{
                    "items": 3,
                    "margin": 30,
                    "smartSpeed": 700,
                    "loop":true,
                    "autoplay": 6000,
                    "nav":false,
                    "dots":true,
                    "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                    "responsive":{
                        "0":{
                            "items":1
                        },
                        "768":{
                            "items":2
                        },
                        "992":{
                            "items": 3
                        }
                    }
                }'>
                    <!--news One Single Start-->


                                <?php
                            $i=0;
                            $statement = $pdo->prepare("SELECT * FROM tbl_apartments
                                                        ");
                            $statement->execute();
                            $result = $statement->fetchAll(PDO::FETCH_ASSOC);                           
                            foreach ($result as $row) {
                                $i++;
                                ?>
                    <div class="item">
                        <div class="news-one__single">
                            <div class="news-one__img-box">
                                <div class="news-one__img img-apartments-style">
                                    <img src="assets/uploads/<?php echo $row['photo']; ?>" alt="">
                                </div>
                                <div class="news-one__date">
                                    <p>Price:<?php echo $row['price']; ?> </p>
                                </div>
                                <div class="news-one__content">
                              
                                    <h3 class="news-one__title"><a href="news-details.php"><?php echo $row['title']; ?></a>
                                    </h3>
                                    <div class="news-one__bottom">
                                        <div class="news-one__button">
                                            <a href="apartment-details.php?id=<?php echo $row['id'];  ?>" class="btn-legacy">Detail</a>
                                        </div>
                                        <div class="news-one__comment">
                                            <a href="https://api.whatsapp.com/send?phone=+923320000222&text=Hello Samawat Legacy" class="btn-legacy">Call Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                                <?php
                            }
                            ?>  
                  
                </div>
            </div>
        </section>
  
        <!--Apartment Two End-->

        <!--Measurement Start-->
        <section class="measurement">
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">rooms details</span>
                    <h2 class="section-title__title">Room dimensions</h2>
                </div>
                <div class="measurement__main-tab-box tabs-box">
                    <ul class="tab-buttons clearfix list-unstyled">
                        <li data-tab="#living-room" class="tab-btn">
                            <div class="measurement__single">
                                <div class="measurement__icon">
                                    <span class="icon-living-room"></span>
                                </div>
                                <h4 class="measurement__title">Living room</h4>
                            </div>
                        </li>
                        <li data-tab="#kitchen" class="tab-btn active-btn">
                            <div class="measurement__single">
                                <div class="measurement__icon">
                                    <span class="icon-kitchen"></span>
                                </div>
                                <h4 class="measurement__title">Kitchen</h4>
                            </div>
                        </li>
                        <li data-tab="#bedroom" class="tab-btn">
                            <div class="measurement__single">
                                <div class="measurement__icon">
                                    <span class="icon-bedroom"></span>
                                </div>
                                <h4 class="measurement__title">Bedroom</h4>
                            </div>
                        </li>
                        <li data-tab="#bathroom" class="tab-btn">
                            <div class="measurement__single">
                                <div class="measurement__icon">
                                    <span class="icon-public-toilet"></span>
                                </div>
                                <h4 class="measurement__title">Bathroom</h4>
                            </div>
                        </li>
                        <li data-tab="#terrace" class="tab-btn">
                            <div class="measurement__single">
                                <div class="measurement__icon">
                                    <span class="icon-chair"></span>
                                </div>
                                <h4 class="measurement__title">Terrace</h4>
                            </div>
                        </li>
                    </ul>

                    <div class="tabs-content">
                        <!--tab-->
                        <div class="tab" id="living-room">
                            <div class="measurement__bottom">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 animated fadeInLeft">
                                        <div class="measurement__bottom-left">
                                            <h4 class="measurement__bottom-title">Living room</h4>
                                            <p class="measurement__bottom-text">Proin tempor magna eget luctus
                                                sollicitudin. Etiam sagittis dolor felis, sit amet tincidunt urna
                                                suscipit sed. Suspendisse gravida sit amet ligula ac pharetra. Nulla ut
                                                lorem quam.</p>
                                            <div class="measurement__bottom-points-box">
                                                <ul class="list-unstyled measurement__bottom-points">
                                                    <li>
                                                        <div class="icon">
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                        <div class="text">
                                                            <p>Dimension 12,00 Sp.ft</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                        <div class="text">
                                                            <p>Marble flooring</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul
                                                    class="list-unstyled measurement__bottom-points measurement__bottom-points-two">
                                                    <li>
                                                        <div class="icon">
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                        <div class="text">
                                                            <p>Wooden furnitures</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                        <div class="text">
                                                            <p>Fancy windoes</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 animated fadeInRight">
                                        <div class="measurement__bottom-right">
                                            <div class="measurement__bottom-img">
                                                <img src="assets/images/resources/measurement-bottom-img-1.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--tab-->
                        <div class="tab active-tab" id="kitchen">
                            <div class="measurement__bottom">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 animated fadeInLeft">
                                        <div class="measurement__bottom-left">
                                            <h4 class="measurement__bottom-title">Kitchen</h4>
                                            <p class="measurement__bottom-text">Proin tempor magna eget luctus
                                                sollicitudin. Etiam sagittis dolor felis, sit amet tincidunt urna
                                                suscipit sed. Suspendisse gravida sit amet ligula ac pharetra. Nulla ut
                                                lorem quam.</p>
                                            <div class="measurement__bottom-points-box">
                                                <ul class="list-unstyled measurement__bottom-points">
                                                    <li>
                                                        <div class="icon">
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                        <div class="text">
                                                            <p>Dimension 12,00 Sp.ft</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                        <div class="text">
                                                            <p>Marble flooring</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul
                                                    class="list-unstyled measurement__bottom-points measurement__bottom-points-two">
                                                    <li>
                                                        <div class="icon">
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                        <div class="text">
                                                            <p>Wooden furnitures</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                        <div class="text">
                                                            <p>Fancy windoes</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 animated fadeInRight">
                                        <div class="measurement__bottom-right">
                                            <div class="measurement__bottom-img">
                                                <img src="assets/images/resources/measurement-bottom-img-2.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--tab-->
                        <div class="tab" id="bedroom">
                            <div class="measurement__bottom">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 animated fadeInLeft">
                                        <div class="measurement__bottom-left">
                                            <h4 class="measurement__bottom-title">Bedroom</h4>
                                            <p class="measurement__bottom-text">Proin tempor magna eget luctus
                                                sollicitudin. Etiam sagittis dolor felis, sit amet tincidunt urna
                                                suscipit sed. Suspendisse gravida sit amet ligula ac pharetra. Nulla ut
                                                lorem quam.</p>
                                            <div class="measurement__bottom-points-box">
                                                <ul class="list-unstyled measurement__bottom-points">
                                                    <li>
                                                        <div class="icon">
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                        <div class="text">
                                                            <p>Dimension 12,00 Sp.ft</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                        <div class="text">
                                                            <p>Marble flooring</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul
                                                    class="list-unstyled measurement__bottom-points measurement__bottom-points-two">
                                                    <li>
                                                        <div class="icon">
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                        <div class="text">
                                                            <p>Wooden furnitures</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                        <div class="text">
                                                            <p>Fancy windoes</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 animated fadeInRight">
                                        <div class="measurement__bottom-right">
                                            <div class="measurement__bottom-img">
                                                <img src="assets/images/resources/measurement-bottom-img-3.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--tab-->
                        <div class="tab" id="bathroom">
                            <div class="measurement__bottom">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 animated fadeInLeft">
                                        <div class="measurement__bottom-left">
                                            <h4 class="measurement__bottom-title">Bathroom</h4>
                                            <p class="measurement__bottom-text">Proin tempor magna eget luctus
                                                sollicitudin. Etiam sagittis dolor felis, sit amet tincidunt urna
                                                suscipit sed. Suspendisse gravida sit amet ligula ac pharetra. Nulla ut
                                                lorem quam.</p>
                                            <div class="measurement__bottom-points-box">
                                                <ul class="list-unstyled measurement__bottom-points">
                                                    <li>
                                                        <div class="icon">
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                        <div class="text">
                                                            <p>Dimension 12,00 Sp.ft</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                        <div class="text">
                                                            <p>Marble flooring</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul
                                                    class="list-unstyled measurement__bottom-points measurement__bottom-points-two">
                                                    <li>
                                                        <div class="icon">
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                        <div class="text">
                                                            <p>Wooden furnitures</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                        <div class="text">
                                                            <p>Fancy windoes</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 animated fadeInRight">
                                        <div class="measurement__bottom-right">
                                            <div class="measurement__bottom-img">
                                                <img src="assets/images/resources/measurement-bottom-img-4.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--tab-->
                        <div class="tab" id="terrace">
                            <div class="measurement__bottom">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 animated fadeInLeft">
                                        <div class="measurement__bottom-left">
                                            <h4 class="measurement__bottom-title">Terrace</h4>
                                            <p class="measurement__bottom-text">Proin tempor magna eget luctus
                                                sollicitudin. Etiam sagittis dolor felis, sit amet tincidunt urna
                                                suscipit sed. Suspendisse gravida sit amet ligula ac pharetra. Nulla ut
                                                lorem quam.</p>
                                            <div class="measurement__bottom-points-box">
                                                <ul class="list-unstyled measurement__bottom-points">
                                                    <li>
                                                        <div class="icon">
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                        <div class="text">
                                                            <p>Dimension 12,00 Sp.ft</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                        <div class="text">
                                                            <p>Marble flooring</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul
                                                    class="list-unstyled measurement__bottom-points measurement__bottom-points-two">
                                                    <li>
                                                        <div class="icon">
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                        <div class="text">
                                                            <p>Wooden furnitures</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                        <div class="text">
                                                            <p>Fancy windoes</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 animated fadeInRight">
                                        <div class="measurement__bottom-right">
                                            <div class="measurement__bottom-img">
                                                <img src="assets/images/resources/measurement-bottom-img-5.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--tab-->
                    </div>
                </div>
            </div>
        </section>
        <!--Measurement End-->

        <!--Gallery Two Start-->
        <section class="gallery-two">
            <div class="gallery-two__top">
                <div class="gallery-two__shape-1"
                    style="background-image: url(assets/images/shapes/gallery-two-shape-1.png);"></div>
                <div class="section-title text-center">
                    <span class="section-title__tagline">What’s Happening</span>
                    <h2 class="section-title__title">Photo gallery</h2>
                </div>
            </div>
            <div class="gallery-two__container">
                <div class="gallery-two__carousel thm-owl__carousel owl-theme owl-carousel" data-owl-options='{
                    "items": 5,
                    "margin": 10,
                    "smartSpeed": 700,
                    "loop":true,
                    "autoplay": 2000,
                    "nav":false,
                    "dots":false,
                    "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                    "responsive":{
                        "0":{
                            "items":1
                        },
                        "768":{
                            "items":2
                        },
                        "992":{
                            "items": 4
                        },
                        "1200":{
                            "items": 5
                        }
                    }
                }'>
                    <!--Gallery Two Single Start-->
                    <?php
            	$i=0;
            	$statement = $pdo->prepare("SELECT 
            	                           
											t1.photo_id,
											t1.photo_caption,
											t1.photo_detail,
											t1.photo_name,
											t1.p_category_id,

											t2.p_category_id,
											t2.p_category_name

            	                           	FROM tbl_photo t1
            	                           	JOIN tbl_category_photo t2
            	                           	ON t1.p_category_id = t2.p_category_id");
            	$statement->execute();
            	$result = $statement->fetchAll(PDO::FETCH_ASSOC);							
            	foreach ($result as $row) {
            		$i++;
	            	?>
                    <div class="item">
                        <div class="gallery-two__single">
                            <div class="gallery-two__img-box">
                                <div class="gallery-two__img">
                                <img src="assets/uploads/<?php echo $row['photo_name']; ?>" alt="<?php echo $row['photo_caption']; ?>">
                                </div>
                                <div class="gallery-two__content">
                                    <p class="gallery-two__sub-title"><?php echo $row['photo_caption']; ?></p>
                                    <h3 class="gallery-two__title"><a href="apartment-details-1.php"><?php echo $row['photo_detail']; ?></a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                        }
                    ?>
                    <!--Gallery Two Single End-->
                </div>
            </div>
        </section>
        <!--Gallery Two End-->

        <!--News One Start-->
        <section class="news-one news-two">
            <div class="news-two__shape-1" style="background-image: url(assets/images/shapes/news-two-shape-1.png);">
            </div>
            <div class="news-two__shape-2 float-bob-x">
                <img src="assets/images/shapes/news-two-shape-2.png" alt="">
            </div>
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">What’s Happening</span>
                    <h2 class="section-title__title">Latest news updates
                        <br> & articles</h2>
                </div>
                <div class="row">
                <?php
							$i=0;
							$statement = $pdo->prepare("SELECT

														t1.news_id,
														t1.news_title,
														t1.news_content,
														t1.photo,
														t1.category_id,
														t1.news_date,

														t2.category_id,
														t2.category_name

							                           	FROM tbl_news t1
							                           	JOIN tbl_category t2
							                           	ON t1.category_id = t2.category_id

							                           	ORDER BY t1.news_id DESC
							                           	");
							$statement->execute();
							$result = $statement->fetchAll(PDO::FETCH_ASSOC);							
							foreach ($result as $row) {
								$i++;
								?>
                    <!--news One Single Start-->
                    <div class="col-xl-4 col-lg-4">
                        <div class="news-one__single">
                            <div class="news-one__img-box">
                                <div class="news-one__img">
                                    <img src="assets/uploads/<?php echo $row['photo']; ?>" alt="">
                                </div>
                                <div class="news-one__date">
                                    <p><?php echo $row['news_date']; ?></p>
                                </div>
                                <div class="news-one__content">
                                    <ul class="news-one__meta list-unstyled">
                                        <li>
                                            <a href="news-details.php"><i class="fas fa-tag"></i>Apartment</a>
                                        </li>
                                        <li>
                                            <a href="news-details.php"><i class="fas fa-user-circle"></i> by Admin</a>
                                        </li>
                                    </ul><?php echo $row['news_title']; ?>
                                    <h3 class="news-one__title"><a href="news-details.php"></a>
                                    </h3>
                                    <div class="news-one__bottom">
                                        <div class="news-one__button">
                                            <a href="news-details.php">Read More</a>
                                        </div>
                                        <div class="news-one__comment">
                                            <a href="news-details.php"><i class="fas fa-comments"></i>02</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <!--news One Single End-->
                    <!--news One Single End-->
                </div>
            </div>
        </section>
        <!--News One Start-->

        <!--Cta One Start-->
        <section class="cta-one">
            <div class="container">
                <div class="cta-one__inner">
                    <div class="cta-one__shape-1 float-bob-y">
                        <img src="assets/images/shapes/cta-one-shape-1.png" alt="">
                    </div>
                    <div class="cta-one__shape-2 img-bounce">
                        <img src="assets/images/shapes/cta-one-shape-2.png" alt="">
                    </div>
                    <div class="cta-one__shape-3"></div>
                    <div class="row">
                        <div class="col-xl-5 col-lg-6">
                            <div class="cta-one__left">
                                <h3 class="cta-one__title">Let’s book your appointment with <br> us now</h3>
                                <div class="cta-one__btn-box">
                                    <a href="contact.php" class="thm-btn cta-one__btn">Schedule a visit</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-6">
                            <div class="cta-one__right">
                                <p class="cta-one__text">Sed quia lipsum dolor sit atur adipiscing elit is nunc quis
                                    tellus sed ligula porta. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Cta One End-->

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

        <!--Site Footer Start-->
       <?php include('footer.php'); ?>
        <!--Site Footer End-->


    </div><!-- /.page-wrapper -->


<?php include('nav-detail.php');  ?>

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