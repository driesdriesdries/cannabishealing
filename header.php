<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Cannabis_Healing
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
<link rel="profile" href="http://gmpg.org/xfn/11">

	<!-- Bootstrap3 -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

  	
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-TDR2WKC');</script>
	<!-- End Google Tag Manager -->
  	<!--Google Analytics-->
	<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
	ga('create', 'UA-92305253-1', 'auto', {
	anonymizeIp: true
	});
	ga('send', 'pageview');
	</script>
	<!-- Hotjar Tracking Code for www.cannabishealing.co.za -->
	<script>
	    (function(h,o,t,j,a,r){
	        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
	        h._hjSettings={hjid:471772,hjsv:6};
	        a=o.getElementsByTagName('head')[0];
	        r=o.createElement('script');r.async=1;
	        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
	        a.appendChild(r);
	    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
	</script>
	  <!--favicon-->
	  <link rel="icon" href="<?php bloginfo('stylesheet_directory');?>/assets/images/favicon.png">
	  <!--Font Awesome-->
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	  <!--Google Font-->
	  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

	  <!--Custom scripts and styles-->
	  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/custom.css">
	  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/hover.css">
	  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/svgstyles.css">
	  <script src="<?php bloginfo('stylesheet_directory');?>/assets/js/script.js"></script>

	  <!--external plugin-->


<?php wp_head(); ?>
<!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	
	
</head>

<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TDR2WKC"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<?php 
  get_template_part ('template-parts/content-modal', get_post_format());
?>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'cannabishealing' ); ?></a>

	<!--Navigation Bar-->
	<!--Navigation Bar-->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid"><!--Open Container-->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="<?php echo home_url(); ?>" style="color:black"><img height="50px" src="<?php bloginfo('template_directory'); ?>/assets/images/cannabisoillogo.svg" alt="Cannabis Healing Logo"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
    	<ul class="nav navbar-nav navbar-right">
      <li class="active"><a class="hvr-underline-reveal" href="<?php echo site_url(); ?>">HOME</a></li>
      <li><a class="hvr-underline-reveal" href="<?php echo site_url('/product-categories'); ?>">PRODUCTS</a></li>
      <li><a class="hvr-underline-reveal" href="<?php echo site_url('/about'); ?>">ABOUT</a></li>
      <li><a class="hvr-underline-reveal" href="<?php echo site_url('/cannabis-oil-uses-faq'); ?>">FAQ</a></li>
      <li><a class="hvr-underline-reveal" href="<?php echo site_url('/blog'); ?>">BLOG</a></li>
      <li><a class="hvr-underline-reveal" href="#" type="button" data-toggle="modal" data-target="#myModal">CONTACT US</a></li>
    </ul>
    
    </div>
    

  </div><!--Close the Container-->
</nav>

