<?php

function themaEnicio_bronnen() {
  wp_enqueue_script('script', get_theme_file_uri('/js/script.js'), NULL, '1.0', true);
  wp_enqueue_style('Googlefonts', '//fonts.googleapis.com/css?family=Josefin+Sans|Sunflower:300&display=swap');
  wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'themaEnicio_bronnen');


// registreer menu's van het thema
register_nav_menus( array(
  'hoofd' => __('Hoofd menu'),
  'footer' => __('Footer menu'),
) );


// registreer/initialiseer widgets

function themaWidgets() {
  register_sidebar( array(
  'name'          => __( 'Widget aside' ),
	'id'            => __( 'widget_aside'),
	'description'   => __( 'Hier de widgets voor de aside plaatsen'),
  'class'         => '',
	'before_widget' => '',
	'after_widget'  => '',
	'before_title'  => '<h4 class="widgettitle">',
	'after_title'   => '</h4>'
  ) );
}
add_action('widgets_init', 'themaWidgets');

?>
