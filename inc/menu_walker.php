<?php
class F6_TOPBAR_MENU_WALKER extends Walker_Nav_Menu
{
    /*
     * Add vertical menu class and submenu data attribute to sub menus
     */

    function start_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"vertical menu\" data-submenu>\n";
    }
}

//Optional fallback
function f6_topbar_menu_fallback($args)
{
    /*
     * Instantiate new Page Walker class instead of applying a filter to the
     * "wp_page_menu" function in the event there are multiple active menus in theme.
     */

    $walker_page = new Walker_Page();
    $fallback = $walker_page->walk(get_pages(), 0);
    $fallback = str_replace("<ul class='children'>", '<ul class="children submenu menu vertical" data-submenu>', $fallback);

    echo '<ul class="dropdown menu data-dropdown-menu">'.$fallback.'</ul>';
}

class F6_DRILL_MENU_WALKER extends Walker_Nav_Menu
{
    /*
     * Add vertical menu class
     */

    function start_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"vertical menu\">\n";
    }
}

function f6_drill_menu_fallback($args)
{
    /*
     * Instantiate new Page Walker class instead of applying a filter to the
     * "wp_page_menu" function in the event there are multiple active menus in theme.
     */

    $walker_page = new Walker_Page();
    $fallback = $walker_page->walk(get_pages(), 0);
    $fallback = str_replace("children", "children vertical menu", $fallback);
    echo '<ul class="vertical menu" data-drilldown="">'.$fallback.'</ul>';
}


class CCCOER_FOOTER_MENU_WALKER extends Walker_Nav_Menu
{
    function start_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        // $output .= "\n$indent<ul>\n";
    }

    function end_lvl( &$output, $depth = 0, $args = array() ) {

    }

    function start_el( &$output, $object, $depth = 0, $args = array(), $current_object_id = 0 ) {
        if ( $depth === 0 ) {
            $output .= "<div class=\"small-6 medium-expand columns\"><ul class=\"no-bullet\">";

            $output .= sprintf( "\n<li class=\"footer-header\">%s</li>\n", $object->title );

        } else {
            $output .= sprintf( "\n<li><a href='%s'%s>%s</a></li>\n",
                $object->url,
                ( $object->object_id === get_the_ID() ) ? ' class="current"' : '',
                $object->title
            );
        }

    }

    function end_el( &$output, $object, $depth = 0, $args = array() ) {
        if ( $depth === 0 ) {
            $output .= "</ul></div>";
        }

    }

}

class Walker_OffCanvas_Menu extends Walker {
    var $db_fields = array(
        'parent' => 'menu_item_parent',
        'id'     => 'db_id'
    );

    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        $classes = array();
        if ( $depth === 1 ) {
            $classes = array($item->classes[0]);
        }

        $classes = implode( " ", $classes );

        if ( $depth === 0 ) {
            $output .= sprintf( "<li %s>%s</li>\n",
                "class='off-canvas__title'",
                $item->title
            );
        } else {
            $output .= sprintf( "<li %s><a href='%s'>%s</a></li>\n",
                "class='$classes'",
                $item->url,
                $item->title
            );
        }
    }
}
