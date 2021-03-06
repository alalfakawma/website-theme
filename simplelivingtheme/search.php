<?php get_header(); ?>

<?php if (have_posts()) : ?>
	<article id="page-php">

	<h1 style="color: #1f1f1f; font-size: 200%;">Search Results for : <?php the_search_query(); ?></h1>
	<?php while(have_posts()) : the_post(); ?>

			<div id="main-post">
				<div id="post-meta">
					<div id="post-meta-box">
						<div id="meta-data"><?php the_time("jS"); ?><div><?php the_time("F"); ?></div></div>
					</div>
					<div id="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>	
					<div id="comments-meta"><a href="<?php the_permalink(); ?>"><div id="comments"><?php comments_number( "0", "1", "%" ); ?></div><i class="fa fa-comment fa-5x font-awesome"></i></a></div>
					<div id="post-category"><ul><?php the_category(); ?> </ul></div>
				</div>

				<div id="post-content">
					<?php the_excerpt(); ?>
				</div>
			</div>

	<?php endwhile; ?>

		<div id="posts-nav-link">
			<?php posts_nav_link( " ", "Previous Page", "Next Page" ); ?>
		</div>

	</article>

<?php else : ?>
	<article id="page-php">
		<h1 style="color: #1f1f1f; font-size: 200%;">No results found for <?php the_search_query(); ?>.</h1>
	</article>
<?php endif; ?>

<?php get_footer(); ?>