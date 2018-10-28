<?php
/*
Template Name: Home Page 2
 */

//Advanced Custom Fields
$hero_logo_image 				 = get_field('hero_logo_image');
$tagline 						     = get_field('tagline');
$contact_button_1_text 	 = get_field('contact_button_1_text');
$testimonial 					   = get_field('testimonial');
$testimonee 					   = get_field('testimonee');

$heading 						     = get_field('heading');
$description 					   = get_field('description');
$overview_image 				 = get_field('overview_image');

$cannabinoids_heading 	       = get_field('cannabinoids_heading');
$cannabinoids_description	     = get_field('cannabinoids_description');
$block1_heading 				       = get_field('block1_heading');
$block1_description 			     = get_field('block1_description');
$block2_heading 				       = get_field('block2_heading');
$block2_description 			     = get_field('block2_description');
$block3_heading 				       = get_field('block3_heading');
$block3_description 			     = get_field('block3_description');
$block4_heading 				       = get_field('block4_heading');
$block4_description 			     = get_field('block4_description');

$button_heading               = get_field('button_heading');
$button_text                  = get_field('button_text');



get_header(); ?>

	<!--Hero Section-->
  <div class="row" id="hero" data-type="background" data-speed=".7">
    <div class="col-sm-12">
		
		<!--If user uploaded an image
    	<?php if ( !empty($hero_logo_image)) : ?>
			<img id="hero_logo" src="<?php echo $hero_logo_image['url'];?>" alt="<?php echo $hero_logo_image['alt'];?>">
    	<?php endif; ?>
