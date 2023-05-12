<?php
/*
Template Name: About
*/
?>
<?php get_header();?>

<!-- HERO -->
<section id="hero-aboutus">
  <div class="container"> 
    <div class="row">
      <div class="col">
        <div class="hero">
          <h1 tabindex="7"><?php the_field('about_heading'); ?></h1>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- WHAT ARE NATIONAL SECTION --> 
<section id="whatare">
<div class="container">
  <div class="row">
    <div class="col-md-12 col-lg-7 text-left">
      <h2 tabindex="8"><?php the_field('national_lands_title'); ?></h2>
      <div tabindex="9"><p><?php the_field('national_lands_paragraph'); ?></p></div>
        <ul>
         <li tabindex="10"><?php the_field('bullet_list_1'); ?></li>
         <li tabindex="11"><?php the_field('bullet_list_2'); ?></li>
         <li tabindex="12"><?php the_field('bullet_list_3'); ?></li>
         <li tabindex="13"><?php the_field('bullet_list_4'); ?></li>
         <li tabindex="14"><?php the_field('bullet_list_5'); ?></li>
        </ul>
        <div class="centerbutton">        
        <a tabindex="15" href="<?php the_field('map_of_conservation_button_link'); ?>" class="btn btn-primary" target="_blank"><?php the_field('map_of_conservation_label'); ?></a>
        </div>
    
      </div>
    <div class="col-md-12 col-lg-5">
        <?php 
            $image = get_field('map_of_conservation_image');
            if( !empty( $image ) ): ?>
            <img tabindex="16" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="img-fluid mx-auto d-block"/>
        <?php endif; ?>
    </div>
  </div>
</div>
</section>

<!-- ABOUT THE CAMPAIGN SECTION --> 
<section id="aboutthecampaign">
<div class="container">
  <div class="row">
    <div class="col-md-12 col-lg-7 text-left">
      <h2 tabindex="17"><?php the_field('about_the_campaign_title'); ?></h2>
        <div class="rockydisappearsondesktop col-md-12 col-lg-5">
            <?php 
                $image = get_field('about_the_campaign_image');
                if( !empty( $image ) ): ?>
                <img tabindex="18" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="img-fluid mx-auto d-block" />
            <?php endif; ?>
        </div>
      <div tabindex="18"><p><?php the_field('about_the_campaign_paragraph'); ?></p></div>
    </div>
    <div class="rockydisappearsonmobile col-md-12 col-lg-5">
        <?php 
            $image = get_field('about_the_campaign_image');
            if( !empty( $image ) ): ?>
            <img tabindex="20" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="img-fluid mx-auto d-block" />
        <?php endif; ?>
    </div>
  </div>
</div>
</section>


<!--LOGOS AND ABOUT -->
<section id="logoabout">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-3">    
        <?php 
              $image = get_field('conservation_icon');
              if( !empty( $image ) ): ?>
              <img tabindex="21" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="clfc-logo mx-auto d-block"/>
        <?php endif; ?>
      </div>
      <div class="col-md-12 col-lg-8">
        <h3 tabindex="22"><?php the_field('about_conservation_title'); ?></h3>
        <p tabindex="23"><?php the_field('about_conservation_paragraph'); ?></p>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-3">
        <?php 
              $image = get_field('about_bureau_icon');
              if( !empty( $image ) ): ?>
              <img tabindex="24" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="blm-logo mx-auto d-block"/>
        <?php endif; ?>
      </div>
      <div class="col-md-12 col-lg-9">
        <h3 tabindex="25"><?php the_field('about_bureau_title'); ?></h3>
        <p tabindex="26"><?php the_field('about_bureau_paragraph'); ?></p>
      </div>
    </div>
  </div>
</section>

<!--LOGOS AND ABOUT -->
<section id="instagram-embed">
  <div class="container">
    <div class="row align-items-center">
          <?php 
                $image = get_field('about_wave');
                if( !empty( $image ) ): ?>
                <img tabindex="27" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="about-wave mx-auto d-block"/>
          <?php endif; ?>
        <div class="col-md-10 offset-md-1">
            <iframe tabindex="28" src="https://www.instagram.com/conservationlands/embed" width="100%" height="600" frameborder="0" scrolling="no" allowtransparency="true"></iframe>
        </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="vertical-spacer-xs ">&nbsp;</div>
        <p class="text-center">Follow us <span>@conservationlands</span></p>
      </div>
    </div>
  </div>
</section>

<?php get_footer();?>
