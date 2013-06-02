	    <!-- Navbar
    ================================================== -->
    <div class="hidden-phone logo">
      <div class="container">
         
        <div class="pull-left">
  				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img alt="Space Rocket" src="<?php bloginfo('template_url'); ?>/assets/img/logo.png">
  				</a>
  			</div>

          
        <?php
    wp_nav_menu( array(
        'menu'       => 'top_menu',
        'depth'      => 2,
        'container'  => false,
        'menu_id' 	 => 'slide-nav-one',
        'walker' => new twitter_bootstrap_nav_walker())
    );
?>
      </div>
    </div><!-- NavBar -->