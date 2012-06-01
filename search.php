<?php get_header(); ?>

	<section id="recent_posts" class="grid_8">
	<?php if (have_posts()) : ?>

		<h2>Search Results</h2>

		<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>

		<?php while (have_posts()) : the_post(); ?>

			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">

				<h2><?php the_title(); ?></h2>

				<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>

				<div class="entry">
					<?php the_excerpt(); ?>
				</div>

			</div>

		<?php endwhile; ?>

		<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>

	<?php else : ?>

		<h2>Sorry, no posts have been found.</h2>
        
        <p>Why not browse through some of our most recent posts below:</p>
        
        <?php query_posts( 'posts_per_page=4&cat=-1,-3,-9' ); ?> 
        <?php if( have_posts()) : while(have_posts() ) : the_post(); ?>
		        <article class="grid_8">
				<a href="<?php the_permalink(); ?>"><img src="<?php echo get_post_meta($post->ID, 'post_image_thumb', true);?>" /></a>
				<p class="post_title"><?php the_title(); ?></p></br>
    			<p class="post_author">Posted by: <?php the_author_posts_link(); ?></br><?php the_time('F jS, Y') ?></p>
    			<p><?php the_excerpt(); ?> </p>
                <a href="<?php the_permalink(); ?>" class="btn">Read More &raquo;</a></p>
    			        
        </article>
        <?php endwhile; endif; ?>

	<?php endif; ?>
    </section><!-- End of Recent Posts --> 

<?php get_sidebar(); ?>

<?php get_footer(); ?>