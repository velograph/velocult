<?php
/**
 * Template Name: Team
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Velocult
 */

get_header(); ?>

	<div id="primary" class="team content-area">

		<?php while ( have_posts() ) : the_post(); ?>

			<div class="team-banner">
				<img src="<?php echo get_template_directory_uri(); ?>/images/team_banner.svg" />
			</div>

			<div class="team-forum-link">

				<a href="/forums">CLICK HERE FOR THE TEAM VC FORUM</a>

			</div>

			<div class="team-info-container">
				<div class="team-info section">
					<h4><?php the_content(); ?></h4>
				</div>
			</div>

			<!-- <div class="kit-link-container section">

				<a href="<?php the_field('kit_order_url'); ?>" target="_blank">
					<div class="kit-link-image">
						<?php $mobile = wp_get_attachment_image_src(get_field('banner_image'), 'banner-mobile'); ?>
						<?php $tablet = wp_get_attachment_image_src(get_field('banner_image'), 'banner-tablet'); ?>
						<?php $desktop = wp_get_attachment_image_src(get_field('banner_image'), 'banner-desktop'); ?>

							<picture>
								<!--[if IE 9]><video style="display: none"><![endif]
								<source
									srcset="<?php echo $mobile[0]; ?>"
									media="(max-width: 500px)" />
								<source
									srcset="<?php echo $tablet[0]; ?>"
									media="(max-width: 860px)" />
								<source
									srcset="<?php echo $desktop[0]; ?>"
									media="(min-width: 861px)" />
								<!--[if IE 9]></video><![endif]
								<img srcset="<?php echo $desktop[0]; ?>">
							</picture>

						<div class="kit-image-caption">
							<?php the_field('image_caption'); ?>
						</div>

					</div>

					<div class="kit-order-link">
						<?php the_field('kit_order_text'); ?>
					</div>
				</a>

			</div> -->

			<div class="flickr-feed section">

				<?php echo do_shortcode('[instagram-feed showbutton=false showheader=false showfollow=true followcolor="#fff" followtextcolor="#878888" followtext="Check us out on Instagram" cols="10"]'); ?>

			</div>

			<div class="team-cta">

				<script>
				jQuery(document).ready(function(){
					jQuery( ".team-form" ).hide();
					jQuery( ".toggle-trigger" ).click(function() {
						jQuery( ".team-form" ).slideToggle( "ease-in-out", function() {
						// Animation complete.
						});
					});
				});
				</script>

				<div class="toggle-trigger">
					<svg viewBox="0 0 313 314">
					    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
					        <g id="Team" sketch:type="MSLayerGroup" transform="translate(-523.000000, -2473.000000)">
					            <g id="Group-1759" sketch:type="MSShapeGroup">
					                <g transform="translate(523.000000, 2473.000000)">
					                    <path d="M0.5522,167.578 C6.4672,253.73 81.1142,318.767 167.2552,312.836 C253.4022,306.918 318.4372,232.285 312.5132,146.14 C306.5962,59.998 231.9552,-5.047 145.8212,0.873 C59.6602,6.795 -5.3718,81.433 0.5522,167.578" id="Fill-1724" fill="#333835"></path>
					                    <g id="svg-text" transform="translate(64.000000, 39.000000)" fill="#FFFFFF">
					                        <path d="M12.9189,70.045 C13.6319,70.197 14.5339,70.16 15.1869,70.022 C17.9469,69.441 19.4789,66.998 19.4949,64.191 L19.5759,27.414 L31.7729,24.852 L31.6629,63.303 C31.6279,74.678 25.7569,79.928 18.2079,81.514 C14.5789,82.277 12.0729,81.893 10.3239,81.504 L12.9189,70.045 Z" id="Fill-1777"></path>
					                        <path d="M64.5449,34.717 C63.7709,31.393 62.3119,29.502 60.1349,29.961 C53.6739,31.317 55.4069,50.737 56.6459,55.93 C57.4219,59.256 58.8779,61.147 61.0559,60.69 C67.5189,59.332 65.7879,39.912 64.5449,34.717 M44.2979,57.768 C41.9969,46.805 41.7239,21.701 59.0749,18.055 C68.5829,16.059 74.7099,22.502 76.9519,33.172 C79.2569,44.133 79.4669,68.949 62.1179,72.594 C52.6079,74.592 46.5399,68.438 44.2979,57.768" id="Fill-1779"></path>
					                        <path d="M88.9131,65.902 L88.9791,12.832 L101.3951,10.224 L101.3261,63.295 L88.9131,65.902 Z" id="Fill-1780"></path>
					                        <path d="M139.002,55.379 L131.007,39.324 C128.917,35.139 127.308,31.082 127.308,31.082 L127.161,31.111 C127.161,31.111 127.523,35.358 127.493,39.91 L127.464,57.805 L115.85,60.242 L115.917,7.174 L126.224,5.008 L133.212,19.156 C134.919,22.586 137.302,28.147 137.302,28.147 L137.446,28.119 C137.446,28.119 137.014,22.449 137.029,18.201 L137.113,2.723 L149.088,0.205 L149.023,53.277 L139.002,55.379 Z" id="Fill-1781"></path>
					                        <path d="M7.8164,155.334 L7.9284,114.383 L0.6704,115.906 L0.6264,103.785 L27.7024,98.098 L27.7464,110.221 L20.4874,111.746 L20.3744,152.693 L7.8164,155.334 Z" id="Fill-1782"></path>
					                        <path d="M38.8174,148.818 L38.8854,95.752 L66.3954,89.968 L66.4394,102.089 L51.2704,105.279 L51.2314,114.836 L63.7174,112.214 L63.6184,124.359 L51.1304,126.982 L51.1124,134.111 L66.2814,130.923 L66.3274,143.039 L38.8174,148.818 Z" id="Fill-1783"></path>
					                        <path d="M94.6123,107.008 C94.0483,102.504 93.4373,96.723 93.4373,96.723 L93.2913,96.748 C93.2913,96.748 92.8863,102.75 92.3883,107.248 L90.9403,119.83 L96.1663,118.731 L94.6123,107.008 Z M98.7813,136.223 L98.0983,130.457 L89.1003,132.348 L88.5463,138.373 L75.5523,141.102 L86.2173,85.807 L100.4473,82.817 L110.9733,133.662 L98.7813,136.223 Z" id="Fill-1784"></path>
					                        <path d="M149.6748,125.533 L149.6568,98.4 C149.7448,95.578 149.8208,93.06 149.8208,93.06 L149.6768,93.092 C149.6768,93.092 148.2948,95.881 147.2518,97.767 L141.0768,109.148 L141.3678,109.088 L135.5708,100.982 C134.3028,99.277 132.8368,96.627 132.8368,96.627 L132.6908,96.658 C132.6908,96.658 132.8528,99.582 132.8568,101.777 L132.8308,129.068 L120.4198,131.676 L120.4868,78.609 L133.2638,75.924 L137.8238,82.467 C139.1968,84.679 140.7198,87.242 140.7198,87.242 L140.8648,87.213 C140.8648,87.213 142.2888,84.258 143.6068,81.863 L148.7238,72.674 L162.1548,69.853 L162.0838,122.924 L149.6748,125.533 Z" id="Fill-1785"></path>
					                        <path d="M76.0977,235.963 L54.9757,240.399 L40.1067,164.777 L58.3127,160.947 L63.5457,199.783 C64.1967,204.492 65.0317,212.748 65.0317,212.748 L65.2447,212.703 C65.2447,212.703 66.1167,204.535 66.6717,199.695 L71.8927,158.102 L91.1747,154.047 L76.0977,235.963 Z" id="Fill-1786"></path>
					                        <path d="M150.1123,205.902 C146.9273,215.908 140.8493,223.929 129.6463,226.287 C115.4243,229.273 106.4383,220.242 103.0923,204.302 C99.6953,188.142 99.2673,150.767 124.9103,145.379 C136.4433,142.963 144.5283,148.8 149.0183,159.443 L133.4153,171.384 L133.1353,170.093 C132.1453,165.351 129.8253,162.351 126.4843,163.05 C117.0053,165.041 119.6103,193.519 121.4183,201.582 C122.5643,206.513 124.7313,209.326 127.9633,208.644 C131.5223,207.898 133.3993,203.445 134.2503,197.871 L150.1123,205.902 Z" id="Fill-1787"></path>
					                    </g>
					                </g>
					            </g>
					        </g>
					    </g>
					</svg>
				</div>

				<div class="team-form">
					<div class="mission-statement">
						<?php the_field('mission_statement', 12); ?>
					</div>

					<div class="sign-up">
						<?php echo do_shortcode('[gravityform id=2 title=false description=false ajax=true]'); ?>
					</div>
				</div>

			</div>

		<?php endwhile; // end of the loop. ?>

	</div><!-- #primary -->

<?php get_footer(); ?>
