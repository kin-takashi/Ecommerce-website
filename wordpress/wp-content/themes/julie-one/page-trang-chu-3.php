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

get_header('3');
?>

<!--Corporate About Section 3-->
<div class="co-about-section-3 section pt-140 pb-100">
    <div class="container">
        
        <div class="row flex-column flex-lg-row-reverse">
            <!--About Image-->
            <div class="col-lg-6 col-12 float-right mb-40">
                
                <div class="co-about-image-3">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri();?>/img/corporate/about/3.png" alt="">
                </div>
                
            </div>
            <!--About Content-->
            <div class="col-lg-6 col-12 mb-40">
                
                <div class="co-about-content-3">
                    <h4>Who We Are</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenasss at im sit ameelit rutrum vestibulum semper nec elit. Praesent velsss  sagittis nibh, ins m massa. Interdus malesuada fames ac ante ipsums primis in faucibus. its is Morbi lacus enim, lorem ipsum dolor sit.</p>
                    <a href="https://www.youtube.com/watch?v=d67nLyjN4hQ" class="video-popup"><i class="ion-ios-play-outline"></i> <span>See Our Video</span></a>
                </div>
                
            </div>
        </div>
        
    </div>
</div>

<!--Corporate Service Section 3-->
<div class="co-service-section-3 section">
    <div class="container-fluid">
        <div class="row">
            
            <!--Single Service-->
            <div class="col-12 co-single-service-3">
                <span class="icon"><i class="icon-megaphone"></i></span>
                <div class="content fix">
                    <h3>Great Support</h3>
                    <p>Nam eget urna nec lectus f bibendum quis at quam. Aliquam idiss congue tellus, et tempus lacus.</p>
                </div>
            </div>
            
            <!--Single Service-->
            <div class="col-12 co-single-service-3">
                <span class="icon"><i class="icon-tools"></i></span>
                <div class="content fix">
                    <h3>Awesome Design</h3>
                    <p>Nam eget urna nec lectus f bibendum quis at quam. Aliquam idiss congue tellus, et tempus lacus.</p>
                </div>
            </div>
            
            <!--Single Service-->
            <div class="col-12 co-single-service-3">
                <span class="icon"><i class="icon-circle-compass"></i></span>
                <div class="content fix">
                    <h3>Pixal Perfect</h3>
                    <p>Nam eget urna nec lectus f bibendum quis at quam. Aliquam idiss congue tellus, et tempus lacus.</p>
                </div>
            </div>
            
            <!--Single Service-->
            <div class="col-12 co-single-service-3">
                <span class="icon"><i class="icon-tools-2"></i></span>
                <div class="content fix">
                    <h3>Highly Customizable</h3>
                    <p>Nam eget urna nec lectus f bibendum quis at quam. Aliquam idiss congue tellus, et tempus lacus.</p>
                </div>
            </div>
            
            <!--Single Service-->
            <div class="col-12 co-single-service-3">
                <span class="icon"><i class="icon-mobile"></i></span>
                <div class="content fix">
                    <h3>Fully Responsive</h3>
                    <p>Nam eget urna nec lectus f bibendum quis at quam. Aliquam idiss congue tellus, et tempus lacus.</p>
                </div>
            </div>
                
        </div>
    </div>
</div>

