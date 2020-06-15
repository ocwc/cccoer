<?php

global $wp_query;
$total = $wp_query->max_num_pages;
// only bother with the rest if we have more than 1 page!
if ( $total > 1 )  : ?>
    <?php
    // get the current page
    if ( !$current_page = get_query_var('paged') ) {
      $current_page = 1;
    }

    $page_links = paginate_links(array(
      'base'     => get_pagenum_link(1) . '%_%',
      'current'  => $current_page,
      'total'    => $total,
      'mid_size' => 4,
      'type'     => 'array'
    ));
    ?>

    <ul class="pagination">
    <?php foreach ($page_links as $page) : ?>
        <li><?php echo $page; ?></li>
    <?php endforeach; ?>
    </ul>

<?php endif; ?>
