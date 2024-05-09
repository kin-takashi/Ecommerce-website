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
	<span class="page-header">SẢN PHẨM</span>
	<br />
	<br />
	<div class="row">
		<div class="col-md-12">
			<?php
			while (have_posts()):
				the_post();

				get_template_part('template-parts/content', get_post_type());
				$product_price = get_post_meta(get_the_ID(), '_product_price', true);
				echo 'Giá: ' . $product_price;
				// the_post_navigation(
				// 	array(
				// 		'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'julie-two' ) . '</span> <span class="nav-title">%title</span>',
				// 		'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'julie-two' ) . '</span> <span class="nav-title">%title</span>',
				// 	)
				// );
			
				// If comments are open or we have at least one comment, load up the comment template.
				// if ( comments_open() || get_comments_number() ) :
				// 	comments_template();
				// endif;
			
			endwhile; // End of the loop.
			?>
		</div>
	</div>
</section>

<?php
// get_sidebar();
get_footer();
