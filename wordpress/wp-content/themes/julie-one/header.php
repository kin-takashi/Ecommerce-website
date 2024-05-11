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
<div class="header-section section">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <!--Logo-->
                <div class="float-left">
                    <a href="corporate-1.html" class="header-logo"><img src="<?php echo get_template_directory_uri();?>/img/logo/logo-dark.png" alt=""></a>
                </div>
                <!--Menu-->
                <div class="float-right">
                    <!-- <nav class="main-menu multi-page-menu text-black">
                        <ul>
                            <li class="active"><a href="/">TRANG CHỦ</a></li>
                            <li><a href="/gioi-thieu">GIỚI THIỆU</a></li>
                            <li><a href="/san-pham">SẢN PHẨM</a></li>
                            <li><a href="/tin-tuc">TIN TỨC</a></li>
                            <li><a href="/lien-he">LIÊN HỆ</a></li>
                        </ul>
                    </nav> -->
										<?php
											wp_nav_menu(
												array(
													'theme_location'  => 'menu-1',
													'menu_id'         => 'primary-menu',
													'container_class' => 'main-menu multi-page-menu text-black',
													'container'       => 'nav'
												)
											);
										?>
                </div>
                <!--Mobile Menu-->
                <div class="mobile-menu multi-page text-black"></div>
            </div>
        </div>
    </div>
</div>