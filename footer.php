
		
        
    <!-- Footer -->
    <div class="wrapper footer">
		<footer class="container primary">
			<div class="four columns">
            	<header>
                <h4>Contribute</h4>
				</header>
                <p>If you would like to contribute to these pages, please speak to Susan Frost or Colin Beagrie.</p>
            </div>

                        <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Footer - Latest Posts')) : else : ?>
                        <?php endif; ?>

                        <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Footer - Recent Comments')) : else : ?>
                        <?php endif; ?>
                        
            
            <div class="four columns flickr_feed">
            	<header>
                	<h4>Flickr</h4>    
                </header>
                <div class="flickr"></div>
			</div>    
		</footer><!-- container -->
	</div><!-- wrapper -->
    
    
    <!-- Copyright -->
    <div class="wrapper copyright">
		<footer class="container secondary">
			<div class="eight columns first-credit">
            	<p>&copy;Robert Gordon University - School of Computing 2012</p>
			</div>
            
            <div class="eight columns wp-login">
            	<a href="#">Login</a>
			</div>
            
		</footer><!-- container -->
	</div><!-- wrapper -->




<!-- End Document
================================================== -->
	
	
    
	<?php wp_footer(); ?>
	
	<!-- Don't forget analytics -->
    
	
</body>
</html>
