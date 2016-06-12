<?php
/*
 * Template Name: Resources Page
 */
 ?>

 <?php get_header(); ?>

	<div class="page-content">

		<!-- <div class="show-side-menu-btn"></div> -->
	
		<?php

			// $defaults = array(
			// 	'container' => false,
			// 	'theme_location' => 'resources-page-side-menu',
			// 	'menu_class' => 'side-menu'
			// );

			// wp_nav_menu($defaults);

		?>

 		<?php

			$args = array(
					'post_type' => 'schedule'
					);
			$query = new WP_Query( $args );

		?>

		<?php if($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

			<?php

				$file_arr = get_field('schedule_file');

				$filedir = get_attached_file( $file_arr['id'] );

				// echo "<a href=" . $filedir . ">File</a>";

			?>

		<?php endwhile; endif; ?>

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
			<h1><?php the_title(); ?></h1>
		
			<p><?php the_content(); ?></p>
		
		<?php endwhile; else : ?>
		
			<p><?php _e("Sorry, no pages matched your criteria"); ?></p>
		
		<?php endif; ?>

		<?php if( is_page(11) ) : ?>

			<div class="people-wrap">

				<div class="people-block">
					<a href="<?php echo site_url(); ?>/resources/applicants" class="flaticon-application fi">Абітурієнти</a>
				</div>

				<div class="people-block">
					<a href="<?php echo site_url(); ?>/resources/undergraduate" class="flaticon-student-on-computer fi">Бакалаври</a>
				</div>

				<div class="people-block">
					<a href="<?php echo site_url(); ?>/resources/graduate" class="flaticon-female-graduate-student fi">Магістри</a>
				</div>

				<div class="people-block">
					<a href="<?php echo site_url(); ?>/resources/about-graduate" class="flaticon-looking-for-students fi">Аспіранти</a>
				</div>

			</div>

		<?php endif; ?>

	</div>

 <?php get_footer(); ?>