<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
	<div class="wrapper">     	
	   <div class="container"> 
            <div class="sixteen columns">
        	   <article class="post_cat">
        	   	<h3>needs page names</h3>

				<div class="entry">

				<?php the_content(); ?>
                

				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

				</div>

				<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
                </article>
            </div> <!-- end of sixteen -->     
		</div><!-- container -->   
	</div><!-- wrapper -->
		
		

	<?php endwhile; endif; ?>



<?php get_footer(); ?>