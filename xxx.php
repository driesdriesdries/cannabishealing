<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Cannabis_Healing
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			
			<div class="page_container container">
				<div class="row">
					<div class="col-sm-12">
						<h1><?php echo the_title(); ?></h1>
					</div>
				<div class="row">
				<?php
					$Oilquery = new WP_query(array(
						'posts_per_page' => -1,
						'post_type' => 'products',
						'tag' => 'oil-product'

					));

					while($Oilquery->have_posts()){
						$Oilquery->the_post(); ?>
						<ul>
							<li><a href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a></li>
						</ul>
						<?php 
					}
				?>
				</div>
			</div>

		</div>
	</div>

			<?php
get_footer();
