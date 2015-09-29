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

			<?php get_template_part( 'content', 'page' ); ?>

			<?php if( have_rows('taplist') ) : ?>

				<h3><?php the_field('taplist_title'); ?></h3>
				<?php while ( have_rows('taplist') ) : ?>

			        <?php the_row(); ?>

					<?php the_sub_field('brewery'); ?>
			        <?php the_sub_field('beer'); ?>

			    <?php endwhile; ?>

			<?php endif; ?>

		<?php endwhile; // end of the loop. ?>

	</div><!-- #primary -->

<?php get_footer(); ?>
