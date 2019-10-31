<?php
/**
 * Template Name: Full Width Page NOSOTROS
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php if ( is_front_page() ) : ?>
  <?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>


<div class="xwrapper nosotros container-fluid gris" id="full-width-page-wrapper">

    <?php while ( have_posts() ) : the_post(); ?>

    <div <?php post_class(["row", "position-relative"]); ?> id="post-<?php the_ID(); ?>">
        <div class="col-12 content-area p-0" id="primary">
            <?php echo get_the_post_thumbnail( $post->ID, 'full' ); ?>
        </div><!-- #primary -->
        <div class="col-12 position-absolute titol-foto font-titols"><?php the_title()?></div>
    </div><!-- .row end -->

    <div class="row end-scroll">
        <div class="col-12">
            <div class="container">
                <div class="col-12 text-center content">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="container-fluid nosotros gris espai">
    <div class="row">
        <div class="col-12">
            <?php get_template_part( 'loop-templates/content', 'page-dos-icon' ); ?>
        </div>
    </div>
</div>

<div class="container-fluid nosotros">
    <div class="row">
        <div class="col-12">
            <?php get_template_part( 'loop-templates/content', 'page-un' ); ?>            </div>
    </div>
</div>

<div class="container-fluid nosotros gris">
    <div class="row">
        <div class="col-12">
            <?php get_template_part( 'loop-templates/content', 'page-un-boto' ); ?>            </div>
    </div>
</div>


<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
