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

<!--Corporate Hero Section 2-->
<div class="co-hero-section-2 section">
    
    <!--Corporate 2 Hero Slider-->
    <div class="co-hero-slider-2 hero-slider">
        <!--Hero Slide Item-->
        <div class="co-hero-slide-item-2" style="background-image: url('<?php echo get_template_directory_uri();?>/img/corporate/hero/3.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <!--Hero Slide Content-->
                        <div class="co-hero-slide-content-2">
                            <h1>Keep Going On Success</h1>
                            <h3>Be The Big Of Your Company And World</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Hero Slide Item-->
        <div class="co-hero-slide-item-2" style="background-image: url('<?php echo get_template_directory_uri();?>/img/corporate/hero/4.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <!--Hero Slide Content-->
                        <div class="co-hero-slide-content-2">
                            <h1>Keep Going On Success</h1>
                            <h3>Be The Big Of Your Company And World</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Corporate About Section 2-->
<div class="co-about-section-2 section pt-140 pb-100">
    <div class="container">
        
        <div class="row flex-cloumn flex-lg-row-reverse">
            <!--About Image-->
            <div class="col-lg-6 col-12 mb-40">
                
                <div class="co-about-image-2">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri();?>/img/corporate/about/2.png" alt="">
                </div>
                
            </div>
            <!--About Content-->
            <div class="col-lg-6 col-12 mb-40">
                
                <div class="co-about-content-2">
                    <h1>About Pixal</h1>
                    <h4>Lorem ipsum dolor sit amet, consectet adipiscing elit. Curabitur id porttitor ipsss.</h4>
                    <p>Nam eget urna nec lectus feugiat bibendum quis at quam. Aliquam idiss congue tellus, et tempus lacus. Curabitur convallis faucibus ex, a congue lectus pretium ac. Vivamus mi quam, fermentum sed odio vitae, egetisss</p>
                    <p>aliquam efficitur erat. Quisque nec molestie massa, vel tincidunt dui. net Curabitur et urna vitae tortor lacinia laoreet.</p>
                    <a href="corporate-about.html" class="btn btn-hover-gradient">learn more</a>
                </div>
                
            </div>
        </div>
        
    </div>
</div>

<!--Corporate Service Section 2-->
<div class="co-service-section-2 section bg-gray">
    <div class="container-fluid">
        <div class="row">
           
            <!--Section Title-->
            <div class="co2-service-title col-xl-6 col-12 text-center" style="background-image: url(<?php echo get_template_directory_uri();?>/img/corporate/bg/2.jpg)">
                <div class="co-section-title-2 co-title-white text-start">
                    <h1>What We Do</h1>
                    <p>Nam eget urna nec lectus feugiat bibendum quis at quam. Aliquam id congue tellus, et tempus lacus. Curabitur convallis faucibus ex, a congue lectus pretium ac. Vivamus mi quam,</p>
                </div>
            </div>
            <!--Service Wrapper-->
            <div class="co-service-wrapper-2 col-xl-6 col-12">
                <div class="row">
                    <!--Single Service-->
                    <div class="co-single-service-2 col-md-6 col-12">
                        <span class="icon"><i class="icon-anchor"></i></span>
                        <div class="content fix">
                            <h3>Easy to customize</h3>
                            <p>Lorem ipsum dolor sit amet, lorems consectetur ish  dipisicing elit, sed do eiusmod tempor lorem</p>
                        </div>
                    </div>

                    <!--Single Service-->
                    <div class="co-single-service-2 col-md-6 col-12">
                        <div class="icon"><i class="icon-profile-male"></i></div>
                        <div class="content fix">
                            <h3>Great Support</h3>
                            <p>Lorem ipsum dolor sit amet, lorems consectetur ish  dipisicing elit, sed do eiusmod tempor lorem</p>
                        </div>
                    </div>

                    <!--Single Service-->
                    <div class="co-single-service-2 col-md-6 col-12">
                        <span class="icon"><i class="icon-tools"></i></span>
                        <div class="content fix">
                            <h3>Highly Customizable</h3>
                            <p>Lorem ipsum dolor sit amet, lorems consectetur ish  dipisicing elit, sed do eiusmod tempor lorem</p>
                        </div>
                    </div>

                    <!--Single Service-->
                    <div class="co-single-service-2 col-md-6 col-12">
                        <span class="icon"><i class="icon-laptop"></i></span>
                        <div class="content fix">
                            <h3>Fully Responsive</h3>
                            <p>Lorem ipsum dolor sit amet, lorems consectetur ish  dipisicing elit, sed do eiusmod tempor lorem</p>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>

