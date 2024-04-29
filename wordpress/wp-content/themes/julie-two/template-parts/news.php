<?php 
   $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
   $args = array(
     'post_type' => 'post',
     'orderby' => array( 'date' => 'DESC' ),
     'paged' => $paged
   );
   $the_query = new WP_Query( $args );
?>

<div class="row">
    <div class="col-sm-12 col-lg-12 col-md-12">
        <h2 class="text-header" data-aos="fade-right">Tin Tức</h2>
    </div>
</div>
<div class="features-box d-flex">
  <?php if ( $the_query->have_posts() ){
          while($the_query->have_posts()){
            $the_query->the_post();?>
  <div class="feature-item bg-danger" data-aos="flip-up" data-aos-delay="50">
    <?php echo julie_two_post_thumbnail()?>
    <a href="<?php the_permalink(); ?>" class="item"><?php echo the_title( '<h4 class="">' , '</h4>' );?></a></span>
    
  </div>
  <?php }} ?>
</div>
    <!--<div class="features-box d-flex">
    <?php 
      //if ( $the_query->have_posts() ){
        //while($the_query->have_posts()){
          //$the_query->the_post();?>

          <div class="card" style="width: 18rem; border:none;">
  <img class="card-img-top" alt="..." src="<?php
            //julie_two_post_thumbnail();
          ?>" >
  <div class="card-body">
    <a class="card-text" href=<?php //đường link đến trang chi tiết của tin tức đó
                    //the_permalink(); ?>>
                  <?php
                  //Lấy và hiện tên tiêu đề tin tức 
                    //the_title( '<h4 class="">' , '</h4>' ); }}?></a>
  </div>-->
</div>
      
      </div>
    </div>
</div>
  
    
  </div>
    <!--
    <//?php if ( $the_query->have_posts() ) {
            while ( $the_query->have_posts() ) {?>
    <div class="feature-item" data-aos="flip-up" data-aos-delay="50" style="background-color: #ffffff;">
        <div><a href="" ><img src="<?php  // The Loop
              //$the_query->the_post();
              //if(has_post_thumbnail()):
                //julie_two_post_thumbnail();
              //else: 
                //?>" /></a></div>
          <div class="post-thumbnail">
            <img src="" alt="SITE LOGO" />
          </div>
          <?//php endif;?>
          <span><a href="" class="item"><//?php the_title( '<h4 class="entry-title">' , '</h4>' ); ?></a></span>
          <//?php //}}/*?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>-->

  </div>
