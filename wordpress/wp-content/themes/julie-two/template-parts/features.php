<?php 
$wpdb;
$args ="
    SELECT t1.*, t2.*,t3.*
    FROM {$wpdb->prefix}terms AS t1
    INNER JOIN {$wpdb->prefix}term_taxonomy AS t2 ON t1.term_id = t2.term_id
    INNER JOIN {$wpdb->prefix}termmeta AS t3 ON t1.term_id = t3.term_id
    WHERE t2.taxonomy = 'product_category'
    ORDER BY t1.name ASC
    ";
/*$args = array(
  'hide_empty' => 0,
  'taxonomy' => 'product_category',
  'orderby' => 'name',
  'order'   => 'ASC'
);*/
$productCategories = $wpdb->get_results($args);
?>
<div class="row">
    <div class="col-sm-12 col-lg-12 col-md-12">
        <h2 class="text-header" data-aos="fade-right">SẢN PHẨM</h2>
    </div>
  </div>
<div class="features-box d-flex">
  <?php foreach($productCategories as $product){?>
  <div class="feature-item" data-aos="flip-up" data-aos-delay="50" style="background-color: #ffffff;">
    <div><a href="<?php echo esc_url(get_category_link($product->term_id));?>" ><img src="<?php echo esc_url($product->meta_value);?>" /></a></div>
    <span><a href="<?php echo esc_url(get_category_link($product->term_id));?>" class="item"><?php echo $product->name;?></a></span>
  </div>
  <?php } ?>
</div>
