<?php get_header(); ?>

<div class="row text-center align-center subheading-nobg">
    <div class="small-12 columns">
        <h1 class="subheading-nobg-h1"><?php the_field('homepage_header_title', 'options'); ?></h1>
    </div>

    <div class="small-10 columns">
        <p class="subheading-p"><?php the_field('homepage_header_text', 'options'); ?></p>

        <a href="#" class="button hollow text-uppercase">More about CCCOER</a>
    </div>
</div>


<!-- original content goes in this container -->
<div class="off-canvas-content" data-off-canvas-content>

    <div class="home-collage">
        <div class="row align-center">
            <div class="medium-3 columns">
                <a href="#" class="button hollow expanded white text-uppercase">View All Blogs</a>
            </div>
            <div class="medium-3 columns">
                <a href="#" class="button hollow expanded white text-uppercase">View All Webinars</a>
            </div>
            <div class="medium-3 columns">
                <a href="#" class="button hollow expanded white text-uppercase">View All Members</a>
            </div>
        </div>

        <div class="collage row">
            <?php foreach(range(0,11) as $i) : ?>
                <div class="small-6 medium-3 columns">
                    <a href="#" class="card">
                        <img class="" src="http://lorempixel.com/g/400/260/" />
                        <div class="card-section text-uppercase">
                            <?php
                                $input = array('<i class="icon-desktop"></i>',
                                               '<i class="icon-newspaper"></i>',
                                               '<i class="icon-user"></i>');
                                echo $input[array_rand($input, 1)];
                            ?>
                            Member Highlights
                        </div>
                        <div class="card-white">
                            <div class="card-title">
                                <?php
                                    $input = array('The AVU Peace Management and Conflict Resolution (PMCR) MOOC',
                                    'URJCx: Abiertos al Conocimiento',
                                    'Online Education Resources are online at MIT',
                                    'Center for Open Education at Hokkaido University',
                                    'Online Education',
                                    'New Webinar',
                                    'The AVU Peace Management and Conflict Resolution (PMCR) MOOC and a much longer title, just in case');

                                    echo $input[array_rand($input, 1)];
                                ?>
                            </div>
                            <div class="card-meta">12 hours ago</div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="row align-center">
            <div class="medium-3 columns">
                <a href="#" class="button hollow expanded white text-uppercase">Load More</a>
            </div>
        </div>
    </div>

    <?php if ( have_rows('home_panel', 'options') ) : ?>
        <div class="home-info">
            <div class="row">
            <?php while ( have_rows('home_panel', 'options') ) : the_row(); ?>
                <div class="small-12 medium-6 columns home-info-tile">
                    <h2 class="home-info-title"><?php the_sub_field('title'); ?></h2>
                    <p><?php the_sub_field('description'); ?></p>
                    <a href="<?php the_sub_field('url'); ?>" class="button green-light no-radius text-uppercase">Learn more</a>
                </div>
            <?php endwhile; ?>
            </div>
        </div>
    <?php endif; ?>

    <div class="home-social">
        <div class="row">
            <div class="small-12 columns text-center home-social-cta">
                <p class="text-uppercase">Tweet with us by using #CCCOER Hashtag</p>
            </div>

            <?php foreach (get_cccoer_tweets() as $tweet) : ?>
                <div class="small-6 medium-3 columns">
                    <?php echo do_shortcode("[tweet id='$tweet']"); ?>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="row align-center home-social-divider">
            <div class="small-2 columns">
                <hr />
            </div>
        </div>

        <div class="row align-center">
            <div class="small-12 columns text-center">
                <span class="text-upperace">Follow our social media pages</span>
            </div>

            <div class="small-12 columns home-social-icons text-center">
                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-tw2.svg" /></a>
                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-fb2.svg" /></a>
                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-slideshare.svg" /></a>
                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-youtube.svg" /></a>
            </div>
        </div>
    </div>

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
<!-- </div> -->

<?php get_footer(); ?>
