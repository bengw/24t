<?php
/**
 *  Header Banner
 *
 *  @package release-theme
 *  @author benwelsby
 *  @version 1.0.0
 */

$logo 	   = get_field( 'logo_light', 'options' );
$logo_dark = get_field( 'logo_dark', 'options' );

if (!is_front_page()) {
	$url = '/#form';
} else {
	$url = '#';
}
?>
<header class="header">
	<div class="header__inner">
		<div class="header__logo logo">
			<a href="/" title="Go to homepage">
				<?php if (!empty($logo)) { ?>
					<img src="<?php echo esc_url( $logo )?>" alt="24tilt" class="light">
				<?php } ?>
				<?php if (!empty($logo_dark)) { ?>
					<img src="<?php echo esc_url( $logo_dark )?>" alt="24tilt" class="dark">
				<?php } ?>
			</a>
		</div>
		<nav class="header__nav">
			<?php wp_nav_menu([
				'theme_location' => 'header-nav',
				'fallback_cb'    => false,
				'container'      => 'header__nav',
				'depth'          => 1
			]) ?>
		</nav>
		<button class="hamburger hamburger--spring">
		 	<span class="hamburger-box">
				<span class="hamburger-inner"></span>
			</span>
		</button>
	</div>
</header>

<a class="scroll-to-top" href="#top" title="Scroll to top of page" role="button">
	<span>^</span>
	<span style="display:none;">Scroll to top of page</span>
</a>