<?php get_header(); ?>

<div class="main">
  <div class="container">
    <div class="content">
      <div class="wrapper single-page">
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

          <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <h1 class="entry-title"><?php the_title(); ?></h1>

            <div class="entry-meta">
              <?php hackeryou_posted_on(); ?>
            </div><!-- .entry-meta -->

            <div class="entry-content">
                <div class="blog-post-image">
                      <img src="<?php echo hackeryou_get_thumbnail_url( $post ) ?>" alt="">
                    </div>
              <?php the_content(); ?>
              <?php wp_link_pages(array(
                'before' => '<div class="page-link"> Pages: ',
                'after' => '</div>'
              )); ?>
            </div><!-- .entry-content -->

            <div class="entry-utility">
              <?php hackeryou_posted_in(); ?>
              <?php edit_post_link( 'Edit', '<span class="edit-link">', '</span>' ); ?>
            </div><!-- .entry-utility -->
          </div><!-- #post-## -->

          <div id="nav-below" class="navigation">
            <p class="nav-previous"><?php previous_post_link('%link', '&larr; %title'); ?></p>
            <p class="nav-next"><?php next_post_link('%link', '%title &rarr;'); ?></p>
          </div><!-- #nav-below -->

        

        <?php endwhile; // end of the loop. ?>
         </div> <!-- wrapper -->
    </div> <!-- /.content -->

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>