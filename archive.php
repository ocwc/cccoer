<?php 
/*
Template Name: Archives
*/

get_header(); ?>

<div class="subheading-bluebg">
    <div class="row">
        <h1 class="post-title-top u-color-white"><?php the_archive_title(); ?></h1>
    </div>
</div>

<div class="off-canvas-content subheading-narrow">
    <div class="post-content post-content-single row">
        <div class="small-12 columns post-content-body">
            <?php 
                    $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
                    $posts = new WP_Query(array(
                                'post_type' => 'post',
                                'posts_per_page' => 16,
                                'paged' => $paged
                            ));
            ?>
            <?php if ( $posts->have_posts() ) : ?>
                <div class="row">
                    <?php $count = 1; ?>
                    <?php while ( $posts->have_posts() ) : $posts->the_post(); ?>
                        <?php get_template_part('partials/_card', 'post'); ?>

                        <?php if ( $count % 4 === 0 ) : ?>
                            <div class="clearfix hide-for-small"></div>
                        <?php endif; ?>
                        <?php $count++; ?>
                    <?php endwhile; ?>


                    <?php 
                        global $wp_query;
                        $temp_wp_query = $wp_query;
                        $wp_query = null;
                        $wp_query = $posts;
                    ?>
                    <div class="small-12 columns">
                        <div class="small-12 columns">
                            <p><?php posts_nav_link('', 'Newer Posts', 'Older Posts'); ?></p>
                        </div>
                    </div>
                    <?php 
                        $wp_query = $temp_wp_query;
                    ?>
                        <?php wp_reset_postdata(); ?>
                </div>

            <?php else : ?>
                <?php get_template_part( 'partials/content', 'none' ); ?>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
