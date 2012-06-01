 <aside class="six columns omega">
    	
        <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Widgets')) : else : ?>
    
                    <!-- All this stuff in here only shows up if you DON'T have any widgets active in this zone -->
        <?php endif; ?>

        <!--
        <div class="sub search">
                
                <header>
                    <h4>Search</h4>
                </header>
            
                <form class="search clearfix">
                    <?php get_search_form(); ?>
                </form>
            </div>
            
            
            <div class="sub subscribe clearfix">
                <header>
                    <h4>Subscribe</h4>
                </header>
            
                <div class="three columns alpha">
                    <span class="icons rss">r</span>
                    <p><em>100</em></br>
                    subscribers
                    </p>
                </div>
                
                
                <div class="three columns omega">
                    <span class="icons twitter">t</span>
                    <p><em>100</em></br>
                    followers
                    </p>
                </div>
            </div>
            
            
            <div class="sub popular">
                
                <header>
                    <h4>Most Popular</h4>
                </header>

            </div>
            
            <div class="sub categories">
                
                <header>
                    <h4>Categories</h4>
                </header>
            



                	
                <ul class="categories">
                    	<li><a href="#">Tech</a></li>
                        <li><a href="#">Tech</a></li>
                        <li><a href="#">Tech</a></li>
                        <li><a href="#">Tech</a></li>
                </ul>
           
            </div>

            end of most categories -->

            
            
            
            <div class="sub socialmedia">
            
            	<header>	
                	<h4>RGU Elsewhere</h4>
            	</header>
            
            	<ul class="tabs">
                  	<li class="fb"><a class="active" href="#facebook">Facebook</a></li>
                  	<li class="vim"><a href="#vimeo">Vimeo</a></li>
                  	<li class="twit"><a href="#twitter">Twitter</a></li>
                </ul>
                

            	<ul class="tabs-content">
              		<li class="active" id="facebook">
              		<div class="fb-like-box" data-href="http://www.facebook.com/pages/Robert-Gordon-University-School-of-Computing/298651243367" data-width="292" data-show-faces="true" data-border-color="#cccccc" data-stream="false" data-header="false">
                	</div>
			  		</li>
              
              
              <li id="vimeo">
              <p>Check out our latest videos on the RGU Computing Vimeo Channel</p>
              	<div class="vimeoBadge">
			<script type="text/javascript" src="http://vimeo.com/rgucomputing/badgeo/?stream=uploaded&amp;stream_id=&amp;count=6&amp;thumbnail_width=80&amp;show_titles=no"></script>
				</div>	              
              </li>
              
              <li id="twitter">
              <p>Our latest tweets - send us a message: @rgucomputing.</p>
              	<div class="tweet"></div>
              </li>
            </ul>
		 </div><!-- end of social media -->
</aside>


	

