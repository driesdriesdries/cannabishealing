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

	<div id="product-category-page" class="content-area">
		<main id="main" class="site-main" role="main">
			
			<div class="container">
				<div class="row">
					<div class="col-sm-12 breadcumbs">
						<a href="<?php echo site_url(); ?>">HOME</a> > 
						<span>PRODUCT CATEGORIES</span>
					</div>
				</div>	
			</div>
			<div class="container container-products">
				<div class="row">

					<?php
		            	$post_type = 'product';
		            	// Get all the taxonomies for this post type
		            	$taxonomies = get_object_taxonomies( (object) array( 'post_type' => $post_type ) );
		            	foreach( $taxonomies as $taxonomy ){
		                	// Gets every "category" (term) in this taxonomy to get the respective posts
		                	$terms = get_terms( $taxonomy );

		                	foreach( $terms as $term ){ 
		                		$term_link = get_term_link($term);
		                	?>

		                   	<div class="col-md-3 col-sm-6">
		                   		<div class="product_category_instance">
		                   			<?php 
			                   			$current_term_id = $term->term_id;
			                   			$image = get_field('product_category_image', $taxonomy . '_' . $current_term_id);
			                   			
			                   		?>
		                   			<div class="image_holder" style="background: url('<?php print_r($image[sizes][thumbnail]); ?>');
    background-size: cover;" onclick="window.location.href='<?php echo $term_link; ?>'   "></div>
			                   		<h3><a href="<?php echo $term_link; ?>"><?php echo $term->name; ?></a></h3>
			                   		
			                   		<!-- <p class="cat_description"><a href="<?php echo $term_link; ?>"><?php echo $term->description; ?></a></p> -->
			                   		
		                   		</div>
		                   	</div>

		                	<?php
		                }
		            }
		            ?>
					</div>
				</div>
			</div>
		</div>
	</div>

			<?php
get_footer();
