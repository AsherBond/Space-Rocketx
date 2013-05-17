<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Space-Rocket
 */
?>
<!-- Begin content-team.php -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title">One Designer, One Developer and You.</h1>
		<p>
			We are a small two person team. We bring our passion, creativity and innovation to each project.
		</p>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<article class="team-profile">
			<div class="thumbnail-img">
				<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/img/Mikee.png" alt="This guy is awesome"></img>
			</div>
			<h4>Michael Chavez (Developer)</h4>
			<p>Michael is a passionate and devoted front-end developer. His love for clean web compliant code has garnered him a deep understanding of HTML, CSS and has enabled him to utilize both PHP and JavaScript to make projects come to life.</p>
		<ul>
			<a href="mailto:mchavez@space-rocket.com?Subject=Hello">
				<li class="email">
					<div class="email-icon"></div><p>Email</p>
				</li>
			</a> 
			<a href="https://www.facebook.com/pages/Space-Rocket/336962632990741">
				<li class="facebook">
					<div class="fb-icon"></div><p>Facebook</p>
				</li>
			</a> 
			<a href="https://twitter.com/bigbassroller">
				<li class="tw">
					<div class="tw-icon"></div><p>@bigbassroller</p>
				</li>
			</a> 
			<a href="http://www.linkedin.com/pub/michael-chavez/30/681/702">
				<li class="ln">
					<div class="ln-icon"></div><p>Linkedin</p>
				</li>
			</a>
		</ul>
		</article>

		<article class="team-profile">
			<div class="thumbnail-img">
				<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/img/Vivian.png" alt="This lady is awesome"></img>
			</div>
			<h4>Vivian Yann (Designer)</h4>
			<p>Vivian has over 9 years professional graphic and web design experience. Her work has earned her awards and landed her positions at top firms in her homeland of Zhongshan, China. Vivian makes good design look easy.</p>
		<ul>
			<a href="mailto:vivian@space-rocket.com?Subject=Hello">
				<li class="email">
					<div class="email-icon"></div><p>Email</p>
				</li>
			</a> 
			<a href="https://www.facebook.com/pages/Space-Rocket/336962632990741">
				<li class="facebook">
					<div class="fb-icon"></div><p>Facebook</p>
				</li>
			</a> 
			<a href="https://twitter.com/vvic010/">
				<li class="tw">
					<div class="tw-icon"></div><p>@vvic010</p>
				</li>
			</a> 
			<a href="http://www.linkedin.com/profile/view?id=109057603&authType=name&authToken=qnXh&goback=">
				<li class="ln">
					<div class="ln-icon"></div><p>Linkedin</p>
				</li>
			</a>
		</ul>
		</article>
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'space_rocket' ), 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->
	<?php edit_post_link( __( 'Edit', 'space_rocket' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
</article><!-- #post-## -->
<!-- End content-page.php -->
