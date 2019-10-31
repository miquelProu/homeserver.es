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
        <div class="col-12 text-center text-secondary">
            <div><img class="img-fluid" src="<?php the_field('de_un_icon_img')?>"/></div>
            <?php the_field('de_un_icon')?>
        </div>
    </div>
</div>
