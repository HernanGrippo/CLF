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

<!-- VIDEO EMBED --> 

<!-- SUPER PLAYER --> 
<section id="superplayer">
  <div class="row">
    <div class="container">
      <div class="list-group">
        <h3>MORE VIDEOS</h>
        <button class="list-group-item list-group-item-action d-flex align-items-center" onclick="playVideo('LvYehnKonDA')">
          <img src="<?php bloginfo('template_url'); ?>/img/mountainplayer.png" alt="Image 1" class="img-fluid mr-3">
          <div class="flex-grow-1">
            <p class="mb-0">It's On You | Respect. Connect. Protect.</p>
          </div>
        </button>
        <button class="list-group-item list-group-item-action d-flex align-items-center" onclick="playVideo('D02Hp2c2qTU')">
          <img src="<?php bloginfo('template_url'); ?>/img/mountainplayer.png" alt="Image 2" class="img-fluid mr-3">
          <div class="flex-grow-1">
            <p class="mb-0">Protect What Matters: Conservation Lands Foundation</p>
          </div>
        </button>
        <button class="list-group-item list-group-item-action d-flex align-items-center" onclick="playVideo('eOBDOZH3nns')">
          <img src="<?php bloginfo('template_url'); ?>/img/mountainplayer.png" alt="Image 3" class="img-fluid mr-3">
          <div class="flex-grow-1">
            <p class="mb-0">Respect. Connect. Protect. | Conserve Public Lands</p>
          </div>
        </button>
        <button class="list-group-item list-group-item-action d-flex align-items-center" onclick="playVideo('jqS44UH7Nrs')">
          <img src="<?php bloginfo('template_url'); ?>/img/mountainplayer.png" alt="Image 4" class="img-fluid mr-3">
          <div class="flex-grow-1">
            <p class="mb-0">Respect. Connect. Protect. A Word from Spokespebble</p>
          </div>
        </button>
        <button class="list-group-item list-group-item-action d-flex align-items-center" onclick="playVideo('-29icN6oAJ0')">
          <img src="<?php bloginfo('template_url'); ?>/img/mountainplayer.png" alt="Image 5" class="img-fluid mr-3">
          <div class="flex-grow-1">
            <p class="mb-0">President Biden Honors Avi Kwa Ame</p>
          </div>
        </button>
      </div>
      <div class="video-player d-flex align-items-center justify-content-center">
        <div id="youtubePlayer"></div>
      </div>
    </div>
  </div>
</section>  

<!-- Image -->
<section id="video_embed">
    <div class="row">
      <div class="col-12 text-center">
      <?php 
          $image = get_field('video_image');
          if( !empty( $image ) ): ?>
              <img tabindex="10" class="img-fluid" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" id="thumbnail"/>
      <?php endif; ?>
<!-- Video -->
        <div id="videoContainer" style="display: none;">
        <?php
        // Load value.
        $iframe = get_field('video_embed_url');

        // Use preg_match to find iframe src.
        preg_match('/src="(.+?)"/', $iframe, $matches);
        $src = $matches[1];

        // Add extra parameters to src and replace HTML.
        $params = array(
            'controls'  => 1,
            'hd'        => 1,
            'autohide'  => 1,
            'autoplay'=> 0,
        );
        $new_src = add_query_arg($params, $src);
        $iframe = str_replace($src, $new_src, $iframe);

        // Add extra attributes to iframe HTML.
        $attributes = 'frameborder="0"';
        $iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);

        // Display customized HTML.
        echo $iframe;
        ?>
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


<?php get_footer();?> 