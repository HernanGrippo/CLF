<?php get_header();?>

 <!-- HERO -->
  <section id="hero">
    <div class="row align-items-center">
      <div class="col-md-2">
        <div class="text-center d-sm-none d-md-block">
          <img src="<?php bloginfo('template_url'); ?>/img/waves.png" alt="waves">
        </div>
      </div>
      <div class="col-md-8 text-center">
        <h1 class="text-center">Respect. Connect. Protect</h1>
      </div>
      <div class="col-md-2 text-center">
        <div class="text-center d-sm-none d-md-block">
          <img src="<?php bloginfo('template_url'); ?>/img/waves.png" alt="waves">
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-8 offset-md-2">
        <p>Led by Conservation Lands Foundation, the Bureau of Land Management, and an array of local and indigenous affiliate groups, “Respect. Connect. Protect.” is a campaign designed. to encourage enthusiastic, respectful, and safe usage of National Conservation Lands.</p>
        <button class="btn">LEARN MORE</button>
      </div>
    </div>

  </section>

  <!-- Video -->
  <section id="video">
    <div class="row">
      <div class="col text-center">
        <img src="<?php bloginfo('template_url'); ?>/img/video.png" alt="Video" class="img-fluid rounded">
      </div>
    </div>
  </section>

  <!-- OUR CAMPAIGN -->
  <section id="campaign">
    <div class="row">
      <div class="col-12 text-center">
        <h2>Our Campaign</h2>
      </div>
    </div>
    
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <p>The coalition works collaboratively to develop messaging and content (including the Spokespebble video series), to provide specific regional guidance, and to ensure campaign messaging and activations are appropriately respectful of the experiences and traditions of indigenous groups.</p>
      </div>
    </div>
    
    <div class="row justify-content-center">
      <div class="col-md-3 col-sm-12 text-center">
        <img src="<?php bloginfo('template_url'); ?>/img/respect.png" alt="Respect" class="img-fluid rounded">
      </div>
      <div class="col-md-3 col-sm-12 text-center">
        <img src="<?php bloginfo('template_url'); ?>/img/connect.png" alt="Respect" class="img-fluid rounded">
      </div>
      <div class="col-md-3 col-sm-12 text-center">
        <img src="<?php bloginfo('template_url'); ?>/img/protect.png" alt="Pretect" class="img-fluid rounded">
      </div>
    </div>
  </section>

  <section id="contact-form">
    <div class="row">
      <div class="col">
        <div class="container">
          <div class="left text-center">
            <h2>Get Involved.</h2>
            <p>Sign up for our mailing list.</p>
          </div>
            <div class="right text-center">
                <div class="form">
                   <?php echo apply_shortcodes('[contact-form-7 id="11" title="Contact form 1"]'); ?>
                </div>  
            </div>
        </div>  
      </div>
    </div>
  </section>

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

</div>
<?php get_footer();?> 
