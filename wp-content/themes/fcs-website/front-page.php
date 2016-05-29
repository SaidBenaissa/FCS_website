<?php 
/*
Template Name: Front page
*/
?>

<?php get_header(); ?>
    
<div class="news-block clearfix">

    <?php

        $args = array(
                'post_type' => 'new'
                );
        $query = new WP_Query( $args );

        $i = 0;

    ?>

    <div class="news-wrap clearfix">

        <div class="news-piece-block wide">
            <h1>Факультет інформатики</h1>
            <p>Інноваційна система освіти з можливістю запису на вибіркові дисципліни і прогресивною студентською спільнотою</p>
        </div>
            
        <?php if($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

            <?php $isHomePage = get_post_meta($post->ID, 'displaying_on_the_home_page', true); ?>

            <?php if ( $isHomePage == true ) : ?>
            
                <div class="news-piece-block <?php the_field('type'); ?>">
                        
                    <?php the_post_thumbnail('medium'); ?>
                    <div class="news-piece-block-text-wrapper">
                        <a href="<?php the_permalink(); ?>" class="news-title"><?php the_title(); ?></a>
                        <?php the_field('excerpt'); ?>
                    </div>
                    
                </div>

            <?php endif; ?>
        
        <?php endwhile; endif; wp_reset_postdata(); ?>

    </div>

</div>

<?php get_footer(); ?>