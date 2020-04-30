<?php
/**
 * Site Footer
 *
 * @author benwelsby
 */

$copyright 		   = get_field('copyright_notice', 'option');
$address_line_one  = get_field( 'address_line_1', 'option' );
$address_line_two  = get_field( 'address_line_2', 'option' );
$address_post_code = get_field( 'post_code', 'option' );
$address_town_city = get_field( 'towncity', 'option' );
$email             = get_field( 'email_address', 'option' );
$telephone         = get_field( 'phone_number', 'option' );
$first_heading     = get_field( 'footer_first_heading', 'options' );
$second_heading    = get_field( 'footer_second_heading', 'options' );
$third_heading     = get_field( 'footer_third_heading', 'options' );
$logo 	   		   = get_field( 'logo_light', 'options' );
$logo_dark 		   = get_field( 'logo_dark', 'options' );

?>
<footer class="footer">
	<div class="footer__inner row">
		<div class="cols sm-12 md-6">
			<?php get_social_media(); ?>
			<ul class="footer__locations">
				<li><?php echo wp_kses_post($first_heading); ?></li>
				<li><?php echo wp_kses_post($second_heading); ?></li>
				<li><?php echo wp_kses_post($third_heading); ?></li>
			</ul>
			<nav class="footer__nav">
				<?php wp_nav_menu([
					'theme_location' => 'footer-nav',
					'fallback_cb'    => false,
					'container'      => 'footer__nav',
					'depth'          => 1
				]) ?>
			</nav>
		</div>
		<div class="cols sm-12 md-6">
			<div class="footer__logo logo">
				<a href="/" title="T24 Home">
					<img width="150" height="auto" src="<?php echo esc_url( $logo ); ?>" alt="24tilt">
				</a>
				<p><?php echo wp_kses_post($copyright); ?></p>
			</div>
		</div>
	</div>
</footer>