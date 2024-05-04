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

<?php
add_action( 'wp_footer', 'page_lien_he_footer_scripts' );
function page_lien_he_footer_scripts(){
?>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;language=vi&key=<?php echo APP_GOOGLE_MAP;?>"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/page-lien-he.js"></script>

    
<!-- jQuery latest version -->
<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery-3.6.0.min.js"></script>
<!-- Bootstrap js -->
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<!-- Plugins js -->
<script src="<?php echo get_template_directory_uri(); ?>/js/plugins.js"></script>
<!-- Ajax Mail js -->
<script src="<?php echo get_template_directory_uri(); ?>/js/ajax-mail.js"></script>
<!-- Main js -->
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
<!-- Google Map Api -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAlZPf84AAVt8_FFN7rwQY5nPgB02SlTKs "></script>
<!-- Google Map Activation -->
<script>
    var myCenter=new google.maps.LatLng(30.249796, -97.754667);
    function initialize()
    {
        var mapProp = {
          center:myCenter,
          scrollwheel: false,
          zoom:15,
          mapTypeId:google.maps.MapTypeId.ROADMAP
          };
        var map=new google.maps.Map(document.getElementById("co-google-map"),mapProp);
        var marker=new google.maps.Marker({
          position:myCenter,
            animation:google.maps.Animation.BOUNCE,
          icon:'',
            map: map,
          });
        var styles = [
          {
            stylers: [
              { hue: "#4481eb" },
            ]
          },
        ];
        map.setOptions({styles: styles});
        marker.setMap(map);
    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>

<?php
}
?>


<!--Corporate Page Banner Section-->
<div class="co-page-banner-section section" data-page-title="Contact Us" style="background-image: url(<?php echo get_template_directory_uri();?>/img/page-banner-bg.jpg)">
    
    <div class="container-fluid">
        <div class="row">
            
            <div class="co-page-banner text-center col-12">
                <h1>Contact Us</h1>
            </div>
            
        </div>
    </div>
    
</div>

<!--Corporate Contact Section-->
<div class="co-contact-section section pt-140 pb-10">
    
    <div class="container">
        <div class="row">
           
            <div class="col-12 mb-80">
                <div id="co-google-map"></div>
            </div>
            
            <div class="col-12">
                <div class="row">
                    
                    <div class="co-contact-info col-xl-3 col-lg-4 col-md-5 col-12 mb-40">
                        
                        <ul>
                            <li><span>Address :</span>Your address goes here.</li>
                            <li><span>Email :</span> <a href="#">demo@example.com</a> <a href="#">demo@example.com</a></li>
                            <li><span>Phone :</span> <a href="#">(+012 345 6789)</a> <a href="#">(+012 345 6789)</a></li>
                        </ul>
                        
                        <div class="social fix">
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="dribbble"><i class="fa fa-dribbble"></i></a>
                            <a href="#" class="vimeo"><i class="fa fa-vimeo"></i></a>
                        </div>
                        
                    </div>
                    
                    <div class="co-contact-form col-xl-8 offset-xl-1 col-lg-8 col-md-7 col-12 mb-40">
                        <form id="contact-page-form" action="php/mail.php" method="post">
                            <div class="row">
                                <div class="col-md-6 col-xs-12 mb-20"><input type="text" placeholder="Name" name="name"></div>
                                <div class="col-md-6 col-xs-12 mb-20"><input type="email" placeholder="Email" name="email"></div>
                                <div class="col-xs-12 mb-20"><textarea placeholder="Message" name="message"></textarea></div>
                                <div class="col-xs-12"><input type="submit" value="Send Message"></div>
                            </div>
                        </form>
                        <p class="form-messege"></p>
                    </div>
                    
                </div>
            </div>
            
        </div>
    </div>
    
</div>

<?php get_template_part('template-parts/corporate-client') ?>

<?php
// get_sidebar();
get_footer();

