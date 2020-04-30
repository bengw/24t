<?php
/**
 *  2 Column Row
 *
 *  @package poise-theme
 *  @author T24
 *  @version 1.0.0
 */

$elements = 'wp-content/themes/poise-theme/inc/elements/_loop.php';

	if ( get_row_layout() == "row_of_two" ) {

		$col_width_one = get_sub_field( 'two_one_width' );
		$col_width_two = get_sub_field( 'two_two_width' );
		$variation		  = get_sub_field( 'row_variation' );
		$colour	   		  = get_sub_field( 'row_background_colour' );

?>

<div class="section <?php echo wp_kses_post( $variation ); ?> <?php echo wp_kses_post( $colour ); ?>">
	

<?php

			if ( have_rows( 'two_one' ) ) {

?>
	<div class="row">
		<div class="cols sm-12 <?php echo wp_kses_post( $col_width_one ); ?>">

<?php

				while ( have_rows( 'two_one' ) ) { the_row();

					include $elements;

				}

?>

		</div>

<?php

			} if ( have_rows( 'two_two' ) ) {

?>

		<div class="cols sm-12 <?php echo wp_kses_post( $col_width_two ); ?>">

<?php

				while ( have_rows( 'two_two' ) ) { the_row();

					include $elements;

				}

?>

		</div>
	</div>

<?php

			}

?>

</div>

<?php

		}