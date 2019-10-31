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
        <div class="col-12 text-center text-primary font-titols">
            <h3><?php the_field('de_un_boto_titol')?></h3>
        </div>
    </div>
    <div class="row">
        <div class="col-12 text-center">
            <div class="text"><?php the_field('de_un_boto_text')?></div>
            <?php the_field('de_un_boto')?>
        </div>
    </div>
</div>
