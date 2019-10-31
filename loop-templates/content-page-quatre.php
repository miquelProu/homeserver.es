<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>



<div class="container">
    <div class="row espai icona-de-quatre">
        <div class="col-12">
            <div class="row">
                <div class="col-12">
                    <h3 class="font-titols"><?php the_field('de_quatre_titol')?></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-3">
                    <div><img class="img-fluid" src="<?php the_field('de_quatre_1_img')?>"/></div>
                    <?php the_field('de_quatre_1')?>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div><img class="img-fluid" src="<?php the_field('de_quatre_2_img')?>"/></div>
                    <?php the_field('de_quatre_2')?>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div><img class="img-fluid" src="<?php the_field('de_quatre_3_img')?>"/></div>
                    <?php the_field('de_quatre_3')?>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div><img class="img-fluid" src="<?php the_field('de_quatre_4_img')?>"/></div>
                    <?php the_field('de_quatre_4')?>
                </div>
            </div>
        </div>
    </div>
</div>
