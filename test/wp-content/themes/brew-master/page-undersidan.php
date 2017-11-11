
<?php get_header();

/*
Template Name:Undersidan bacic
*/

?>



 <?php if(get_field('bild_undersida')): ?>
  <div class="intro-sub animated fadeIn undersida-img" style="background-image: url('<?php the_field('bild_undersida'); ?>'); background-position: center center; background-size:cover;">
 <?php endif; ?>

 <div class="intro-text">
     <h1 class="animated fadeInUp anim-delay-400"><?php the_field('img_text'); ?></h1>
  </div>
 </div>

 <!-- <?php the_field('img_text'); ?>   -->

<div class=" subpage-container animated fadeIn">
  <div class="container">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <?php the_content(); ?>
    <?php endwhile; endif; ?>

  </div>


</div>



<?php get_footer(); ?>
