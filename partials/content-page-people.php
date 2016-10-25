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

        <?php if ( have_rows( 'people' ) ) : ?>
            <div class="post-content-people row">
                <?php $previous_role = ''; ?>

                <?php while ( have_rows( 'people' ) ) : the_row(); ?>
                    <?php $role = get_sub_field('role'); ?>
                    <?php if ( $previous_role !== $role ) : ?>
                        <div class="text-center small-12 columns">
                            <h3><?php the_sub_field('role'); ?></h3>
                        </div>
                    <?php endif; ?>
                    <?php $previous_role = $role ; ?>

                    <?php get_template_part('partials/_person'); ?>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
<!-- </div> -->
