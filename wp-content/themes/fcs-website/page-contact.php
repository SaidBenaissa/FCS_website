<?php
/*
 * Template Name: Contact Page
 */
?>

<?php get_header(); ?>

<div class="page-content">

	<div class="show-side-menu-btn"></div>

	<?php

		$defaults = array(
			'container' => false,
			'theme_location' => 'contact-page-side-menu',
			'menu_class' => 'side-menu'
		);

		wp_nav_menu($defaults);

	?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
		<h1><?php the_title(); ?></h1>
	
		<p><?php the_content(); ?></p>
	
	<?php endwhile; else : ?>
	
		<p><?php _e("Sorry, no pages matched your criteria"); ?></p>
	
	<?php endif; ?>

	<div id="googleMap"></div>

</div>

<script type="text/javascript" src="//maps.googleapis.com/maps/api/js?key=AIzaSyAajMGMY3ktImXJw8HuxkCBzcRMk6QCDBc"></script>

<script type="text/javascript">
	
	function initialize() {

    var myLatLng = {lat: 50.464016, lng: 30.519948};

    var mapProp = {
      center: new google.maps.LatLng(50.464016, 30.519948),
      zoom: 16,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);  

    var marker = new google.maps.Marker({
      position: myLatLng,
      map: map,
      title: 'Національний університет "Києво-Могилянська академія"'
    });
    marker.setMap(map);

  }

  google.maps.event.addDomListener(window, 'load', initialize);

</script>

<?php get_footer(); ?>