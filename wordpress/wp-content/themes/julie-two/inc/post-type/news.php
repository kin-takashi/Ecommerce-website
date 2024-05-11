<?php
/**
 * julie-two Theme Customizer
 *
 * @package julie-two
 */

function register_custom_post_type_news() {
  register_post_type('news', array (
    'labels'                  => array (
      'name'                  => __( 'Tin tức' ),
      'singular_name'         => __( 'Tin tức' ),
      'add_new'               => __( 'Thêm mới' ),
      'add_new_item'          => __( 'Thêm mới Tin tức' ),
      'edit_item'             => __( 'Chỉnh sửa Tin tức' ),
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
                                  // 'slug' => 'san-pham',
                                  'with_front' => false,
                                  'walk_dirs' => false
                                ), // Here!
    'show_ui'                 => true,
    'supports'                => array ( 
                                    'title', 
                                    'excerpt',
                                    'editor', 
                                    'thumbnail', 
                                    // 'revisions',
                                    // 'custom-fields',
                                    'tags',
                                    'categories'
                                  ),
    'query_var'               => true,
    'menu_icon'               => 'dashicons-welcome-write-blog',
    'taxonomies'              => array ( 'news_category', 'news_tag' ),
    'has_archive'             => true,
    'hierarchical'            => false,
    'menu_position'           => 5,
    'capability_type'         => 'post',
    'show_in_admin_bar'       => true,
    'publicly_queryable'      => true,
    // 'sptp_permalink_structure' => 'tin-tuc/%postname%'
  ));

  register_taxonomy('news_category', 'news', array (
    'labels'                  => array (
      'name'                  => __( 'Nhóm Tin tức' ),
      'menu_name'             => __( 'Nhóm' ),
      'edit_item'             => __( 'Sửa nhóm' ),
      'all_items'             => __( 'Nhóm Tin tức' ),
      'parent_item'           => __( 'Nhóm cha' ),
      'add_new_item'          => __( 'Thêm' ),
      'search_items'          => __( 'Nhóm Tin tức' ),
      'singular_name'         => __( 'Nhóm Tin tức' ),
      'parent_item_colon'     => __( 'Nhóm cha:' ),
    ),
    'show_ui'                 => true,
    // 'rewrite'                 => array ( 'slug' => 'nhom-san-pham' ), // Here!
    'query_var'               => true,
    'has_archive'             => true,
    'hierarchical'            => true,
    'show_admin_column'       => true,
  ));
}
add_action ( 'init', 'register_custom_post_type_news' );