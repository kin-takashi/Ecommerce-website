<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package julie-one
 */

get_header();
?>

<!--Corporate Page Banner Section-->
<div class="co-page-banner-section section" data-page-title="Blog Details" style="background-image: url(<?php echo get_template_directory_uri();?>/img/page-banner-bg.jpg)">
    
    <div class="container-fluid">
        <div class="row">
            
            <div class="co-page-banner text-center col-12">
                <h1>Blog Details</h1>
            </div>
            
        </div>
    </div>
    
</div>

<!--Corporate Portfolio Section 1-->
<div class="co-blog-section section pt-140">
    <div class="container">
        <div class="row">
           
            <div class="col-lg-8 col-12 mb-20">
                
							<?php
								while ( have_posts() ) :
									the_post();

									get_template_part( 'template-parts/content', get_post_type() );

									the_post_navigation(
										array(
											'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'julie-one' ) . '</span> <span class="nav-title">%title</span>',
											'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'julie-one' ) . '</span> <span class="nav-title">%title</span>',
										)
									);

									// If comments are open or we have at least one comment, load up the comment template.
									// if ( comments_open() || get_comments_number() ) :
									// 	comments_template();
									// endif;

								endwhile; // End of the loop.
							?>
                
            </div>

            <div class="col-lg-4 col-12 mb-50">

								<?php get_sidebar(); ?>
                
                <div class="co-blog-sidebar">
                    
                    <h5 class="sidebar-title">Search Here</h5>
                    
                    <form class="sidebar-search-form" action="#">
                        <input type="text" placeholder="Search.....">
                        <button><i class="ion-ios-search-strong"></i></button>
                    </form>
                    
                </div>
                
                <div class="co-blog-sidebar">
                    
                    <h5 class="sidebar-title">Categories</h5>
                    
                    <ul>
                        <li><a href="#">Inspiration (5)</a></li>
                        <li><a href="#">Graphic Design (2)</a></li>
                        <li><a href="#">Mobile Apps Design (1)</a></li>
                        <li><a href="#">Business (4)</a></li>
                        <li><a href="#">News (3)</a></li>
                        <li><a href="#">Fashion (4)</a></li>
                    </ul>
                    
                </div>
                
                <div class="co-blog-sidebar">
                    
                    <h5 class="sidebar-title">Latest Post</h5>
                    
                    <div class="co-sidebar-post fix">
                        <a href="#" class="image float-left"><img src="img/corporate/blog/sidebar-post-1.jpg" alt=""></a>
                        <div class="content fix">
                            <a href="#" class="title">Lorem ipsum dolor sit amet, iss consectetur adipiscing.</a>
                            <span class="date">25 March 2017</span>
                        </div>
                    </div>
                    
                    <div class="co-sidebar-post fix">
                        <a href="#" class="image float-left"><img src="img/corporate/blog/sidebar-post-2.jpg" alt=""></a>
                        <div class="content fix">
                            <a href="#" class="title">Lorem ipsum dolor sit amet, iss consectetur adipiscing.</a>
                            <span class="date">25 March 2017</span>
                        </div>
                    </div>
                    
                    <div class="co-sidebar-post fix">
                        <a href="#" class="image float-left"><img src="img/corporate/blog/sidebar-post-3.jpg" alt=""></a>
                        <div class="content fix">
                            <a href="#" class="title">Lorem ipsum dolor sit amet, iss consectetur adipiscing.</a>
                            <span class="date">25 March 2017</span>
                        </div>
                    </div>
                    
                </div>
                
                <div class="co-blog-sidebar">
                    
                    <h5 class="sidebar-title">Archives</h5>
                    
                    <ul>
                        <li><a href="#">March 2016</a></li>
                        <li><a href="#">November 2016</a></li>
                        <li><a href="#">December 2016</a></li>
                        <li><a href="#">January 2017</a></li>
                        <li><a href="#">April 2017</a></li>
                    </ul>
                    
                </div>
                
                <div class="co-blog-sidebar">
                    
                    <h5 class="sidebar-title">Tags</h5>
                    
                    <div class="tags-cloud">
                        <a href="#">Design</a>
                        <a href="#">html</a>
                        <a href="#">css</a>
                        <a href="#">wordpress</a>
                        <a href="#">Photography</a>
                        <a href="#">branding</a>
                    </div>
                    
                </div>
                
            </div>

        </div>
        
    </div>
</div>

<?php

get_footer();
