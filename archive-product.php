<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Velocult
 */

get_header(); ?>

	<div id="primary" class="store content-area">

		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<div class="product-portal">

					<?php $mobile = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'portal-mobile' ); ?>
					<?php $tablet = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'portal-tablet' ); ?>
					<?php $desktop = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'portal-desktop' ); ?>

					<a href="<?php the_permalink(); ?>">
						<picture class="product-image">
							<!--[if IE 9]><video style="display: none;"><![endif]-->
							<source
								srcset="<?php echo $mobile[0]; ?>"
								media="(max-width: 500px)" />
							<source
								srcset="<?php echo $tablet[0]; ?>"
								media="(max-width: 860px)" />
							<source
								srcset="<?php echo $desktop[0]; ?>"
								media="(min-width: 861px)" />
							<!--[if IE 9]></video><![endif]-->
							<img srcset="<?php echo $desktop[0]; ?>">
						</picture>
					</a>

					<div class="product-info">
						<span class="product-title"><?php the_title(); ?></span>
						<?php if( $product->is_type( 'simple' ) ) { ?>

							<?php if ( $price_html = $product->get_price_html() ) : ?>
								<span class="product-price"><?php echo $price_html; ?></span>
							<?php endif; ?>

						<?php } ?>
					</div>

				</div>

			<?php endwhile; ?>

		<?php endif; ?>

	</div><!-- #primary -->

<?php get_footer(); ?>
