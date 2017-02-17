<!-- Brand and toggle get grouped for better mobile display -->

<div class="navbar-header">

    <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">

        <span class="sr-only">Toggle navigation</span>

        <span class="icon-bar"></span>

        <span class="icon-bar"></span>

        <span class="icon-bar"></span>

    </button>
</div>

<!-- Collection of nav links and other content for toggling -->

<div id="navbarCollapse" class="collapse navbar-collapse">
	<div class="container">

        <ul class="nav navbar-nav">

        	<?php wp_list_pages(array('title_li' => '', 'exclude' => 4)); ?>
        </ul>
    </div>
    <!--
    <ul class="nav navbar-nav navbar-right">

        <li><a href="#">Login</a></li>

    </ul>-->

</div>