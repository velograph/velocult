<?php
/**
 * Template Name: Info
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Velocult
 */

get_header(); ?>

	<div id="primary" class="info content-area">

		<?php while ( have_posts() ) : the_post(); ?>

			<div class="section">
				<div class="about-velo-cult">
					<h3><?php the_title(); ?></h3>
					<h4><?php the_content(); ?></h4>
				</div>
			</div>

			<div class="section">
				<div class="additional-info">
					<?php the_field('additional_info'); ?>
				</div>
			</div>

			<div class="section">

				<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
				<script type="text/javascript">
				(function($) {

				/*
				*  new_map
				*
				*  This function will render a Google Map onto the selected jQuery element
				*
				*  @type	function
				*  @date	8/11/2013
				*  @since	4.3.0
				*
				*  @param	$el (jQuery element)
				*  @return	n/a
				*/

				function new_map( $el ) {

					// var
					var $markers = $el.find('.marker');


					// vars
					var args = {
						zoom		: 16,
						center		: new google.maps.LatLng(0, 0),
						mapTypeId	: google.maps.MapTypeId.ROADMAP,
						scrollwheel : false
					};


					// create map
					var map = new google.maps.Map( $el[0], args);


					// add a markers reference
					map.markers = [];


					// add markers
					$markers.each(function(){

				    	add_marker( $(this), map );

					});


					// center map
					center_map( map );


					// return
					return map;

				}

				/*
				*  add_marker
				*
				*  This function will add a marker to the selected Google Map
				*
				*  @type	function
				*  @date	8/11/2013
				*  @since	4.3.0
				*
				*  @param	$marker (jQuery element)
				*  @param	map (Google Map object)
				*  @return	n/a
				*/

				function add_marker( $marker, map ) {

					// var
					var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );

					// create marker
					var marker = new google.maps.Marker({
						position	: latlng,
						map			: map
					});

					// add to array
					map.markers.push( marker );

					// if marker contains HTML, add it to an infoWindow
					if( $marker.html() )
					{
						// create info window
						var infowindow = new google.maps.InfoWindow({
							content		: $marker.html()
						});

						// show info window when marker is clicked
						google.maps.event.addListener(marker, 'click', function() {

							infowindow.open( map, marker );

						});
					}

				}

				/*
				*  center_map
				*
				*  This function will center the map, showing all markers attached to this map
				*
				*  @type	function
				*  @date	8/11/2013
				*  @since	4.3.0
				*
				*  @param	map (Google Map object)
				*  @return	n/a
				*/

				function center_map( map ) {

					// vars
					var bounds = new google.maps.LatLngBounds();

					// loop through all markers and create bounds
					$.each( map.markers, function( i, marker ){

						var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );

						bounds.extend( latlng );

					});

					// only 1 marker?
					if( map.markers.length == 1 )
					{
						// set center of map
					    map.setCenter( bounds.getCenter() );
					    map.setZoom( 17 );
					}
					else
					{
						// fit to bounds
						map.fitBounds( bounds );
					}

				}

				/*
				*  document ready
				*
				*  This function will render each map when the document is ready (page has loaded)
				*
				*  @type	function
				*  @date	8/11/2013
				*  @since	5.0.0
				*
				*  @param	n/a
				*  @return	n/a
				*/
				// global var
				var map = null;

				$(document).ready(function(){

					$('.acf-map').each(function(){

						// create map
						map = new_map( $(this) );

					});

				});

				})(jQuery);
				</script>

				<?php

				$location = get_field('embedded_map');

				if( !empty($location) ):
				?>
				<div class="acf-map">
					<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
				</div>
				<?php endif; ?>

			</div>

			<div class="section">

				<h3>We carry the following brands</h3>
				<div class="brands-list">

					<?php if( have_rows('list_of_brands') ) : ?>

					    <?php while ( have_rows('list_of_brands') ) : ?>

					        <?php the_row(); ?>

							<div class="brand">
								<a href="<?php the_sub_field('brand_link'); ?>" target="_blank">
							        <img src="<?php echo the_sub_field('logo'); ?>">
								</a>
							</div>

					    <?php endwhile; ?>

					<?php endif; ?>

				</div>
			</div>

		<?php endwhile; // end of the loop. ?>

	</div><!-- #primary -->

<?php get_footer(); ?>
