<?php
/**
 * Page displaying all Teachers Archive.
 *
 * Template Name: Teachers Archive
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
				'post_type' => 'teacher',
				'orderby'=> 'title',
				'order' => 'ASC'
				);
		$query = new WP_Query( $args );

	?>

	<h5>Кафедра мультимедійних систем</h5>

	<div class="people-wrap clearfix">

		<?php $counter = 1; ?>
		
		<?php if($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

			<?php if(get_post_meta(get_the_ID(), 'department', true) == 'Кафедра мультимедійних систем') : ?>

			<?php if($counter%3==1) echo '<div class="people-3-wrap clearfix">'; ?>

				<div class="people-block">

					<?php the_field('avatar'); ?>
					<p class="people-name teacher-name"><?php the_title(); ?></p>
					<p class="teacher-science-degree"><?php the_field('science_degree'); ?></p>
						
				</div>

			<?php $counter++; if($counter%3==1) echo '</div>'; ?>

			<?php endif; ?>

		<?php endwhile; endif; wp_reset_postdata(); ?>

		<?php if($counter%3!=1) echo '</div>'; ?>

	</div>

	<h5>Кафедра інформатики</h5>

	<div class="people-wrap clearfix">

		<?php $counter = 1; ?>
		
		<?php if($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

			<?php if(get_post_meta(get_the_ID(), 'department', true) == 'Кафедра інформатики') : ?>

			<?php if($counter%3==1) echo '<div class="people-3-wrap clearfix">'; ?>

				<div class="people-block">

					<?php the_field('avatar'); ?>
					<p class="people-name teacher-name"><?php the_title(); ?></p>
					<p class="teacher-science-degree"><?php the_field('science_degree'); ?></p>
					
				</div>

			<?php $counter++; if($counter%3==1) echo '</div>'; ?>

			<?php endif; ?> 

		<?php endwhile; endif; wp_reset_postdata(); ?>

		<?php if($counter%3!=1) echo '</div>'; ?>

	</div>

	<h5>Кафедра математики</h5>

	<div class="people-wrap clearfix">

		<?php $counter = 1; ?>
		
		<?php if($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

			<?php if(get_post_meta(get_the_ID(), 'department', true) == 'Кафедра математики') : ?>

			<?php if($counter%3==1) echo '<div class="people-3-wrap clearfix">'; ?>

				<div class="people-block">

					<?php the_field('avatar'); ?>
					<p class="people-name teacher-name"><?php the_title(); ?></p>
					<p class="teacher-science-degree"><?php the_field('science_degree'); ?></p>
					
				</div>

			<?php $counter++; if($counter%3==1) echo '</div>'; ?>

			<?php endif; ?>

		<?php endwhile; endif; wp_reset_postdata(); ?>

		<?php if($counter%3!=1) echo '</div>'; ?>

	</div>

	<h5>Кафедра мережних технологій</h5>

	<div class="people-wrap clearfix">

		<?php $counter = 1; ?>
		
		<?php if($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

			<?php if(get_post_meta(get_the_ID(), 'department', true) == 'Кафедра мережних технологій') : ?>

			<?php if($counter%3==1) echo '<div class="people-3-wrap clearfix">'; ?>

				<div class="people-block">

					<?php the_field('avatar'); ?>
					<p class="people-name teacher-name"><?php the_title(); ?></p>
					<p class="teacher-science-degree"><?php the_field('science_degree'); ?></p>
					
				</div>

			<?php $counter++; if($counter%3==1) echo '</div>'; ?>

			<?php endif; ?> 

		<?php endwhile; endif; wp_reset_postdata(); ?>

		<?php if($counter%3!=1) echo '</div>'; ?>

	</div>

</div>

<?php get_footer(); ?>