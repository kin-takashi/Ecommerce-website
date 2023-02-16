<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package julie-one
 */

?>

<!-- Blog -->
<article id="post-<?php the_ID(); ?>" <?php post_class('co-blog co-single-blog'); ?>>
                    
    <!-- Blog Media -->
    <div class="co-blog-media mb-35" style="display:none">
        <img src="<?php echo get_template_directory_uri();?>/img/corporate/blog/4.jpg" alt="">
        <?php julie_one_post_thumbnail(); ?>
    </div>
    
    <!-- Blog Content -->
    <div class="co-blog-content">
        
        <?php the_title( '<h4 class="title">', '</h4>' ); ?>
                                
        <!-- Meta -->
        <div class="co-blog-meta co-single-blog-meta fix">
          <?php julie_one_posted_by(); ?>
          <?php julie_one_posted_on(); ?>
        </div>
        
        <?php
          the_content(
            // sprintf(
            //   wp_kses(
            //     /* translators: %s: Name of current post. Only visible to screen readers */
            //     __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'julie-one' ),
            //     array(
            //       'span' => array(
            //         'class' => array(),
            //       ),
            //     )
            //   ),
            //   wp_kses_post( get_the_title() )
            // )
          );
          ?>
        
    </div>
    
    <div class="co-blog-share fix" style="display:none">
        <div class="social float-right">
            <h5>Share This Post :</h5>
            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
            <a href="#" class="dribbble"><i class="fa fa-dribbble"></i></a>
            <a href="#" class="vimeo"><i class="fa fa-vimeo"></i></a>
        </div>
    </div>
    
</article>
