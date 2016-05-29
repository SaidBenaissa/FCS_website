<?php
/**
 * Page displaying all News Archive.
 *
 * Template Name: News Archive
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

</div>

<?php

	$args = array(
			'post_type' => 'new'
			);
	$query = new WP_Query( $args );

?>
	
<?php if($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

<div class="news_piece">
	
	<div class="new_block">
		
		<?php the_post_thumbnail('thumbnail'); ?>
		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		
	</div>
	
</div>

<?php endwhile; endif; wp_reset_postdata(); ?>

<?php get_footer(); ?>