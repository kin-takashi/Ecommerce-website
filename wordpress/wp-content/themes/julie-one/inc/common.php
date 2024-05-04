<?php

if ( ! function_exists( 'julie_create_page' ) ) :

  function julie_create_page($title_of_the_page,$content,$parent_id = NULL ) 
  {
    $slug = sanitize_title($title_of_the_page);
    $objPage = get_page_by_title($title_of_the_page, 'OBJECT', 'page');
    if( ! empty( $objPage ) )
    {
      // echo "Page already exists:" . $title_of_the_page . "<br/>";
      return $objPage->ID;
    }
    
    $page_id = wp_insert_post(
      array(
        'comment_status' => 'close',
        'ping_status'    => 'close',
        'post_author'    => 1,
        'post_title'     => ucwords($title_of_the_page),
        'post_name'      => strtolower(str_replace(' ', '-', trim($title_of_the_page))),
        'post_status'    => 'publish',
        'post_content'   => $content,
        'post_type'      => 'page',
        'post_parent'    =>  $parent_id //'id_of_the_parent_page_if_it_available'
      )
    );
    return $page_id;
  }

endif;