-->
    <!--svg test-->
    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
    width="595.28px" height="298px" viewBox="0 0 595.28 298" enable-background="new 0 0 595.28 298" xml:space="preserve">
    <g id="XMLID_1_">
      <g>
        <path class="mid_circle" fill="#40826D" d="M315.631,107.984c0,0,18.371-10.071,39.895,0.194C355.525,108.179,335.978,118.443,315.631,107.984z"/>
        <path class="mid_circle" fill="#40826D" d="M301.512,108.977c15.512,0.281,29.047,8.571,36.679,20.908
          C322.679,129.604,309.144,121.315,301.512,108.977z"/>
        <path class="mid_circle" fill="#40826D" d="M337.952,86.472c-7.534,12.1-20.778,20.271-35.954,20.757C309.532,95.139,322.776,86.968,337.952,86.472z"
          />
        <path class="mid_circle" fill="#40826D" d="M321.719,71.49c0,0-0.454,15.759-14.098,24.75C307.621,96.24,307.794,81.291,321.719,71.49z"/>
        <path class="mid_circle" fill="#40826D" d="M307.621,120.311c13.644,8.991,14.098,24.761,14.098,24.761
          C307.794,135.271,307.621,120.311,307.621,120.311z"/>
        <path class="mid_circle" fill="#40826D" d="M306.423,85.727c0,7.815-2.04,15.166-5.623,21.523c-0.076,0-0.162,0-0.237,0c-0.021,0-0.032,0-0.055,0
          c-3.529-6.336-5.537-13.622-5.537-21.394c0-7.923,2.094-15.371,5.765-21.793C304.351,70.454,306.423,77.848,306.423,85.727z"/>
        <path class="mid_circle" fill="#40826D" d="M300.584,109.668c3.465,6.293,5.44,13.525,5.44,21.221c0,7.523-1.89,14.615-5.225,20.811
          c-3.465-6.293-5.44-13.514-5.44-21.21C295.359,122.956,297.249,115.875,300.584,109.668z"/>
        <path class="mid_circle" fill="#40826D" d="M263.291,129.756c7.621-12.241,21.081-20.465,36.495-20.779
          C292.165,121.218,278.694,129.443,263.291,129.756z"/>
        <path class="mid_circle" fill="#40826D" d="M280,144.856c1.285-16.99,14.054-24.783,14.054-24.783C293.309,136.394,280,144.856,280,144.856z"/>
        <path class="mid_circle" fill="#40826D" d="M263.42,86.871c15.025,0.486,28.14,8.474,35.718,20.357C284.112,106.754,270.998,98.745,263.42,86.871z"/>
        <path class="mid_circle" fill="#40826D" d="M280,71.706c0,0,13.309,8.462,14.054,24.783C294.053,96.489,281.284,88.685,280,71.706z"/>
        <path class="mid_circle" fill="#40826D" d="M245.535,108.049c0,0,18.36-10.071,39.895,0.194C285.429,108.243,265.87,118.519,245.535,108.049z"/>
      </g>
      <g>
        <path class="outer_circles-1" fill="none" stroke="#40826D" stroke-linecap="round" stroke-linejoin="round" d="M339.054,41.817
          c3.54,6.336,5.548,13.632,5.548,21.394c0,8.538-2.429,16.504-6.649,23.261c-7.534,12.1-20.778,20.271-35.954,20.757
          c-0.399,0.011-0.799,0.021-1.198,0.021c-0.076,0-0.162,0-0.237,0c-0.021,0-0.032,0-0.055,0c-0.464,0-0.917-0.011-1.37-0.021
          c-15.025-0.475-28.14-8.484-35.718-20.357c-4.372-6.843-6.897-14.96-6.897-23.66c0-7.815,2.04-15.155,5.624-21.523
          c7.534-13.438,21.912-22.516,38.416-22.516C317.12,19.171,331.541,28.314,339.054,41.817z"/>
        <path class="outer_circles-2" fill="none" stroke="#40826D" stroke-linecap="round" stroke-linejoin="round" d="M300.735,64.063
          c3.615,6.39,5.688,13.784,5.688,21.664c0,7.815-2.04,15.166-5.623,21.523c-0.043,0.097-0.098,0.184-0.151,0.27
          c-0.205,0.378-0.421,0.756-0.647,1.112c-0.075,0.119-0.141,0.237-0.216,0.345c-7.621,12.241-21.091,20.466-36.495,20.779
          c-0.302,0.011-0.604,0.011-0.907,0.011c-16.202,0-30.363-8.754-38.005-21.804c-3.843-6.52-6.034-14.129-6.034-22.235
          c0-24.254,19.591-43.91,43.802-44.04c0.076,0,0.162,0,0.237,0C278.834,41.688,293.168,50.701,300.735,64.063z"/>
        <path class="outer_circles-3" fill="none" stroke="#40826D" stroke-linecap="round" stroke-linejoin="round" d="M339.054,41.817
          c24.297,0.021,43.996,19.731,43.996,44.039c0,8.009-2.138,15.511-5.872,21.977c-7.599,13.19-21.847,22.063-38.167,22.063
          c-0.271,0-0.551,0-0.82-0.011c-15.512-0.281-29.047-8.57-36.679-20.908c-0.086-0.151-0.184-0.313-0.28-0.464
          c-0.194-0.324-0.389-0.659-0.583-0.993c-0.043-0.086-0.097-0.173-0.141-0.27c-3.529-6.336-5.537-13.622-5.537-21.394
          c0-7.923,2.094-15.371,5.765-21.793c7.588-13.287,21.879-22.246,38.275-22.246C339.021,41.817,339.043,41.817,339.054,41.817z"/>
        <path class="outer_circles-4" fill="none" stroke="#40826D" stroke-linecap="round" stroke-linejoin="round" d="M300.584,109.668
          c3.465,6.293,5.44,13.525,5.44,21.221c0,7.523-1.89,14.615-5.225,20.811c-7.351,13.687-21.729,23.035-38.308,23.229
          c-0.162,0-0.334,0-0.507,0c-24.319,0-44.039-19.721-44.039-44.04c0-8.398,2.353-16.245,6.433-22.927
          c7.729-12.661,21.685-21.113,37.606-21.113c0.486,0,0.961,0.011,1.436,0.021c15.025,0.486,28.14,8.474,35.718,20.357
          c0.291,0.454,0.583,0.928,0.863,1.403c0.064,0.108,0.13,0.227,0.194,0.334C300.325,109.193,300.454,109.431,300.584,109.668z"/>
        <path class="outer_circles-5" fill="none" stroke="#40826D" stroke-linecap="round" stroke-linejoin="round" d="M377.178,107.833
          c3.973,6.617,6.261,14.367,6.261,22.657c0,24.319-19.71,44.04-44.039,44.04c-0.087,0-0.184,0-0.271,0
          c-16.515-0.097-30.882-9.294-38.329-22.83c-3.465-6.293-5.44-13.514-5.44-21.21c0-7.534,1.889-14.615,5.225-20.822
          c0.129-0.237,0.259-0.475,0.389-0.702c0.086-0.151,0.162-0.302,0.259-0.453c0.248-0.432,0.507-0.864,0.767-1.285
          c7.534-12.089,20.778-20.26,35.954-20.757c0.476-0.011,0.961-0.021,1.447-0.021C355.438,86.45,369.471,95.021,377.178,107.833z"/>
        <path class="outer_circles-6" fill="none" stroke="#40826D" stroke-linecap="round" stroke-linejoin="round" d="M338.19,129.885
          c4.145,6.714,6.541,14.637,6.541,23.121c0,7.815-2.029,15.166-5.603,21.523c-7.545,13.438-21.923,22.516-38.438,22.516
          c-16.342,0-30.601-8.905-38.2-22.117c-3.713-6.455-5.839-13.935-5.839-21.923c0-8.538,2.429-16.504,6.638-23.25
          c7.621-12.241,21.081-20.465,36.495-20.779c0.13,0,0.27-0.011,0.41-0.011c0.162,0,0.335,0,0.496,0c0.098,0,0.184,0,0.281,0
          c0.184,0,0.367,0,0.539,0.011C317.023,109.258,330.559,117.548,338.19,129.885z"/>
      </g>
    </g>
    <g>
      <path class="letters" fill="#58595B" d="M32.352,256.242c2.758,0,4.8,0.855,6.676,2.566c0.249,0.22,0.249,0.551,0.028,0.772l-2.152,2.234
        c-0.193,0.193-0.497,0.193-0.69,0c-1.02-0.91-2.372-1.407-3.724-1.407c-3.118,0-5.407,2.593-5.407,5.684
        c0,3.062,2.317,5.6,5.435,5.6c1.296,0,2.704-0.468,3.696-1.324c0.193-0.166,0.552-0.166,0.717,0.027l2.152,2.29
        c0.193,0.193,0.166,0.552-0.027,0.745c-1.876,1.821-4.249,2.676-6.704,2.676c-5.518,0-9.959-4.386-9.959-9.904
        S26.834,256.242,32.352,256.242z"/>
      <path class="letters" fill="#58595B" d="M59.192,275.112l8.634-18.566c0.083-0.165,0.276-0.303,0.469-0.303h0.276c0.193,0,0.386,0.138,0.468,0.303
        l8.636,18.566c0.165,0.359-0.056,0.717-0.469,0.717h-3.062c-0.497,0-0.718-0.165-0.966-0.689l-0.993-2.18h-7.504l-0.993,2.208
        c-0.138,0.331-0.442,0.662-0.994,0.662H59.66C59.247,275.829,59.026,275.471,59.192,275.112z M70.531,269.208l-2.097-4.552h-0.028
        l-2.068,4.552H70.531z"/>
      <path class="letters" fill="#58595B" d="M99.219,256.738c0-0.275,0.248-0.496,0.524-0.496h0.689l11.007,10.593h0.028v-9.793
        c0-0.276,0.221-0.524,0.524-0.524h3.311c0.275,0,0.524,0.248,0.524,0.524v18.566c0,0.276-0.249,0.496-0.524,0.496h-0.442
        c-0.083,0-0.303-0.083-0.358-0.138l-10.897-10.953h-0.028v10.29c0,0.276-0.22,0.524-0.524,0.524h-3.283
        c-0.275,0-0.524-0.248-0.524-0.524L99.219,256.738z"/>
      <path class="letters" fill="#58595B" d="M139.852,256.738c0-0.275,0.249-0.496,0.524-0.496h0.689l11.007,10.593h0.028v-9.793
        c0-0.276,0.221-0.524,0.524-0.524h3.312c0.275,0,0.524,0.248,0.524,0.524v18.566c0,0.276-0.249,0.496-0.524,0.496h-0.442
        c-0.082,0-0.303-0.083-0.358-0.138l-10.897-10.953h-0.027v10.29c0,0.276-0.221,0.524-0.524,0.524h-3.283
        c-0.275,0-0.524-0.248-0.524-0.524L139.852,256.738z"/>
      <path class="letters" fill="#58595B" d="M178.031,275.112l8.635-18.566c0.083-0.165,0.276-0.303,0.469-0.303h0.275c0.193,0,0.386,0.138,0.469,0.303
        l8.635,18.566c0.166,0.359-0.055,0.717-0.469,0.717h-3.062c-0.496,0-0.717-0.165-0.965-0.689l-0.993-2.18h-7.504l-0.993,2.208
        c-0.138,0.331-0.442,0.662-0.993,0.662H178.5C178.086,275.829,177.866,275.471,178.031,275.112z M189.369,269.208l-2.096-4.552
        h-0.028l-2.069,4.552H189.369z"/>
      <path class="letters" fill="#58595B" d="M218.085,257.042c0-0.276,0.22-0.524,0.523-0.524h6.428c3.256,0,5.932,2.234,5.932,5.131
        c0,2.124-1.904,3.669-3.2,4.359c1.461,0.607,3.696,1.958,3.696,4.497c0,3.09-2.731,5.324-6.014,5.324h-6.842
        c-0.303,0-0.523-0.248-0.523-0.524V257.042z M224.541,264.353c1.048,0,1.931-0.883,1.931-1.986c0-1.104-0.883-1.876-1.931-1.876
        h-2.152v3.862H224.541z M224.899,271.884c1.076,0,1.986-0.883,1.986-2.014c0-1.104-1.186-1.931-2.262-1.931h-2.234v3.944H224.899z"
        />
      <path class="letters" fill="#58595B" d="M254.278,257.042c0-0.276,0.248-0.524,0.524-0.524h3.311c0.276,0,0.524,0.248,0.524,0.524v18.262
        c0,0.276-0.249,0.524-0.524,0.524h-3.311c-0.276,0-0.524-0.248-0.524-0.524V257.042z"/>
      <path class="letters" fill="#58595B" d="M281.587,273.208l1.297-2.29c0.22-0.359,0.744-0.304,0.938-0.166c0.111,0.055,2.097,1.517,3.917,1.517
        c1.104,0,1.904-0.689,1.904-1.655c0-1.159-0.965-2.041-2.841-2.787c-2.373-0.937-5.353-2.786-5.353-6.097
        c0-2.731,2.125-5.49,6.373-5.49c2.869,0,5.076,1.462,5.903,2.069c0.331,0.193,0.276,0.69,0.166,0.883l-1.407,2.124
        c-0.193,0.303-0.689,0.552-0.938,0.359c-0.248-0.138-2.262-1.656-3.945-1.656c-0.993,0-1.738,0.662-1.738,1.407
        c0,1.021,0.827,1.793,3.007,2.676c2.151,0.855,5.572,2.538,5.572,6.29c0,2.842-2.455,5.71-6.51,5.71
        c-3.587,0-5.573-1.489-6.207-2.124C281.449,273.706,281.367,273.595,281.587,273.208z"/>
      <path class="letters" fill="#58595B" d="M342.523,257.042c0-0.276,0.248-0.524,0.524-0.524h3.283c0.303,0,0.524,0.248,0.524,0.524v6.952h7.89
        v-6.952c0-0.276,0.221-0.524,0.523-0.524h3.284c0.274,0,0.523,0.248,0.523,0.524v18.262c0,0.276-0.249,0.524-0.523,0.524h-3.284
        c-0.303,0-0.523-0.248-0.523-0.524v-7.255h-7.89v7.255c0,0.276-0.222,0.524-0.524,0.524h-3.283c-0.276,0-0.524-0.248-0.524-0.524
        V257.042z"/>
      <path class="letters" fill="#58595B" d="M383.131,257.042c0-0.276,0.22-0.524,0.522-0.524h11.422c0.304,0,0.523,0.248,0.523,0.524v3.007
        c0,0.276-0.22,0.524-0.523,0.524h-7.642v3.421h6.29c0.276,0,0.523,0.248,0.523,0.524v3.007c0,0.303-0.247,0.524-0.523,0.524h-6.29
        v3.724h7.642c0.304,0,0.523,0.249,0.523,0.524v3.007c0,0.276-0.22,0.524-0.523,0.524h-11.422c-0.303,0-0.522-0.248-0.522-0.524letters
        V257.042z"/>
      <path class="letters" fill="#58595B" d="M416.122,275.112l8.635-18.566c0.083-0.165,0.276-0.303,0.469-0.303h0.276c0.193,0,0.386,0.138,0.47,0.303
        l8.634,18.566c0.167,0.359-0.055,0.717-0.468,0.717h-3.062c-0.497,0-0.718-0.165-0.966-0.689l-0.993-2.18h-7.504l-0.993,2.207
        c-0.138,0.331-0.441,0.662-0.993,0.662h-3.034C416.178,275.829,415.957,275.471,416.122,275.112z M427.461,269.208l-2.097-4.552
        h-0.026l-2.07,4.552H427.461z"/>
      <path class="letters" fill="#58595B" d="M456.177,257.042c0-0.276,0.221-0.524,0.524-0.524h3.283c0.274,0,0.524,0.248,0.524,0.524v14.731h6.565
        c0.304,0,0.523,0.249,0.523,0.524v3.007c0,0.276-0.22,0.524-0.523,0.524h-10.373c-0.304,0-0.524-0.248-0.524-0.524V257.042z"/>
      <path class="letters" fill="#58595B" d="M489.582,257.042c0-0.276,0.247-0.524,0.523-0.524h3.312c0.275,0,0.524,0.248,0.524,0.524v18.262
        c0,0.276-0.249,0.524-0.524,0.524h-3.312c-0.276,0-0.523-0.248-0.523-0.524V257.042z"/>
      <path class="letters" fill="#58595B" d="M517.969,256.738c0-0.275,0.247-0.496,0.522-0.496h0.69l11.008,10.593h0.027v-9.793
        c0-0.276,0.221-0.524,0.524-0.524h3.311c0.276,0,0.523,0.248,0.523,0.524v18.566c0,0.275-0.247,0.496-0.523,0.496h-0.441
        c-0.083,0-0.304-0.083-0.359-0.138l-10.896-10.953h-0.027v10.29c0,0.276-0.222,0.524-0.524,0.524h-3.283
        c-0.276,0-0.524-0.248-0.524-0.524L517.969,256.738z"/>
      <path class="letters" fill="#58595B" d="M567.154,256.269c2.316,0,4.855,0.966,6.731,2.594c0.247,0.193,0.276,0.524,0.055,0.745l-2.178,2.317
        c-0.223,0.193-0.525,0.193-0.746,0.027c-1.048-0.965-2.262-1.324-3.614-1.324c-3.007,0-5.434,2.538-5.434,5.572
        c0,3.007,2.455,5.49,5.462,5.49c0.8,0,1.627-0.11,2.455-0.441v-1.601h-1.738c-0.304,0-0.524-0.22-0.524-0.496v-2.731
        c0-0.304,0.221-0.524,0.524-0.524h5.546c0.275,0,0.496,0.248,0.496,0.524l0.027,7.42c0,0.138-0.11,0.359-0.22,0.442
        c0,0-2.843,1.793-6.843,1.793c-5.489,0-9.904-4.359-9.904-9.876S561.665,256.269,567.154,256.269z"/>
    </g>
    </svg>


    <!--End SVG Test-->


