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

<<<<<<< HEAD
<section class="container-fluid py-5">
    <div class="container">
        <div class="row">
            <?php
            // The Query for Newer Posts
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
                'post_type' => 'post',
                'orderby' => array('date' => 'DESC'),
                'paged' => $paged
            );
            $the_query = new WP_Query($args);

            // The Loop for Newer Posts
            if ($the_query->have_posts()) {
                while ($the_query->have_posts()) {
                    $the_query->the_post();
                    ?>
                    <div class="col-md-6 mb-4">
                        <div class="card h-100">
                            <?php if (has_post_thumbnail()): ?>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('custom-size', array('class' => 'card-img-top img-thumbnail', 'alt' => get_the_title())); ?>
                                </a>
                            <?php else: ?>
                                <img class="card-img-top img-fluid img-thumbnail"
                                    src="<?php echo get_template_directory_uri(); ?>/img/default-news-img.png" alt="SITE LOGO" />
                            <?php endif; ?>
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="<?php the_permalink(); ?>" style="color:#50ADE5;"><?php the_title(); ?></a>
                                </h5>
                                <p class="card-text"><?php the_excerpt(); ?></p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted"><?php echo get_the_date('d/m/Y'); ?></small>
                                <a href="<?php the_permalink(); ?>" class="btn btn-primary float-end">Chi tiết</a>
                            </div>
                        </div>
                    </div>



                    <?php
                }
            } else {
                // no newer posts found
            }

            // Reset Post Data for Older Posts
            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>

<?php
// get_sidebar();
get_footer();
?>
=======
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
>>>>>>> origin/hieu
