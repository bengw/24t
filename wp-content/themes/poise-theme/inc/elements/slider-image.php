<?php
/**
 *  Slider Images Element
 *
 *  @package poise-theme
 *  @author T24
 *  @version 1.0.0
 */

if ( have_rows( 'images' ) ) {

?>

<section class="slider-image t24-component js-flickity">

<?php

	while ( have_rows( 'images' ) ) { the_row();

		$image         = get_sub_field( 'image' );
		$image_url     = $image['url'];
		$image_alt     = $image['alt'];
		$image_title   = $image['title'];
		$image_caption = $image['caption'];

		if ( $image ) {

?>

				<figure class="slider-image__slide">
					<img src="<?php echo esc_url( $image_url ); ?>"
						<?php if ( ! empty( $image_alt ) ) { ?>
						alt="<?php echo esc_attr( $image_alt ); ?>"
						<?php } ?>
						<?php if ( ! empty( $image_title ) ) { ?>
						title="<?php echo esc_attr( $image_title ); ?>"
						<?php } ?>
					>

					<?php if ( ! empty( $image_caption ) ) { ?>
					<figcaption class="image__caption">
						<?php echo wp_kses_post( $image_caption ); ?>
					</figcaption>
					<?php } ?>
				</figure>

<?php

		}

	}
?>

</section>

<?php

}