<div class="header_animate">
<h1 id="taglinetext"><?php echo $tagline; ?></h1>

<a href="<?php echo site_url('/product-categories'); ?>"><p class="fom hvr-shutter-in-horizontal-fom"><strong>BROWSE PRODUCTS</strong></p></a>
<a href="medicalcannabisinfopack.pdf" download="medicalcannabisinfopack.pdf" type="button" ><p class="download_infopack hvr-shutter-in-horizontal-fom"><strong>DOWNLOAD BROCHURE</strong></p></a>
<br/>
</div>
</div>
  
  </div>

  

  <!--Testimonial Section-->  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active text-center">
      <blockquote>
        <p><i>"Ek sukkel geweldig met slaap probleme en hierdie olie help soos niks anders"</i><br/>Pieter Viljee</p>
      </blockquote>
    </div>

    <div class="item text-center">
      <blockquote>
        <p><i>"The balm helps a lot for my arthritis and sore joints."</i><br/>Stella Coetzer</p>
      </blockquote>
    </div>

    <div class="item text-center">
      <blockquote>
        <p><i>"I suffer from severe bipolar disorder and this oils helps me manage my condition effectively"</i><br/>Jen Owens</p>
      </blockquote>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  <!-- Testimonials Ends -->

  <div id="prepare_section" class="prepare">
    <div class="row">
      <div class="col-sm-12 text-center heading">
        <h3>LATEST ARTICLES</h3>
      </div>
      <?php

      $home_page_query = new WP_query(array(
        'posts_per_page' => '4'
      ));

      while($home_page_query->have_posts()){
        $home_page_query->the_post(); ?>
        <div class="col-md-3 col-sm-6" onclick="window.location.href='<?php echo the_permalink(); ?>' ">
          <?php 
              $image = get_the_post_thumbnail_url();
            ?>
          <div class="card_header" style="background:url('<?php print_r($image); ?>'); background-size: cover; background-position: center;">
          </div>
          <div class="card_footer">
            <h3><a href="<?php echo get_the_permalink(); ?>"><?php echo the_title();?></a></h3>
          </div>
        </div>
      <?php }

      ?>
    </div>
  </div>

