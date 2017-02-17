<!doctype html>
<html>
<head>
    <link rel="icon" href="./wp-content/themes/inrc_webpage/images/favicon.png" type="image/png" sizes="16x16">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
    	<?php 
    		$home = 'Home';
    		echo ($post->post_title == $home) ? bloginfo('title') : bloginfo('title') . ':' . $post->post_title;
    	?>
    </title>
    <!--Change css depending on local time-->
    <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js'></script>

    <script type="text/javascript" src="../../wordpress/wp-content/themes/inrc_webpage/changeCSS.js"></script>

    <!--If no support for JavaScript-->
    <noscript><link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet"></noscript>
    
    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head()?>
</head>
<body>