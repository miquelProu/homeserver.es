<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>



<div class="container de-un espai">
    <div class="row">
        <div class="col-12 text-center text-secondary font-titols">
            <h3 class="un"><?php the_field('de_un_titol')?></h3>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div><img class="img-fluid" src="<?php the_field('de_un_img')?>"/></div>
            <div class="text text-center"><?php the_field('de_un_text')?></div>
        </div>
    </div>
</div>
