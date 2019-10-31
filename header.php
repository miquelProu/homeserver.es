<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php do_action( 'wp_body_open' ); ?>

<script>
    // Options
    var options = {
        offset: 500
    }

    jQuery( document ).ready(function(){
        swap();
    });

    jQuery(window).scroll(function (event) {
        swap();

    });

    function swap(){
        var scroll = jQuery(window).scrollTop();
        var elementOffset = jQuery('.end-scroll').offset().top;
        var navbarHeigth = jQuery('.navbar').outerHeight();
        if (scroll > (elementOffset - navbarHeigth)) {
            if (!jQuery(".navbar").hasClass('bg-primary')){
                jQuery(".navbar").addClass('bg-primary');
                jQuery(".navbar .custom-logo-link img").attr('src', 'http://new.homeserver.es/wp-content/uploads/2019/09/logo-blanc.png');
            }
        } else {
            if (jQuery(".navbar").hasClass('bg-primary')){
                jQuery(".navbar").removeClass('bg-primary');
                jQuery(".navbar .custom-logo-link img").attr('src', 'http://new.homeserver.es/wp-content/uploads/2019/09/logo.png');
            }
        }
        var distanceFromBottom = Math.floor(jQuery(document).height() - jQuery(document).scrollTop() - jQuery(window).height());
        // console.log(distanceFromBottom);
        if(distanceFromBottom < 300) {
            jQuery(".detail-to-top").addClass('vist');

            // jQuery('.detail-to-top').animate({
            //     transform: "translate3d(0px, 0px, 0px) scale(0.5)"
            // }, 'linear');


        } else if (distanceFromBottom > 300 && jQuery(".detail-to-top").is(":visible")){
            jQuery(".detail-to-top").removeClass('vist');

        }
    }

    jQuery("img").load(function(){

    });

</script>

<div class="site" id="page">


	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<nav class="navbar navbar-expand-md navbar-dark fixed-top affix-top">

		<?php if ( 'container' == $container ) : ?>
			<div class="container">
		<?php endif; ?>

					<!-- Your site title as branding in the menu -->
					<?php if ( ! has_custom_logo() ) { ?>

						<?php if ( is_front_page() && is_home() ) : ?>

							<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>

						<?php else : ?>

							<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>

						<?php endif; ?>


					<?php } else {
						the_custom_logo();
					} ?><!-- end custom logo -->

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
					<span class="navbar-toggler-icon"></span>
				</button>

				<!-- The WordPress Menu goes here -->
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav ml-auto',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				); ?>

                <?php $languages = icl_get_languages('skip_missing=0&orderby=code')?>
                <div class="dropdown i18n">
                    <a class="dropdown-toggle" href="#" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo ICL_LANGUAGE_CODE ?></a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <?php foreach ($languages as $lang):?>
                        <?php if ($lang["active"]== 0):?>
                        <a class="dropdown-item" href="?lang=<?php echo $lang["code"]?>"><?php echo $lang["code"]?></a>
                        <?php endif;?>
                        <?php endforeach;?>
                    </div>
                </div>

			<?php if ( 'container' == $container ) : ?>
			</div><!-- .container -->
			<?php endif; ?>

		</nav><!-- .site-navigation -->

	</div><!-- #wrapper-navbar end -->
