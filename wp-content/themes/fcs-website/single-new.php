<?php
/**
 * Page displaying Single New Page.
 *
 * @package fcs-website
 */
?>

<?php get_header(); ?>

<div class="page-content">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
		<h1><?php the_title(); ?></h1>
		<?php the_field('images'); ?>
		<p><?php the_field('content'); ?></p>
		
		<hr>
		
		<p>
			<?php previous_post_link(); ?> 
			<a href="<?php bloginfo('url') ?>/news" class="back-to-news-link">Назад до новин</a> 
			<?php next_post_link(); ?>
		</p>
	
	<?php endwhile; endif; ?>

</div>

<?php get_footer(); ?>