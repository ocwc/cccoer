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

    <div class="post-content post-content-single post-content-casestudy-overview
                <?php if ( get_field('highlight_text') ) : ?>
                    post-content-previous-highlight
                <?php endif; ?>
                row">

        <div class="">
            <div class="small-12 columns post-content-body">
                <div class="casestudy__thumbnail">
                    <?php the_post_thumbnail(); ?>
                </div>

                <?php the_field('casestudy_overview'); ?>
            </div>
        </div>
    </div>

    <div class="post-content post-content-single post-content-notop-margin row">
        <div class="small-12 columns post-content-body">
            <?php the_content(); ?>
        </div>
    </div>
</div>
