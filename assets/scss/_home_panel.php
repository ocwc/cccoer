<?php if ( have_rows('home_panel', 'options') ) : ?>
    <div class="home-info">
        <div class="row">
            <?php while ( have_rows('home_panel', 'options') ) : the_row(); ?>
                <div class="small-12 medium-6 columns home-info-tile">
                    <h2 class="home-info-title"><?php the_sub_field('title'); ?></h2>
                    <p><?php the_sub_field('description'); ?></p>
                    <a href="<?php the_sub_field('url'); ?>" class="button green-light no-radius text-uppercase">Learn more</a>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
<?php endif; ?>
