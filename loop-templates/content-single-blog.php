<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>


<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<?php echo get_the_post_thumbnail( $post->ID, 'full', array('class' => 'img-fluid') ); ?>

    <header class="entry-header">

        <?php the_title( '<h3 class="entry-title text-primary text-center">', '</h3>' ); ?>

    </header><!-- .entry-header -->

    <div class="entry-meta">

        <?php understrap_posted_on(); ?>

    </div><!-- .entry-meta -->

	<div class="entry-content">

		<?php the_content(); ?>

		<?php
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
				'after'  => '</div>',
			)
		);
		?>

	</div><!-- .entry-content -->

</div><!-- #post-## -->
