<?php
/**
 * Template Name: Front Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Velocult
 */

get_header(); ?>

	<div id="primary" class="content-area">

		<?php while ( have_posts() ) : the_post(); ?>

			<div class="section">
				<h3>Events Calendar</h3>
				<?php echo do_shortcode('[add_eventon cal_id="1st"]'); ?>
			</div>

			<?php if( have_rows('taplist') ) : ?>

				<div class="taplist section">

					<h3><?php the_field('taplist_title'); ?></h3>

					<?php $i = 1; ?>
					<?php while ( have_rows('taplist') ) : ?>

				        <?php the_row(); ?>

						<div class="tap">
							<span class="digit-container">
								<span class="digit"><?php echo $i; ?></span>
							</span>
							<span class="tap-information">
								<span class="brewery"><?php the_sub_field('brewery'); ?></span>
								<span class="beer"><?php the_sub_field('beer'); ?></span>
							</span>
						</div>

				    <?php
						$i++;
						endwhile;
					?>

				</div>

			<?php endif; ?>

		<?php endwhile; // end of the loop. ?>

	</div><!-- #primary -->

<?php get_footer(); ?>