</div><!--Close Container-->

  <!--In 16 weeks section-->
  <div class="oppurtunity">
    <h3><?php echo $cannabinoids_heading; ?></h3>
    <hr class="short_line">
    <p><?php echo $cannabinoids_description; ?></p>
  </div>
  
  <!--Our cannabanoids Section-->
<div class="container">

  <div class="row icons"><!--Row Opens-->
    
    <div class="col-sm-6">
      
      <div class="col-sm-12 molecule_height">
        <div class="molecule_img_div">
          <img src="<?php bloginfo('template_directory'); ?>/assets/images/molecules/cbd-mol.png" width="200px" alt="image of CBD molecule">
          <h4><?php echo $block1_heading; ?></h4>
        </div>
        
        <p class="molecule_lead"><?php echo $block1_description; ?></p>
        <div class="row">
          <div class="col-xs-6">
            <ul>
              <li>Cancer</li>
              <li>Depression</li>
              <li>Fibromyalgia</li>
              <li>ADHD/ADD</li>
              <li>Anxiety</li>
              <li>Insomnia</li>
              <li>Diabetes</li>
              <li>Pain relief</li>
            </ul>
          </div>

          <div class="col-xs-6">
            <ul>
              <li>PTSD</li>
              <li>Rheumatoid-Arthritis</li>
              <li>Migraines</li>
              <li>Immune-suppressive</li>
              <li>Stress</li>
              <li>Epilepsy</li>
              <li>MS(Multiple Sclerosis)</li>
              <li>Spasms</li>
            </ul>
          </div>
        </div>
        
      </div>
    </div>

    <div class="col-sm-6">
      <div class="col-sm-12 molecule_height">
        <div class="molecule_img_div" >
          <img src="<?php bloginfo('template_directory'); ?>/assets/images/molecules/thc-mol.png" width="200px" alt="image of THC molecule">
          <h4><?php echo $block2_heading; ?></h4>
        </div>
        <p class="molecule_lead"><?php echo $block2_description; ?></p>
        <div class="row">
          <div class="col-xs-6">
            <ul>
              <li>Cancer treatment</li>
              <li>Chronic pain relief</li>
              <li>HIV/AIDS</li>
              <li>Anorexia</li>
              <li>Multiple Sclerosis</li>
              
            </ul>
          </div>

          <div class="col-xs-6">
            <ul>
              <li>Parkinson’s disease</li>
              <li>Muscular Dystrophy</li>
              <li>Gout</li>
              <li>Spondylitis</li>
              <li>Alzheimer’s disease</li>
            </ul>
          </div>
        </div>

      </div>
    </div>

    <div class="col-sm-6">
      <div class="col-sm-12 molecule_height">
        <div class="molecule_img_div" >
          <img src="<?php bloginfo('template_directory'); ?>/assets/images/molecules/thca-mol.png" width="200px" alt="image of THC-A molecule" >
          <h4><?php echo $block3_heading; ?></h4>
        </div>
        <p class="molecule_lead"><?php echo $block3_description; ?></p>
        <div class="row">
          <div class="col-xs-6">
            <ul>
              <li>Arthritis</li>
              <li>Cancer</li>
              <li>Lupus</li>
              <li>Appetite loss</li>
              <li>Neurodegenerative diseases</li>
            </ul>
          </div>

          <div class="col-xs-6">
            <ul>
              <li>Depression</li>
              <li>Epilepsy</li>
              <li>Seizures</li>
              <li>Immune problems</li>
              <li>Nausea</li>
            </ul>
          </div>
        </div>

      </div>
    </div>

    <div class="col-sm-6">
      <div class="col-sm-12 molecule_height">
        <div class="molecule_img_div">
          <img src="<?php bloginfo('template_directory'); ?>/assets/images/molecules/cbn-mol.png" width="200px" alt="image of CBN molecule">
          <h4><?php echo $block4_heading; ?></h4>
        </div>
        <p class="molecule_lead"><?php echo $block4_description; ?></p>
        <div class="row">
          <div class="col-xs-6">
            <ul>
              <li>Stunted bone cell growth</li>
              <li>Insomnia</li>
              <li>Pain</li>
              <li>Appetite stimulation</li>
            </ul>
          </div>

          <div class="col-xs-6">
            <ul>
              <li>Inflammation</li>
              <li>Convulsions</li>
              <li>Bacterial infections</li>
            </ul>
          </div>
        </div>

      </div>
    </div>


  </div><!--close row-->
  <!--End Icons section-->

</div><!--Container Closes-->
  
<!--Full width CTA -->
<div class="container-fluid grey-cta">
  <div class="row">
    <div class="col-sm-12">
      <h3><?php echo $button_heading; ?></h3>
      <a href="#" type="button" data-toggle="modal" data-target="#myModal"><p class="fom hvr-shutter-in-horizontal-fom"><?php echo $button_text; ?></p></a>
    </div>
  </div><!--Row Ends-->
</div><!--Full width container closes-->

 <hr>
  <div class="hr-arrow">
    <img class="scrollToTop" src="<?php bloginfo('template_directory'); ?>/assets/images/up-arrow-red.jpg" width="40px" alt="up arrow image">
    <p id="btt">back to top</p>
  </div>

</div><!--container closes-->




<?php

get_footer();
