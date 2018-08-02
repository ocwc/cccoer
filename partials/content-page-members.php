<script src='https://api.mapbox.com/mapbox-gl-js/v0.47.0/mapbox-gl.js'></script>
<link href='https://api.mapbox.com/mapbox-gl-js/v0.47.0/mapbox-gl.css' rel='stylesheet'/>

<script>mapboxgl.accessToken = '<?= MAP_TOKEN; ?>'</script>
<?php
$members = get_cccoer_members();
$states  = array_unique( array_column( $members, 'state' ) );
$letters = array();
foreach ( $states as $state ) {
    $letter = $state[0];
    if ( ! in_array( $letter, $letters ) ) {
        $letters[] = $letter;
    }
}
?>

<?php if ( get_field( 'header_image' ) ) : ?>
    <div class="subheading-bluebg subheading-imagebg"
         style="background-image: url('<?php echo get_field( 'header_image' )['sizes']['background-poster']; ?>');">
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

    <?php if ( get_field( 'header_image' ) ) : ?>
        class="off-canvas-content subheading-image"
    <?php else : ?>
        class="off-canvas-content subheading-narrow"
    <?php endif; ?>

    data-off-canvas-content
>
    <?php get_template_part( 'partials/_header_image' ); ?>

    <div class="post-content post-content-single row">
        <div class="small-12 columns post-content-body">
            <div class="row collapse">
                <div class="small-12 medium-8 columns">
                    <div id="members-map"></div>
                </div>
                <div class="small-12 medium-4 columns members-counter text-center text-uppercase">
                    <h1><b><?= count( $members ); ?> members</b><br/><b><?= count( $states ); ?> states</b></h1>
                </div>
            </div>

            <div class="row members-toc">
                <div class="small-12 columns text-center">
                    <?php foreach ( range( 'A', 'Z' ) as $letter ) : ?>
                        <a
                            class="button primary small"
                            href="#<?= $letter; ?>"
                            <?= ! in_array( $letter, $letters ) ? 'disabled' : '' ?>
                        ><?= $letter; ?></a>
                    <?php endforeach; ?>
                </div>
            </div>


            <div class="row">
                <?php $state = null; ?>
                <?php $current_letter = ''; ?>
                <?php foreach ( $members as $member ) : ?>
                    <?php if ( $current_letter !== $state[0] ): ?>
                        <?php $current_letter = $state[0]; ?>
                        <a name="<?= $current_letter; ?>" class="member-toc-target"></a>
                    <?php endif; ?>

                    <?php if ( $member->state !== $state ) : ?>
                        <div class="small-12 columns">
                            <h2 class="member-state-title"><?php echo $member->state; ?></h2>
                        </div>
                        <?php $state = $member->state; ?>
                    <?php endif; ?>


                    <div class="small-3 columns members-single-member text-center">
                        <?php
                        $link = null;
                        if ( $member->ocw_website ) {
                            $link = $member->ocw_website;
                        } elseif ( $member->main_website ) {
                            $link = $member->main_website;
                        }
                        ?>
                        <?php if ( $link ) : ?>
                            <a href="<?= $link ?>">
                                <img class="member-logo"
                                     src="https://members.oeconsortium.org/<?php echo $member->logo_large; ?>"
                                     alt="<?php echo $member->name; ?> logo">
                            </a>
                        <?php else: ?>
                            <img class="member-logo"
                                 src="https://members.oeconsortium.org/<?php echo $member->logo_large; ?>"
                                 alt="<?php echo $member->name; ?> logo">
                        <?php endif; ?>

                        <?php if ( $link ) : ?>
                            <a class="member-name" href="<?= $link; ?>"><?php echo $member->name; ?></a>
                        <?php else : ?>
                            <span class="member-name"><?php echo $member->name; ?></span>
                        <?php endif; ?>
                        <br/><br/>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <!-- </div> -->
