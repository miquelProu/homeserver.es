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
    <div class="row espai caixa-de-dos">
        <div class="col-12 col-md-3 offset-md-2 caixa">
            <?php the_field('de_dos_esq');?>
        </div>
        <div class="col-12 col-md-3 offset-md-2 caixa">
            <?php the_field('de_dos_drt');?>
        </div>
    </div>
</div>
