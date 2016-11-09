<!DOCTYPE HTML>

<html lang="fi">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="#222222">
  <meta name="msapplication-navbutton-color" content="#222222">
  <meta name="apple-mobile-web-app-status-bar-style" content="#222222">
  <meta name="google-site-verification" content="muBEcV2PGmrZGtRK7D3YCzlAI39ObtT54eNPMLmsjTA" />

  

  <title>Toriverkosto</title>

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <?php wp_head(); ?>
</head>

<body>

  <!--  TOP NAVIGATION    -->

 <nav>
    <div class="nav-wrapper">

      <a href="<?php echo home_url() ?>"><img alt="" class="brand-logo" src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>"></a>

      <div class="site-name"><?php echo get_bloginfo('name') ?></div>

      <?php 
          $args = array(
            'theme_location' => 'primary'
            );
       ?>

      <?php wp_nav_menu($args); ?>


    </div>
 </nav>