<?php
/**
 * Template Name: Full Width Page HOME
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



<div class="xwrapper home container-fluid" id="full-width-page-wrapper">

    <?php while ( have_posts() ) : the_post(); ?>

    <div <?php post_class(["row", "position-relative"]); ?> id="post-<?php the_ID(); ?>">
        <div class="col-12 content-area p-0" id="primary">
            <?php echo get_the_post_thumbnail( $post->ID, 'full' ); ?>
        </div><!-- #primary -->
        <div class="col-12 position-absolute titol-foto font-titols"><?php the_title()?></div>
    </div><!-- .row end -->

    <div class="row end-scroll gris">
        <div class="col-12 sota-foto ">
            <div class="container">
                <div class="col-12 text-center">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="container-fluid gris home">
    <div class="row">
        <div class="col-12">
            <?php get_template_part( 'loop-templates/content', 'page-dos-caixa' ); ?>
        </div>
    </div>
</div>

<?php get_template_part( 'loop-templates/content', 'page-quatre' ); ?>

<div class="container espai">
    <div class="row casa-banc">
        <div class="col-md-3 col-4 offset-4 offset-md-0"><img class="img" src="<?php the_field('tienda_img')?>"/></div>
        <div class="col-md-6 col-9"><?php the_field('tienda')?></div>
        <div class="col-3 d-flex align-items-center justify-content-center">
            <div class="boto"><?php the_field('tienda_boto')?></div>
        </div>
    </div>
</div><!-- #full-width-page-wrapper -->

<div class="container-fluid gris espai">
    <div class="row">
        <div class="col-12">
            <div class="container gris testimonial">
                <div class="row">
                    <div class="col-12 text-center text-primary">
                        <h3 class="font-titols text-secondary"><?php the_field('testimonial_titol')?></h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12"><?php the_field('testimonial')?></div>
                </div>
            </div>
        </div>

    </div>
</div>

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
