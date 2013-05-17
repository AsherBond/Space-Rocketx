<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Space-Rocket
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->


<?php wp_head(); ?>
<!-- Le fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
 
</head>

<body <?php body_class(); ?>>
	<!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header" role="banner">
		
		<div class="wrapper">
	
			    <!-- Navbar
    ================================================== -->
    <div class="navbar navbar-inverse">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div id="logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img alt="Space Rocket" src="<?php bloginfo('template_url'); ?>/assets/img/logo.png">
				</a>
			</div>

          <div class="nav-collapse collapse">
            <?php
    wp_nav_menu( array(
        'menu'       => 'top_menu',
        'depth'      => 2,
        'container'  => false,
        'menu_class' => 'nav',
        'menu_id' 	 => 'slide-nav-one',
        'walker' => new twitter_bootstrap_nav_walker())
    );
?>
          </div>
        </div>
      </div>
    </div><!-- NavBar -->
			

	
			
		

		<nav id="site-navigation" class="navigation-main" role="navigation">
			
			<div class="screen-reader-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'space_rocket' ); ?>"><?php _e( 'Skip to content', 'space_rocket' ); ?></a></div>
					
			
		</nav><!-- #site-navigation -->


		</div>

		<div id="mission">
			
		</div>
	</header><!-- #masthead -->
		
	<div id="main" class="site-main">
		<img class="mission" alt="Together We're Awesome" src="<?php bloginfo('template_url'); ?>/assets/img/mission.png">
<!-- End header.php -->	
