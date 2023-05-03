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
          <h1><?php the_field('about_heading'); ?></h1>
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
      <h2><?php the_field('national_lands_title'); ?></h2>
      <p><?php the_field('national_lands_paragraph'); ?></p>
        <ul>
         <li><?php the_field('bullet_list_1'); ?></li>
         <li><?php the_field('bullet_list_2'); ?></li>
         <li><?php the_field('bullet_list_3'); ?></li>
         <li><?php the_field('bullet_list_4'); ?></li>
         <li><?php the_field('bullet_list_5'); ?></li>
        </ul>        
        <a href="<?php the_field('map_of_conservation_button_link'); ?>" class="btn btn-primary" target="_blank"><?php the_field('map_of_conservation_label'); ?></a>
      </a>

    
      </div>
    <div class="col-md-12 col-lg-5">
        <?php 
            $image = get_field('map_of_conservation_image');
            if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="img-fluid" />
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
      <h2><?php the_field('about_the_campaign_title'); ?></h2>
      <p><?php the_field('about_the_campaign_paragraph'); ?></p>
    </div>
    <div class="col-md-12 col-lg-5">
        <?php 
            $image = get_field('about_the_campaign_image');
            if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="img-fluid" />
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
              <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="clfc-logo img-fluid"/>
        <?php endif; ?>
      </div>
      <div class="col-md-12 col-lg-8">
        <h3><?php the_field('about_conservation_title'); ?></h3>
        <p><?php the_field('about_conservation_paragraph'); ?></p>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-3">
        <?php 
              $image = get_field('about_bureau_icon');
              if( !empty( $image ) ): ?>
              <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="blm-logo img-fluid"/>
        <?php endif; ?>
      </div>
      <div class="col-md-12 col-lg-9">
        <h3><?php the_field('about_bureau_title'); ?></h3>
        <p><?php the_field('about_bureau_paragraph'); ?></p>
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
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="about-wave mx-auto d-block"/>
          <?php endif; ?>
        <div class="col-md-10 offset-md-1">
            <iframe src="https://www.instagram.com/conservationlands/embed" width="100%" height="530" frameborder="0" scrolling="no" allowtransparency="true"></iframe>
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
