<?php
/*
Template Name: About
*/
?>
<?php get_header();?>

<!-- HERO -->
<section id="hero-aboutus">
    <div class="container"> 
        <h1><?php the_field('about_heading'); ?></h1>
    </div>
</section>

<!-- WHAT ARE NATIONAL SECTION --> 
<section id="whatare">
<div class="container">
  <div class="row">
    <div class="col-md-12 col-lg-8">
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
    <div class="col-md-12 col-lg-4">
        <?php 
            $image = get_field('map_of_conservation_image');
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
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="clfc-logo"/>
      <?php endif; ?>
    </div>
    <div class="col-md-12 col-lg-9">
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
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="blm-logo"/>
      <?php endif; ?>
    </div>
    <div class="col-md-12 col-lg-9">
      <h3><?php the_field('about_bureau_title'); ?></h3>
      <p><?php the_field('about_bureau_paragraph'); ?></p>
    </div>
  </div>
</div>
<img class="waveabout" src="https://www.respectconnectprotect.org/wp-content/uploads/2023/04/waveabout.png" alt="wave line">
</section>

<!--LOGOS AND ABOUT -->
<section id="instagram-embed">
    <div class="row align-items-center">
        <div class="col-md-10 offset-md-1">
            <iframe src="https://www.instagram.com/conservationlands/embed" width="100%" height="530" frameborder="0" scrolling="no" allowtransparency="true"></iframe>
        </div>
    </div>
</section>

<?php get_footer();?>
