<?php
/**
 * julie-one functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package julie-one
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Include libs
 */
require get_template_directory() . '/inc/common.php'; 
require_once( ABSPATH . 'wp-includes/class-wp-rewrite.php' );

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function julie_one_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on julie-one, use a find and replace
		* to change 'julie-one' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'julie-one', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'julie-one' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'julie_one_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);

	// Create pages
	// $initThemFile = get_template_directory() . "/.julie-one.lock";
	// if (!file_exists($initThemFile)) {
		julie_create_page( 'Trang chủ', '');
		julie_create_page( 'Trang chủ 2', '');
		julie_create_page( 'Trang chủ 3', '');
		julie_create_page( 'Giới thiệu', '');
		julie_create_page( 'Liên hệ', '');
		julie_create_page( 'Tin tức', '');
		julie_create_page( 'Sản phẩm', '');
	// 	file_put_contents($initThemFile, 'done');
	// }

	// Update permalink
	global $wp_rewrite;
	$wp_rewrite->set_permalink_structure( '/tin-tuc/%postname%/' );
	$wp_rewrite->flush_rules();

	// Change home page
	$homepage = get_page_by_title( 'Trang chủ' );
	if ( $homepage )
	{
		update_option( 'page_on_front', $homepage->ID );
		update_option( 'show_on_front', 'page' );
	}

	
}
add_action( 'after_setup_theme', 'julie_one_setup' );

function julie_one_setup_menu() {
	// =================================
	// Create menu
	$menuname = 'julie-one-menu-main';
	$bpmenulocation = 'menu-1';
	// Does the menu exist already?
	$menu_exists = wp_get_nav_menu_object( $menuname );
	
	// If it doesn't exist, let's create it.
	if( !$menu_exists){
		$menu_id = wp_create_nav_menu($menuname);

		// Set up default BuddyPress links and add them to the menu.
		$parent_item = wp_update_nav_menu_item($menu_id, 0, array(
				'menu-item-title' =>  __('TRANG CHỦ'),
				// 'menu-item-classes' => 'home',
				'menu-item-url' => home_url( '/' ), 
				'menu-item-status' => 'publish'));

		wp_update_nav_menu_item($menu_id, 0, array(
			'menu-item-title' =>  __('TRANG CHỦ 2'),
			'menu-item-url' => home_url( '/trang-chu-2' ), 
			'menu-item-status' => 'publish', 
			'menu-item-parent-id' => $parent_item)
			);
		wp_update_nav_menu_item($menu_id, 0, array(
			'menu-item-title' =>  __('TRANG CHỦ 3'),
			'menu-item-url' => home_url( '/trang-chu-3' ), 
			'menu-item-status' => 'publish', 
			'menu-item-parent-id' => $parent_item)
			);

		wp_update_nav_menu_item($menu_id, 0, array(
				'menu-item-title' =>  __('GIỚI THIỆU'),
				// 'menu-item-classes' => 'activity',
				'menu-item-url' => home_url( '/gioi-thieu' ), 
				'menu-item-status' => 'publish'));

		wp_update_nav_menu_item($menu_id, 0, array(
				'menu-item-title' =>  __('SẢN PHẨM'),
				// 'menu-item-classes' => 'members',
				'menu-item-url' => home_url( '/san-pham' ), 
				'menu-item-status' => 'publish'));

		wp_update_nav_menu_item($menu_id, 0, array(
				'menu-item-title' =>  __('TIN TỨC'),
				// 'menu-item-classes' => 'groups',
				'menu-item-url' => home_url( '/tin-tuc' ), 
				'menu-item-status' => 'publish'));

		wp_update_nav_menu_item($menu_id, 0, array(
				'menu-item-title' =>  __('LIÊN HỆ'),
				// 'menu-item-classes' => 'forums',
				'menu-item-url' => home_url( '/lien-he' ), 
				'menu-item-status' => 'publish'));

		// Grab the theme locations and assign our newly-created menu
		// to the BuddyPress menu location.
		if( !has_nav_menu( $bpmenulocation ) ){
				$locations = get_theme_mod('nav_menu_locations');
				$locations[$bpmenulocation] = $menu_id;
				set_theme_mod( 'nav_menu_locations', $locations );
		}
	}
}
add_action( 'after_setup_theme', 'julie_one_setup_menu' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function julie_one_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'julie_one_content_width', 640 );
}
add_action( 'after_setup_theme', 'julie_one_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function julie_one_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'julie-one' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'julie-one' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'julie_one_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function julie_one_scripts() {
	wp_enqueue_style( 'julie-one-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'julie-one-style', 'rtl', 'replace' );

	// wp_enqueue_script( 'julie-one-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'julie_one_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

// Hide admin bar of all users
add_filter('show_admin_bar', '__return_false');

// Add active class to menu items
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
	if( in_array('current-menu-item', $classes) ){
		$classes[] = 'active ';
	}
	return $classes;
}