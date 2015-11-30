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

<script>

	jQuery(document).ready(function() {

		jQuery(".slide-out").hide();
		jQuery(".menu-hook").click(function(){
			jQuery(".slide-out").slideToggle('blind');
		});

	});

</script>

</head>

<body <?php body_class(); ?>>
<div class="page">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'Velocult' ); ?></a>

	<header class="header" role="banner">

		<div class="header-background">

			<img src="<?php echo get_template_directory_uri(); ?>/images/tools.jpg" />

			<div class="site-branding">
				<a href="/">
					<img src="<?php echo get_template_directory_uri(); ?>/images/velocult_logo.png" />
				</a>
			</div>

		</div>

		<div class="mobile-navigation">

			<div class="menu-hook-container">
				<span class="menu-hook">
					<svg version="1.1" id="Menu" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						 viewBox="0 0 20 20" xml:space="preserve">
					<path d="M16.4,9H3.6C3.048,9,3,9.447,3,10c0,0.553,0.048,1,0.6,1H16.4c0.552,0,0.6-0.447,0.6-1C17,9.447,16.952,9,16.4,9z M16.4,13
						H3.6C3.048,13,3,13.447,3,14c0,0.553,0.048,1,0.6,1H16.4c0.552,0,0.6-0.447,0.6-1C17,13.447,16.952,13,16.4,13z M3.6,7H16.4
						C16.952,7,17,6.553,17,6c0-0.553-0.048-1-0.6-1H3.6C3.048,5,3,5.447,3,6C3,6.553,3.048,7,3.6,7z"/>
					</svg>
				</span>
				<div class="cart-link">
					<a href="/cart">
						<?php echo get_template_part('partials/cart'); ?>
						<span class="digit-container">
							<span class="digit"><?php echo sprintf (_n( '%d', '%d', WC()->cart->cart_contents_count ), WC()->cart->cart_contents_count ); ?></span>
						</span>
					</a>
				</div>
			</div>

			<div class="slide-out" style="display:none;">
				<nav class="main-navigation" role="navigation">
					<?php wp_nav_menu(
						array(
							'theme_location' => 'primary',
						)
					); ?>
					<a href="/my-account" class="account-link">My Account</a>
				</nav>
			</div>
		</div>

		<div class="desktop-navigation">
			<nav class="main-navigation" role="navigation">
				<?php wp_nav_menu(
					array(
						'theme_location' => 'primary',
					)
				); ?>
				<div class="cart-link">
					<a href="/cart">
						<?php echo get_template_part('partials/cart'); ?>
						<span class="digit-container">
							<span class="digit"><?php echo sprintf (_n( '%d', '%d', WC()->cart->cart_contents_count ), WC()->cart->cart_contents_count ); ?></span>
						</span>
					</a>
				</div>
			</nav>
		</div>

	</header>

	<div id="content" class="site-content">
