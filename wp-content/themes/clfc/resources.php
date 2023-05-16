<?php
/*
Template Name: Resources
*/
?>
<?php get_header();?>

  <!-- RESOURCES --> 

<section id="resources">
  <div class="row">
    <div class="col-12 text-center align-middle">
      <h1 tabindex="7"><?php the_field('resources_heading'); ?></h1>
    </div>
  </div>
</section>
  
<!-- RESPECT -->
<section id="respect">
  <div class="container-md">
    <div class="row">
      <div class="col-md-3 col-sm-12">
        <?php 
              $image = get_field('respect_section_icon');
              if( !empty( $image ) ): ?>
              <img tabindex="8" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="mx-auto d-block"/>
        <?php endif; ?>
      </div>
      <div class="col-md-9 col-sm-12">
        <h2 tabindex="9"><?php the_field('respect_title'); ?></h2>
        <div tabindex="10"><p><?php the_field('respect_paragraph'); ?></div>
      </div>
    </div>
    <div class="vertical-spacer-sm">&nbsp;</div>
    <div class="row">
      <div class="col-md-4 col-sm-12">
        <div class="position-relative">
          <?php 
                $image = get_field('image_respect_left');
                if( !empty( $image ) ): ?>
                <img tabindex="11" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="card-img-top img-fluid"/>
          <?php endif; ?>
          <div class="boxedtext bg">
            <a tabindex="12" class="imagelink" href="<?php the_field('image_respect_left_url'); ?>" target="_blank"><?php the_field('image_respect_left_text'); ?></a>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-12">
        <div class="position-relative">
          <?php 
                $image = get_field('image_respect_center');
                if( !empty( $image ) ): ?>
                <img tabindex="13" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="card-img-top img-fluid"/>
          <?php endif; ?>
          <div class="boxedtext bg">
            <a tabindex="14" class="imagelink" href="<?php the_field('image_respect_center_url'); ?>" target="_blank"><?php the_field('image_respect_center_text'); ?></a>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-12">
        <div class="position-relative">
          <?php 
                $image = get_field('image_respect_right');
                if( !empty( $image ) ): ?>
                <img tabindex="15" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="card-img-top img-fluid"/>
          <?php endif; ?>
          <div class="boxedtext bg">
            <a tabindex="16" class="imagelink" href="<?php the_field('image_respect_right_url'); ?>" target="_blank"><?php the_field('image_respect_right_text'); ?></a>
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
  <div class="container-md">
    <div class="row">
      <div class="col-md-3">
      <?php 
            $image = get_field('connect_section_icon');
            if( !empty( $image ) ): ?>
            <img tabindex="17" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="mx-auto d-block"/>
      <?php endif; ?>
      </div>
      <div class="col-md-9">
        <h2 tabindex="18"><?php the_field('connect_title_copy'); ?></h2>
        <div tabindex="19"><?php the_field('connect_paragraph'); ?></div>
      </div>
    </div>
    <div class="vertical-spacer-sm">&nbsp;</div>
    <div class="row">
      <div class="col-md-4">
        <div class="position-relative">
          <?php 
                $image = get_field('image_connect_left');
                if( !empty( $image ) ): ?>
                <img tabindex="20" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="card-img-top img-fluid"/>
          <?php endif; ?>
          <div class="boxedtext bg">
            <a tabindex="21" class="imagelink" href="<?php the_field('image_connect_left_url'); ?>" target="_blank"><?php the_field('image_connect_left_text'); ?></a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="position-relative">
          <?php 
                $image = get_field('image_connect_center');
                if( !empty( $image ) ): ?>
                <img tabindex="22" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="card-img-top img-fluid"/>
          <?php endif; ?>
          <div class="boxedtext bg">
            <a tabindex="23" class="imagelink" href="<?php the_field('image_connect_center_url'); ?>" target="_blank"><?php the_field('image_connect_center_text'); ?></a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="position-relative">
          <?php 
                $image = get_field('image_connect_right');
                if( !empty( $image ) ): ?>
                <img tabindex="24" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="card-img-top img-fluid"/>
          <?php endif; ?>
          <div class="boxedtext bg">
            <a tabindex="25" class="imagelink" href="<?php the_field('image_connect_right_url'); ?>" target="_blank"><?php the_field('image_connect_right_text'); ?></a>
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
  <div class="container-md">
    <div class="row">
      <div class="col-md-3 col-sm-12">
      <?php 
            $image = get_field('protect_section_icon');
            if( !empty( $image ) ): ?>
            <img tabindex="26" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="mx-auto d-block"/>
      <?php endif; ?>
      </div>
      <div class="col-md-9">
        <h2 tabindex="27"><?php the_field('protect_title'); ?></h2>
        <div tabindex="28"><?php the_field('protect_paragraph'); ?></div>
      </div>
    </div>
    <div class="vertical-spacer-sm">&nbsp;</div>
    <div class="row">
      <div class="col-md-4">
        <div class="position-relative">
          <?php 
                $image = get_field('image_protect_left');
                if( !empty( $image ) ): ?>
                <img tabindex="29" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="card-img-top img-fluid"/>
          <?php endif; ?>
          <div class="boxedtext bg">
            <a tabindex="30" class="imagelink" href="<?php the_field('image_protect_left_url'); ?>" target="_blank"><?php the_field('image_protect_left_text'); ?></a>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-12">
        <div class="position-relative">
          <?php 
                $image = get_field('image_protect_center');
                if( !empty( $image ) ): ?>
                <img tabindex="31" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="card-img-top img-fluid"/>
          <?php endif; ?>
          <div class="boxedtext bg">
            <a tabindex="32" class="imagelink" href="<?php the_field('image_protect_center_url'); ?>" target="_blank"><?php the_field('image_protect_center_text'); ?></a>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-12">
        <div class="position-relative">
          <?php 
                $image = get_field('image_pro_right');
                if( !empty( $image ) ): ?>
                <img tabindex="33" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="card-img-top img-fluid"/>
          <?php endif; ?>
          <div class="boxedtext bg">
            <a tabindex="34" class="imagelink" href="<?php the_field('image_protect_right_url'); ?>" target="_blank"><?php the_field('image_protect_right_text'); ?></a>
          </div>
        </div>
      </div>
    </div> <!-- end of row -->
  </div> <!-- end of container -->
</section>

<div class="vertical-spacer-sm">&nbsp;</div>

<?php get_footer();?> 
