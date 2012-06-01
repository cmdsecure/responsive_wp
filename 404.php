<?php get_header(); ?>    
    <div class="wrapper">
        <div class="container">
            <div class="sixteen columns">
    	           <h4>Page Not Found</h4>

                    <p>Sorry for the inconvience, but the url that you typed in does not exist.
                    If you think its our fault, please contact a member of the School of Computing Web Team.</p>
                    <p>In the meantime, why not check out our most recents posts.</p> 
                    
                    <div class="ten columns alpha">
                    <?php query_posts( 'posts_per_page=6&cat=-13,-14,-6' ); ?> 
                    <?php if( have_posts()) : while(have_posts() ) : the_post(); ?> 
                    
                    <article class="post_cat">
                    <div class="three columns alpha thumbnail">
                    <figure>
                        <?php the_post_thumbnail(); ?>
                    </figure>
                    <p class="cat_name">Posted in</br><a href="<?php the_category(', ') ?></a></p>
                    </div><!-- end of three -->
                
                    <div class="seven columns omega">
                    <h3><?php the_title(); ?></h3>
                    <p class="meta">Posted by: <?php the_author_posts_link(); ?></br><?php comments_number('0', '1', '%'); ?> <a href="<?php the_permalink(); ?>">Comments</a></p>
                    <p><?php the_excerpt(); ?></p>
                    <a href="<?php echo get_permalink(); ?>" class="button">Read More</a>
                    </div><!-- end of seven -->
                    </article>
                    
                    <?php endwhile; endif; ?>
                    </div><!-- end 10 column -->

          <?php get_sidebar(); ?>


           </div><!-- end of sixteen -->
       </div><!-- end of container -->     
    </div><!-- end of wrapper -->   


<?php get_footer(); ?>