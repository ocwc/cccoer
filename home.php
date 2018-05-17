<?php get_header(); ?>

<div class="row text-center align-center subheading-nobg">
    <div class="small-12 columns">
        <h1 class="subheading-nobg-h1"><?php the_field( 'homepage_header_title', 'options' ); ?></h1>
    </div>

    <div class="small-10 columns">
        <p class="subheading-p"><?php the_field( 'homepage_header_text', 'options' ); ?></p>
        <?php if ( have_rows( 'home_buttons', 'option' ) ) : ?>
            <?php while ( have_rows( 'home_buttons', 'option' ) ) : the_row(); ?>
                <a href="<?php the_sub_field( 'link' ); ?>" class="button hollow text-uppercase"><?php the_sub_field( 'name' ); ?></a>
            <?php endwhile; ?>
        <?php else : ?>
            <?php // no rows found ?>
        <?php endif; ?>
    </div>
</div>


<!-- original content goes in this container -->
<div class="off-canvas-content" data-off-canvas-content>

    <?php get_template_part('partials/_home', 'boxbar'); ?>

    <div class="home-collage">
        <div class="row align-center">
            <h3 class="u-color-white">News &amp; Webinars</h3>
        </div>

        <div class="collage row">
            <?php $homepage_posts = get_homepage_posts(); ?>
            <?php while ( $homepage_posts->have_posts() ) : $homepage_posts->the_post(); ?>
                <?php get_template_part( 'partials/_card', 'homepage' ); ?>
            <?php endwhile; ?>
        </div>

        <div class="row align-center">
            <div class="medium-3 columns">
                <a href="/archives/" class="button hollow expanded white text-uppercase">View News Archives</a>
            </div>
            <div class="medium-3 columns">
                <a href="/webinar/" class="button hollow expanded white text-uppercase">View All Webinars</a>
            </div>
        </div>
    </div>

    <div class="home-info">
        <div class="row align-center">
            <div class="column grow text-center">
                <h3 class="u-color-white">Case Studies</h3>
            </div>
        </div>

        <div class="row">
            <?php $casestudy_posts = new WP_Query( array( 'post_type' => 'casestudy' ) ); ?>
            <?php while ( $casestudy_posts->have_posts() ) : $casestudy_posts->the_post(); ?>
                <?php get_template_part( 'partials/_card', 'casestudy' ); ?>
            <?php endwhile; ?>
        </div>
    </div>

    <div class="home-social">
        <div class="row align-center">
            <div class="small-12 columns text-center">
                <span class="text-upperace">Follow our social media pages</span>
            </div>

            <div class="small-12 columns home-social-icons text-center">
                <a href="https://twitter.com/cccoer"><img
                        src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-tw2.svg"/></a>
                <!-- <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-fb2.svg" /></a> -->
                <!-- <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-slideshare.svg" /></a> -->
                <a href="https://www.youtube.com/playlist?list=PLze0jtuKTgpFV4M27-g6YojfSMXxIOeVd"><img
                        src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-youtube.svg"/></a>
            </div>
        </div>
        <div class="row">
            <div class="small-12 columns text-center home-social-cta">
                <p class="text-uppercase">Tweet with us by using #CCCOER</p>
            </div>

            <?php foreach ( get_cccoer_tweets() as $tweet ) : ?>
                <div class="small-12 medium-3 columns">
                    <?php echo do_shortcode( "[tweet id='$tweet']" ); ?>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="row align-center home-social-divider">
            <div class="small-2 columns">
                <hr/>
            </div>
        </div>
    </div>

    <?php /*
    <?php if ( have_rows('home_partners', 'options') ) : ?>
        <div class="home-partners">
            <div class="row align-center">
                <div class="small-12 columns text-center home-partners-title">
                    <p class="text-uppercase">Partners</p>
                </div>

                <?php while ( have_rows('home_partners', 'options') ) : the_row(); ?>
                    <div class="columns shrink">
                        <a href="<?php the_sub_field('url'); ?>">
                            <img src="<?php echo get_sub_field('logo')['url']; ?>" alt="<?php the_sub_field('name'); ?>" />
                        </a>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    <?php endif; ?>
    */ ?>
    <!-- </div> -->

    <?php get_footer(); ?>
