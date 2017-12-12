<?php get_header(); ?>

<div class="subheading-bluebg">
    <div class="row">
        <h1 class="post-title-top u-color-white">Webinars</h1>
    </div>
</div>

<div class="off-canvas-content subheading-narrow">
    <div class="post-content post-content-single row">
        <div class="small-12 columns post-content-body">
            <div class="webinars-search">
                <form method="get" action="/webinar">
                    <div class="row">
                        <div class="small-12 columns">
                            <h4>Filter</h4>
                        </div>
                        <div class="small-12 medium-4 columns">
                            <?php $webinar_year = get_query_var('webinar_year'); ?>
                            <b>Year</b>
                            <select name="webinar_year" id="">
                                <option value selected>- Year</option>
                                <option value="2012" <?= $webinar_year === '2012' ? 'selected' : '' ?>>2012</option>
                                <option value="2013" <?= $webinar_year === '2013' ? 'selected' : '' ?>>2013</option>
                                <option value="2014" <?= $webinar_year === '2014' ? 'selected' : '' ?>>2014</option>
                                <option value="2015" <?= $webinar_year === '2015' ? 'selected' : '' ?>>2015</option>
                                <option value="2016" <?= $webinar_year === '2016' ? 'selected' : '' ?>>2016</option>
                                <option value="2017" <?= $webinar_year === '2017' ? 'selected' : '' ?>>2017</option>
                                <!-- <option value="2018">2018</option> -->
                            </select>
                        </div>
                        <div class="small-12 medium-4 columns">
                            <?php $webinar_category = get_query_var('webinar_category'); ?>
                            <b>Category</b>
                            <select name="webinar_category">
                                <option value selected>- Category</option>
                                <?php foreach ( get_terms( 'webinar_category' ) as $term ) : ?>
                                    <option value="<?= $term->slug; ?>" <?= $webinar_category === $term->slug ? 'selected' : '' ?>><?= $term->name; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="small-12 columns"></div>
                        <div class="small-12 medium-6 columns">
                            <b>Search</b>
                            <input type="text" name="webinar_q" placeholder="Title, presenter, topic .." value="<?= esc_attr(get_query_var('webinar_q')); ?>">
                        </div>

                        <div class="small-12 medium-2 columns">
                            <input type="submit" class="button primary" value="Search">
                        </div>
                    </div>
                </form>
            </div>


            <?php if ( have_posts() ) : ?>
                <div class="row">
                    <?php $count = 1; ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <?php get_template_part( 'partials/_card', 'webinar' ); ?>
                        <?php if ( $count % 4 === 0 ) : ?>
                            <div class="clearfix hide-for-small"></div>
                        <?php endif; ?>
                        <?php $count ++; ?>
                    <?php endwhile; ?>
                </div>

                <div class="small-12 columns text-center">
                    <?php get_template_part( 'partials/_pagination' ); ?>
                </div>


            <?php else : ?>
                <div class="row">
                    <h2>Sorry, no results found.</h2>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
