<?php
/*
Template Name: GetInvolved
*/
?>
<?php get_header();?>

<!-- HERO -->
<section id="hero-get-involved">
  <div class="container"> 
    <div class="row">
      <div class="col">
        <div class="hero">
          <h1 tabindex="7"><?php the_field('get_involved_heading'); ?></h1>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- MEET SPOKESPEBBLE -->
<section id="meet">
  <div class="container-md">
    <div class="row">
      <div class="col-md-12 col-lg-7">
        <h2 tabindex="8"><?php the_field('meet_spokespebble_title'); ?></h2>
        <div class="rockydisappearsondesktop col-md-12 col-lg-5">
            <img tabindex="9" src="https://www.respectconnectprotect.org/wp-content/uploads/2023/04/rockyinvolved.png" alt="a draw of a happy stone with a red dialog balloon saying Hey There!" class="img-fluid">
        </div>
        <div tabindex="10">
        <?php the_field('meet_spokespebble_paragraph'); ?>
        </div>
      </div>
      <div class="rockydisappearsonmobile col-md-12 col-lg-5">
        <img tabindex="11" src="https://www.respectconnectprotect.org/wp-content/uploads/2023/04/rockyinvolved.png" alt="a draw of a happy stone with a red dialog balloon saying Hey There!" class="img-fluid">
      </div>
    </div>
  </div>
</section>

<div class="vertical-spacer-sm">&nbsp;</div>

<!-- VIDEO EMBED --> 
<!-- Image -->
<!-- <section id="video_embed">
    <div class="row">
      <div class="col-12 text-center">
      <?php 
          $image = get_field('get_involved_video_image');
          if( !empty( $image ) ): ?>
              <img tabindex="10" class="img-fluid" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" id="thumbnail"/>
      <?php endif; ?> -->
<!-- Video -->
        <!-- <div id="videoContainer" style="display: none;">
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
</section> -->


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



  <!-- JOIN Spokespebble -->
  <section id="joinspoke">
  <div class="container-md">
  <div class="row align-items-center">

    <div class="col-md-12 text-center">
    <h2 tabindex="22" class="text-center"><?php the_field('join_in_title'); ?></h2>
    </div>

  </div>

  <div class="row">
    <div tabindex="23" class="col-md-10 offset-md-1">
        <?php the_field('join_in_paragraph'); ?>
        <a tabindex="24" href="<?php the_field('download_link'); ?>" class="btn" target="_blank"><?php the_field('cta_download_link'); ?></a>
    </div>
  </div>
  </div>
</section>

 <!-- CONTACT FORM -->
 <div class="contactpad">
<? get_template_part( 'components/contactform3' ); ?>
</div>

<?php get_footer();?> 