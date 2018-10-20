<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 WP Post Template: product-single
 * @package Cannabis_Healing
 */

get_header(); ?>

<div class="container">
	<div class="row single_product_container">
			<div class="col-sm-4 image-container">
				<img src="https://cbdoil.co.uk/wp-content/uploads/2018/05/indica-eliquid-3-bottles.jpg">
			</div>
			<div class="col-sm-8">
				<h2>Combination THC/CBD oil</h2>
				<ul>
					<li>R440 / 12ml</li>
					<li>R 1250 (1000mg/30ml)</li>
				</ul>
				<ul>
					<li>Ingredients: Organic Coconut oil / High Grade Cannabis Oil</li>
					<li>Zero preservatives, synthetic frangrances, petrochemicals.</li>
					<li>A bottle of 12ml is enough to last +- 5 weeks with proper/moderate dosage.</li>
					<li>Mild "high" due to a high THC content.(1:1 THC/CBD ratio)</li>
					<li>This is has proven to be an effective alternative treatment for: Anxiety, Insomnia, Pain, Parkinson's, Arthritis, Diabetes, Cancer, Fibromyalgia, Epilepsy, Depression, ADHD, Chron's Disease and more.</li>
					<li>The oil reduces side effects of chemotherapy and other conventional medication.</li>
				</ul>
				<p>It is always best to start with a small dose (3-5 drops) and see how you react to it. Everyone has their own tolerance level and body type, so it's best to experiment and experience it for yourself. Take oil under tongue, keep for 1 minute before swallowing. Keep out of direct sunlight and at room temperature.</p>
				<a href="<?php echo site_url('/contact-us'); ?>" type="button"><p class="fom hvr-shutter-in-horizontal-fom">Contact Us</p></a>
			</div>
		</div>
		<div class="row single_product_container">
			<div class="col-sm-4 image-container">
				<img src="https://www.cbdedication.com/wp-content/uploads/2017/11/CBDedication-Cibdol-4-50ml.jpg">
			</div>
			<div class="col-sm-8">
				<h2>Pure CBD oil (full spectrum)</h2>
				<ul>
					<li>R 860  (10ml - 400mg/4% CBD)</li>
					<li>R 1650 (10ml/1000mg/10% CBD)) - strongest content with very effective results (Proven with references)</li>
					<li>Purest quality and carried in organic olive oil, imported from Switzerland.</li>
					<li>Incredible overall health supplement and beneficial for a wide variety of ailments (HBP, tumors, anxiety, autism)</li>
					<li>0% THC content, no high/psychoactive effect</li>
				</ul>
				<a href="<?php echo site_url('/contact-us'); ?>" type="button"><p class="fom hvr-shutter-in-horizontal-fom">Contact Us</p></a>
			</div>
		</div>
		

</div>
		
	<!--Full width CTA -->
<!-- <div class="container-fluid grey-cta">
  <div class="row">
    <div class="col-sm-12">
      <h3>GET IN TOUCH</h3>
      <a href="#" type="button" data-toggle="modal" data-target="#myModal"><p class="fom hvr-shutter-in-horizontal-fom">CONTACT US</p></a>
    </div> -->
  </div><!--Row Ends-->
</div><!--Full width container closes-->
<div class="hr-arrow" style="margin-top:40px;">
	    <img class="scrollToTop" src="<?php bloginfo('template_directory'); ?>/assets/images/up-arrow-red.jpg" width="40px" alt="up arrow image">
	    <p id="btt">back to top</p>
  	</div>

<?php

get_footer();
