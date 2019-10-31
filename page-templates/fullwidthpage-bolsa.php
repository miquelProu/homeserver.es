<?php
/**
 * Template Name: Full Width Page BOLSA DE TRABAJO
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


<div class="xwrapper bolsa container-fluid gris" id="full-width-page-wrapper">

    <?php while ( have_posts() ) : the_post(); ?>

    <div <?php post_class(["row", "position-relative"]); ?> id="post-<?php the_ID(); ?>">
        <div class="col-12 content-area p-0" id="primary">
            <?php echo get_the_post_thumbnail( $post->ID, 'full' ); ?>
        </div><!-- #primary -->
        <div class="col-12 position-absolute titol-foto font-titols"><?php the_title()?></div>

    </div><!-- .row end -->

    <div class="row end-scroll">
        <div class="col-12 sota-foto">
            <h4 class="font-titols text-center text-secondary"><?php the_field('titol_sota_foto')?></h4>            </div>
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


<div class="container-fluid bolsa gris espai-down">
    <div class="row">
        <div class="col-12">
            <div class="container">
                <div class="row">
                    <div class="col-12"><?php echo do_shortcode("[contact-form-7 id=\"236\" title=\"bolsa de trabajo\"]"); ?></div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

    jQuery( document ).ready(function(){
        jQuery("#interes").change(function(val){
            jQuery("input[name='interes[]']").each(function (index, obj) {
                console.log(index, obj, obj.checked, obj.value);
                if (index == 2){
                    if (obj.checked){
                        jQuery("input[name='disponibilidad[]']").attr("disabled", true);
                    } else {
                        jQuery("input[name='disponibilidad[]']").removeAttr("disabled");
                    }
                }
            });
        });
    });
</script>


<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
