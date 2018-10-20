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
		<div class="col-sm-3 blog_sidebar">
			<div class="more_reading_container">
				<?php get_sidebar(); ?>
			</div>
		</div><!--Sidebar-->

		<div class="col-sm-9 blog_main_content">
			<?php
				if ( have_posts() ) :

					if ( is_home() && ! is_front_page() ) : ?>
						<header>
							<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
						</header>

					<?php
					endif;

					/* Start the Loop */
					while ( have_posts() ) : the_post();

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						?>
						<div class="col-md-4 col-sm-6 blog_block">
							<h2 class="blog_heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							<!-- <p class="post-info">
							    <?php the_time('F jS, Y'); ?> | 
							    
							    Posted in 

							    <?php 
							      $categories = get_the_category(); 
							      $separator = ", ";
							      $output = "";

							      if ($categories) {
							        foreach ($categories as $category) {
							          $output .= '<a href="' . get_category_link($category->term_id) .'">' .$category->cat_name .'</a>' . $separator;

							        }
							        echo trim($output, $separator);

							      }

							    ?>
							</p> -->
							<?php  
								// check if the post has a Post Thumbnail assigned to it.
								if ( has_post_thumbnail() ) { ?>
									<div onclick="window.location.href='<?php echo get_the_permalink(); ?>'   " class="blog_image_container" style= "background:url('<?php echo get_the_post_thumbnail_url(); ?>'); background-size: cover;">

										
									</div>

									<?php 
								}
							?>
							<p>
							</br>
							  <?php echo get_the_excerpt(); ?>
							  <a href="<?php the_permalink(); ?>">Readmore &raquo;</a>
							</p>
							
							
							
							</div>
							<?php
					endwhile;

					?>
					<div class="row">
						<div class="col-sm-12 pagination_area">
							<?php  wp_numeric_posts_nav(); ?>
						</div>
					</div>

					<?php 

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif; ?>
			</div>	
		</div><!--Blog-->
	</div><!--Close Container-->
	<!--Full width CTA -->
	<div class="container-fluid grey-cta">
	  <div class="row">
	    <div class="col-sm-12">
	      <h3>GET IN TOUCH</h3>
	      <a href="#" type="button" data-toggle="modal" data-target="#myModal"><p class="fom hvr-shutter-in-horizontal-fom">CONTACT US</p></a>
	    </div>
	  </div><!--Row Ends-->
	</div><!--Full width container closes-->

	<div class="hr-arrow" style="margin-top:40px;">
	    <img class="scrollToTop" src="<?php bloginfo('template_directory'); ?>/assets/images/up-arrow-red.jpg" width="40px" alt="up arrow image">
	    <p id="btt">back to top</p>
  	</div>
<?php

get_footer();
