<?php
/**
 *  Single Row Builder Template
 *
 *  @package poise-theme
 *  @author T24
 *  @version 1.0.0
 */
 
$elements = 'wp-content/themes/poise-theme/inc/elements/_loop.php';

	if ( get_row_layout() == "row_of_one" ) {

		$variation = get_sub_field( 'row_variation' );
		$colour	   = get_sub_field( 'row_background_colour' );

?>
<div class="section <?php echo wp_kses_post( $variation ); ?> <?php echo wp_kses_post( $colour ); ?>">
    <div class="row">
        <?php

			if ( have_rows( 'column' ) ) {

?>
        <div class="col">
            <?php

				while ( have_rows( 'column' ) ) { the_row();

					include $elements;

				}

?>
        </div>
        <?php

			}

?>
    </div>
</div>
<?php

		}