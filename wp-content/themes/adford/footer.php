<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

	</div><!-- #main .wrapper -->
    
    
  <div style="clear:both;height:5px;"></div>
<?php if ( is_front_page() ) {
} else { ?>
    <div id="cta" class="gray-cta">
        <div class="site-width"><p class="whitetxt"><?php $cta = get_post_meta(7, 'call_to_action', true); echo $cta; ?></p></div>
    </div>
    <div style="clear:both;"></div>

<?php get_sidebar( 'front' ); ?>

   <div style="clear:both;"></div>
   <?php } ?>

    
	<footer id="colophon" role="contentinfo" class="redbkg">
    <div class="site-width">
          <?php if ( ! is_active_sidebar( 'sidebar-3' )  )
            return;
        
        // If we get this far, we have widgets. Let do this.
        ?>
        
            <?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
            <div class="front-widgets">
                <?php dynamic_sidebar( 'sidebar-3' ); ?>
            </div><!-- .first -->
            <?php endif; ?>
	</div>
	</footer><!-- #colophon -->


<?php wp_footer(); ?>
</body>
</html>