<?php /*Template Name: offices*/ ?> <!--CONNECT WITH TEMPLATE NAME TO GET THE RIGHT PAGE-->
<!--Include header-->
<?php require 'header.php' ?>
<script type="text/javascript" src="../../wordpress/wp-content/themes/inrc_webpage/changeBG.js"></script>
	<!--BIGGER DEVICES-->
	<div class="hidden-xs hidden-sm">
		<section class="officeHeader">
			<div id ="header4">
				<img id ="header5"></img>
				<div id = "center-nav">
					<header>
						<div class="hidden-xs hidden-sm" >
							<div id="fillout"></div><!--<img id="worldmap" src="/wp-content/themes/inrc_webpage/images/worldmap.png" class="img-responsive" alt="worldmap">-->
					</header>
					<!--NAVBAR-->
					<div id="navbar-header">
						<nav role="navigation" class="navbar navbar-default" id="white-bar">
							<?php require 'navbar.php' ?>
						</nav>
					</div>
				</div>
			</div>
		</section>
	</div>

	<!--SMALLER DEVICES-->
	<div class="hidden-md hidden-lg">
		<section id="header3">
			<div id="dark-background">
				<header>
					<img class="hidden-xs hidden-sm" id="worldmap" src="../../wordpress/wp-content/themes/inrc_webpage/images/worldmap.png" class="img-responsive" alt="worldmap">
				</header>
				<!--NAVBAR-->
				<div id="navbar-header">
					<nav role="navigation" class="navbar navbar-default" id="white-bar">
					<?php require 'navbar.php' ?>
				</div>
			</div>
		</section>
	</div>
	<div class="container blue-font">
		<row>
			<!--SPECIAL CASE FOR NEW YORK-->
			<div class="col-sm-3">
				<?php
				global $post;
				$args = array('category_name' => 'NewYork', 'order' => 'ASC', 'orderby' => 'title');
				$postslist = get_posts($args);
				foreach ($postslist as $post) :
					setup_postdata($post); ?>
					<div class="col-sm-12">
						<?php the_content(); ?>
					</div>
				<?php endforeach;
				wp_reset_postdata(); ?>
			</div>
			<!--ALL OTHER OFFICES-->
			<div class="col-sm-9">
				<?php
				global $post;
				$args = array('category_name' => 'Offices', 'posts_per_page' => 20, 'order' => 'ASC', 'orderby' => 'title');
				$postslist = get_posts($args);
				$count = 1;
				foreach ($postslist as $post) :
					setup_postdata($post); ?>
					<div class="col-sm-6 col-md-4">
							<?php the_content(); ?>
					</div>
					<?php
						if($count == 3){
							echo '<div class="clearfix visible-md-block visible-lg-block"></div>';
						}
						if($count == 2 || $count == 4){
							echo '<div class="clearfix visible-sm-block"></div>';
						}
						$count++;
					?>
				<?php endforeach;
				wp_reset_postdata(); ?>
			</div>
		</row>
	</div>

    <hr>
<!--Include footer-->
<?php get_footer(); ?>