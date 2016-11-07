<?php
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
                <div class="youtube-player valign" data-id="sTcl1QR_8BU"></div>
            </div>
      
            <div class="col s12 l5 pull-l7 content-column valign-wrapper">
              <div class="valign">
                
                <img src="<?php get_template_directory_uri();?>/wp-content/themes/market-machine/img/logo/toriverkosto-logo-full.png" alt="Toriverkosto" class="title-logo">

                <div class="subtitle">
                  <p>Hoidamme kiertotalouden ja uniikin designin kauppiaiden arjen verkossa.</p>
                  <p>
                    Katso videolta miten <a href="https://www.youtube.com/watch?v=sTcl1QR_8BU"><i class="material-icons white-text small centered-icon" id="small-play-button">play_circle_outline</i></a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>

    </div>
  </div>


 </main>

 <?php get_footer(); ?>