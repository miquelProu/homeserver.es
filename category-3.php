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

<div class="xwrapper faqs container-fluid" id="full-width-page-wrapper">
    <div <?php post_class(["row", "position-relative"]); ?> id="post-<?php the_ID(); ?>">
        <div class="col-12 content-area p-0" id="primary">
            <img src="<?php echo get_template_directory_uri()?>/img/faqs.jpg" class="img-fluid" />
        </div><!-- #primary -->
        <div class="col-12 position-absolute titol-foto font-titols">PREGUNTAS FRECUENTES</div>

    </div><!-- .row end -->
</div>

<?php $categories=get_categories(array( 'parent' => 3 ));?>
<div class="container-fluid faqs">
    <div class="row end-scroll">
        <div class="col-12">
            <div class="container">
                <div class="row titols">
                    <?php $category = get_the_category()?>
                    <?php foreach ($categories as $cat):?>
                    <div class="col-12 col-md-4 text-secondary font-titols e<?php echo ($category[0]->cat_ID == $cat->term_taxonomy_id) ? "selected": ""?>">
                        <a href="<?php echo get_category_link($cat->term_taxonomy_id)?>"><?php echo $cat->name?></a>
                    </div>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid espai-down" id="single-wrapper">
	<div class="row" id="content" tabindex="-1">
		<div class="col-12">
            <div class="container faqs">
                <div class="row">
                    <div class="col-12">
                        <?php while ( have_posts() ) : the_post(); ?>

                            <?php get_template_part( 'loop-templates/content', 'faq' ); ?>

                        <?php endwhile; // end of the loop. ?>
                    </div>
                </div>
            </div>
		</div><!-- .row -->
	</div><!-- #content -->
</div><!-- #single-wrapper -->

<?php get_footer(); ?>
