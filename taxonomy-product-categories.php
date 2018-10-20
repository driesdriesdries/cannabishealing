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
	$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); 
	$current_term = $term->slug;
	$current_term_name = $term->name; 
?>
<div class="container product_taxonomy_page">
	<div class="row">
		<div class="col-sm-12 breadcumbs">
			<a href="<?php echo site_url(); ?>">HOME</a> > 
			<a href="<?php echo site_url('/product-categories/'); ?>">PRODUCT CATEGORIES</a> >
			<?php 
			    //Do something if a specific array value exists within a post
				$term_list = wp_get_post_terms($post->ID, 'product-categories', array("fields" => "all"));
				// Then you can run a foreach loop to show the taxonomy terms infront.
				foreach($term_list as $term_single) { ?>
						<?php $term_link = get_term_link( $term_single ); ?>
						<h1 class="small-title"><?php echo $term_single->name; //do something here ?></h1>
				    <?php 
				}
			?>	
		</div>
	</div>	
</div>

<div class="container container-products">
	
	<div class="row">
		<?php

			$product_cat_query = new WP_Query( array(
		    	'post_type' => 'product',
		    	'order' => 'ASC',
		    	'tax_query' => array(
		        	array (
			            'taxonomy' => 'product-categories',
			            'field' => 'slug',
			            'terms' => $current_term,
		        	)
		    	)
			));

			while($product_cat_query->have_posts()){
				$product_cat_query->the_post(); ?>
				<!-- <div class="col-sm-4 product_category_instance">
					<h4><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h4>
					<?php the_post_thumbnail( 'product_shot_landscape' ); ?>
				</div> -->
				<div class="col-md-3 col-sm-6">
               		<div class="product_category_instance">

<?php 
	// $thumbnail_image = get_the_post_thumbnail_url();
	$product_image = get_field('product_image');
?>               			
               			<div class="image_holder" style="background: url('<?php print_r($product_image[sizes][thumbnail]); ?>');
background-size: cover;" onclick="window.location.href='<?php echo the_permalink(); ?>' "></div>





                   		<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                   		<p class="price"><b>R<?php echo get_field('price'); ?></b> <span class="small_text"></span></p>
                   		<p><?php echo get_field('product_description') ?></p>
                   		<div class="card-cta">
                   			
                   			<a href="<?php echo the_permalink(); ?>" class="small_text cta pull-right">View Details</a>	

                   			<a class="small_text cta pull-left" type="button" data-toggle="modal" data-target="#myModal">Contact Us</a>
                   			
                   		</div>
               		</div>
               	</div>

				<?php 
			}
		?>
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
