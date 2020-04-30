<?php 
/**
 *  Details / Accordion-style Element
 *
 *  @package poise-theme
 *  @author T24
 *  @version 1.0.0
 */

if ( have_rows( 'details_item' ) ) {

	?>

<section class="details t24-component">

	<?php

	while ( have_rows( 'details_item' ) ) { the_row();

		$header = get_sub_field( 'header' );
		$text   = get_sub_field( 'text' );

		if ( ! empty( $header || $text ) ) {

?>

	<details class="details__inner" data-aos="fade-left" data-aos-duration="500">
	<?php if ( ! empty( $header ) ) { ?>
		<summary class="details__header"><h3><?php echo wp_kses_post( $header ); ?></h3></summary>
	<?php } if ( ! empty( $text ) ) { ?>
		<div class="details__text text text--default rt" data-aos="fade-left" data-aos-duration="500"><?php echo wp_kses_post( $text ); ?></div>
	<?php } ?>
	</details>

<?php

		}

	}

?>

</section>

<?php

}