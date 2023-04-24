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
        <h1 class="text-center">Respect. Connect. Protect.</h1>
      </div>
  </div>
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <p>Led by Conservation Lands Foundation, in partnership with the Bureau of Land Management and an array of local and Indigenous affiliate groups, “Respect. Connect. Protect.” is a campaign to encourage enthusiastic, respectful, and safe usage of National Conservation Lands.</p>
        <a href="<?php echo get_site_url(); ?>/Get-involved/" class="btn">LEARN MORE</a>
      </div>
    </div>
</section> 

  <!-- Video --> 
  <section id="video">
    <div class="row">
      <div class="col text-center">
        <img src="https://www.respectconnectprotect.org/wp-content/uploads/2023/04/video.png" alt="Video" class="img-fluid rounded">
      </div>
    </div>
  </section>

<!-- Video --> 
    <section id="video">
    <div class="row">
      <div class="col text-center">
      <?php 
        $image = get_field('video_image');
        if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
      <?php endif; ?>
    </div>
    </div>
  </section>



  <!-- OUR CAMPAIGN -->
  <section id="campaign">
    <div class="row">
      <div class="col-12 text-center">
        <h2>How To</h2>
      </div>
    </div>
    
    <div class="row">
      <div class="col-md-10 offset-md-1">
        <p>You won’t find a list of rules posted anywhere on America’s National Conservation Lands - but if you want to enjoy the most incredible outdoor experiences around, here are a few things you need to know. <b>Click the links below</b> to learn how you can RESPECT the awesome power of nature, CONNECT with the historic splendor of the land, and PROTECT the beauty of our outdoor spaces for future generations.</p>
      </div>
    </div>
    
    <div class="row justify-content-center">
      <div class="col-md-3 col-sm-12 text-center">
      <a href="<?php echo get_site_url(); ?>/resources/#respect">
        <img src="https://www.respectconnectprotect.org/wp-content/uploads/2023/04/respect.png" alt="Respect" class="img-fluid rounded">
      </a>
      </div> 
      <div class="col-md-3 col-sm-12 text-center">
        <a href="<?php echo get_site_url(); ?>/resources/#connect">
        <img src="https://www.respectconnectprotect.org/wp-content/uploads/2023/04/connect.png" alt="Respect" class="img-fluid rounded">
        </a>
      </div>
      <div class="col-md-3 col-sm-12 text-center">
      <a href="<?php echo get_site_url(); ?>/resources/#protect">
        <img src="https://www.respectconnectprotect.org/wp-content/uploads/2023/04/protect.png" alt="Pretect" class="img-fluid rounded">
        </a>
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
