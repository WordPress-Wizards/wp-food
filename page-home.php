<?php

/*
  Template Name: Home
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
       background:url(<?php echo $image_url[0]; ?>) #fff center bottom no-repeat;
       /*background-size: 100% 100%; */
       background-size: cover;
       }
     </style>
   <?php
 }  //end if statement
} //end vr_set_featured_background() function
get_header();  ?>

<div class="main main-home">
  <div class="container container-home">

    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

  <?php /* commenting out title
      <h2><?php the_title(); ?></h2>
  */ ?>

      <div class="hero-text"><?php the_content(); ?></div>

    <?php endwhile; // end the loop?>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>