<!--Corporate Portfolio Section 2-->
<div class="co-portfolio-section-2 section pt-140 pb-140">
    <div class="container">
        <div class="row justify-content-between">
            <!--Section Title-->
            <div class="col-auto mb-90">
                <div class="co-section-title-3">
                    <h4>Our Latest Work</h4>
                </div>
            </div>
            <div class="col-auto">
                <div class="co-isotop-filter-2 isotop-filter">
                    <button class="active" data-filter="*">All Work</button>
                    <button data-filter=".branding">Branding</button>
                    <button data-filter=".mobile-app">Mobile App</button>
                    <button data-filter=".web">Web</button>
                    <button data-filter=".photography">Photography</button>
                    <button data-filter=".illustration">Illustration</button>
                </div>
            </div>
        </div>
        
            
        <div class="row">
            
            <div class="col-12">
                <div class="co-isotop-grid-2 isotop-grid">

                    <div class="co-isotop-item-2 isotop-item branding illustration web col-md-6 col-12">
                        <a href="corporate-portfolio-details.html">
                            <img src="<?php echo get_template_directory_uri();?>/img/corporate/portfolio/7.jpg" alt="">
                            <span class="title">Cap Illustration Design</span>
                            <span class="category">Branding</span>
                        </a>
                    </div>

                    <div class="co-isotop-item-2 isotop-item mobile-app photography col-md-6 col-12">
                        <a href="corporate-portfolio-details.html">
                            <img src="<?php echo get_template_directory_uri();?>/img/corporate/portfolio/8.jpg" alt="">
                            <span class="title">Cap Illustration Design</span>
                            <span class="category">mobile app</span>
                        </a>
                    </div>

                    <div class="co-isotop-item-2 isotop-item mobile-app illustration web col-md-6 col-12">
                        <a href="corporate-portfolio-details.html">
                            <img src="<?php echo get_template_directory_uri();?>/img/corporate/portfolio/9.jpg" alt="">
                            <span class="title">Cap Illustration Design</span>
                            <span class="category">illustration</span>
                        </a>
                    </div>

                    <div class="co-isotop-item-2 isotop-item photography branding col-md-6 col-12">
                        <a href="corporate-portfolio-details.html">
                            <img src="<?php echo get_template_directory_uri();?>/img/corporate/portfolio/10.jpg" alt="">
                            <span class="title">Cap Illustration Design</span>
                            <span class="category">photography</span>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!--Corporate Skill Section-->
<div class="co3-skill-section section">
    <div class="container-fluid">
        <div class="row">
           
            <!--Section Title-->
            <div class="co3-skill-title col-lg-6 col-xs-12 text-center" style="background-image: url(<?php echo get_template_directory_uri();?>/img/corporate/bg/4.jpg)">
                <div class="co-section-title-3 title-white text-left">
                    <h4>Our Skill</h4>
                    <p>Nam eget urna nec lectus feugiat bibendum quis at quam. Aliquam id congue tellus, et tempus lacus. Curabitur convallis faucibus ex, a congue lectus pretium ac. Vivamus mi quam,</p>
                </div>
            </div>
            <!--Skill Wrapper-->
            <div class="col-xl-6 offset-xl-6 col-12">
                <div class="co3-skill-wrapper">

                    <h5 class="co3-skill-name">Web Design</h5>
                    <div class="co3-skill-bar"><div class="skill-inner" style="width: 90%"><span>90%</span></div></div>

                    <h5 class="co3-skill-name">Disital Marketing</h5>
                    <div class="co3-skill-bar"><div class="skill-inner" style="width: 80%"><span>80%</span></div></div>

                    <h5 class="co3-skill-name">App Design</h5>
                    <div class="co3-skill-bar"><div class="skill-inner" style="width: 60%"><span>60%</span></div></div>

                    <h5 class="co3-skill-name">Web Development</h5>
                    <div class="co3-skill-bar"><div class="skill-inner" style="width: 70%"><span>70%</span></div></div>

                </div>
            </div>
            
        </div>
    </div>
</div>

<!--Corporate Progress Section-->
<div class="co-process-section-3 section pt-140 pb-110">
    <div class="container">
        
        <div class="row">
            <!--Section Title-->
            <div class="co-section-title-3 col-12 text-center mb-80">
                <h4>Our Work Process</h4>
                <p>Nam eget urna nec lectus feugiat bibendum quis at quam. Aliquam id conguetellus, et tempus lacus. Curabitur convallis faucibus ex, a congue lectus pretium ac.</p>
            </div>
        </div>
        
        <div class="row">
           
            <div class="col-lg-4 col-md-6 col-12 mb-30">
                <div class="co-single-process-3 text-center">
                    <span class="number">1</span>
                    <h4 class="title">Idea <i class="icon-lightbulb"></i></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur ish  dipisicing elit, sed do eiusmod lorem.</p>
                </div>
            </div>
           
            <div class="col-lg-4 col-md-6 col-12 mb-30">
                <div class="co-single-process-3 text-center">
                    <span class="number">2</span>
                    <h4 class="title">Design <i class="icon-tools"></i></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur ish  dipisicing elit, sed do eiusmod lorem.</p>
                </div>
            </div>
           
            <div class="col-lg-4 col-md-6 col-12 mb-30">
                <div class="co-single-process-3 text-center">
                    <span class="number">3</span>
                    <h4 class="title">Development <i class="icon-tools-2"></i></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur ish  dipisicing elit, sed do eiusmod lorem.</p>
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

