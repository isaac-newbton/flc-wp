<?php

get_header();

?>

<?php if ( is_home() && ! is_front_page() && ! empty( single_post_title( '', false ) ) ) : ?>
	<header class="page-header alignwide">
		<h1 class="page-title"><?php single_post_title(); ?></h1>
	</header><!-- .page-header -->
<?php endif; ?>

<div class="content-sidebar-container">
	<div class="content-container">
		<?php
			if ( have_posts() ) {

				// Load posts loop.
				while ( have_posts() ) {
					the_post();
					the_title();
				}

				// Previous/next page navigation.

			} else {

				// If no content, include the "No posts found" template.

			}
		?>
	</div>

	<?php get_sidebar('primary'); ?>

</div>

<?php

get_footer();
