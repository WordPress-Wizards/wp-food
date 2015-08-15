<?php //index.php is the last resort template, if no other templates match ?>

<?php //function to use featured image as background image
	add_action( 'wp_head', 'vr_set_featured_background', 99);
		function vr_set_featured_background() {
		$page_for_posts = get_option( 'page_for_posts' );
		$image_url = wp_get_attachment_image_src( get_post_thumbnail_id($page_for_posts), full, false );
			if ($image_url[0]) {
			   ?>
			    <style>
			    	html,body {
			       		height:100%;
			       		margin:0!important;
			       	}
			       	body {
			       		background:url(<?php echo $image_url[0]; ?>) #fff center center repeat;
			       	}
			       	.wrapper {
			       		height: auto;
			       	}
			    </style>
				<?php
			}  //end if statement
		} //end vr_set_featured_background() function
	get_header();
?>

<div class="main">
  <div class="container container-blog clearfix">

    <div class="content">
    		<?php get_template_part( 'loop', 'index' );	?>
    </div> <!--/.content -->

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>