<?php get_header(); ?>

<div class="subheading-bluebg"></div>

<div
	class="off-canvas-content subheading-narrow"
    data-off-canvas-content
    >
    <div class="row align-center">
        <div class="small-12 columns post-title-container">
            <h1 class="post-title u-color-white"><?php wp_title(); ?></h1>
        </div>
    </div>

    <div class="post-content post-content-archive post-content-left-meta row">
        <?php get_search_form(); ?>
        <div class="small-12 medium-1 columns"></div>

		<div class="small-12 medium-11 columns post-content-body">
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'partials/content', 'search_result' ); ?>
				<?php endwhile; ?>
			<?php else : ?>
				<?php get_template_part( 'partials/content', 'none' ); ?>
			<?php endif; ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>