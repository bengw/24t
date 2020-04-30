<?php
/**
 *  Text Element Loop
 *  ..to get working with ACF PRO.
 *
 *  @package poise-theme
 *  @author T24
 *  @version 1.0.0
 */

$text             	  = get_sub_field( 'text' );
$background_image 	  = get_sub_field( 'image' );
$background_image_url = $background_image['url'];
$background_image_alt = $background_image['alt'];
$variation        	  = get_sub_field( 'variation' );
$anchor 			  = get_sub_field( 'link' );
if ( ! empty( $anchor ) ) {
	$anchor_url	   = $anchor['url'];
	$anchor_target = $anchor['target'];
}

if ( get_row_layout() == 'one_col_cta' ) {

?>

<section class="text <?php echo wp_kses_post( $variation ); ?> t24-component" data-aos="fade-up" data-aos-duration="500">
	<?php if ( ! empty( $text ) ) { ?>
	<div class="text__inner">
		<div class="text__content rt">
			<?php echo ( $text ); ?>
		</div>
	</div>
	<?php } ?>

	<?php if ( ! empty( $background_image ) ) { ?>
	<figure class="text__image">
		<img src="<?php echo esc_url( $background_image_url ); ?>"
		<?php if ( ! empty( $background_image_alt ) ) { ?>
			alt="<?php echo esc_attr( $background_image_alt ) ?>"
		<?php } ?>
		>
	</figure>
	<?php } ?>
	<?php if ( ! empty($anchor_url) ) { ?>
	<a class="text__anchor"
		href="<?php echo esc_url( $anchor_url ); ?>"
		<?php if ( ! empty( $anchor_target ) ) { ?>
		target="<?php echo esc_attr( $anchor_target ); ?>"
		<?php } ?>
	></a>
	<?php } ?>
</section>

<?php

} if ( get_row_layout() == 'two_col_cta' ) {

?>

<section class="text <?php echo wp_kses_post( $variation ); ?> t24-component" data-aos="fade-up" data-aos-duration="500">
	<?php if ( ! empty( $text ) ) { ?>
	<div class="text__inner">
		<div class="text__content rt">
			<?php echo ( $text ); ?>
		</div>
	</div>
	<?php } ?>

	<?php if ( ! empty( $background_image ) ) { ?>
	<figure class="text__image">
		<img src="<?php echo esc_url( $background_image_url ); ?>"
		<?php if ( ! empty( $background_image_alt ) ) { ?>
			alt="<?php echo esc_attr( $background_image_alt ) ?>"
		<?php } ?>
		>
	</figure>
	<?php } ?>
	<?php if ( ! empty( $anchor ) ) { ?>
	<a class="text__anchor"
		href="<?php echo esc_url( $anchor_url ); ?>"
		<?php if ( $anchor_target ) { ?>
		target="<?php echo esc_attr( $anchor_target ); ?>"
		<?php } ?>
	></a>
	<?php } ?>
</section>	

<?php

} if ( get_row_layout() == 'three_col_cta' ) {

?>

<section class="text <?php echo wp_kses_post( $variation ); ?> t24-component" data-aos="zoom-in-up" data-aos-duration="500">
	<?php if ( ! empty( $text ) ) { ?>
	<div class="text__inner">
		<div class="text__content rt">
			<?php echo ( $text ); ?>
		</div>
	</div>
	<?php } ?>

	<?php if ( ! empty( $background_image ) ) { ?>
	<figure class="text__image">
		<img src="<?php echo esc_url( $background_image_url ); ?>"
		<?php if ( ! empty( $background_image_alt ) ) { ?>
			alt="<?php echo esc_attr( $background_image_alt ) ?>"
		<?php } ?>
		>
	</figure>
	<?php } ?>
	<?php if ( ! empty( $anchor ) ) { ?>
	<a class="text__anchor"
		href="<?php echo esc_url( $anchor_url ); ?>"
		<?php if ( ! empty( $anchor_target ) ) { ?>
		target="<?php echo esc_attr( $anchor_target ); ?>"
		<?php } ?>
	></a>
	<?php } ?>
</section>

<?php

}