<?php
/**
 * Page displaying Single Teacher Page.
 *
 * @package fcs-website
 */
?>

<?php get_header(); ?>

<div class="page-content">

	<?php

		$defaults = array(
			'container' => false,
			'theme_location' => 'about-page-side-menu',
			'menu_class' => 'side-menu'
		);

		wp_nav_menu($defaults);

	?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<div class="people-top-wrap clearfix">
			<?php the_field('avatar'); ?>
			<div class="people-titles-wrap">
				<h1 class="people-name teacher-name"><?php the_title(); ?></h1>
				<p class="teacher-science-degree"><?php the_field('science_degree'); ?></p>
				<p class="teacher-department"><?php the_field('department'); ?></p>
			</div>
		</div>

		<p><?php the_field('biography'); ?></p>
		
		<hr>
	
	<?php endwhile; endif; ?>

</div>

<?php get_footer(); ?>