<?php
/*
 * Template Name: Media Page
 */
 ?>

 <?php get_header(); ?>

	<div class="page-content">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
			<p><?php the_content(); ?></p>
		
		<?php endwhile; else : ?>
		
			<p><?php _e("Sorry, no pages matched your criteria"); ?></p>
		
		<?php endif; ?>

		<div class="show-side-menu-btn"></div>
	
		<?php

			$defaults = array(
				'container' => false,
				'theme_location' => 'news-page-side-menu',
				'menu_class' => 'side-menu'
			);

			wp_nav_menu($defaults);

		?>

		<?php

			$args = array(
					'post_type' => 'new'
					);
			$query = new WP_Query( $args );

		?>

    	<div class="news-wrap clearfix">
			
			<?php if($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

				<?php $page = get_post_meta($post->ID, 'page', true); ?>

				<?php if ( $page == 'media' ) : ?>

					<div class="news-piece-block <?php the_field('type'); ?>">
		                    
		                <?php the_post_thumbnail('medium'); ?>
		                <div class="news-piece-block-text-wrapper">
		                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		                    <?php the_field('excerpt'); ?>
		                </div>
		                
		            </div>

		        <?php endif; ?>

			<?php endwhile; endif; wp_reset_postdata(); ?>

		</div>

	</div>

 <?php get_footer(); ?>