<?php get_header(); ?>

<h1 class="text-center mt-5 mb-5">Giỏ hàng của bạn</h1>

<?php
// Kiểm tra nếu session chưa được khởi động
if (!session_id()) {
    session_start();
}
$username = isset($_POST['username']) ? $_POST['username'] : '';
$phone = isset($_POST['phone']) ? $_POST['phone'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$address = isset($_POST['address']) ? $_POST['address'] : '';
$note = isset($_POST['note']) ? $_POST['note'] : '';

$cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();

// Xử lý khi người dùng nhấn nút "Đặt hàng"
if (isset($_POST['order'])) {
    // Lấy thông tin từ form
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $address = isset($_POST['address']) ? $_POST['address'] : '';
    $note = isset($_POST['note']) ? $_POST['note'] : '';

    // Lấy giỏ hàng từ session
    $cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();

    // Tính toán tổng số lượng và hiển thị tên sản phẩm
    $productNames = array();
    $totalCart = 0;

    foreach ($cart as $product) {
        // Lưu tên sản phẩm và số lượng vào mảng
        $productName = $product['name'];
        $quantity = $product['quantity'];

        // Tính tổng giá của từng sản phẩm
        $totalProduct = $product['price'] * $quantity;

        // Tính tổng giỏ hàng
        $totalCart += $totalProduct;

        // Lưu tên sản phẩm và số lượng vào mảng $productNames
        $productNames[] = "$productName x $quantity";
    }

    // Gửi email khi đặt hàng
    require_once 'PHPMailer/PHPMailerAutoload.php'; // Đảm bảo bạn đã bao gồm thư viện PHPMailer

    $mail = new PHPMailer;

    // Thiết lập giao thức SMTP
    $mail->isSMTP();
    $mail->Host = 'your_smtp_host'; // Thay thế bằng máy chủ SMTP của bạn, ví dụ: smtp.example.com
    $mail->SMTPAuth = true;
    $mail->Username = 'votanphu.lop12a7@gmail.com'; // Thay thế bằng tên người dùng SMTP của bạn
    $mail->Password = 'your_smtp_password'; // Thay thế bằng mật khẩu SMTP của bạn
    $mail->SMTPSecure = 'tls'; // Tùy chọn 'ssl' cho cổng 465 hoặc 'tls' cho cổng 587
    $mail->Port = 587; // Thay thế bằng cổng SMTP của bạn, thường là 587 hoặc 465

    // Định dạng email
    $mail->setFrom('your_smtp_username@example.com', 'Your Name'); // Thay thế bằng địa chỉ email của bạn và tên của bạn
    $mail->addAddress('recipient@example.com'); // Thay thế bằng địa chỉ email của người nhận

    $mail->isHTML(true);

    // Thiết lập nội dung email
    $mail->Subject = 'Thông tin đơn hàng';
    $mail->Body    = 'Tên khách hàng: ' . $username . '<br>' .
                     'Số điện thoại: ' . $phone . '<br>' .
                     'Email: ' . $email . '<br>' .
                     'Địa chỉ giao hàng: ' . $address . '<br>' .
                     'Ghi chú: ' . $note . '<br>' .
                     'Sản phẩm: ' . implode(', ', $productNames) . '<br>' .
                     'Tổng cộng: ' . number_format($totalCart, 2) . ' VNĐ';

    // Gửi email
    if(!$mail->send()) {
        echo 'Email không thể được gửi.';
        echo 'Lỗi Mailer: ' . $mail->ErrorInfo;
    } else {
        // Xóa giỏ hàng sau khi đã đặt hàng thành công
        unset($_SESSION['cart']);

        // Hiển thị thông báo thành công
        echo '<div class="alert alert-success" role="alert">
                <h4 class="alert-heading">Cảm ơn bạn đã đặt hàng!</h4>
                <p class="mb-0">Chúng tôi đã gửi thông tin đơn hàng của bạn qua email đến địa chỉ: ' . $email . '. Vui lòng kiểm tra hộp thư đến.</p>
              </div>';
    }
}
// Kiểm tra nếu có yêu cầu cập nhật số lượng từ request POST
if (isset($_POST['update_quantity']) && isset($_POST['index']) && isset($_POST['quantity'])) {
    // Lấy index của sản phẩm và số lượng mới từ request POST
    $index = $_POST['index'];
    $newQuantity = $_POST['quantity'];

    // Cập nhật số lượng mới cho sản phẩm trong giỏ hàng
    $cart[$index]['quantity'] = $newQuantity;

    // Lưu lại giỏ hàng mới vào session
    $_SESSION['cart'] = $cart;
}
// Xử lý khi người dùng nhấn nút "Đặt hàng"
if (isset($_POST['order'])) {
    // Lấy thông tin từ form
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $address = isset($_POST['address']) ? $_POST['address'] : '';
    $note = isset($_POST['note']) ? $_POST['note'] : '';

    // Lấy giỏ hàng từ session
    $cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();

    // Tính toán tổng số lượng và hiển thị tên sản phẩm
    $productNames = array();
    $totalCart = 0;

    foreach ($cart as $product) {
        // Lưu tên sản phẩm và số lượng vào mảng
        $productName = $product['name'];
        $quantity = $product['quantity'];

        // Tính tổng giá của từng sản phẩm
        $totalProduct = $product['price'] * $quantity;

        // Tính tổng giỏ hàng
        $totalCart += $totalProduct;

        // Lưu tên sản phẩm và số lượng vào mảng $productNames
        $productNames[] = "$productName x $quantity";
    }

}
?>



<div class="container card-list" id="container">
    <ul class="d-flex list-unstyled text-start border-bottom border-3 p-2">
        <li class="col-md-3 col-4"><b>Sản phẩm</b></li>
        <li class="col-md-2 col-2"><b>Giá</b></li>
        <li class="col-md-2 col-2"><b>Số lượng</b></li>
        <li class="col-md-3 col-2"><b>Tổng</b></li>
        <li class="col-md-1 col-1"><b>Thao tác</b></li>
    </ul>

    <?php
    $total_cart = 0;

    foreach ($cart as $index => $product):
        $total_product = $product['price'] * $product['quantity'];
        $total_cart += $total_product;
        ?>

        <ul class="d-flex list-unstyled border-bottom border-3 border-gray p-2">
            <li class="col-sm-3 img-product d-flex align-self-center text-start">
                <?php if (has_post_thumbnail($product['id'])): ?>
                    <?php echo get_the_post_thumbnail($product['id'], 'thumbnail', array('alt' => $product['name'], 'class' => 'mr-3')); ?>
                <?php else: ?>
                    <img src="<?php echo $product['image']; ?>" class="img-product mr-3">
                <?php endif; ?>
                <div class="align-self-center ps-3">
                    <p><?php echo $product['name']; ?></p>
                </div>
            </li>
            <li class="col-md-2 col-2 quantity align-self-center "><?php echo $product['price']; ?> VNĐ</li>
            <li class="col-md-2 col-2 quantity align-self-center text-start">
                <div class="w-50">
                    <div class="input-group">
                        <button class="btn btn-sm btn-outline-secondary decrement-btn" type="button"
                            onclick="updateQuantity(<?php echo $index; ?>, -1)">-</button>
                        <input type="text" step="1" min="1" max="" name="quantity"
                            value="<?php echo $product['quantity']; ?>" title="Qty" class="form-control quantity-input"
                            size="4" pattern="[0-9]*" inputmode="numeric" data-index="<?php echo $index; ?>"
                            onchange="updateQuantityFromInput(this)">
                        <button class="btn btn-sm btn-outline-secondary increment-btn" type="button"
                            onclick="updateQuantity(<?php echo $index; ?>, 1)">+</button>
                    </div>
                </div>
            </li>
            <li class="col-md-3 col-3 align-self-center total" id="total-price-<?php echo $index; ?>"
                data-price="<?php echo $product['price']; ?>"><?php echo $total_product; ?> VNĐ</li>
            <li class="col-md-1 col-1 align-self-center section">
                <div class="col-md-1 col-1 align-self-center section">
                    <button type="button" class="btn btn-sm btn-danger btn-delete-item"
                        data-id="<?php echo $product['id']; ?>">
                        <i class="fa-solid fa-trash"></i>
                    </button>
                </div>
            </li>
        </ul>

    <?php endforeach; ?>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-7">
            <div class="page-1">
                <h5 class="mb-4">Thông Tin Khách Hàng</h5>
                <form method="post">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="username" placeholder="Họ và tên">
                        </div>
                        <div class="col-md-6">
                            <input type="tel" class="form-control" name="phone" placeholder="Số điện thoại">
                        </div>
                        <div class="col-12">
                            <input type="email" class="form-control" name="email" placeholder="Email">
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control" name="address" placeholder="Địa chỉ giao hàng">
                        </div>
                        <div class="col-12">
                            <h5><b>THÔNG TIN BỔ SUNG</b></h5>
                            <h7><b>Ghi chú đơn hàng (tùy chọn)</b></h7>
                            <textarea class="form-control" rows="8" name="note"
                                placeholder="Ghi chú đơn hàng của bạn"></textarea>
                        </div>
                    </div>
                </form>
                
            </div>
        </div>
        <div class="col-md-5">
            <div class="card donhang">
                <div class="card-body">
                    <h5 class="card-title"><b>Đơn hàng của bạn</b></h5>
                    <div class="row mb-3">
                        <div class="col-6 border-bottom border-2"><b>Sản phẩm</b></div>
                        <div class="col-6 text-end border-bottom border-2"><b>Tổng</b></div>
                        <div class="col-6 mt-3" id="product-names"><?php echo implode(', ', $productNames); ?></div>
                        <div class="col-6 text-end mt-3" id="total-cart"><?php echo number_format($total_cart, 2); ?>
                            VNĐ</div>
                        <div class="col-6 mt-3">Tạm tính:</div>
                        <div class="col-6 mt-3 text-end" id="sub-total"><?php echo number_format($total_cart, 2); ?> VNĐ
                        </div>
                        <div class="col-6 mt-3">Thành tiền:</div>
                        <div class="col-6 mt-3 text-end" id="grand-total"><?php echo number_format($total_cart, 2); ?>
                            VNĐ</div>
                    </div>
                    
                    <div class="text-center pt-2 border-top border-2">
    <div class="row">
        <h5 class="text-start">Hình Thức Thanh Toán</h5>
        <div class="col-md-6">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="transferPayment">
                <label class="form-check-label" for="transferPayment">
                    Thanh Toán Bằng Chuyển Khoản
                </label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="cashPayment">
                <label class="form-check-label" for="cashPayment">
                    Thanh Toán Bằn Tiền Mặt
                </label>
            </div>
        </div>
    </div>
</div>

                    <div class="text-center pt-2 border-top border-bottom border-2">
                        <div class="alert alert-success" role="alert">
                            <h4 class="alert-heading">Cảm ơn bạn đã đặt hàng!</h4>
                            <p class="mb-0">Chúng tôi sẽ gửi thông tin đơn hàng của bạn qua email đến địa chỉ Gmail của
                                bạn. Vui lòng kiểm tra hộp thư đến và nhấn vào nút xác nhận để hoàn tất quá trình đặt
                                hàng.</p>
                        </div>
                        <div class="mb-3 mt-3 text-end">
                            <button type="submit" class="btn btn-primary" name="order">Đặt hàng</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php

?>



<?php get_footer(); ?>

