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
					<!-- Button to trigger modal -->
				    <a href="#myModal" role="button" class="contact-us" data-toggle="modal"></a>
				     
				    <!-- Modal -->
				    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				    <div class="modal-header">
				    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				    <h3 id="myModalLabel">Lets make something awesome together</h3>
				    </div>
				    <div class="modal-body">
				  <?php gravity_form(1, false, false, true, '', true); ?>
				    </div>
				    <div class="modal-footer">
				    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
				    </div>
		    		</div><!-- End Modal -->
			    </div>
			</div>
		</div><!-- .site-contact -->

		<div class="site-info">
			<div id="footer-top"></div>
			<div class="wrapper">
				<div class="pull-left">
					<a class="logo" href="#" rel="designer"></a>
				</div>

				<div class="pull-right">
					<ul class="social">
						<li class="follow">Follow us:</li>
						<a href="http://www.space-rocket.com/feed/">
						<li class="rss"></li>
						</a>
						<a href="https://twitter.com/bigbassroller">
						<li class="twitter"></li>
						</a>
						<a href="https://www.facebook.com/pages/Space-Rocket/336962632990741">
						<li class="fb"></li>
						</a>
					</ul>
				</div>

			</div>
					<div class="creds wrapper">
						<div class="pull-left">
							<p>2013 &copy; Space-Rocket / Web and Graphic Design</p>
						</div>
						<div class="pull-right">
						<?php do_action( 'space_rocket_credits' ); ?>
						<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'space_rocket' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'space_rocket' ), 'WordPress' ); ?></a>
						<a href="http://twitter.github.io/bootstrap/" title="<?php esc_attr_e( 'Sleek, intuitive, and powerful front-end framework for faster and easier web development.', 'space_rocket' ); ?>" rel="props">and Twitter Bootstrap</a>
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