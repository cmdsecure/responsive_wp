<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div <?php post_class() ?> id="post<?php the_ID(); ?>">
	<div class="wrapper">     	
		<div class="container"> 
        	
        		
                	<div class="ten columns">
                		<article class="post_cat">
						<h3><?php the_title(); ?></h3>
						<div class="meta"><?php include (TEMPLATEPATH . '/inc/meta.php' ); ?></div>
						<div class="entry">
						<p><?php the_content(); ?></p>
                		<div class="tweet-share">
<a href="https://twitter.com/share" class="twitter-share-button" data-count="horizontal">Tweet</a><script type="text/javascript" src="//platform.twitter.com/widgets.js"></script>
<a href="https://twitter.com/rgucomputing" class="twitter-follow-button">Follow @rgucomputing</a>
						
						<div id="recentcomments" class="dsq-widget"><h5 class="dsq-widget-title">Recent Comments</h5><script type="text/javascript" src="http://rgucomputing.disqus.com/recent_comments_widget.js?num_items=5&hide_avatars=0&avatar_size=32&excerpt_length=200"></script></div><a href="http://disqus.com/">Powered by Disqus</a>


						</article>
					</div><!-- end of ten -->
					<?php get_sidebar(); ?>	
				<?php endwhile; endif; ?>

				
		</div> <!-- end of container -->	
	</div><!--end of wrapper -->	
</div>			
<?php get_footer(); ?>




