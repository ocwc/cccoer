<?php
/*
    Template name: Page - Members List
*/
?>
<?php get_header(); ?>

    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'partials/content', 'page-members' ); ?>
            <?php the_posts_navigation(); ?>
        <?php endwhile; ?>
    <?php else : ?>
        <?php get_template_part( 'partials/content', 'none' ); ?>
    <?php endif; ?>

<?php
get_sidebar();
get_footer();

