<?php
/**
 * Template Name: Full Width Page SOLICITUD
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

<div class="xwrapper solcitud container-fluid bg-primary" id="full-width-page-wrapper">

    <?php while ( have_posts() ) : the_post(); ?>

<!--    <div --><?php //post_class("row"); ?><!-- id="post---><?php //the_ID(); ?><!--">-->
<!--        <div class="col-12 content-area p-0" id="primary">-->
<!--            --><?php //echo get_the_post_thumbnail( $post->ID, 'full' ); ?>
<!--        </div><!-- #primary -->
<!--    </div><!-- .row end -->

    <div class="row end-scroll">
        <div class="col-12 sota-foto text-center">
            <h4><?php the_title(); ?></h4>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="container">
                <div class="col-12">
                    <h1 class="font-titols"><?php echo $_GET["text"]?></h1>
                </div>
            </div>
        </div>
    </div>

</div>


<div class="container-fluid solcitud bg-primary espai">
    <div class="row">
        <div class="col-12">
            <div class="container">
                <div class="row">
                    <div class="col-12"><?php echo do_shortcode("[contact-form-7 id=\"245\" title=\"solicitud\"]"); ?></div>
                </div>
            </div>
        </div>
    </div>
</div>




<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
