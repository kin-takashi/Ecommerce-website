<?php
/**
 * julie-two Theme Customizer
 *
 * @package julie-two
 */

require get_template_directory() . '/inc/common.php'; 
require_once( ABSPATH . 'wp-includes/class-wp-rewrite.php' );

function julie_two_init_data() {
	$optionName = 'julie_two_init_data';
	if ( !get_option($optionName) ):
		// Create default pages
		julie_create_page( 'Giới thiệu', '');
		julie_create_page( 'Liên hệ', '');
		julie_create_page( 'Tin tức', '');
		julie_create_page( 'Sản phẩm', '');

		// Update permalink
		global $wp_rewrite;
		$wp_rewrite->set_permalink_structure( '/%postname%/' );
		$wp_rewrite->flush_rules();

		// Change home page
		// $homepage = get_page_by_title( 'Trang chủ' );
		// if ( $homepage )
		// {
		// 	update_option( 'page_on_front', $homepage->ID );
		// 	update_option( 'show_on_front', 'page' );
		// }
		add_option($optionName, 1); 
	endif;
}
add_action( 'init', 'julie_two_init_data' );

function julie_two_setup_menu() {
	// =================================
	// Create menu
	$menuname = 'julie-two-menu-main';
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

		// wp_update_nav_menu_item($menu_id, 0, array(
		// 	'menu-item-title' =>  __('TRANG CHỦ 2'),
		// 	'menu-item-url' => home_url( '/trang-chu-2' ), 
		// 	'menu-item-status' => 'publish', 
		// 	'menu-item-parent-id' => $parent_item)
		// 	);
		// wp_update_nav_menu_item($menu_id, 0, array(
		// 	'menu-item-title' =>  __('TRANG CHỦ 3'),
		// 	'menu-item-url' => home_url( '/trang-chu-3' ), 
		// 	'menu-item-status' => 'publish', 
		// 	'menu-item-parent-id' => $parent_item)
		// 	);

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
add_action( 'init', 'julie_two_setup_menu' );

// Add bootstrap theme to menu
function add_menu_list_item_class($classes, $item, $args) {
  if (property_exists($args, 'li_class')) {
      $classes[] = $args->li_class;
  }
	// $current_url = current_uri();
	// echo $current_url;
	// echo "<br/>";
	// print_r($item);
	// echo "<br/>";
  return $classes;
}
// function current_uri() {
// 	// Protocol
// 	// $url = ( 'on' == $_SERVER['HTTPS'] ) ? 'https://' : 'http://';
// 	// $url .= $_SERVER['SERVER_NAME'];
// 	// Port
// 	$url .= ( '80' == $_SERVER['SERVER_PORT'] ) ? '' : ':' . $_SERVER['SERVER_PORT'];
// 	$url .= $_SERVER['REQUEST_URI'];

// 	return trailingslashit( $url );
// }
add_filter('nav_menu_css_class', 'add_menu_list_item_class', 1, 3);

function add_menu_link_class($ulclass) {
	return preg_replace('/<a /', '<a class="nav-link" ', $ulclass);
}
add_filter('wp_nav_menu','add_menu_link_class');

// Hide admin bar of all users
add_filter('show_admin_bar', '__return_false');

// Script manager template for registering and enqueuing files
// function childtheme_script_manager() {
// 	// register custom style on your specific page
// 	// use WordPress conditionals: 
// 	if (is_page('gioi-thieu')) {
// 		wp_register_style('page-gioi-thieu-css', get_stylesheet_directory_uri() . '/css/page-gioi-thieu.css');
// 		wp_enqueue_style ('page-gioi-thieu-css');
// 	}
// }
// add_action('wp_enqueue_scripts', 'childtheme_script_manager');