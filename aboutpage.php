<?php /*Template Name: about*/ ?> <!--CONNECT WITH TEMPLATE NAME TO GET THE RIGHT PAGE-->
<!--Include header-->
<?php require 'header.php' ?>
	<section id="header3" class="dark">
		<header>
		</header>
		<!--NAVBAR-->
		<div id="navbar-header">
			<nav role="navigation" class="navbar navbar-default" id="white-bar">
			<?php require 'navbar.php' ?>
		</div>
	</section>
	<div class="container">
		<div>
		<row>
			<div class="col-sm-8 blue-font">
				<!--Get all posts from category AboutUS in alphabetical order-->
				<?php
				global $post;
				$args = array('category_name' => 'AboutUs', 'posts_per_page' => 20, 'order' => 'ASC', 'orderby' => 'title');
				$postslist = get_posts($args);
				foreach ($postslist as $post) :
					setup_postdata($post); ?>
						<!--Print title and content-->
						<h3><?php the_title(); ?></h3>
						<?php the_content(); ?>
				<?php endforeach;
				wp_reset_postdata(); ?>
			</div>
		</row>
		<row>
			<div class="col-sm-4 hidden-xs blue-font">
				<!--Get all post titles from category AboutUS in alphabetical order-->
				<?php
					global $post;
					$args = array('category_name' => 'AboutUs', 'posts_per_page' => 20, 'order' => 'ASC', 'orderby' => 'title');
					$postslist = get_posts($args);
					foreach ($postslist as $post) :
						setup_postdata($post); ?>
							<h3><?php the_title(); ?></h3>
					<?php endforeach;
					wp_reset_postdata(); ?>
			</div>
		</row>
	</div>
	</div>

    <hr>
<!--Include footer-->
<?php get_footer(); ?>