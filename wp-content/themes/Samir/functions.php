<?php 


	function wbq_register_menus() {
		register_nav_menus(
			array(
		 		'footer-menu' => __( 'Footer Menu' ),
				'header-menu' => __( 'Header Menu' )
	 		)
	 	);
	}


	add_theme_support('post-thumbnails');



	add_action( 'init', 'wbq_register_menus' );





	wp_enqueue_style( 
		'wp_css',
		get_template_directory_uri() . '/css/wp.css',
		array('bootstrap'),
		'1.0'
		);




	wp_enqueue_style( 
		'bootstrap',
		get_template_directory_uri() . '/css/bootstrap.min.css',
		array(),
		'3.3.7'
		);




	wp_enqueue_script(
		'bootstrap',
		get_template_directory_uri() . '/js/bootstrap.min.js',
		array( 'jquery' ),
		'3.3.7', 
		true
	);


?>