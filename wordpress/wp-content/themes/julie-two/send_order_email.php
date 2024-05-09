<?php
if (isset($_POST['order'])) {
    // Kiểm tra nếu session chưa được khởi động
    if (!session_id()) {
        session_start();
    }

    // Lấy thông tin từ form
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $address = isset($_POST['address']) ? $_POST['address'] : '';
    $note = isset($_POST['note']) ? $_POST['note'] : '';

    // Lấy giỏ hàng từ session
    $cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();

    // Tạo nội dung email
    $to = 'recipient@example.com'; // Địa chỉ email người nhận
    $from = 'votanphu.lop12a7@gmail.com'; // Địa chỉ email người gửi
    $subject = 'Thông tin đơn hàng';
    $message = 'Tên khách hàng: ' . $username . '<br>';
    $message .= 'Số điện thoại: ' . $phone . '<br>';
    $message .= 'Email: ' . $email . '<br>';
    $message .= 'Địa chỉ giao hàng: ' . $address . '<br>';
    $message .= 'Ghi chú: ' . $note . '<br>';
    $message .= 'Sản phẩm: ' . implode(', ', $productNames) . '<br>';
    $message .= 'Tổng cộng: ' . number_format($total_cart, 2) . ' VNĐ';

    // Định dạng headers
    $headers[] = 'From: ' . $from;
    $headers[] = 'Content-Type: text/html; charset=UTF-8';

    // Gửi email
    $result = wp_mail($to, $subject, $message, $headers);

    // Kiểm tra kết quả gửi email
    if ($result) {
        echo 'Email đã được gửi thành công.';
    } else {
        echo 'Đã xảy ra lỗi khi gửi email.';
    }

    // Xóa giỏ hàng sau khi đã đặt hàng
    unset($_SESSION['cart']);
}
?>
