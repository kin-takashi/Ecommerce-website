<?php
/**
 * julie-two Theme Customizer
 *
 * @package julie-two
 */

function register_custom_post_type_product() {
  register_post_type('product', array (
    'labels'                  => array (
      'name'                  => __( 'Sản phẩm' ),
      'singular_name'         => __( 'Sản phẩm' ),
      'add_new'               => __( 'Thêm mới' ),
      'add_new_item'          => __( 'Thêm mới Sản phẩm' ),
      'edit_item'             => __( 'Chỉnh sửa Sản phẩm' ),
      'new_item'              => __( 'Thêm mới' ),
      'view_item'             => __( 'Xem' ),
      'search_staff'          => __( 'search_staff' ),
      'not_found'             => __( 'not_found' ),
      'not_found_in_trash'    => __( 'not_found_in_trash' ),
      'parent_item_colon'     => ''
    ),
    'public'                  => true,
    'has_archive'             => true,
    'rewrite'                 => array( 
                                  'slug' => 'san-pham',
                                  'with_front' => false,
                                  'walk_dirs' => false
                                ), // Here!
    'show_ui'                 => true,
    'supports'                => array ( 
                                    'title', 
                                    // 'excerpt',
                                    'editor', 
                                    'thumbnail', 
                                    // 'revisions',
                                    'custom-fields',
                                    'tags',
                                    'categories'
                                  ),
    'query_var'               => true,
    'menu_icon'               => 'dashicons-welcome-write-blog',
    'taxonomies'              => array ( 'product_category', 'product_tag' ),
    'has_archive'             => true,
    'hierarchical'            => false,
    'menu_position'           => 5,
    'capability_type'         => 'post',
    'show_in_admin_bar'       => true,
    'publicly_queryable'      => true,
    "cptp_permalink_structure" => "/%product_category%/%postname%",
  ));

  register_taxonomy('product_category', 'product', array (
    'labels'                  => array (
      'name'                  => __( 'Nhóm sản phẩm' ),
      'menu_name'             => __( 'Nhóm' ),
      'edit_item'             => __( 'Sửa nhóm' ),
      'all_items'             => __( 'Nhóm sản phẩm' ),
      'parent_item'           => __( 'Nhóm cha' ),
      'add_new_item'          => __( 'Thêm' ),
      'search_items'          => __( 'Nhóm sản phẩm' ),
      'singular_name'         => __( 'Nhóm sản phẩm' ),
      'parent_item_colon'     => __( 'Nhóm cha:' ),
    ),
    'show_ui'                 => true,
    // 'rewrite'                 => array ( 'slug' => 'nhom-san-pham' ), // Here!
    'rewrite'=> [
      'slug' => 'nhom-san-pham',
      "with_front" => false
    ],
    "cptp_permalink_structure" => "/%product_category%/",
    'query_var'               => true,
    'has_archive'             => true,
    'hierarchical'            => true,
    'show_admin_column'       => true,
  ));
}
add_action ( 'init', 'register_custom_post_type_product' );