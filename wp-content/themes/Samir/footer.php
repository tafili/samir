


<footer role ="contentinfo" class="footer">

		<?php
			 wp_nav_menu( array(
			'theme_location' => 'footer-menu',
			'menu_class' => 'social',
			'fallback_cb' => '__return_false'
			) ); 
	    ?>
		

	<?php wp_footer(); ?>

</footer>

</body>
</html>

