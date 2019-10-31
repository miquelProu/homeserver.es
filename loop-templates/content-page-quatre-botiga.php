<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>



<div class="container botiga espai" id="interna">
    <div class="row">
        <div class="col-12 col-md-3">
            <div><img class="img-fluid" src="<?php the_field('de_quatre_img_1')?>"/></div>
            <div class="text"><?php the_field('de_quatre_1')?></div>
        </div>
        <div class="col-12 col-md-3">
            <div><img class="img-fluid" src="<?php the_field('de_quatre_img_2')?>"/></div>
            <div class="text"><?php the_field('de_quatre_2')?></div>
        </div>
        <div class="col-12 col-md-3">
            <div><img class="img-fluid" src="<?php the_field('de_quatre_img_3')?>"/></div>
            <div class="text"><?php the_field('de_quatre_3')?></div>
        </div>
        <div class="col-12 col-md-3">
            <div><img class="img-fluid" src="<?php the_field('de_quatre_img_4')?>"/></div>
            <div class="text"><?php the_field('de_quatre_4')?></div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-3">
            <div><img class="img-fluid" src="<?php the_field('de_quatre_img_5')?>"/></div>
            <div class="text"><?php the_field('de_quatre_5')?></div>
        </div>
        <div class="col-12 col-md-3">
            <div><img class="img-fluid" src="<?php the_field('de_quatre_img_6')?>"/></div>
            <div class="text"><?php the_field('de_quatre_6')?></div>
        </div>
        <div class="col-12 col-md-3">
            <div><img class="img-fluid" src="<?php the_field('de_quatre_img_7')?>"/></div>
            <div class="text"><?php the_field('de_quatre_7')?></div>
        </div>
        <div class="col-12 col-md-3">
            <div><img class="img-fluid" src="<?php the_field('de_quatre_img_8')?>"/></div>
            <div class="text"><?php the_field('de_quatre_8')?></div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-12 text-center">
            <a class="boto-botiga" href="mailto:miquel@prou.us"><?php the_field('boto')?></a>
        </div>
    </div>
</div>
