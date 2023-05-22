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



  </div> <!-- end of container -->
</section>


<div id="post-container-respect" class="container-md"></div>
<div class="container-md"><div id="view-more-trigger-respect" class="text-center">SHOW MORE</div></div>
<script src="<?php bloginfo('template_url'); ?>/js/respect.js"></script>

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
    <div id="post-container-connect" class="container-md"></div>
    <div class="container-md"><div id="view-more-trigger-connect" class="text-center">SHOW MORE</div></div>
    <script src="<?php bloginfo('template_url'); ?>/js/connect.js"></script>
    </div>
  </div>
</section>

<div class="vertical-spacer-sm">&nbsp;</div>
<div class="line"></div>

<!-- PROTECT -->
<div class="vertical-spacer-sm">&nbsp;</div>

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
    </div>
    <div class="vertical-spacer-sm">&nbsp;</div>
    <div id="post-container-protect" class="container-md"></div>
    <div class="container-md"><div id="view-more-trigger-protect" class="text-center">SHOW MORE</div></div>
   
    <script src="<?php bloginfo('template_url'); ?>/js/protect.js"></script>
    </div>
  </div>
</section>


<div class="vertical-spacer-sm">&nbsp;</div>

<?php get_footer();?> 
