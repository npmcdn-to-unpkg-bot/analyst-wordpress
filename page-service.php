<?php

/*
  Template Name: Service Page
*/

get_header();  ?>

<div class="main service-page">
  <div class="wrapper">
  <div class="button">
      <a href="http://localhost:3000/#services"><button><i class="fa fa-arrow-left" aria-hidden="true"></i>  BACK TO ALL SERVICES</button></a>
  </div>
 

    <div class="content">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>

      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->

<div class="button">
  <a href="http://localhost:3000/#services"><button><i class="fa fa-arrow-left" aria-hidden="true"></i>  BACK TO ALL SERVICES</button></a>
</div>
  </div> <!-- /.wrapper -->
</div> <!-- /.main -->

<!-- <?php get_footer(); ?> -->