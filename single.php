<?php get_header(); ?>

<div id="post-<?php the_ID(); ?>" <?php post_class( 'class-name' ); ?>>
    <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

        <?php the_content(); ?>

    <?php endwhile; endif; wp_reset_postdata(); ?>
</div>

<?php comments_template(); ?> 

<?php get_footer(); ?>