<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package julie-one
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicon -->
	<link rel="icon" href="<?php echo get_template_directory_uri();?>/img/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/img/favicon.ico" type="image/x-icon" />
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> -->
	<!-- All CSS Files -->
	<!-- Bootstrap css -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/bootstrap.min.css">
	<!-- Icon Font -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/ionicons.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/et-line.css">
	<!-- Plugins css file -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/plugins.css">
	<!-- Theme main style -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style.css">
	<!-- Responsive css -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/responsive.css">
	<!-- Modernizr JS -->
	<script src="<?php echo get_template_directory_uri();?>/js/vendor/modernizr-2.8.3.min.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!--Corporate 3 Header Section-->
<div class="header-section header-transparent section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="header-border">
                    <!--Logo-->
                    <div class="float-left">
                        <a href="corporate-3.html" class="header-logo"><img src="<?php echo get_template_directory_uri();?>/img/logo/logo-white.png" alt=""></a>
                    </div>
                    <!--Menu-->
                    <div class="float-right">
											<?php
												wp_nav_menu(
													array(
														'theme_location'  => 'menu-1',
														'menu_id'         => 'primary-menu',
														'container_class' => 'main-menu multi-page-menu text-white',
														'container'       => 'nav'
													)
												);
											?>
                        
                        <div class="header-social text-white float-right">
                            <a href="#"><i class="ion-social-facebook-outline"></i></a>
                            <a href="#"><i class="ion-social-twitter-outline"></i></a>
                            <a href="#"><i class="ion-social-vimeo-outline"></i></a>
                            <a href="#"><i class="ion-social-dribbble-outline"></i></a>
                        </div>
                    </div>
                    <!--Mobile Menu-->
                    <div class="mobile-menu-2 multi-page text-white mobile-menu"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Corporate Hero Section 3-->
<div class="co-hero-section-3 section">
    
    <!--Corporate 2 Hero Slider-->
    <div class="co-hero-slider-3 hero-slider">
        <!--Hero Slide Item-->
        <div class="co-hero-slide-item-3" style="background-image: url('<?php echo get_template_directory_uri();?>/img/corporate/hero/5.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <!--Hero Slide Content-->
                        <div class="co-hero-slide-content-3">
                            <h1>Creat Your Path With Pixal</h1>
                            <h3>Be The Big Of Your Success And Making You Look Good</h3>
                            <a href="#" class="btn btn-white btn-lg">Learn More</a>
                            <a href="#" class="btn btn-border-white btn-lg">Purchase Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Hero Slide Item-->
        <div class="co-hero-slide-item-3" style="background-image: url('<?php echo get_template_directory_uri();?>/img/corporate/hero/6.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <!--Hero Slide Content-->
                        <div class="co-hero-slide-content-3">
                            <h1>Creat Your Path With Pixal</h1>
                            <h3>Be The Big Of Your Success And Making You Look Good</h3>
                            <a href="#" class="btn btn-white btn-lg">Learn More</a>
                            <a href="#" class="btn btn-border-white btn-lg">Purchase Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
