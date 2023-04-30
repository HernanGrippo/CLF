<?php
/*
Template Name: Resources
*/
?>
<?php get_header();?>

  <!-- RESOURCES --> 

  <section id="resources">
    <div class="row">
      <div class="col-12 text-center">
        <h2><?php the_field('resources_heading'); ?></h2>
      </div>
    </div>
    
    <div class="row">
      <div class="col-md-10 offset-md-1">
        <?php the_field('resources_paragraph'); ?>
      </div>
    </div>
    
    <div class="row justify-content-center">
      <div class="col-md-3 col-sm-12 text-center">
      <?php 
          $image = get_field('resources_respect_icon');
          if (!empty($image)) {
          $url = get_field('resources_respect_icon_url');
          ?>
          <a href="<?php echo $url; ?>" ><img src="<?php 
          echo $image['url']; ?>" alt="Video" class="img-fluid rounded<?php 
          echo $image['alt']; ?>" /></a>
          <?php 
      }?>
      </div> 
      <div class="col-md-3 col-sm-12 text-center">
      <?php 
          $image = get_field('resources_connect_icon');
          if (!empty($image)) {
          $url = get_field('resources_connect_icon_url');
          ?>
          <a href="<?php echo $url; ?>" ><img src="<?php 
          echo $image['url']; ?>" alt="Video" class="img-fluid rounded<?php 
          echo $image['alt']; ?>" /></a>
          <?php 
      }?>
      </div>
      <div class="col-md-3 col-sm-12 text-center">
      <?php 
          $image = get_field('resources_protect_icon');
          if (!empty($image)) {
          $url = get_field('resources_protect_icon_url');
          ?>
          <a href="<?php echo $url; ?>" ><img src="<?php 
          echo $image['url']; ?>" alt="Video" class="img-fluid rounded<?php 
          echo $image['alt']; ?>" /></a>
          <?php 
      }?>
      </div>
    </div>
  </section>
  
<!-- RESPECT -->
<section id="respect">
  <div class="container">
  <div class="line"></div>
  <div class="row">
    <div class="col-md-3">
      <?php 
            $image = get_field('respect_section_icon');
            if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="respecticon"/>
      <?php endif; ?>
    </div>
    <div class="col-md-9">
      <h2><?php the_field('respect_title'); ?></h2>
      <?php the_field('respect_paragraph'); ?>
    </div>
  </div>
</div>
</setion>

<section id="respect2">
<div class="container2">
  <div class="row">
    <div class="col-md-4">
      <div class="position-relative">
        <?php 
              $image = get_field('image_respect_left');
              if( !empty( $image ) ): ?>
              <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="card-img-top" class="img-fluid"/>
        <?php endif; ?>
        <div class="bottom-0 start-0 w-100 bg">
        <div class="boxedtext">
          <a class="imagelink" href="<?php the_field('image_respect_left_url'); ?>" target="_blank"><?php the_field('image_respect_left_text'); ?></a>
        </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="position-relative">
      <?php 
              $image = get_field('image_respect_center');
              if( !empty( $image ) ): ?>
              <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="card-img-top" class="img-fluid"/>
        <?php endif; ?>
      <div class="bottom-0 start-0s w-100 bg">
        <div class="boxedtext">
           <a class="imagelink" href="<?php the_field('image_respect_center_url'); ?>" target="_blank"><?php the_field('image_respect_center_text'); ?></a>
        </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="position-relative">
      <?php 
              $image = get_field('image_respect_right');
              if( !empty( $image ) ): ?>
              <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="card-img-top" class="img-fluid"/>
        <?php endif; ?>
      <div class="bottom-0 start-0 w-100 bg">
        <div class="boxedtext">
           <a class="imagelink" href="<?php the_field('image_respect_right_url'); ?>" target="_blank"><?php the_field('image_respect_right_text'); ?></a>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div>
<!-- <a href="https://www.conservationlands.org/national_conservation_lands"  class="resourceslink" target="blank">SHOW MORE<img src="https://www.respectconnectprotect.org/wp-content/uploads/2023/04/yellowarrow.png" alt="imagen"></a> -->
</div>
</section>

<!-- CONNECT -->
<section id="connect">
  <div class="container">
  <div class="line"></div>
  <div class="row">
    <div class="col-md-3">
    <?php 
            $image = get_field('connect_section_icon');
            if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="respecticon"/>
      <?php endif; ?>
    </div>
    <div class="col-md-9">
      <h2>Connect.</h2>
      <p>When you visit America’s public lands, you have a unique opportunity to connect with yourselves, with each other, and with the history and meaning of the land itself. Learn more about the ongoing story of the land - and how you can become a part of it - below.</p>
    </div>
  </div>
