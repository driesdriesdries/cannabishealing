<?php
/*
Template Name: Contact
 */
$button_heading       = get_field('button_heading');
$button_text       = get_field('button_text');

get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3" style="margin-bottom:60px;">
			<h1>CONTACT US</h1>
		<?php echo do_shortcode( '[contact-form-7 id="136" title="Contact form 1"]' ); ?>
		</div>
		
	</div>
</div>

	
<?php

get_footer();
