<?php
/**
 *  WordPress Header
 *
 *  @package poise-theme
 *  @author T24
 *  @version 1.0.0
 */

$gtm = get_field( 'gtm_id', 'options' );

?>

<!DOCTYPE html>
<html class="t24" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php echo get_bloginfo( 'charset' ); ?>" />
	<meta http-equiv="x-ua-compatible" content="ie=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="author" content="t24.digital" />

	<?php if ( ! empty($gtm) ) { ?>
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','<?php echo wp_kses_post( $gtm ); ?>');</script>
	<?php } ?>
	<script src="/wp-content/themes/poise-theme/assets/js/min/jquery.js"></script>

	<?php
	// WP Admin Bar front-end styles.
	if ( is_admin_bar_showing() ) {
	?>
	<style type="text/css" id="admin-bar">#wpadminbar *{font-family: "Bree Serif", serif!important;} #wpadminbar .ab-icon {font-family: dashicons!important;} #wp-admin-bar-comments,#wp-admin-bar-search,#wp-admin-bar-wp-logo,.avatar,.hide-if-no-customize{display:none!important}#wpadminbar{background:#202030!important}.wp-admin #wpadminbar #wp-admin-bar-site-name>.ab-item:before{content:"\f015";font-family:"Font Awesome\ 5 Free";font-weight:900}</style>

	<?php
	}

	// WordPress <head> metas and links.
	wp_head();

	// Any necessary additions to the <head> [favicons etc].
	get_template_part( '../release-theme/custom/site-head' );

	?>
</head>

<body <?php body_class(); ?>>

	<span style="visibility:hidden;width:0.01rem;height:0.01rem;font-size: 0.01rem;position:absolute;z-index:-5;"><?php echo get_bloginfo( 'title' ); ?></span>

	<div id="t24-site">

		<!--[if IE]><div class="alert alert-warning"> You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" target="_blank" rel="noopener norefferer">upgrade your browser</a> to improve your experience.</div> <![endif]-->

		<a class="skip-to-main" href="#main" title="Skip to main content"><?php echo __( 'Skip to main content' ); ?></a>

		<?php

		// Just the stuff we're going to edit.
		get_template_part( '../release-theme/custom/header' );