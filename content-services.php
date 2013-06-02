<?php
/**
 * @package Space-Rocket
 */
?>
<!-- Begin content-single.php -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title">What We Can Do For You</h1>
		<p>From hello to product launch and beyound, we are with you every step of the way.</p>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<div class="services">
<div class="design">
<div class="services-img"></div>
<div class="services-content">
<h4>DESIGN</h4>
<ul class="services-first">
	<li>User experience (UX)</li>
	<li>Logo</li>
	<li>Web design</li>
	<li>Mobile design</li>
	<li>Branding</li>
</ul>
<ul class="services-second">
	<li>Graphic design</li>
	<li>Ad banner</li>
	<li>Flash animation</li>
	<li>Business cards</li>
	<li>Photo editing</li>
</ul>
</div>
</div>
<div class="develop">
<div class="services-img"></div>
<div class="services-content">
<h4>DEVELOP</h4>
<ul class="services-first">
	<li>HTML5</li>
	<li>CSS3</li>
	<li>Responsive design</li>
	<li>JavaScript</li>
	<li>jQuery</li>
</ul>
<ul class="services-second">
	<li>PHP</li>
	<li>CMS</li>
	<li>E-commerce</li>
	<li>Social apps</li>
	<li>Wordpress</li>
</ul>
</div>
</div>
<div class="maintain">
<div class="services-img"></div>
<div class="services-content">
<h4>MAINTAIN</h4>
<ul class="services-first">
	<li>Hosting</li>
	<li>SEO</li>
	<li>Social media</li>
	<li>Marketing campaign</li>
	<li>Content writing</li>
</ul>
<ul class="services-second">
	<li>Website updates</li>
	<li>Online advertising</li>
</ul>
</div>
</div>
</div>

		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'space_rocket' ), 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->

	
</article><!-- #post-## -->
<!-- End content-single.php -->
