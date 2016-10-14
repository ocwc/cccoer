<?php get_header(); ?>

<div class="subheading-bluebg">
    <div class="row">
        <h1 class="post-title-top u-color-white"><?php the_archive_title(); ?></h1>
    </div>
</div>

<div class="off-canvas-content subheading-narrow">
    <div class="post-content post-content-single row">
        <div class="small-12 columns post-content-body">
            <?php if ( have_posts() ) : ?>
                <div class="row">
                    <?php $count = 1; ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <?php get_template_part('partials/_card', 'webinar'); ?>

                        <?php if ( $count % 4 === 0 ) : ?>
                            <div class="clearfix hide-for-small"></div>
                        <?php endif; ?>
                        <?php $count++; ?>
                    <?php endwhile; ?>
                </div>

                <div class="small-12 columns text-center">
                    <?php get_template_part('partials/_pagination'); ?>
                </div>


            <?php else : ?>
                <?php get_template_part( 'partials/content', 'none' ); ?>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
