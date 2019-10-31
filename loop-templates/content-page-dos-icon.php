<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>



<div class="container de-dos-icon">
    <div class="row">
        <div class="col-12 col-md-3 offset-md-3 text-center text-secondary">
            <div><img class="img-fluid" src="<?php the_field('de_dos_icon_esq_img')?>"/></div>
            <?php the_field('de_dos_icon_esq')?>
        </div>
        <div class="col-12 col-md-3 text-center text-secondary">
            <div><img class="img-fluid" src="<?php the_field('de_dos_icon_drt_img')?>"/></div>
            <?php the_field('de_dos_icon_drt')?>
        </div>
    </div>
</div>
