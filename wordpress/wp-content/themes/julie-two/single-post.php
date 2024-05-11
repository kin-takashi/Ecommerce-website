<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package julie-two
 */

get_header();
?>

<section class="container">
  <br />
  <span class="page-header">TIN TỨC</span>
  <br />
  <br />
  <div class="row">
    <div class="col-md-12">
      <?php
      while (have_posts()):
        the_post();

        get_template_part('template-parts/content', get_post_type());


      endwhile; // End of the loop.
      ?>
    </div>
  </div>
</section>

<section class="container py-3">
  <div class="row">
    <div class="col-md-6 col-sm-12">
      <div class="page-header-container">
        <span class="page-header-2">ĐỪNG BỎ LỠ</span>
      </div>
    </div>
  </div>

  <br />
  <br />

  <?php
  // The Query
  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  $args = array(
    'post_type' => 'post',
    'orderby' => array('date' => 'DESC'),
    'paged' => $paged
  );
  $the_query = new WP_Query($args);

  // The Loop
  if ($the_query->have_posts()) {
    // echo '<div class="row">';
    while ($the_query->have_posts()) {
      $the_query->the_post();
      ?>
      <div class="row news-item">
        <div class="col-md-4 col-sm-12">
          <?php if (has_post_thumbnail()):
            julie_two_post_thumbnail();
          else: ?>
            <div class="post-thumbnail">
              <img src="<?php echo get_template_directory_uri(); ?>/img/default-news-img.png" alt="SITE LOGO" />
            </div>
          <?php endif; ?>
        </div>
        <div class="col-md-8 col-sm-12">
          <div class="post-detail-container">
            <div class="post-detail-meta">
              <?php julie_two_posted_on(); ?>
            </div>
            <div class="post-detail-content">
              <?php julie_two_posted_by(); ?>
              <a class="post-title-link" href="<?php the_permalink(); ?>">
                <?php the_title('<h4 class="entry-title">', '</h4>'); ?>
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
      // echo '<div class="news-item">' . get_the_title() . '</div class="news-item">';
    }
    // echo '</div>';
  } else {
    // no posts found
    //_e( 'Sorry, no posts matched your criteria.' );
  }

  ?>

</section>

<?php
// get_sidebar();
get_footer();
