
<form role="search" method="get" class="small-12 columns search-form" action="<?php echo home_url( '/' ); ?>">
  <div class="row align-center">
    <div class="medium-5 medium-offset-1 columns">
      	<label>Search CCCOER Archives
        <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>
        <input 
        	type="search" 
        	placeholder="Enter search keywords (e.g. Textbooks, OER)"
        	value="<?php echo get_search_query() ?>" name="s"
        	title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" 
        />
      </label>
    </div>
    <div class="shrink columns">
    	<label>&nbsp;</label>
        <input type="submit" value="Search" class="button green">
    </div>
  </div>
</form>
