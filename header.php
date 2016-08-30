<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="off-canvas-wrapper">
  <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>

    <!-- off-canvas title bar for 'small' screen -->
    <div class="title-bar" data-responsive-toggle="widemenu" data-hide-for="medium">
      <div class="title-bar-left">
        <button class="menu-icon" type="button" data-open="offCanvasLeft"></button>
        <span class="title-bar-title">Community College Consortium for OER</span>
      </div>
    </div>

    <!-- off-canvas left menu -->
    <div class="off-canvas position-left" id="offCanvasLeft" data-off-canvas>
      <ul class="vertical drilldown menu" data-responsive-menu="drilldown medium-dropdown">
          <li class="has-submenu">
            <a href="#">About</a>
            <ul class="menu submenu vertical" data-submenu>
              <li><a href="/post.php">History</a></li>
              <li><a href="/post-svg.php">People</a></li>
              <li><a href="/post-webinar.php">Members</a></li>
              <li><a href="/listing.php">Contact Us</a></li>
              <li><a href="/search.php">Partners</a></li>
            </ul>
          </li>
          <li class="has-submenu">
            <a href="#">Plan</a>
            <ul class="menu submenu vertical" data-submenu>
              <li><a href="/404.php">Members</a></li>
              <li><a href="left_wide_13">Contact Us</a></li>
              <li><a href="left_wide_13">Partners</a></li>
            </ul>
          </li>
          <li class="has-submenu">
            <a href="/learn.php">Learn</a>
          </li>
          <li class="has-submenu">
            <a href="#">Connect</a>
          </li>
          <li class="has-submenu">
            <a href="#">OER Degrees</a>
          </li>
          <li class="has-submenu">
            <a href="#">Become a member</a>
          </li>
        </ul>
    </div>

    <!-- "wider" top-bar menu for 'medium' and up -->
    <div class="row header show-for-medium">
      <div class="medium-12 columns text-right text-uppercase search-nav">
        <a href="#">Search <i class="icon-search"></i></a>
        Follow Us 
          <a href="#" alt="CCCOER on Twitter"><i class="icon-twitter"></i></a><a href="#" alt="CCCOER on Facebook"><i class="icon-facebook"></i></a>
      </div>

      <div class="medium-3 columns logo-container">
        <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="CCCOER Logo" /></a>
      </div>

      <div class="medium-9 columns">
        <ul class="dropdown menu" data-dropdown-menu>
          <li class="has-submenu">
            <a href="#">About</a>
            <ul class="menu submenu vertical" data-submenu>
              <li><a href="/post.php">History</a></li>
              <li><a href="/post-svg.php">People</a></li>
              <li><a href="/post-webinar.php">Members</a></li>
              <li><a href="/listing.php">Contact Us</a></li>
              <li><a href="/search.php">Partners</a></li>
            </ul>
          </li>
          <li class="has-submenu">
            <a href="#">Plan</a>
            <ul class="menu submenu vertical" data-submenu>
              <li><a href="/404.php">Members</a></li>
              <li><a href="left_wide_13">Contact Us</a></li>
              <li><a href="left_wide_13">Partners</a></li>
            </ul>
          </li>
          <li class="has-submenu">
            <a href="/learn.php">Learn</a>
          </li>
          <li class="has-submenu">
            <a href="#">Connect</a>
          </li>
          <li class="has-submenu">
            <a href="#">OER Degrees</a>
          </li>
          <li class="has-submenu">
            <a href="#">Become a member</a>
          </li>
        </ul>
      </div>
    </div>
