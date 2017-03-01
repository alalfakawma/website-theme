<!-- START OF SIDEBAR -->

		<div id="sidebar-wrapper">
			<div class="sidebar-widget">
				<div class="sidebar-header-box"><span>ABOUT ME</span></div>
					<div class="sidebar-content">
						Learning web developer. CSS/HTML/JS/PHP beginner. Mostly at home. Can solve one side of the rubik's cube *yeah that's an achievement worth mentioning!* 
						<br>
						<br>
						P.S This theme is free to use and is on my github, check the footer.
					</div>
			</div>

			<div class="sidebar-widget">
				<div class="sidebar-header-box"><span>RECENT POSTS</span></div>
					<div class="sidebar-content">
						<ul class="recent">
							<?php
							    $args = array( 'numberposts' => '5' );
							    $recent_posts = wp_get_recent_posts( $args );
							    foreach( $recent_posts as $recent ){
							        printf( '<li><a href="%1$s">%2$s</a></li>',
							             esc_url( get_permalink( $recent['ID'] ) ),
							             apply_filters( 'the_title', $recent['post_title'], $recent['ID'] )
							         );
							    }
							?>
						</ul>
					</div>
			</div>

			<div class="sidebar-widget">
				<div class="sidebar-header-box post-archives"><span>ARCHIVES</span></div>
					<div class="sidebar-content">
						<?php wp_get_archives("type=yearly"); ?>
					</div>
			</div>

			<div class="sidebar-widget">
				<div class="sidebar-header-box"><span>SOCIAL MEDIA</span></div>
					<div class="sidebar-content">
						<ul id="social-media">
							<li><a href="https://twitter.com/r4xee" target="_blank"><i class="fa fa-twitter"></i></a></li>
							<li><a href="https://instagram.com/aseem_26" target="_blank"><i class="fa fa-instagram"></i></a></li>
							<li><a href="https://github.com/alalfakawma" target="_blank"><i class="fa fa-github"></i></a></li>
						</ul>
					</div>
			</div>

		</div>