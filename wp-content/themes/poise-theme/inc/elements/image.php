<?php
/**
 *  A single image
 *
 *  @package poise-theme
 *  @author T24
 *  @version 1.0.0
 */

$variation = get_sub_field( 'variation' );
$image     = get_sub_field( 'image' );
if ( ! empty( $image ) ) {
	$image_url     = $image['url'];
	$image_alt     = $image['alt'];
	$image_title   = $image['title'];
	$image_caption = $image['caption'];
}

if ( get_row_layout() == 'one_col_image' ) {

?>

<figure class="image <?php echo wp_kses_post( $variation ); ?> t24-component" data-aos="zoom-in-up" data-aos-duration="500"
	<?php if ( ! empty( $image_caption ) ) { ?>
	style="margin-bottom: 2.5rem;"
	<?php } ?>
>
	<img src="<?php echo esc_url( $image_url ); ?>"
		class="lazy"
		<?php if ( ! empty ( $image_alt ) ) { ?>
		alt="<?php echo esc_attr( $image_alt ); ?>"
		<?php } ?>
		<?php if ( ! empty ( $image_title ) ) { ?>
		title="<?php echo esc_attr( $image_title ); ?>"
		<?php } ?>
	>
	<?php if ( ! empty( $image_caption ) ) { ?>
	<figcaption class="image__caption"><?php echo wp_kses_post( $image_caption ); ?></figcaption>			
	<?php } ?>
</figure>

<?php

} if ( get_row_layout() == 'two_col_image' ) {

?>

<figure class="image <?php echo wp_kses_post( $variation ); ?> t24-component" data-aos="zoom-in-up" data-aos-duration="500"
	<?php if ( ! empty( $image_caption ) ) { ?>
	style="margin-bottom: 2.5rem;"
	<?php } ?>
>
	<img src="<?php echo esc_url( $image_url ); ?>"
		class="lazy"
		<?php if ( ! empty ( $image_alt ) ) { ?>
		alt="<?php echo esc_attr( $image_alt ); ?>"
		<?php } ?>
		<?php if ( ! empty ( $image_title ) ) { ?>
		title="<?php echo esc_attr( $image_title ); ?>"
		<?php } ?>
	>
	<?php if ( ! empty( $image_caption ) ) { ?>
	<figcaption class="image__caption"><?php echo wp_kses_post( $image_caption ); ?></figcaption>			
	<?php } ?>
</figure>

<?php

} if ( get_row_layout() == 'three_col_image' ) {

?>

<figure class="image <?php echo wp_kses_post( $variation ); ?> t24-component" data-aos="zoom-in-up" data-aos-duration="500"
	<?php if ( ! empty( $image_caption ) ) { ?>
	style="margin-bottom: 2.5rem;"
	<?php } ?>
>
	<img src="<?php echo esc_url( $image_url ); ?>"
		class="lazy"
		<?php if ( ! empty ( $image_alt ) ) { ?>
		alt="<?php echo esc_attr( $image_alt ); ?>"
		<?php } ?> 
		<?php if ( ! empty ( $image_title ) ) { ?>
		title="<?php echo esc_attr( $image_title ); ?>"
		<?php } ?>
	>
	<?php if ( ! empty( $image_caption ) ) { ?>
	<figcaption class="image__caption"><?php echo wp_kses_post( $image_caption ); ?></figcaption>			
	<?php } ?>
</figure>

<?php

}