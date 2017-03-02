<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8">
	<meta name="keywords" content="aseem lalfakawma, aseem, lalfakawma, wordpress, blog, instagram, twitter, personal blog, blog, theme, web, developer, development, google, simple, living, web development">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<title><?php bloginfo("name"); ?></title>
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,700,800" rel="stylesheet">
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="icon" href="img/favicon.ico" type="image/x-icon">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id="main-header" class="container">
		<div id="mobile-nav"></div>
			<nav id="main-nav">
				<?php wp_nav_menu(); ?>	
			</nav>
		<div id="title">
			<a href="<?php echo home_url(); ?>"><h1><?php bloginfo("name"); ?></h1></a>
			<hr>
			<h3><?php bloginfo("description"); ?></h3>
		</div>

		<div id="arrow"></div>
	</div>

	<div id="mobile-nav-link">
		<?php wp_nav_menu(); ?>			
	</div>
	<!-- DONE HEADER -->
	<div id="main-wrapper" class="container">

		<!-- START OF POST -->
		<?php if (!is_404()) { ?>
			<div id="post-wrapper">
		<?php } ?>
		<?php if (is_front_page()) : ?>
			<div id="section-header-box"><span>POSTS</span></div>
		<?php endif; ?>