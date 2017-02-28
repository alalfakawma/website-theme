<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<title><?php bloginfo("name"); ?></title>
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,700,800" rel="stylesheet">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id="main-header" class="container">

		<nav id="main-nav">
			<?php wp_nav_menu(); ?>
		</nav>

		<div id="title" class="clearfix">
			<a href="<?php echo home_url(); ?>"><h1><?php bloginfo("name"); ?></h1></a>
			<hr>
			<h3><?php bloginfo("description"); ?></h3>
		</div>

		<div id="arrow"></div>
	</div>
	<!-- DONE HEADER -->
	<div id="main-wrapper" class="container">

		<!-- START OF POST -->

		<div id="post-wrapper">
		<?php if (is_front_page()) : ?>
			<div id="section-header-box"><span>POSTS</span></div>
		<?php endif; ?>