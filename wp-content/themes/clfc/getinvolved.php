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
          <h1><?php the_field('get_involved_heading'); ?></h1>
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
        <h2><?php the_field('meet_spokespebble_title'); ?></h2>
        <?php the_field('meet_spokespebble_paragraph'); ?>
      </div>
      <div class="col-md-12 col-lg-5">
        <img src="https://www.respectconnectprotect.org/wp-content/uploads/2023/04/rockyinvolved.png" alt="stone" class="img-fluid">
      </div>
    </div>
  </div>
</section>

<div class="vertical-spacer-sm">&nbsp;</div>

<!-- Video -->
<section id="videoinvolved">
  <div class="container-md">
    <div class="row">
      <div class="col text-center">
      <?php 
          $image = get_field('get_involved_video_image');
          if (!empty($image)) {
          $url = get_field('video_url');
          ?>
          <a href="<?php echo $url; ?>" target="_blank"><img src="<?php 
          echo $image['url']; ?>" alt="Video" class="img-fluid rounded<?php 
          echo $image['alt']; ?>" /></a>
          <?php 
      }?>
      </div>
    </div>
  </div>
</section>

  <!-- JOIN Spokespebble -->
  <section id="joinspoke">
  <div class="container-md">
  <div class="row align-items-center">

    <div class="col-md-12 text-center">
    <h2 class="text-center"><?php the_field('join_in_title'); ?></h2>
    </div>

  </div>

  <div class="row">
    <div class="col-md-10 offset-md-1">
        <?php the_field('join_in_paragraph'); ?>
        <a href="<?php the_field('download_link'); ?>" class="btn" target="_blank"><?php the_field('cta_download_link'); ?></a>
    </div>
  </div>
  </div>
</section>

 <!-- CONTACT FORM -->
 <div class="contactpad">
<? get_template_part( 'components/contactform3' ); ?>
</div>

<?php get_footer();?> 