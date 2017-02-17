<?php require 'header.php' ?> <!--Include header-->
	<section id="header" class="dark">
		<!--HEADER with image and logo-->
		<header>
			<img id="inrc_logo" src="./wp-content/themes/inrc_webpage/images/inrc.png" class="img-responsive" alt="inrc">
			<h2 id="inrc_logo">International Re Consultants</h2>
		</header>
		<!--NAVBAR-->
		<div id="navbar-foot">
			<nav role="navigation" class="navbar navbar-default">
			<?php require 'navbar.php' ?>
			</nav>
		</div>
	</section>
	<!--INFORMATION ABOUT THE COMPANY, two columns; one with col-sm-8 and one with col-sm-4-->
	<div class="container blue-font">
			<row>
				<?php
					global $post;
					$count = 0;
					$args = array('category_name' => 'HomeContent', 'order' => 'ASC', 'orderby' => 'title');
					$postslist = get_posts($args);
					foreach ($postslist as $post) :
						setup_postdata($post); ?>
						<?php echo ($count > 0) ? '<div class="col-sm-4">' : '<div class="col-sm-8">'; $count++; ?>
							<!--Don't include title, title makes it to be in alphabetical order-->
							<?php the_content(); ?>
						</div>
					<?php endforeach;
					wp_reset_postdata(); ?>
			</row>
	</div>
	<!--BUBBLE SECTION-->
	<section id="middle">
		<div class="container">
			<row>
				<!--IMAGES-->
				<div class="col-sm-6"><img class="hidden-xs" id="center-image" src="./wp-content/themes/inrc_webpage/images/gubbewhite.png" class="img-responsive" alt="service"></div>
				<div class="col-sm-6"><img class="hidden-xs" id="center-image" src="./wp-content/themes/inrc_webpage/images/moneywhite.png" class="img-responsive" alt="cost"></div>
			</row>
			<row>
				<!--TEXT IN THE BUBBLES-->
				<?php
					global $post;
					$args = array('category_name' => 'Home', 'order' => 'ASC', 'orderby' => 'title');
					$postslist = get_posts($args);
					foreach ($postslist as $post) :
						setup_postdata($post); ?>
						<div class="col-sm-6">
							<div id="text-bubble">
								<!--Don't include title, title makes it to be in alphabetical order-->
								<?php the_content(); ?>
							</div>
						</div>
					<?php endforeach;
					wp_reset_postdata(); ?>
			</row>
		</div>
	</section>
<!--Include footer-->
<?php get_footer(); ?>