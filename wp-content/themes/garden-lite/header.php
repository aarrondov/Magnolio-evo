<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Garden Lite
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
<link rel="profile" href="https://gmpg.org/xfn/11">
<?php if(is_singular() && pings_open()) { ?>
<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' )); ?>">
<?php } ?>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php
	//wp_body_open hook from WordPress 5.2
	if ( function_exists( 'wp_body_open' ) ) {
	    wp_body_open();
	} else {
		do_action( 'wp_body_open' );
	}
?>
<a class="skip-link screen-reader-text" href="#sitemain">
	<?php _e( 'Skip to content', 'garden-lite' ); ?>
</a>

<div id="header">
	<div class="container">
		<div class="row ac">
			<?php 
				get_template_part('template-parts/site','title');
				get_template_part('template-parts/navigation');
			?>
		</div><!-- row -->
	</div><!-- container --><div class="clear"></div>  
</div><!-- #header -->

<?php
	if (!is_home() && is_front_page()) {
	  get_template_part( 'template-parts/main','slider');
	}
?>