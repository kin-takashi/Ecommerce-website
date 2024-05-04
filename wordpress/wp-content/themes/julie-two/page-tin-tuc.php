<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package julie-two
 */

get_header();
?>

<section class="container py-3">
  <span class="page-header">TIN TỨC</span>
  <br/>
  <br/>

  <?php 
  // The Query
  $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
  $args = array(
    'post_type' => 'post',
    'orderby' => array( 'date' => 'DESC' ),
    'paged' => $paged
  );
  $the_query = new WP_Query( $args );

  // The Loop
  if ( $the_query->have_posts() ) {
    // echo '<div class="row">';
    while ( $the_query->have_posts() ) {
      $the_query->the_post();
      ?>
      <div class="row news-item">
        <div class="col-md-4 col-sm-12">
          <?php if(has_post_thumbnail()):
            julie_two_post_thumbnail();
          else: ?>
          <div class="post-thumbnail">
            <img src="<?php echo get_template_directory_uri();?>/img/default-news-img.png" alt="SITE LOGO" />
          </div>
          <?php endif;?>
        </div>
        <div class="col-md-8 col-sm-12">
          <div class="post-detail-container">
            <div class="post-detail-meta">
              <?php julie_two_posted_on(); ?>
            </div>
            <div class="post-detail-content">
              <?php julie_two_posted_by(); ?>
              <a class="post-title-link" href="<?php the_permalink(); ?>">
                <?php the_title( '<h4 class="entry-title">' , '</h4>' ); ?>
              </a>
              <?php the_excerpt(); ?>
              <div class="text-right">
                <a class="link-detail" href="<?php the_permalink(); ?>" aria-hidden="true">Xem thêm...</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php
    }
    // echo '</div>';
  } else {
    // no posts found
    //_e( 'Sorry, no posts matched your criteria.' );
  }

  ?>
  
</section>

<section class="container py-3">
  <?php julie_bootstrap5_pagination($the_query, $paged) ?>
</section>

<?php
/* Restore original Post Data */
wp_reset_postdata();
// get_sidebar();
get_footer();
