<?php

/*
Template Name: Frontpage Template
*/

  get_header();
  wp_enqueue_style('frontpage-style', get_template_directory_uri() . '/css/frontpage.css', array(), '1.0', 'all');
?>

<main>
  <div class="body-overlay">

  <!--  CONTENT   -->
    <div class="content-wrapper">
      <div class="background-overlay">
        <div class="row content">
      
            <div class="col s12 l7 push-l5 content-column video-container valign-wrapper">
                <div class="youtube-player valign" data-id="<?php the_field('etusivu_video') ?>"></div> <!-- sTcl1QR_8BU -->
            </div>
      
            <div class="col s12 l5 pull-l7 content-column valign-wrapper">
              <div class="valign">
                
                <img src="<?php the_field('etusivu_logo') ?>" alt="Toriverkosto" class="title-logo">

                <div class="subtitle">

                  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

                  <?php the_content(); ?>

                  <?php endwhile; ?>
                </div>
              </div>
            </div>
          </div>
        </div>

    </div>
  </div>


 </main>

 <?php get_footer(); ?>