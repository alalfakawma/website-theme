<?php if (!is_404()) { ?>
	</div>
<?php } ?>

		<!-- END OF POST -->
		
		<?php

			if (!is_404()) {
				get_sidebar(); 
			}

		?>
		
		<div class="clearfix"></div>

	</div>

	<div id="scroll-top"></div>

	<footer class="container">Copyright &copy; <?php the_time("Y"); ?>. Aseem Lalfakawma.</footer>
	<script src="https://use.fontawesome.com/cbd153a72f.js"></script>
	<script
	  src="https://code.jquery.com/jquery-3.1.1.min.js"
	  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
	  crossorigin="anonymous">
	 </script>
	 <?php wp_footer(); ?>
</body>
</html>