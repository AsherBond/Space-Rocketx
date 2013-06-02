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
		<h1 class="entry-title">One Designer, One Developer and You</h1>
		<p>
			We are a small two person team. We bring our passion, creativity and innovation to each project.
		</p>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<article class="team-profile">
			 <?php include (TEMPLATEPATH . '/inc/mike.php' ); ?>
		</article>

		<article class="team-profile">
			 <?php include (TEMPLATEPATH . '/inc/vivian.php' ); ?>
		</article>
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'space_rocket' ), 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->
	<?php edit_post_link( __( 'Edit', 'space_rocket' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
</article><!-- #post-## -->
<!-- End content-page.php -->
