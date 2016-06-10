<?php
/*
 * Template Name: People Page
 */
 ?>

 <?php get_header(); ?>

	<div class="page-content">

		<div class="show-side-menu-btn"></div>
	
		<?php

			// $defaults = array(
			// 	'container' => false,
			// 	'theme_location' => 'people-page-side-menu',
			// 	'menu_class' => 'side-menu'
			// );

			// wp_nav_menu($defaults);

		?>

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
			<h1><?php the_title(); ?></h1>
		
			<p><?php the_content(); ?></p>
		
		<?php endwhile; else : ?>
		
			<p><?php _e("Sorry, no pages matched your criteria"); ?></p>
		
		<?php endif; ?>

		<?php if( is_page('Спільнота') ) : ?>

			<div class="people-wrap">

				<div class="people-block">
					<a href="<?php echo site_url(); ?>/people/administration" class="flaticon-management-group fi">Адміністрація</a>
				</div>

				<div class="people-block">
					<a href="<?php echo site_url(); ?>/people/teachers" class="flaticon-teacher-pointing-blackboard fi">Викладачі</a>
				</div>

				<div class="people-block">
					<a href="<?php echo site_url(); ?>/people/laboratory" class="flaticon-flask fi">Лабораторія</a>
				</div>

				<div class="people-block">
					<a href="<?php echo site_url(); ?>/people/alumni" class="flaticon-graduate-student-avatar fi">Випускники</a>
				</div>

				<div class="people-block">
					<a href="<?php echo site_url(); ?>/people/studetns" class="flaticon-student-in-front-of-a-stack-of-books fi">Студенти</a>
				</div>

			</div>

		<?php endif; ?>

	</div>

 <?php get_footer(); ?>