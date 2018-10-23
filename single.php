<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Cannabis_Healing
 */

get_header(); ?>
<?php 
  get_template_part ('template-parts/content-modal', get_post_format());
?>

<div class="container top-container-single">
	<div class="row">
		<div class="col-sm-3">
			<div class="more_reading_container">
				<?php get_sidebar(); ?>
			</div>
		</div>
		<div class="col-md-9 single_blog_content">
			<h1><?php echo the_title(); ?></h1>
			<p><?php echo the_content();?></p>
		</div>		
	</div>
</div>
	
<!--Full width CTA -->
<div class="container-fluid grey-cta">
  <div class="row">
    <div class="col-sm-12">
      <h3>GET IN TOUCH</h3>
      <a href="#" type="button" data-toggle="modal" data-target="#myModal"><p class="fom hvr-shutter-in-horizontal-fom">CONTACT US</p></a>
    </div>
  </div>
</div>

<div class="hr-arrow" style="margin-top:60px;">
	<img class="scrollToTop" src="<?php bloginfo('template_directory'); ?>/assets/images/up-arrow-red.jpg" width="40px" alt="up arrow image">
	<p id="btt">back to top</p>
</div>

<?php

get_footer();
