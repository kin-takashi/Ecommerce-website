<?php
// Kiểm tra nếu session chưa được khởi động
if (!session_id()) {
    session_start();
}

// Xử lý sự kiện khi người dùng nhấn nút "Mua"
if (isset($_POST['add_to_cart'])) {
    // Lấy thông tin sản phẩm từ form
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];

    // Kiểm tra xem giỏ hàng đã được khởi tạo trong session chưa
    if (!isset($_SESSION['cart'])) {
        // Nếu chưa, khởi tạo giỏ hàng là một mảng trống
        $_SESSION['cart'] = array();
    }

    // Kiểm tra xem sản phẩm đã có trong giỏ hàng hay chưa
    $product_index = -1;
    foreach ($_SESSION['cart'] as $index => $product) {
        if ($product['id'] == $product_id) {
            // Nếu sản phẩm đã tồn tại, tăng số lượng lên 1
            $_SESSION['cart'][$index]['quantity']++;
            $product_index = $index;
            break;
        }
    }

    // Nếu sản phẩm không tồn tại trong giỏ hàng, thêm mới
    if ($product_index === -1) {
        $product = array(
            'id' => $product_id,
            'name' => $product_name,
            'price' => $product_price,
            'quantity' => 1 // Số lượng mặc định là 1 khi thêm vào giỏ hàng
        );

        // Thêm sản phẩm vào giỏ hàng
        $_SESSION['cart'][] = $product;
    }

    // Hiển thị thông báo hoặc chuyển hướng đến trang giỏ hàng
    // (Bạn có thể thực hiện sau)
}
?>

<?php
// Template bắt đầu
get_header();
?>

<section class="container py-3">
    <h1 class="page-header">SẢN PHẨM</h1>
</section>

<section class="container py-3">
    <div class="row">
        <div class="col-md-3 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Bộ Lọc</h5>
                    <!-- Form tìm kiếm -->
                    <form method="get" action="<?php echo esc_url(home_url('/')); ?>">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="s" placeholder="Tìm kiếm sản phẩm">
                            <button class="btn btn-outline-secondary" type="submit">Tìm kiếm</button>
                        </div>
                    </form>
                    <!-- Kết thúc form tìm kiếm -->
                    <hr>
                    <!-- Danh sách danh mục hoặc bộ lọc khác -->
                    <!-- Ví dụ: -->
                    <h6 class="mb-3">Danh Mục</h6>
                    <ul class="list-group">
                        <?php
                        $args = array(
                            'taxonomy' => 'product_cat', // Thay 'product_cat' bằng tên của taxonomy bạn muốn hiển thị danh mục
                            'hide_empty' => false, // Hiển thị cả danh mục không có sản phẩm
                        );
                        $categories = get_categories($args);
                        foreach ($categories as $category) {
                            echo '<li class="list-group-item"><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
                        }
                        ?>
                    </ul>
                    <!-- Kết thúc danh sách danh mục -->
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="row">
                <?php while (have_posts()): ?>
                    <?php
                    the_post();
                    $productMeta = get_post_meta(get_the_ID());
                    $product_price = get_post_meta(get_the_ID(), '_product_price', true);
                    ?>
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <img src="<?php the_post_thumbnail_url('medium'); ?>" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class="card-title"><?php the_title(); ?></h5>
                                <p class="card-text"><?php echo $productMeta["code"][0]; ?> - <?php echo $productMeta["size"][0]; ?></p>
                                <p class="card-text"><?php echo $product_price; ?></p>
                            </div>
                            <div class="card-footer">
                                <form method="post">
                                    <input type="hidden" name="product_id" value="<?php the_ID(); ?>">
                                    <input type="hidden" name="product_name" value="<?php the_title(); ?>">
                                    <input type="hidden" name="product_price" value="<?php echo $product_price; ?>">
                                    <button type="submit" name="add_to_cart" class="btn btn-primary btn-block">Mua</button>
                                    <button ><a href="<?php the_permalink(); ?>">Detail</a></button>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</section>

<?php
// Template kết thúc
get_footer();
?>
