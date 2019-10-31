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
<div class="site" id="page">

    <div class="navbar navbar-default fixed-top" data-spy="affix" data-offset-top="400">
        <div class="container">
            <div class="navbar-header">
                <a href="#" class="navbar-brand">Brand</a>
                <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="#">Link</a></li>
                    <li><a href="#">Link</a></li>
                </ul>
                <ul class="nav navbar-right navbar-nav">
                    <li>
                        <a href="#">Link</a>
                    </li>
                    <li>
                        <a href="#"><span class="badge">2</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div><!-- /.navbar -->

    <section class="first">
        <div class="container">
            <h1 class="text-center">Hello.</h1>
        </div>
    </section>

    <section>
        <div class="container">
            <h1>Here is some more content</h1>
        </div>
    </section>

    <section>

        <div class="container">

            <h1>Here is some more content</h1>

        </div>

    </section>

    <section>

        <div class="container">

            <h1>Here is some more content</h1>

        </div>

    </section>

	<!-- ******************* The Navbar Area ******************* -->
