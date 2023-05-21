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

        <?php
// Custom loop for a specific category
function custom_category_loop() {
  // Define the query arguments for the loop
  $query_args = array(
      'category_name' => 'Respect',
      'posts_per_page' => 10, // Adjust the number of posts per page as needed
      'order' => 'ASC', // Order posts in descending order
  );

  // Execute the query
  $query = new WP_Query($query_args);

  // Loop through the posts
  if ($query->have_posts()) {
      while ($query->have_posts()) {
          $query->the_post();

          echo '
          <div class="col-md-4 col-sm-12">
          <div class="position-relative"> ';

            // Echo the featured image
            if (has_post_thumbnail()) {
                echo '<div class="featured-image">';
                the_post_thumbnail();
                echo '</div>';
            }

            echo '<div class="boxedtext bg">';

            echo '<span tabindex="12" class="imagelink"';
            the_content();
            echo '</span>';
            echo '</div>';

          echo '
          </div>
          </div>
          ';

      }
  }

  // Reset post data
  wp_reset_postdata();
}

// Output the custom loop on a specific page or template file
custom_category_loop();

        ?>

    </div> <!-- end of row -->
  </div> <!-- end of container -->
</section>

<div class="vertical-spacer-sm">&nbsp;</div>

<div class="line"></div>

<div class="vertical-spacer-sm">&nbsp;</div>

<?php get_footer();?> 
