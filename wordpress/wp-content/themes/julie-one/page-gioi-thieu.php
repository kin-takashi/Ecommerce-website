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
 * @package julie-one
 */

get_header();
?>

<!--Corporate Page Banner Section-->
<div class="co-page-banner-section section" data-page-title="about us" style="background-image: url(<?php echo get_template_directory_uri();?>/img/page-banner-bg.jpg)">
    
    <div class="container-fluid">
        <div class="row">
            
            <div class="co-page-banner text-center col-xs-12">
                <h1>About us</h1>
            </div>
            
        </div>
    </div>
    
</div>

<!--Corporate About Section 1-->
<div class="co-about-section-1 section pt-140 pb-100">
    <div class="container">
        
        <div class="row flex-column flex-lg-row-reverse">
            <!--About Image-->
            <div class="col-lg-6 col-12 mb-40">
                
                <div class="co-about-image-1">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri();?>/img/corporate/about/1.jpg" alt="">
                </div>
                
            </div>
            <!--About Content-->
            <div class="col-lg-6 col-12 mb-40">
                
                <div class="co-about-content-1">
                    <h1>About Pixal</h1>
                    <p>Nam eget urna nec lectus feugiat bibendum quis at quam. Aliquam idiss congue tellus, et tempus lacus. Curabitur convallis faucibus ex, a congue lectus pretium ac. Vivamus mi quam, fermentum sed odio vitae, egetisss</p>
                    <p>aliquam efficitur erat. Quisque nec molestie massa, vel tincidunt dui. net Curabitur et urna vitae tortor lacinia laoreet.</p>
                    <a href="corporate-about.html" class="btn btn-hover-gradient">learn more</a>
                </div>
                
            </div>
        </div>
        
    </div>
</div>

<!--Creative 3 Service Section-->
<div class="co-service-section-3 section">
    <div class="container-fluid">
        <div class="row">
            
            <!--Single Service-->
            <div class="co-single-service-3">
                <span class="icon"><i class="icon-megaphone"></i></span>
                <div class="content fix">
                    <h3>Great Support</h3>
                    <p>Nam eget urna nec lectus f bibendum quis at quam. Aliquam idiss congue tellus, et tempus lacus.</p>
                </div>
            </div>
            
            <!--Single Service-->
            <div class="co-single-service-3">
                <span class="icon"><i class="icon-tools"></i></span>
                <div class="content fix">
                    <h3>Awesome Design</h3>
                    <p>Nam eget urna nec lectus f bibendum quis at quam. Aliquam idiss congue tellus, et tempus lacus.</p>
                </div>
            </div>
            
            <!--Single Service-->
            <div class="co-single-service-3">
                <span class="icon"><i class="icon-circle-compass"></i></span>
                <div class="content fix">
                    <h3>Pixal Perfect</h3>
                    <p>Nam eget urna nec lectus f bibendum quis at quam. Aliquam idiss congue tellus, et tempus lacus.</p>
                </div>
            </div>
            
            <!--Single Service-->
            <div class="co-single-service-3">
                <span class="icon"><i class="icon-tools-2"></i></span>
                <div class="content fix">
                    <h3>Highly Customizable</h3>
                    <p>Nam eget urna nec lectus f bibendum quis at quam. Aliquam idiss congue tellus, et tempus lacus.</p>
                </div>
            </div>
            
            <!--Single Service-->
            <div class="co-single-service-3">
                <span class="icon"><i class="icon-mobile"></i></span>
                <div class="content fix">
                    <h3>Fully Responsive</h3>
                    <p>Nam eget urna nec lectus f bibendum quis at quam. Aliquam idiss congue tellus, et tempus lacus.</p>
                </div>
            </div>
                
        </div>
    </div>
</div>

<!--Corporate Team Section 2-->
<div class="co-team-section-2 section pt-140 pb-110">
    <div class="container">
        
        <!--Section Title-->
        <div class="row">
            <div class="col-12">
                <div class="co-section-title-3 text-center mb-110">
                    <h4>Our Team Member</h4>
                    <p>Nam eget urna nec lectus feugiat bibendum quis at quam. Aliquam id conguetellus, et tempus lacus. Curabitur convallis faucibus ex, a congue lectus pretium ac.</p>
                </div>
            </div>
        </div>
        
        <div class="row">    
            <!--Single Team-->
            <div class="col-lg-4 col-md-6 col-12 mb-30">
                <div class="co-single-team-2 text-center">
                    <img src="<?php echo get_template_directory_uri();?>/img/corporate/team/4.jpg" alt="">
                    <div class="content">
                        <h4>Harriso Williams</h4>
                        <span>Lover Of UI/UX</span>
                        <div class="social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!--Single Team-->
            <div class="col-lg-4 col-md-6 col-12 mb-30">
                <div class="co-single-team-2 text-center">
                    <img src="<?php echo get_template_directory_uri();?>/img/corporate/team/5.jpg" alt="">
                    <div class="content">
                        <h4>Sathy Bhuiyan</h4>
                        <span>Lover Of UI/UX</span>
                        <div class="social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!--Single Team-->
            <div class="col-lg-4 col-md-6 col-12 mb-30">
                <div class="co-single-team-2 text-center">
                    <img src="<?php echo get_template_directory_uri();?>/img/corporate/team/6.jpg" alt="">
                    <div class="content">
                        <h4>Harriso Williams</h4>
                        <span>Lover Of UI/UX</span>
                        <div class="social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Corporate 3 FunFact Section-->
