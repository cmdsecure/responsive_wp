<?php get_header(); ?>

		

    <!-- Main Content -->
    <div class="wrapper main">
        <div class="container">
            <div class="sixteen columns">
                 
            
        
       <?php query_posts('cat=13&showposts=1'); ?>
       <?php if( have_posts()) : while(have_posts() ) : the_post(); ?>
       <div class="five columns alpha featured">
                    <article class="post_cat">
                        <h2><?php the_title(); ?></h2>
                        <figure>
                            <?php the_post_thumbnail(); ?>
                        </figure>
                        <p class="cat_name">Posted in:<?php the_category(', ') ?></a></p>
                        <p><?php the_excerpt(); ?></p>
                        <a href="<?php echo get_permalink(); ?>" class="button">Read More</a>
                        <p class="meta">Posted by: <?php the_author_posts_link(); ?></br><?php comments_number('0', '1', '%'); ?> <a href="<?php the_permalink(); ?>">Comments</a></p>
                        
                    </article>
                    <?php endwhile; endif; ?>
         </div>
        
        
        <?php query_posts('cat=14&showposts=1');?>
        <?php if( have_posts()) : while(have_posts() ) : the_post(); ?>     
             <div class="five columns featured">
                    <article class="post_cat">
                        <h2><?php the_title(); ?></h2>
                        <figure>
                            <?php the_post_thumbnail(); ?>
                        </figure>
                        <p class="cat_name">Posted in:<?php the_category(', ') ?></a></p>
                        <p><?php the_excerpt(); ?></p>
                        <a href="<?php echo get_permalink(); ?>" class="button">Read More</a>
                        <p class="meta">Posted by: <?php the_author_posts_link(); ?></br><?php comments_number('0', '1', '%'); ?> <a href="<?php the_permalink(); ?>">Comments</a></p>
                    </article>
                    <?php endwhile; endif; ?>
            </div>
        

        <?php query_posts('cat=6&showposts=1');?>
        <?php if( have_posts()) : while(have_posts() ) : the_post(); ?>        
            <div class="six columns omega featured">
                <article class="post_cat">
                        <h2><?php the_title(); ?></h2>
                        <figure>
                           <?php the_post_thumbnail(); ?>
                        </figure>
                        <p class="cat_name">Posted in:<?php the_category(', ') ?></a></p>
                        <p><?php the_excerpt(); ?></p>
                        <a href="<?php echo get_permalink(); ?>" class="button">Read More</a>
                        <p class="meta">Posted by: <?php the_author_posts_link(); ?></br><?php comments_number('0', '1', '%'); ?> <a href="<?php the_permalink(); ?>">Comments</a></p>
                </article>
                <?php endwhile; endif; ?>
            </div>
         </div><!-- end sixteen -->   
      </div><!-- end container -->


    <div class="wrapper">       
        <div class="container"> 
        <div class="sixteen columns">
              
        <div class="ten columns alpha">
             <?php query_posts( 'posts_per_page=6&cat=-13,-14,-6'); ?> 
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
                <span></span>
            </article>
            <?php endwhile; endif; ?>

           <?php $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1; $args = array( 'posts_per_page' => 1, 'paged' => $paged ); $loop = new WP_Query($args); while ($loop->have_posts()) : $loop->the_post(); ?><?php endwhile; ?><!--end custom loop--> 
           <div id="pagination"> <?php wp_pagenavi(); ?></div><!--end pagination-->


        

        </div><!-- end 10 column -->

          <?php get_sidebar(); ?>

        </div><!-- end of sixteen -->    
        </div><!-- container -->   
    </div><!-- wrapper -->

<?php get_footer(); ?>