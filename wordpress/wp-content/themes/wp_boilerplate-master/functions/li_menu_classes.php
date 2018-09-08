<?php

function dl_li_menu_classes($classes, $item, $args) {
  if($args->theme_location == 'header-menu') {
    $classes[] = 'navbar__elementos--opcion';
  }
  return $classes;
}

add_filter('nav_menu_css_class', 'dl_li_menu_classes', 1, 3);







function dl_a_menu_classes( $atts, $item, $args ) {
    $class = 'navbar__elementos--color-link';
    $atts['class'] = $class;

    return $atts;
}

add_filter( 'nav_menu_link_attributes', 'dl_a_menu_classes', 10, 3 );