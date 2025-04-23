<?php 

// keen css js enqueue 
function keen_add_theme_scripts() {
	
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'magnific', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'all', get_template_directory_uri() . '/assets/css/all.min.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'font', get_template_directory_uri() . '/assets/css/font.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'metisMenu', get_template_directory_uri() . '/assets/css/metisMenu.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'nice-select', get_template_directory_uri() . '/assets/css/nice-select.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'spacing', get_template_directory_uri() . '/assets/css/spacing.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'style', get_stylesheet_uri() );



	wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/assets/js/vendor/modernizr-3.5.0.min.js', array( 'jquery' ), 1.0, true );
	wp_enqueue_script( 'popper', get_template_directory_uri() . '/assets/js/popper.min.js', array( ), '5.1.3', true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(  ), 1.0, true );
	wp_enqueue_script( 'carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(  ), 1.1, true );
	wp_enqueue_script( 'isotope', get_template_directory_uri() . '/assets/js/isotope.pkgd.min.js', array(  ), 1.1, true );
	wp_enqueue_script( 'metisMenu', get_template_directory_uri() . '/assets/js/metisMenu.min.js', array(  ), 1.1, true );
	wp_enqueue_script( 'nice', get_template_directory_uri() . '/assets/js/jquery.nice-select.js', array(  ), 1.1, true );
	wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/js/wow.min.js', array(  ), 1.1, true );
	wp_enqueue_script( 'counterup', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array(  ), 1.1, true );
	wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/assets/js/waypoints.min.js', array(  ), 1.1, true );
	wp_enqueue_script( 'imagesloaded', get_template_directory_uri() . '/assets/js/imagesloaded.pkgd.min.js', array(  ), 1.1, true );
	wp_enqueue_script( 'magnific', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array(  ), 1.1, true );
	wp_enqueue_script( 'keen-main', get_template_directory_uri() . '/assets/js/main.js', array(  ), 1.1, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'keen_add_theme_scripts' );
