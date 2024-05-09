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
add_filter('body_class', function ($classes) {
  return array_merge($classes, array ('page-home'));
});
get_header();
?>

<?php get_template_part('template-parts/slider');
; ?>



<section class="container text-center mt-3">

  <div class="text-center">
    <h3 class="border-top border-bottom border-2" style="width: 200px;">VỀ CHÚNG TÔI</h3>
  </div>

  <div class="row d-flex justify-content-center">
    <div class="d-flex col-3 mx-2 border">
      Dẫn đầu trong các phát minh và sản xuất van, vòi & phụ kiện nhựa lớn nhất trên thế giới
    </div>
    <div class="d-flex col-3 mx-2  border">
      Chất lượng được chứng minh từ chất liệu nhựa cao cấp (gần với cao su thiên nhiên) và cam kết bảo hành lên đến 10
      năm
    </div>
    <div class="d-flex col-3 border">
      Sản xuất hơn 6 triệu đơn vị hàng năm
    </div>
  </div>
</section>

<section class="py-5">
  <?php get_template_part('template-parts/features');
  ; ?>
</section>

<section class="py-15">
  <?php get_template_part('template-parts/more-info');
  ; ?>
</section>

<br />
<br />

<?php
// get_sidebar();
get_footer();
