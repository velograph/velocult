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

	});
	</script>

	<?php get_template_part('partials/breadcrumbs'); ?>

	<?php do_action( 'woocommerce_before_single_product' ); ?>

	<section class="single-product-container">

		<?php while ( have_posts() ) : the_post(); ?>

			<section class="product-section product-top">

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

				<div class="product-add-to-cart">

					<h3 class="product-title-and-price">
						<?php the_title(); ?>
						<?php if( $product->is_type( 'simple' ) ) { ?>

							<?php if ( $price_html = $product->get_price_html() ) : ?>
								<span class="price"><?php echo $price_html; ?></span>
							<?php endif; ?>

						<?php } ?>
					</h3>



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
					<div class="product-description">
						<?php the_excerpt(); ?>
					</div>
				</div>

			</section>

			<!-- <section class="product-section related-products">
				<h4>Related Products</h4>
				<?php
					remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );
					remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );
					do_action( 'woocommerce_after_single_product_summary' );
				?>
			</section> -->

		<?php endwhile; // end of the loop. ?>

	</section>

<?php get_footer(); ?>
