

    	

 <aside class="grid_4">
 
 		
        	    	<h2>Related Posts</h2>
                    
                    <?php do_action('related_posts_by_category', args) ?>
        
					<ul>
  <?php do_action(
    'related_posts_by_category',
    array(
	    'orderby' => 'post_date',
	    'order' => 'DESC',
	    'limit' => 5,
	    'echo' => true,
	    'before' => '<li>',
	    'inside' => '',
	    'outside' => '',
	    'after' => '</li>',
	    'rel' => 'nofollow',
	    'type' => 'post',
	    'image' => array(50,50),
	    'message' => 'No matches',
		'hidden' => 'title'
	  )
	) ?>
</ul>
        
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Sidebar for Single Post")) : else : ?>
    
        <!-- All this stuff in here only shows up if you DON'T have any widgets active in this zone -->
        
        
        <?php endif; ?>
        
        
		
        
        
		</aside>