<?php
	
	// Add RSS links to <head> section
	automatic_feed_links();

	// Add default posts and comments RSS feed links to <head>.
	add_theme_support( 'automatic-feed-links' );
	
	// Enable support for post-thumbnails  
	if ( function_exists('add_theme_support') ) { 
     add_theme_support('post-thumbnails');  
	}  
	
	// Load jQuery
	if ( !is_admin() ) {
	   wp_deregister_script('jquery');
	   wp_register_script('jquery', ("https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.js"), false);
	   wp_enqueue_script('jquery');

	}
	
	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
	// Declare sidebar widget zone
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<header><h4>',
    		'after_title'   => '</h4></header>'
    	));
    }
	
	// Declare sidebar2 widget zone
		// Declare sidebar widget zone
    if (function_exists('register_sidebar')) {
    	register_sidebars(1,array(
    		'name' => 'Sidebar for Single Post',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<header><h4>',
    		'after_title'   => '</h4></header>'
    	));
    }

	
	
	
	 // Dedicated Widgetized Footer Areas
		  if ( function_exists('register_sidebar') )
	  register_sidebar(array(
	  'name' => 'Footer - Latest Posts',
	  'before_widget' => '<div class="four columns latest_posts">',
	  'after_widget' => '</div>',
	  'before_title' => '<header><h4>',
	  'after_title' => '</h4></header>',
	  ));
	  
	  if ( function_exists('register_sidebar') )
	  register_sidebar(array(
	  'name' => 'Footer - Recent Comments',
	  'before_widget' => '<div class="four columns recent_comments">',
	  'after_widget' => '</div>',
	  'before_title' => '<header><h4>',
	  'after_title' => '</h4></header>',
	  ));
	  
	
		

	 // Limit the length of the excerpt
	 
	add_filter('excerpt_length', 'my_excerpt_length');
	function my_excerpt_length($length) {
	return 35; // The number of words to be shown - no manual excerpt input required
	}
		
		
	// Register Custom Navigation	
	if (function_exists('register_nav_menus')) {
	register_nav_menus(
	array(
	'main_nav' => 'Main Navigation Menu'
	));
	}



	
	


?>