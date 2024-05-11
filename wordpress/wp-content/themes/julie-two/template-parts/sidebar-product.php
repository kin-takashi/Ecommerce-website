<a href="/san-pham/"><h5 class="sidebar-title">Tất cả</h5></a>

<?php 

$args = array(
  'hide_empty' => 0,
  'taxonomy' => 'product_category',
  'orderby' => 'name',
  'order'   => 'ASC'
);
$productCategories = get_categories($args);
?>

<ul class="product-category-list">
<?php foreach($productCategories as $category): ?>
  <li>
    <a href="<?php echo get_category_link( $category->term_id ) ?>">
        <?php echo $category->name; ?>
        &nbsp;(<?php echo $category->count; ?>)
    </a>
  </li>
<?php endforeach; ?>
</ul>