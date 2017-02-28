<?php get_header(); ?>

<?php while(have_posts()) : the_post(); ?>

<div id="main-post">
	<div id="post-meta">
		<div id="post-meta-box">
			<div id="meta-data"><?php the_time("jS"); ?><div><?php the_time("F"); ?></div></div>
		</div>
		<div id="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>	
		<div id="comments-meta"><a href="<?php the_permalink(); ?>"><div id="comments"><?php comments_number( "0", "1", "%" ); ?></div><i class="fa fa-comment fa-5x font-awesome"></i></div></a>
	</div>

	<?php if (has_post_thumbnail()) : ?>
		<div id="post-thumbnail"><?php the_post_thumbnail('custom'); ?></div>
	<?php endif; ?>

	<div id="post-content">
		<?php the_content(); ?>
	</div>
</div>

<?php endwhile; ?>

<?php get_footer(); ?>