<!--Corporate Portfolio Section 1-->
<div class="co-portfolio-section-1 section pt-130 pb-110">
    <div class="container">
        <div class="row">
           
            <!--Section Title-->
            <div class="col-xs-12 text-center mb-70">
                <div class="co-section-title-2">
                    <h1>Our Latest Work</h1>
                    <p>Nam eget urna nec lectus feugiat bibendum quis at quam. Aliquam id congue tellus, et tempus lacus. Curabitur convallis faucibus ex, a congue.</p>
                </div>
                
            </div>
            
        </div>
        <div class="row">
           
            <div class="col-12 text-center mb-75">
                <div class="co-isotop-filter-1 isotop-filter">
                    <button class="active" data-filter="*">All Work</button>
                    <button data-filter=".branding">Branding</button>
                    <button data-filter=".mobile-app">Mobile App</button>
                    <button data-filter=".web">Web</button>
                    <button data-filter=".photography">Photography</button>
                    <button data-filter=".illustration">Illustration</button>
                </div>
            </div>
            
        </div>
            
        <div class="co-isotop-grid-1 isotop-grid row">

            <div class="co-isotop-item-1 isotop-item branding web col-lg-4 col-md-6 col-12 mb-30">
                <a href="corporate-portfolio-details.html">
                    <img src="<?php echo get_template_directory_uri();?>/img/corporate/portfolio/1.jpg" alt="">
                    <span class="content">
                        <i class="icon-focus"></i>
                        <span class="title">Branding</span>
                    </span>
                </a>
            </div>

            <div class="co-isotop-item-1 isotop-item mobile-app photography col-lg-4 col-md-6 col-12 mb-30">
                <a href="corporate-portfolio-details.html">
                    <img src="<?php echo get_template_directory_uri();?>/img/corporate/portfolio/2.jpg" alt="">
                    <span class="content">
                        <i class="icon-focus"></i>
                        <span class="title">Mobile App</span>
                    </span>
                </a>
            </div>

            <div class="co-isotop-item-1 isotop-item illustration web col-lg-4 col-md-6 col-12 mb-30">
                <a href="corporate-portfolio-details.html">
                    <img src="<?php echo get_template_directory_uri();?>/img/corporate/portfolio/3.jpg" alt="">
                    <span class="content">
                        <i class="icon-focus"></i>
                        <span class="title">Web Design</span>
                    </span>
                </a>
            </div>

            <div class="co-isotop-item-1 isotop-item photography branding col-lg-4 col-md-6 col-12 mb-30">
                <a href="corporate-portfolio-details.html">
                    <img src="<?php echo get_template_directory_uri();?>/img/corporate/portfolio/4.jpg" alt="">
                    <span class="content">
                        <i class="icon-focus"></i>
                        <span class="title">Photography</span>
                    </span>
                </a>
            </div>

            <div class="co-isotop-item-1 isotop-item illustration mobile-app col-lg-4 col-md-6 col-12 mb-30">
                <a href="corporate-portfolio-details.html">
                    <img src="<?php echo get_template_directory_uri();?>/img/corporate/portfolio/5.jpg" alt="">
                    <span class="content">
                        <i class="icon-focus"></i>
                        <span class="title">Art Illustration</span>
                    </span>
                </a>
            </div>

            <div class="co-isotop-item-1 isotop-item branding web col-lg-4 col-md-6 col-12 mb-30">
                <a href="corporate-portfolio-details.html">
                    <img src="<?php echo get_template_directory_uri();?>/img/corporate/portfolio/6.jpg" alt="">
                    <span class="content">
                        <i class="icon-focus"></i>
                        <span class="title">Web Design</span>
                    </span>
                </a>
            </div>

        </div>
    </div>
</div>

<!--Corporate FunFact Section 1-->
<div class="co-funfact-section-1 section pt-140 pb-100" style="background-image: url(<?php echo get_template_directory_uri();?>/img/corporate/bg/3.jpg);">
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

<?php
// get_sidebar();
get_footer();
