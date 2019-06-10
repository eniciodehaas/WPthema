<?php

function themaEnicio_bronnen() {
  wp_enqueue_script('script', get_theme_file_uri('/js/script.js'), NULL, '1.0', true);
  wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'themaEnicio_bronnen');


// registreer menu's van het thema
register_nav_menus( array(
  'hoofd' => __('Hoofd menu'),
  'footer' => __('Footer menu'),
) );

?>
