<?php
/**
 * Page displaying all Administration Archive.
 *
 * Template Name: Administration Archive
 *
 * @package fcs-website
 */
?>

<?php get_header(); ?>

<div class="page-content">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
	
	<?php endwhile; endif; ?>

	<div class="show-side-menu-btn"></div>

	<?php

		// $defaults = array(
		// 	'container' => false,
		// 	'theme_location' => 'people-page-side-menu',
		// 	'menu_class' => 'side-menu'
		// );

		// wp_nav_menu($defaults);

	?>

	<?php

		$args = array(
				'post_type' => 'administration'
				);
		$query = new WP_Query( $args );

	?>

	<h5>Адміністрація</h5>

	<div class="people-wrap clearfix">

		<?php $counter = 1; ?>
		
		<?php if($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

			<?php if(get_post_meta(get_the_ID(), 'category', true) == 'administration') : ?>

			<?php if($counter%3==1) echo '<div class="people-3-wrap clearfix">'; ?>

				<div class="people-block">

					<?php the_field('avatar'); ?>
					<p class="people-name administrator-name"><?php the_title(); ?></p>
					<p class="administrator-info"><?php the_field('info'); ?></p>
						
				</div>

			<?php $counter++; if($counter%3==1) echo '</div>'; ?>

			<?php endif; ?> 

		<?php endwhile; endif; wp_reset_postdata(); ?>

		<?php if($counter%3!=1) echo '</div>'; ?>

	</div>

	<h5>Методисти</h5>

	<div class="people-wrap clearfix">

		<?php $counter = 1; ?>
		
		<?php if($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

			<?php if(get_post_meta(get_the_ID(), 'category', true) == 'methodists') : ?>

			<?php if($counter%3==1) echo '<div class="people-3-wrap clearfix">'; ?>

				<div class="people-block">

					<?php the_field('avatar'); ?>
					<p class="people-name administrator-name"><?php the_title(); ?></p>
					<p class="administrator-info"><?php the_field('info'); ?></p>
						
				</div>

			<?php $counter++; if($counter%3==1) echo '</div>'; ?>

			<?php endif; ?>

		<?php endwhile; endif; wp_reset_postdata(); ?>

		<?php if($counter%3!=1) echo '</div>'; ?>

	</div>

	<h5>Керівники</h5>

	<div class="people-wrap clearfix">

		<?php $counter = 1; ?>
		
		<?php if($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

			<?php if(get_post_meta(get_the_ID(), 'category', true) == 'managers') : ?>

			<?php if($counter%3==1) echo '<div class="people-3-wrap clearfix">'; ?>

				<div class="people-block">

					<?php the_field('avatar'); ?>
					<p class="people-name administrator-name"><?php the_title(); ?></p>
					<p class="administrator-info"><?php the_field('info'); ?></p>
						
				</div>

			<?php $counter++; if($counter%3==1) echo '</div>'; ?>

			<?php endif; ?> 

		<?php endwhile; endif; wp_reset_postdata(); ?>

		<?php if($counter%3!=1) echo '</div>'; ?>

	</div>

</div>

<?php get_footer(); ?>