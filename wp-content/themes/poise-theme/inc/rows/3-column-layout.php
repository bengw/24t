<?php
/**
 *  3 Column Row
 *
 *  @package poise-theme
 *  @author T24
 *  @version 1.0.0
 */

$elements = 'wp-content/themes/poise-theme/inc/elements/_loop.php';

	if ( get_row_layout() == "row_of_three" ) {

		$col_width_one   = get_sub_field( 'three_one_width' );
		$col_width_two   = get_sub_field( 'three_two_width' );
		$col_width_three = get_sub_field( 'three_three_width' );
		$variation		 = get_sub_field( 'row_variation' );
		$colour	   		 = get_sub_field( 'row_background_colour' );

?>
<div class="section <?php echo wp_kses_post( $variation ); ?> <?php echo wp_kses_post( $colour ); ?>">
    <?php

			if ( have_rows( 'three_one' ) ) {

?>
    <div class="row">
        <div class="cols sm-12 <?php echo wp_kses_post( $col_width_one ); ?>" data-aos="zoom-in-up" data-aos-duration="500">
            <?php

				while ( have_rows( 'three_one' ) ) { the_row();

					include $elements;

				}

?>
        </div>
        <?php

			} if ( have_rows( 'three_two' ) ) {

?>
        <div class="cols sm-12 <?php echo wp_kses_post( $col_width_two ); ?>" data-aos="zoom-in-up" data-aos-duration="500">
            <?php

				while ( have_rows( 'three_two' ) ) { the_row();

					include $elements;

				}

?>
        </div>
        <?php

			} if ( have_rows( 'three_three' ) ) {

?>
        <div class="cols sm-12 <?php echo wp_kses_post( $col_width_three ); ?>" data-aos="zoom-in-up" data-aos-duration="500">
            <?php

				while ( have_rows( 'three_three' ) ) { the_row();

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