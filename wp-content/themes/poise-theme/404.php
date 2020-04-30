<?php 
/**
 *  WordPress 404 Page
 *
 *  @package poise-theme
 *  @author T24
 *  @version 1.0.0
 */

get_header();

?>

<main id="main" class="main not-found article--0">

	<header class="lede lede--large t24-component">
		<div class="lede__content">
			<div class="row col">

				<h1><?php echo __( '404' ); ?></h1>
				<h2><?php echo __( 'Page not found!' ); ?></h2>
				<p><?php echo __( 'The page you were looking for cannot be found. It may have moved to a different URL. Try using the site navigation to find what you were looking for or click on the logo to return to the homepage.' ); ?></p>

			</div>
		</div>
	</header>

</main>

<?php

get_footer();