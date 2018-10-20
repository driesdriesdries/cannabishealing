<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Cannabis_Healing
 */

get_header(); ?>

<?php 
  get_template_part ('template-parts/content-modal', get_post_format());
?>
	<div class="container">
		<div class="row">
			<div class="col-sm-3 blog_sidebar"><?php get_sidebar(); ?></div>
			<div class="col-sm-9">
				<?php
		if ( have_posts() ) :

			?>
				<div class="col-sm-12"><h2><?php  

					if (is_category()) {
						single_cat_title();
					} elseif (is_tag() ) {
						single_tag_title();
					} elseif (is_author() ) {
						the_post();
						echo "Author Archives: " . get_the_author();
						rewind_posts();
					} elseif (is_day() ) {
						echo 'Day Archives ' . get_the_date();
					} elseif (is_month() ) {
						echo 'Monthly Archives: ' . get_the_date('F Y');
					} elseif (is_year() ) {
						echo '<h2 class="blog_template_heading">' .'Yearly Archives: ' . get_the_date('Y') . '</h2>';
					} else {
						echo "Archives:";
					}


				?></h2></div>

			<?php

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) : the_post();
			?>
				<div class="col-sm-6 blog_block">
			<?php

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			?> </div> <?php
			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		
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
  </div><!--Row Ends-->
</div><!--Full width container closes-->

	<div class="hr-arrow" style="margin-top:40px !important;">
	    <img class="scrollToTop" src="<?php bloginfo('template_directory'); ?>/assets/images/up-arrow-red.jpg" width="40px" alt="up arrow image">
	    <p id="btt">back to top</p>
	</div>
</div>



		

<?php

get_footer();
