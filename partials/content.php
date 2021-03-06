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
			<span class="subheading-published"><i class="icon-camera"></i> Published on <?php the_date(); ?></span>
		</div>
	</div>
	<div class="post-content post-content-single post-content-left-meta row">
		<div class="small-12 medium-1 columns">
			<div class="post-avatar text-center">
				<span class="post-avatar-postedby">Posted by</span>
                <span class="avatar"><?php echo get_avatar( get_the_author_meta( 'ID' ), 48 ); ?></span>

				<span class="post-avatar-author"><?php echo get_the_author(); ?></span>
			</div>

            <?php  /*
			<div class="post-share text-center hide-for-small-only">
				<span class="post-share-text">Share</span>

				<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-fb2.svg" /></a><br />

				<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-tw2.svg" /></a><br />

				<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-mail2.svg" /></a>
			</div>
            */ ?>
		</div>
		<div class="small-12 medium-11 columns post-content-body">
			<?php the_content(); ?>

			<div class="post-category">
				<i class="icon-tag-1"></i> Categories: <a href="#">OER</a>, <a href="#">Open Educational Resources</a>, <a href="#">Webinar</a>
			</div>
		</div>

        <?php  if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;
        ?>
        </div>
	</div>
<!-- </div> -->
