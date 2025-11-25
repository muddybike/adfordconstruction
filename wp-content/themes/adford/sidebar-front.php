<?php
/**
 * The sidebar containing the front page widget areas.
 *
 * If no active widgets in either sidebar, they will be hidden completely.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

/*
 * The front page widget area is triggered if any of the areas
 * have widgets. So let's check that first.
 *
 * If none of the sidebars have widgets, then let's bail early.
 */
if ( ! is_active_sidebar( 'sidebar-2' )  )
	return;

// If we get this far, we have widgets. Let do this.
?>
<div style="clear:both;"></div>
<?php if (is_page(home)) {
} else  {
	echo '<div class="site-width">';
} ?>

   	 <div id="full-width" class="widget-area" role="complementary">
        <?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
        <div class="first front-widgets">
            <?php dynamic_sidebar( 'sidebar-2' ); ?>
        </div><!-- .first -->
        </div>
    </div><!-- .full-width -->
<?php if (is_page(home)) {
} else  {
	echo '</div>';
} ?>
 <div style="clear:both;"></div>
	<?php endif; ?>


</div><!-- #secondary -->