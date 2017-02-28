<?php get_header(); ?>

<?php while(have_posts()) : the_post(); ?>
<article id="page-php">
	<div id="main-post">
		<div id="post-content">
			<?php the_content(); ?>
		</div>
	</div>
</article>

<?php endwhile; ?>

<?php get_footer(); ?>