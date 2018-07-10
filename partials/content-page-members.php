<?php $members = get_cccoer_members(); ?>

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
    <?php get_template_part('partials/_header_image'); ?>

    <div class="post-content post-content-single row">
        <div class="small-12 columns post-content-body">
            <?php the_content(); ?>

            <div class="row">
                <?php $state = null; ?>
                <?php foreach ($members as $member) : ?>
                    <?php if ( $member->state !== $state ) : ?>
                        <div class="small-12 columns">
                            <h2 class="member-state-title"><?php echo $member->state; ?></h2>
                        </div>
                        <?php $state = $member->state; ?>
                    <?php endif; ?>


                        <div class="small-3 columns members-single-member text-center">
                            <?php if ( $member->logo_large ) : ?>
                                <a href="<?php echo $member->main_website; ?>   ">
                                    <img class="member-logo" src="https://members.oeconsortium.org/<?php echo $member->logo_large; ?>" alt="<?php echo $member->name; ?> logo">
                                </a>
                            <?php endif; ?>

                            <?php if ( $member->main_website ) : ?>
                                <a class="member-name" href="<?php echo $member->main_website; ?>"><?php echo $member->name; ?></a>
                            <?php else : ?>
                                <span class="member-name"><?php echo $member->name; ?></span>
                            <?php endif; ?>
                            <br /><br />
                        </div>

                    <?php ///var_dump($member); ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
<!-- </div> -->
