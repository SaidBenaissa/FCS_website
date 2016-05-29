<?php
/**
 * Page displaying all Students Archive.
 *
 * Template Name: Students Archive
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

		$defaults = array(
			'container' => false,
			'theme_location' => 'people-page-side-menu',
			'menu_class' => 'side-menu'
		);

		wp_nav_menu($defaults);

	?>

	<?php

		$args = array(
				'post_type' => 'student',
				'meta_key'	=> 'course',
				'orderby'	=> 'meta_value_num',
				'order'		=> 'ASC'
				);
		$query = new WP_Query( $args );

	?>

	<h3>Бакалаврат</h3>

	<h5>Програмна інженерія</h5>

	<div class="people-wrap clearfix">

		<?php $counter = 1; ?>
		
		<?php if($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

			<?php if(get_post_meta(get_the_ID(), 'speciality', true) == 'software_engineering') : ?>

			<?php if($counter%3==1) echo '<div class="people-3-wrap clearfix">'; ?>

				<div class="people-block">

					<?php the_field('avatar'); ?>
					<p class="people-name student-name"><?php the_title(); ?></p>
					<p class="student-course">Курс: <?php the_field('course'); ?></p>

					<?php if(get_post_meta($post->ID, 'telephone_number', true) != '') : ?>
						<p class="student-telephone-number">Номер телефону: <?php the_field('telephone_number'); ?></p>
					<?php endif; ?>

					<?php if(get_post_meta($post->ID, 'e-mail', true) != '') : ?>
						<p class="student-e-mail">E-mail: <?php the_field('e-mail'); ?></p>
					<?php endif; ?>
						
				</div>

			<?php $counter++; if($counter%3==1) echo '</div>'; ?>

			<?php endif; ?>

		<?php endwhile; endif; wp_reset_postdata(); ?>

		<?php if($counter%3!=1) echo '</div>'; ?>

	</div>

	<h5>Прикладна математика</h5>

	<div class="people-wrap clearfix">

		<?php $counter = 1; ?>
		
		<?php if($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

			<?php if(get_post_meta(get_the_ID(), 'speciality', true) == 'applied_mathematics') : ?>

			<?php if($counter%3==1) echo '<div class="people-3-wrap clearfix">'; ?>

				<div class="people-block">

					<?php the_field('avatar'); ?>
					<p class="student-name"><?php the_title(); ?></p>
					<p class="student-course">Курс: <?php the_field('course'); ?></p>

					<?php if(get_post_meta($post->ID, 'telephone_number', true) != '') : ?>
						<p class="student-telephone-number">Номер телефону: <?php the_field('telephone_number'); ?></p>
					<?php endif; ?>

					<?php if(get_post_meta($post->ID, 'e-mail', true) != '') : ?>
						<p class="student-e-mail">E-mail: <?php the_field('e-mail'); ?></p>
					<?php endif; ?>
						
				</div>

			<?php $counter++; if($counter%3==1) echo '</div>'; ?>

			<?php endif; ?> 

		<?php endwhile; endif; wp_reset_postdata(); ?>

		<?php if($counter%3!=1) echo '</div>'; ?>

	</div>

	<h5>Інформатика</h5>

	<div class="people-wrap clearfix">

		<?php $counter = 1; ?>
		
		<?php if($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

			<?php if(get_post_meta(get_the_ID(), 'speciality', true) == 'computer_sciences') : ?>

			<?php if($counter%3==1) echo '<div class="people-3-wrap clearfix">'; ?>

				<div class="people-block">

					<?php the_field('avatar'); ?>
					<p class="student-name"><?php the_title(); ?></p>
					<p class="student-course">Курс: <?php the_field('course'); ?></p>

					<?php if(get_post_meta($post->ID, 'telephone_number', true) != '') : ?>
						<p class="student-telephone-number">Номер телефону: <?php the_field('telephone_number'); ?></p>
					<?php endif; ?>

					<?php if(get_post_meta($post->ID, 'e-mail', true) != '') : ?>
						<p class="student-e-mail">E-mail: <?php the_field('e-mail'); ?></p>
					<?php endif; ?>
						
				</div>

			<?php $counter++; if($counter%3==1) echo '</div>'; ?>

			<?php endif; ?>

		<?php endwhile; endif; wp_reset_postdata(); ?>

		<?php if($counter%3!=1) echo '</div>'; ?>

	</div>

	<h3>Магістеріум</h3>

	<h5>Інформаційні управляючі системи та технології</h5>

	<div class="people-wrap clearfix">

		<?php $counter = 1; ?>
		
		<?php if($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

			<?php if(get_post_meta(get_the_ID(), 'speciality', true) == 'information_control_systems_and_technologies') : ?>

			<?php if($counter%3==1) echo '<div class="people-3-wrap clearfix">'; ?>

				<div class="people-block">

					<?php the_field('avatar'); ?>
					<p class="student-name"><?php the_title(); ?></p>
					<p class="student-course">Курс: <?php the_field('course'); ?></p>

					<?php if(get_post_meta($post->ID, 'telephone_number', true) != '') : ?>
						<p class="student-telephone-number">Номер телефону: <?php the_field('telephone_number'); ?></p>
					<?php endif; ?>

					<?php if(get_post_meta($post->ID, 'e-mail', true) != '') : ?>
						<p class="student-e-mail">E-mail: <?php the_field('e-mail'); ?></p>
					<?php endif; ?>
						
				</div>

			<?php $counter++; if($counter%3==1) echo '</div>'; ?>

			<?php endif; ?>

		<?php endwhile; endif; wp_reset_postdata(); ?>

		<?php if($counter%3!=1) echo '</div>'; ?>

	</div>

	<h5>Програмне забезпечення систем</h5>

	<div class="people-wrap clearfix">

		<?php $counter = 1; ?>
		
		<?php if($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

			<?php if(get_post_meta(get_the_ID(), 'speciality', true) == 'software_systems') : ?>

			<?php if($counter%3==1) echo '<div class="people-3-wrap clearfix">'; ?>

				<div class="people-block">

					<?php the_field('avatar'); ?>
					<p class="student-name"><?php the_title(); ?></p>
					<p class="student-course">Курс: <?php the_field('course'); ?></p>

					<?php if(get_post_meta($post->ID, 'telephone_number', true) != '') : ?>
						<p class="student-telephone-number">Номер телефону: <?php the_field('telephone_number'); ?></p>
					<?php endif; ?>

					<?php if(get_post_meta($post->ID, 'e-mail', true) != '') : ?>
						<p class="student-e-mail">E-mail: <?php the_field('e-mail'); ?></p>
					<?php endif; ?>
						
				</div>

			<?php $counter++; if($counter%3==1) echo '</div>'; ?>

			<?php endif; ?>

		<?php endwhile; endif; wp_reset_postdata(); ?>

		<?php if($counter%3!=1) echo '</div>'; ?>

	</div>

	<h5>Системи і методи прийняття рішень</h5>

	<div class="people-wrap clearfix">

		<?php $counter = 1; ?>
		
		<?php if($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

			<?php if(get_post_meta(get_the_ID(), 'speciality', true) == 'systems_and_methods_of_decision_making') : ?>

			<?php if($counter%3==1) echo '<div class="people-3-wrap clearfix">'; ?>

				<div class="people-block">

					<?php the_field('avatar'); ?>
					<p class="student-name"><?php the_title(); ?></p>
					<p class="student-course">Курс: <?php the_field('course'); ?></p>

					<?php if(get_post_meta($post->ID, 'telephone_number', true) != '') : ?>
						<p class="student-telephone-number">Номер телефону: <?php the_field('telephone_number'); ?></p>
					<?php endif; ?>

					<?php if(get_post_meta($post->ID, 'e-mail', true) != '') : ?>
						<p class="student-e-mail">E-mail: <?php the_field('e-mail'); ?></p>
					<?php endif; ?>
						
				</div>

			<?php $counter++; if($counter%3==1) echo '</div>'; ?>

			<?php endif; ?>

		<?php endwhile; endif; wp_reset_postdata(); ?>

		<?php if($counter%3!=1) echo '</div>'; ?>

	</div>

	<h5>Прикладна математика</h5>

	<div class="people-wrap clearfix">

		<?php $counter = 1; ?>
		
		<?php if($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

			<?php if(get_post_meta(get_the_ID(), 'speciality', true) == 'applied_mathematics_m') : ?>

			<?php if($counter%3==1) echo '<div class="people-3-wrap clearfix">'; ?>

				<div class="people-block">

					<?php the_field('avatar'); ?>
					<p class="student-name"><?php the_title(); ?></p>
					<p class="student-course">Курс: <?php the_field('course'); ?></p>

					<?php if(get_post_meta($post->ID, 'telephone_number', true) != '') : ?>
						<p class="student-telephone-number">Номер телефону: <?php the_field('telephone_number'); ?></p>
					<?php endif; ?>

					<?php if(get_post_meta($post->ID, 'e-mail', true) != '') : ?>
						<p class="student-e-mail">E-mail: <?php the_field('e-mail'); ?></p>
					<?php endif; ?>
						
				</div>

			<?php $counter++; if($counter%3==1) echo '</div>'; ?>

			<?php endif; ?> 

		<?php endwhile; endif; wp_reset_postdata(); ?>

		<?php if($counter%3!=1) echo '</div>'; ?>

	</div>

</div>

<?php get_footer(); ?>