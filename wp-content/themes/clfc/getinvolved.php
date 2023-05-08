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
        <div class="rockydisappearsondesktop col-md-12 col-lg-5">
            <img src="https://www.respectconnectprotect.org/wp-content/uploads/2023/04/rockyinvolved.png" alt="stone" class="img-fluid">
        </div>
        <?php the_field('meet_spokespebble_paragraph'); ?>
      </div>
      <div class="rockydisappearsonmobile col-md-12 col-lg-5">
        <img src="https://www.respectconnectprotect.org/wp-content/uploads/2023/04/rockyinvolved.png" alt="stone" class="img-fluid">
      </div>
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
            <iframe width="1211" height="674" src="https://www.youtube.com/embed/jqS44UH7Nrs?autoplay=1&mute=1" frameborder="0" allowfullscreen></iframe>
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