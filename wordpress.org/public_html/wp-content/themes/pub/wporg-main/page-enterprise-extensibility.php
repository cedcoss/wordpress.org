<?php
/**
 * Template Name: Enterprise-Extensibility
 *
 * Page template for displaying the Enterprise page.
 *
 * @package WordPressdotorg\MainTheme
 */

namespace WordPressdotorg\MainTheme;

// Prevent Jetpack from looking for a non-existent featured image.
add_filter( 'jetpack_images_pre_get_images', function() {
	return new \WP_Error();
} );

/* See inc/page-meta-descriptions.php for the meta description for this page. */

get_header();
the_post();
?>



<?php
get_footer();
