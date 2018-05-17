<div class="boxbar-container">
    <div class="grid-container">
        <?php if ( have_rows( 'home_boxbar', 'option' ) ) : ?>
            <?php $c = 1; ?>

            <div class="grid-x grid-margin-x">
                <?php while ( have_rows( 'home_boxbar', 'option' ) ) : the_row(); ?>
                    <div class="medium-6 cell clearfix boxbar boxbar-<?= $c; ?>">
                        <h4><?php the_sub_field( 'title' ); ?></h4>
                        <?php the_sub_field( 'text' ); ?>

                        <a href="<?php the_sub_field( 'link' ); ?>"
                           class="button <?= $c === 1 ? '' : 'green' ?>"
                        ><?php the_sub_field( 'button_text' ); ?></a>
                    </div>
                    <?php $c ++; ?>
                <?php endwhile; ?>
            </div>
        <?php else : ?>
            <?php // no rows found ?>
        <?php endif; ?>
    </div>
</div>
