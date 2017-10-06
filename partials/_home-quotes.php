<div class="home-quotes">
    <div class="grid-container">
        <div class="grid-x grid-margin-x align-center">
            <div class="cell expanded text-center home-quotes-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/images/10years-logo.png"
                     alt="CCCOER 10 Year Anniversary"/>
            </div>
            <div class="cell expanded medium-10">
                <p class="intro">CCCOER is a growing consortium of community and technical colleges committed to
                    expanding access to education and increasing student success through adoption of open educational
                    policy, practices, and resources. We are celebrating our 10th Anniversary in 2017-18 with
                    retrospectives from the amazing visionaries, leaders, and members who have contributed to building
                    our community.</p>
                <h4>10-Year Anniversary Retrospectives</h4>

                <div class="grid-x grid-margin-x">
                    <?php $quote_posts = new WP_Query( array( 'post_type' => 'quote' ) ); ?>
                    <?php while ( $quote_posts->have_posts() ) : $quote_posts->the_post(); ?>
                        <?php get_template_part( 'partials/_card', 'quote' ); ?>
                    <?php endwhile; ?>
                </div>
            </div>
            <div class="cell expanded text-center">
                <a href="/quotes/" class="button secondary home-quotes-button">Browse Retrospectives</a>
            </div>
        </div>
    </div>
</div>
