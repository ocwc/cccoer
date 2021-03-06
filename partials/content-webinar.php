<div class="subheading-bluebg subheading-iconbg">
    <div class="row">
        <div class="small-12 columns">
            <img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-webinar.svg" class="subheading-background-icon" />
        </div>
    </div>
</div>

<!-- original content goes in this container -->
<div class="off-canvas-content subheading-image" data-off-canvas-content>
    <div class="row align-center">
        <div class="small-12 columns post-title-container">
            <h1 class="post-title u-color-white"><?php the_title(); ?></h1>
            <!-- <span class="subheading-published"><i class="icon-camera"></i> Published on August 18 2016</span> -->
        </div>
    </div>
    <div class="post-content post-content-single post-content-left-meta row">
        <div class="small-12 medium-1 columns">
        </div>
        <div class="small-12 medium-11 columns post-content-body">
            <?php if ( get_field('webinar_youtube') ) : ?>
                <?php echo wp_oembed_get(get_field('webinar_youtube')); ?>
            <?php endif; ?>

            <?php the_content(); ?>

            <?php if ( get_field('webinar_slideshare') ) : ?>
                <h2><strong>Slides now available:</strong></h2>
                <?php echo wp_oembed_get(get_field('webinar_slideshare')); ?>
            <?php endif; ?>

            <?php /*
            <div class="post-category">
                <i class="icon-tag-1"></i> Categories: <a href="#">OER</a>, <a href="#">Open Educational Resources</a>, <a href="#">Webinar</a>
            </div>
            */ ?>
        </div>
    </div>
<!-- </div> -->
