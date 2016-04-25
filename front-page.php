<?php get_header();  ?>

<div class="main">
  <section class="hero" id="top">
    <div class="wrapper">
           <?php $heroQuery = new WP_Query(array(
           'posts_per_page' => 2,
           'post_type' => 'herotext'
         )); ?>

         <?php if ($heroQuery-> have_posts()): ?>

           <?php while($heroQuery->have_posts()): ?>
             <?php $heroQuery-> the_post(); ?>
               <div class="hero-text">
                      <h1><?php the_field('large_statement'); ?></h1>
                     <p><?php the_field('smaller_paragraph') ?></p>
                     <a href="#about" class="smoothScroll"><button>LEARN MORE</button></a>
               </div>

         <?php endwhile;
         endif; ?>
    </div> <!-- end wrapper -->
  </section>

  <section class="about" id="about">
    <div class="wrapper">
      <h2>ABOUT</h2> 
      <div class="about-box">
        <?php $aboutQuery = new WP_Query(array(
             'posts_per_page' => -1,
             'post_type' => 'aboutsection'
           )); ?>

           <?php if ($aboutQuery-> have_posts()): ?>

             <?php while($aboutQuery->have_posts()): ?>
               <?php $aboutQuery-> the_post(); ?>
              
                  <div class="about-img">
                    <img src="<?php echo hackeryou_get_thumbnail_url( $post ) ?>" alt="">
                  </div>
                  <div class="about-right">
                        <h3><?php the_field('heading'); ?></h3>
                         <p><?php the_field('subheading'); ?></p>
                        <p class="about-right-p"><?php the_field('short_paragraph'); ?></p>
                        <ul>
                      <?php while(has_sub_field('point_form_keywords')):?>
                        <li><?php the_sub_field('point_form_item') ?></li>
                      <?php endwhile; ?>
                      </ul>
                   </div>

             <?php endwhile;
             endif; ?>

        </div>
      </div>
    </div> <!-- end wrapper -->
  </section>

  <div class="banner-award">

   <?php $awardsQuery = new WP_Query(array(
           'posts_per_page' => -1,
           'post_type' => 'awards'
       )); ?>

       <?php if ($awardsQuery-> have_posts()): ?>

         <?php while($awardsQuery->have_posts()): ?>
           <?php $awardsQuery-> the_post(); ?>
           <!--What we want to show goes here-->
         <div class="award">
             <p><?php the_field('icon'); ?></p>
             <p class="year"><?php the_field('year'); ?></p>
             <p class="title"><?php the_title(); ?></p>
         </div>

       <?php endwhile;
       endif; ?>
  </div><!--  end banner-award -->

  <section id="services" class="services">
      <div class="wrapper">
        <h2>SERVICES</h2>
      </div>
        <div class="wrapper">

           <?php $serviceQuery = new WP_Query(array(
                'posts_per_page' => -1,
                'post_type' => 'services'
            )); ?>
            
            <?php if ($serviceQuery-> have_posts()): ?>
            
              <?php while($serviceQuery->have_posts()): ?>
                <?php $serviceQuery-> the_post(); ?>
  
                    <div class="service">
                         <h3><i class="fa fa-bookmark"></i> <?php the_title(); ?></h3>
                        <p><?php the_field('paragraph'); ?></p>
                        <a href="http://localhost:3000/<?php the_title(); ?>/"><button>READ MORE</button></a>
                        <div class="client-work">
                            <h4><?php the_field('title_client'); ?></h4>
                            <div class="client-work-img">
                              <img src="<?php echo hackeryou_get_thumbnail_url( $post ) ?>" alt="">
                            </div>
                        
                             <div class="example-text">
                        
                               <p><?php the_field('keywords_client') ?></p>
                             </div>
                        
                        </div> <!-- client work -->
                    </div> <!-- service -->
              
            <?php endwhile;
            endif; ?>
            
        </div><!--  end wrapper -->
  </section>

  <section class="clients" id="clients">
      <div class="wrapper">
        <h2>I'VE WORKED WITH</h2>
          <div class="all-clients">
             <?php $clientQuery = new WP_Query(array(
                 'posts_per_page' => -1,
                 'post_type' => 'clients'
             )); ?>

             <?php if ($clientQuery-> have_posts()): ?>

               <?php while($clientQuery->have_posts()): ?>
                 <?php $clientQuery-> the_post(); ?>
                
                       <div class="client">
                            <h3><?php the_title(); ?> :
                             <?php while(has_sub_field('services_provided')):?>
                                <?php the_sub_field('service') ?>
                             <?php endwhile; ?></h3>
                           
                   
                            <div class="client-info">
                              <p><?php the_field('paragraph'); ?></p>
                               <div class="client-img">
                                  <img src="<?php echo hackeryou_get_thumbnail_url( $post ) ?>" alt="">
                               </div>
                            </div>
                        </div>

               <?php endwhile;
               endif; ?>
            

          </div>
      </div> <!-- end wrapper -->
  </section>


   <section class="blog" id="blog">
        <div class="wrapper">
          <h2>BLOG</h2>
        </div>
        <div class="wrapper clearfix">
           <?php $blogQuery = new WP_Query(array(
      
           )); ?>

                <?php // If there are no posts to display, such as an empty archive page ?>

          <?php if ( ! have_posts() ) : ?>

            <article id="post-0" class="post error404 not-found">
              <h1 class="entry-title">Not Found</h1>
              <section class="entry-content">
                <p>Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.</p>
                <?php get_search_form(); ?>
              </section><!-- .entry-content -->
            </article><!-- #post-0 -->

          <?php endif; // end if there are no posts ?>

          <?php // if there are posts, Start the Loop. ?>

          <?php while ( have_posts() ) : the_post(); ?>
              
              <article>
                  <div class="blog-post clearfix">
                    <div class="blog-post-image">
                      <img src="<?php echo hackeryou_get_thumbnail_url( $post ) ?>" alt="">
                    </div>
                    <div class="blog-post-text">
                      <h2 class="post-title">
                        <a href="<?php the_permalink(); ?>">
                          <?php the_title(); ?>
                        </a>
                      </h2>
                      <h3 class="post-author"><?php the_author(); ?></h3>
                      <h3 class="post-date"><?php the_date('F j, Y'); ?></h3>
                    
                      <?php the_excerpt(); ?>
                    </div>
                  </div>
              </article>

          <?php endwhile; ?>

          
      </div> <!-- wrapper -->  
      <div class="button">
             <a href="http://localhost:3000/category/all-posts/"><button>VIEW ARCHIVES</button></a>
      </div>       
  </section>

  <section class="downloads" id="downloads">
    <div class="wrapper">
      <h2>DOWNLOADS</h2>
      <div class="all-downs">
      
         <?php $downQuery = new WP_Query(array(
           'posts_per_page' => -1,
           'post_type' => 'downloads'
           )); ?>

          <?php if ($downQuery-> have_posts()): ?>

         <?php while($downQuery->have_posts()): ?>
           <?php $downQuery-> the_post(); ?>
    
             <div class="download">
                  <h3><?php the_title(); ?></h3>
                  <p><?php the_field('description'); ?></p>
               
                   <form action="">
                       <input type="email" class="email" id="email" name="email" placeholder="Your Email">
                      <input type="submit" class="submit" id="submit" value="SEND">
                  </form>
              </div>

           <?php endwhile;
           endif; ?>

       </div>

    </div> <!-- end wrapper -->
  </section>

  <section class="contact" id="contact">

    <div class="wrapper">
        <h2>CONTACT</h2>
          <div class="contact-me">
                 <?php $contactQuery = new WP_Query(array(
                   'posts_per_page' => -1,
                   'post_type' => 'contact-top'
             )); ?>

             <?php if ($contactQuery-> have_posts()): ?>

               <?php while($contactQuery->have_posts()): ?>
                 <?php $contactQuery-> the_post(); ?>
                 <!--What we want to show goes here-->
                   
                      <p><?php the_field('paragraph'); ?></p>
                 
                      <div class="contact-phone">
                          <i class="fa fa-phone" aria-hidden="true"></i>
                          <p class="contact-me-phone"><?php the_field('phone'); ?></p>
                      </div>
                       <div class="contact-email">
                          <a href="mailto:eddy@eddyabraham.com">
                            <i class="fa fa-envelope" aria-hidden="true"></i><p class="contact-me-email"><?php the_field('email'); ?>
                            </p>
                          </a>
                      </div>
             <?php endwhile;
             endif; ?>
          </div>
          
          <form action="">

            <input type="text" class="contact-form-name" name="name" placeholder="Your Name">
            <input type="email" class="contact-form-email" name="email" placeholder="Your Email Address">
            <input type="text" class="contact-form-phone" name="phone" placeholder="Your Phone (if desired)">
            <textarea class="contact-form-message" name="message" placeholder="Your Message"></textarea> 
            <input type="submit" value="SEND MESSAGE">
          </form>

        </div> <!-- wrapper -->
       
     </section>

</body>
</div> <!-- /.main -->

<?php get_footer(); ?>