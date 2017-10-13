<div class="small-12 medium-3 columns">
    <a href="<?php the_permalink(); ?>" class="card">
        <?php echo get_the_post_thumbnail(); ?>
        <div class="card-section text-uppercase">
            <?php if ( get_post_type() === 'webinar' ) : ?>
                <i class="icon-camera"></i> Webinar
            <?php else : ?>
                <i class="icon-newspaper"></i> News
            <?php endif; ?>
        </div>
        <div class="card-white">
            <div class="card-title">
                <?php the_title(); ?>
            </div>
            <div class="card-meta"><?php the_date('F j, Y');  ?></div>
        </div>
    </a>
</div>
