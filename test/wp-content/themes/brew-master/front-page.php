<?php
/*
Template Name: Front-Page Template
*/
?>

<?php get_header(); ?>



<div class="site-wrapper">



<div class="homebanner">
  <div class="container hero-text">
    <div class="row">

      <img src="<?php echo get_template_directory_uri(); ?>/library/images/red-monkey400.png"/>
      <div class="col-md-8 col-md-offset-2 hero-text">
        <h1 class="rellax" data-rellax-speed="7">BREW for Wordpress</h1>
        <p class="rellax" data-rellax-speed="-4">A free and open-source starter theme based on Bones and Bootstrap 3</p>

      </div>

    </div><!-- end .row-->
  </div> <!-- end .container-->
</div> <!-- end #banner-->













<div class="block-intro">
  <div class="container">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <?php the_content(); ?>
    <?php endwhile; endif; ?>

  </div> <!-- end .container-->
</div> <!-- block-intro-->


<div class="block-porto">




  <div class="container">

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active js">

        </li>

        <?php if( have_rows('indicators') ):
          while ( have_rows('indicators') ) : the_row();


        $dataslideto = get_sub_field('data_slide_to');
        $class = get_sub_field('class');
        $bakgrund = get_sub_field('bakgrund');

        ?>



        <li data-target="#carouselExampleIndicators"
            data-slide-to="<?php echo $dataslideto; ?>"
            class="<?php echo $class; ?>"
            style="background-image: url('<?php echo $bakgrund; ?>');">

        </li>


        <?php
     endwhile;
     endif;
     ?>
      </ol>

      <div class="carousel-inner">





        <?php if( have_rows('portfolio_slider') ):
          while ( have_rows('portfolio_slider') ) : the_row();


        $rubrik = get_sub_field('rubrik');
        $class = get_sub_field('class');


        ?>

        <div class="item <?php echo $class; ?> ">
          <h2><?php echo $rubrik; ?></h2>

          <?php if( have_rows('innehall') ):
            while ( have_rows('innehall') ) : the_row();


          $bakgrund = get_sub_field('bakgrund');

          $sprak = get_sub_field('sprak');
          $om = get_sub_field('om');
          $link = get_sub_field('link');
          ?>



          <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 heja">

            <!-- PRICE ITEM -->
            <div class="panel " style="background-image: url('<?php echo $bakgrund; ?>');">
              <!-- <div class="panel-heading  text-center">
              <h3>PRO PLAN</h3>
              </div> -->
              <div class="panel-body text-center">

              </div>
              <ul class="list-group list-group-flush text-center">
                <li class="list-group-item"><i class="icon-ok text-danger"></i> <?php echo $sprak; ?></li>
                <li class="list-group-item"><i class="icon-ok text-danger"></i> <?php echo $om; ?></li>

              </ul>
              <div class="panel-footer">
                <a class="btn btn-lg btn-block" target="_blank" rel="nofollow" href="<?php echo $link; ?>">Se sidan</a>
              </div>
            </div>
          <!-- /PRICE ITEM -->
          </div>

          <?php
     endwhile;
     endif;
     ?>
        </div>

        <!-- <div class="item wp ">
          <h2>Wordpress</h2>
          <div class="col-sm-4">1</div>
          <div class="col-sm-4">2</div>
          <div class="col-sm-4">3</div>
          <div class="col-sm-4">4</div>
          <div class="col-sm-4">5</div>
          <div class="col-sm-4">6</div>
        </div>

        <div class="item angular">
          <h2>Angular</h2>
          <div class="col-sm-4">1</div>
          <div class="col-sm-4">2</div>
          <div class="col-sm-4">3</div>
          <div class="col-sm-4">4</div>
          <div class="col-sm-4">5</div>
          <div class="col-sm-4">6</div>

        </div>

        <div class="item react">
          <h2>React</h2>
          <div class="col-sm-4">1</div>
          <div class="col-sm-4">2</div>
          <div class="col-sm-4">3</div>
          <div class="col-sm-4">4</div>
          <div class="col-sm-4">5</div>
          <div class="col-sm-4">6</div>

        </div>

        <div class="item photoshop">
          <h2>Photoshop</h2>
          <div class="col-sm-4">1</div>
          <div class="col-sm-4">2</div>
          <div class="col-sm-4">3</div>
          <div class="col-sm-4">4</div>
          <div class="col-sm-4">5</div>
          <div class="col-sm-4">6</div>

        </div> -->

            <?php
         endwhile;
         endif;
         ?>

      </div> <!-- end carousel inner -->

      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

</div>



  </div>

</div>


<div class="block-invert">
  <h1>jInvertScroll Example</h1>


  <div class="front scroll">
      <img src="<?php echo get_template_directory_uri(); ?>/library/images/invertscroll/front.png" alt="" />
  </div>


</div>




<?php get_footer(); ?>
