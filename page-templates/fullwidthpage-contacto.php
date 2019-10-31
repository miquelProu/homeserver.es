<?php
/**
 * Template Name: Full Width Page CONTACTO
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


<div class="xwrapper contact container-fluid gris" id="full-width-page-wrapper">

    <?php while ( have_posts() ) : the_post(); ?>

    <div <?php post_class(["row", "position-relative"]); ?> id="post-<?php the_ID(); ?>">
        <div class="col-12 content-area p-0" id="primary">
            <?php echo get_the_post_thumbnail( $post->ID, 'full' ); ?>
        </div><!-- #primary -->
        <div class="col-12 position-absolute titol-foto font-titols"><?php the_title()?></div>
    </div><!-- .row end -->

    <div class="row end-scroll">
<!--        <div class="col-12 sota-foto">-->
<!--            <h4 class="font-titols text-center text-secondary">--><?php //the_title(); ?><!--</h4>-->
<!--        </div>-->
    </div>

<!--    <div class="row">-->
<!--        <div class="col-12">-->
<!--            <div class="container">-->
<!--                <div class="col-12">-->
<!---->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->

</div>


<div class="container-fluid contact gris espai">
    <div class="row">
        <div class="col-12">
            <div class="container contact gris">
                <div class="row">
                    <div class="col-12 text-center font-titols">
                        <?php the_field('text_sota_foto')?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid contact gris espai-down">
    <div class="row">
        <div class="col-2 offset-1 horari font-titols">
            <?php the_field('horari')?>
        </div>
        <div class="col-9 col-md-6"><?php the_content(); ?></div>
        <div class="col-12 col-md-2 empleo">
            <div><a href="bolsa-de-trabajo">¿ BUSCAS EMPLEO ?</a></div>
        </div>
    </div>
</div>

<div class="container-fluid contact espai mapes">
    <div class="row">
        <div class="col-12 col-md-6">
            <div class="row">
                <div class="col-10 offset-1">
                    <h3 class="text-primary">BARCELONA</h3>
                    <div class="embed-responsive embed-responsive-4by3">
                        <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2993.2966976317502!2d2.148648615197508!3d41.38936257926404!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a4a28491f58611%3A0xe35e1c47570ab214!2sCarrer%20de%20Villarroel%2C%20195%2C%2008036%20Barcelona!5e0!3m2!1sca!2ses!4v1570035591501!5m2!1sca!2ses" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                    <div class="row taula">
                        <div class="col-12 col-md-6"><?php the_field('barcelona_columna_1')?></div>
                        <div class="col-12 col-md-6"><?php the_field('barcelona_columna_2')?></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="row">
                <div class="col-10 offset-1">
                    <h3 class="text-primary">MADRID</h3>
                    <div class="embed-responsive embed-responsive-4by3">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3037.6292767311056!2d-3.671175684835808!3d40.41706277936508!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4228a90e22abd5%3A0xf708eba444e557f6!2sCalle%20del%20Dr.%20Esquerdo%2C%2091%2C%2028007%20Madrid!5e0!3m2!1sca!2ses!4v1570035906756!5m2!1sca!2ses" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>

                    <div class="row taula">
                        <div class="col-12 col-md-6"><?php the_field('madrid_columna_1')?></div>
                        <div class="col-12 col-md-6"><?php the_field('madrid_columna_2')?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
