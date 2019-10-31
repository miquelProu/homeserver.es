<?php
/**
 * The right sidebar containing the main widget area.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! is_active_sidebar( 'blog-sidebar' ) ) {
	return;
}

// when both sidebars turned on reduce col size to 3 from 4.
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );
?>

<?php if ( 'both' === $sidebar_pos ) : ?>
	<div class="col-md-3 widget-area blog-sidebar" id="blog-sidebar" role="complementary">
<?php else : ?>
	<div class="col-md-4 widget-area blog-sidebar" id="blog-sidebar" role="complementary">
<?php endif; ?>
<?php dynamic_sidebar( 'blog-sidebar' ); ?>
</div><!-- #right-sidebar -->