<div class="co3-funfact-section section pt-140 pb-100">
    <div class="container">
        
        <div class="row">
            
            <div class="co-single-fact-1 col-md-3 col-6 text-center mb-40">
                <i class="icon-wine"></i>
                <h1 class="counter">450</h1>
                <p>cups of coffee</p>
            </div>
            
            <div class="co-single-fact-1 col-md-3 col-6 text-center mb-40">
                <i class="icon-profile-female"></i>
                <h1 class="counter">985</h1>
                <p>Happy Client</p>
            </div>
            
            <div class="co-single-fact-1 col-md-3 col-6 text-center mb-40">
                <i class="icon-heart"></i>
                <h1 class="counter">850</h1>
                <p>Project completed</p>
            </div>
            
            <div class="co-single-fact-1 col-md-3 col-6 text-center mb-40">
                <i class="icon-trophy"></i>
                <h1 class="counter">250</h1>
                <p>Win Awards</p>
            </div>
            
        </div>
        
    </div>
</div>

<!--Corporate 3 Testimonial Section-->
<div class="co-testimonial-section-2 section pb-140">
    <div class="container">
        
        <div class="row">
            
            <div class="col-12">
                
                <div class="co-testimonial-wrapper-2 pt-140 pb-110">
                    
                    <div class="row">
                       
                        <!--Section Title-->
                        <div class="co-section-title-3 col-12 text-center mb-80">
                            <h4>Our Client Say</h4>
                            <p>Nam eget urna nec lectus feugiat bibendum quis at quam. Aliquam id conguetellus, et tempus lacus. Curabitur convallis faucibus ex, a congue lectus pretium ac.</p>
                        </div>
                        
                        <div class="co3-testimonial-slider col-lg-10 col-12 mx-auto">
                            
                            <div class="col-md-6 col-12">
                                <div class="co-single-testimonial-2 text-center">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sem ligula, sagittis eu vehicula vitae,</p>
                                    <div class="co-testimonial-author-info-2">
                                        <img src="<?php echo get_template_directory_uri();?>/img/corporate/testimonial/1.jpg" alt="">
                                        <h5>Sathy Bhuiyan</h5>
                                        <span>CEO at love</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6 col-12">
                                <div class="co-single-testimonial-2 text-center">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sem ligula, sagittis eu vehicula vitae,</p>
                                    <div class="co-testimonial-author-info-2">
                                        <img src="<?php echo get_template_directory_uri();?>/img/corporate/testimonial/2.jpg" alt="">
                                        <h5>Sathy Noor</h5>
                                        <span>CEO at love</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6 col-12">
                                <div class="co-single-testimonial-2 text-center">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sem ligula, sagittis eu vehicula vitae,</p>
                                    <div class="co-testimonial-author-info-2">
                                        <img src="<?php echo get_template_directory_uri();?>/img/corporate/testimonial/2.jpg" alt="">
                                        <h5>Sathy Noor</h5>
                                        <span>CEO at love</span>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        
                        
                    </div>
                    
                </div>
                
            </div>
            
        </div>
        
    </div>
</div>

<!--Corporate About Section 4-->
<div class="co-about-section-4 section pb-20">
    <div class="container">
        
        <div class="row">
            
            <div class="co-about-image-4 col-lg-6 col-12 float-right mb-30">
                <img src="<?php echo get_template_directory_uri();?>/img/corporate/about/mission.png" alt="">
            </div>
            
            <div class="co-about-content-4 col-lg-6 col-12 mb-30">
                <h4>Business solution</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam euimalesuada dignissim sagittis, urna purus convallis felis, egestas aliquam velit se turpis. Etiam eget odio posuere, faucibus lectus quis, bibendum nisi. Nullam  metus sed sagittis. Etiam eu massa lectus. Integer varius ullamcorper risus. Donec rutrum lorem ac pretium mattis its. Donec tincidunt ornare mollis. Nam at lectus leo. Nullam porta porta its life congue. Sed vel semper neque Quisque sollicitudin </p>
                <a href="corporate-about.html" class="btn btn-hover-gradient">learn more</a>
            </div>
            
        </div>
        
    </div>
</div>

<?php get_template_part('template-parts/corporate-client') ?>

<?php
// get_sidebar();
get_footer();
