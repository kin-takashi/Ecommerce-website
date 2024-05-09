<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package julie-two
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="post-detail-container">
		<div class="post-detail-meta">
			<?php julie_two_posted_on(); ?>
		</div>
		<div class="post-detail-content">

			<?php julie_two_posted_by(); ?>

			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

			<?php
			the_content(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'julie-two' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				)
			);

			// wp_link_pages(
			// 	array(
			// 		'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'julie-two' ),
			// 		'after'  => '</div>',
			// 	)
			// );

			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Tin Trước:', 'julie-two' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Tin Sau:', 'julie-two' ) . '</span> <span class="nav-title">%title</span>',
				)
			);
			?>
		</div>
	</div>


	<footer class="entry-footer">
		<?php //julie_two_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php //the_ID(); ?> -->

<br/>
