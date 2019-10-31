<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<div <?php post_class(["col-12", "col-md-4", "grid-item"]); ?> id="post-<?php the_ID(); ?>">
    <header class="entry-header">
        <a href="<?php echo get_permalink()?>">
        <?php echo get_the_post_thumbnail( $post->ID, 'full' ); ?>
        </a>

        <a href="<?php echo get_permalink()?>">
        <?php the_title( '<h4 class="entry-title text-primary">', '</h4>' ); ?>
        </a>
    </header><!-- .entry-header -->
    <div class="moment"><?php echo get_the_date("j F, Y");?></div>
    <div class="entry-content">
        <?php the_excerpt(); ?>

        <?php
        wp_link_pages(
            array(
                'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
                'after'  => '</div>',
            )
        );
        ?>

    </div><!-- .entry-content -->
</div>
