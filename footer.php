    <div class="container">
    		<row>
    			<div class="col-sm-4">
    				<img id="footer" src="../../wordpress/wp-content/themes/inrc_webpage/images/inrcLogo.png" class="img-responsive" alt="inrcLogo">
    			</div>
    			<div class="col-sm-8">
                    <br class="visible-sm-block visible-md-block visible-lg-block">
    				<?php
                        global $post;
                        $args = array('category_name' => 'Footer', 'order' => 'ASC', 'orderby' => 'title');
                        $postslist = get_posts($args);
                        foreach ($postslist as $post) :
                            setup_postdata($post); ?>
                            <div class="col-sm-12">
                                <h3><?php the_title(); ?></h3>
                                <?php the_content(); ?>
                            </div>
                        <?php endforeach;
                        wp_reset_postdata();
                    ?>
    			</div>
    			<div class="clearfix visible-sm-block"></div>
    			<div class="col-sm-12" id="footer">
	        		<p class="footer"><a href="http://cecilialagerwall.se/" target="blank">Designed by Cecilia Lagerwall</a></p>
	        	</div>
	        </row>
	</div>
    
    <?php wp_footer(); ?>
  </body>
</html>