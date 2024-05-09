<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package julie-two
 */

get_header();
$q = get_queried_object();
?>

<section class="container py-3">
	<div class="page-product-list-title">
		<div class="page-product-list-title--sidebar">SẢN PHẨM</div>
		<div class="page-product-list-title--sub"><?php echo $q->name;?></div>
	</div>
	<br/>
  <br/>
</section>

<section class="container py-3 page-product-list">
	<div class="page-product-list--container">
		<div class="page-product-list--sidebar">
			<?php get_template_part( 'template-parts/sidebar', 'product');;?>
		</div>
		<div class="page-product-list--items">

			<?php while ( have_posts() ) : ?>
				<?php 
					// $the_query->the_post();
					the_post();
					$productMeta = get_post_meta(get_the_ID());
				?>
				<div class="page-product-list--item">
					<a class="product-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
						<?php
							the_post_thumbnail(
								'product-thumbnail',
								array(
									// 'class' => 'img-thumbnail',
									'alt' => the_title_attribute(
										array(
											'echo' => false,
										)
									),
								)
							);
						?>
					</a>
					<div class="page-product-list--item--meta">
						<div class="product-meta-1">
							<span class="product-code">
								<?php 
									if (count($productMeta["code"]) > 0):
										echo $productMeta["code"][0];
									endif; 
								?>
							</span>
							<span class="product-size">
								<?php 
									if (count($productMeta["size"]) > 0):
										echo $productMeta["size"][0];
									endif; 
								?>
							</span>
						</div>
						<div class="product-meta-2">
							<span class="product-name"><?php the_title(); ?></span>
						</div>
					</div>
				</div>
			<?php endwhile; ?>

		</div>
	</div>
</section>

<?php
// get_sidebar();
get_footer();
