<?php
/**
* News Category Template
*/
?>

<?php get_header(); ?>

<?php

	$args = array(
			'post_type' => 'new'
			);
	$query = new WP_Query( $args );

?>

<div class="news-wrap clearfix">

	<?php

		$categories = get_categories();

		$slugs = explode('/', get_query_var('category_name'));
		$currentCategory = get_category_by_slug('/'.end($slugs));

		if($query->have_posts()) : while ($query->have_posts()) : $query->the_post();

			$postCategories = get_the_category();

			foreach ($postCategories as $postCategory ) {
				if ($postCategory->term_id != $currentCategory->term_id) continue;

				?>

				<div class="news-piece-block <?php the_field('type'); ?>">

					<div class="new_block">

						<?php the_post_thumbnail('medium'); ?>
						<div class="news-piece-block-text-wrapper">
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							<p class="new-excerpt"><?php the_field('excerpt'); ?></p>
						</div>

					</div>

				</div>

				<?php
			}

		endwhile;
		endif;

	?>

</div>

<?php get_footer(); ?>