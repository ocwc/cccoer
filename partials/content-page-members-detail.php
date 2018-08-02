<?php $member = get_cccoer_member_detail(); ?>

<div class="subheading-bluebg">
    <div class="row">
        <h1 class="post-title-top u-color-white"><?= $member->name; ?></h1>
    </div>
</div>


<!-- original content goes in this container -->
<div

    <?php if ( get_field( 'header_image' ) ) : ?>
        class="off-canvas-content subheading-image"
    <?php else : ?>
        class="off-canvas-content subheading-narrow"
    <?php endif; ?>

    data-off-canvas-content
>
    <?php if ( get_field( 'highlight_text' ) ) : ?>
        <div class="post-highlight row <?php echo 'u-background-' . get_field( 'highlight_background_color' ); ?>">
            <?php the_field( 'highlight_text' ); ?>
        </div>
    <?php endif; ?>

    <div class="post-content post-content-single row">
        <div class="small-12 columns post-content-body">
            <div class="row">
                <div class="small-12 medium-4 columns">
                    <img class="member-logo"
                         src="<?= $member->logo_large; ?>"
                         alt="<?php echo $member->name; ?> logo"/>
                </div>
                <div class="small-12 medium-8 columns">
                    <p>
                        <?= nl2br( $member->description ); ?>
                    </p>

                    <p>
                        <?php if ( $member->ocw_website ) : ?>
                            <strong>OER/OCW Website:</strong> <a href="<?php echo $member->ocw_website; ?>"
                                                                 target="_blank"><?php echo $member->ocw_website ?></a>
                            <br/>
                        <?php endif; ?>
                        <?php if ( $member->main_website ) : ?>
                            <strong>Institution Website:</strong> <a href="<?php echo $member->main_website; ?>"
                                                                     target="_blank"><?php echo $member->main_website ?></a>
                            <br/>
                        <?php endif; ?>
                    </p>

                    <?php if ( $member->initiative_description1 ) : ?>
                        <h3><?= $member->initiative_title1 ?></h3>
                        <p>
                            <?= $member->initiative_description1 ?>
                            <?php if ( $member->initiative_url1 ) : ?>
                                <br/><a class="button" href="<?= $member->initiative_url1; ?>">View
                                    Initiative</a>
                            <?php endif; ?>
                            <br/><br/>
                        </p>
                    <?php endif; ?>

                    <?php if ( $member->initiative_description2 ) : ?>
                        <h3><?= $member->initiative_title2 ?></h3>
                        <p>
                            <?= $member->initiative_description2 ?>
                            <?php if ( $member->initiative_url2 ) : ?>
                                <br/><a class="button" href="<?= $member->initiative_url2; ?>">View
                                    Initiative</a>
                            <?php endif; ?>
                            <br/><br/>
                        </p>
                    <?php endif; ?>

                    <?php if ( $member->initiative_description3 ) : ?>
                        <h3><?= $member->initiative_title3 ?></h3>
                        <p>
                            <?= $member->initiative_description3 ?>
                            <?php if ( $member->initiative_url3 ) : ?>
                                <br/><a class="button" href="<?= $member->initiative_url3; ?>">View
                                    Initiative</a>
                                <br/><br/>
                            <?php endif; ?>
                        </p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
