<?php get_header(); ?>

<?php if (have_posts()) { ?>

	<?php while(have_posts()) : the_post(); ?>

		<div id="main-post">
			<div id="post-meta">
				<div id="post-meta-box">
					<div id="meta-data"><?php the_time("jS"); ?><div><?php the_time("F"); ?></div></div>
				</div>
				<div id="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>	
				<div id="comments-meta"><a href="<?php the_permalink(); ?>"><div id="comments"><?php comments_number( "0", "1", "%" ); ?></div><i class="fa fa-comment fa-5x font-awesome"></i></a></div>
			</div>

			<?php if (has_post_thumbnail()) : ?>
				<div id="post-thumbnail"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('custom'); ?></a></div>
			<?php endif; ?>

			<div id="post-content">
				<?php the_content(); ?>
			</div>
		</div>

	<?php endwhile; 

}
else 
{
?>
	<h1 style="color: #1f1f1f;">Nothing to see here!!</h1>
<?php
}
?>

<?php get_footer(); ?>