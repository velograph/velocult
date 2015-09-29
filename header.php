<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Velocult
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="page">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'Velocult' ); ?></a>

	<header class="header" role="banner">
		<div class="header-background">
			<?php echo get_template_part('partials/tools'); ?>
			<div class="site-branding">
				<?php echo get_template_part('partials/logo'); ?>
			</div><!-- .site-branding -->
		</div>

		<nav class="main-navigation" role="navigation">
			<?php wp_nav_menu(
				array(
					'theme_location' => 'primary',
					// 'after' => '<img src="'.get_bloginfo('template_url').'/images/dots.svg" />',
				)
			); ?>
			<div class="cart-link">
				<?php echo get_template_part('partials/cart'); ?>
				<span class="cart-count">
					<span class="digit"><?php echo sprintf (_n( '%d', '%d', WC()->cart->cart_contents_count ), WC()->cart->cart_contents_count ); ?></span>
				</span>
			</div>
		</nav><!-- .main-navigation -->
	</header><!-- .header -->

	<div id="content" class="site-content">
