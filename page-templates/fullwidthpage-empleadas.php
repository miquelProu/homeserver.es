<?php
/**
 * Template Name: Full Width Page EMPLEADAS DEL HOGAR
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


<div class="xwrapper empleadas container-fluid gris" id="full-width-page-wrapper">

    <?php while ( have_posts() ) : the_post(); ?>

    <div <?php post_class(["row", "position-relative"]); ?> id="post-<?php the_ID(); ?>">
        <div class="col-12 content-area p-0" id="primary">
            <?php echo get_the_post_thumbnail( $post->ID, 'full' ); ?>
        </div><!-- #primary -->
        <div class="col-12 position-absolute titol-foto font-titols"><?php the_title()?></div>
    </div><!-- .row end -->

    <div class="row end-scroll">
        <div class="col-12 sota-foto"><h4 class="font-titols text-center text-secondary"><?php the_field('titol_sota_foto')?></h4></div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="container">
                <div class="col-12 text-center">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>

</div>

    <div class="container-fluid  empleadas gris espai">
        <div class="row">
            <div class="col-12">
                <?php get_template_part( 'loop-templates/content', 'page-dos-icon' ); ?>
            </div>
        </div>
    </div>

    <div class="container-fluid empleadas">
        <div class="row">
            <div class="col-12">
                <?php get_template_part( 'loop-templates/content', 'page-tres' ); ?>            </div>
        </div>
    </div>


<div class="container-fluid empleadas de-dos-banner">
    <div class="row">
        <div class="col-12 col-md-6 bg-primary primer espai"><?php the_field('de_dos_banner_esq')?></div>
        <div class="col-12 col-md-6 bg-secondary segon espai"><?php the_field('de_dos_banner_drt')?></div>
    </div>
</div>

    <div class="container-fluid empleadas gris">
        <div class="row">
            <div class="col-12">
                <?php get_template_part( 'loop-templates/content', 'page-dos' ); ?>
            </div>
        </div>
    </div>

<div class="container-fluid de-tres icones espai">
<?php get_template_part( 'loop-templates/content', 'page-tres-icon' ); ?>
</div>

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
