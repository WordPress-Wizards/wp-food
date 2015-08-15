<?php

/*
  Template Name: Contact
*/
add_action( 'wp_head', 'vr_set_featured_background', 99);
  function vr_set_featured_background() {
  $image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), full, false );
 if ($image_url[0]) {
   ?>
     <style>
     
       html,body {
       height:100%;
       margin:0!important;
       }
       body {
       /*background: url(<?php echo $image_url[0]; ?>) #fff center center no-repeat; */
       background:linear-gradient(rgba(255, 255, 255, 0.7), rgba(255, 255, 255, 0.7)), url(<?php echo $image_url[0]; ?>) #fff center center no-repeat;
       background-size: cover;
       }
       /*.wrapper {
        height: auto;
       }*/
     </style>
   <?php
 }  //end if statement
} //end vr_set_featured_background() function
get_header();  ?>

<div class="main main-contact">
  <div class="container">

    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

  <?php /* commenting out title
      <h2><?php the_title(); ?></h2>
  */ ?>

      <div class="contact-text"><?php the_content(); ?></div>
        <?php get_sidebar( 'contact' ); ?>

    <?php endwhile; // end the loop?>
  </div> <!-- /.container -->
</div> <!-- /.main -->
<?php get_footer(); ?>