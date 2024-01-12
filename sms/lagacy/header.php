

<?php

include("admin/config.php");
$error_message = '';
$success_message = '';
$error_message1 = '';
$success_message1 = '';
$statement = $pdo->prepare("SELECT * FROM tbl_settings WHERE id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);							
foreach ($result as $row) {
	$logo                            = $row['logo'];
	$favicon                         = $row['favicon'];
	$footer_about                    = $row['footer_about'];
	$footer_copyright                = $row['footer_copyright'];
	$contact_address                 = $row['contact_address'];
	$contact_email                   = $row['contact_email'];
	$contact_phone                   = $row['contact_phone'];

}
?>

<?php
$statement = $pdo->prepare("SELECT * FROM tbl_social");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);							
foreach ($result as $row) {
	if($row['social_name'] == 'Facebook') {
		$facebook = $row['social_url'];
	}
	if($row['social_name'] == 'Twitter') {
		$twitter = $row['social_url'];
	}
	if($row['social_name'] == 'LinkedIn') {
		$linkedin = $row['social_url'];
	}
	if($row['social_name'] == 'Google Plus') {
		$googleplus = $row['social_url'];
	}
	if($row['social_name'] == 'Pinterest') {
		$pinterest = $row['social_url'];
	}
	if($row['social_name'] == 'YouTube') {
		$youtube = $row['social_url'];
	}
	if($row['social_name'] == 'Instagram') {
		$instagram = $row['social_url'];
	}
	if($row['social_name'] == 'Tumblr') {
		$tumblr = $row['social_url'];
	}
	if($row['social_name'] == 'Flickr') {
		$flickr = $row['social_url'];
	}
	if($row['social_name'] == 'Reddit') {
		$reddit = $row['social_url'];
	}
	if($row['social_name'] == 'Snapchat') {
		$snapchat = $row['social_url'];
	}
	if($row['social_name'] == 'WhatsApp') {
		$whatsapp = $row['social_url'];
	}
	if($row['social_name'] == 'Quora') {
		$quora = $row['social_url'];
	}
	if($row['social_name'] == 'StumbleUpon') {
		$stumbleupon = $row['social_url'];
	}
	if($row['social_name'] == 'Delicious') {
		$delicious = $row['social_url'];
	}
	if($row['social_name'] == 'Digg') {
		$digg = $row['social_url'];
	}
}
?>

      <header class="main-header">
            <div class="main-header__top">
                <div class="main-header__top-inner">
                    <div class="main-header__top-left">
                        <div class="main-menu__social">
                            <a href="<?php echo $twitter; ?>"><i class="fab fa-twitter"></i></a>
                            <a href="<?php echo $facebook; ?>"><i class="fab fa-facebook"></i></a>
                            <a href="<?php echo $youtube; ?>"><i class="fab fa-youtube"></i></a>
                         
                            <a href="<?php echo $instagram; ?>"><i class="fab fa-instagram"></i></a>
                        </div>
                        <p class="main-header__top-time">Mon to Sat: 8.00 am - 7.00 pm</p>
                    </div>
                    <div class="main-header__top-right">
                        <ul class="list-unstyled main-header__contact-list">
                            <li>
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="text">
                                    <p>
                                    <?php echo $contact_address;?>
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="text">
                                    <p><a href="mailto: <?php echo $contact_email;?>"> <?php echo $contact_email;?></a></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <nav class="main-menu">
                <div class="main-menu__wrapper">
                    <div class="main-menu__wrapper-inner">
                        <div class="main-menu__left">
                            <div class="main-menu__logo">
                                <a href="index.php"><img style="height: 70px" src="assets/uploads/<?php echo $logo; ?>" alt=""></a>
                            </div>
                        </div>
                         <div class="main-menu-two__main-menu-box">
                                <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                <ul class="main-menu__list">
                                    <li class="dropdown current megamenu">
                                        <a href="index.php">Home </a> </li>
                                    <li>
                                        <a href="about.php">About</a>
                                    </li>
                                         <li><a href="services.php">Services</a></li>
                                <li><a href="gallery-carousel.php">Gallery</a></li>


                                     <!--   <li><a href="agents.php">Agents</a></li> -->
                                    <li class="dropdown">
                                        <a href="#">Pages</a>
                                        <ul class="shadow-box">
                                        
                                         
                                           <li><a href="testimonials-carousel.php">Testimonials</a></li>
                                             <li><a href="faq.php">FAQs</a></li>
                                     
                                        </ul>
                                    </li>
                                         <li><a href="apartments.php">Appartments</a></li>
                               <!--      <li class="dropdown">
                                        <a href="#">Appartments</a>
                                        <ul class="shadow-box">
                                     
                                            <li><a href="apartments.php">Appartments</a></li>
                                            <li><a href="apartments-carousel.php">Appartments Carousel</a></li>
                                            <li><a href="apartment-details-1.php">Appartment Details one</a></li>
                                            <li><a href="apartment-details-2.php">Appartment Details Two</a></li>
                                        </ul>
                                    </li> -->
                               
                                
                                    <li>
                                        <a href="contact.php">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        <div class="main-menu__right">
                            <div class="main-menu__search-cart-btn">
                            
                                <div class="main-menu__btn-box">
                                    <a href="contact.php" class="thm-btn main-menu__btn">Schedule a Visit</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>


