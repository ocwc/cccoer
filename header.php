<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="/manifest.json">
<meta name="theme-color" content="#ffffff ">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <!-- off-canvas title bar for 'small' screen -->
    <div class="title-bar show-for-small-only" data-responsive-toggle="widemenu" data-hide-for="medium">
      <div class="title-bar-left">
        <button class="menu-icon" type="button" data-open="offCanvasLeft"></button>
        <span class="title-bar-title">Community College Consortium for OER</span>
      </div>
    </div>

    <!-- off-canvas left menu -->
    <div class="off-canvas position-left" id="offCanvasLeft" data-off-canvas>
      <?php
        wp_nav_menu(array(
            'container' => false,
            'menu' => __( 'Drill Menu', 'textdomain' ),
            'menu_class' => 'vertical menu',
            'theme_location' => 'main',
            'items_wrap'      => '<ul id="%1$s" class="%2$s" data-drilldown="">%3$s</ul>',
            //Recommend setting this to false, but if you need a fallback...
            'fallback_cb' => 'f6_drill_menu_fallback',
            'walker' => new F6_DRILL_MENU_WALKER(),
        ));
      ?>
    </div>

    <!-- "wider" top-bar menu for 'medium' and up -->
    <div class="row header show-for-medium">
      <div class="medium-12 columns text-right text-uppercase search-nav">
        <a href="/?s=">Search <i class="icon-search"></i></a>
        Follow Us
          <a href="https://twitter.com/cccoer" alt="CCCOER on Twitter"><i class="icon-twitter"></i></a>
          <a href="https://www.youtube.com/watch?v=SV82a8E84nU&list=PLze0jtuKTgpFV4M27-g6YojfSMXxIOeVd" alt="CCCOER on YouTube"><i class="icon-youtube-play"></i></a>
      </div>

      <div class="medium-3 columns logo-container">
        <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="CCCOER Logo" /></a>
      </div>

      <div class="medium-9 columns">
        <?php
            wp_nav_menu(array(
                'container' => false,
                'menu' => __( 'Top Bar Menu', 'textdomain' ),
                'menu_class' => 'dropdown menu',
                'theme_location' => 'main',
                'items_wrap'      => '<ul id="%1$s" class="%2$s" data-dropdown-menu>%3$s</ul>',
                //Recommend setting this to false, but if you need a fallback...
                'fallback_cb' => 'f6_topbar_menu_fallback',
                'walker' => new F6_TOPBAR_MENU_WALKER(),
            ));
        ?>
      </div>
    </div>
