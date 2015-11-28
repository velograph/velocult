<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Velocult
 */
?>

	</div><!-- #content -->

	<section class="social-media-links">

		<!-- <a href="<?php the_field('instagram_url', 216); ?>" target="_blank">
			<svg viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
			<path d="M17,1H3C1.9,1,1,1.9,1,3v14c0,1.101,0.9,2,2,2h14c1.1,0,2-0.899,2-2V3C19,1.9,18.1,1,17,1z M9.984,15.523
				c3.059,0,5.538-2.481,5.538-5.539c0-0.338-0.043-0.664-0.103-0.984H17v7.216c0,0.382-0.31,0.69-0.693,0.69H3.693
				C3.31,16.906,3,16.598,3,16.216V9h1.549C4.488,9.32,4.445,9.646,4.445,9.984C4.445,13.043,6.926,15.523,9.984,15.523z M6.523,9.984
				c0-1.912,1.55-3.461,3.462-3.461c1.911,0,3.462,1.549,3.462,3.461s-1.551,3.462-3.462,3.462C8.072,13.446,6.523,11.896,6.523,9.984z
				 M16.307,6h-1.615C14.31,6,14,5.688,14,5.308V3.691C14,3.309,14.31,3,14.691,3h1.615C16.69,3,17,3.309,17,3.691v1.616
				C17,5.688,16.69,6,16.307,6z"/>
			</svg>
		</a> -->

		<h4>We are on Facebook too. Check it out.</h4>
		<a href="<?php the_field('facebook_url', 216); ?>" target="_blank">
			<svg viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
			<path d="M17,1H3C1.9,1,1,1.9,1,3v14c0,1.101,0.9,2,2,2h7v-7H8V9.525h2V7.475c0-2.164,1.212-3.684,3.766-3.684l1.803,0.002v2.605
				h-1.197C13.378,6.398,13,7.144,13,7.836v1.69h2.568L15,12h-2v7h4c1.1,0,2-0.899,2-2V3C19,1.9,18.1,1,17,1z"/>
			</svg>
		</a>

	</section>

	<footer class="footer" role="contentinfo">
		<div class="site-info">
			Velo Cult Bike Shop
			<span class="address"><a href="https://goo.gl/maps/7aJUNoMEwyC2" target="_blank">1969 NE 42nd AVE PORTLAND, OR 97213</a></span>
			<span class="telephone"><a href="tel:5039222012">503-922-2012</a></span>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
	<div class="copyright">&copy; 2015</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
