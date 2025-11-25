<?php
/**
 * Template Name: Testimonials, No Sidebar
 *
 * Description: Twenty Twelve loves the no-sidebar look as much as
 * you do. Use this page template to remove the sidebar from any page.
 *
 * Tip: to remove the sidebar from all posts and pages simply remove
 * any active widgets from the Main Sidebar area, and the sidebar will
 * disappear everywhere.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); 
$postid = get_the_ID(); ?> 

	<div class="site-width"><p class="redTxt"><?php $secondtitletxt = get_post_meta($postid, 'second_title_text', true); echo $secondtitletxt; ?></p>
    </div>
    <div class="site-width">
	
	<div id="primary" class="site-content">
		<div id="content" role="main" class="testimonial-columns">

			<?php
			 query_posts( 'post_type=testimonials'); 
			 $i = 0;
			 
			 while ( have_posts() ) : the_post(); 
			 $postid = get_the_ID(); 
			 $i++;
			 ?>
             
					 <aside id="post-<?php the_ID(); ?>" class="widget widget_text">

                        <div class="textwidget">
                            <?php the_content(); ?>
                             <p style="text-align:right;">
								 ~ <?php $quoteauthor = get_post_meta($postid, 'testimonial_author', true); echo $quoteauthor; ?><br>
                                 <?php $quotelocation = get_post_meta($postid, 'testimonial_location', true); echo $quotelocation; ?>
                             </p>
                            
                            
                        </div>
                       
                    </aside><!-- #post -->
                    <? if ($i % 2 == 0) {
							  echo "<div style='clear:both;'></div>";
							}
												
					
					?>
                    


			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
      
	</div><!-- #primary -->

    
    	
		<div id="secondary" class="widget-area" role="complementary">
        
        	<aside id="frm_review" class="widget widget_frm_show_form">
            <h3 class="widget-title">Tell Us About YOUR Experience</h3>
            	<?php echo FrmFormsController::get_form_shortcode( array( 'id' => 8, 'title' => false, 'description' => false ) ); ?>
            </aside>
            <aside id="fb-review" class="widget text-widget">
            <p style="text-align:left">
            	<a href="https://www.facebook.com/ADFordConstruction/reviews" target="_blank"><img src="/wp-content/uploads/2016/02/review-us-on-facebook.jpg" style="margin-left:1px;"/></a>
            </p>
            </aside>
			
		</div><!-- #secondary -->

    </div>
<?php get_footer(); ?>