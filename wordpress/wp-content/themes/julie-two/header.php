<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package julie-two
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/5d9d3005c9.js" crossorigin="anonymous"></script>
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style_1.css">

	<?php if (defined('GTAG_CODE')): ?>
	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo GTAG_CODE;?>"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', '<?php echo GTAG_CODE;?>');
	</script>

	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php
$current_url = strtok($_SERVER['REQUEST_URI'], '?');

$menuItems = [
    [
        'text' => 'TRANG CHỦ',
        'link' => '/',
        'prefix' => '/^\/$/i',
    ],
    [
        'text' => 'GIỚI THIỆU',
        'link' => '/gioi-thieu',
        'prefix' => '/^\/gioi-thieu/i',
    ],
    [
        'text' => 'SẢN PHẨM',
        'link' => '/san-pham',
        'prefix' => '/^(\/san-pham)|(\/shop)/i',
    ],
  
    [
        'text' => 'TIN TỨC',
        'link' => '/tin-tuc',
        'prefix' => '/^\/tin-tuc/i',
    ],
		
];
?>



	<nav class="navbar navbar-expand-lg navbar navbar-light background">
		<div class="container">
			<a class="navbar-brand" href="/"><h2 style="color: white;"><b>THÁI THỊNH</b></h2></a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<!-- <div class="collapse navbar-collapse" id="navbarSupportedContent"> -->
				<?php
					// wp_nav_menu(
					// 	array(
					// 		'theme_location'  => 'menu-1',
					// 		'menu_id'         => 'primary-menu',
					// 		// 'container_class' => 'collapse navbar-collapse',
					// 		'container'       => false,
					// 		'li_class'		  => 'nav-item',
					// 		'li_a_class'		  => 'nav-link',
					// 		'menu_class'			=>'navbar-nav me-auto mb-2 mb-lg-0'
					// 	)
					// );
				?>
				<!-- <div id="header-social" class="d-flex flex-row">
					<a class="p-1" href="https://www.facebook.com/" target="__blank"><i class="fa-brands fa-facebook"></i></a>
					<a class="p-1"href="https://www.instagram.com/" target="__blank"><i class="fa-brands fa-square-instagram"></i></a>
					<a class="p-1"href="https://www.youtube.com/" target="__blank"><i class="fa-brands fa-youtube"></i></a>
					<a class="p-1" href="https://www.facebook.com/" target="__blank"><i class="fa-brands fa-facebook"></i></a>
						<a class="p-1"href="https://www.instagram.com/" target="__blank"><i class="fa-brands fa-square-instagram"></i></a>
						<a class="p-1"href="https://www.youtube.com/" target="__blank"><i class="fa-brands fa-youtube"></i></a>
				</div> -->
			<!-- </div> -->
			<div class="collapse navbar-collapse" id="navbarSupportedContent">				
					<ul id="primary-menu" class="navbar-nav me-auto mb-2 mb-lg-0 ">
						<?php foreach ($menuItems as $menuItem): ?>
							<li class="nav-item menu">
								<a  style="color:white" class="nav-link <?php echo preg_match($menuItem['prefix'], $current_url)? 'active': ''; ?>" href='<?php echo $menuItem['link']; ?>'><?php echo $menuItem['text']; ?></a>
							</li>
						<?php endforeach; ?>
					</ul>
					<div id="header-social" class="d-flex flex-row">
						<a style="" href="/gio-hang" ><i class="fa-solid fa-cart-shopping"></i></a>
					</div>
				</div>
		</div>
	</nav>
</header>

