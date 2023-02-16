<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package julie-one
 */

?>

<!--Corporate Client Section 1-->
<div class="co-client-section-1 section bg-dark-light pt-100 pb-100">
    <div class="container">
        <div class="row">
            
            <div class="col-12">
                <!--Client Slider-->
                <div class="co-client-slider-1 text-center">
                    <div class="single-client"><img src="<?php echo get_template_directory_uri();?>/img/corporate/client/1.png" alt=""></div>
                    <div class="single-client"><img src="<?php echo get_template_directory_uri();?>/img/corporate/client/2.png" alt=""></div>
                    <div class="single-client"><img src="<?php echo get_template_directory_uri();?>/img/corporate/client/3.png" alt=""></div>
                    <div class="single-client"><img src="<?php echo get_template_directory_uri();?>/img/corporate/client/4.png" alt=""></div>
                    <div class="single-client"><img src="<?php echo get_template_directory_uri();?>/img/corporate/client/3.png" alt=""></div>
                </div>
            </div>
            
        </div>
    </div>
</div>

<!--Corporate Footer Section 1-->
<div class="co-footer-section-1 section bg-dark-light pt-120 pb-80">
    
    <div class="container">
        <div class="row">

            <div class="col-lg-4 col-md-6 col-12 mb-40">
                <div class="co-footer-widget-1">
                    <img src="<?php echo get_template_directory_uri();?>/img/logo/footer-logo-light.png" alt="">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. its is Nulla tempor, nisl sed bibendum pretium, diam nisi mattisss lectus, eu varius lorem mauris posuere dui.</p>
                    <div id="mc_embed_signup" class="co-footer-newsletter-1">
                        <form action="https://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                            <div id="mc_embed_signup_scroll" class="mc-form">
                                <div class="mc-field-group">
                                    <input type="email" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Your Email Address">
                                </div>
                                <div id="mce-responses" class="clear">
                                    <div class="response" id="mce-error-response" style="display:none"></div>
                                    <div class="response" id="mce-success-response" style="display:none"></div>
                                </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value=""></div>
                                <div class="clear"><button type="submit" name="subscribe" id="mc-embedded-subscribe" class="submit"><i class="ion-forward"></i></button></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12 mb-40">
                <div class="co-footer-widget-1 widget-contact">
                    <h4 class="title">Contact Us</h4>
                    <ul>
                        <li><span>Address :</span> House No 08, Road No 08 Dia Bari, Dhaka, Bangladesh</li>
                        <li><span>Email :</span> <a href="#">demo@example.com</a> <a href="#">demo@example.com</a></li>
                        <li><span>Phone :</span> <a href="#">(+012 345 6789)</a> <a href="#">(+012 345 6789)</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12 mb-40">
                <div class="co-footer-widget-1">
                    <h4 class="title">Follow Us</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. its is Nulla tempor, nisl sed bibendum pretium.</p>
                    <div class="co-footer-social-1 fix">
                        <a href="#"><i class="icon-facebook"></i></a>
                        <a href="#"><i class="icon-twitter"></i></a>
                        <a href="#"><i class="icon-googleplus"></i></a>
                        <a href="#"><i class="icon-dribbble"></i></a>
                        <a href="#"><i class="icon-linkedin"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    
</div>
    
<div class="co-footer-bottom-1 section bg-dark">
    <div class="container">
        <div class="row">

            <div class="col-12">
                <div class="co-copyright-1 text-center">
                    <p>Copyright © 2022<a href="https://hasthemes.com/">Hasthemes</a>. All Rights Reserved.</p>
                </div>
            </div>

        </div>
    </div>
</div>


<?php wp_footer(); ?>

<!-- Placed JS at the end of the document so the pages load faster -->

<!-- jQuery latest version -->
<script src="<?php echo get_template_directory_uri();?>/js/vendor/jquery-3.6.0.min.js"></script>
<!-- Bootstrap js -->
<script src="<?php echo get_template_directory_uri();?>/js/bootstrap.min.js"></script>
<!-- Plugins js -->
<script src="<?php echo get_template_directory_uri();?>/js/plugins.js"></script>
<!-- Ajax Mail js -->
<script src="<?php echo get_template_directory_uri();?>/js/ajax-mail.js"></script>
<!-- Main js -->
<script src="<?php echo get_template_directory_uri();?>/js/main.js"></script>


</body>
</html>
