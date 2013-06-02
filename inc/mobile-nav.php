	    <!-- Navbar
    ================================================== -->
    <div class="navbar navbar-inverse visible-phone">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
           Menu
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
        'walker' => new twitter_bootstrap_nav_walker())
    );
?>
          </div>
        </div>
      </div>
    </div><!-- NavBar -->