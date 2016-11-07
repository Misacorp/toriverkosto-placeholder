<?php

/*
Template Name: Links Template
*/

get_header(); ?>


<main>

  <!--  CONTENT   -->
  <div class="content-wrapper">

    <!-- <div class="row content">
      <div class="col s12">
        <h1>
          <?php echo get_the_title() ?>
        </h1>
      </div>
    </div> -->

    <div class="row content">
      <div class="col s12">
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <?php the_content(); ?>

        <?php endwhile; ?>
      </div>
    </div>

  </div>


 </main>

 <?php get_footer(); ?>