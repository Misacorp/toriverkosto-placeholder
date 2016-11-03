<!DOCTYPE HTML>

<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="#222222">
  <meta name="msapplication-navbutton-color" content="#222222">
  <meta name="apple-mobile-web-app-status-bar-style" content="#222222">

  <title>Toriverkosto</title>

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <?php wp_head(); ?>
</head>

<body>

  <!--  TOP NAVIGATION    -->

 <nav>
    <div class="nav-wrapper">
      <a href="index.html" class="brand-logo"><img src="<?php get_template_directory_uri();?>/wp-content/themes/market-machine/img/logo/toriverkosto-logo-circle-black.png"></a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons black-text">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="index.html">Etusivu</a></li>
        <li><a href="kauppiaille.html">Kauppiaille</a></li>
        <li class="social"><a href="https://www.facebook.com/toriverkosto" class="social"><img src="<?php get_template_directory_uri();?>/wp-content/themes/market-machine/img/logo/facebook-logo.png" alt="Facebook" class="social-image"></a></li>
        <li class="social"><a href="https://twitter.com/toriverkosto" class="social"><img src="<?php get_template_directory_uri();?>/wp-content/themes/market-machine/img/logo/twitter-logo.png" alt="Twitter" class="social-image"></a></li>
        <li class="social"><a href="https://www.linkedin.com/company/toriverkosto" class="social"><img src="<?php get_template_directory_uri();?>/wp-content/themes/market-machine/img/logo/linkedin-logo.png" alt="LinkedIn" class="social-image"></a></li>
      </ul>

      <ul class="side-nav" id="mobile-demo">
        <li><a href="index.html">Etusivu</a></li>
        <li><a href="kauppiaille.html">Kauppiaille</a></li>
        <li class="social">
          <a href="https://www.facebook.com/toriverkosto" class="social"><img src="<?php get_template_directory_uri();?>/wp-content/themes/market-machine/img/logo/facebook-logo.png" alt="Facebook" class="social-image"></a>
          <a href="https://twitter.com/toriverkosto" class="social"><img src="<?php get_template_directory_uri();?>/wp-content/themes/market-machine/img/logo/twitter-logo.png" alt="Twitter" class="social-image"></a>
          <a href="https://www.linkedin.com/company/toriverkosto" class="social"><img src="<?php get_template_directory_uri();?>/wp-content/themes/market-machine/img/logo/linkedin-logo.png" alt="LinkedIn" class="social-image"></a></li>
      </ul>
    </div>
 </nav>