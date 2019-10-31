<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>



<div class="container de-dos espai">
    <div class="row">
        <div class="col-12 text-center text-primary font-titols">
            <h3><?php the_field('de_dos_titol')?></h3>
        </div>
    </div>
    <div class="row">
        <div class="col-10 offset-1 col-md-4 offset-md-2 caixa mr-md-3">
            <div><img class="img-fluid" src="<?php the_field('de_dos_esq_img')?>"/></div>
            <div class="text"><?php the_field('de_dos_esq')?></div>
        </div>
        <div class="col-10 offset-1 col-md-4 caixa ml-md-3">
            <div><img class="img-fluid" src="<?php the_field('de_dos_drt_img')?>"/></div>
            <div class="text"><?php the_field('de_dos_drt')?></div>
        </div>
    </div>
</div>
