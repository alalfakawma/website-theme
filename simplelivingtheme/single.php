<?php get_header(); ?>

<?php while(have_posts()) : the_post(); ?>
	
	<article id="page-php">
		<div id="main-post">
			<div id="post-meta">
				<div id="post-meta-box">
					<div id="meta-data"><?php the_time("jS"); ?><div><?php the_time("F"); ?></div></div>
				</div>
				<div id="post-title"><?php the_title(); ?></div>	
				<div id="comments-meta"><div id="comments"><?php comments_number( "0", "1", "%" ); ?></div><i class="fa fa-comment fa-5x font-awesome"></i></div>
			</div>

			<?php if (has_post_thumbnail()) : ?>
				<div id="post-thumbnail"><?php the_post_thumbnail('custom'); ?></div>
			<?php endif; ?>

			<div id="post-content">
				<?php the_content(); ?>
			</div>

			<?php comments_template(); ?>
			
	</div>
	</article>

<?php endwhile; ?>

<?php get_footer(); ?>