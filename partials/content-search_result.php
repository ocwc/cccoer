<div class="post-excerpt">
	<?php /*
	<div class="post-share post-excerpt-share text-center hide-for-small-only">
		<span class="post-share-text">Share</span>

		<a href="#"><img src="/images/icons/icon-fb2.svg" /></a><br />
		<a href="#"><img src="/images/icons/icon-tw2.svg" /></a><br />
		<a href="#"><img src="/images/icons/icon-mail2.svg" /></a>
	</div>
	*/ ?>

	<h2 class="post-excerpt-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<?php the_excerpt(); ?>
</div>