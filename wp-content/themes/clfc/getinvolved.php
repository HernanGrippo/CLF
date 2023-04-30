<?php
/*
Template Name: GetInvolved
*/
?>
<?php get_header();?>

<!-- HERO -->
<section id="hero-getinvolved">
    <div class="row align-items-center">
      <div class="col-md-0">
        <div class="text-center d-sm-none d-md-block">
        </div>
      </div>
      <div class="col-md-12 text-center">
        <h1 class="text-center"><?php the_field('get_involved_heading'); ?></h1>
      </div>
      <div class="col-md-0">
        <div class="text-center d-sm-none d-md-block">
        </div>
      </div>
</div>
<?php the_field('get_involved_paragraph'); ?>
</section>

<!-- WHAT ARE NATIONAL SECTION -->
<section id="meet">
<div class="container">
  <div class="row">
    <div class="col-md-12 col-lg-8">
      <h2><?php the_field('meet_spokespebble_title'); ?></h2>
      <?php the_field('meet_spokespebble_paragraph'); ?>
        <!-- <ul>
         <li><b>Favorite food:</b> Rock candy.</li>
         <li><b>Favorite movie:</b> The Rock.</li>
         <li><b>Favorite genre of comedy:</b> Rock puns.</li>
         <li><b>Favorite music:</b> Smooth jazz. (Psych. It’s rock music.)</li>
        </ul>  -->
    </div>
    <div class="col-md-12 col-lg-4">
      <img src="https://www.respectconnectprotect.org/wp-content/uploads/2023/04/rockyinvolved.png" alt="stone" class="img-fluid">
    </div>
  </div>
</div>
</section>

<!-- Video -->
  <section id="videoinvolved">
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
  </section>

  <!-- JOIN Spokespebble -->
   <section id="joinspoke">
    <div class="row align-items-center">
      <div class="col-md-0 col-lg-2">
        <div class="text-center d-sm-none d-md-block">
        </div>
      </div>
      <div class="col-md-12 col-lg-8 text-center">
      <h2 class="text-center"><?php the_field('join_in_title'); ?></h2>
      </div>
      <div class="col-md-0 col-lg-2 text-center">
        <div class="text-center d-sm-none d-md-block">
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12 col-lg-8 offset-lg-2">
          <?php the_field('join_in_paragraph'); ?>
          <a href="<?php the_field('download_link'); ?>" class="btn" target="_blank"><?php the_field('cta_download_link'); ?></a>
          <!-- <button class="btn">DOWNLOAD</button> -->
      </div>
    </div>

  </section>



<?php get_footer();?> 