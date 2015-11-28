<?php
/**
 * The template for displaying all pages.
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

			<?php
				$post = get_post( $post_id );
				$slug = $post->post_name;
			?>
			<div class="page-content-container <?php echo $slug; ?>">

				<div class="page-content">
					<!-- <h1 class="page-title"><?php the_title(); ?></h1> -->

					<?php the_content(); ?>
				</div>

			</div>

		<?php endwhile; // end of the loop. ?>

	</div><!-- #primary -->

<?php get_footer(); ?>
