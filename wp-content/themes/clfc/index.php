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
        <h1 class="text-center">
        <?php the_field('heading'); ?></h1>
      </div>
  </div>
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <div class="main-text">
          <?php the_field('main_paragraph'); ?>
        </div>
        <a href="<?php the_field('learn_more_button'); ?>" class="btn"><?php the_field('cta_learn_more_button'); ?></a>
      </div>
    </div>
</section>

<div class="vertical-spacer-sm">&nbsp;</div>

<!-- Video Embed --> 
<!-- Image -->
<section id="video_embed">
    <div class="row">
      <div class="col-12 text-center">
          <img src="https://www.respectconnectprotect.org/wp-content/uploads/2023/05/spokespebble-video.png" alt="Thumbnail Image" id="thumbnail" />
<!-- Video -->
      <div id="videoContainer" style="display: none;">
            <iframe width="1211" height="674" src="https://www.youtube.com/embed/jqS44UH7Nrs?&autoplay=1" frameborder="0" allowfullscreen></iframe>
    </div>
  </div>
</div>
</section>


  <!-- OUR CAMPAIGN -->
  <section id="campaign">
    <div class="row">
      <div class="col-12 text-center">
        <h2><?php the_field('title_how_to'); ?></h2>
      </div>
    </div>
    
    <div class="row">
      <div class="col-md-10 offset-md-1">
        <p>
          <?php the_field('how_to_paragraph'); ?>
        </p>
      </div>
    </div>
    
    <div class="row justify-content-center">
      <div class="col-md-3 col-sm-12 text-center">
      <a href="<?php echo get_site_url(); ?>/resources/#respect">
      <?php 
          $image = get_field('respect_icon');
          if (!empty($image)) {
          $url = get_field('respect_icon_url');
          ?>
          <a href="<?php echo $url; ?>" target="_self"><img src="<?php 
          echo $image['url']; ?>" alt="Video" class="img-fluid rounded<?php 
          echo $image['alt']; ?>" /></a>
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
          <a href="<?php echo $url; ?>" target="_self"><img src="<?php 
          echo $image['url']; ?>" alt="Video" class="img-fluid rounded<?php 
          echo $image['alt']; ?>" /></a>
          <?php 
      }?>
      </div>
      <div class="col-md-3 col-sm-12 text-center">
      <?php 
          $image = get_field('protect_icon');
          if (!empty($image)) {
          $url = get_field('protect_icon_url');
          ?>
          <a href="<?php echo $url; ?>" target="_self"><img src="<?php 
          echo $image['url']; ?>" alt="Video" class="img-fluid rounded<?php 
          echo $image['alt']; ?>" /></a>
          <?php 
      }?>
      </div>
    </div>
  </section>
  
  <!-- CONTACT FORM -->
  <? get_template_part( 'components/contactform' ); ?>
  
    <!-- SPONSORS
    <section id="sponsors">
      <div class="row">
        <div class="col-md-12 text-center">
          <h2>Sponsors</h2>
        </div>
      </div>
      
      <div class="row justify-content-center">
        <div class="col-md-3 col-sm-12 text-center">
          <img src="https://dummyimage.com/180x190/ccc/fff" alt="Image 1" class="img-fluid">
          <h3>Sponsor 1</h3>
        </div>
        <div class="col-md-3 col-sm-12 text-center">
          <img src="https://dummyimage.com/180x190/ccc/fff" alt="Image 2" class="img-fluid">
          <h3>Sponsor 2</h3>
        </div>
        <div class="col-md-3 col-sm-12 text-center">
          <img src="https://dummyimage.com/180x190/ccc/fff" alt="Image 3" class="img-fluid">
          <h3>Sponsor 3</h3>
        </div>
      </div>
    </section>
    -->

    <!-- PARTNERS SECTION -->
    <section id="partners">
    <div class="row">
      <div class="col-12 text-center">
        <h2><?php the_field('partners_title'); ?></h2>
      </div>
    </div>    
    <div class="row justify-content-center">
      <div class="col-md-3 col-sm-12 text-center">
      <a href="<?php echo get_site_url(); ?>/resources/#respect">
      <?php 
          $image = get_field('partner1');
          if (!empty($image)) {
          $url = get_field('partner1_url');?>
          <a href="<?php echo $url; ?>" target="_self"><img class="partner1" src="<?php 
          echo $image['url']; ?>" alt="Video" class="img-fluid rounded<?php 
          echo $image['alt']; ?>" /></a>
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
          echo $image['url']; ?>" alt="Video" class="img-fluid rounded<?php 
          echo $image['alt']; ?>" /></a>
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
          echo $image['url']; ?>" alt="Video" class="img-fluid rounded<?php 
          echo $image['alt']; ?>" /></a>
          <?php 
      }?>
      </div>
    </div>
  </section>


<?php get_footer();?> 
