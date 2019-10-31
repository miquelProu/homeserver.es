<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>

<script>
    jQuery( document ).ready(function(){

        jQuery(".grid").imagesLoaded(function () {
            jQuery('.grid').masonry({
                itemSelector: '.grid-item', // use a separate class for itemSelector, other than .col-
                columnWidth: '.grid-sizer',
                percentPosition: true
            });
        });
    });
</script>


<div class="container blog end-scroll espai" id="single-wrapper">
	<div class="row" id="content" tabindex="-1">
		<div class="col-12 text-center" style="margin-top:60px;margin-bottom:30px;">
            <h3 class="font-titols text-primary">BLOG HOME SERVER</h3>
        </div>
    </div>
    <div class="row grid">
        <div class="grid-sizer col-4"></div>
        <?php while ( have_posts() ) : the_post(); ?>

            <?php get_template_part( 'loop-templates/content', 'blog' ); ?>

        <?php endwhile; // end of the loop. ?>
    </div>
</div><!-- #single-wrapper -->

<?php get_footer(); ?>
