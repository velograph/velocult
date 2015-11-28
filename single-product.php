<?php
/**
 * The template for displaying all single posts.
 *
 * @package Velocult
 */

get_header(); ?>

	<script>
	jQuery(document).ready(function(){

		jQuery(".accordion").hide();
		jQuery('.value').each(function() {
		    var $dropdown = jQuery(this);

		    jQuery(".accordion-hook", $dropdown).click(function(e) {
		      e.preventDefault();
		      $div = jQuery(".accordion", $dropdown);
		      $div.toggle('slow');
		      jQuery(".accordion").not($div).hide('slow');
		      return false;
		    });

		});

		  jQuery('html').click(function(){
		    jQuery(".accordion").hide('slow');
		  });

		jQuery('.product-gallery').slick({
			slidesToShow: 1,
			mobileFirst: true,
			slidesToScroll: 1,
			arrows: false,
			dots: true,
		});

		jQuery(".related .product h3").each(function(index) {
			jQuery(this).next('.related .product .price').andSelf().wrapAll('<div class="product-info"></div>');
		});
		// jQuery('.related .product .price').after('</div>');

	});
	</script>

	<?php do_action( 'woocommerce_before_single_product' ); ?>

	<?php get_template_part('partials/breadcrumbs'); ?>

	<section class="single-product-container">

		<?php while ( have_posts() ) : the_post(); ?>

			<section class="product-section product-top">

				<?php if( get_field('product_gallery') ) : ?>

					<div class="product-gallery-container">

						<div class="product-gallery">

							<?php

							$images = get_field('product_gallery');

							if( $images ): ?>
								<?php foreach( $images as $image ): ?>

									<picture class="portal-image">
										<!--[if IE 9]><video style="display: none"><![endif]-->
										<source
											srcset="<?php echo $image['sizes']['portal-mobile']; ?>"
											media="(max-width: 500px)" />
										<source
											srcset="<?php echo $image['sizes']['portal-tablet']; ?>"
											media="(max-width: 860px)" />
										<source
											srcset="<?php echo $image['sizes']['portal-desktop']; ?>"
											media="(max-width: 1180px)" />
										<source
											srcset="<?php echo $image['sizes']['portal-retina']; ?>"
											media="(min-width: 1181px)" />
										<!--[if IE 9]></video><![endif]-->
										<img srcset="<?php echo $image['sizes']['portal-desktop']; ?>">
									</picture>

								<?php endforeach; ?>
							<?php endif; ?>

						</div>

					</div>

				<?php else: ?>

					<div class="product-image">

						<?php $mobile_page_banner = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'portal-mobile'); ?>
						<?php $tablet_page_banner = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'portal-tablet'); ?>
						<?php $desktop_page_banner = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'portal-desktop'); ?>
						<?php $retina_page_banner = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'portal-retina'); ?>

						<picture>
							<!--[if IE 9]><video style="display: none"><![endif]-->
							<source
								srcset="<?php echo $mobile_page_banner[0]; ?>"
								media="(max-width: 500px)" />
							<source
								srcset="<?php echo $tablet_page_banner[0]; ?>"
								media="(max-width: 860px)" />
							<source
								srcset="<?php echo $desktop_page_banner[0]; ?>"
								media="(max-width: 1180px)" />
							<source
								srcset="<?php echo $retina_page_banner[0]; ?>"
								media="(min-width: 1181px)" />
							<!--[if IE 9]></video><![endif]-->
							<img srcset="<?php echo $image[0]; ?>">
						</picture>

					</div>

				<?php endif; ?>

				<div class="product-add-to-cart">

					<div class="product-title-and-price">
						<h3><?php the_title(); ?></h3>
						<?php if( $product->is_type( 'simple' ) ) { ?>

							<?php if ( $price_html = $product->get_price_html() ) : ?>
								<span class="price"><?php echo $price_html; ?></span>
							<?php endif; ?>

						<?php } ?>
					</div>

					<?php if( has_term('custom-bikes', 'product_cat') || has_term('custom-goods', 'product_cat') ) : ?>

						<p>For more info</p>
						<a href="mailto:info@velocult.com" class="button">Email Us</a>

					<?php else: ?>

						<?php
							/**
							* woocommerce_single_product_summary hook
							*
							* @hooked woocommerce_template_single_title - 5
							* @hooked woocommerce_template_single_rating - 10
							* @hooked woocommerce_template_single_price - 10
							* @hooked woocommerce_template_single_excerpt - 20
							* @hooked woocommerce_template_single_add_to_cart - 30
							* @hooked woocommerce_template_single_meta - 40
							* @hooked woocommerce_template_single_sharing - 50
							*/
							remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
							remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
							remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
							remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
							do_action( 'woocommerce_single_product_summary' );
						?>

					<?php endif; ?>
					<div class="product-description">
						<?php the_excerpt(); ?>
					</div>
				</div>

			</section>

			<section class="product-section related-products">
				<?php
					remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );
					remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );
					do_action( 'woocommerce_after_single_product_summary' );
				?>
			</section>

		<?php endwhile; // end of the loop. ?>

	</section>

<?php get_footer(); ?>
