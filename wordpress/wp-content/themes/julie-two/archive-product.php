<?php
// Kiểm tra nếu session chưa được khởi động
if (!session_id()) {
    session_start();
}

// Template bắt đầu
get_header();
?>

<section class="container py-3">
    <h1 class="page-header">SẢN PHẨM</h1>
</section>

<div class="container">
    <div class="row ">
        <!--thanh tim kiem -->
        <div class="col-3">
            <section class="container py-3 ">
                <!-- Sidebar -->
                <div class="card">
                    <div class="card-body">
                        <div class="page-product-list--sidebar" style="text-align: center;   ">
                            <?php get_template_part('template-parts/sidebar', 'product'); ?>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class=" col">
            <section class="container py-3">
                <!-- Search form -->
                <div class="row justify-content">
                    <div class="col">
                        <form class="form-inline" method="get" action="<?php echo esc_url(home_url('/')); ?>">
                            <div class="input-group">
                                <input class="form-control" type="search" name="s" placeholder="Search" aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-primary" type="submit">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>

            <section class="container py-3">
                <!-- Product list -->
                <div class="col ">
                    <!-- Product items -->
                    <div class="row">
                        <!-- Product item -->
                        <?php while (have_posts()): ?>
                            <?php
                            the_post();
                            $productMeta = get_post_meta(get_the_ID());
                            $product_price = get_post_meta(get_the_ID(), '_product_price', true);
                            ?>
                            <div class="col-md-4 mb-4">
                                <div class="card">
                                    <img src="<?php the_post_thumbnail_url('Thumbnails'); ?>" class="card-img-top" style="height: 350px;" alt="<?php the_title(); ?>">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php the_title(); ?></h5>
                                        <p class="card-text"><?php echo $productMeta["code"][0]; ?> - <?php echo $productMeta["size"][0]; ?></p>
                                        <p class="card-text">Giá:<?php echo $product_price; ?> VNĐ</p>
                                        <form method="post">
                                            <input type="hidden" name="product_id" value="<?php the_ID(); ?>">
                                            <input type="hidden" name="product_name" value="<?php the_title(); ?>">
                                            <input type="hidden" name="product_price" value="<?php echo $product_price; ?>">
                                            <button type="submit" name="add_to_cart" class="btn btn-primary">Mua</button>
                                        </form>
                                        <a href="<?php the_permalink(); ?>" class="btn btn-primary">Chi tiết</a>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

<?php
// Template kết thúc
get_footer();
?>
