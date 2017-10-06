<?php get_header(); ?>

<div class="subheading-bluebg">
    <div class="row">
        <h1 class="post-title-top u-color-white">CCCOER 10th Anniversary Retrospectives</h1>
    </div>
</div>

<div class="off-canvas-content subheading-narrow">
    <div class="post-content post-content-single grid-container">
        <div class="post-content-body">
            <?php if ( have_posts() ) : ?>
                <div class="grid-x grid-margin-x">
                    <?php $count = 1; ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <?php get_template_part( 'partials/_card', 'quote' ); ?>
                        <?php if ( $count % 4 === 0 ) : ?>
                            <div class="clearfix hide-for-small"></div>
                        <?php endif; ?>
                        <?php $count++; ?>
                    <?php endwhile; ?>
                </div>

                <div class="cell expanded text-center">
                    <?php get_template_part('partials/_pagination'); ?>
                </div>


            <?php else : ?>
                <?php get_template_part( 'partials/content', 'none' ); ?>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
