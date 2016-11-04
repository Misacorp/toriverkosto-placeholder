<?php

function marketmachine_script_enqueue() {
  wp_deregister_script( 'jquery' );
  wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js');
  wp_enqueue_script( 'jquery' );

  wp_enqueue_style('materialize-css', get_template_directory_uri() . '/css/materialize.min.css', array(), '1.0', 'all');
  wp_enqueue_style('custom-style', get_template_directory_uri() . '/css/style.css', array(), '1.0', 'all');
  wp_enqueue_style('frontpage-style', get_template_directory_uri() . '/css/frontpage.css', array(), '1.0', 'all');
  wp_enqueue_script('materialize-js', get_template_directory_uri() . '/js/materialize.min.js', array(jquery), '1.0', true);
  wp_enqueue_script('custom-js', get_template_directory_uri() . '/js/script.js', array(jquery), '1.0', true);
}

add_action( 'wp_enqueue_scripts', 'marketmachine_script_enqueue');


/*    Allow Advanced Custom Fields text areas to be smaller in editor   */ 
add_filter('admin_head','textarea_temp_fix');
function textarea_temp_fix() {
  echo '<style type="text/css">.acf_postbox .field textarea {min-height:0 !important;}</style>';
}

/*	DISABLE ADMIN BAR   */

add_filter('show_admin_bar', '__return_false');

//	Navigation menus

register_nav_menus(array(
	'primary' => __('Primary Menu'),
	'sidebar' => __('Sidebar Menu'),
	));

//	Header image

$header_args = array (
    'default-image'         => get_template_directory_uri() . '/img/logo/toriverkosto-logo-circle-black.png',
    'header-text'           => false,
    'default-text-color'    => '000',
    'width'             	=> 64,
    'height'            	=> 64,
    'flex-width' 			=> true,
    'flex-height'			=> true,
	);

add_theme_support('custom-header', $header_args);

?>