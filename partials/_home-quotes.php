<div class="home-quotes">
    <div class="grid-container">
        <div class="grid-x grid-margin-x align-center">
            <div class="cell expanded text-center home-quotes-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/images/10years-logo.png"
                     alt="CCCOER 10 Year Anniversary"/>
            </div>
            <div class="cell expanded medium-10">
                <h4>10-Year Anniversary Retrospectives</h4>



                <div class="grid-x grid-margin-x">
                    <?php $quote_posts = new WP_Query( array(
                        'post_type' => 'retrospective',
                        'posts_per_page' => 1,
                    ) ); ?>
                    <?php while ( $quote_posts->have_posts() ) : $quote_posts->the_post(); ?>
                        <?php $post_id = $post->ID; ?>
                        <?php get_template_part( 'partials/_card', 'quote' ); ?>
                    <?php endwhile; ?>


                    <?php $quote_posts = new WP_Query( array(
                        'post_type' => 'retrospective',
                        'posts_per_page' => 2,
                        'post__not_in' => array($post_id),
                        'orderby' => 'rand'
                    ) ); ?>
                    <?php while ( $quote_posts->have_posts() ) : $quote_posts->the_post(); ?>
                        <?php get_template_part( 'partials/_card', 'quote' ); ?>
                    <?php endwhile; ?>
                </div>
            </div>
            <div class="cell expanded text-center">
                <a href="/retrospective/" class="button secondary home-quotes-button">Browse Retrospectives</a>
            </div>
        </div>
    </div>
</div>
