<?php
/*
Template Name: About
*/
?>
<?php get_header();?>

<!-- HERO -->
<section id="hero-aboutus">
    <div class="container">
        <h1>About</h1>
    </div>
</section>

<!-- WHAT ARE NATIONAL SECTION --> 
<section id="whatare">
<div class="container">
  <div class="row">
    <div class="col-md-12 col-lg-8">
      <h2>What are National<br>Conservation Lands?</h2>
      <p>As the country’s newest designation of protected public lands, National Conservation Lands are among the most essential and spectacular natural, cultural and archaeological places in the country.</p>
      <p>Managed by the Bureau of Land Management, many of these protected lands are beyond and between the National Parks and include:</p>
        <ul>
         <li>National Monuments</li>
         <li>National Conservation Areas</li>
         <li>Wilderness Areas</li>
         <li>Wild and Scenic Rivers</li>
         <li>National Scenic and Historic Trails</li>
        </ul> 
        <a href="https://www.conservationlands.org/national_conservation_lands" class="btn btn-primary" target="blank">MAP OF CONSERVATION LANDS</a>
    </div>
    <div class="col-md-12 col-lg-4">
      <img src="<?php bloginfo('template_url'); ?>/img/whatarerightimage.png" alt="cactus and desert image" class="img-fluid">
    </div>
  </div>
</div>
</section>

<!--LOGOS AND ABOUT -->
<section id="logoabout">
<div class="container">
  <div class="row">
    <div class="col-md-12 col-lg-3">
      <img class="clfc-logo" src="<?php bloginfo('template_url'); ?>/img/clfc-horizontal-logo.png" alt="Logo">
    </div>
    <div class="col-md-12 col-lg-9">
      <h3>About Conservation Lands Foundation</h3>
      <p>We power a national network of community-led organizations to conserve the largest acreage of unprotected public lands in the country that are  necessary for healthy people, planet and our way of life.<br><br>For more than 15 years, we’ve been protecting, restoring and expanding America’s National Conservation Lands.</p>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-12 col-lg-3">
      <img class="blm-logo" src="<?php bloginfo('template_url'); ?>/img/blm-logo.png" alt="Bureau of Land Management Logo">
    </div>
    <div class="col-md-12 col-lg-9">
      <h3>About the Bureau of Land Management</h3>
      <p>An agency in the U.S. Department of the Interior, the Bureau of Land Management oversees the largest amount of public lands in the United States - nearly 250 million acres - and part of its mission is to protect and conserve these natural areas for future generations. This includes the National Conservation Lands, which currently feature over 900 units covering over 36 million acres designated by Congress and the President to conserve special features and scenic landscapes, from winding rivers to open ranges to mountain vistas.</p>
    </div>
  </div>
</div>
<img class="waveabout" src="<?php bloginfo('template_url'); ?>/img/waveabout.png" alt="wave line">
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
