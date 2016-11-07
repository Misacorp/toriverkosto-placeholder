<?php

/*
Template Name: Content Template
*/

get_header(); ?>


<main>

  <!--  CONTENT   -->
  <div class="content-wrapper">
    <div class="row content">
      <div class="col s12">
        <h1>
          <?php echo get_the_title() ?>
        </h1>
      </div>
    </div>

    <div class="row content">
      <div class="col m12 l8">
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <?php the_content(); ?>

        <?php endwhile; ?>
      </div>

      <div class="col s1 hide-on-med-and-down empty">.</div>

      <div class="col m12 l3 hide-on-med-and-down">

            <!-- CHECK IF SIDEBAR HAS CONTENT, RENDER IF IT DOES -->

            <?php if( get_field('sivupalkki') ): ?>
              <div class="card-panel" <?php echo 'style="background-color: #' . get_field('sivupalkki_vari') . '"' ?>>
                <span class="flow-text black-text light smooth-text">
                  <?php the_field('sivupalkki'); ?>   
                </span>
              </div>
            <?php endif; ?>
      </div>
    </div>

  </div>


 </main>

 <?php get_footer(); ?>