<?php
/**
 * julie-two functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package julie-two
 */

if (!defined('_S_VERSION')) {
    define('_S_VERSION', '1.0.0');
}

function julie_two_setup()
{
    load_theme_textdomain('julie-two', get_template_directory() . '/languages');

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    register_nav_menus(
        array(
            'menu-1' => esc_html__('Primary', 'julie-two'),
        )
    );

    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        )
    );

    add_theme_support(
        'custom-background',
        apply_filters(
            'julie_two_custom_background_args',
            array(
                'default-color' => 'ffffff',
                'default-image' => '',
            )
        )
    );

    add_theme_support('customize-selective-refresh-widgets');

    add_theme_support(
        'custom-logo',
        array(
            'height' => 250,
            'width' => 250,
            'flex-width' => true,
            'flex-height' => true,
        )
    );
}
add_action('after_setup_theme', 'julie_two_setup');

function julie_two_widgets_init()
{
    register_sidebar(
        array(
            'name' => esc_html__('Sidebar', 'julie-two'),
            'id' => 'sidebar-1',
            'description' => esc_html__('Add widgets here.', 'julie-two'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        )
    );
}
add_action('widgets_init', 'julie_two_widgets_init');

function julie_two_scripts()
{
    wp_enqueue_style('julie-two-style', get_stylesheet_uri(), array(), _S_VERSION);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'julie_two_scripts');

require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/customizer.php';

if (defined('JETPACK__VERSION')) {
    require get_template_directory() . '/inc/jetpack.php';
}

require get_template_directory() . '/inc/config-theme.php';
require get_template_directory() . '/inc/post-type/product.php';

function add_custom_body_class($classes)
{
    if (is_page('gioi-thieu')) {
        $classes[] = 'custom-page-gioithieu';
    }
    return $classes;
}
add_filter('body_class', 'add_custom_body_class');

function create_cart_page()
{
    $optionName = 'register_cart_pages';
    $optionValue = intval(get_option($optionName, '0'));
    $currentVersion = 2;

    if ($optionValue < $currentVersion) {
        $page_slugs = array('gio-hang');

        foreach ($page_slugs as $slug) {
            $page = get_page_by_path($slug);

            if ($page === null) {
                $args = array(
                    'post_type' => 'page',
                    'post_name' => $slug,
                    'post_title' => ucwords(str_replace('-', ' ', $slug)),
                    'post_status' => 'publish',
                    'page_template' => 'page-' . $slug . '.php'
                );

                wp_insert_post($args);
            }
        }

        update_option($optionName, $currentVersion);
    }
}
add_action('init', 'create_cart_page');

function enqueue_custom_styles()
{
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/style.css');
}

add_action('wp_enqueue_scripts', 'enqueue_custom_styles');

function add_custom_script()
{
    wp_enqueue_script('custom-script', get_template_directory_uri() . '/path/to/your/script.js', array('jquery'), '1.0', true);
}


add_action('wp_ajax_add_to_cart', 'add_to_cart_callback');
add_action('wp_ajax_nopriv_add_to_cart', 'add_to_cart_callback');

function add_to_cart_callback() {
    $product_id = $_POST['product_id'];
    // Thực hiện xử lý thêm sản phẩm vào giỏ hàng ở đây
    // Ví dụ: thêm sản phẩm vào session giỏ hàng

    // Phản hồi về client-side JavaScript
    wp_send_json_success(array('message' => 'Sản phẩm đã được thêm vào giỏ hàng.'));
}
function add_to_cart() {
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];

    $cart_item = array(
        'id' => $product_id,
        'name' => $product_name,
        'price' => $product_price
    );

    // Lấy giỏ hàng từ session (nếu có)
    $cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();

    // Thêm sản phẩm vào giỏ hàng
    $cart[] = $cart_item;

    // Lưu giỏ hàng vào session
    $_SESSION['cart'] = $cart;
}

add_action('wp_ajax_add_to_cart', 'add_to_cart');
add_action('wp_ajax_nopriv_add_to_cart', 'add_to_cart');

// Thêm meta box giá sản phẩm
function add_product_price_meta_box() {
    add_meta_box(
        'product_price_meta_box',
        'Giá sản phẩm',
        'display_product_price_meta_box',
        'product', // Loại bài viết cần thêm meta box
        'side', // Vị trí của meta box (có thể là 'normal', 'advanced' hoặc 'side')
        'default'
    );
}
add_action('add_meta_boxes', 'add_product_price_meta_box');

// Hiển thị nội dung meta box giá sản phẩm
function display_product_price_meta_box($post) {
    // Lấy giá sản phẩm từ trường meta nếu có
    $product_price = get_post_meta($post->ID, '_product_price', true);
    ?>
    <label for="product_price">Giá:</label>
    <input type="text" id="product_price" name="product_price" value="<?php echo esc_attr($product_price); ?>" />
    <?php
}

