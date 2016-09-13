<?php $members = get_cccoer_members(); ?>

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

            <div class="row">
                <?php $state = null; ?>
                <?php foreach ($members as $member) : ?>
                    <?php if ( $member->state !== $state ) : ?>
                        <div class="small-12 columns">
                            <h2><?php echo $member->state; ?></h2>
                        </div>
                        <?php $state = $member->state; ?>
                    <?php endif; ?>


                        <div class="small-3 columns">
                            <?php if ( $member->logo_large ) : ?>
                                <img src="https://members.oeconsortium.org/media/<?php echo $member->logo_large; ?>" alt="<?php echo $member->name; ?> logo">
                                <br /><br />
                            <?php endif; ?>

                            <strong><?php echo $member->name; ?></strong>
                        </div>

                    <?php ///var_dump($member); ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
<!-- </div> -->
