<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["id"])) {
    $id_to_delete = $_POST["id"];

    // Xóa sản phẩm từ session
    if (isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $index => $product) {
            if ($product['id'] == $id_to_delete) {
                unset($_SESSION['cart'][$index]);
                break;
            }
        }
    }

    // Trả về kết quả thành công hoặc thất bại (nếu cần)
    $response = array(
        'success' => true
    );
} else {
    $response = array(
        'success' => false,
        'message' => 'Invalid request'
    );
}

// Chuyển định dạng JSON và gửi phản hồi
header('Content-Type: application/json');
echo json_encode($response);
?>
