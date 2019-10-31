<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>




    <div class="row">
        <div class="col-12 text-center font-titols"><h4><?php the_field('de_tres_icon_titol')?></h4></div>
    </div>
    <div class="row">
        <div class="col-12 col-md-4">
            <div class="text-center"><img class="img-fluid" src="<?php the_field('de_tres_icon_img_1')?>"/></div>
            <div class="text"><?php the_field('de_tres_icon_1')?></div>
        </div>
        <div class="col-12 col-md-4">
            <div class="text-center"><img class="img-fluid" src="<?php the_field('de_tres_icon_img_2')?>"/></div>
            <div class="text"><?php the_field('de_tres_icon_2')?></div>
        </div>
        <div class="col-12 col-md-4">
            <div class="text-center"><img class="img-fluid" src="<?php the_field('de_tres_icon_img_3')?>"/></div>
            <div class="text"><?php the_field('de_tres_icon_3')?></div>
        </div>
    </div>

