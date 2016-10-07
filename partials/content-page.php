<?php if ( get_field('header_image') ) : ?>
    <div class="subheading-bluebg subheading-imagebg" style="background-image: url('<?php echo get_field('header_image')['sizes']['background-poster']; ?>');">
    </div>
<?php else : ?>
    <div class="subheading-bluebg">
        <div class="row">
            <h1 class="post-title-top u-color-white"><?php the_title(); ?></h1>
        </div>
    </div>
<?php endif; ?>

<!-- original content goes in this container -->
<div

    <?php if ( get_field('header_image') ) : ?>
        class="off-canvas-content subheading-image"
    <?php else : ?>
        class="off-canvas-content subheading-narrow"
    <?php endif; ?>

    data-off-canvas-content
    >

    <?php if ( get_field('header_image_attribution' ) ) : ?>
        <div class="row align-center">
            <div class="small-12 columns post-title-container">
                <?php if ( get_field('header_image_attribution' ) ) : ?>
                    <a href="<?php the_field('header_image_url'); ?>" class="subheading-image-attribution hide-for-small-only"><?php the_field('header_image_attribution'); ?> <i class="icon-camera"></i></a>
                <?php endif; ?>
            </div>
        </div>
    <?php endif; ?>


    <?php if ( get_field('highlight_text') ) : ?>
        <div class="post-highlight row <?php echo 'u-background-' . get_field('highlight_background_color'); ?>">
            <?php the_field('highlight_text'); ?>
        </div>
    <?php endif; ?>

    <div class="post-content post-content-single post-content-previous-highlight row">

        <div class="">
            <div class="small-12 columns post-content-body">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</div>
