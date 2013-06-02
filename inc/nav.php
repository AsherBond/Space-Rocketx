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