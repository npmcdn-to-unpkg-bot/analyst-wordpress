<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <!-- stylesheets should be enqueued in functions.php -->
  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header class="con-top">
 
    
      <div class="site-name">
        <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
          <?php bloginfo( 'name' ); ?> 
          <?php bloginfo( 'description' ); ?>
        </a>
      </div>

    <div class="contact-info">
      
          
            <i class="fa fa-envelope-o" aria-hidden="true"></i>
            <p>name@email.com</p>
          
      
        <i class="fa fa-phone" aria-hidden="true"></i><p>444-333-2222</p>
    </div>
</header><!--/.header-->

<div class="main-nav">
  
        <?php wp_nav_menu( array(
      'container' => false,
      'theme_location' => 'primary'
    )); ?>
</div>

