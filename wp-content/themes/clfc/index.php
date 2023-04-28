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
        <?php the_field('main_paragraph'); ?>
        <a href="<?php the_field('learn_more_button'); ?>" class="btn" target="_blank"><?php the_field('cta_learn_more_button'); ?></a>
      </div>
    </div>
</section> 

  <!-- Video --> 
  <!-- <section id="video">
    <div class="row">
      <div class="col text-center">
        <img src="https://www.respectconnectprotect.org/wp-content/uploads/2023/04/video.png" alt="Video" class="img-fluid rounded">
      </div>
    </div>
  </section> -->

<!-- Video --> 
    <section id="video">
    <div class="row">
      <div class="col text-center">
      <?php 
          $image = get_field('video_image');
          if (!empty($image)) {
          $url = get_field('home_video_url');
          ?>
          <a href="<?php echo $url; ?>" target="_blank"><img src="<?php 
          echo $image['url']; ?>" alt="Video" class="img-fluid rounded<?php 
          echo $image['alt']; ?>" /></a>
          <?php 
      }?>
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
          <a href="<?php echo $url; ?>" target="_blank"><img src="<?php 
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
          <a href="<?php echo $url; ?>" target="_blank"><img src="<?php 
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
          <a href="<?php echo $url; ?>" target="_blank"><img src="<?php 
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

<?php get_footer();?> 
