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
	return array_merge( $classes, array( 'page-home' ) );
} );
get_header();
?>

<?php get_template_part( 'template-parts/slider');;?>



<section class="container py-3">
  <div class="row">
    <div class="col-sm-6 col-md-6 aos-init aos-animate" data-aos="fade-right">
      <h3 class="text-header">VỀ CHÚNG TÔI</h3>
      <p>Chúng tôi tự hào là đại lý THÁI THỊNH nằm trong hệ thống phân phối sản phẩm van,vòi, và phụ kiện nhựa  Watertec tại Việt Nam.</br>
         Watertec là công ty Malaysia đầu tiên dẫn đầu trong các phát minh và sản xuất van, vòi & phụ kiện nhựa lớn nhất trên thế giới.
         Sản phẩm Watertec chất lượng được chứng minh từ chất liệu nhựa cao cấp (gần với cao su thiên nhiên) và cam kết bảo hành lên đến 
         10 năm. Sản lượng sản xuất hơn 6 triệu đơn vị hàng năm. 
        </br>Watertec đang dẫn đầu thị trường van, vòi và phụ kiện nhựa tại Sri Lanka, Philippines, Việt Nam, Bangladesh, Indonesia, Ấn Độ, Jordan, Lebanon, Qatar, Ả Rập Saudi, Kenya và nhiều nước khác trên thế giới
        </br>Công ty Phan Khang Home là một trong những đối tác quan trọng của chúng tôi trong cùng ngành
        </p>
      <a  href="#" class="btn btn-default btn-border">TÌM HIỂU THÊM</a>
    </div>
    <div class="col-sm-6 col-md-6 aos-init aos-animate" data-aos="fade-left">
      <img style="width: 100%;" class="img-responsive img-fluid my-3" src="<?php echo get_template_directory_uri(); ?>/img/slider11.jpg"   alt="ve phan khang home">
    </div>
  </div>
</section>

<section class="py-5">
<?php get_template_part( 'template-parts/features');;?>
</section>

<section class="py-15">
<?php get_template_part( 'template-parts/more-info');;?>
</section>

<br/>
<br/>

<?php
// get_sidebar();
get_footer();
