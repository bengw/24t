<?php
/**
 *  Slider Text Element
 *
 *  @package poise-theme
 *  @author T24
 *  @version 1.0.0
 */

$text = 'inc/partials/elements/text--for-slider';

if ( have_rows( 'flexicard' ) ) {

?>

<section class="slider-text t24-component js-flickity">

<?php

	while ( have_rows( 'flexicard' ) ) { the_row();

?>

		<div class="slider-text__slide">
		
			<?php get_template_part( $text ); ?>

		</div>

<?php

	}

?>

</section>

<?php

}