// Thêm trường meta vào trang quản lý sản phẩm
function add_product_image_gallery_meta_box() {
    add_meta_box(
        'product_image_gallery',
        __( 'Product Image Gallery', 'textdomain' ),
        'product_image_gallery_meta_box_callback',
        'product',
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'add_product_image_gallery_meta_box' );

// Giao diện của trường meta
function custom_product_image_gallery_meta_box() {
    add_meta_box(
        'custom_product_image_gallery_meta_box',
        'Product Image Gallery',
        'custom_product_image_gallery_meta_box_callback',
        'product', // Change 'product' to your custom post type
        'normal',
        'default'
    );
}
add_action('add_meta_boxes', 'custom_product_image_gallery_meta_box');

// Callback function to display meta box content
function custom_product_image_gallery_meta_box_callback($post) {
    // Retrieve saved gallery images
    $gallery_images = get_post_meta($post->ID, 'product_image_gallery', true);

    // Nonce field for verification
    wp_nonce_field(plugin_basename(__FILE__), 'custom_product_image_gallery_nonce');

    // Output the field
    ?>
    <p>
        <label for="product_image_gallery">Select images for the gallery:</label>
        <input type="button" class="button" id="upload_gallery_images_button" value="Add Images">
    </p>
    <ul id="product_image_gallery" class="gallery_images">
        <?php
        if ($gallery_images) {
            foreach ($gallery_images as $image) {
                echo '<li><img src="' . esc_url($image) . '"></li>';
            }
        }
        ?>
    </ul>
    <?php
}

// Save the custom meta box data
function save_custom_product_image_gallery_meta_box_data($post_id) {
    // Check if nonce is set
    if (!isset($_POST['custom_product_image_gallery_nonce'])) {
        return;
    }
    // Verify nonce
    if (!wp_verify_nonce($_POST['custom_product_image_gallery_nonce'], plugin_basename(__FILE__))) {
        return;
    }
    // Check if this is an autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    // Check the user's permissions
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    // Check if the input is set
    if (!isset($_POST['product_image_gallery'])) {
        return;
    }
    // Sanitize and save the data
    $gallery_images = array_map('esc_url_raw', $_POST['product_image_gallery']);
    update_post_meta($post_id, 'product_image_gallery', $gallery_images);
}
add_action('save_post', 'save_custom_product_image_gallery_meta_box_data');

// Enqueue scripts and styles
// Enqueue scripts and styles
function custom_product_image_gallery_enqueue_scripts() {
    global $pagenow, $typenow;

    if (($pagenow == 'post.php' || $pagenow == 'post-new.php') && $typenow == 'product') {
        wp_enqueue_media();
        wp_enqueue_script('custom-product-gallery', plugins_url('custom-product-gallery.js', __FILE__), array('jquery'), null, true);


    }
}
add_action('admin_enqueue_scripts', 'custom_product_image_gallery_enqueue_scripts');

add_action('wp_ajax_delete_cart_item', 'delete_cart_item_callback');
add_action('wp_ajax_nopriv_delete_cart_item', 'delete_cart_item_callback');

function delete_cart_item_callback() {
    // Kiểm tra xác thực và quyền hạn ở đây nếu cần
    check_ajax_referer('delete_cart_item_nonce', 'security');

    // Nhận ID của sản phẩm cần xóa
    $product_id = isset($_POST['id']) ? intval($_POST['id']) : 0;

    // Thực hiện xóa sản phẩm khỏi giỏ hàng (session)
    if (isset($_SESSION['cart']) && isset($_SESSION['cart'][$product_id])) {
        unset($_SESSION['cart'][$product_id]);
        wp_send_json_success('Sản phẩm đã được xóa khỏi giỏ hàng');
    } else {
        wp_send_json_error('Không tìm thấy sản phẩm trong giỏ hàng');
    }

    wp_die();
}
// Thêm hàm gửi email vào giỏ hàng
add_action( 'woocommerce_checkout_order_processed', 'send_order_email', 10, 1 );
function send_order_email( $order_id ) {
    $order = wc_get_order( $order_id );
    
    // Lấy thông tin khách hàng và sản phẩm từ đơn hàng
    $customer_email = $order->get_billing_email();
    $customer_name = $order->get_billing_first_name();
    $products = $order->get_items();

    // Tạo nội dung email
    $subject = 'Thông tin đơn hàng #' . $order_id;
    $message = 'Xin chào ' . $customer_name . ',<br><br>';
    $message .= 'Cảm ơn bạn đã đặt hàng với chúng tôi. Dưới đây là chi tiết đơn hàng của bạn:<br><br>';
    foreach ( $products as $product ) {
        $product_name = $product->get_name();
        $product_qty = $product->get_quantity();
        $product_total = $product->get_total();
        $message .= '- ' . $product_name . ' x ' . $product_qty . ' - ' . wc_price( $product_total ) . '<br>';
    }
    $message .= '<br>';
    $message .= 'Xin vui lòng liên hệ với chúng tôi nếu bạn có bất kỳ câu hỏi nào.<br><br>';
    $message .= 'Trân trọng,<br>';
    $message .= 'Đội ngũ của chúng tôi';

    // Gửi email
    wp_mail( $customer_email, $subject, $message );
}
