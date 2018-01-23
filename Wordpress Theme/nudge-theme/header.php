<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato">
	<link rel="profile" href="//gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<nav class="navbar navbar-default navbar-fixed-top">
<div class="container-fluid">
	<div class="navbar-header">
	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNav">
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	</button>
	<a href="#" class="nav-brand"><img src="<?php echo get_bloginfo('template_url') ?>/img/nudge-logo.png" height="100%"/></a>
	</div>
	<div class="collapse navbar-collapse" id="myNav">
	<ul class="nav navbar-nav navbar-right">
		<li><a href="<?php echo get_home_url(); ?>">Courses</a></li>
		<li><a href="<?php echo get_home_url(); ?>/about-nudge/">About Nudge</a></li>
	</ul>
	</div>
</div>
</nav>

