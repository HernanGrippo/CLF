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
</section>
  
<!-- RESPECT -->
<section id="respect">
  <div class="container">
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
    <div class="vertical-spacer-sm">&nbsp;</div>
    <div class="row">
      <div class="col-md-4">
        <div class="position-relative">
          <?php 
                $image = get_field('image_respect_left');
                if( !empty( $image ) ): ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="card-img-top" class="img-fluid"/>
          <?php endif; ?>
          <div class="boxedtext bg">
            <a class="imagelink" href="<?php the_field('image_respect_left_url'); ?>" target="_blank"><?php the_field('image_respect_left_text'); ?></a>
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
          <div class="boxedtext bg">
            <a class="imagelink" href="<?php the_field('image_respect_center_url'); ?>" target="_blank"><?php the_field('image_respect_center_text'); ?></a>
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
          <div class="boxedtext bg">
            <a class="imagelink" href="<?php the_field('image_respect_right_url'); ?>" target="_blank"><?php the_field('image_respect_right_text'); ?></a>
          </div>
        </div>
      </div>
    </div> <!-- end of row -->
  </div> <!-- end of container -->
</section>

<div class="vertical-spacer-sm">&nbsp;</div>

<div class="line"></div>

<div class="vertical-spacer-sm">&nbsp;</div>

<!-- CONNECT -->
<section id="connect">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
      <?php 
            $image = get_field('connect_section_icon');
            if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="connecticon"/>
      <?php endif; ?>
      </div>
      <div class="col-md-9">
        <h2><?php the_field('connect_title_copy'); ?></h2>
        <?php the_field('connect_paragraph'); ?>
      </div>
    </div>
    <div class="vertical-spacer-sm">&nbsp;</div>
    <div class="row">
      <div class="col-md-4">
        <div class="position-relative">
          <?php 
                $image = get_field('image_connect_left');
                if( !empty( $image ) ): ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="card-img-top" class="img-fluid"/>
          <?php endif; ?>
          <div class="boxedtext bg">
            <a class="imagelink" href="<?php the_field('image_connect_left_url'); ?>" target="_blank"><?php the_field('image_connect_left_text'); ?></a>
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
          <div class="boxedtext bg">
            <a class="imagelink" href="<?php the_field('image_connect_center_url'); ?>" target="_blank"><?php the_field('image_connect_center_text'); ?></a>
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
          <div class="boxedtext bg">
            <a class="imagelink" href="<?php the_field('image_connect_right_url'); ?>" target="_blank"><?php the_field('image_connect_right_text'); ?></a>
          </div>
        </div>
      </div>
    </div> <!-- end of row -->
  </div> <!-- end of container -->
</section>

<div class="vertical-spacer-sm">&nbsp;</div>

<div class="line"></div>

<div class="vertical-spacer-sm">&nbsp;</div>

<!-- PROTECT -->
<section id="protect">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
      <?php 
            $image = get_field('protect_section_icon');
            if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="protecticon"/>
      <?php endif; ?>
      </div>
      <div class="col-md-9">
        <h2><?php the_field('protect_title'); ?></h2>
        <?php the_field('protect_paragraph'); ?>
      </div>
    </div>
    <div class="vertical-spacer-sm">&nbsp;</div>
    <div class="row">
      <div class="col-md-4">
        <div class="position-relative">
          <?php 
                $image = get_field('image_protect_left');
                if( !empty( $image ) ): ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="card-img-top" class="img-fluid"/>
          <?php endif; ?>
          <div class="boxedtext bg">
            <a class="imagelink" href="<?php the_field('image_protect_left_url'); ?>" target="_blank"><?php the_field('image_protect_left_text'); ?></a>
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
          <div class="boxedtext bg">
            <a class="imagelink" href="<?php the_field('image_protect_center_url'); ?>" target="_blank"><?php the_field('image_protect_center_text'); ?></a>
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
          <div class="boxedtext bg">
            <a class="imagelink" href="<?php the_field('image_protect_right_url'); ?>" target="_blank"><?php the_field('image_protect_right_text'); ?></a>
          </div>
        </div>
      </div>
    </div> <!-- end of row -->
  </div> <!-- end of container -->
</section>

<div class="vertical-spacer-sm">&nbsp;</div>

<?php get_footer();?> 
