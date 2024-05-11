<?php 
   $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
   $args = array(
     'post_type' => 'post',
     'paged' => $paged,
     'posts_per_page' => 5, // Chỉ lấy 5 bài viết
     'orderby' => 'date', // Sắp xếp theo ngày
     'order' => 'DESC' // Sắp xếp giảm dần (mới nhất đầu tiên)
   );
   $the_query = new WP_Query( $args );
?>

<div class="row">
    <div class="col-sm-12 col-lg-12 col-md-12">
        <h2 class="text-header" data-aos="fade-right">Tin Tức</h2>
    </div>
</div>
<div class="features-box d-flex" >
  <?php 
  if ($the_query->have_posts()) {
    while ($the_query->have_posts()) {
      $the_query->the_post(); 
      
      ?>
      <?php if(has_post_thumbnail()):?>
      <div class="feature-item image-wrapper" data-aos="flip-up" data-aos-delay="50" style="background-color:#ffffff">
        <?php echo julie_two_post_thumbnail() ?>
        <a href="<?php the_permalink(); ?>" class="item"><?php echo the_title('<h4 class="">', '</h4>'); ?></a>
      </div>
      <?php 
      else: ?>
        <div class="feature-item image-wrapper" data-aos="flip-up" data-aos-delay="50" style="background-color:#ffffff">
          <img src="" alt="SITE LOGO" />
          <a href="<?php the_permalink(); ?>" class="item"><?php echo the_title('<h4 class="">', '</h4>'); ?></a>
        </div>
        <?php endif;
    }
  } ?>
  
</div>
<div class="row ">
    <div class="col-sm-12 col-lg-12 col-md-12 btn-gioithieu">
      <a href="/tin-tuc" class="btn btn-default btn-border "><b>TÌM HIỂU THÊM</b></a>
    </div>
  </div>

      

  
