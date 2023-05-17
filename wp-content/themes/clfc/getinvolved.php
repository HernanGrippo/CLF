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

<!-- SUPER PLAYER --> 
<section id="superplayer">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="spacesforline">
        <div class="list-group">
          <h3>MORE VIDEOS</h3>
          <button class="list-group-item list-group-item-action d-flex align-items-center" onclick="playVideo('LvYehnKonDA')">
            <img src="<?php bloginfo('template_url'); ?>/img/videolist1.png" alt="Image 1" class="img-fluid mr-3">
            <div class="flex-grow-1">
              <p class="mb-0">It's On You | Respect. Connect. Protect.</p>
            </div>
          </button>
          <button class="list-group-item list-group-item-action d-flex align-items-center" onclick="playVideo('D02Hp2c2qTU')">
            <img src="<?php bloginfo('template_url'); ?>/img/videolist2.png" alt="Image 2" class="img-fluid mr-3">
            <div class="flex-grow-1">
              <p class="mb-0">Protect What Matters: Conservation Lands Foundation</p>
            </div>
          </button>
          <button class="list-group-item list-group-item-action d-flex align-items-center" onclick="playVideo('eOBDOZH3nns')">
            <img src="<?php bloginfo('template_url'); ?>/img/videolist3.png" alt="Image 3" class="img-fluid mr-3">
            <div class="flex-grow-1">
              <p class="mb-0">Respect. Connect. Protect. | Conserve Public Lands</p>
            </div>
          </button>
          <button class="list-group-item list-group-item-action d-flex align-items-center" onclick="playVideo('jqS44UH7Nrs')">
            <img src="<?php bloginfo('template_url'); ?>/img/videolist4.png" alt="Image 4" class="img-fluid mr-3">
            <div class="flex-grow-1">
              <p class="mb-0">Respect. Connect. Protect. A Word from Spokespebble</p>
            </div>
          </button>
          <button class="list-group-item list-group-item-action d-flex align-items-center" onclick="playVideo('-29icN6oAJ0')">
            <img src="<?php bloginfo('template_url'); ?>/img/videolist5.png" alt="Image 5" class="img-fluid mr-3">
            <div class="flex-grow-1">
              <p class="mb-0">President Biden Honors Avi Kwa Ame</p>
            </div>
          </button>
        </div>
      </div>
      </div>
      <div class="col-lg-8">
        <div class="video-player d-flex align-items-center justify-content-center">
        <div id="imageOverlay">
            <img src="<?php bloginfo('template_url'); ?>/img/supervideoplayer.png" alt="Static Image" class="overlay-image">
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
    <h2 tabindex="13" class="text-center"><?php the_field('join_in_title'); ?></h2>
    </div>

  </div>

  <div class="row">
    <div tabindex="14" class="col-md-10 offset-md-1">
        <?php the_field('join_in_paragraph'); ?>
        <a tabindex="15" href="<?php the_field('download_link'); ?>" class="btn" target="_blank"><?php the_field('cta_download_link'); ?></a>
    </div>
  </div>
  </div>
</section>

 <!-- CONTACT FORM -->
 <div class="contactpad">
<? get_template_part( 'components/contactform3' ); ?>
</div>

<?php get_footer();?> 