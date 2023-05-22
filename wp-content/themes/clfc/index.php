<?php
/*
Template Name: Home
*/
?>

<?php get_header();?>

 <!-- HERO -->
<section id="hero">
  <div class="row align-items-center">
      <div class="col-md-12 text-center">
        <h1 tabindex="7" class="text-center">
        <?php the_field('heading'); ?></h1>
      </div>
  </div>
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <div tabindex="8" class="main-text">
          <?php the_field('main_paragraph'); ?>
        </div>
        <a tabindex="9" href="<?php the_field('learn_more_button'); ?>" class="btn"><?php the_field('cta_learn_more_button'); ?></a>
      </div>
    </div>
</section>

<div class="vertical-spacer-sm">&nbsp;</div>

<!-- SUPER PLAYER --> 
<section id="superplayer">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="spacesforline">
        <div class="list-group">
          <h3 tabindex="12">MORE VIDEOS</h3> 
          <button tabindex="13" class="btnline list-group-item list-group-item-action d-flex align-items-center" onclick="<?php the_field("video_id_1"); ?>">
            <?php 
              $image = get_field('image_video_1');
              if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="img-fluid mr-3"/>
            <?php endif; ?>
            <div class="flex-grow-1">
              <p class="mb-0"><?php the_field('text_video_1'); ?></p>
            </div>
          </button>
          <button tabindex="14" class="btnline list-group-item list-group-item-action d-flex align-items-center" onclick="<?php the_field("video_id_2"); ?>">
          <?php 
              $image = get_field('image_video_2');
              if( !empty( $image ) ): ?>
              <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="img-fluid mr-3"/>
            <?php endif; ?>
            <div class="flex-grow-1">
              <p class="mb-0"><?php the_field('text_video_2'); ?></p>
            </div>
          </button>
          <button tabindex="15" class="btnline list-group-item list-group-item-action d-flex align-items-center" onclick="<?php the_field("video_id_3"); ?>">
          <?php 
              $image = get_field('image_video_3');
              if( !empty( $image ) ): ?>
              <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="img-fluid mr-3"/>
            <?php endif; ?>
            <div class="flex-grow-1">
              <p class="mb-0"><?php the_field('text_video_3'); ?></p>
            </div>
          </button>
          <button tabindex="16" class="btnline list-group-item list-group-item-action d-flex align-items-center" onclick="<?php the_field("video_id_4"); ?>">
          <?php 
              $image = get_field('image_video_4');
              if( !empty( $image ) ): ?>
              <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="img-fluid mr-3"/>
            <?php endif; ?>
            <div class="flex-grow-1">
              <p class="mb-0"><?php the_field('text_video_4'); ?></p>
            </div>
          </button>
          <button tabindex="17" class="btnline list-group-item list-group-item-action d-flex align-items-center" onclick="<?php the_field("video_id_5"); ?>">
          <?php 
              $image = get_field('image_video_5');
              if( !empty( $image ) ): ?>
              <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="img-fluid mr-3"/>
            <?php endif; ?>
            <div class="flex-grow-1">
              <p class="mb-0"><?php the_field('text_video_5'); ?></p>
            </div>
          </button>
        </div>
      </div>
      </div>
      <div class="col-lg-8">
        <div class="video-player d-flex align-items-center justify-content-center">
        <div id="imageOverlay" tabindex="18">
            <?php 
              $image = get_field('main_video_image');
              if( !empty( $image ) ): ?>
              <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="overlay-image"/>
            <?php endif; ?>
          </div>
          <div id="youtubePlayer"></div>
        </div>
      </div>
    </div>
  </div>
</section>


  <!-- OUR CAMPAIGN -->
  <section id="campaign">
    <div class="row">
      <div class="col-12 text-center">
        <h2 tabindex="11"><?php the_field('title_how_to'); ?></h2>
      </div>
    </div>
    
    <div class="row">
      <div class="col-md-10 offset-md-1">
        <p tabindex="12">
          <?php the_field('how_to_paragraph'); ?>
        </p>
      </div>
    </div>
    
    <div class="row justify-content-center">
      <div class="col-md-3 col-sm-12 text-center">
      <?php 
          $image = get_field('respect_icon');
          if (!empty($image)) {
          $url = get_field('respect_icon_url');
          ?>
          <a tabindex="13" href="<?php echo $url; ?>" target="_self"><img src="<?php 
          echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-fluid rounded" /></a>
          <?php 
      }?>
      </a>
      </div> 
      <div class="col-md-3 col-sm-12 text-center">
      <?php 
          $image = get_field('connect_icon');
          if (!empty($image)) {
          $url = get_field('connect_icon_url');
          ?>
          <a tabindex="14" href="<?php echo $url; ?>" target="_self"><img src="<?php 
          echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-fluid rounded" /></a>
          <?php 
      }?>
      </div>
      <div class="col-md-3 col-sm-12 text-center">
      <?php 
          $image = get_field('protect_icon');
          if (!empty($image)) {
          $url = get_field('protect_icon_url');
          ?>
          <a tabindex="15" href="<?php echo $url; ?>" target="_self"><img src="<?php 
          echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-fluid rounded" /></a>
          <?php 
      }?>
      </div>
    </div>
  </section>
  
  <!-- CONTACT FORM -->
  <? get_template_part( 'components/contactform' ); ?>
  
  
 <!-- PARTNERS SECTION -->
    <section id="partners">
    <div class="row">
      <div class="col-12 text-center">
        <h2 tabindex="20"><?php the_field('partners_title'); ?></h2>
      </div>
    </div>    
    <div class="row justify-content-center">
      <div class="col-md-3 col-sm-12 text-center">
      <?php 
          $image = get_field('partner1');
          if (!empty($image)) {
          $url = get_field('partner1_url');?>
          <a href="<?php echo $url; ?>" target="_self"><img class="partner1" src="<?php 
          echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-fluid rounded" tabindex="21"/></a>
          <?php 
      }?>
      </a>
      </div> 
      <div class="col-md-3 col-sm-12 text-center">
      <?php 
          $image = get_field('partner2');
          if (!empty($image)) {
          $url = get_field('partner2_url');
          ?>
          <a href="<?php echo $url; ?>" target="_self"><img class="partner2" src="<?php 
          echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-fluid rounded" tabindex="22"/></a>
          <?php
      }?>
      </div>
      <div class="col-md-3 col-sm-12 text-center">
      <?php 
          $image = get_field('partner3');
          if (!empty($image)) {
          $url = get_field('partner3_url');
          ?>
          <a href="<?php echo $url; ?>" target="_self"><img class="partner3" src="<?php 
          echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-fluid rounded" tabindex="23"/></a>
          <?php 
      }?>
      </div>
    </div>
  </section>

<script src="<?php bloginfo('template_url'); ?>/js/superplayer.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/superplayerarrow.js"></script>

<?php get_footer();?> 