<div class="row align-center">
    <div class="small-12 columns post-title-container">
        <!-- <h1 class="post-title u-color-white"><?php the_title(); ?></h1> -->

        <?php if ( get_field('header_image_attribution' ) ) : ?>
            <a href="<?php the_field('header_image_url'); ?>" class="subheading-image-attribution hide-for-small-only"><?php the_field('header_image_attribution'); ?> <i class="icon-camera"></i></a>
        <?php endif; ?>
    </div>
</div>
