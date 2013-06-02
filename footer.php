<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Space-Rocket
 */
?>

	</div><!-- #main -->
	<div id="push"></div>
</div><!-- #page -->
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-contact">
		    <div class="wrapper">
			    <div class="pull-left">
				   <p class="large">Wanna talk? <span class="brand">Call us at <a class="brand" href="tel:415-724-7935">(415) 724-7935</a></span></p>
				   <p>or email us at <a href="mailto:hello@space-rocket.com?Subject=Hello%20">
hello@space-rocket.com</a></p>
			    </div>
			   
			    <div class="pull-right">
		
					 <?php include (TEMPLATEPATH . '/inc/contact-modal.php' ); ?>
			    
			    </div>
			    
			</div>
		</div><!-- .site-contact -->

		<div class="site-info">
			<div id="footer-top"></div>
			<div class="wrapper">
				<div class="pull-left">
					<a class="logo" href="#"></a>
				</div>

				<div class="follow-us">
					<p class="pull-left">Follow us:</p>
					 <?php include (TEMPLATEPATH . '/inc/social-links.php' ); ?>
					
				</div>

			</div>
					<div class="creds wrapper">
						<div class="pull-left">
							<p>2013 &copy; Space-Rocket / Web and Graphic Design</p>
						</div>
						<div class="pull-right">
						<?php do_action( 'space_rocket_credits' ); ?>
						<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'space_rocket' ); ?>"><?php printf( __( 'Proudly powered by %s', 'space_rocket' ), 'WordPress' ); ?></a>
						<a href="http://twitter.github.io/bootstrap/" title="<?php esc_attr_e( 'Sleek, intuitive, and powerful front-end framework for faster and easier web development.', 'space_rocket' ); ?>">and Twitter Bootstrap</a>
						</div>
					</div>

		</div><!-- .site-info -->
	</footer><!-- #colophon -->


<script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
</script>



    
<?php wp_footer(); ?>
</body>
</html>