<?php
/**
 * Space-Rocket functions and definitions
 *
 * @package Space-Rocket
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 640; /* pixels */

/*
 * Load Jetpack compatibility file.
 */
require( get_template_directory() . '/inc/jetpack.php' );

if ( ! function_exists( 'space_rocket_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function space_rocket_setup() {

	/**
	 * Custom template tags for this theme.
	 */
	require( get_template_directory() . '/inc/template-tags.php' );

	/**
	 * Custom functions that act independently of the theme templates
	 */
	require( get_template_directory() . '/inc/extras.php' );

	/**
	 * Customizer additions
	 */
	require( get_template_directory() . '/inc/customizer.php' );

	/**
	 * Use Bootstrap Mobile Navigation
	 */
	require( get_template_directory() . '/inc/twitter_bootstrap_nav_walker.php' );

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on Space-Rocket, use a find and replace
	 * to change 'space_rocket' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'space_rocket', get_template_directory() . '/languages' );

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	/**
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'space_rocket' ),
	) );

	/**
	 * Enable support for Post Formats
	 */
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );
}
endif; // space_rocket_setup
add_action( 'after_setup_theme', 'space_rocket_setup' );

/**
 * Setup the WordPress core custom background feature.
 *
 * Use add_theme_support to register support for WordPress 3.4+
 * as well as provide backward compatibility for WordPress 3.3
 * using feature detection of wp_get_theme() which was introduced
 * in WordPress 3.4.
 *
 * @todo Remove the 3.3 support when WordPress 3.6 is released.
 *
 * Hooks into the after_setup_theme action.
 */
function space_rocket_register_custom_background() {
	$args = array(
		'default-color' => '',
		'default-image' => '',
	);

	$args = apply_filters( 'space_rocket_custom_background_args', $args );

	if ( function_exists( 'wp_get_theme' ) ) {
		add_theme_support( 'custom-background', $args );
	} else {
		define( 'BACKGROUND_COLOR', $args['default-color'] );
		if ( ! empty( $args['default-image'] ) )
			define( 'BACKGROUND_IMAGE', $args['default-image'] );
		add_custom_background();
	}
}
add_action( 'after_setup_theme', 'space_rocket_register_custom_background' );

/**
 * Register widgetized area and update sidebar with default widgets
 */
function space_rocket_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'space_rocket' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'space_rocket_widgets_init' );

/**
 * Enqueue scripts and styles
 */
function space_rocket_scripts() {
	wp_enqueue_style( 'Space-Rocket-style', get_stylesheet_uri() );


	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', array( ), false, 'all' );

	wp_enqueue_style( 'responsive', get_template_directory_uri() . '/assets/css/responsive.css', array( ), false, 'all' );

	wp_enqueue_style( 'google-code-prettify', get_template_directory_uri() . '/assets/js/google-code-prettify/prettify.css', array( ), false, 'all' );

    wp_enqueue_script( 'jquery.min',  'http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js', array());

	wp_enqueue_script( 'slide-nav', get_template_directory_uri() . '/assets/js/slide-nav.js', array(), false );

	 // <!-- Le javascript
  //   ================================================== -->
  //   <!-- Placed at the end of the document so the pages load faster -->

    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), false, true );
    
}
add_action( 'wp_enqueue_scripts', 'space_rocket_scripts' );

/**
 * Implement the Custom Header feature
 */
//require( get_template_directory() . '/inc/custom-header.php' );


