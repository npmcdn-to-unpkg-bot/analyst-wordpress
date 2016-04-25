<?php get_header(); ?>

<div class="main">
  <div class="container">
    <div class="content">
    <div class="wrapper category-page">
      <h1><?php single_cat_title(); ?></h1>
            <?php
              $category_description = category_description();
              if ( ! empty( $category_description ) )
                echo '' . $category_description . '';
               get_template_part( 'loop', 'category' );

        ?>


         
      

      </div> <!--  wrapper -->
     </div> <!-- /.content -->
      
       

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>