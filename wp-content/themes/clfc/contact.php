<?php
/*
Template Name: Contact
*/
?>

 <!-- HEADER -->
<?php get_header();?>

 <!-- CONTACT HERO -->
 <section id="contactpage">
  <div class="row align-items-center">
      <div class="col-md-12 text-center">
        <h1 class="text-center">
        <?php the_field('contact_title'); ?></h1>
      </div>
  </div>
    <div class="row">
      <div class="col-md-12 text-center">
        <div class="main-text">
          <?php the_field('contact_paragraph'); ?>
        </div>
      </div>
    </div>
</section>



 <!-- CONTACT FORM -->
<div class="contactpad">
<? get_template_part( 'components/contactform2' ); ?>
</div>

 <!-- FOOTER -->
<?php get_footer();?> 