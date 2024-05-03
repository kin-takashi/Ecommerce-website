<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package julie-two
 */

?>
<?php $wpdb;
$args ="
    SELECT t1.*, t2.*,t3.*
    FROM {$wpdb->prefix}terms AS t1
    INNER JOIN {$wpdb->prefix}term_taxonomy AS t2 ON t1.term_id = t2.term_id
    INNER JOIN {$wpdb->prefix}termmeta AS t3 ON t1.term_id = t3.term_id
    WHERE t2.taxonomy = 'product_category'
    ORDER BY t1.name ASC
    ";
$productCategories = $wpdb->get_results($args);
?>
<footer id="footer">
	<!-- Footer -->
<footer class="text-center text-lg-start text-muted">
  <!-- Section: Social media -->
    <!-- Left -->
    
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="background">
    <div class="py-2 container text-center text-md-start " >
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mb-4 footer">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4 footer-lienhe">
            Liên hệ
          </h6>
          <p style="font-size: 16.5px;"><i class="fa-solid fa-location-dot me-3"></i>Kho 13 - Số 50, Đường Dân Chủ, P.Hiệp Phú, TP.Thủ Đức, HCM  </p>
          <p style="font-size: 16.5px;"><i class="fas fa-phone me-3"></i> +(84) 938 963 111</p>
          <p style="font-size: 16.5px;">
            <i class="fas fa-envelope me-3"></i>
            info@example.com
          </p>
          <p style="font-size: 16.5px;"><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4 footer-sanpham">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Sản phẩm
          </h6>
          <?php foreach($productCategories as $p){?>
          <p>
            <a href="<?php echo esc_url(get_category_link($p->term_id));?>" class="text-reset " style="text-decoration: none;"><?php echo $p->name; ?></a>
          </p>
        <?php }?>
        </div>
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4 footer-li" >
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">CONTACT</h6>
          <li><a href="https://www.facebook.com/"><i class="fa-brands fa-facebook"></i></a></li>
          <li><a href="https://www.youtube.com/">
            <i class="fa-brands fa-youtube"></i>
          </a></li>
          <li><a  href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a></li>
          <li><a href="https://accounts.google.com/"><i class="fa-brands fa-google"></i></a></li>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
   
    <div class="row pb-3">
      <div class="col-lg-4 col-md-4 col-sm-4 footer-logo">
        <img src="<?php echo get_template_directory_uri();?>/img/watertec_1.png" alt="Không có" style="backround-color:black">
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 footer-logo">
        <img src="<?php echo get_template_directory_uri();?>/img/logo-footer.png" alt="Không có" style="backround-color:black">
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 footer-logo">
        <img src="<?php echo get_template_directory_uri();?>/img/sanwa.png" alt="Không có" style="backround-color:black">
      </div>
    </div>
      
  
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center py-2" style="background-color: rgba(0, 0, 0, 0.05);">
  Copyright © 2021 | Powered by
    <a class="text-reset fw-bold">Công ty TNHH Phan Khang Home</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
</footer>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<?php wp_footer(); ?>
<script>
  AOS.init();
</script>

</body>
</html>
