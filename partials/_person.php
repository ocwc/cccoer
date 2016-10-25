<div class="small-12 medium-3 columns">
    <div class="person-image">
        <img src="<?php echo get_sub_field('image')['sizes']['large']; ?>"
             alt="<?php echo get_sub_field('image')['name']; ?>" />
    </div>
    <div class="person-details text-center">
        <strong><?php the_sub_field('name'); ?></strong><br />
        <?php the_sub_field('position'); ?><br />
        <?php the_sub_field('organization'); ?><br />
        <?php the_sub_field('location'); ?>
    </div>
</div>
