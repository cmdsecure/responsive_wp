<?php get_header(); ?>

		<?php if (have_posts()) : ?>
			
			<div class="wrapper">
            	<div class="container">
            
            <div id="archive" class="sixteen columns">
            	
 			<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

			<?php /* If this is a category archive */ if (is_category()) { ?>
				<h3>Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</h3>

			<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
				<h3>Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h3>

			<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
				<h3>Archive for <?php the_time('F jS, Y'); ?></h3>

			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
				<h3>Archive for <?php the_time('F, Y'); ?></h3>

			<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
				<h3>Archive for <?php the_time('Y'); ?></h3>

			<?php /* If this is an author archive */ } elseif (is_author()) { ?>
				<h3>Author Archive</h3>

			<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
				<h3>Blog Archives</h3>
			
			<?php } ?>
				
			

			<?php while (have_posts()) : the_post(); ?>
			
				<div <?php post_class() ?>>
				
					<h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
					
					<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>

					
						<?php the_content(); ?>
					

				</div>

			<?php endwhile; ?>

			<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>
            
            </div><!-- end of sixteen -->
			
	<?php else : ?>

		<h2>Nothing found</h2>
	
	<?php endif; ?>

</div><!-- end container -->
</div><!-- end wrapper -->


<?php get_footer(); ?>