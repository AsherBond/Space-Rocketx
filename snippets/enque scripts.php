/**
 * Enqueue scripts and styles
 */
 <?php
function viral_scripts() {
	wp_enqueue_style( 'viral-style', get_stylesheet_uri() );

	wp_enqueue_script( 'viral-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'viral-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20130115', true );

	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', array( ), false, 'all' );

	wp_enqueue_style( 'responsive', get_template_directory_uri() . '/assets/css/responsive.css', array( ), false, 'all' );

	wp_enqueue_style( 'google-code-prettify', get_template_directory_uri() . '/assets/js/google-code-prettify/prettify.css', array( ), false, 'all' );

    wp_enqueue_script( 'jquery.min',  'http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js', array());

	wp_enqueue_script( 'slide-nav', get_template_directory_uri() . '/assets/js/slide-nav.js', array(), false );
	 // <!-- Le javascript
  //   ================================================== -->
  //   <!-- Placed at the end of the document so the pages load faster -->

    wp_enqueue_script( 'bootstrap-transition', get_template_directory_uri() . '/assets/js/bootstrap-transition.js', array('jquery'), false, true );
    
    wp_enqueue_script( 'bootstrap-alert', get_template_directory_uri() . '/assets/js/bootstrap-alert.js', array('jquery'), false, true );
    
    wp_enqueue_script( 'bootstrap-modal', get_template_directory_uri() . '/assets/js/bootstrap-modal.js', array('jquery'), false, true );
    
    wp_enqueue_script( 'bootstrap-dropdown', get_template_directory_uri() . '/assets/js/bootstrap-dropdown.js', array('jquery'), false, true );
    
    wp_enqueue_script( 'bootstrap-scrollspy', get_template_directory_uri() . '/assets/js/bootstrap-scrollspy.js', array('jquery'), false, true );
    
    wp_enqueue_script( 'bootstrap-tab', get_template_directory_uri() . '/assets/js/bootstrap-tab.js', array('jquery'), false, true );
    
    wp_enqueue_script( 'bootstrap-tooltip', get_template_directory_uri() . '/assets/js/bootstrap-tooltip.js', array('jquery'), false, true );
    
    wp_enqueue_script( 'bootstrap-popover', get_template_directory_uri() . '/assets/js/bootstrap-popover.js', array('jquery'), false, true );
    
    wp_enqueue_script( 'bootstrap-button', get_template_directory_uri() . '/assets/js/bootstrap-button.js', array('jquery'), false, true );
    
    wp_enqueue_script( 'bootstrap-collapse', get_template_directory_uri() . '/assets/js/bootstrap-collapse.js', array('jquery'), false, true );
    
    wp_enqueue_script( 'bootstrap-carousel', get_template_directory_uri() . '/assets/js/bootstrap-carousel.js', array('jquery'), false, true );
    
    wp_enqueue_script( 'bootstrap-typeahead', get_template_directory_uri() . '/assets/js/bootstrap-typeahead.js', array('jquery'), false, true );
    
    wp_enqueue_script( 'bootstrap-affix', get_template_directory_uri() . '/assets/js/bootstrap-affix.js', array('jquery'), false, true );

    wp_enqueue_script( 'holder', get_template_directory_uri() . '/assets/js/holder/holder.js', array('jquery'), false, true );

    wp_enqueue_script( 'prettify', get_template_directory_uri() . '/assets/js/google-code-prettify/prettify.js', array('jquery'), false, true );

    wp_enqueue_script( 'application', get_template_directory_uri() . '/assets/js/application.js', array('jquery'), false, true );

	wp_enqueue_script( 'modernizr-2.6.2.min', get_template_directory_uri() . '/assets/js/vendor/modernizr-2.6.2.min.js', array(), false, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'viral-keyboard-image-navigation', get_template_directory_uri() . '/assets/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}
}
add_action( 'wp_enqueue_scripts', 'viral_scripts' );