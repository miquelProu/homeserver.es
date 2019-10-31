<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php
    $footer = get_post(apply_filters('wpml_object_id', 248, 'post', true));
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div id="wrapper-footer">

	<div class="container-fluid footer bg-secondary">

        <div class="detail-to-top">
            <svg width="192" height="61" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 160.7 61.5" enable-background="new 0 0 160.7 61.5" xml:space="preserve">
                <path d="M80.3,61.5c0,0,22.1-2.7,43.1-5.4s41-5.4,36.6-5.4c-21.7,0-34.1-12.7-44.9-25.4S95.3,0,80.3,0c-15,0-24.1,12.7-34.9,25.4S22.3,50.8,0.6,50.8c-4.3,0-6.5,0,3.5,1.3S36.2,56.1,80.3,61.5z"></path>
            </svg>
            <div class="btn--top">
                <a href="#" class="btn--top_text">
                    <span class="btn__arrow btn__arrow--top"></span>
                    <span class="btn__arrow btn__arrow--bottom"></span>
                </a>
            </div>
        </div>

		<div class="row">
			<div class="col-12 col-md-5 pl-4">
                <?php echo get_the_post_thumbnail( 248, 'full' ); ?>
                <?php the_field('esq', 248)?>
            </div>
            <div class="col-12 col-md-4"><?php echo do_shortcode("[instagram-feed user=\"homeserverbcn\"]")?></div>
            <div class="col-12 col-md-3 pr-4">
                <div class="txt mb-5"><?php the_field('drt', 248)?></div>
                <div>
                    <a href="<?php the_field('logo_link_1', 248)?>" target="_blank"><img class="img-fluid" src="<?php the_field('logo_img_1', 248)?>"/></a>
                </div>
                <div>
                    <a href="<?php the_field('logo_link_2', 248)?>" target="_blank"><img class="img-fluid" src="<?php the_field('logo_img_2', 248)?>"/></a>
                </div>
            </div>
		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<script>
    jQuery( document ).ready(function(){
        jQuery(".solicitud").click(function(event){
            event.stopPropagation();

            var sol = jQuery(this).attr("solicitud");
            window.open( "solicitud?text=" + encodeURI(sol),"_self")
        });
    });
</script>

<?php wp_footer(); ?>

</body>

</html>

