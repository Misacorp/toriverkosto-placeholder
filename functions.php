<?php

function marketmachine_script_enqueue() {
  wp_deregister_script( 'jquery' );
  wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js');
  wp_enqueue_script( 'jquery' );

  wp_enqueue_style('materialize-css', get_template_directory_uri() . '/css/materialize.min.css', array(), '1.0', 'all');
  wp_enqueue_style('custom-style', get_template_directory_uri() . '/css/style.css', array(), '1.0', 'all');
  wp_enqueue_script('materialize-js', get_template_directory_uri() . '/js/materialize.min.js', array(jquery), '1.0', true);
  wp_enqueue_script('custom-js', get_template_directory_uri() . '/js/script.js', array(jquery), '1.0', true);
}

add_action( 'wp_enqueue_scripts', 'marketmachine_script_enqueue');




/*    Allow Advanced Custom Fields text areas to be smaller in editor   */ 
add_filter('admin_head','textarea_temp_fix');
function textarea_temp_fix() {
  echo '<style type="text/css">.acf_postbox .field textarea {min-height:0 !important;}</style>';
}




/*    Allow shortcodes in ACF fields    */
function text_area_shortcode($value, $post_id, $field) {
  if (is_admin()) {
    // don't do this in the admin
    // could have unintended side effects
    return;
  }
  do_shortcode($value);
  return $value;
}
add_filter('acf/load_value/type=textarea', 'text_area_shortcode', 10, 3);




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


//  [three_column]Content[/three_column]
function three_column_func($atts, $content = null) {

  return '<div class="col s12 m6 l4">' . do_shortcode($content) . '</div>';
}
add_shortcode('three_column', 'three_column_func');


//  [button url="#" icon="icon-value"]Text here[/button]
function material_button($atts, $content = null) {

  extract( shortcode_atts( array(

          'url' => '#',
          'icon' => 'icon_value'

  ), $atts ) );

  return '<p class="button-bottom"><a class="waves-effect waves-light btn" style="background-color: #B2B4C3" href="' . $url . '"><i class="material-icons right">' . $icon . '</i>' . do_shortcode($content) . '</a></p>';
}
add_shortcode('button', 'material_button');

//  [card image="image_src" title="card_title" url="#" url_text="link_text"]Content text[/card]
function material_card($atts, $content = null) {

  extract( shortcode_atts( array(
          'image' => 'image_src',
          'title' => 'card_title',
          'url' => '#',
          'url_text' => 'link_text'

  ), $atts ) );

  return '
    <div class="card small">
      <div class="card-image waves-effect waves-block waves-light">
        <img class="activator" src="' . $image . '">
      </div>
      <div class="card-content">
        <span class="card-title activator grey-text text-darken-4">' . $title . '<i class="material-icons right">more_vert</i></span>
        <p><a href="' . $url . '">' . $url_text . '</a></p>
      </div>
      <div class="card-reveal grey-text text-darken-4">
        <span class="card-title">' . $title . '<i class="material-icons right">close</i></span>
        <p>' . $content . '</p>
      </div>
    </div>
  ';
}
add_shortcode('card', 'material_card');

?>