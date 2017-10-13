<a href="<?php the_permalink(); ?>" class="home-quotes-card small-auto medium-4 cell">
    <div class="grid-x grid-margin-x">
        <div class="small-5 cell home-quotes-image">
            <?php echo get_the_post_thumbnail($post->ID, 'square'); ?>
        </div>
        <div class="small-7 cell card-title align-self-middle">
            <?php the_title(); ?>
        </div>
    </div>
</a>
