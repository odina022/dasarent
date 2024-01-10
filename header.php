<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Dassarent
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<!-- <a class="skip-link screen-reader-text" href="#primary"><?php /*esc_html_e( 'Skip to content', 'dassarent' );*/ ?></a> -->

	  <header class="header">
        <nav class="header_nav home">
            <div class="container">
                <div class="header_nav-wrapper">
															    	<div class="logo">
                        <?php the_custom_logo(); ?>
                    </div>
                    <button class="btn-burger">
																					<span></span> 
																			  	<span></span>
																				   <span></span>
																				</button>
																				<?php
		                      	wp_nav_menu(
		                      		array(
		                      			'theme_location' => 'header-menu',
		                      			'menu_class'        => 'header_nav-menu',
																											'container'    => false,
		                      		)
		                      	);
		                   	?>
                    <a class="info" href="tel:+998946530655"><i class="fas fa-phone-alt">+998 99 531 35 10</i></a>
                </div>
            </div>
        </nav>
    </header>

