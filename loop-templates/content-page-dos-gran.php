<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>



<div class="container-fluid de-tres espai">
    <div class="row">
        <div class="col-12 text-center text-primary font-titols"><h3><?php the_field('de_dos_gran_titol')?></h3></div>
    </div>
    <div class="row">
        <div class="col-12 col-md-6">
            <div><img class="img-fluid" src="<?php the_field('de_dos_gran_img_esq')?>"/></div>
            <div class="text"><?php the_field('de_dos_gran_esq')?></div>
        </div>
        <div class="col-12 col-md-6">
            <div><img class="img-fluid" src="<?php the_field('de_dos_gran_img_drt')?>"/></div>
            <div class="text"><?php the_field('de_dos_gran_drt')?></div>
        </div>
    </div>
</div>