</div>
</setion>

<section id="respect2">
<div class="container2">
  <div class="row">
    <div class="col-md-4">
      <div class="position-relative">
      <?php 
              $image = get_field('image_connect_left');
              if( !empty( $image ) ): ?>
              <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="card-img-top" class="img-fluid"/>
        <?php endif; ?>
      <div class="bottom-0 start-0 w-100 bg">
          <div class="boxedtext">
            <a class="imagelink" href="<?php the_field('image_connect_left_url'); ?>" target="_blank"><?php the_field('image_connect_left_text'); ?></a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="position-relative">
      <?php 
              $image = get_field('image_connect_center');
              if( !empty( $image ) ): ?>
              <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="card-img-top" class="img-fluid"/>
        <?php endif; ?>
      <div class="bottom-0 start-0s w-100 bg">
        <div class="boxedtext">
           <a class="imagelink" href="<?php the_field('image_connect_center_url'); ?>" target="_blank"><?php the_field('image_connect_right_text'); ?></a>
        </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="position-relative">
      <?php 
              $image = get_field('image_connect_right');
              if( !empty( $image ) ): ?>
              <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="card-img-top" class="img-fluid"/>
        <?php endif; ?>
      <div class="bottom-0 start-0 w-100 bg">
        <div class="boxedtext">
        <a class="imagelink" href="<?php the_field('image_connect_right_url'); ?>" target="_blank"><?php the_field('image_connect_right_text'); ?></a>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div>
<!-- <a href="https://www.conservationlands.org/national_conservation_lands"  class="resourceslink" target="blank">SHOW MORE<img src="https://www.respectconnectprotect.org/wp-content/uploads/2023/04/yellowarrow.png" alt="imagen"></a> -->
</div>
</section>

<!-- PROTECT -->
<section id="protect">
  <div class="container">
  <div class="line"></div>
  <div class="row">
    <div class="col-md-3">
    <?php 
            $image = get_field('protect_section_icon');
            if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="respecticon"/>
      <?php endif; ?>
    </div>
    <div class="col-md-9">
      <h2>Protect.</h2>
      <p>When you visit America’s public lands, you’re more than a tourist - you’re a steward of the land and a caretaker for the next generation of explorers. We’ll show you how to keep the land clean, in good health, and accessible.</p>
    </div>
  </div>
</div>
</setion>

<section id="respect2">
<div class="container2">
  <div class="row">
    <div class="col-md-4">
      <div class="position-relative">
      <?php 
              $image = get_field('image_protect_left');
              if( !empty( $image ) ): ?>
              <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="card-img-top" class="img-fluid"/>
        <?php endif; ?>
      <div class="bottom-0 start-0 w-100 bg">
        <div class="boxedtext">
           <a class="imagelink" href="<?php the_field('image_protect_left_url'); ?>" target="_blank"><?php the_field('image_protect_left_text'); ?></a>
        </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="position-relative">
      <?php 
              $image = get_field('image_protect_center');
              if( !empty( $image ) ): ?>
              <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="card-img-top" class="img-fluid"/>
        <?php endif; ?>
      <div class="bottom-0 start-0s w-100 bg">
        <div class="boxedtext">
            <a class="imagelink" href="<?php the_field('image_protect_center_url'); ?>" target="_blank"><?php the_field('image_protect_center_text'); ?></a>
        </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="position-relative">
      <?php 
              $image = get_field('image_pro_right');
              if( !empty( $image ) ): ?>
              <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="card-img-top" class="img-fluid"/>
        <?php endif; ?>
        <!-- <img src="https://www.respectconnectprotect.org/wp-content/uploads/2023/04/family.png" class="card-img-top" class="img-fluid" alt="..."> -->
        <div class="bottom-0 start-0 w-100 bg">
        <div class="boxedtext">
            <a class="imagelink" href="<?php the_field('image_protect_right_url'); ?>" target="_blank"><?php the_field('image_protect_right_text'); ?></a>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div>
<!-- <a href="https://www.conservationlands.org/national_conservation_lands"  class="resourceslink" target="blank">SHOW MORE<img src="https://www.respectconnectprotect.org/wp-content/uploads/2023/04/yellowarrow.png" alt="imagen"></a> -->
</div>
</section>


<?php get_footer();?> 
