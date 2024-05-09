<?php
// Kiểm tra nếu session chưa được khởi động
if (!session_id()) {
    session_start();
}

// Lấy giỏ hàng từ session
$cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();

// Tính toán tổng số lượng sản phẩm
$totalQuantities = array();
foreach ($cart as $product) {
    $productName = $product['name'];
    $quantity = $product['quantity'];
    
    if (array_key_exists($productName, $totalQuantities)) {
        $totalQuantities[$productName] += $quantity;
    } else {
        $totalQuantities[$productName] = $quantity;
    }
}

// Trả về dữ liệu dưới dạng JSON
echo json_encode($totalQuantities);
?>
