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

<style>
	.img {
		height: 300px;
		width: 300px;
	}
</style>

<section class="container">
	<br />
	<br />
	<br />

	<div class="row">
		<div class="col-md-12">
			<?php
			while (have_posts()):
				the_post();

				$productMeta = get_post_meta(get_the_ID());
				$product_price = get_post_meta(get_the_ID(), '_product_price', true);

				?>

				<div class="container">
					<div class="row">
						<div class="col-4 ">
							<img class="img" src="<?php the_post_thumbnail_url('Thumbnails'); ?>" class="card-img-top"
								alt="<?php the_title(); ?>">
						</div>
						<div class="col-6">
							<div class="card-body">
								<h5 class="card-title"><?php the_title(); ?></h5>
								<p class="card-text"><?php echo $productMeta["code"][0]; ?> - <?php echo $productMeta["size"][0]; ?>
									+++++</p>
								<p class="card-text">Giá:<?php echo $product_price; ?>VNĐ</p>
								<a href="" class="btn btn-primary">thanh toan</a>
								<p> <?php echo $post_id ?></p>
							<?php endwhile; ?>
						</div>
						<div style="height=60px; ">
							<div class="col-5" >
							<div class="input-group col-md-5 " >
									<button class="btn btn-sm btn-outline-secondary decrement-btn" type="button">-</button>
									<input type="text" step="1" min="1" max="auto" name="quantity" value="1"
										value="<?php echo $product['quantity']; ?>" title="Qty" class="form-control" size="5"
										pattern="[0-9]*" inputmode="numeric" data-index="<?php echo $index; ?>">
									<button class="btn btn-sm btn-outline-secondary increment-btn" type="button">+</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">

				</div>
			</div>

</section>


<script src="<?php echo get_template_directory_uri(); ?>/js/single-product.js"></script>
