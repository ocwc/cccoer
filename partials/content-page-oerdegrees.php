<?php if ( get_field('header_image') ) : ?>
    <div class="subheading-bluebg subheading-imagebg" style="background-image: url('<?php echo get_field('header_image')['sizes']['background-poster']; ?>');">
    </div>
<?php else : ?>
    <div class="subheading-bluebg"></div>
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
    <div class="row align-center">
        <div class="small-12 columns post-title-container">
            <h1 class="post-title u-color-white"><?php the_title(); ?></h1>

            <?php if ( get_field('header_image_attribution' ) ) : ?>
                <a href="<?php the_field('header_image_url'); ?>" class="subheading-image-attribution hide-for-small-only"><?php the_field('header_image_attribution'); ?> <i class="icon-camera"></i></a>
            <?php endif; ?>
        </div>
    </div>
    <div class="post-content post-content-single row">
        <div class="small-12 columns post-content-body">
            <?php the_content(); ?>
        </div>

        <?php if ( have_rows( 'oerdegrees_colleges' ) ) : ?>
            <div class="oerdegrees-colleges row clearfix">
                <div class="small-12 columns post-content row">
                    <h3 class="text-center">Colleges with OER Degrees</h3>
                </div>
                <?php while ( have_rows( 'oerdegrees_colleges' ) ) : the_row(); ?>
                    <div class="medium-4 columns oerdegrees-colleges-single text-center">
                        <img src="<?php echo get_sub_field('image')['sizes']['medium_large']; ?>"
                             alt="<?php echo get_sub_field('image')['name']; ?>" />
                        <br />
                        <h4 class="oerdegrees-colleges-title"><?php the_sub_field('name'); ?></h4>
                        <?php the_sub_field('description'); ?>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>

    <?php if ( have_rows( 'oerdegrees_colleges' ) ) : ?>
<!-- </div> -->
