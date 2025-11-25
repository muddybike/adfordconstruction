<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link href='https://fonts.googleapis.com/css?family=Lato:400,700,900' rel='stylesheet' type='text/css'>
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-73264945-1', 'auto');
  ga('send', 'pageview');

</script>

<div id="phone-top" class="redbkg">
	<div class="site-width"><p class="whitetxt"><?php $headtxt = get_post_meta(7, 'header_text', true); echo $headtxt; ?></p>
    </div>
 </div>
 
<header id="masthead" class="site-header" role="banner">
	<div class="site-width">
        <div class="logo"><a href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/adford-logo.png" /></a>
        </div>
        <nav id="site-navigation" class="main-navigation" role="navigation">
            <h3 class="menu-toggle"><?php _e( 'Menu', 'twentytwelve' ); ?></h3>
            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
        </nav><!-- #site-navigation -->
    </div>
</header><!-- #masthead -->
<div style="clear:both;"></div>
<?php if ( is_front_page() ) { 
	echo do_shortcode('[rev_slider alias="home"]');?>

<div class="home-bkg-container" style="display:none;">
	<div class="home-bkg" style="background-image:url('/wp-content/themes/adford/img/home-bkg.jpg');"></div>
	<div class="whitetrans">
    	<h3><?php $quotetitle = get_post_meta(7, 'home_pg_review_title', true); echo $quotetitle; ?></h3>
        <p><?php $quotereview = get_post_meta(7, 'home_pg_review', true); echo $quotereview; ?></p>
        <p style="text-align:right;"><?php $quoteauthor = get_post_meta(7, 'home_pg_review_author', true); echo $quoteauthor; ?><br>
       <?php $quotelocation = get_post_meta(7, 'home_pg_review_location', true); echo $quotelocation; ?></p>
    </div>
</div>
   
    <div id="cta" class="gray-cta">
        <div class="site-width"><p class="whitetxt"><?php $cta = get_post_meta(7, 'call_to_action', true); echo $cta; ?></p></div>
    </div>
    <div style="clear:both;"></div>

<?php } ?>

<div id="main" class="wrapper">

	