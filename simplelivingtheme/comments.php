<!-- DONT LET PEOPLE LOAD DIRECTLY -->
<?php if(!empty($_SERVER["SCRIPT_FILENAME"]) && "comments.php" == basename($_SERVER["SCRIPT_FILENAME"])) : ?>
	<?php die("Please do not load this page"); ?>
<?php endif; ?>

<!-- Check if post is password protected -->
<?php if(!empty($post->post_password)) : ?>
	<?php if($_COOKIE["wp-postpass_" . COOKIEHASH] != $post->password) : ?>
		<p>PASS PROTECTED</p>
	<?php endif; ?>
<?php endif; ?>

<!-- START COMMENT LOOP -->

<?php if($comments) : ?>
	<div id="comments-section">
		<div id="comments-title">
			Comments
		</div>
			<ol>
				<div id="main-comments">
					<?php foreach ($comments as $comment) : ?>
					
						<li class="comments" id="comment-<?php comment_ID(); ?>">
							<div id="comment-meta"><span class="comment-author"><?php comment_author_link(); ?></span> on <?php comment_date(); ?></div>
							<div id="comment-text"><?php comment_text(); ?></div>			
						</li>
					
					<?php endforeach; ?>
				</div>
			</ol>
		</div>

<!-- DISPLAY THIS IF NO COMMENTS ARE THERE -->
<?php else : ?>
	<div id="no-comment-text"><h2>No Comments. Be the first to comment!</h2></div>
<?php endif; ?>


<!-- IF COMMENTS ARE OPEN DO THIS -->
<?php if(comments_open()) : ?>
<!-- SHOW THEM FILLUP FORM IF THE USER IS NOT LOGGED IN -->
	
	<form action="<?php echo get_option("siteurl"); ?>/wp-comments-post.php" method="post">

		<?php if(!is_user_logged_in()) : ?>

			<div class="input-labels">
				<input class="input-fields" type="text" name="author" placeholder="Name" /> 
			</div>

			<div class="input-labels">
				<input class="input-fields" type="text" name="email" placeholder="E-mail" />
			</div>

			<div class="input-labels">	
				<input class="input-fields" type="text" name="url" placeholder="Website" /> 
			</div>

		<?php endif; ?>

		<div>
			<textarea id="textarea" name="comment" rows="7"></textarea>
		</div>	

		<p>
			<input id="submit-button" type="submit" name="submit" value="Submit" />
		</p>

		<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
		<?php do_action("comment_form", $post->ID); ?>

	</form>

<?php else : ?>
	<p>Comments closed!</p>
<?php endif; ?>