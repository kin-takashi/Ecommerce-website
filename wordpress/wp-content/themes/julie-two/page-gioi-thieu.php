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
	return array_merge( $classes, array( 'page-gioi-thieu' ) );
} );

get_header();
?>

<section class="container py-3">
  <span class="page-header">GIỚI THIỆU</span>
  <br/>
  <br/>
  <div class="row">
    <div class="col-md-6 aos-init aos-animate" data-aos="fade-right">
      <h3 class="text-header-2 mt-5"><span class="child-1">Tầm nhìn</span><span class="child-2">Sứ mệnh</span></h3>
      <p>   
        </br>Chúng tôi tự hào là
        đại lý PHAN KHANG HOME - NHÀ PHÂN PHỐI ĐỘC QUYỀN WATERTEC TẠI VIỆT NAM. 
        Watertec là công ty Malaysia đầu tiên dẫn đầu trong các phát minh và sản xuất van, 
        vòi & phụ kiện nhựa ở Châu Á. Vòi nhựa của Watertec được làm bằng nhựa cao cấp đã qua xử lý với bảo hành lên đến 10 năm.
         Sản lượng sản xuất hơn 6 triệu đơn vị hàng năm. Sản phẩm của Watertec hiện diện tại các nước ASEAN, Trung Đông và châu Phi.
          Watertec đang dẫn đầu thị trường van, vòi & phụ kiện nhựa ở Sri Lanka, Philippines, Việt Nam, Bangladesh, Indonesia, Ấn Độ, Jordan, Lebanon, Qatar, 
          Ả Rập Saudi, Kenya và nhiều người khác. Hiện tại, Watertec là nhà sản xuất van, vòi và phụ kiện nhựa lớn nhất trên thế giới. 
          Công ty Phan Khang Home chỉ chuyên cung cấp các trang thiết bị phòng tắm & nhà bếp đạt chất lượng cao.</p>
    </div>
    <div class="col-md-6 aos-init aos-animate" data-aos="fade-left">
      <img style="width: 100%" class="img-responsive img-fluid my-3" src="<?php echo get_template_directory_uri(); ?>/img/slider11.jpg" alt="ve phan khang home">
    </div>
  </div>
</section>

<section class="py-5">
<?php get_template_part( 'template-parts/features');;?>
</section>

<section id="client-say" class="container py-3">
  <div>
    <h3>Khách hàng đánh giá</h3>
    <p>Mọi khách hàng đến với chúng tôi đều cảm thấy hài lòng và vô cùng tin tưởng với chất lượng,dịch vụ mà chúng tôi mang lại .</p>
    <div class="card-container">
      <div class="card">
        <div class="card-body">Sản phẩm chất lượng, giá cả hợp lý .</div>
        <div class="card-body"><img src="<?php echo get_template_directory_uri();?>/img/feedback1.png" /></div>
      </div>
      <div class="card">
        <div class="card-body">Dịch vụ chăm sóc khách hàng vô cùng tốt</div>
        <div class="card-body"><img src="<?php echo get_template_directory_uri();?>/img/feedback1.png" /></div>
      </div>
    </div>
  </div>
</section>

<br/>

<?php
// get_sidebar();
get_footer();
