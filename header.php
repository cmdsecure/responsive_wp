<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>RGU School of Computing</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
	<link rel="shortcut icon" href="images/favicon.ico">
	
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<!--[if lt IE 9]><script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

	<!-- Favicons
	================================================== -->
	
	<link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>apple-touch-icon.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_url'); ?>apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_url'); ?>apple-touch-icon-114x114.png">
	<link rel="apple-touch-startup-image" href="<?php bloginfo('template_url'); ?>startup.png">
    
    
	<meta charset="<?php bloginfo('charset'); ?>" />
	
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title>
   
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>
	
	<?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>

	<?php wp_head(); ?>

		<!-- JS
	================================================== -->
	<script src="<?php bloginfo('template_url'); ?>/javascripts/tabs.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/javascripts/jquery.tweet.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/javascripts/jquery.flickrush.js"></script>
    
    <!-- Load Custom Javascripts -->
	 <script src="<?php bloginfo('template_url'); ?>/javascripts/custom.js"></script>
	
    <!-- Facebook --> 
        <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) {return;}
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


	
</head>

<body <?php body_class(); ?>

		<!-- Header -->
	<div class="wrapper header">
		<header class="container top">
			<div class="sixteen columns">
            	<h1 class="logo"><a href="<?php echo get_settings('home'); ?>/"><img src="<?php bloginfo('template_url'); ?>/images/logo.gif" alt="<?php bloginfo('description'); ?>" /></a></h1>
				<p class="desc"><?php bloginfo('description'); ?></p>
			</div>
		</header><!-- container -->
	</div><!-- wrapper -->
    
    <!-- Navigation -->
    <div class="wrapper navigation">
		<nav class="container primary">
			<div class="sixteen columns">
            	
                	<?php wp_nav_menu(); ?>
                
			</div>
		</nav><!-- container -->
	</div><!-- wrapper -->

	<!-- This code contains the nivoslider which has already been preconfigured in Wordpress - Uncomment this section to include the nivo slider - Slider does not work well
	with media queries, hence its removal
	<div class="wrapper nivo_slider">
		<div class="container nivo">
			<div class="sixteen columns">
				<?php if ( function_exists('show_nivo_slider') ) { show_nivo_slider(); } ?>
			</div>	
		</div>
	</div>
	-->		