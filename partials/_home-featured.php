<?php if ( have_rows( 'highlights', 'option' ) ) : ?>
    <div class="bg-white">

        <div class="grid-container">
            <div class="grid-x grid-margin-x">
                <?php
                $num_rows = count( get_field( 'highlights', 'option' ) );
                if ( $num_rows === 1 ) :
                    $class = 'highlights__count__1';
                elseif ( $num_rows === 2 ):
                    $class = 'highlights__count__2';
                elseif ( $num_rows === 3 ):
                    $class = 'highlights__count__3';
                endif;

                ?>
                <?php $c = 0; ?>
                <?php while ( have_rows( 'highlights', 'option' ) ) : the_row(); ?>
                    <?php /* highlight-bg-green highlight-bg-blue highlight-bg-yellow highlight-bg-red */ ?>
                    <div class="cell highlight-container grid-y align-middle align-right
                        <?= 'highlight-bg-' . get_sub_field( 'background_color' ); ?>
                        <?= $class ?>
                        <?= $num_rows === 3 ? 'medium-6 large-auto' : 'medium-auto'; ?>
                       "
                    >
                        <div class="highlight-container__inner">
                            <?php $image = get_sub_field('image'); ?>

                            <a href="<?= get_sub_field( 'link' ); ?>" class="flex grid-x align-middle text-center
                                <?= $num_rows !== 3 ? 'medium-text-left' : ''; ?>
                                ">
                                <div class="cell small-12
                                            <?= $num_rows !== 3 ? 'medium-3' : ''; ?>
                                           ">
                                    <img src="<?= $image['sizes']['thumbnail']; ?>" alt="<?= get_sub_field( 'title' ); ?>">
                                </div>

                                <div class="cell small-12
                                            <?= $num_rows !== 3 ? 'medium-9' : ''; ?>
                                           ">
                                    <?= get_sub_field( 'title' ); ?>
                                </div>
                            </a>
                        </div>

                        <div class="cell shrink">
                            <a class="button grey"
                               href="<?= get_sub_field( 'button_link' ); ?>"><?= get_sub_field( 'button_text' ); ?></a>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
<?php endif; ?>
