<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>



<div class="container-fluid de-tres espai" id="interna">
    <div class="row">
        <div class="col-12 text-center text-primary font-titols"><h3><?php the_field('de_tres_titol')?></h3></div>
    </div>
    <div class="row">
        <div class="col-12 col-md-4">
            <div><img class="img-fluid" src="<?php the_field('de_tres_img_1')?>"/></div>
            <div class="text"><?php the_field('de_tres_1')?></div>
        </div>
        <div class="col-12 col-md-4">
            <div><img class="img-fluid" src="<?php the_field('de_tres_img_2')?>"/></div>
            <div class="text"><?php the_field('de_tres_2')?></div>
        </div>
        <div class="col-12 col-md-4">
            <div><img class="img-fluid" src="<?php the_field('de_tres_img_3')?>"/></div>
            <div class="text"><?php the_field('de_tres_3')?></div>
        </div>
    </div>
</div>
