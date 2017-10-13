<div class="small-12 medium-6 large-3 columns">
    <div class="card-boxy card-casestudy">
        <a class="flex-container flex-dir-column" href="<?php the_permalink(); ?>">
            <div class="card-casestudy__image clearfix">
                <?php echo get_the_post_thumbnail(); ?>
            </div>
            <div class="card-white">
                <div class="card-title">
                      <?php the_title(); ?>
                </div>
            </div>
        </a>
    </div>
</div>
