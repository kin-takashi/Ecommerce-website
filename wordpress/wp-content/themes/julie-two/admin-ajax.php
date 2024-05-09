<?php
// Load WordPress
define( 'WP_USE_THEMES', false );
require_once( 'wp-load.php' );

// Kiểm tra xem yêu cầu AJAX có được gửi không
if ( isset( $_REQUEST['action'] ) ) {
    // Phân tích yêu cầu AJAX và gọi hàm xử lý tương ứng
    switch ( $_REQUEST['action'] ) {
        case 'my_ajax_action':
            my_ajax_action_handler();
            break;
        // Thêm các trường hợp xử lý yêu cầu AJAX khác ở đây nếu cần
        default:
            // Trả về lỗi nếu hành động không được hỗ trợ
            wp_send_json_error( 'Invalid AJAX action' );
    }
} else {
    // Trả về lỗi nếu không có hành động AJAX được xác định
    wp_send_json_error( 'No AJAX action specified' );
}

// Hàm xử lý yêu cầu AJAX
function my_ajax_action_handler() {
    // Xử lý yêu cầu AJAX ở đây
    // Ví dụ: lấy dữ liệu từ CSDL, xử lý và trả về kết quả

    // Ví dụ trả về một mảng JSON làm phản hồi
    $response = array(
        'message' => 'Yêu cầu AJAX đã được xử lý thành công!'
    );

    // Trả về phản hồi JSON
    wp_send_json_success( $response );
}




