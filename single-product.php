<?php

get_header(); ?>
<?php 
  get_template_part ('template-parts/content-modal', get_post_format());
?>

	<div class="container">
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
								<a href="<?php print_r($term_link); ?>"><?php echo $term_single->name; //do something here ?></a>
						    <?php 
						}
					?>					
				> <h1 class="product_title"><?php echo the_title(); ?></h1>
			</div>
		</div>
		<div class="row product_row">
			<div class="col-md-4 product_image">

				<?php 
					$product_shot_portrait_url = get_field('product_image');
				?>
				<div class="single_product_container" style="background:url('<?php print_r($product_shot_portrait_url[sizes][product_shot_portrait]); ?>');">
					
				</div>
			</div>
			<div class="col-md-8 product_info">
				
				  <ul class="nav nav-pills">
				    <li class="generalinfo active"><a data-toggle="pill" href="#home">General Info</a></li>
				    <li class="guide_button"><a data-toggle="pill" href="#menu1">Dosage Guide</a></li>
				    <li class="cta" ><a class="cta" type="button" data-toggle="modal" data-target="#myModal">Want to Learn More?</a></li>
				  </ul>
				  
				  <div class="tab-content">
				    <div id="home" class="tab-pane fade in active">
				    	<p class="price">R<?php echo get_field('price'); ?></p>
				    	<p><?php echo get_field('general_info'); ?></p>
				    </div>
				    <div id="menu1" class="tab-pane fade">
				      <p><?php echo get_field('dosage_guide'); ?></p>
				    </div>
				  </div>
				


			  <br>
			</div>

		</div><!--Close Row-->		
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
<div class="hr-arrow" style="margin-top:60px;">
	    <img class="scrollToTop" src="<?php bloginfo('template_directory'); ?>/assets/images/up-arrow-red.jpg" width="40px" alt="up arrow image">
	    <p id="btt">back to top</p>
  	</div>

<?php

get_footer();
