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

if ( ! function_exists( 'julie_bootstrap5_pagination' ) ) :
  function julie_bootstrap5_pagination($wp_query, $paged, $pages = '', $range = 2)
{
  $showitems = ($range * 2) + 1;
  if (empty($paged)) {
    $paged = 1;
  }

  $pages = $wp_query->max_num_pages;
  if ($pages == '' || !$pages) {
    $pages = 1;
  }

  // Show the pagination section if we have more than one page
  if (1 != $pages) {
    echo '<nav aria-label="Page navigation example"><ul class="pagination justify-content-center post-pagination">';

    if ($paged > 2 && $paged > $range + 1 && $showitems < $pages) {
      echo "<li><a href='" . get_pagenum_link(1) . "'>&laquo;</a></li>";
    }

    if ($paged > 1 && $showitems < $pages) {
      echo "<li><a href='" . get_pagenum_link($paged - 1) . "'>&lsaquo;</a></li>";
    }

    for ($i = 1; $i <= $pages; $i++) {
      if (1 != $pages && (!($i >= $paged + $range + 1 || $i <= $paged - $range - 1) || $pages <= $showitems)) {
        echo ($paged == $i) ? "<li class='page-item active' aria-current='page'><span class='page-link'>" . $i . "</span></li>" : "<li class='page-item'><a class='page-link' href='" . get_pagenum_link($i) . "'>" . $i . "</a></li>";
      }
    }

    if ($paged < $pages && $showitems < $pages) {
      echo "<li><a href='" . get_pagenum_link($paged + 1) . "'>&rsaquo;</a></li>";
    }

    if ($paged < $pages - 1 && $paged + $range - 1 < $pages && $showitems < $pages) {
      echo "<li><a href='" . get_pagenum_link($pages) . "'>&raquo;</a></li>";
    }

    echo "</ul></nav>";
  }
}
endif;

