<?php
if (isset($_POST['order'])) {
    // Thu thập thông tin từ form
    $username = $_POST['username'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $note = $_POST['note'];

    // Lấy thông tin sản phẩm từ giỏ hàng
    $productNames = array();
    foreach ($cart as $product) {
        $productName = $product['name'];
        $quantity = $product['quantity'];
        $productNames[] = "$productName x $quantity";
    }

    // Thiết lập thông tin email admin
    $adminEmail = "votanphu.lop12a7@gmail.com";
    $adminPassword = "leeq isxf qhmx aptg";

    // Thiết lập thông tin email cho khách hàng
    $toCustomer = $email;
    $subjectCustomer = "Xác nhận đơn hàng từ cửa hàng";
    $messageCustomer = "Xin chào $username,\n\n";
    $messageCustomer .= "Cảm ơn bạn đã đặt hàng tại cửa hàng của chúng tôi. Dưới đây là thông tin đơn hàng của bạn:\n\n";
    $messageCustomer .= "Tên khách hàng: $username\n";
    $messageCustomer .= "Số điện thoại: $phone\n";
    $messageCustomer .= "Địa chỉ email: $email\n";
    $messageCustomer .= "Địa chỉ giao hàng: $address\n";
    $messageCustomer .= "Ghi chú: $note\n\n";
    $messageCustomer .= "Danh sách sản phẩm:\n";
    $messageCustomer .= implode(", ", $productNames) . "\n\n";
    $messageCustomer .= "Tổng cộng: " . number_format($total_cart, 2) . " VNĐ\n\n";
    $messageCustomer .= "Chúng tôi sẽ liên hệ với bạn sớm nhất để xác nhận đơn hàng.\n";
    $messageCustomer .= "Xin cảm ơn và chúc bạn một ngày tốt lành!\n\n";
    $messageCustomer .= "Trân trọng,\nCửa hàng của bạn";

    // Gửi email cho khách hàng
    if (mail($toCustomer, $subjectCustomer, $messageCustomer)) {
        echo "Email xác nhận đơn hàng đã được gửi đến địa chỉ của bạn!";
    } else {
        echo "Có lỗi xảy ra khi gửi email.";
    }

    // Thiết lập thông tin email cho admin
    $toAdmin = $adminEmail;
    $subjectAdmin = "Đơn hàng mới từ khách hàng: $username";
    $messageAdmin = "Bạn nhận được một đơn hàng mới từ khách hàng:\n\n";
    $messageAdmin .= "Tên khách hàng: $username\n";
    $messageAdmin .= "Số điện thoại: $phone\n";
    $messageAdmin .= "Địa chỉ email: $email\n";
    $messageAdmin .= "Địa chỉ giao hàng: $address\n";
    $messageAdmin .= "Ghi chú: $note\n\n";
    $messageAdmin .= "Danh sách sản phẩm:\n";
    $messageAdmin .= implode(", ", $productNames) . "\n\n";
    $messageAdmin .= "Tổng cộng: " . number_format($total_cart, 2) . " VNĐ\n";

    // Gửi email cho admin
    if (mail($toAdmin, $subjectAdmin, $messageAdmin)) {
        echo "Thông báo đơn hàng mới đã được gửi đến admin!";
    } else {
        echo "Có lỗi xảy ra khi gửi thông báo đơn hàng mới cho admin.";
    }
}
?>