<!--Corporate Testimonial Section 2-->
<div class="co-testimonial-section-2 section pb-140">
    <div class="container">
        
        <div class="row">
            
            <div class="col-12">
                
                <div class="co-testimonial-wrapper-2 pt-140 pb-140">
                    
                    <div class="row">
                       
                        <!--Section Title-->
                        <div class="co-section-title-3 col-xs-12 text-center mb-80">
                            <h4>Our Client Say</h4>
                            <p>Nam eget urna nec lectus feugiat bibendum quis at quam. Aliquam id conguetellus, et tempus lacus. Curabitur convallis faucibus ex, a congue lectus pretium ac.</p>
                        </div>
                        <div class="col-lg-10 col-12 mx-auto">
                            <div class="co3-testimonial-slider">
                                <div class="co-single-testimonial-2 text-center">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sem ligula, sagittis eu vehicula vitae,</p>
                                    <div class="co-testimonial-author-info-2">
                                        <img src="<?php echo get_template_directory_uri();?>/img/corporate/testimonial/1.jpg" alt="">
                                        <h5>Sathy Bhuiyan</h5>
                                        <span>CEO at love</span>
                                    </div>
                                </div>
                                
                                <div class="co-single-testimonial-2 text-center">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sem ligula, sagittis eu vehicula vitae,</p>
                                    <div class="co-testimonial-author-info-2">
                                        <img src="<?php echo get_template_directory_uri();?>/img/corporate/testimonial/2.jpg" alt="">
                                        <h5>Sathy Noor</h5>
                                        <span>CEO at love</span>
                                    </div>
                                </div>
                                
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

<!--Corporate 3 Testimonial Section-->
<div class="co3-feature-project-section section bg-gray pt-130 pb-90">
    <div class="container">
        
        <div class="row flex-column flex-lg-row-reverse">
            
            <div class="co3-feature-project-image col-lg-6 col-12">
                <img class="img-fluid" src="<?php echo get_template_directory_uri();?>/img/corporate/feature-project.png" alt="">
            </div>
            
            <div class="co3-feature-project-content col-lg-6 col-12 mb-50">
                <h4>Our Feauters Project</h4>
                <p>Nam eget urna nec lectus feugiat bibendum quis at quam. Aliquam idiss congue tellus, et tempus lacus. Curabitur convallis faucibus ex, a congue lectus pretium ac. Vivamus mi quam, fermentum sed odio vitae,</p>
                <p>Aliquam efficitur erat. Quisque nec molestie massa, vel tincidunt dui. net Curabitur et urna vitae tortor lacinia laoreetNam eget urna nec lectus feugiat bibendum quis at quam.</p>
            </div>
            
        </div>
        
    </div>
</div>

<!--Corporate CTA Section-->
<div class="co-cta-section-1 section bg-gradient pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-xl-10 col-12">
                <!--CTA Wrapper-->
                <div class="co-cta-wrapper-1 fix">
                    <h3>If You Like this great Work ?? for your site...</h3>
                    <a href="#" class="btn btn-white">Purchase Now</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Corporate 3 Contact Section-->
<div class="co3-contact-info-section section pt-140 pb-110">
    <div class="container">
        <div class="row">
            
            <div class="col-lg-4 col-md-6 col-12 mb-30">
                
                <div class="co3-contact-info text-center">
                    
                    <div class="co3-contact-info-inner">
                        <span class="icon"><i class="ion-android-call"></i></span>
                        <div class="details fix">
                            <a href="#">+012 345 678 102</a>
                            <a href="#">+012 345 678 102</a>
                        </div>
                    </div>
                    
                </div>
                
            </div>
            
            <div class="col-lg-4 col-md-6 col-12 mb-30">
                
                <div class="co3-contact-info text-center">
                    
                    <div class="co3-contact-info-inner">
                        <span class="icon"><i class="ion-android-globe"></i></span>
                        <div class="details fix">
                            <a href="#">urname@email.com</a>
                            <a href="#">urwebsitenaem.com</a>
                        </div>
                    </div>
                    
                </div>
                
            </div>
            
            <div class="col-lg-4 col-md-6 col-12 mb-30">
                
                <div class="co3-contact-info text-center">
                    
                    <div class="co3-contact-info-inner">
                        <span class="icon"><i class="ion-ios-location"></i></span>
                        <div class="details fix">
                            <p>ur address goes here,<br>street,Crossroad123.</p>
                        </div>
                    </div>
                    
                </div>
                
            </div>
            
        </div>
    </div>
</div>

<?php
// get_sidebar();
get_footer();
