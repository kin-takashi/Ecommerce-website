<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package julie-two
 */
add_filter( 'body_class', function( $classes ) {
	return array_merge( $classes, array( 'page-lien-he' ) );} );
get_header();
?>

<section class="container py-3">
  <span class="page-header">LIÊN HỆ</span>
  <br/>
  <br/>
  <div class="row">
    <div class="col-md-6 col-sm-12">
      <div class="gmap">
        <!-- <div id='map' style="width: 100%; height: 550px;"></div> -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.608856681061!2d106.77150294184682!3d10.841215686501718!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317527e3853e92dd%3A0xb8c3971db69d0dcc!2zQ8OUTkcgVFkgVE5ISCBUTSBEViBYTksgVEjDgUkgVEjhu4pOSA!5e0!3m2!1sen!2s!4v1679453958343!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div id="contact-info" class="d-flex flex-column">
        <div class="d-flex p-2">
          <i class="fa-solid fa-location-dot p-1"></i>
          <span>Kho 13 - Số 50, Đường Dân Chủ, P. Hiệp Phú, TP. Thủ Đức, HCM</span>
        </div>
        <div class="d-flex p-2">
          <i class="fa-solid fa-phone p-1"></i>
          <a class="btn-ga" ga-cat="contact" ga-action="call" ga-label="0901183119" href="tel:(+84) 938 963 111">(+84) 938 963 111</a>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <?php 
        $method = strtoupper($_SERVER['REQUEST_METHOD']);
      ?>
      <?php if ($method == 'GET'): ?>
					<form id="frmContact" method="POST" action="/lien-he">
						<?php wp_nonce_field( 'submit_contact' ); ?>
						<div class="row g-3 mb-3 mt-3">
							<div class="col-md-3 col-sm-4 text-end">
								<label for="txtName" class="col-form-label required">Họ và tên:</label>
							</div>
							<div class="col-md-9 col-sm-8">
								<input type="text" id="txtName" name="txtName" class="form-control" required>
							</div>
						</div>
						<div class="row g-3 mb-3">
							<div class="col-md-3 col-sm-4 text-end">
								<label for="txtEmail" class="col-form-label required">Email:</label>
							</div>
							<div class="col-md-9 col-sm-8">
								<input type="email" id="txtEmail" name="txtEmail" class="form-control" required>
							</div>
						</div>
						<div class="row g-3 mb-3">
							<div class="col-md-3 col-sm-4 text-end">
								<label for="txtPhone" class="col-form-label required">Số Điện Thoại:</label>
							</div>
							<div class="col-md-9 col-sm-8">
								<input type="text" id="txtPhone" name="txtPhone" class="form-control" required>
							</div>
						</div>
						<div class="row g-3 mb-3">
							<div class="col-md-3 col-sm-4 text-end">
								<label for="txtContent" class="col-form-label required">Nội dung:</label>
							</div>
							<div class="col-md-9 col-sm-8">
								<textarea id="txtContent" name="txtContent" class="form-control" rows="5" required></textarea>
							</div>
						</div>
						<div class="row text-end">
							<div class="col">
								<button id="btnSend" type="submit" class="btn btn-default">Gửi</button>
							</div>
						</div>
					</form>
					<?php endif; ?>

					<?php
					if ($method == 'POST'): 
						$nonce = $_REQUEST['_wpnonce'];

						if ( wp_verify_nonce( $nonce, 'submit_contact' ) ):
					?>
					
						<?php 
							$txtName    = $_REQUEST['txtName'];
							$txtEmail   = $_REQUEST['txtEmail'];
							$txtPhone   = $_REQUEST['txtPhone'];
							$txtContent = $_REQUEST['txtContent'];

							$message .= "\n - Name: " . $txtName; 
							$message .= "\n - Email: " . $txtEmail; 
							$message .= "\n - Phone: " . $txtPhone; 
							$message .= "\n - Content: " . $txtContent; 
							$message .= "\n "; 
							$message .= "\n - Agent: " . isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : ""; 
							$message .= "\n - HTTP_CLIENT_IP: " . isset($_SERVER['HTTP_CLIENT_IP']) ? $_SERVER['HTTP_CLIENT_IP'] : "";  
							$message .= "\n - HTTP_X_FORWARDED_FOR: " . isset($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : "";
							$message .= "\n - REMOTE_ADDR: " . isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : "";

							$to = defined('APP_CONTACT_EMAIL') ? APP_CONTACT_EMAIL : 'it@phankhangco.com';
							
							try {
								wp_mail(
									$to,
									"[Contact][thaithinhme.com] From: " . $txtEmail,
									$message
								);
							} catch (Exception $e) { ?>

							<div class="row text-center">
								<div class="col">
									<div class="alert alert-danger" role="alert">
										Đã có lỗi xãy ra (<?php echo  $e->getMessage(); ?>)
									</div>
								</div>
							</div>

						<?php
							}
						?>

						<div class="row text-center">
							<div class="col">
								<div class="alert alert-success" role="alert">
									Cảm ơn bạn đã gửi thông tin. Chúng tôi sẽ liên hệ với bạn trong thời gian sớm nhất!
								</div>
							</div>
						</div>

					<?php
						endif;
					endif;
					?>
    </div>
  </div>
</section>

<?php
// get_sidebar();
get_footer();
